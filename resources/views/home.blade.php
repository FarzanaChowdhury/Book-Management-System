@extends('layouts.app')

@section('content')
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
@if(auth()->user()->isSuperAdmin())
    <a href="{{ url('/super-admin') }}">Super Admin Panel</a>
@elseif(auth()->user()->isAdmin())
    <a href="{{ url('/admin') }}">Admin Panel</a>
@elseif(auth()->user()->isAuthor())
    <a href="{{ url('/author') }}">Author Dashboard</a>
@else
    <p>Welcome, User!</p>
@endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
