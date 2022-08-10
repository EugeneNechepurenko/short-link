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
                <h1>Shorten your links.</h1>
            </div>
            <div class="justify-content-center row text-center">
                <p>Paste a long URL below and we'll shorten it for you.</p>
            </div>
            <div class="justify-content-center row text-center">
                <div class="col-auto">
                    <form method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="link" class="form-control" placeholder="Your long URL here">
                        </div>
                        <button type="submit" class="btn btn-primary">Go!</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="/js/app.js"></script>
</html>
