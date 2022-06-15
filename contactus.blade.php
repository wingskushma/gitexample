@extends('layouts.master')
@section('title', 'Dashboard')
<h1>Contact Page</h1>

@section('content')
{!! Form::open(['route'=>'register.store']) !!}


<div class="form-group">
    {{ form::label('name','Name')}}
    {{form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
</div>
<br>
<div class="form-group">
    {{ form::label('gender','Gender')}}
    {{ form::radio('male','Male')}} Male
    {{ form::radio('Female','Female', true)}} Female
</div>
<br>
<div class="form-group">
    {{ form::label('profile','Profile')}}
    {{form::select('list',['Software Developer','QA Analyst','Manager','HR'])}}
</div>
<br>
<div class="form-group">
    {{ form::label('dob','Date of Birth')}}
    {{Form::date('dob', \Carbon\Carbon::now())}}
</div>
<br>
{{form::label('skills','Skills Description')}}
<div class="form-group">

    {{form::textarea('body','',['placeholder'=>'Skills Description'])}}
</div>
<br>
<div class="form-group">
    {{ form::label('resume','Resume Upload')}}
    {{Form::file('resume')}}
</div>
<br>

{{Form::submit('Contact For Career', ['class'=>'btn btn-primary'])}}


{!!Form::close()!!}
@stop
