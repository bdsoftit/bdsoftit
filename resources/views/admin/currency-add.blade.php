@extends('admin.layouts.master')
@section('content')
<h2 style="background-color: #1abc9c; border-radius: 5px; padding: 10px;">Add Currency <i style="float: right;" class="fa fa-arrow-down"></i></h2><br>
<form action="{{route('currency.add')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-group">
                 <label for="formGroupExampleInput">Currency Name (<small>Capital letter without space</small>)</label>
                <input name="name" type="text" class="form-control" id="formGroupExampleInput" >
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Rate | 1 usd = ??</label>
                <input name="rate" type="text" class="form-control" id="formGroupExampleInput" >
            </div>
            
            <input type="submit" class="btn btn-primary btn-block" value="ADD"><br>
        <div class="col-md-3"></div>
</form>
@endsection