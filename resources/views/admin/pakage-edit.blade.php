@extends('admin.layouts.master')
@section('content')

e</a>

<form action="{{route('pakage.edit.post')}}" method="post">
    @csrf
    <div class="row">
        <input type="hidden" name="_method" value="put">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 style="text-align: center;">Edit Pakage</h3>
            <div class="form-group">
                <input type="hidden" name="_method" value="put">
                <input name="id" type="hidden" class="form-control" id="formGroupExampleInput" value="{{$pakage->id}}">
            </div><div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input name="title" type="text" class="form-control" id="formGroupExampleInput" value="{{$pakage->title}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Cost</label>
                <input type="text" name="cost" type="text" class="form-control" id="formGroupExampleInput2" value="{{$pakage->cost}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Monthly / Yearly</label>
                <input name="mo" type="text" class="form-control" id="formGroupExampleInput" value="{{$pakage->details_one}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 1</label>
                <input name="o1" type="text" class="form-control" id="formGroupExampleInput" value="{{$pakage->details_two}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 2</label>
                <input name="o2" type="text" class="form-control" id="formGroupExampleInput" value="{{$pakage->details_three}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 3</label>
                <input name="o3" type="text" class="form-control" id="formGroupExampleInput" value="{{$pakage->details_four}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 4</label>
                <input name="o4" type="text" class="form-control" id="formGroupExampleInput" value="{{$pakage->details_five}}">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 5</label>
                <input name="o5" type="text" class="form-control" id="formGroupExampleInput" value="{{$pakage->details_six}}">
            </div>
            
            <input type="submit" class="btn btn-primary btn-block" value="Edit"><br>
        <div class="col-md-3"></div>
</form>
@endsection