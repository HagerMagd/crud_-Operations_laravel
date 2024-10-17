<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW USERS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head><link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<body>

<!-- شريط البحث -->
<div class="container my-3">
    <div class="row">
        <div class="col d-flex justify-content-end">
            <form class="d-flex" method="get" action="{{ route('search') }}">
             
                <div class="input-group">
                    <input type="search" name="search" class="form-control" placeholder="Search users" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">
                        <i class="bi bi-search"></i> 
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- جدول المستخدمين -->
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
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      <td>   
        <form method="POST" action="{{route('users.edit',$user->id)}}">
            @method('GET')
            @csrf
            <button type="submit" class="btn btn-success">EDIT</button>
        </form>
      </td>
      <td>
        <form method="POST" action="{{route('users.destroy',$user->id)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- زر حذف جميع البيانات -->
<form method="POST" action="{{route('deleteall')}}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE ALL DATA</button>
</form>

<!-- Bootstrap أيقونات البحث -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

</body>
</html>
