@extends('welcome')
@section('contenido')
<main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom">
        </h3>

        <div class="blog-post">
          <h2 class="blog-post-title">Introducción</h2>

          <p>Las migraciones son como el control de versiones de su base de datos, lo que le permite a su equipo modificar y compartir el esquema de la base de datos de la aplicación. Las migraciones generalmente se combinan con el generador de esquemas de Laravel para construir el esquema de la base de datos de su aplicación. Si alguna vez ha tenido que decirle a un compañero de equipo que agregue manualmente una columna a su esquema de base de datos local, se ha enfrentado al problema que resuelven las migraciones de base de datos.

            La fachada Schema de Laravel proporciona soporte independiente de la base de datos para crear y manipular tablas en todos los sistemas de base de datos compatibles con Laravel.</p>
          <hr>
            <h3>En este caso laravel cuenta con los controladores de: </h3>
          <p>MySQL</p>
          <p>SQLite</p>
          <p>SQLServer</p>
          <p>PostgreSQL</p>

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
            <li><a href="/migracion">Mi primer migracion</a></li>


          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->


    </div><!-- /.row -->

  </main><!-- /.container -->
@endsection
