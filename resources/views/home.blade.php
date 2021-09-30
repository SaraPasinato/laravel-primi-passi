<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>
    <header>
        <h1>Hello World</h1>
        <nav>
            <ul>
                @foreach ($links as $l)
                <li>
                    <a href="{{route($l['url'])}}">{{$l['title']}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>
    <main>
        <h3>{{$name}}</h3>
        <ul>
            @foreach ($list as $flower)
            <li>{{$flower ?? ''}}</li>
            @endforeach
        </ul>
    </main>
</body>

</html>

<style>
    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    header {
        height: 20vh;
        width: 1000px;
        margin: 10px auto;
    }

    header nav ul {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    main {
        width: 1000px;
        margin: 0 auto;
    }


    main ul,
    h3 {
        margin-left: 100px;
    }

    ul li {
        list-style-type: none;

    }

    li a {
        text-decoration: none;
        color: #000;
        text-transform: uppercase;
    }

    h1 {
        text-align: center;
        margin: 20px 0;
    }
</style>