<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/Style.css">
    <title>HOME</title>
</head>
<body>

    <nav>
        <div><h1> Ciao {{$nome}} !</h1></div>
        <div class="link-container">
            <ul class="link-list">
                @foreach($links as $link)
                <li><a href="{{route($link)}}">{{$link}}</a></li>
                @endforeach
            </ul>
                
        </div>
    </nav>

    <hr>
    

    
    
    
    
    

</body>
</html>