<!DOCTYPE html>
<html>
<head>
    <title>{{$pageTitle}}</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

</head>
<body>
<div class="container col-sm-8 col-sm-offset-2">
    <form class="form-horizontal" role="form" action="/update" method="post">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$todo->id}}">
        <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Name</label>
            <div class="col-lg-10">
                <input type="text" name="name" class="form-control"  placeholder="Name" value="{{$todo->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail1" class="col-lg-2 control-label">Status</label>
            <div class="col-lg-10">
                <input type="checkbox" name="completed" @if($todo->completed==1){{'checked'}}@endif> Completed?
            </div>
        </div>




        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
