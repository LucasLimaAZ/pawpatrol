@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div style="text-align:center;">
                <img src="{{asset('assets/img/dog-icon.png')}}" width="400px" alt="">
                <hr>
                <h1 class="main-title">{{$dog->name}}</h1>
                <hr>
                <p>
                    Idade: {{$dog->age}} <br>
                    Raça: {{$dog->race->name}} <br>
                    Descrição: {{$dog->race->description}} <br>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection