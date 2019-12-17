@extends('layouts.app')
@section('content')

    <div class="space32"></div>

    <h1 class="main-title">Cadastrar Cachorro</h1>

    <div class="space32"></div>

    <form id="dog" class="col-md-6 offset-md-3">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <label for="name">Nome: </label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-4">
                <label for="age">Idade: </label>
                <input type="text" name="age" class="form-control">
            </div>
        </div>

        <div class="space16"></div>

        <div class="row">
            <div class="col-md-12">
                <label for="race_id">Raça: </label>
                <select class="form-control" name="race_id">
                    <option value="1">Pooddle</option>
                </select>
            </div>
        </div>

        <div class="space16"></div>

        <div class="row">
            <div class="col-md-10">
                <label for="vaccines">Vacinas: </label>
                <input type="text" class="form-control" name="vaccines">
            </div>
            <div class="col-md-2">
                <div class="space32"></div>
                <button type="button" class="btn btn-success">+</button>
            </div>
        </div>

        <div class="space16"></div>

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </div>

    </form>

    <script src="{{asset('assets/js/store-dogs.js')}}"></script>

@endsection