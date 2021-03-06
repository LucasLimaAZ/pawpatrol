@extends('layouts.app')
@section('content')

    <div class="space32"></div>

    <h1 class="main-title">Cadastrar Raça</h1>

    <div class="space32"></div>

    <div class="shadow-box col-md-8 offset-md-2">
        <form id="race">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="name">Nome: </label>
                    <input type="text" class="form-control" name="name">
                </div>
            </div>
    
            <div class="space16"></div>
    
            <div class="row">
                <div class="col-md-12">
                    <label for="description">Descrição: </label>
                    <textarea name="description" class="form-control" cols="30" rows="5"></textarea>
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

    <script src="{{asset('assets/js/store-races.js')}}"></script>

@endsection