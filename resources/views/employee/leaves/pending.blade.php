@extends('layouts.app')

@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <br>
   <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <br>
              <p align="left">
  <h2> Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      @foreach($leave as $leave)
      <tr>
        <td>{{ leave-> leaveid}}</td>
        <td>{{ leave-> leavedate}}</td>
        <td>{{ leave-> content}}</td>
        <td>{{ leave-> accept/reject}}</td>
      </tr>
      @endforeach
     
    </tbody>

  </table>
</div>
</div>
</div>

</body>
</html>