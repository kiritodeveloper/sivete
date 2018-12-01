@extends('layouts.app')

@section('content')

<style type="text/css">
    hr {border-top: 1px solid #000; width:50%;}

        a {color: #000;}

        a:link{text-decoration:none;}

        .box1{background: rgb(76, 175, 80, 0.6);}
        .box2{background: rgb(192, 192, 200, 0.6);}
        .box3{background: rgb(255, 0, 0, 0.6);;}



        #author a{
          color: #fff;
          text-decoration: none;
            
        }
        .center {
            margin-top:50px;   
        }

        .modal-header {
            padding-bottom: 5px;
        }

        .modal-footer {
                padding: 0;
            }
            
        .modal-footer .btn-group button {
            height:40px;
            border-top-left-radius : 0;
            border-top-right-radius : 0;
            border: none;
            border-right: 1px solid #ddd;
        }
            
        .modal-footer .btn-group:last-child > button {
            border-right: 0;
        }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

                <div class="container-fluid">
                <h1 class="text-center">urbanizacion megaterra</h1>
                <hr>
                 <div class="row">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
                 </div>
                    <div class="row text-center">
                      <div class="col-4 box1 pt-4">
                        <a href="tel:+123456789"><i class="fas fa-phone fa-3x"></i>
                        <h3 class="d-none d-lg-block d-xl-block">telefono del encargado</h3>
                        <p class="d-none d-lg-block d-xl-block"></p></a>
                      </div>
                      <div class="col-4 box2 pt-4">
                        <a href=""><i class="fas fa-home fa-3x"></i>
                        <h3 class="d-none d-lg-block d-xl-block">posicionamiento</h3>
                        <p class="d-none d-lg-block d-xl-block"></p></a>
                      </div>
                      <div class="col-4 box3 pt-4">
                        <a href="mailto:test@test.com"><i class="fas fa-envelope fa-3x"></i>
                        <h3 class="d-none d-lg-block d-xl-block">registrar</h3>
                        <p class="d-none d-lg-block d-xl-block"></p></a>
                      </div>
                      <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Registrar</button></div>
                    </div>
                </div>
             <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                            <h3 class="modal-title" id="lineModalLabel"></h3>
                        </div>
                        <div class="modal-body">
                            
                            <!-- content goes here -->
                            <form>
                              <div class="form-group">
                                <label for="text">Nombre</label>
                                <input type="email" class="form-control"  placeholder="nombre">
                              </div>
                              <div class="form-group">
                                <label for="text" placeholder="ci" >CI</label>
                                <input type="text" class="form-control" >
                              </div>
                                <div class="form-group">
                                <label for="text">Direccion</label>
                                <input type="text" class="form-control"  placeholder="direccion">
                              </div>
                                <div class="form-group">
                                <label for="text">Telefono/celular</label>
                                <input type="text" class="form-control"  placeholder="telefono/celular">
                              </div>
                              <div class="form-group">
                                    <label for="text">terreno</label>
                                    <input type="text" class="form-control"  placeholder="terreno asignado">
                                 </div>
                              </div>
                                
                              <div class="form-group">
                                <label for="exampleInputFile">seleccionar documento</label>
                                <input type="file" id="exampleInputFile">
                              </div>
                              <div class="checkbox">
                                <label>
                                  <input type="checkbox"> si los datos son correctos 
                                </label>
                              </div>
                              <button type="submit" class="btn btn-danger">registrar</button>
                            </form>

                        </div>
                    </div>
                  </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    bienvenido
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
