<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* Your custom CSS styles */
        body {

            font-family: 'Inria Serif';

        }



        .custom {
            background-color: #1E3668;
            color: #ACDDFD;
        }

        .navbarcustom {
            background-color: transparent !important;
        }

        .btn-outline-custom {
            --bs-btn-color: #ACDDFD;
            --bs-btn-border-color: #1E3668;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #1E3668;
            --bs-btn-hover-border-color: #1E3668;
            --bs-btn-focus-shadow-rgb: 220, 53, 69;
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: #1E3668;
            --bs-btn-active-border-color: #1E3668;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #1E3668;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #1E3668;
            --bs-gradient: none;
        }

        input::placeholder,
        .form-control::placeholder {
            color: #ACDDFD;
            /* Replace 'lightgray' with your desired color */
            opacity: 1;
            /* Ensure the placeholder is fully opaque */

        }

        input:focus,
        .form-control:focus {
            outline: none;
            box-shadow: none;
            /* Also remove the box shadow if present */
        }

        .custom-checkbox {
            transform: scale(1.5);
            /* Adjust the scale as needed */
        }
    </style>
</head>

<body>
    <!-- Your HTML code for the signup form -->

    {{-- <div class="header">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Successfully Created Your Account</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> ' . Show Error . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    </div> --}}


    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm ms-5 ml-2 navbarcustom">
            <div class="container-fluid">
                <a class="navbar-brand" href="landing-home.html">
                    <img src="img\logo1.png" class="img-fluid" alt="Logo" width="80%" height="auto">
                </a>

            </div>
        </nav>


    </div>

    <section class="vh-100 gradient-custom">
        <form action="{{url('/')}}/signup" method="post">
            @csrf
            <div class="container py-5 h-100 ">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-10 col-md-8 col-lg-6 col-xl-5">
                        <div class="card custom text border-0" style="border-radius: 2rem;">
                            <div class="card-body ps-4 pe-5  ">

                                <div class="mb-md-5 ">

                                    <p class=" mb-2 text-uppercase text-center fs-1">Sign up</p>
                                    @if (Session::has('failed'))
                                    <div class="alert alert-danger">{{ Session::get('failed') }}</div>
                                @endif
                                    <div class="form-outline form-white mb-4 fs-4">
                                        <label class="form-label ml-3" for="username">Username</label>
                                        <div class="d-flex border-bottom rounded-0 border-secondary">
                                            <img src="img\username.png" alt="userIcon" class="img-fluid"
                                                style=" height: 15px; margin-top: 2%;">
                                            <input type="text" name="username"
                                                class="form-control form-control-md text-light border-0"
                                                placeholder="Enter your username here"
                                                style="background-color: #1E3668; " required>

                                        </div>


                                    </div>

                                    <div class="form-outline form-white mb-4 fs-4">
                                        <label class="form-label ml-3" for="phone">Email</label>
                                        <div class="d-flex border-bottom rounded-0 border-secondary">
                                            <img src="img\phone.png" alt="phone-user" class="img-fluid"
                                                style="height: 20px; margin-top: 1%;">
                                            <input type="email" name="email"
                                                class="form-control form-control-md text-light border-0"
                                                placeholder="Enter your Email" style="background-color: #1E3668;"
                                                required>

                                        </div>

                                    </div>

                                    <div class="form-outline form-white mb-4 fs-4">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="d-flex border-bottom rounded-0 border-secondary">
                                            <img src="img\password.png" alt="userIcon" class="img-fluid"
                                                style=" height: 15px; margin-top: 2%;">
                                            <input type="password" name="pass"
                                                class="form-control form-control-md text-light border-0 "
                                                placeholder="Enter your password here"
                                                style="background-color: #1E3668;" required>
                                        </div>


                                    </div>

                                    <div class="form-outline form-white mb-2 fs-4">
                                        <label class="form-label" for="cpassword">Confirm Password</label>
                                        <div class="d-flex border-bottom rounded-0 border-secondary">
                                            <img src="img\password.png" alt="userIcon" class="img-fluid"
                                                style=" height: 15px; margin-top: 2%;">
                                            <input type="password" name="cpass"
                                                class="form-control form-control-md text-light border-0 "
                                                placeholder="Enter your password again"
                                                style="background-color: #1E3668; border-color: #8F8F8F;" required>
                                        </div>

                                    </div>
                                    <div class="fs-6 mb-4">
                                        <input type="checkbox" id="remember" name="remember" value="remember"
                                            class="custom-checkbox">
                                        <label for="vehicle1">Remember Password</label>
                                    </div>



                                    <button
                                        class="btn bttn btn-outline-custom btn-md text-uppercase px-5 col-sm-12 fs-3 rounded-5 shadow"
                                        type="submit" name="signup">Sign Up</button>


                                </div>
                                <div class="text-center mb-5">
                                    <p class=" fs-5">OR Sign up Using</p>
                                    <!-- Facebook -->
                                    <a href=""><img src="img\fbSign.png" alt="Facebook" class=" img-fluid "
                                            style="width: 10%; "></a>
                                    <!-- Twitter -->
                                    <img src="img\twitSign.png" alt="Facebook" class=" img-fluid"
                                        style="width: 10%; margin-left: 5%;">
                                    <!-- Github -->
                                    <img src="img\gitSign.png" alt="Github" class=" img-fluid"
                                        style="width: 10%; margin-left: 5%;">

                                </div>

                                <div class="pt-5">
                                    <p class="mb-0">Already have an account? <a href="{{url('/')}}/login"
                                            class="text-50 text-uppercase fw-semibold text-decoration-none text-light"
                                            style="color: #393939;">Login now!</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>