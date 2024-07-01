@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="container p-5 d-flex align-items-center justify-content-center">
        <div class="row p-5 justify-content-center w-100 bg-light rounded shadow">
            <div class="col-md-6">
                <h2 class="text-center mb-3">Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputFName" class="form-label">First name:</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputFName">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputLName" class="form-label">Last name:</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputFName">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address:</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password:</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Password:</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection
