@extends('NiceAdmin.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Profile de {{ $user->name }} </div>
                    <div class="card-body">
                        <form action="{{ route('profile') }}" method="POST">
                            @csrf 
                            @method('PUT')
                            <br>
                            <div class="form-group">
                                <label for="name">Nom d'utilisateur </label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}"  required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email">Adresse Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password">Nouveau mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password_confirmation">Confirmer le nouveau mot de passe </label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ $user->password_confirmation }}"  required>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-primary"> Enregistrer les modifications </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection