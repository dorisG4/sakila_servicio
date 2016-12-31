<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cine OCD</title>

    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('plugins/chosen/chosen.css')!!}
   

</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin">Cine OCD</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    {!!Auth::user()->username!!}
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        {{-- <li><a href="#"><i class="fa fa-gear fa-fw"></i>Ajustes</a></li>
                        <li class="divider"></li> --}}
                        <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                   
                 <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i>Clientes<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/customers"><i class='fa fa-list-ol fa-fw'></i> Agregar </a>
                                </li>
                                  
                            </ul>
                         
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i>Renta de Peliculas<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/rental"><i class='fa fa-plus fa-fw'></i> Renta </a>
                                </li>
                                <li>
                                    <a href="/admin/payment"><i class='fa fa-plus fa-fw'></i> Lista de Pagos</a>
                                </li>
                                </ul>
                        </li>



                        <li>
                            <a href="#"><i class="fa fa-film fa-fw"></i>Registro Peliculas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/category"><i class='fa fa-plus fa-fw'></i>Categorias</a>
                                </li>
                                 <li>
                                    <a href="/admin/actor"><i class='fa fa-plus fa-fw'></i>Actores</a>
                                </li>
                                 <li>
                                    <a href="/admin/language"><i class='fa fa-plus fa-fw'></i>Idiomas</a>
                                </li>
                                <li>
                                    <a href="/admin/film"><i class='fa fa-list-ol fa-fw'></i> Peliculas</a>
                                </li>
                            </ul>
                        </li>



                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i> Empleados<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/staff"><i class='fa fa-list-ol fa-fwfw'></i> Agregar</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i>Sucursales<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/stores"><i class='fa fa-plus fa-fw'></i>Sucursal</a>
                                </li>
                                 <li>
                                    <a href="/admin/manager"><i class='fa fa-plus fa-fw'></i>Encargados</a>
                                </li>
                               
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i ></i> Inventario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="/admin/inventory"><i class='fa fa-plus fa-fw'></i>Inventario Peliculas</a>
                                </li>
                            </ul>
                        </li>

                         <li>
                            <a href="#"><i ></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class='fa fa-plus fa-fw'></i>Ventas</a>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>
            </div>

     </nav>
        <div id="page-wrapper">
        <br>

            <!-- Mensaje CRUD-->
             <div>                
                  @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                       {{Session::get('message')}}
                    </div>
                  @endif

             </div>
            
            <!-- Errores -->
            @if(count($errors)>0)
                <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   @foreach($errors->all() as $error)
                   <li>{!!$error!!}</li>
                   @endforeach
                </div>
            @endif

        @yield('content')
            
        </div>

    </div>
    

    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}
    {!!Html::script('plugins/chosen/chosen.jquery.js')!!}
    

    @yield('js')

</body>

</html>