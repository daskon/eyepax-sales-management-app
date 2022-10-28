<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Team Info</title>
     <!-- Styles -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
   <div class="container">
     <nav class="navbar bg-light">Sales Team</nav>
     <div class="button">
        <button type="submit" class="btn btn-primary mb-3" style="float: right;">Add New</button>
     </div>
     <div class="table">
        <table class="table table-striped">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Teliphone</th>
            <th>Current Route</th>
            <th colspan="3">Operations</th>
          </tr>
          @foreach ($data as $item)
           <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->tele}}</td>
            <td>{{$item->joined_date}}</td>
            <td>View</td>
            <td>Edit</td>
            <td>Delete</td>
           </tr>
          @endforeach
        </table>
     </div>
   </div>
   <!-- Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>