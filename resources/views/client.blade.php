@extends('layouts.client_dash')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Client Dashboard') }}</div>

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
</div> --}}

    <div class="admin-card">
        <h2>Client Dashboard</h2><hr>

        User Name : <b>@php  echo auth()->user()->name;   @endphp</b> <br>
        User Email : <b>@php  echo auth()->user()->email;   @endphp</b>
    </div>

@endsection
