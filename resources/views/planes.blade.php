@extends('adminlte::page')

@section('title', 'Planes')

@section('content_header')
    <h1>Planes</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <div class="co col-md-6 float-left">
                                <a data-toggle="modal" data-target="#modal-agregar" class="btn btn-success btn-sm float-left"  data-placement="left" >
                                  {{ __('Agregar') }}
                                  {{-- class="btn btn-success" data-toggle="modal" data-target="#modal-agregar"> --}}
                                </a>
                            </div>
                            <div class="co col-md-6 float-right">
                                <a href={{ route('admin.home') }} class="btn btn-primary btn-sm float-right"  data-placement="left" >
                                    {{ __('Volver') }}
                                    {{-- class="btn btn-success" data-toggle="modal" data-target="#modal-agregar"> --}}
                                  </a>
                            </div>
                        </div>
                    </div>


                            <!-- MODAL AGREGAR -->
                            <div class="modal fade" id="modal-agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Agregar - PLan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form  action="{{ route('planes.store') }}"  method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="PLAN_NOMBRE">Nombre</label>
                                                            <input type="text" class="form-control" id="PLAN_NOMBRE" placeholder="Ingrese el Nombre del Plan" name="PLAN_NOMBRE">
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="PLAN_SUBIDA">Subida</label>
                                                            <input type="TEXT" class="form-control" id="PLAN_SUBIDA" placeholder="Ingrese la Subida del plan" name="PLAN_SUBIDA">
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="plan_TELF">Bajada</label>
                                                            <input type="text" class="form-control" id="PLAN_BAJADA" placeholder="Ingrese la Bajada del plan" name="PLAN_BAJADA">
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="plan_TELF2">Contencion</label>
                                                            <input type="text" class="form-control" id="PLAN_CONTENCION" placeholder="Ingrese el telefono secundario del plan" name="PLAN_CONTENCION">
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="PLAN_COSTO">Costo</label>
                                                            <input type="text" class="form-control" id="PLAN_COSTO" placeholder="Ingrese el Costo del plan" name="PLAN_COSTO">
                                                        </div>
                                                    </div>
                                                    <div class="col col-md-4">
                                                        <div class="form-group">
                                                            <label for="PLAN_PRECIO">Precio</label>
                                                            <input type="text" class="form-control" id="PLAN_PRECIO" placeholder="Ingrese EL Precio del Plan" name="PLAN_PRECIO">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="form-group">
                                                    <label for="SATELITE">Proveedor</label>
                                                    <select id="SELECT_PROVEEDOR_MA" name="SELECT_PROVEEDOR" class="form-control">
                                                        <option selected>Escoga el Satelite...</option>
                                                        @forelse($proveedores as $proveedor)
                                                            <option value="{{$proveedor->id}}">{{$proveedor->RAZON}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div> --}}

                                                <div class="form-group">
                                                    <label for="SATELITE">Satelite</label>
                                                    <select id="SELECT_SATELITE" name="SELECT_SATELITE" class="form-control">
                                                        <option selected>Escoga el Satelite...</option>
                                                        @forelse($satelites as $satelite)
                                                            <option value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="REVENDEDOR">Revendedor</label>
                                                    <select id="SELECT_REVENDEDOR" name="SELECT_REVENDEDOR" class="form-control">
                                                        <option selected>Escoga el Revendedor...</option>
                                                        @forelse($revendedores as $revendedor)
                                                            <option value="{{$revendedor->id}}">{{$revendedor->nombre}}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>


                                            </form>



                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- Tabla de datos --}}
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Subida</th>
                                    <th scope="col">Bajada</th>
                                    <th scope="col">Contencion</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @forelse ($planes as $plan)
                                        <tr>
                                            <td>
                                                <a href="{{route('planes.details', $plan->id)}}"> {{ ucfirst($plan->plan_NOMBRE) }}</a>
                                            </td>
                                            <td>{{ $plan->plan_SUBIDA }}</td>
                                            <td>{{ $plan->plan_BAJADA }}</td>
                                            <td>{{ $plan->plan_CONTENCION }}</td>
                                            <td>{{ $plan->plan_PRECIO   }}</td>
                                            <td>
                                                {{-- EDITAR  --}}
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-editar-{{ $plan->id  }}">
                                                    Editar
                                                </button>
                                                {{-- MODAL EDITAR --}}
                                                <div class="modal fade" id="modal-editar-{{ $plan->id  }}"        aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Editar - plan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <form  action="{{route('planes.update',$plan->id ) }}"  method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <div class="row">
                                                                        {{-- NOMBRE --}}
                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="PLAN_NOMBRE">Nombre</label>
                                                                                <input type="text" class="form-control" id="PLAN_NOMBRE" placeholder="Ingrese el Nombre del Plan" name="PLAN_NOMBRE" value="{{$plan->plan_NOMBRE}}">
                                                                            </div>
                                                                        </div>
                                                                        {{-- SUBIDA --}}
                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="PLAN_SUBIDA">Subida</label>
                                                                                <input type="text" class="form-control" id="PLAN_SUBIDA" placeholder="Ingrese la Subida del plan" name="PLAN_SUBIDA" value="{{$plan->plan_SUBIDA}}">
                                                                            </div>
                                                                        </div>
                                                                        {{-- BAJADA --}}
                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="plan_TELF">Bajada</label>
                                                                                <input type="text" class="form-control" id="PLAN_BAJADA" placeholder="Ingrese la Bajada del plan" name="PLAN_BAJADA" value="{{$plan->plan_BAJADA}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        {{-- CONTENCION --}}
                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="plan_TELF2">Contencion</label>
                                                                                <input type="text" class="form-control" id="PLAN_CONTENCION" placeholder="Ingrese el telefono secundario del plan" name="PLAN_CONTENCION" value="{{$plan->plan_CONTENCION}}">
                                                                            </div>
                                                                        </div>
                                                                        {{-- COSTO --}}
                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="PLAN_COSTO">Costo</label>
                                                                                <input type="text" class="form-control" id="PLAN_COSTO" placeholder="Ingrese el Costo del plan" name="PLAN_COSTO" value="{{$plan->plan_COSTO}}">
                                                                            </div>
                                                                        </div>
                                                                        {{-- PRECIO --}}
                                                                        <div class="col col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="PLAN_PRECIO">Precio</label>
                                                                                <input type="text" class="form-control" id="PLAN_PRECIO" placeholder="Ingrese EL Precio del Plan" name="PLAN_PRECIO" value="{{$plan->plan_PRECIO}}">
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        {{-- SATELITE --}}
                                                                        <div class="col col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="SELECT_SATELITE_ME">Satelite</label>
                                                                                <select id="SELECT_SATELITE_ME" name="SELECT_SATELITE_ME" class="form-control">
                                                                                    <option selected>Escoga el Satelite...</option>
                                                                                    @forelse($satelites as $satelite)
                                                                                        @if ($plan->SATELITE_ID == $satelite->id)
                                                                                            <option selected value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                                                        @else
                                                                                            <option  value="{{$satelite->id}}">{{$satelite->SAT_NOMBRE}}</option>
                                                                                        @endif
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        {{-- REVENDEDOR --}}
                                                                        <div class="col col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="SELECT_REVENDEDOR_ME">Revendedor</label>
                                                                                <select id="SELECT_REVENDEDOR_ME" name="SELECT_REVENDEDOR_ME" class="form-control">
                                                                                    <option selected>Escoga el Revendedor...</option>
                                                                                    @forelse($revendedores as $revendedor)
                                                                                        @if ($plan->RESELLER_ID == $revendedor->id)
                                                                                            <option selected value="{{$revendedor->id}}">{{$revendedor->nombre}}</option>
                                                                                        @else
                                                                                            <option  value="{{$revendedor->id}}">{{$revendedor->nombre}}</option>
                                                                                        @endif
                                                                                    @empty
                                                                                    @endforelse
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                {{-- Eliminar --}}
                                                {{-- form destroy --}}
                                                <form action="{{ route('planes.destroy', $plan) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                </form>

                                            </td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="5">No hay datos</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                            <div class="card-footer">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@stop

@section('css')
@stop

@section('js')
    <script>
        // //CONSTANTES MODAL AGREGAR
        // const proveedorSelectMA = document.getElementById('SELECT_PROVEEDOR_MA');
        // const selectSatMA = document.getElementById('SELECT_SAT_MA');

        // //CONSTANTES MODAL EDITAR
        // const selectProveedoresME = document.querySelectorAll('.select_proveedor');
        // const selectSatelitesME = document.querySelectorAll('.select_satelite');

        // // console.log(SELECT_PROVEEDOR_MA);
        // // console.log(SELECT_SAT_MA);
        // // console.log(SELECT_PROVEEDOR_ME);
        // // console.log(SELECT_SAT_ME);

        // //MODAL AGREGAR
        // proveedorSelectMA.addEventListener('change', () => {
        //     const proveedorId = proveedorSelectMA.value;
        //     fetch(`/planes_satelites?PROVEEDOR_ID=${proveedorId}`)
        //     .then(response => response.json())
        //     .then(satelites => {
        //         console.log(satelites)

        //         // Limpiar opciones anteriores
        //         selectSatMA.innerHTML = '<option value="">Seleccione un Satelite</option>';
        //         // Si no se ha seleccionado un satélite, salir del listener
        //         if (!proveedorId) {
        //             return;
        //         }
        //         // Agregar nuevas opciones
        //         satelites.forEach(sat => {
        //             const option = document.createElement('option');
        //             option.value = sat.id;
        //             option.text = sat.SAT_NOMBRE;
        //             selectSatMA.add(option);
        //         });
        //     });
        // });

        // //MODAL EDITAR 123
        // selectProveedoresME.forEach(select_proveedor => {
        //     select_proveedor.addEventListener('change', function() {
        //         selectSatelitesME.forEach(select_satelite => {
        //             actualizarSatelites(select_proveedor,select_satelite)
        //         });
        //     });
        // });
        // function actualizarSatelites(select_proveedor,select_satelite) {
        //     select_satelite.innerHTML = '<option value="">Seleccione un Satelite</option>';

        //     select_satelite.disabled = false;
        //     const proveedorIdME = select_proveedor.value
        //     if (!proveedorIdME) {
        //         return;
        //     }
        //     fetch(`/planes_satelites?PROVEEDOR_ID=${proveedorIdME}`)
        //     .then(response => response.json())
        //     .then(satelites => {
        //         console.log(satelites)
        //         select_satelite.disabled = false;
        //         satelites.forEach(satelite => {
        //             const option = document.createElement('option')
        //             option.value = satelite.id;
        //             option.textContent = satelite.SAT_NOMBRE;
        //             select_satelite.appendChild(option);
        //         });
        //     });
        // }



    </script>
@stop
