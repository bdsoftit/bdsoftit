@extends('admin.layouts.master')

@section('content')
<h2 style="background-color: #1abc9c; border-radius: 5px; padding: 10px;">Currency List <i style="float: right;" class="fa fa-arrow-down"></i></h2><br>
<br>
<a href="{{route('currency.add')}}" class="btn btn-primary">Add Currency</a><br>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Rate</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($currency as $indexKey => $currency)
    <tr>
      <th scope="row">{{$indexKey+1}}</th>
      <td>{{$currency->name}}</td>
      <td>{{$currency->rate}}</td>
      <td><a href="{{route('currency.edit',$currency->id)}}" class="btn btn-primary">Edit</a></td>
      
    </tr>
    @endforeach
  </tbody>
</table>

@endsection