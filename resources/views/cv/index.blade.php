@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">

             <!-- message flash -->

        @if(session()->has('success'))
            <div class="alert alert-success">
                       {{session()->get('success')}}
            </div>
        @endif

        <h1>Liste de mes cv</h1>

        <div class="float-right">
          <a href="{{ url('Cvs/create') }}" class="btn btn-success"> Nouveux cv</a>
        </div>

        <table class="table">
        <head>
            <tr>
                <th>Title</th>
                <th>Persentation</th>
                <th>Date de creation</th>
                <th>actions</th>
                
            </tr>
        </head>     

        <body>

            @foreach ($cvs as $cv)
                <tr>
                    <td>{{ $cv->title }}</td>
                    <td>{{ $cv->presentation }}</td>
                    <td>{{$cv->created_at}}</td>
                    <td>

                    <form action="{{  url('Cvs/'.$cv->id)  }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <a href="" class="btn  btn-primary">Details</a>
                    <a href="{{ url('Cvs/'.$cv->id.'/Edit') }}" class="btn btn-light">Editer</a>
                    <button type="submit " class="btn btn-danger"> Suppeimer</button>
                   
                    </form>
                    </td>
                </tr>
                @endforeach
        </body>


        </table>
        </div>
    </div>
</div>


@endsection