@extends('admin.layouts.master')

@section('content')
<h2 style="background-color: #1abc9c; border-radius: 5px; padding: 10px;">Portfolio Description <i style="float: right;" class="fa fa-arrow-down"></i></h2><br>

<div class="row">
	@foreach($datas as $data)
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-info o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-comments"></i>
          </div>
          <div class="mr-5"><h4>{{$data->name}}</h2></div>
          <p>{{str_limit($data->description,200)}}</p>
        </div>
      <a class="card-footer text-white clearfix small z-1" href="">
          <span class="float-left">{{$data->category}}</span>
          <a style="margin: 0;padding: 0;" href="{{route('portfolio.edit',$data->id)}}">
          <span class="float-right btn btn-sm btn-danger">
            <i class="fa fa-edit"></i>
          </span></a>
        </a>
      </div>
    </div>
    @endforeach
  </div>
@endsection