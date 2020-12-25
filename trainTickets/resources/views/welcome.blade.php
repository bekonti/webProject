<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Tickets</title>
    <link rel="stylesheet" type="text/css" href="../../public/src/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #60eb73;">
<br><br><br>
<div class="container justify-content-center mt-5 text-dark text-center monospace">

    <h1 class="mt-5">Train
        <img src="../../public/src/ico/train_ticket_ico.svg" alt="" style="height: 100px;">
        Tickets
    </h1>
    @if(session('info'))
        <div class="alert alert-danger" role="alert">
            {{ session('info') }}
        </div>
    @endif

    <h1 class="mt-5 serif" style="font-size: 50px;">Hold the train</h1>

    <h2 class="mt-5">Our nation will be back on the rails soon, but until then we've parked our site and you can buy
        tickets directly from our friends at Train Genius. If you need a refund, you'll find the full info
        below.</h2>
    <h2 class="mt-5">Take care, and safe travels.</h2>

    <a href="{{route('base')}}">
        <button class="mt-5 btn px-5 bg-dark" style="color: #60eb73">Buy tickets</button>
    </a>
</div>
</body>
</html>
