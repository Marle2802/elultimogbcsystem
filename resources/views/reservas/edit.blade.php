@extends('layouts.app')
@section('aside_menu')
@include('layouts.aside')
@endsection
@section('titulo_ventana', 'Actualizar Reserva')

@section('Contenido_app')
<br><br>

<div class="col-sm-8 col-sm-offset-2">
    <a class="btn btn-info col-3" href="/reserva/listar"><i class="bi bi-calendar-month-fill"></i>
        Lista de Reservas</a>
</div>
<br>

<form action="{{ url('reserva/actualizar', $reserva->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-6">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="text-center">Actualizar Reserva</h5>
                </div>
                <div class="row card-body">
                    <div class="form-group col-6">
                        <div class="form-group ">
                            <label for="user_id">ID</label>
                            <select name="user_id" id="user_id" class="form-control" disabled>
                                @foreach ($users as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-6">
                        <label for="fechainicio">Fecha Inicio</label>
                        <input type="date" class="form-control" placeholder="" name="fechainicio"
                            value="{{$reserva->fechainicio}}" required>
                        <small class="text-danger">{{$errors->first('fechainicio')}}</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="fechareserva">Fecha Reserva</label>
                        <input type="date" class="form-control" placeholder="" name="fechareserva"
                            value="{{ $reserva->fechareserva}}" required>
                        <small class="text-danger">{{$errors->first('fechareserva')}}</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="fechafinal">Fecha Final</label>
                        <input type="date" class="form-control" placeholder="" name="fechafinal"
                            value="{{ $reserva->fechafinal}}" required>
                        <small class="text-danger">{{$errors->first('fechafinal')}}</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="fechapagoparcial">Fecha Pago Parcial</label>
                        <input type="date" class="form-control" placeholder="" name="fechapagoparcial"
                            value="{{ $reserva->fechapagoparcial}}" required>
                        <small class="text-danger">{{$errors->first('fechapagoparcial')}}</small>
                    </div>

                    <div class="form-group col-6">
                        <label for="pagoparcial">Pago Parcial</label>
                        <input type="number" class="form-control" placeholder="Ingrese el pago parcial"
                            name="pagoparcial" value="{{ $reserva->pagoparcial}}" required>
                        <small class="text-danger">{{$errors->first('pagoparcial')}}</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="totalpagoparcial">Total Pago</label>
                        <input type="number" class="form-control" placeholder="Ingrese el total de pago parcial  "
                            name="totalpagoparcial" value="{{   $reserva->totalpagoparcial }}" required>
                        <small class="text-danger">{{$errors->first('totalpagoparcial')}}</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="totalservicio">Total Servicios</label>
                        <input id="totalservicio" type="number" class="form-control" placeholder="Ingrese el total servicios"
                            name="totalservicio" value="{{   $reserva->totalservicio }}" required>
                        <small class="text-danger">{{$errors->first('totalservicio')}}</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="pagoadicional">Pago Adicional</label>
                        <input type="number" class="form-control" placeholder="Ingrese el total servicios"
                            name="pagoadicional" value="{{   $reserva->pagoadicional }}" required>
                        <small class="text-danger">{{$errors->first('pagoadicional')}}</small>
                    </div>
                    <div class="form-group col-6">
                        <label for="domo_id">Domo</label>
                        <select name="domo_id" class="form-control" required>

                            @foreach($domos as $value)
                            <option value="{{ $value->id}}" value="{{ $reserva->domo_id }}">{{ $value->nombre }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="id_plan">Plan</label>
                        <select name="id_plan" class="form-control" required>

                            @foreach($planes as $value)
                            <option value="{{ $value->id }}" value="{{ $reserva->id_plan }}">{{ $value->nombre }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label for="estado">Estado</label>
                        <select class="form-control" name="estado" id="estado">

                            @if($reserva->estado == 1)
                            <option value="1" selected>Activo</option>
                            <option value="2" >Inactivo</option>
                            <option value="3">Cancelado</option>
                            @elseif ($reserva->estado == 2)
                            <option value="1" >Activo</option>
                            <option value="2" selected>Inactivo</option>
                            <option value="3">Cancelado</option>
                            @elseif ($reserva->estado == 3)
                            <option value="1" >Activo</option>
                            <option value="2" >Inactivo</option>
                            <option value="3" selected>Cancelado</option>
                            @endif

                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12" style="margin-top: 3%;">
                <button type="submit" class="btn btn-info btn-block">Actualizar</button>
            </div>
        </div>


        <div class="col-6">
            <div class="card shadow">
                <div class="card-header">
                    <h5 class="text-center">Añadir Servicio</h5>
                </div>
                <div class="row card-body">
                    <div class="col-6">
                        <div class="form-group ">
                            <label for="">Nombre</label>
                            <select name="servicios" id="servicios" class="form-control" required>
                                @foreach ($servicios as $value)
                                <option value="{{ $value->id }}">{{ $value->nombre }} ${{ $value->precio }}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button onclick="agregar_servicio()" type="button" class="btn btn-success float-right"><i
                            class="fa-solid fa-plus"></i></button>
                </div>
                <br>
            </div>
            @foreach ($servicioreserva as $servicioid)

            @endforeach
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="tblServicios">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<br><br>



@endsection

@section('scripts')
<script>
    let serviciosD = [''];
    let suma = 0;
    let resta=0;

    function cargarServiciosPlan() {
        const servicios = JSON.parse('{!! json_encode($servicios)!!}')
        console.log('servicios DB',servicios);
        const servicioReserva = JSON.parse('{!! json_encode($servicioreserva) !!}')
        console.log('servicios plan',servicioReserva);
        let serviciosIds = []

        servicioReserva.forEach(servcio => {
            serviciosIds.push(servcio.servicio_id)
        });
        let serviciosMostrar = []
        servicios.forEach(servicio=>{
            if (serviciosIds.includes(servicio.id)) {
                serviciosMostrar.push(servicio)
                serviciosD.push(servicio.id.toString())
                $("#tblServicios").append(`
                    <tr id="tr-${servicio.id}">
                        <td>
                            <input type="hidden" name="servicio_id[]" value="${servicio.id} "/>
                            ${servicio.nombre}
                        </td>
                        <td>
                            ${servicio.precio}
                        </td>

                        <td>
                            <button type="button" class="btn btn-danger" onclick="eliminar_servicio(${servicio.id})"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    <tr>

                `);
                suma = suma + parseInt(precio);
                        console.log(suma)
                        document.getElementById('totalservicio').value = suma;
            }
        })



    }
    cargarServiciosPlan()
    function agregar_servicio(){
                    let servicio_id = $("#servicios option:selected").val();
                    let servicio_text = $("#servicios option:selected").text();
                    let precio_ser = servicio_text.split("$");
                    let precio = precio_ser[1];

                    /* let cantidad = $("#cantidad").val(); */
                    let existe = serviciosD.includes(servicio_id)

                        if (existe) {
                            Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'El servicio ya existe!',
                            showConfirmButton: false,
                            timer: 1500
                        })

                        } else {
                            serviciosD.push(servicio_id)
                            console.log(serviciosD);
                            $("#tblServicios").append(`
                            <tr id="tr-${servicio_id}">
                                <td>
                                    <input type="hidden" name="servicio_id[]" value="${servicio_id} "/>
                                    ${precio_ser[0]}
                                </td>
                                <td>
                                    ${precio}
                                </td>

                                <td>
                                    <button type="button" class="btn btn-danger" onclick="eliminar_servicio(${servicio_id})"><i class="fa-solid fa-trash"></i></button>
                                </td>
                            <tr>

                        `);
                        suma = suma + parseInt(precio);
                        console.log(suma)
                        document.getElementById('totalservicio').value = suma;
                        }


                    /* console.log(caracteristicasD); */
                    }
                function eliminar_servicio(id){
                    const index = serviciosD.indexOf(id.toString())
                    if(index>-1){
                        serviciosD.splice(index, 1);
                        // const precio = document.querySelector('#tr-'+id).children[1]
                        // suma = suma - precio;
                        // console.log(suma)
                        // document.getElementById('totalservicio').value = suma;
                        $("#tr-" + id).remove();
                    }
                        console.log("Nuevo araray",serviciosD);
                }

</script>




@endsection