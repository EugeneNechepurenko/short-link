<?php
	
	use App\Models\Link;
	use Illuminate\Support\Facades\Route;
	use Illuminate\Http\Request;
	use Hashids\Hashids;
	
	Route::get('/', function () {
		return view('home');
	});
	
	Route::post('/', function (Request $request) {
		$long = $request->input('link');
		$shortURL = Link::where('long', $long)->first();
		$short_val = '';
		if($shortURL){
			$short_val = $shortURL->short;
		}
		else{
			$hashids = new Hashids('AshAllenDesign\ShortURL', 5, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890');
			$ID = 0;
			if ($lastInserted = Link::latest()->select('id')->first()) {
				$ID = $lastInserted->id;
			}
			do {
				$ID++;
				$key = $hashids->encode($ID);
			} while (Link::where('short', $key)->exists());
			Link::create([
				'long' => $long,
				'short' => $key,
				'clicks' => 0,
			]);
			$short_val = $key;
		}
		return view('result',[
			'long'=>$long,
			'short_val'=>$short_val,
		]);
	});
	
	Route::get('/s/{short_val}', function (Request $request,$short_val) {
		$shortURL = Link::where('short', $short_val)->firstOrFail();
		if($shortURL) {
			$shortURL->clicks = (int)$shortURL->clicks + 1;
			$shortURL->save();
			return redirect($shortURL->long);
		}
		return response('404',404);
	})->name('short-url');
	
	Route::get('/total-click/{short_val}', function (Request $request,$short_val) {
		$shortURL = Link::where('short', $short_val)->firstOrFail();
		if($shortURL) {
			$total = $shortURL->clicks;
			return view('total-clicks',[
						'total'=>$total,
			]);
		}
		return response('404',404);
	})->name('total-clicks');