@extends('welcome')
@section('contenido')
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        </h3>

        <div class="blog-post">
        <h2 class="blog-post-title">1° Crear una base de datos</h2>
            <p>Haz clic en "Base de Datos MySQL". Haz clic en el botón de "Crear una nueva base de datos MySQL". Ponle nombre a tu nueva base de datos y clica en "Confirmar". Aparecerá una tabla para gestionar dicha base de datos.</p>
            <img src='img/bd.png' class="card-img-top" style="width: 600px; height: 300px;">
        <h2 class="blog-post-title">2° Configuracion del archivo .env</h2>
            <p>El archivo .env es un archivo de configuracion que esta en todos los frameworks
                de php igual es en el caso de laravel 8, en este archivo de configuracion podemos crear un socket
                de conexion a nuestra MySQL simplemente agregando la informacion correcta en el siguiente apartado.
            </p>
            <img src='img/confi.png' class="card-img-top" style="width: 700px; height: 400px;">
            <p>Una clase de migración contiene dos métodos: up y down. El método up se utiliza para agregar nuevas tablas, columnas o índices a su base de datos, mientras que el método down debe revertir las operaciones realizadas por el método up.

                Dentro de estos dos métodos, puede utilizar el generador de esquemas de Laravel para crear y modificar tablas de forma expresiva. </p>

        <h2 class="blog-post-title">3° Crear una migracion</h2>
            <p>Para crear las migraciones utilizaremos Artisan que es una interfaz de línea de comandos de Laravel.

                El nombre de la tabla debe ir en plural en nuestro caso datos

                php artisan make:migration create_datos_table</p>
                <img src='img/creaMigra.png' class="card-img-top" style="width: 600px; height: 300px;">
                <p>La instrucción creará un archivo en la carpeta de migrations con extensión .php</p>
                <p>Ahora crearemos las columnas de nuestra tabla datos, aquí es donde la clase Blueprint nos permite manipular las consultas como objetos, en nuestro ejemplo crearemos seis campos nombre, apellido paterno, apellido materno, sexo, fecha de nacimiento y correo.</p>
                <img src='img/crea3.png' class="card-img-top" style="width: 700px; height: 500px;">

        <h2 class="blog-post-title">4° Aplicar Migraciones</h2>
            <p>Una vez llenado los campos necesarios en nuestras tablas ejecutamos las migraciones con el comando de artisan migrate.

                php artisan migrate</p>
                <img src='img/aplicar.png' class="card-img-top" style="width: 600px; height: 300px;">
                <p>Artisan automáticamente creará las tablas y toda su estructura de campos en nuestra base de datos.</p>
                <img src='img/ver.png' class="card-img-top" style="width: 600px; height: 300px;">
        <h2 class="blog-post-title">5° Revertir Migraciones</h2>
            <p>Deshacer migracion use el sigueinte comando</p>
            <img src='img/deshacer.png' class="card-img-top" style="width: 600px; height: 300px;">
            <p>Rollback nos permite regresar hasta n versiones de un solo golpe con el siguiente comando</p>
            <h4>php artisan migrate:rolback --step3</h4>
            <p>--step3 -> puede variar el numero dependiendo de las versiones que quieras retroceder</p>




      </div><!-- /.blog-post -->


      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-3 mb-3 bg-light rounded">
          <h4 class="font-italic">Como crear una migracion</h4>
          <img src='img/u.png' class="card-img-top" style="width: 300px; height: 180px;">
        </div>

        <div class="p-3">
          <h4 class="font-italic">TUTORIAL</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="/">Inicio</a></li>
            <li><a href="/migracion">Mi primer migracion</a></li>

          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->


    </div><!-- /.row -->

  </main><!-- /.container -->
@endsection
