@extends('frontend.pages.frontend_master')

@section('content')
<main id="main">
   <!-- Outer Row -->
    <div class="container">

        <!-- Outer Row -->
        <div class="row">

            <div class=" col-md-6 offset-md-3">

                <div class="card o-hidden border-0 shadow-lg login_card">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login! Build Awesome Resume!</h1>
                            </div>
                            <form action="{{ route('user.login.action')}}" method="post" class="user">
                             @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                       name="email"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                       name="password" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>

                                <button type="submit"  class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register.html">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>
@endsection
