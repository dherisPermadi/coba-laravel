@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-md-5">
      <main class="form-registration">
        <form action="/registration" method="post">
          @csrf
          <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
          <div class="form-floating">
            <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" placeholder="John Myer" value="{{ old('name') }}" required>
            <label for="name">Name</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="johnmyer" value="{{ old('username') }}" required>
            <label for="username">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
            <label for="email">Email</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}" required>
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>

          <button class= "w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">Already registered? <a href="/login">Login!</a></small>
      </main>
    </div>
  </div>
@endsection

