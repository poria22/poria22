<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<title>Document</title>
</head>
<body>
      <form action="{{\route('insert')}}" method="post">
     <h3>insert user:</h3>
     name: <input type="text" name="name">
     email: <input type="text" name="email">

          <button class="btn btn-success">submit</button>
          <hr/>
      </form>
       <table class="table table-hover" >
           <thead>
               <tr>
                   <th>id</th>
                   <th>name</th>
                   <th>email</th>
               </tr>
           </thead>
           @foreach($users as $user)
           <tr>
           <td>{{$user->id}}</td>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <form action="{{\route('delete',['id'=>$user->id])}}" method="get">

           <td><button class="btn btn-danger">حذف</button></td>
           </form>

            <form action="{{\route('update',['id'=>$user->id])}}" method="gets">
           <td><button class="btn btn-info">ویرایش</button></td>
            </form>
           </tr>
           @endforeach
       </table>
      <script src="bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
