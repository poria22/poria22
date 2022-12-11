<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body{
            width: 500px;
            margin: auto;
            position: relative;
            top: 200px;
        }

    </style>
</head>
<body>

<table class="table">
  <thead>
      <th>id</th>
      <th>name</th>
      <th>email</th>
  </thead>
    <tbody>
        <tr>

        <form action="{{\route('FinalUpdate',['id'=>$user->id])}}" >
           <td>{{$user->id}}</td>
           <td><input type="text" name="name" value="{{$user->name}}" ></td>
            <td><input type="text" name="email" value="{{$user->email}}"></td>
           <td><button class="btn btn-info">ویرایش</button></td>

         </form>

       </tr>
    </tbody>
</table>
</body>
</html>
