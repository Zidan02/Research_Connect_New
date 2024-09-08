<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <style>
        .list {
            column-gap: 1vw;
        }

        body {
            font-family: 'Inria Serif';
        }

        .dropdown-item {
            --bs-dropdown-link-active-bg: #B6BAD8;
        }

        .form-control {
            background-color: #ACDDFD;
        }
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-warn">
        <div class="container-fluid pt-2 m-2">
            <div style="margin-top: 1%;">
                <a class="navbar-brand" href="landing-home.html">
                    <img src="img/logo1.png" alt="Logo" class="img-fluid" style="width: 60%; height: auto;">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse border-dark border-bottom col-md-6 navbarNavDropdown"
                id="navbarNavDropdown" style="margin-left: 5%; width:auto; margin-top: -5%;">
                <ul class="navbar-nav list">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}/dashboard">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collaboration</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connection</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Need Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Webinars/ conference</a>
                    </li>

                </ul>
            </div>
            <div class="collapse navbar-collapse navbarNavDropdown" style="margin-left:5%; margin-top: -4%;">
                <ul class="navbar-nav list">
                    <li class="nav-item">
                        <div class="btn-group">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="{{ $user->image }}" class="avatar img-fluid" alt=""
                                    style="height: 3rem; width: 3rem;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="userProfile.html">Profile</a></li>
                                <li><a class="dropdown-item" href="editProfile.html">Settings</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('/') }}" class="text-decoration-none"><button class="btn me-2 rounded-4"
                                name="signout" id="signout" type="button"
                                style="float:right; background: #1E3668; color: white;">
                                Log
                                Out </button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- profile section start -->
    <div class="d-flex justify-content-center">
        @if (session()->has('message'))
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert" style="width: 30%;">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <section>
        <div class="container-fluid">
            <div class="row">
                <!-- user information start -->

                <div class="col-md-2">
                    <!-- Button trigger modal stat-->
                    {{-- <button type="button" class="btn text-white m-1 shadow" data-bs-toggle="offcanvas"
                        data-bs-target="#createPost" aria-controls="createPost"
                        style=" background: #1E3668; width: 80%;">
                        <span class="fw-bold fs-5">+</span>NEW
                    </button> --}}


                    <div class="offcanvas offcanvas-start rounded-4" data-bs-scroll="true" data-bs-backdrop="true"
                        tabindex="-1" id="createPost" aria-labelledby="createPostLabel"
                        style=" width: 20%; height: fit-content; margin-top: 11%;background: #1E3668; margin-left: 1%;">

                        <div class="offcanvas-body rounded-2 ">
                            <ul style="list-style-type: none;">
                                <li>
                                    <button type="button" class="btn btn-transparent border-0 text-light"
                                        data-bs-toggle="modal" data-bs-target="#postForm">Post</button>
                                    <hr class="border border-secondary border-1 opacity-75">
                                </li>
                                <li>
                                    <button type="button" class="btn btn-transparent border-0 text-light"
                                        data-bs-toggle="modal" data-bs-target="#paperForm"
                                        data-bs-dismiss="modal">Paper</button>
                                    <hr class="border border-secondary border-1 opacity-75">
                                </li>
                                <li>
                                    <button type="button" class="btn btn-transparent border-0 text-light"
                                        data-bs-toggle="modal" data-bs-target="#needPostForm"
                                        data-bs-dismiss="modal">Need Post</button>
                                    <hr class="border border-secondary border-1 opacity-75">
                                </li>
                                <li>
                                    <button type="button" class="btn btn-transparent border-0 text-light"
                                        data-bs-toggle="modal" data-bs-target="#questionForm"
                                        data-bs-dismiss="modal">Question</button>
                                    <hr class="border border-secondary border-1 opacity-75">
                                </li>
                                <li>
                                    <button type="button" class="btn btn-transparent border-0 text-light"
                                        data-bs-toggle="modal" data-bs-target="#collabForm"
                                        data-bs-dismiss="modal">Collaboration</button>
                                    <hr class="border border-secondary border-1 opacity-75">
                                </li>
                                <li>
                                    <button type="button" class="btn btn-transparent border-0 text-light"
                                        data-bs-toggle="modal" data-bs-target="#jobPostForm"
                                        data-bs-dismiss="modal">Job
                                        Post</button>
                                    <hr class="border border-secondary border-1 opacity-75">
                                </li>

                            </ul>
                        </div>
                    </div>


                    <!-- userimg start -->
                    <form method="#">
                        <div class="card rounded-4 border-0 align-items-center mt-4">
                            <img src="{{ $user->image }}" class="card-img-top img-fluid " alt="img"
                                style=" width: 40%; height: 40%; margin-left: -15%;">
                            <div class="card-body d-flex flex-column   rounded-4">
                                <p class="card-text fw-semibold" style="color: #1E3668;"> <i>{{ $user->firstname }}
                                    </i>
                                </p>
                                <p class="card-text text-left fw-semibold" style="color: #595858; margin-top: -10%;">
                                    {{ $user->role }}</p>
                                <p class="card-text text-left " style="color: #595858; margin-top: -10%;">
                                    {{ $user->organization }}</p>
                            </div>
                        </div>
                        <!-- userimage end -->
                        <!-- user description start -->
                        <div class="card text-left text-secondary rounded-4 border-0">
                            <div class="card-body text-left align-item-center rounded-4"
                                style=" background-color: white; margin-top: 1rem; margin-bottom: 1rem;">
                                <div class="d-flex"><img src="img\network.png" class="img-fluid"
                                        style="width: 15%; height: 25%; padding-top: 5%;" alt="network">
                                    <p class="card-text fs-5 fw-semibold" style="margin-left: 10%; color: #1E3668;">
                                        Network</p>
                                </div>
                                <div class="d-flex mt-4">
                                    <p class="card-text fs-5 " style="color: #1E3668;">
                                        Followers</p>
                                    <p class="card-text fs-5 " style="margin-left: 20%; color: #1E3668;">
                                        10</p>
                                </div>
                                <div class="d-flex">
                                    <p class="card-text fs-5 " style="color: #1E3668;">
                                        Followings</p>
                                    <p class="card-text fs-5 " style="margin-left: 20%; color: #1E3668;">
                                        2</p>
                                </div>


                            </div>

                            <div class="card-body rounded-4" style=" background-color: white;  margin-bottom: 1rem;">
                                <div class="form-group">
                                    <div class="contact">
                                        <div class="phone d-flex" style="margin-top: 1.5rem;">
                                            <img src="img\phnic.png" alt="phnic" class="img-fluid rounded-5"
                                                style="height: 2.5rem; width: 2.5rem;">
                                            {{-- <input type="tel" class="form-control border-0 shadow rounded-2"
                                                name="phone" id="phone" placeholder="+8801XXXXXXXXX"
                                                style="padding: 0.5rem; font-size: 0.7rem;" readonly> --}}

                                            <label class="form-control border-0 shadow rounded-2"
                                                for="phone">{{ $user->phone }}</label>

                                        </div>
                                        <hr class="border-2">
                                        <div class="email d-flex" style="margin-top: 1rem;">
                                            <img src="img\emic.png" alt="emic" class="img-fluid rounded-5"
                                                style="height: 2.5rem; width: 2.5rem;">
                                            {{-- <input type="email" class="form-control border-0 shadow rounded-2"
                                                name="email" id="email" placeholder="Enter your email address"
                                                style="padding: 0.5rem; font-size: 0.7rem;" readonly> --}}

                                            <label class="form-control border-0 shadow rounded-2"
                                                for="email">{{ $user->email }}</label>

                                        </div>
                                        <hr class="border-2">
                                    </div>
                                </div>
                            </div>
                            <!-- user contact end -->
                            <!-- user social media start -->
                            <section class="mb-4 bg-light">
                                <!-- Facebook -->
                                <a href=""><img src="img\fb-land.png" alt="Facebook"
                                        class="shadow img-fluid " style="width: 13%; margin-left: 5%;"></a>

                                <!-- Instagram -->
                                <a href=""><img src="img\insta-land.png" alt="Instagram"
                                        class="shadow img-fluid" style="width: 13%; margin-left: 5%;"></a>

                                <!-- Linkedin -->
                                <a href=""><img src="img\link-land.png" alt="Linkedin"
                                        class="shadow img-fluid" style="width: 13%; margin-left: 5%;"></a>

                                <!-- Twitter -->
                                <img src="img\twit-land.png" alt="Facebook" class="shadow img-fluid"
                                    style="width: 13%; margin-left: 5%;">
                                <!-- Github -->
                                <img src="img\github.png" alt="Github" class="shadow img-fluid"
                                    style="width: 13%; margin-left: 5%;">


                            </section>
                            <!-- user social media end -->
                        </div>
                        <!-- user description end -->
                    </form>
                </div>


                <!-- user information end -->

                <!-- post information start -->
                <div class="col-md-10">
                    <!-- Account details card-->
                    <div class="container">
                        <div class="card mb-4">
                            <div class="card-header text-light" style="background-color: #1E3668;">Account Details
                            </div>
                            <div class="card-body">
                                <form action="{{ url('/') }}/editprofile" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <!-- About yourself -->
                                    <div class="form-outline form-white mb-3">
                                        <label for="formFile" class="form-label">Upload Profile Picture</label>
                                        <input class="form-control" type="file" id="formFile" name="image"
                                            accept="image/*">
                                    </div>


                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">First name</label>
                                            <input class="form-control" name="firstname" id="inputFirstName"
                                                type="text" placeholder="Enter your first name" value="">
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Last name</label>
                                            <input class="form-control" name="lastname" id="inputLastName"
                                                type="text" placeholder="Enter your last name" value="">
                                        </div>
                                    </div>
                                    <!-- Form Row-->

                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputAdditionalName">Additional Name</label>
                                        <input class="form-control" name="addiname" id="inputAdditionalName"
                                            type="text" placeholder="Enter your additional name" value="">
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (organization name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Organization/ School
                                                name</label>
                                            <input class="form-control" name="organization" id="inputOrgName"
                                                type="text" placeholder="Enter your organization name"
                                                value="">
                                        </div>
                                        <!-- Form Group (Role)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputRole">Role</label>
                                            <input class="form-control" name="role" id="iInputRole"
                                                type="text" placeholder="Enter your Role" value="">
                                        </div>
                                    </div>

                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                            <input class="form-control" name="phone" id="inputPhone"
                                                type="tel" placeholder="Enter your phone number with country code"
                                                value="">
                                        </div>
                                        <!-- Email Address -->
                                        <div class="col-md-6"><label class="small mb-1" for="inputDoB">DoB
                                                address</label>
                                            <input class="form-control" name="dob" id="inputDoB" type="date"
                                                placeholder="Enter your Date of Birth" value="">
                                        </div>
                                        <!-- Linkedin Adress -->
                                        <div class="col-md-6"><label class="small mb-1" for="inputLinkedin">Linkedin
                                                address</label>
                                            <input class="form-control" name="linked" id="inputLinkedin"
                                                type="text" placeholder="Enter your linkedin address"
                                                value="">
                                        </div>
                                        <!-- Github Address -->
                                        <div class="col-md-6"><label class="small mb-1" for="inputGithub">Github
                                                address</label>
                                            <input class="form-control" name="git" id="inputGithub"
                                                type="text" placeholder="Enter your github address"
                                                value="">
                                        </div>
                                        <!-- Facebook Address -->
                                        <div class="col-md-6"><label class="small mb-1" for="inputfacebook">Facebook
                                                address</label>
                                            <input class="form-control" name="facebook" id="inputFacebook"
                                                type="text" placeholder="Enter your facebook address"
                                                value="">
                                        </div>
                                        <!-- Twitter Address -->
                                        <div class="col-md-6"><label class="small mb-1" for="inputtwitter">Twitter
                                                address</label>
                                            <input class="form-control" name="twitter" id="inputtwitter"
                                                type="text" placeholder="Enter your twitter address"
                                                value="">
                                        </div>
                                    </div>

                                    <!-- Save changes button-->
                                    <button class="btn text-light" type="submit"
                                        style="background-color: #1E3668;">Save
                                        changes</button>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <style>
            /* Change placeholder background color */
            .form-control-custom {
                background-color: #ACDDFD;
                outline: none;
                box-shadow: none;
            }

            .custom-file-input {
                background-color: #ACDDFD;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
</body>

</html>
