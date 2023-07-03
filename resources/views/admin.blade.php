@extends('layouts.admin_dash')


@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

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

@php
                            


  
print_r($id);

@endphp


        <div class="admin-card">
            <div class="row">
                <div class="col-lg-4"><i class='fas fa-user-tie icon-admin'></i></div>
                <div class="col-lg-6"><p class="title-card">Admins</p></div>
                <div class="col-lg-2"><p class="body-card">50</p></div>
          </div>
        </div>

        <div class="admin-card">
            <div class="row">
                <div class="col-lg-4"><i class='fas fa-chalkboard-teacher icon-admin'></i></div>
                <div class="col-lg-6"><p class="title-card">Staff</p></div>
                <div class="col-lg-2"><p class="body-card">50</p></div>
          </div>
        </div>


        <div class="admin-card">
            <div class="row">
                <div class="col-lg-4"><i class='fas fa-users icon-admin'></i></div>
                <div class="col-lg-6"><p class="title-card">Clients</p></div>
                <div class="col-lg-2"><p class="body-card">50</p></div>
            </div>
        </div>



@endsection
