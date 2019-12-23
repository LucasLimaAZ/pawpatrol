@extends('layouts.app')
@section('content')

<div class="space32"></div>

<div class="row">

    @foreach($dogs as $dog)

    <div class="col-md-3">
        <a href="dogs/{{$dog->id}}">
            <div class="shadow-box-item">
                <div style="text-align:center;">
                    <img src="{{asset('assets/img/dog-icon.png')}}" width="250px" alt="DOG">
                </div>
                <hr>
                <h1 class="main-title">{{$dog->name}}</h1>
                <hr>
                <p style="padding:3%; font-family: 'Nunito';">
                    Idade: {{$dog->age}} <br>
                    Raça: {{$dog->race_name}}
                </p>
            </div>
        </a>
    </div>

    @endforeach

</div>

@endsection