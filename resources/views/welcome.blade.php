<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.css">

    </head>
    <body>
        <div class="container">
            <h1>Usuarios</h1>
            
            <hr>
            
            <table class="table table-bordered" id="users">
                <div class="clearfix"></div>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Creado</th>
                        <th>Acción</th>
                    </tr>
                </thead>

               {{--- <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    @endforeach
                </tbody>--}}
            </table>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.js"></script>

        <script>
            $(document).ready(function(){
                $('#users').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "api/users",
                    'columns':[
                        {'data': 'id'},
                        {'data': 'name'},
                        {'data': 'email'},
                        {'data': 'created_at'},
                        {
                            'data': 'action',
                            orderable: false, 
                            searchable: false
                        }
                    ],

                    "language": {
                        "lengthMenu":     "Mostrar _MENU_ registros",
                        "search": "Buscar",
                        "info": "Mostrando página _PAGE_ de _PAGES_",
                        "infoEmpty": "No se encontro ningún usuario",
                        "infoFiltered": " - filtrado de _MAX_ registros",
                        "processing": "Buscando...",
                        "zeroRecords": "No hay registros para mostrar",
                         paginate: {
                            previous: 'Anterior',
                            next:     'Siguiente'
                        },
                        aria: {
                            paginate: {
                                previous: 'previous',
                                next:     'next'
                            }
                        }
                    }//FIN LANGUAGE
                });
            });
        </script>
    </body>
</html>
