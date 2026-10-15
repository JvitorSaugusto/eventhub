@extends('layouts.app') 

@section('title', 'Criar conta') 

@section('content') 
<div class="row justify-content-center"> 
    <div class="col-md-5"> 
        <div class="card shadow-sm"> 
            <div class="card-body"> 
                <h1 class="h4 mb-4">Criar conta</h1> 

                <form method="POST" action="{{ route('register') }}"> 
                    @csrf 

                    <!-- Nome -->
                    <div class="mb-3"> 
                        <label for="name" class="form-label">Nome</label> 
                        <input 
                            type="text" 
                            name="name" 
                            id="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            value="{{ old('name') }}" 
                            required 
                            autofocus
                        > 
                        @error('name') 
                            <div class="invalid-feedback"> 
                                {{ $message }} 
                            </div> 
                        @enderror 
                    </div> 

                    <!-- E-mail -->
                    <div class="mb-3"> 
                        <label for="email" class="form-label">E-mail</label> 
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            value="{{ old('email') }}" 
                            required
                        > 
                        @error('email') 
                            <div class="invalid-feedback"> 
                                {{ $message }} 
                            </div> 
                        @enderror 
                    </div> 

                    <!-- Senha -->
                    <div class="mb-3"> 
                        <label for="password" class="form-label">Senha</label> 
                        <input 
                            type="password" 
                            name="password" 
                            id="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            required
                        > 
                        @error('password') 
                            <div class="invalid-feedback"> 
                                {{ $message }} 
                            </div> 
                        @enderror 
                    </div> 

                    <!-- Confirmar Senha -->
                    <div class="mb-4"> 
                        <label for="password_confirmation" class="form-label">Confirmar senha</label> 
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="password_confirmation" 
                            class="form-control" 
                            required
                        > 
                    </div> 

                    <button type="submit" class="btn btn-primary w-100">
                        Criar conta
                    </button> 
                </form> 

                <div class="text-center mt-3"> 
                    <a href="{{ route('login') }}">Já tenho uma conta</a> 
                </div> 

            </div> 
        </div> 
    </div> 
</div> 
@endsection