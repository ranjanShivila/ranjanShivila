<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is user - dashboard</h1>
    <h2>this is for user</h2>
@php
$users = DB::table('deatils')->get();
//  echo $users;
 foreach ($users as $user) {
     echo $user->name;
 }

@endphp

<p>this is my name -{{$user->name}}</p>
<img src="{{$user->avatar}}">
    <button><a href={{route('flush')}}>log out</a> </button>
</body>
</html>


