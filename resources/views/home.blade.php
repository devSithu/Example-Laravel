<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
 @if
 {session('status')}
 {{session('status')}}
 @endif
<br>
 <a href="{{url('setSingle')}}">
     <button>Set Single Session</button>
 </a>
 <a href="{{url('getSingle')}}">
     <button>Get Single Session</button>
 </a>
</body>
</html>