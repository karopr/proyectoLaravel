@extends('adminlte::page')

@section('title', 'Corporación Carranza Gutierrez')

@section('content_header')
        
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
@stop

@section('content')
    
    <div>
        <h1>Fotos</h1>        
    </div>
    <div class="card">
        <br>
        <div class="col-sm-12 col-md-6">
            <form action ="{{route('admin.fotos.create')}}">
                <button type="submit" class="btn btn-outline-info btn-md">Crear foto</button>
            </form>
        </div>
        <div class="card-body">
            <div class="right_col" role="main">
               
                    <div class="title_center">
                      <h3> Fotos <small> del predio</small> </h3>
                    </div>
      
                  <div class="clearfix"></div>
      
                  <div class="row">
                    <div class="col-md-12">
                        <div class="x_content">      
                          <div class="row">
                            @foreach ($fotos as $foto)
                            <div class="col-md-55">
                              <div class="thumbnail">
                                <div class="image view view-first">
                                    <img width="100px" src="../{{ Storage::url($foto->avatar) }}">
                                    <div class="container">
                                        {{$foto->name}}<br>
                                        Cliente: {{$foto->cliente->name}}
                                    </div>
                                    <div class="container">
                                        <div class="container">
                                            <div class="row">
                                                <div class=".col-md-4">
                                                    <form action ="{{route('admin.fotos.edit', $foto)}}">
                                                        <!--<button type="submit" class="btn-primary btn-sm">Editar</button>-->
                                                        <button type="submit" class="btn-primary btn-md">
                                                            <i class="fas fa-edit"></i>
                                                        </button>
                                                    </form>
                                                </div><br>
                                                <div class=".col-md-4">
                                                    <form action ="{{route('admin.fotos.destroy', $foto)}}" method="POST">
                                                        <!--Llamar directiva method porque dentro de form no se puede usar el delete sino solo get y post-->
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn-danger btn-md">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                        </div>
                    </div>
                  </div>
        </div>        
    </div>
@stop

@section('footer')    
    <footer class="main-footer">
        <strong>Copyright &copy;<a>Corporación Carranza Gutierrez</a></strong>
    </footer>
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#clientes').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado, ingrese los datos correctamente",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar",
            "paginate": {
                'next': 'Siguiente',
                'previous': 'Anterior'
            }       
         }
        });
    </script>

<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
@stop
