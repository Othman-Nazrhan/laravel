@extends('layouts.app')



@section('content')

<!-- message d'error par defuts -->

@if(count($errors))
<div class="alert alert-danger" role="alert">
<ul>
@foreach ($errors ->all() as $message)
<li> {{$message}}</li>
@endforeach
</ul>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col md 12">

        <form action="{{ url('Cvs/'.$cv->id) }}" method="post">
          <input type="hidden" name="_method" value="PUT">
           {{ csrf_field() }}

            <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="{{$cv->title}}" >
            </div>

            <div class="form-group">
            <label for="">Presentation</label>
            <input type="text" name="presentation" class="form-control" value="{{$cv->presentation}}" >
            </div>

            <div class="form-group">
            <input type="submit" class="form-control btn btn-danger" valeur="Update">
            </div>
            
            </from>
        </div>
    </div>
</div>

@endsection