# Pacakge Sweet Alert For Laravel 5

Cara install  ?

1. ketik composer require rezaar/larasweetalert dev-master di command prompt 
2. register service provider dan facade nya rezaar\larasweetalert\LarasweetalertProvider::class (provider) ,'sweet' => rezaar\larasweetalert\LarasweetalertFacade::class (facade)
3. tambah kan script berikut di autload psr4 di composer.json anda "rezaar\\larasweetalert\\" : "vendor/rezaar/larasweetalert/src", buka command prompt ketik composer dumpautoload
4. download plugin sweetalert di [sini](https://github.com/t4t5/sweetalert/archive/master.zip)
5. import js dan css nya di layout anda `<script src="/sweetalert/dist/sweetalert.min.js"></script>` , `<link rel="/sweetalert/stylesheet" type="text/css" href="dist/sweetalert.css">`


cara penggunaan :

basic : 
`<?php echo sweet::alert(['title' => 'this title' , 'text' => 'Hello World' ,'type' => 'success']) ?>` atau `{!! sweet::alert(['title' => 'this title' , 'text' => 'Hello World' ,'type' => 'success']) !!}`

