@extends('layouts.app')

@section('title', 'Register Page')

@section('content')
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
      <div class="card shadow-2-strong" style="border-radius: 1rem;">
        <div class="card-body p-5 text-center">

          <h3 class="mb-5"> Registration Form</h3>

          {{-- @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif --}}

          <form method="post" action="{{ route('register') }}">
            @csrf
            <div class="form-outline mb-4">
              <input type="text" name="name" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="">Name</label>
            </div>

            <div class="form-outline mb-4">
              <input type="text" name="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
              @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Password</label>
              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="password_confirmation" id="typePasswordX-2"
                class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Confirm Password</label>

            </div>



            <a class="text-info p-5" href="{{ route('login') }}">Already Register?</a>

            <button class="btn btn-primary  btn-block" type="submit">Register</button>

          </form>

        </div>
      </div>
    </div>
  </div>
@endsection
