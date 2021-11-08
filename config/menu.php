<?php
return [
    'catalogo' => ['url' => '/movie'],
    'nueva' => ['title' => 'Nueva Película', 'url' => '/movie/create'],
    'logout' => ['title' => 'Cerrar Sesion' ,'url' => '/logout'],
    'genero' => ['submenu' => [
        'index' => ['title' => 'Mantenimiento Generos' , 'route' => 'genre.index'],
        'nuevo' => ['title' => 'Nuevo Genero', 'route' => 'genre.create']
    ]],
];
