@extends('layouts.simple')

@section('content')
   <!-- Page Content -->
   <div class="bg-image" style="background-image: url('/media/photos/photo19@2x.jpg');">
      <div class="row g-0 justify-content-center bg-primary-dark-op">
         <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign In Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
               <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                  <!-- Alert -->
                  @if (session()->has('success'))
                     <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                  @endif

                  <!-- Alert Login Error -->
                  @if (session()->has('loginError'))
                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                  @endif

                  <!-- Header -->
                  <div class="mb-2 text-center">
                     <a class="link-fx fw-bold fs-1" href="/">
                        <span class="text-dark">Slot</span><span class="text-primary">Demo</span>
                     </a>
                     <p class="text-uppercase fw-bold fs-sm text-muted">Login</p>
                  </div>
                  <!-- END Header -->

                  <!-- Sign In Form -->
                  <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                  <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                  <form class="js-validation-signin" id="jq-validation" action="{{ route('login') }}" method="POST">
                     @csrf
                     <div class="mb-4">
                        <div class="input-group input-group-lg">
                           <input type="text" class="form-control @if (session()->has('loginError')) is-invalid @endif"
                              id="username" name="username" placeholder="Username" autofocus required>
                           <span class="input-group-text">
                              <i class="fa fa-user-circle"></i>
                           </span>
                        </div>
                     </div>
                     <div class="mb-4">
                        <div class="input-group input-group-lg">
                           <input type="password" class="form-control @if (session()->has('loginError')) is-invalid @endif"
                              id="password" name="password" placeholder="Password" required>
                           <span class="input-group-text">
                              <i class="fa fa-asterisk"></i>
                           </span>
                        </div>
                     </div>
                     <div
                        class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                        <div class="form-check">
                           <input type="checkbox" class="form-check-input" id="remember-me" name="remember-me"
                              {{ old('remember') ? 'checked' : '' }}>
                           <label class="form-check-label" for="remember-me">Remember Me</label>
                        </div>
                        <div class="fw-semibold fs-sm py-1">
                           <a href="javascript:void(0)">Forgot Password?</a>
                        </div>
                     </div>
                     <div class="text-center mb-4">
                        <button type="submit" class="btn btn-hero btn-primary">
                           <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Login
                        </button>
                        {{-- <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="{{ route('register') }}">
                                    <i class="fa fa-plus opacity-50 me-1"></i> Register Account
                                </a>
                            </p> --}}
                     </div>
                  </form>
                  <!-- END Sign In Form -->
               </div>

            </div>
            <!-- END Sign In Block -->
         </div>
      </div>
   </div>
   <!-- END Page Content -->
@endsection

@section('js_after')
   <!-- Page JS Plugins -->
   <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
   <!-- Page JS Code -->
   <script src="{{ asset('js/pages/op_auth_signin.min.js') }}"></script>
@endsection
