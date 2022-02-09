<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Posting Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="navbar-brand" href="{{ route('dashboard') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('images/logo-icon.png') }}" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('images/logo-text.png') }}" alt="homepage" class="light-logo" />

                        </span>
                    </a>
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="modal" data-bs-target="#addAccountModal" aria-expanded="false">
                                <span class="d-none d-md-block text-white">New Post</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav float-end mt-2">
                        <li class="nav-item dropdown mr-7">
                            <form action="{{ route('logout') }}" method="POST" class="p-3 inline">
                                @csrf
                                <button type="submit" href="javascript:void(0);" class="bg-red-600 hover:shadow-xl duration-300 text-white mt-3 py-1 rounded font-medium w-full">Logout</but>
                            </form>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            
                        </li>
                        <li class="nav-item dropdown mt-3">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="{{ route('dashboard') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('images/users/d3.jpg') }}" alt="user" class="rounded-circle" width="31">
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark active"
                                href="javascript:void(0)" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title h4 mt-3">Welcome {{ auth()->user()->name }}!</h4>
                    </div>
                </div><hr>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title h4 mt-3">Dashboard:</h4>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover font-bold rounded-2xl">
                            <div class="box bg-cyan text-center rounded-2xl">
                                <h1 class="font-light text-white h1" id="data_counting"></h1><!--<i class="mdi mdi-view-dashboard"></i>-->
                                <h6 class="text-white">Posts</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover font-bold rounded-2xl">
                            <div class="box bg-success text-center rounded-2xl">
                                <h1 class="font-light text-white h1"><i class="mdi mdi-chart-areaspline"></i></h1>
                                <h6 class="text-white">Charts</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover font-bold rounded-2xl">
                            <div class="box bg-warning text-center rounded-2xl">
                                <h1 class="font-light text-white h1"><i class="mdi mdi-collage"></i></h1>
                                <h6 class="text-white">Widgets</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-hover font-bold rounded-2xl">
                            <div class="box bg-danger text-center rounded-2xl">
                                <h1 class="font-light text-white h1"><i class="mdi mdi-border-outside"></i></h1>
                                <h6 class="text-white">Tables</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card rounded-2xl" style="background-color: #737afb">
                            <div class="card-body">
                                <h4 class="card-title text-light font-bold h4">New's Feed</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row mt-0">
                                    <div class="p-2 w-100">
                                        <table class="table table-success table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><h5 class="h5">Profile</h5></th>
                                                    <th scope="col"><h5 class="h5">Heading</h5></th>
                                                    <th scope="col"><h5 class="h5">Caption</h5></th>
                                                    <th scope="col"></th>
                                                    <th scope="col"><h5 class="h5">Menu</h5></th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="get_user_data">
                                            <!-- append the data here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        </div>
                    </div>
            </div>
            <footer class="footer text-center">
                All Rights Reserved by Reymund Virtus. Designed and Developed by the same person.
            </footer>
        </div>
    </div>

    <!-- This part is a modal for creating account -->
    <div class="modal fade" id="addAccountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div style="background-color: #7550ef; border-radius: 7px" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Post something!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="create_account" method="POST" class="form-floating">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="hidden" style="background-color: #b6a4f5" type="text" class="form-control" value="{{ Auth::id() }}" id="user_id" placeholder="Your heading" required>
                            <label type="hidden" style="color: rgb(0, 0, 0)" for="floatingInput"></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="text" class="form-control" id="heading" placeholder="Your heading" required>
                            <label style="color: rgb(0, 0, 0)" for="floatingInput">Post Heading</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="text" class="form-control" id="caption" placeholder="Your caption" required>
                            <label style="color: rgb(0, 0, 0)" for="floatingInput">Post Description</label>
                        </div>
                        {{-- <div class="form-floating mb-3">
                            <center><select style="background-color: #b6a4f5; color: rgb(0, 0, 0)" id="role_select" class="form-select" aria-label="Default select example" required>
                                <option style="color: rgb(0, 0, 0)" value="2">Teacher</option>
                                <option style="color: rgb(0, 0, 0)" value="3">Student</option>
                            </select></center>
                        </div> --}}
                        {{-- <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="password" class="form-control" id="password" placeholder="Password" required>
                            <label style="color: rgb(0, 0, 0)" for="floatingPassword">Password</label>
                        </div> --}}
                        <button type="submit" class="btn card-hover" style="background-color: #c94bbd; color: rgb(0, 0, 0)">Post!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- This part is a modal for viewing the account -->
    <div class="modal fade" id="readAccountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div style="background-color: #7550ef; border-radius: 7px" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="create_accountXXX" method="POST" class="form-floating">
                        @csrf
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="hidden" class="form-control" id="namer" placeholder="Author" readonly>
                            <label style="color: rgb(0, 0, 0)" type="hidden" for="floatingInput">Author</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="text" class="form-control text-black" id="headingr" placeholder="Heading" readonly>
                            <label style="color: rgb(0, 0, 0)" for="floatingInput">Heading</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="email" class="form-control text-black" id="captionr" placeholder="Caption" readonly>
                            <label style="color: rgb(0, 0, 0)" for="floatingInput">Caption</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="hidden" class="form-control" id="user_idr" value="{{ Auth::id() }}" placeholder="Password" readonly>
                            <label style="color: rgb(0, 0, 0)" type="hidden" for="floatingPassword"></label>
                        </div>
                        <button type="button" class="btn card-hover" data-bs-dismiss="modal" style="background-color: #c94bbd; color: rgb(0, 0, 0)">Done</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        {{-- <p id="session">{{ Auth::id() }}</p> --}}


    @foreach ($posts as $post)
        <p >{{ $post->user_id }}</p>

    @endforeach

    {{-- <p id="user_id_post"></p> --}}



    <!-- This part is a modal for updating the account -->
    <div class="modal fade" id="updateAccountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div style="background-color: #7550ef; border-radius: 7px" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-black" id="exampleModalLabel">Update your Post</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="update_data" method="POST" class="form-floating">
                        @csrf
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="hidden" class="form-control text-black" id="user_idu" placeholder="Your id" readonly>
                            <label style="color: rgb(0, 0, 0)" type="hidden" for="floatingInput">Account ID</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="text" class="form-control text-black" id="headingu" placeholder="Your heading" required>
                            <label style="color: rgb(0, 0, 0)" for="floatingInput">Heading</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="text" class="form-control text-black" id="captionu" placeholder="Your caption" required>
                            <label style="color: rgb(0, 0, 0)" for="floatingInput">Caption</label>
                        </div>
                        {{--<div class="form-floating mb-3">
                            <input style="background-color: #b6a4f5" type="text" class="form-control" id="passwordu" placeholder="Password" required>
                            <label style="color: rgb(0, 0, 0)" for="floatingPassword">Password</label>
                        </div> --}}
                        <button type="submit" class="btn card-hover" data-bs-dismiss="modal" style="background-color: #c94bbd; color: rgb(0, 0, 0)">Done</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div style="background-color: #7550ef; border-radius: 7px" class="modal-content text-light">
                <div class="modal-body">
                    <center><h2 class="h2">Success!</h2></center>
                </div>
                    <button type="button" class="btn btn-secondary card-hover" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-danger text-light">
                <div class="modal-body">
                    <center><h2 class="h2">Failed:(</h2></center>
                </div>
                    <button type="button" class="btn btn-secondary card-hover" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

    <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.ui.touch-punch-improved.js') }}"></script>
    <script src="{{ asset('dist/js/jquery-ui.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('libs/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <!-- this page js -->
    <script src="{{ asset('dist/js/ajax.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>