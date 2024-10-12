<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW USERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">ADDRESS</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <!-- <th scope="row">{{$user->id}}</th> -->
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>

      <td>   
        
    <form method="POST" action="{{route('crud.edit',$user->id)}}">
    @method('GET')
    @csrf

   
   
    <button type="submit" class="btn btn-success">EDIT</button>
</form>
</td>

      <td>
      <form method="POST" action="{{route('crud.destroy',$user->id)}}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE</button>
</form>

      </td>
    </tr>
 @endforeach
 
  </tbody>
</table>
<form method="POST" action="{{route('deleteall')}}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE ALL DATA</button>
</form>
</body>
</html>