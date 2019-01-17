@extends('admin.layouts.master')

@section('content')
<h2 style="background-color: #1abc9c; border-radius: 5px; padding: 10px;">News Letter Subscribers <i style="float: right;" class="fa fa-arrow-down"></i></h2><br>


  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($emails as $indexKey => $email)
    <tr>
      <th scope="row">{{$indexKey+1}}</th>
      <td>{{$email->email}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection