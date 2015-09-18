@extends('layouts/layout')


    {!! Html::script('Scripts/javascript/test.js'); !!}
    
 <style>
/*
  Source at https://github.com/tommymarshall/react-multi-step-form
*/

html, body {
  font-family: "Open Sans", Helvetica, arial;
  font-size: 16px;
  line-height: 1.36;
  max-width: 100%;
  min-height: 100%;
}

body {
  margin: 0;
  padding: 0;
}

body * {
  box-sizing: border-box;
}

.container {
  margin: 20px auto;
  max-width: 400px;
  width: 100%;
}

.btn {
  border-radius: 3px;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  padding: 10px 12px;
  text-align: center;
}
.btn.-default {
  background-color: #fff;
  border: 1px solid #ddd;
  color: #4c5e65;
}
.btn.-default:hover {
  background-color: #eee;
}
.btn.-primary {
  background-color: #2989c6;
  border: 1px solid #2989c6;
}
.btn.-primary:hover {
  background-color: #257ab1;
}

.progress {
  margin-bottom: 20px;
  transition: all 0.2s ease;
}

.progress-step {
  display: block;
  font-size: 12px;
  font-weight: bold;
  margin-bottom: 18px;
  position: relative;
  text-align: center;
  text-transform: uppercase;
  width: 100%;
}

.pull-right {
  float: right;
}

.pull-left {
  float: left;
}

.form-fields {
  list-style: none;
  margin: 0;
  padding: 0;
}
.form-fields > li {
    margin-bottom: 20px;
}

.form-footer {
  border-top: 1px solid #ddd;
  margin-top: 10px;
  padding-top: 20px;
}

.label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 4px;
}

label {
  display: block;
  font-size: 14px;
  font-weight: 600;
  margin-bottom: 4px;
}

.checkbox label, .radio label {
  cursor: pointer;
  display: inline-block;
  font-weight: normal;
  padding: 1px 12px 1px 30px;
  position: relative;
}

.checkbox label input, .radio label input {
  left: 0;
  position: absolute;
  top: 0;
}

input {
  font-size: 16px;
  padding: 8px;
  width: 100%;
}

select {
  font-size: 16px;
  padding: 8px;
}

        </style>
@section('content')
	@if(Session::has('message'))
		<div class="alert alert-dismissable">
		  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		  {{ Session::get('message')}}
		</div>
	@endif

	@if (!empty($data))
	    <div class="media">
	      <a class="pull-left" href="#">
	        <img class="media-object" src="{{ $data[2]}}" alt="Profile image">
	      </a>
	      <div class="media-body">
	        <h4 class="media-heading">{{{ $data[0] }}} </h4>
	        
	      </div>
	    </div>
	    <hr>
	    <a href="{{url('logout')}}">Logout</a>
	    
	    
     <div class="container">
             <div id="registration-form"></div>
        </div>
	@else
		<div class="jumbotron">
		    <p class="text-center">
		      <a class="btn btn-lg btn-primary" href="{{url('login/fb')}}"><i class="icon-facebook"></i> Login with Facebook</a>
		    </p>
		</div>
	@endif
	
	
	

@stop
