@extends('layouts.base_layout')

@push('styles')

@endpush

@section('title')
    Register | {{ config('app.name') }}
@endsection

@section('page')
    <div class="columns">
        <div class="column"></div>
        <div class="column is-6">
            <h3 class="title is-3">Register</h3>
            <p class="subtitle">After making an account you can start working on the projects in WsStack.</p>

            <form action="{{ route('auth.register.submit') }}" method="POST">
                @csrf

                <div class="field-body mb-4">
                    <div class="field">
                        <label class="label">First Name</label>
                        <div class="control">
                            <input name="first_name" class="input @error('first_name') is-danger @enderror" type="text"
                                   placeholder="Irfan">
                        </div>
                        @error('first_name')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Last Name</label>
                        <div class="control">
                            <input name="last_name" class="input @error('last_name') is-danger @enderror" type="text"
                                   placeholder="Ahmad">
                        </div>
                        @error('last_name')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field mb-4">
                    <label class="label">Email</label>
                    <div class="control has-icons-left">
                        <input name="email" class="input @error('email') is-danger @enderror" type="email"
                               placeholder="irfanahmad@gmail.com">
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
                               placeholder="********">
                        <span class="icon is-small is-left">
                            <i class="fas fa-shield"></i>
                        </span>
                    </div>
                    @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="field mb-4">
                    <label class="label">Confirm Password</label>
                    <div class="control has-icons-left">
                        <input name="password_confirmation" class="input" type="password" placeholder="********">
                        <span class="icon is-small is-left">
                        <i class="fas fa-shield"></i>
                    </span>
                    </div>
                </div>


                <div class="field mb-4">
                    <div class="control">
                        <button class="button is-link" type="submit">Register</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="column"></div>
    </div>
@endsection

@push('scripts')

@endpush
