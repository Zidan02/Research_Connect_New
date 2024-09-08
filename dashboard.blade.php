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

    <div class="d-flex justify-content-center">
        @if (session()->has('message'))
            <div class="alert alert-success text-center alert-dismissible fade show" role="alert" style="width: 30%;">
                {{ session()->get('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                                <img src="{{ $data->image }}" class="avatar img-fluid" alt=""
                                    style="height: 3rem; width: 3rem;">
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('/') }}/edit">Settings</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ url('/') }}" class="text-decoration-none"><button class="btn me-2 rounded-4"
                                name="signout" id="signout" type="button"
                                style="float:right; background: #1E3668; color: white;"> Log
                                Out </button></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->
    <!-- profile section start -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <!-- user information start -->

                <div class="col-md-2">
                    <!-- Button trigger modal stat-->
                    <button type="button" class="btn text-white m-1 shadow" data-bs-toggle="offcanvas"
                        data-bs-target="#createPost" aria-controls="createPost"
                        style=" background: #1E3668; width: 80%;">
                        <span class="fw-bold fs-5">+</span>NEW
                    </button>


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
                    <form method="post">
                        <div class="card rounded-4 border-0 align-items-center mt-4">
                            <img src="{{ $data->image }}" class="card-img-top img-fluid " alt="img"
                                style=" width: 40%; height: 40%; margin-left: -15%;">
                            <div class="card-body d-flex flex-column   rounded-4">
                                <p class="card-text fw-semibold" style="color: #1E3668;"> <i>{{ $data->firstname }}
                                    </i>
                                </p>
                                <p class="card-text text-left" style="color: #595858; margin-top: -10%;">
                                    {{ $data->role }}</p>
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
                                <div class="d-flex">
                                    <p class="card-text fs-5 " style="color: #1E3668;">
                                        Suggested</p>
                                    <p class="card-text fs-5 " style="margin-left: 13%; color: #1E3668;">
                                        12+</p>
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
                                                for="phone">{{ $data->phone }}</label>

                                        </div>
                                        <hr class="border-2">
                                        <div class="email d-flex" style="margin-top: 1rem;">
                                            <img src="img\emic.png" alt="emic" class="img-fluid rounded-5"
                                                style="height: 2.5rem; width: 2.5rem;">
                                            {{-- <input type="email" class="form-control border-0 shadow rounded-2"
                                                name="email" id="email" placeholder="Enter your email address"
                                                style="padding: 0.5rem; font-size: 0.7rem;" readonly> --}}
                                            <label class="form-control border-0 shadow rounded-2"
                                                for="email">{{ $data->email }}</label>
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

                    <!-- search ber  start -->
                    <div class="" style="float: right; margin-right: 7%;">

                        <div class="search">
                            <div class="search-bar">
                                <form class="d-flex">
                                    <input class="form-control me-2 rounded-4 shadow border-0 text-dark"
                                        type="search" placeholder="Search" style="width: 15rem;"
                                        aria-label="Search">
                                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- search ber end -->


                    <!-- Parent element to group collapses -->
                    <div class="accordion" id="accordionExample" style="margin-top: 8rem;">

                        <!-- 2nd menu start -->
                        <div class="post-menu">
                            <nav class="navbar navbar-expand-sm">
                                <div class="container">
                                    <ul class="navbar-nav list rounded-4 nav-fill py-1"
                                        style="background-color: #1E3668; width: 93%;">
                                        <li class="nav-item border-2 border-end border-light">
                                            <a class="nav-link" data-bs-toggle="collapse" href="#collapsePost"
                                                role="button" aria-expanded="false" aria-controls="collapsePost">
                                                <img src="img/post.png" class="" alt="post"
                                                    style="float: left; padding-left: 10%;">
                                            </a>
                                        </li>
                                        <li class="nav-item border-2 border-end border-light">
                                            <a class="nav-link" aria-current="page" data-bs-toggle="collapse"
                                                href="#collapsePaper" role="button" aria-expanded="false"
                                                aria-controls="collapsePaper">
                                                <img src="img/paper.png" class="" alt="post">
                                            </a>
                                        </li>
                                        <li class="nav-item border-2 border-end border-light">
                                            <a class="nav-link" aria-current="page" data-bs-toggle="collapse"
                                                href="#collapseQuestion" role="button" aria-expanded="false"
                                                aria-controls="collapseQuestion">
                                                <img src="img/question.png" class="" alt="post">
                                            </a>
                                        </li>
                                        <li class="nav-item border-2 border-end border-light">
                                            <a class="nav-link" aria-current="page" data-bs-toggle="collapse"
                                                href="#collapseJob" role="button" aria-expanded="false"
                                                aria-controls="collapseJob">
                                                <img src="img/job.png" class="" alt="post">
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" data-bs-toggle="collapse"
                                                href="#collapseCollab" role="button" aria-expanded="false"
                                                aria-controls="collapseCollab">
                                                <img src="img/collaboration.png" class="img-fluid" alt="post"
                                                    style="float: right; padding-right: 10%; width: 3.5rem; height: auto;">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- 2nd menu end -->

                        {{-- <!-- all post here start -->
                        <div class="accordion-collapse collapse" id="collapsePost" data-bs-parent="#accordionExample"
                            style="margin-left: 1%; width: 91%;">
                            <div class="card mt-1 border-0">
                                <!-- Content for POST collapse -->
                                <div class="card-header h3 bg-transparent border-bottom border-1 border-dark-subtle fw-semibold"
                                    style="padding-left: 2.5%;">
                                    <img src="img\post.png" alt="Icon Image" class="icon-img"> Posts
                                </div>
                                @foreach ($post as $v1)
                                    <div
                                        class="card-body card mt-2 border-bottom border-0 border-dark-subtle rounded-0">
                                        <p class="card-title fs-5">{{ $v1->description }}</p>

                                        <a href="link_to_profile" class="text-decoration-none">
                                            <span class="text-primary fs-6">Authors:<span
                                                    class="ms-3">{{ $v1->firstname }}</span></span>
                                        </a>

                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-primary fs-6">Published:<span
                                                    class="ms-3">{{ $v1->created_at }}
                                                    <span class="ms-2">11 AM</span></span></p>
                                @endforeach
                                <div class="d-flex justify-content-end gap-2" style="float: right;">
                                    <button class="btn border-2 rounded-5 fs-6"
                                        style="background: #FEF067; border-color: #1E3668;">Physics</button>
                                    <button class="btn border-2 rounded-5 fs-6 px-4"
                                        style="background: #FEF067; border-color: #1E3668; ">
                                        <img src="img/comment.png" alt="comment" class="img-fluid"
                                            style="width: 20px; height: 15px;">
                                    </button>

                                    <button class="btn border-2 rounded-5 fs-6 d-flex align-middle"
                                        style="background: #FEF067; border-color: #1E3668;">
                                        <img src="img/save.png" alt="" class="img-fluid mt-1 me-2"
                                            style="width: 15px; height: 15px;"> <span>Save</span>
                                    </button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- all post here end --> --}}




                        <!-- all post here start -->
                        <div class="accordion-collapse collapse" id="collapsePost" data-bs-parent="#accordionExample"
                            style="margin-left: 1%; width: 91%;">
                            <div class="card mt-1 border-0">
                                <!-- Content for POST collapse -->
                                <div class="card-header h3 bg-transparent border-bottom border-1 border-dark-subtle fw-semibold"
                                    style="padding-left: 2.5%;">
                                    <img src="img/post.png" alt="Icon Image" class="icon-img"> Posts
                                </div>

                                @forelse ($post as $v1)
                                    <!-- Removed the extra closing parenthesis -->
                                    <div
                                        class="card-body card mt-2 border-bottom border-0 border-dark-subtle rounded-0">
                                        <p class="card-title fs-5">{{ $v1->description }}</p>

                                        <a href="link_to_profile" class="text-decoration-none">
                                            <span class="text-primary fs-6">Authors:<span
                                                    class="ms-3">{{ $data->firstname }}</span></span>
                                        </a>

                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-primary fs-6">Published:<span
                                                    class="ms-3">{{ $v1->created_at }}<span class="ms-2">11
                                                        AM</span></span></p>
                                        </div>

                                        <div class="d-flex justify-content-end gap-2" style="float: right;">
                                            <button class="btn border-2 rounded-5 fs-6"
                                                style="background: #FEF067; border-color: #1E3668;">Physics</button>
                                            <button class="btn border-2 rounded-5 fs-6 px-4"
                                                style="background: #FEF067; border-color: #1E3668;">
                                                <img src="img/comment.png" alt="comment" class="img-fluid"
                                                    style="width: 20px; height: 15px;">
                                            </button>
                                            <button class="btn border-2 rounded-5 fs-6 d-flex align-middle"
                                                style="background: #FEF067; border-color: #1E3668;">
                                                <img src="img/save.png" alt="" class="img-fluid mt-1 me-2"
                                                    style="width: 15px; height: 15px;"> <span>Save</span>
                                            </button>
                                        </div>
                                    </div>
                                @empty
                                    <p>No posts available.</p>
                                @endforelse
                            </div>


                            {{-- @foreach ($post as $v1)
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $v1->description }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                @empty
                                <p>No post</p>
                            @endforeach --}}
                        </div>


                        <!-- all post here end -->



                        <!-- all paper here start -->
                        <div class="accordion-collapse collapse" id="collapsePaper"
                            data-bs-parent="#accordionExample" style="margin-left: 1%; width: 91%;">
                            <div class="card mt-1 border-0">
                                <!-- Content for PAPER collapse -->
                                <div class="card-header h3 bg-transparent border-bottom border-1 border-dark-subtle fw-semibold"
                                    style="padding-left: 2.5%;">
                                    <img src="img\paper.png" alt="Icon Image" class="icon-img"> Paper
                                </div>
                                @forelse($papers as $v2)
                                    <div
                                        class="card-body card mt-2 border-bottom border-0 border-dark-subtle rounded-0">
                                        <p class="card-title fs-5">{{ $v2->description }}</p>

                                        <a href="link_to_profile" class="text-decoration-none">
                                            <span class="text-primary fs-6">Authors:<span
                                                    class="ms-3">{{ $data->firstname }}</span></span>
                                        </a>

                                        <div class="card-text d-flex justify-content-between">
                                            <p class="text-primary fs-6">Published:<span
                                                    class="ms-3">{{ $v2->created_at }}<span class="ms-2">11
                                                        AM</span></span></p>
                                            {{-- @endforeach --}}
                                            <div class="d-flex justify-content-end gap-2" style="float: right;">
                                                <button class="btn border-2 rounded-5 fs-6"
                                                    style="background: #FEF067; border-color: #1E3668;">Physics</button>
                                                <button class="btn border-2 rounded-5 fs-6 px-4"
                                                    style="background: #FEF067; border-color: #1E3668; ">
                                                    <img src="img/comment.png" alt="comment" class="img-fluid"
                                                        style="width: 20px; height: 15px;">
                                                </button>

                                                <button class="btn border-2 rounded-5 fs-6 d-flex align-middle"
                                                    style="background: #FEF067; border-color: #1E3668;">
                                                    <img src="img/save.png" alt=""
                                                        class="img-fluid mt-1 me-2"
                                                        style="width: 15px; height: 15px;"> <span>Save</span>
                                                </button>
                                            </div>
                                        </div>
                                    @empty
                                        <p>No posts available.</p>
                                @endforelse
                            </div>

                        </div>
                    </div>
                    <!-- all paper here end -->

                    <!-- all Question here start -->
                    <div class="accordion-collapse collapse" id="collapseQuestion" data-bs-parent="#accordionExample"
                        style="margin-left: 1%; width: 91%;">
                        <div class="card mt-1 border-0">
                            <!-- Content for QUESTION collapse -->
                            <div class="card-header h3 bg-transparent border-bottom border-1 border-dark-subtle fw-semibold"
                                style="padding-left: 2.5%;">
                                <img src="img\question.png" alt="Icon Image" class="icon-img"> Question
                            </div>
                            @forelse ($question as $v3)
                                <div class="card-body card mt-2 border-bottom border-0 border-dark-subtle rounded-0">
                                    <p class="card-title fs-5">{{ $v3->description }}</p>

                                    <a href="link_to_profile" class="text-decoration-none">
                                        <span class="text-primary fs-6">Authors:<span
                                                class="ms-3">{{ $v3->firstname }}</span></span>
                                    </a>

                                    <div class="card-text d-flex justify-content-between">
                                        <p class="text-primary fs-6">Published:<span
                                                class="ms-3">{{ $v3->created_at }}
                                                <span class="ms-2">11 AM</span></span></p>
                                        {{-- @endforeach --}}
                                        <div class="d-flex justify-content-end gap-2" style="float: right;">
                                            <button class="btn border-2 rounded-5 fs-6"
                                                style="background: #FEF067; border-color: #1E3668;">Physics</button>
                                            <button class="btn border-2 rounded-5 fs-6 px-4"
                                                style="background: #FEF067; border-color: #1E3668; ">
                                                <img src="img/comment.png" alt="comment" class="img-fluid"
                                                    style="width: 20px; height: 15px;">
                                            </button>

                                            <button class="btn border-2 rounded-5 fs-6 d-flex align-middle"
                                                style="background: #FEF067; border-color: #1E3668;">
                                                <img src="img/save.png" alt="" class="img-fluid mt-1 me-2"
                                                    style="width: 15px; height: 15px;"> <span>Save</span>
                                            </button>
                                        </div>
                                    </div>
                                @empty
                                    <p>No posts available.</p>
                            @endforelse
                        </div>

                    </div>
                </div>
                <!-- all Question here end -->

                <!-- all Job post here start -->
                <div class="accordion-collapse collapse" id="collapseJob" data-bs-parent="#accordionExample"
                    style="margin-left: 1%; width: 91%;">
                    <div class="card mt-1 border-0">
                        <!-- Content for JOB collapse -->
                        <div class="card-header h3 bg-transparent border-bottom border-1 border-dark-subtle fw-semibold"
                            style="padding-left: 2.5%;">
                            <img src="img\job.png" alt="Icon Image" class="icon-img"> Job
                        </div>
                        @forelse ($jobpost as $v4)
                            <div class="card-body card mt-2 border-bottom border-0 border-dark-subtle rounded-0">
                                <p class="card-title fs-5">{{ $v4->description }}</p>

                                <a href="link_to_profile" class="text-decoration-none">
                                    <span class="text-primary fs-6">Authors:<span
                                            class="ms-3">{{ $v4->firstname }}</span></span>
                                </a>

                                <div class="card-text d-flex justify-content-between">
                                    <p class="text-primary fs-6">Published:<span class="ms-3">{{ $v4->created_at }}
                                            <span class="ms-2">11
                                                AM</span></span></p>
                                    {{-- @endforeach --}}
                                    <div class="d-flex justify-content-end gap-2" style="float: right;">
                                        <button class="btn border-2 rounded-5 fs-6"
                                            style="background: #FEF067; border-color: #1E3668;">Physics</button>
                                        <button class="btn border-2 rounded-5 fs-6 px-4"
                                            style="background: #FEF067; border-color: #1E3668; ">
                                            <img src="img/comment.png" alt="comment" class="img-fluid"
                                                style="width: 20px; height: 15px;">
                                        </button>

                                        <button class="btn border-2 rounded-5 fs-6 d-flex align-middle"
                                            style="background: #FEF067; border-color: #1E3668;">
                                            <img src="img/save.png" alt="" class="img-fluid mt-1 me-2"
                                                style="width: 15px; height: 15px;"> <span>Save</span>
                                        </button>
                                    </div>
                                </div>
                            @empty
                                <p>No posts available.</p>
                        @endforelse
                    </div>
                </div>

            </div>

            <!-- all Job post here end -->


            <!-- all Collaboration post here start -->
            <div class="accordion-collapse collapse" id="collapseCollab" data-bs-parent="#accordionExample"
                style="margin-left: 1%; width: 91%;">
                <div class="card mt-1 border-0">
                    <!-- Content for Collaboration collapse -->
                    <div class="card-header h3 bg-transparent border-bottom border-1 border-dark-subtle fw-semibold"
                        style="padding-left: 2.5%;">
                        <img src="img\collaboration.png" alt="Icon Image" class="icon-img" style="width: 4%;">
                        Collaboration
                    </div>
                    @forelse ($collaboration as $v5)
                        <div class="card-body card mt-2 border-bottom border-0 border-dark-subtle rounded-0">
                            <p class="card-title fs-5">{{ $v5->description }}</p>

                            <a href="link_to_profile" class="text-decoration-none">
                                <span class="text-primary fs-6">Authors:<span
                                        class="ms-3">{{ $data->firstname }}</span></span>
                            </a>

                            <div class="card-text d-flex justify-content-between">
                                <p class="text-primary fs-6">Published:<span
                                        class="ms-3">{{ $v5 - created_at }}<span class="ms-2">11
                                            AM</span></span></p>
                                {{-- @endforelse --}}
                                <div class="d-flex justify-content-end gap-2" style="float: right;">
                                    <button class="btn border-2 rounded-5 fs-6"
                                        style="background: #FEF067; border-color: #1E3668;">Physics</button>
                                    <button class="btn border-2 rounded-5 fs-6 px-4"
                                        style="background: #FEF067; border-color: #1E3668; ">
                                        <img src="img/comment.png" alt="comment" class="img-fluid"
                                            style="width: 20px; height: 15px;">
                                    </button>

                                    <button class="btn border-2 rounded-5 fs-6 d-flex align-middle"
                                        style="background: #FEF067; border-color: #1E3668;">
                                        <img src="img/save.png" alt="" class="img-fluid mt-1 me-2"
                                            style="width: 15px; height: 15px;"> <span>Save</span>
                                    </button>
                                </div>
                            </div>
                        @empty
                            <p>No posts available.</p>
                    @endforelse
                </div>
            </div>
        </div>
        <!-- all Collaboration post here end -->
        </div>

        </div>
        <!-- Parent element end -->





        </div>
        <!-- post information end -->



        </div>
        </div>
    </section>
    <!-- profile section end -->

    <!-- Post Forms modal start-->

    <div class="modal fade border-0 rounded-5" id="postForm" aria-labelledby="postForm" tabindex="-1"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header border-0 d-flex mt-5">
                    <img src="img\post.png" alt="Icon-post" class="icon-img">
                    <p class="modal-title fs-4 fw-semibold text-uppercase ms-1" id="staticBackdropLabel">Post</p>
                    <hr class="border-0 opacity-100 ms-3" style="width: 40%; height: 5px; background-color: #ACDDFD;">
                </div>
                <div class="modal-body" style="margin-top: -5%;">
                    <div class="container">
                        <form action="{{ url('/') }}/dashboard/post" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input type="text" name="postTitle"
                                    class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <textarea name="postDescription" class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Description" required style="height:20vh"></textarea>
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control custom-file-input shadow" name="file" type="file"
                                    id="formFileMultiple" multiple>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm text-uppercase text-light px-5 fs-5 rounded-3 shadow"
                                    type="submit" name="postPost" style="background-color: #1E3668;">Post</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Post Forms modal end-->






    <!-- Paper Forms modal start-->
    <div class="modal fade rounded-4" id="paperForm" aria-labelledby="paperForm" tabindex="-1"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header border-0 d-flex mt-5">
                    <img src="img\paper.png" alt="Icon-post" class="icon-img">
                    <p class="modal-title fs-4 fw-semibold text-uppercase ms-1" id="staticBackdropLabel">Paper</p>
                    <hr class="border-0 opacity-100 ms-3" style="width: 40%; height: 5px; background-color: #ACDDFD;">
                </div>
                <div class="modal-body" style="margin-top: -5%;">
                    <div class="container">
                        <form action="{{ url('/') }}/dashboard/papers" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input type="text" name="paperTitle"
                                    class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <textarea name="paperDescription" class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Description" required style="height:20vh"></textarea>
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control custom-file-input shadow" name="file" type="file"
                                    id="formFileMultiple" multiple>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm text-uppercase text-light px-5 fs-5 rounded-3 shadow"
                                    type="submit" name="paperPost" style="background-color: #1E3668;">Post</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Paper Forms modal end-->


    <!-- Need post Forms modal start-->
    <div class="modal fade rounded-4" id="needPostForm" aria-labelledby="needPostForm" tabindex="-1"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header border-0 d-flex mt-5">
                    <img src="img\need.png" alt="Icon-post" class="icon-img">
                    <p class="modal-title fs-4 fw-semibold text-uppercase ms-1" id="staticBackdropLabel">Need Post</p>
                    <hr class="border-0 opacity-100 ms-3" style="width: 40%; height: 5px; background-color: #ACDDFD;">
                </div>
                <div class="modal-body" style="margin-top: -5%;">
                    <div class="container">
                        <form action="{{ url('/') }}/dashboard/needpost" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input type="text" name="needPostTitle"
                                    class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <textarea name="needPostDescription" class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Description" required style="height:20vh"></textarea>
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control custom-file-input shadow" name="file" type="file"
                                    id="formFileMultiple" multiple>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm text-uppercase text-light px-5 fs-5 rounded-3 shadow"
                                    type="submit" name="needPost" style="background-color: #1E3668;">Post</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Need post Forms modal end-->


    <!-- Question Forms modal start-->
    <div class="modal fade rounded-4" id="questionForm" aria-labelledby="questionForm" tabindex="-1"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header border-0 d-flex mt-5">
                    <img src="img\question.png" alt="Icon-post" class="icon-img">
                    <p class="modal-title fs-4 fw-semibold text-uppercase ms-1" id="staticBackdropLabel">Question</p>
                    <hr class="border-0 opacity-100 ms-3" style="width: 40%; height: 5px; background-color: #ACDDFD;">
                </div>
                <div class="modal-body" style="margin-top: -5%;">
                    <div class="container">
                        <form action="{{ url('/') }}/dashboard/question" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input type="text" name="questionTitle"
                                    class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <textarea name="questionDescription" class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Description" required style="height:20vh"></textarea>
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control custom-file-input shadow" name="file" type="file"
                                    id="formFileMultiple" multiple>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm text-uppercase text-light px-5 fs-5 rounded-3 shadow"
                                    type="submit" name="questionPost"
                                    style="background-color: #1E3668;">Post</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Question Forms modal end-->

    <!-- Collaboration Forms modal start-->
    <div class="modal fade rounded-4" id="collabForm" aria-labelledby="collabForm" tabindex="-1"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header border-0 d-flex mt-5">
                    <img src="img\collaboration.png" alt="Icon-post" class="icon-img img-fluid" style="width: 8%;">
                    <p class="modal-title fs-4 fw-semibold text-uppercase ms-1" id="staticBackdropLabel">Collaboration
                    </p>
                    <hr class="border-0 opacity-100 ms-3" style="width: 40%; height: 5px; background-color: #ACDDFD;">
                </div>
                <div class="modal-body" style="margin-top: -5%;">
                    <div class="container">
                        <form action="{{ url('/') }}/dashboard/collaboration" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input type="text" name="collabTitle"
                                    class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <textarea name="collabDescription" class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Description" required style="height:20vh"></textarea>
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control custom-file-input shadow" name="file" type="file"
                                    id="formFileMultiple" multiple>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm text-uppercase text-light px-5 fs-5 rounded-3 shadow"
                                    type="submit" name="collabPost" style="background-color: #1E3668;">Post</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Question Forms modal end-->


    <!-- Job post Forms modal start-->
    <div class="modal fade rounded-4" id="jobPostForm" aria-labelledby="jobPostForm" tabindex="-1"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content rounded-5">
                <div class="modal-header border-0 d-flex mt-5">
                    <img src="img\job.png" alt="Icon-post" class="icon-img">
                    <p class="modal-title fs-4 fw-semibold text-uppercase ms-1" id="staticBackdropLabel">Job Post</p>
                    <hr class="border-0 opacity-100 ms-3" style="width: 40%; height: 5px; background-color: #ACDDFD;">
                </div>
                <div class="modal-body" style="margin-top: -5%;">
                    <div class="container">
                        <form action="{{ url('/') }}/dashboard/jobpost" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-outline form-white mb-3">
                                <input type="text" name="jobPostTitle"
                                    class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Title" required>
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input type="text" name="companyName"
                                    class="form-control form-control-sm form-control-custom shadow"
                                    placeholder="Company Name (if required)">
                            </div>


                            <div class="form-outline form-white mb-4">
                                <textarea name="jobPostDescription" class="form-control form-control-md form-control-custom shadow"
                                    placeholder="Description" required style="height:20vh"></textarea>
                            </div>
                            <div class="form-outline form-white mb-3">
                                <input class="form-control custom-file-input shadow" name="file" type="file"
                                    id="formFileMultiple" multiple>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-sm text-uppercase text-light px-5 fs-5 rounded-3 shadow"
                                    type="submit" name="jobPostPost"
                                    style="background-color: #1E3668;">Post</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Job post Forms modal end-->

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
