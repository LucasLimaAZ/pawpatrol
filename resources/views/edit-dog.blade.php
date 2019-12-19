@extends('layouts.app')
@section('content')

    <div class="space32"></div>

    <h1 class="main-title">Editar Cachorro</h1>

    <div class="space32"></div>

    <div class="shadow-box col-md-8 offset-md-2">
        <form id="dog">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <input type="hidden" value="{{$dog->id}}" name="id">
                    <label for="name">Nome: </label>
                    <input type="text" value="{{$dog->name}}" class="form-control" name="name">
                </div>
                <div class="col-md-4">
                    <label for="age">Idade: </label>
                    <input type="text" value="{{$dog->age}}" name="age" class="form-control">
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
                <div class="col-md-12">
                    <label for="vaccines">Vacinas: </label>
                    <textarea id="vaccines" name="vaccines" class="form-control">{{$dog->vaccines}}</textarea>
                </div>
            </div>

            <div class="space16"></div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
            </div>

            <div class="space32"></div>

            <div style="display:none;" id="success">
                <div class="alert alert-success">
                    <p>Atualizado com sucesso!</p>
                </div>
            </div>

        </form>
    </div>

    <script src="{{asset('assets/js/edit-dogs.js')}}"></script>

@endsection