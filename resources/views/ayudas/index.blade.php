@extends('layouts.app')
@section('aside_menu')
@include('layouts.aside')
@endsection
@section('titulo_ventana', 'Ayudas')

@section('Contenido_app')

<div class="card mt-3">
    <div class="card-body">
        <div class="table-responsive-sm">
            <table id="sinbuscar" class="table table-striped">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Instructivo</th>
                        <th>Módulo</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <td>1</td>
                    <td><iframe width="350" height="200" src="https://www.youtube.com/embed/oo9rbWW66Ec" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Dashboard</td>  
                    <td><p>El Dashboard del software facilita la visualización de datos. Este contiene elementos,
                        como gráficos y botones, que están enlazados a las vistas de algunos módulos</p>                       
                </tbody>
                <tbody>
                    <td>2</td>
                    <td><iframe width="350" height="200" src="https://www.youtube.com/embed/y48eLC9JwCA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Usuarios</td>  
                    <td><p>Este módulo permite gestionar la información relacionada a la cuenta de los usuarios del sistema aplicativo GBC System, permitiendo el regsitro y modificación de los datos del usuario.</p>                       
                </tbody>
                <tbody>
                    <td>3</td>
                    <td><iframe width="350" height="200"  src="https://www.youtube.com/embed/RlY6aflpoaw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Roles</td>  
                    <td><p>El software GBC System, permite gestionar la información relacionada con los roles del que se decida crear el administrador. El rol establecido para cada usuario permite el acceso a las diferentes funcionalidades del sistema a través de los permisos</p>                       
                </tbody>
                <tbody>
                    <td>4</td>
                    <td><iframe width="350" height="200"  src="https://www.youtube.com/embed/NYse2OWyJhc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Servicios</td>  
                    <td><p>El módulo Servicios permite al usuario gestionar los servicios necesarios para el disfrute de la reserva y en el se puede registrar los diferentes servicios que contenga el plan junto con la reserva. A este módulo solo tiene acceso el rol de usuario de Super-Administrador y Administrador</p>                       
                </tbody>
                <tbody>
                    <td>5</td>
                    <td><iframe width="350" height="200"  src="https://www.youtube.com/embed/TSaLMIjrnKY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Planes</td>  
                    <td><p>El módulo planes permite al usuario gestionar el contenido de una reserva, que posteriormente se les asignan a las reservas que se realizan a cada cliente.</p>                       
                </tbody>
                <tbody>
                    <td>6</td>
                    <td><iframe width="350" height="200"  src="https://www.youtube.com/embed/zqLZnSF30VQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Agenda</td>  
                    <td><p>En este modulo el usuario gestiona la disponibildad de los servicios que ofrece y controla las fechas y horas para la ejecucón del servicio.</p>                       
                </tbody>
                <tbody>
                    <td>7</td>
                    <td><iframe width="350" height="200" src="https://www.youtube.com/embed/gvCQmRUG9QQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Reservas</td>  
                    <td><p>El modulo de reserva permite gestionar todos los datos necesarios para la asignación correcta de un hospedaje en el Glamping junto con los servicios que desee agregar el usuario.</p>                       
                </tbody>
                <tbody>
                    <td>8</td>
                    <td><iframe width="350" height="200" src="https://www.youtube.com/embed/Mr6FMX9ZJoU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Ventas</td>  
                    <td><p>Este módulo permite gestionar la información relacionada con los costos de la reserva generada anteriormente junto con los servicios adicionales tomados por el cliente.</p>                       
                </tbody>
                <tbody>
                    <td>9</td>
                    <td><iframe width="350" height="200" src="https://www.youtube.com/embed/W3uc_CIKmMM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Domos</td>  
                    <td><p>El módulo de Domo permite al administrador gestionar todo aquello que tiene que ver con la creación de un nuevo Domo.</p>                       
                </tbody>
                <tbody>
                    <td>10</td>
                    <td><iframe width="350" height="200" src="https://www.youtube.com/embed/gFRp-OVivqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>Características</td>  
                    <td><p>El módulo de caracteristícas permite gestionar todos aquello que contiene el Domo en general.</p>                       
                </tbody>
                <tbody>
                    <td>11</td>
                    <td><a href="https://docs.google.com/document/d/1BMjtRKKl4AEBHiEzRgJZjC07dTY-h4iJ/edit">Ayudas - GBC System</a> </td>
                    <td> </td>  
                    <td><p>Manual de usuario para el correcto manejo del software GBC System</p>  

                </tbody>
                
                
            </table>
        </div>
    </div>
</div>
@stop



@section('js')

<script>
    $(document).ready(function() {
        $('#ayuda-table').DataTable({
            "order": [
                [0, "asc"]
            ],
            language: {
                "decimal": "",
                "emptyTable": "No hay datos",
                "info": "Mostrando START a END de TOTAL registros",
                "infoEmpty": "Mostrando 0 a 0 de 0 registros",
                "infoFiltered": "(Filtro de MAX total registros)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar MENU registros",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron coincidencias",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Próximo",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar orden de columna ascendente",
                    "sortDescending": ": Activar orden de columna descendente"
                }
            }
        });
    });
</script>

@endsection