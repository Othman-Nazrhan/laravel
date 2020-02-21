@extends('layouts.app')



@section('content')




<div class="container">
    <div class="row">
        <div class="col md 12">

        <form action="{{ url('store') }}" method="post">
        <!-- token  -->

           {{ csrf_field() }}

            <div class="form-group @if($errors->get('title')) has-error @endif">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title">

            <!-- message error personnaliser  -->

             @if($errors->get('title'))
               @foreach($errors->get('title') as $message )
                   <li>{{ $message }}</li>
               @endforeach
             @endif 

            </div>

            <div class="form-group @if($errors->get('presentation')) has-error @endif">
            <label for="">Presentation</label>
            <input type="text" name="presentation" class="form-control">
            
            @if($errors->get('presentation'))
                 @foreach($errors->get('presentation') as $message )
                    <li>{{ $message }}</li>
                 @endforeach
             @endif 

            </div>

            <div class="form-group ">
            <input type="submit" class="form-control btn btn-primary" valeur="Enregistrer">
            </div>
            
            </from>
        </div>
    </div>
</div>

@endsection