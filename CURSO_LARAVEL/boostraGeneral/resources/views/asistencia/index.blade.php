@extends('layouts.plantilla')
@section('title','Boostrap')

@section('script')
    <script src="{{ asset('js/app1.js') }}" type="module"></script>
    <script src="{{ asset('js/appasitencia.js')}}" ></script>
    <script src="{{ asset('js/general.js') }}" ></script>
@endsection

@section('content')
    <main class="container-fluid vh-100 alto-100 "> 
        <div class="container">
            <div class="row  py-3 px-3">
                <div class="h-100 col-12 col-xxl-3 col-xl-3 col-lg-3 col-md-12 col-sm-12 px-0  ">
                    <div class="h-100 col-12 col-sm-12 px-3 py-4">
                        <label class=" py-2 fs-2  "><b>Semestre</b></label>
                        <select class="form-select form-select-sm sm-1 " id="select-semestre"   aria-label=".form-select-sm example">
                            
                        </select>
                    </div>
                </div>
                <div class=" h-100 col-12 col-xxl-9 col-xl-9 col-lg-9 col-md-12 col-sm-12 ">
                    <div class="row">
                        <div class="h-100 col-12 col-xl-6 bcolor-principal py-2 ">
                            <p class="text-light rounded text-center mb-0">
                                Asistencia del Profesor
                            </p>
                            <!--Scrip de asistencia de reloj y ellamos ala libreria que me permitira agarrar la hora-->
                            <h2 class="text-center color-cuarto" id="clock"></h2>
                            <div class="h-100 col-12 col-sm-12 text-center my-2 mx-2 d:flex">
                                <button type="button" class="btn  btn-success "  >Marcar Asistencia:Entrada/Salida</button>
                                <a href="#" class="mx-2 fs-6 fw-bold color-cuarto incognita-Ayuda">Ayuda  <i class="fa-regular fa-question fa-regulaincognita"></i></a> 
                            </div>
                        </div>
                        <div class="h-100 col-12 col-xl-6  bcolor-segundario text-center">
                            <p class="text-light rounded text-center mb-0 ">
                                Asistencia del Alumno
                            </p>
                            
                            <button type="button"  class="btn  btn-warning text-light  my-2  "  >Tomar Asistencia Alumnos</button>
                            <button type="button" class="btn   btn-success my-2 " >Solicitar Recuperacion/Justificacion</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="h-100 col-12 col-sm-12  px-0 text-center my-2 ">
                            <div class="h-100 col-12 ">
                              <button type="button "  class=" btn btn-primary my-1 fw-bold  text-light " >P:PUNTUAL</button>
                              <button type="button "  class="btn btn-primary my-1 fw-bold  text-light " >T:TARDANZA(MIN)</button>
                              <button type="button "  class="btn  btn-primary  my-1 fw-bold  text-light "  >F:FALTA</button>
                              <button type="button "  class="btn  btn-primary  my-1 fw-bold  text-light "  >N.N:N.N</button>
                              <button type="button "  class="btn  btn-primary my-1 fw-bold  text-light "  >REPORTE</button>
                            </div>
                        </div>
                    
                    </div>        
                </div>
            </div>
            <div class="container text-center  "> 
                <div class="row ">
                    <div class="col-sm-9 ">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="acord accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <b class="fs-4 fw-bold">Enero</b>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                            <article>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td scope="col">Dia</td>
                                                            <td scope="col">Curso</td>
                                                            <td scope="col">Horario</td>
                                                            <td scope="col">Marcacion</td>
                                                            <td scope="col">Est</td>
                                                         </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">

                                                    </tbody>
                                                </table>
                                            </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 row-margin " >
                        <div class=" y-4 my-1 contenedor-asistencia border-resumen rounded" >
                            <div class="card-body ">
                                <p class="fs-6 text-light align-center fw-bold  " ><b>Resumen de Asistencia del Semestre</b><p>
                                <p class="fs-3 p-color  "><b>P:</b>13 <b>T:</b>1  <b>F</b>:0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


