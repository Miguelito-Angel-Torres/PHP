@extends('layouts.plantilla')
@section('title','Boostrap')

@section('script')
    <script src="{{ asset('js/api.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" type="module"></script>
    <script src="{{ asset('js/general.js') }}"></script>
@endsection
@section('content')
    <main class="container-fluid vh-100 alto-100 "> 
        <div class="container">
            <div class="d-flex justify-content-center row py-3 px-3">
                <div class="h-100 col-12 col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 px-0  ">
                    <div class="h-100 col-12 col-sm-12 px-3 py-4">
                        <label class=" py-2 fs-2  "><b>Semestre</b></label>
                        <select class="form-select form-select-sm sm-1 "   aria-label=".form-select-sm example">
                            <option selected disabled>Seleccione periodo</option>
                            <option value="2022-1">2022-1</option>
                            <option value="2022-2">2022-2</option>
                            <option value="2022-3">2022-3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="container text-center  "> 
                <div class="row ">
                    <div class="col-sm-12 ">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="acord accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <b class="fs-4 fw-bold">Octubre</b>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <section class="crud">
                                            @includeif('partials.errors')
                                            <article>
                                                <h3 class="crud-title fs-4 fw-bold  text-black-50">AGREGACION DE ALUMNOS</h3>
                                                <form action="{{route('alumnos.store')}}" method="Post" class="crud-form  contact-form row g-3">
                                                    @csrf
                                                    @include('alumnos.form')
                                                    
                                                </form>

                                            </article>    
                                        </section>
                                    
                                    
                                    </div>
                                </div>

                            
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="acord1 accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <b class="fs-4 fw-bold">Diciembre</b>
                                  </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                  <div class="accordion-body">
                                    <section class="crud">
                                        @includeif('partials.errors')
                                        <article>
                                            <h3 class="crud-title1 fs-4 fw-bold  text-black-50">AGREGACION DE ALUMNOS</h3>
                                            <form action="" class="crud-form1  contact-form1 row g-3">
                                                @csrf
                                                @include('alumnos.formA')
                                                
                                            </form>
                                        </article>    
                                    </section>
                                  </div>
                                </div>
                            </div>
                            

                        </div>

                        

                        
                        


                        @if(Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{Session::get('success')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <article  class="article-table  mt-5  table-responsive-xxl">
                            <table  class="table  crud-table  table-bordered  border-dark  caption-top ">
                                <caption><b class="fs-3 ">Lista de Alumnos Api Prueba</b></caption>
                                
                                <thead class="table-dark text-uppercase  fs-5">
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Dni</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Bloque</th>
                                    <th scope="col">Actitud</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">Mes</th>
                                    <th scope="col">Acciones</th>
                                </thead>
                                <tbody class="table-group-divider ">
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                <nav aria-label="Page navigation example "  >
                                    <ul class="pagination " id="pagination-wrapper" >
                                    
                                    </ul>
                                </nav>
                                
                            </div>
                                
                                
                        </article>


                        <article  class="article-table  mt-5  table-responsive-xxl">
                            <table  class="table  crud-table  table-bordered  border-dark  caption-top ">
                                <caption><b class="fs-3 ">Lista de Alumnos</b></caption>
                                
                                <thead class="table-dark text-uppercase  fs-5">
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Dni</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Bloque</th>
                                    <th scope="col">Actitud</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">Mes</th>
                                    <th scope="col">Acciones</th>
                                </thead>
                                <tbody class="table-group-divider ">
                                    @foreach($alumnos as $alumno)
                                        <tr class = "bg-primary bg-gradient  bg-opacity-50 text-center fs-5 fw-bold bcolor-principal">
                                            <td class="name">{{$alumno->name}}</td>
                                            <td class="apellido">{{$alumno->apellido}}</td>
                                            <td class="edad">{{$alumno->edad}}</td>
                                            <td class="dni">{{$alumno->dni}}</td>
                                            <td class="correo">{{$alumno->correo}}</td>
                                            <td class="telefono">{{$alumno->telefono}}</td>
                                            <td class="bloque">{{$alumno->bloque->bloque}}</td>
                                            <td class="actitud">{{$alumno->actitude->actitud}}</td>
                                            <td class="semestre">{{$alumno->semestre}}</td>
                                            <td class="mes">{{$alumno->mes}}</td>
                                            <td >
                                                <a href="{{route('alumnos.edit',$alumno)}}" class="edit  btn btn-primary btn-lg text-white">Editar</a>
                                                <form action="{{route('alumnos.destroy',$alumno)}}"  method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="delete  btn btn-danger btn-lg text-white" onclick="eliminar({{$alumno->id}})" type="submit" onclick="return confirm('Deseas eliminar el alumno con el id: ' + {{$alumno->id}} + ' ?')">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $alumnos->links() !!}  
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


