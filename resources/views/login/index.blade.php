@extends('layouts.main')
@section('content')
@section('title', 'Login')

<div class="row justify-content-center mt-5">
    <div class="col-md-4">
        <h2 class="text-center mb-3">Login</h2>
        <div class="card">
            <div class="cart-body p-3">
                <form action="">
                    <div class="mb-2">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">User Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">User Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection