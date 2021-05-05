<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        #meio{
                    width: 95%;
                    
                    margin: 20px auto;
                    
                    border: 1px;
                    border-style: solid;
                    border-color: black;

                    padding: 20px;
                    border-radius: 10px;
                    background-color: beige;
                }
    </style>
    <title> @yield('titulo')-Modulo</title>
</head>
<body>
    <div id="meio">
        <div>
            @yield('content')
        </div>
        <hr>
        <div>
            @yield('content2')
        </div>
        <hr>
        <div>
            @yield('contentRacao')
        </div>
        <hr>
        <div>
            @yield('contentVacina')
        </div>
        <hr>

    </div>
    
    
</body>
</html>