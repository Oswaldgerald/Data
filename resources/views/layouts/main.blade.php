<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('/assets/img/stripe.jpg')}}" />
    <link rel="icon" type="image/png" href="{{asset ('/assets/img/stripe.jpg')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Reconciliation
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" type="text/css">
<!-- <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">-->
    <link href="{{asset('assets/css/core.min.css')}}" rel="stylesheet" type="text/css">
  <!--  <link href="{{asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css"> -->
    <link href="{{asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS Files -->
    <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="" data-background-color="black" data-image="{{asset('/assets/img/sidebar-1.jpg')}}" >

        <div class="logo"><a href="#"><img src="{{asset('/assets/img/logo.jpg')}}" alt=""></a>

        </div>


        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active ">
                    <a class="nav-link" href="{{ '/'}}">
                        <i class="material-icons">bubble_chart</i>
                        <p>Home</p>
                    </a>
                </li>

                <li class="nav-item active  ">
                    <a class="nav-link" href="{{ 'transactions'}}">
                        <i class="material-icons">dashboard</i>
                        <p>Transactions</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons">person</i>
                        <p>users</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons">content_paste</i>
                        <p>Reports</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{'history'}}">
                        <i class="material-icons">library_books</i>
                        <p>History</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons">location_ons</i>
                        <p>ATMs</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="">
                        <i class="material-icons">notifications</i>
                        <p>Notification</p>
                    </a>
                </li>
                               <li class="nav-item ">
                    <a class="nav-link" href="{{'file-import-export'}}">
                        <i class="material-icons">archive</i>
                        <p>Uploads</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
       <div class="main-panel">

           <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
               <div class="container-fluid">
                   <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                           <li class="nav-item dropdown">
                               <a class="nav-link" href="{{ 'main'}}" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   <i class="material-icons">person</i>
                                   <p class="d-lg-none d-md-block">
                                       Account
                                   </p>
                               </a>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                   <a class="dropdown-item" href="#">Profile</a>
                                   <a class="dropdown-item" href="#">Settings</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="#">Log out</a>
                               </div>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>

        <section class="content">
            @yield('content')
        </section>

    </div>
</div>
</body>

</html>
