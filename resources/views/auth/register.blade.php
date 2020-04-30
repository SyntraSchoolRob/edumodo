@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input type="text" class="form-control mb-2 mt-3{{ $errors->has('first_name') ? ' is-invalid' : '' }}" id="first_name" name="first_name" placeholder="Voornaam" value="{{ old('first_name') }}" required>
                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                        @endif
                        <input type="text" class="form-control mb-2{{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last_name" name="last_name" placeholder="Familienaam" value="{{ old('last_name') }}" required>
                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                        @endif
                        <input type="email" class="form-control mb-2{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                        <h3 class="text-uppercase text-secondary border-bottom border-secondary text-right mt-5 pb-3">Paswoord</h3>
                        <input type="password" class="form-control mb-2 mt-3{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Paswoord" name="password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <input id="password-confirm" type="password" class="form-control mb-3" name="password_confirmation" placeholder="Bevestig je paswoord" required>
                <button class="btn btn-dark text-uppercase" type="submit">account aanmaken</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
