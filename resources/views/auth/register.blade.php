<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        {{-- Tell the browser to be responsive to screen width  --}}
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        {{-- Favicon icon  --}}
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        <title>Register</title>
        {{-- Bootstrap Core CSS  --}}
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        {{-- Custom CSS  --}}
        <link href="css/style.css" rel="stylesheet">
        {{-- You can change the theme colors from here  --}}
        <link href="css/colors/green-dark.css" id="theme" rel="stylesheet">
    </head>

    <body>
        {{-- Preloader - style you can find in spinners.css  --}}
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        {{-- Main wrapper - style you can find in pages.scss  --}}
        <section id="wrapper">
            <div class="login-register" style="background-image:url(assets/images/background/login-register.jpg);">
                <div class="login-box card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" class="form-horizontal form-material" id="loginform">
                            @csrf
                            <h3 class="box-title m-b-20">Sign Up</h3>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                                </div>
                            </div>
                            <div class="form-group m-b-0">
                                <div class="col-sm-12 text-center">
                                    <p>Already have an account? <a href="login.html" class="text-info m-l-5"><b>Sign In</b></a></p>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </section>
        {{-- End Wrapper  --}}
        {{-- All Jquery  --}}
        <script src="assets/plugins/jquery/jquery.min.js"></script>
        {{-- Bootstrap tether Core JavaScript  --}}
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        {{-- slimscrollbar scrollbar JavaScript  --}}
        <script src="js/jquery.slimscroll.js"></script>
        {{-- ave Effects  --}}
        <script src="js/waves.js"></script>
        {{-- enu sidebar  --}}
        <script src="js/sidebarmenu.js"></script>
        {{-- tickey kit  --}}
        <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
        {{-- ustom JavaScript  --}}
        <script src="js/custom.min.js"></script>
        {{-- Style switcher  --}}
        <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    </body>

</html>
