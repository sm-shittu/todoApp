<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

</head>
<body>
<div class="container col-sm-8 col-sm-offset-2">
    <a class="btn btn-success btn-block" href="/create">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Completed?</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todos as $index=>$todo)

            <tr>
                <td>{{$index+1}}</td>
                <td>{{$todo->name}}</td>
                <td>{{$todo->completed ? 'Yes' : 'No'}}</td>
                <td><a class="label label-warning" href="/edit/{{$todo->id}}">Edit</a></td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>
</body>
</html>
