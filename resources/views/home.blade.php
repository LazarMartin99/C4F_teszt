@extends('layouts.app')

@section('content')
<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <a class="btn btn-default"  href="http://localhost/Tesztfeladat_C4F/public/products">Products</a>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
