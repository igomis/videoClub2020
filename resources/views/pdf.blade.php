<html>
<head>
    <style>
        body{
            font-family: sans-serif;
        }
        @page {
            margin: 160px 50px;
        }
        header { position: fixed;
            left: 0px;
            top: -160px;
            right: 0px;
            height: 100px;
            background-color: #ddd;
            text-align: center;
        }
        header h1{
            margin: 10px 0;
        }
        header h2{
            margin: 0 0 10px 0;
        }
        footer {
            position: fixed;
            left: 0px;
            bottom: -50px;
            right: 0px;
            height: 40px;
            border-bottom: 2px solid #ddd;
        }
        footer .page:after {
            content: counter(page);
        }
        footer table {
            width: 100%;
        }
        footer p {
            text-align: right;
        }
        footer .izq {
            text-align: left;
        }
    </style>
<body>
<header>
    <h1>Cabecera de mi documento</h1>
    <h2>DesarrolloWeb.com</h2>
</header>
<footer>
    <table>
        <tr>
            <td>
                <p class="izq">
                    Desarrolloweb.com
                </p>
            </td>
            <td>
                <p class="page">
                    Página
                </p>
            </td>
        </tr>
    </table>
</footer>
<div id="content">
    <div class="row">
        <div class="col-sm-4">
            <img src="{{$pelicula->poster}}" alt=""/>
        </div>
        <div class="col-sm-8">
            <h2>{{$pelicula->title}}</h2>
            <h4>{{$pelicula->director}}</h4>
            <h4>{{$pelicula->year}}</h4>
            <p><strong>Resumen: {{$pelicula->synopsis}}</strong></p>
            <p><strong>Estado: </strong>Pel.lícula @if ($pelicula->rented)  Actualment llogada @else disponible @endif</p>
            @if ($pelicula->Genre)
                <p><strong>Genero:</strong>{{$pelicula->Genre->title}}</p>
            @endif
        </div>
    </div>
</div>
</body>
</html>

