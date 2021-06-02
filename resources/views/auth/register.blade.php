@extends('layout.main')
@section('konten')
@include('layout.navbar')

      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Register</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Home</a></li>
              <li class="active">Register</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/sulawesi2.jpg);"></div>
        </div>
      </section>
      <!-- Base typography-->
    
    <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>REGISTER HERE</h3>
            </div>
            <div class="title-classic-text">
              <p>Please enter your personal data in the form below</p>
            </div>
          </article>

            <form method="POST" {{ route('login') }}>
                @csrf
                    
                <div class="row row-14 gutters-14">
                    <div class="col-md-4">

                        <div class="form-wrap">
                            <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="name" class="form-label">{{ __('Name') }}</label>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-wrap">    
                            <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="email" class="form-label">{{ __('E-mail Address') }}</label>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-wrap">
                            <input id="phone" type="tel" class="form-input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            <label for="phone" class="form-label">{{ __('Phone') }}</label>

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="form-wrap">
                            <input id="username" type="text" class="form-input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>
                            <label for="username" class="form-label">{{ __('Username') }}</label>
                            
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-wrap">
                            <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                        
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-wrap">
                            <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                        </div>

                    </div>

                </div>
                    <button type="submit" class="button button-lg button-primary button-pipaluk" >
                            {{ __('Register') }}
                    </button>
            </form>
        </div>
    </section>

@endsection
