@extends('layouts.app')
@section('content')

<div class="space32"></div>

<h1 class="main-title">Administrar Cachorros</h1>

<div class="space64"></div>
<div class="row">
    <div style="padding: 2%;" class="shadow-box col-md-10 offset-md-1">
        <table class="table table-striped" id="dogs">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Idade: </th>
                    <th>Raça: </th>
                    <th>Vacinas: </th>
                    <th>Excluir: </th>
                    <th>Editar: </th>
                </tr>
            </thead>
            <tbody>
                @foreach($dogs as $dog)
                <tr id="dog-{{$dog->id}}">
                    <td>{{$dog->name}}</td>
                    <td>{{$dog->age}}</td>
                    <td>{{$dog->race->name}}</td>
                    <td>{{$dog->vaccines}}</td>
                    <td style="text-align:center;">
                        <span id="{{$dog->id}}" onclick="deleteDog(this)" class="delete-button">
                            <i class="fa fa-trash"></i>
                        </span>
                    </td>
                    <td style="text-align:center;">
                        <a href="edit-dog/{{$dog->id}}" class="edit-button">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="{{asset('assets/js/dogs.js')}}"></script>
@endsection