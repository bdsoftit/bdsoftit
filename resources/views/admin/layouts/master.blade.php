<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('/images/logo/bdsoftit_logo.png')}}" />
    @yield('style')

    <title>Admin | BD Soft IT</title>

    <!-- Bootstrap core CSS-->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{asset('admin/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
.form-inline { 
  display: flex;
  flex-flow: row wrap;
  align-items: center;
      float: right;
}

/* Add some margins for each label */
.form-inline label {
  margin: 5px 10px 5px 0;
}

/* Style the input fields */
.form-inline input {
  vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
}

#fix{
  width: 140px;
}
/* Style the submit button */
/*.form-inline button {
  padding: 10px 20px;
  background-color: dodgerblue;
  border: 1px solid #ddd;
  color: white;
}*/

.form-inline button:hover {
  background-color: royalblue;
}

/* Add responsiveness - display the form controls vertically instead of horizontally on screens that are less than 800px wide */
@media (max-width: 800px) {
  .form-inline input {
    margin: 10px 0;
  }

  .form-inline {
    flex-direction: column;
    align-items: stretch;
  }
}
    </style>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="">Home</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="hidden" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <a ><button style="display:none" class="btn btn-primary" type="button">
              <i class="fa fa-star"></i>
            </button></a>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">

        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

            
            <a href="">&nbsp;&nbsp; {{Auth::user()->name}} </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{route('logout')}}" >Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">
            <i class="fa fa-fw fa-bullseye"></i>
            <span>Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('pakage.show')}}">
            <i class="fa fa-fw fa-bullseye"></i>
            <span>pakages</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('subscribers')}}">
            <i class="fa fa-fw fa-bullseye"></i>
            <span>Subscribers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('currency.show')}}">
            <i class="fa fa-fw fa-bullseye"></i>
            <span>Currency</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('emailhosting.show')}}">
            <i class="fa fa-fw fa-bullseye"></i>
            <span>Email Hosting</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('cloudhosting.show')}}">
            <i class="fa fa-fw fa-bullseye"></i>
            <span>Cloud Hosting</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          

          <!-- Page Content -->

        @if(!empty($errors->first()))
        <div class="row ">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="alert alert-danger">
                <span>{{ $errors->first() }}</span>
            </div></div>
          <div class="col-md-4"></div>
            
        </div>
       @endif

          @yield('content')

                    </div>
                   
              </div>
              
           
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © BD Soft IT</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/js/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

  </body>

</html>