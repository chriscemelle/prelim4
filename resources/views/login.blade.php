@extends('base')

@section('content')

<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header bg-secondary text-white">
                <h3 class="card-tittle">User Login</h3>
            </div>
            <div class="card-body bg-info">
                <form action="{{url('/login')}}" method="post">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-secondary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

@stop