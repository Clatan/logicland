<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogicLand</title>
    <link rel="icon" type="svg+xml" href="{{ asset('asset/logo.svg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jolly+Lodger&display=swap" rel="stylesheet">
    @vite('resources/css/map.css')
    <style>
      html, body {
        margin: 0;
        padding: 0;
        width: 100%;
        overflow-x: hidden; 
        overflow-y: auto;
        background-color: #000; 
      }

      body {
        background: url('{{ asset('asset/spring.svg') }}') no-repeat top left;
        background-size: 100% auto; 
        background-attachment: scroll;
        height: 280vh;
      }
    
      .content {
        position: absolute;
        top: 50px;
        left: 50px;
        color: white;
      }
    </style>

</head>
<body>
    <div class="centered-container">
        <a href="{{ url('/level1') }}" class="">
            <h1 class="text-overlay">Level 1</h1>
        </a>
    </div>
</body>
</html>