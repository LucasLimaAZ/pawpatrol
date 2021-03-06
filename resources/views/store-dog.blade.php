@extends('layouts.app')
@section('content')

    <div class="space32"></div>

    <h1 class="main-title">Cadastrar Cachorro</h1>

    <div class="space32"></div>

    <div class="shadow-box col-md-8 offset-md-2">
        <form id="dog">
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
                        @foreach($races as $race)
                        <option value="{{$race->id}}">{{$race->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="space16"></div>

            <div class="row">
                <div class="col-md-10">
                    <label for="vaccines">Vacinas: </label>
                    <input type="text" class="form-control" id="vaccine">
                </div>
                <div class="col-md-1">
                    <div class="space32"></div>
                    <button type="button" id="add-vaccine" class="btn btn-success">+</button>
                </div>
                <div class="col-md-1">
                    <div class="space32"></div>
                    <button type="button" id="remove-vaccine" class="btn btn-danger">-</button>
                </div>
            </div>

            <div class="space16"></div>

            <div class="row">
                <input type="hidden" name="vaccines" id="vaccines">
                <div class="col-md-12">
                    <ul id="vaccines-list"></ul>
                </div>
            </div>

            <div class="space16"></div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
            </div>

            <div class="space32"></div>

            <div style="display:none;" id="success">
                <div class="alert alert-success">
                    <p>Cadastrado com sucesso!</p>
                </div>
            </div>

        </form>
    </div>

    <script src="{{asset('assets/js/store-dogs.js')}}"></script>

@endsection