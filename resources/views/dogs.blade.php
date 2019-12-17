@extends('layouts.app')
@section('content')

<div class="space32"></div>

<h1 class="main-title">Administrar Cachorros</h1>

<div class="space64"></div>
<div class="row">
    <div class="col-md-10 offset-md-1">
        <table id="dogs">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Idade: </th>
                    <th>Raça: </th>
                    <th>Vacinas: </th>
                </tr>
            </thead>
            <tbody>
                @foreach($dogs as $dog)
                <tr>
                    <td>{{$dog->name}}</td>
                    <td>{{$dog->age}}</td>
                    <td>{{$dog->race}}</td>
                    <td>{{$dog->vaccines}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="{{asset('assets/js/dogs.js')}}"></script>
@endsection