@extends('admin.layouts.master')
@section('content')

<form action="{{route('edit.portfolio.post')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="hidden" name="_method" value="put">
                <input name="id" type="hidden" class="form-control" id="formGroupExampleInput" value="{{$data->id}}">
            </div><div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input name="name" type="text" class="form-control" id="formGroupExampleInput" value="{{$data->name}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Description</label>
                <textarea rows="9" name="description" type="text" class="form-control" id="formGroupExampleInput2">{{$data->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Category</label>
                <input name="category" type="text" class="form-control" id="formGroupExampleInput" value="{{$data->category}}">
            </div>
            
            <input type="submit" class="btn btn-primary btn-block" value="ADD"><br>
        <div class="col-md-3"></div>
</form>
@endsection