@include('sweetalert::alert')
<!DOCTYPE html>
<html>
<head>
    <title>empleado App</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('empleados') }}">empleado Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('empleados') }}">View All empleados</a></li>
        <li><a href="{{ URL::to('empleados/create') }}">Create a empleado</a>
    </ul>
</nav>

<h1>All the empleados</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>nombre</td>
        
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($empleados as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->nombre }}</td>
         

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the empleado (uses the destroy method DESTROY /empleados/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the empleado (uses the show method found at GET /empleados/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('empleados/' . $value->id) }}">Show this empleado</a>

                <!-- edit this empleado (uses the edit method found at GET /empleados/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('empleados/' . $value->id . '/edit') }}">Edit this empleado</a>
                <form method="PUT" action="{{ route('empleados.destroy', $value->id) }}">
                    @csrf
                    <input nombre="_method" type="hidden" value="DELETE">
                    <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
  
    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var nombre = $(this).data("nombre");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this record?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>
</body>
</html>