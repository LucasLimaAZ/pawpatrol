@extends('layouts.app')
@section('content')

<div class="space32"></div>

<h1 class="main-title">Administrar Raças</h1>

<div class="space64"></div>
<div class="row">
    <div style="padding: 2%;" class="shadow-box col-md-10 offset-md-1">
        <table class="table table-striped" id="races">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Descrição: </th>
                    <th>Excluir: </th>
                    <th>Editar: </th>
                </tr>
            </thead>
            <tbody>
                @foreach($races as $race)
                <tr id="race-{{$race->id}}">
                    <td>{{$race->name}}</td>
                    <td>{{$race->description}}</td>
                    <td style="text-align:center;">
                        <span id="{{$race->id}}" onclick="deleteRace(this)" class="delete-button">
                            <i class="fa fa-trash"></i>
                        </span>
                    </td>
                    <td style="text-align:center;">
                        <a href="edit-race/{{$race->id}}" class="edit-button">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="{{asset('assets/js/races.js')}}"></script>
@endsection