<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Visita Lerma</title>
	@PWACRIZPRZ
</head>
<body>
	
  @extends('pagina.header')
	@section('contenido')


	<div class="pc">
	<!--=================================================
	=            Seccion Actividad principal            =
	==================================================-->
	<div class="container" style="text-align: center; padding-right: 0px;padding-left: 0px">
	 <!--breadcumbs-->
    <section class="container">
      <ol class="breadcrumb bg-white">
        <li class="breadcrumb-item"><a href="{!!URL::to('/')!!}">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pueblo con encantó</li>
        </ol>
    </section>
    <!--what to do?-->

<!--Nueva Sección-->
<section>
        <div class="container my-md-5">
          <div class="row row-cols-1 row-cols-md-3">
            <div class="col mb-4">
              <div class="card-content">
                <h1 ALIGN="left">PUEBLO CON ENCANTÓ </h1>
		<div > 
              <hr class="float-left" style="
              content:'';left:1rem;top:4rem;margin:10px auto;width:25%;height:3px;background:#ed1a38">
            </div><br>
                <p ALIGN="justify">A continuaci&oacute;n se muestran algunos lugares  que puedes visitar en el Municipio de Lerma, te fascinar&aacute;..</p>
                <a href="{{ url('mapa') }}" class="btn btn-info btn-info">Ubicación de actividades</a>
              </div>
            </div>
  
     
          @foreach($imgPrincipal as $img)
            <div class="col mb-4">
              <div class="card shadow">
                <a href="{{route('conoce_lerma_actividades',$img->nombre)}}"><img src="{{ asset('foto_actividades/'.$img->foto) }}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h4 class="card-title">{{$img->nombre}}</h4>
                  <p class="card-text" ALIGN="justify">{{$img->detalle}}...</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
    </section>
    <!--footer-->

	
	</div>
	</div>

@stop

</body>
</html>