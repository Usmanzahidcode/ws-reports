@extends('layouts.base_layout')

@push('styles')

@endpush

@section('title')
    Login | {{ config('app.name') }}
@endsection

@section('page')
    <div class="columns">
        <div class="column"></div>
        <div class="column is-6">
            <h3 class="title is-3">Login</h3>
            <p class="subtitle">Access your account to start working on projects in WsStack.</p>

            <form action="{{ route('auth.login.submit') }}" method="POST">
                @csrf

                <div class="field mb-4">
                    <label class="label">Email</label>
                    <div class="control has-icons-left">
                        <input name="email" class="input @error('email') is-danger @enderror" type="email"
                               placeholder="Enter your email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mb-4">
                    <label class="label">Password</label>
                    <div class="control has-icons-left">
                        <input name="password" class="input @error('password') is-danger @enderror" type="password"
                               placeholder="Enter your password">
                        <span class="icon is-small is-left">
                            <i class="fas fa-shield"></i>
                        </span>
                    </div>
                    @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mb-4">
                    <label class="checkbox">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>
                </div>

                <div class="field mb-4">
                    <div class="control">
                        <button class="button is-success is-dark" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column"></div>
    </div>
@endsection

@push('scripts')

@endpush
