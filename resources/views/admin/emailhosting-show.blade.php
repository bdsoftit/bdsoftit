@extends('admin.layouts.master')

@section('content')
<a href="{{route('emailhosting.add')}}" class="btn btn-primary">Add Email Hosting Pakage</a>
<br>
<div class="row">
	 @foreach($pakage as $pakage)

          <div style="margin: 15px;" class="card text-center">
              <div class="card-header">
                 <h2 style="color:#28b56d;"> {{$pakage->title}}</h2>
              </div>
              <div class="card-body">
              <h5 class="card-title" style="color:#de0909;">{{$pakage->cost}}/{{$pakage->details_one}}</h5>
              <h6 style="color:#0b87d0;">{{$pakage->details_two}}</h6>
              <h6 style="color:#0b87d0;">{{$pakage->details_three}}</h6>
              <h6 style="color:#0b87d0;">{{$pakage->details_four}}</h6>
              <h6 style="color:#0b87d0;">{{$pakage->details_five}}</h6>
              <h6 style="color:#0b87d0;">{{$pakage->details_six}}</h6>
              </div>
              <div class="card-footer text-muted">
                  <a style="float: right;" href="{{route('emailhosting.edit',$pakage->id)}}" class="btn btn-success">Edit</a>&nbsp;
                  <form class="form-inline" method="post" action="{{route('emailhosting.delete',$pakage->id)}}">
                  @csrf
                  {{ method_field("DELETE") }}
                <button style="float: right;" type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
                </form>
              </div>
          </div>

      @endforeach
  </div>
@endsection