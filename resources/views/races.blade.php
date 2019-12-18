@extends('layouts.app')
@section('content')

<div class="space32"></div>

<h1 class="main-title">Administrar Raças</h1>

<div class="space64"></div>
<div class="row">
    <div class="col-md-10 offset-md-1">
        <table class="table table-striped" id="races">
            <thead>
                <tr>
                    <th>Nome: </th>
                    <th>Descrição: </th>
                </tr>
            </thead>
            <tbody>
                @foreach($races as $race)
                <tr>
                    <td>{{$race->name}}</td>
                    <td>{{$race->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="{{asset('assets/js/races.js')}}"></script>
@endsection