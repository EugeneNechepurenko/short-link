<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-2ZKE5942R6"></script>
        <script>
		    window.dataLayer = window.dataLayer || [];
		    function gtag(){dataLayer.push(arguments);}
		    gtag('js', new Date());

		    gtag('config', 'G-2ZKE5942R6');
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-229577575-1">
        </script>
        <script>
		    window.dataLayer = window.dataLayer || [];
		    function gtag(){dataLayer.push(arguments);}
		    gtag('js', new Date());

		    gtag('config', 'UA-229577575-1');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('SEO')
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="antialiased d-flex flex-column h-100 justify-content-center position-relative">
        <div class="container">
            <div class="justify-content-center row text-center">
                <h1>Your shortened URL</h1>
            </div>
            <div class="justify-content-center row text-center">
                <p>Copy the shortened link and share it in messages, texts, posts, websites and other locations.</p>
            </div>
            <div class="justify-content-center row text-center">
                <div class="col-auto">
                        <div class="mb-3">
                            <input id="link_for_copy" type="text" class="form-control link_for_copy" value="{{route('short-url',$short_val)}}">
                        </div>
                        <a class="btn btn-primary copy_link">Copy URL</a>
                    <p>Long URL: {{$long}}</p>
                    <p>Track the <a href="{{route('total-clicks',$short_val)}}">total of clicks</a> in real-time from your shortened URL.</p>
                    <p>Create other <a href="/">shortened URL.</a></p>
                </div>
            </div>
        </div>
    </body>
    <script src="/js/app.js"></script>
</html>
