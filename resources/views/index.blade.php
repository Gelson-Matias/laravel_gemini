<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<body class="m-0 p-0 " >
        <div class="d-flex flex-row" style="height: 100vh;">
            <div class="col  d-flex justify-content-center align-items-center"  style="margin-bottom: 10%;width: 100%; display: block; object-fit: cover;">
                <div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8a/Google_Gemini_logo.svg" alt="" srcset="">
                </div>
            </div>
            <div class="col d-flex align-content-stretch flex-wrap" style="background-color: #c0f6ffcc">
               <div class="col d-flex justify-content-center align-items-center"> 
                  <div class="col-10">
                    <div class="p-1" >
                        <div class="p-3 rounded bg-white" >
                         @if (session('text'))
                                 {{ session('text') }} 
                         @endif   
                        </div>          
                     </div>
                    <div class="col">
                        <form method="POST" action="{{route('talk-gemini')}}">
                            @csrf
                            <div class="mb-3 mt-3">
                                <input required type="text" class="form-control rounded-pill" name="urlPhoto" aria-describedby="helpId" placeholder="URL IMG" />
                            </div>
                            
                            <div class="mb-3 mt-3">
                                <input required type="text" class="form-control rounded-pill" name="tellGemini" placeholder="what you to want know ?">
                            </div>
                            <div class="col">
                                <button class="btn btn-primary  col-12 rounded-pill" type="submit">Talk Gemini</button>
                            </div>
                        </form>
                    </div>
                    <div class="col  mt-3">
                        <a href="https://github.com/Gelson-Matia" class=" " style="text-decoration: none">
                            <img src="" alt="" srcset=""> © Gelson Matias
                        </a>
                    </div>
                  </div>
               </div>
            </div>
        </div>
</body>
</html>
