@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="auth-container">
        <div class="row">
            <div class="auth-content">
                <h2>Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-field">
                        <label for="inputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-input" id="inputEmail1">
                    </div>
                    <div class="input-field">
                        <label for="inputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-input" id="inputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
