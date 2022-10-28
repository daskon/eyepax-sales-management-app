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
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
     @endif
     <div class="button">
        <!-- Button trigger modal -->
    <button style="float: right;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add New
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form method="POST" action="{{route('new-team.create')}}">
                @csrf
                <div class="mb-3">
                  <input type="text" placeholder="Name" name="name" class="@error('name') is-invalid @enderror" />
                  @error('name')
                    <span class="alert alert-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="email" placeholder="Email" name="email" class="@error('email') is-invalid @enderror" />
                  @error('email')
                    <span class="alert alert-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="number" placeholder="Teliphone" name="tele" class="@error('tele') is-invalid @enderror" />
                  @error('tele')
                    <span class="alert alert-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="text" placeholder="Route Name" name="route" class="@error('route') is-invalid @enderror" />
                  @error('route')
                    <span class="alert alert-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="date" name="joined_date" class="@error('joined_date') is-invalid @enderror" />
                  @error('joined_date')
                    <span class="alert alert-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <textarea name="comment" class="@error('comment') is-invalid @enderror"></textarea>
                  @error('comment')
                    <span class="alert alert-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Insert</button>
                </div>
               </form>
            </div>
        </div>
        </div>
  </div>
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
            <td><a href="">View</a></td>
            <td>
                <a href="">Edit</a>
            </td>
            <td><a href="" >Delete</a></td>
           </tr>
          @endforeach
        </table>
     </div>
   </div>
   <!-- Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>