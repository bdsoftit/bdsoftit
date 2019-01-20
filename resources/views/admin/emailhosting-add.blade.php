@extends('admin.layouts.master')
@section('content')


<form action="{{route('emailhosting.add.post')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 style="text-align: center;">Add Email Hosting Pakage</h3>
            <div class="form-group">
                <input name="id" type="hidden" class="form-control" id="formGroupExampleInput" value="">
            </div><div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input name="title" type="text" class="form-control" id="formGroupExampleInput" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Cost</label>
                <input type="text" name="cost" type="text" class="form-control" id="formGroupExampleInput2" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Monthly / Yearly</label>
                <input name="mo" type="text" class="form-control" id="formGroupExampleInput" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 1</label>
                <input name="o1" type="text" class="form-control" id="formGroupExampleInput" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 2</label>
                <input name="o2" type="text" class="form-control" id="formGroupExampleInput" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 3</label>
                <input name="o3" type="text" class="form-control" id="formGroupExampleInput" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 4</label>
                <input name="o4" type="text" class="form-control" id="formGroupExampleInput" value="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Offer 5</label>
                <input name="o5" type="text" class="form-control" id="formGroupExampleInput" value="">
            </div>
            
            <input type="submit" class="btn btn-primary btn-block" value="ADD"><br>
        <div class="col-md-3"></div>
</form>
@endsection