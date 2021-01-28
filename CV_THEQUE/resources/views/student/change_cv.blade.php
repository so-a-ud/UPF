<!DOCTYPE html>
<html lang="en">

@include('student.includes.head')
<!-- include libraries(jQuery, bootstrap) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" integrity="sha512-gp+RQIipEa1X7Sq1vYXnuOW96C4704yI1n0YB9T/KqdvqaEgL6nAuTSrKufUX3VBONq/TPuKiXGLVgBKicZ0KA==" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js" integrity="sha512-mh+AjlD3nxImTUGisMpHXW03gE6F4WdQyvuFRkjecwuWLwD2yCijw4tKA3NsEFpA1C3neiKhGXPSIGSfCYPMlQ==" crossorigin="anonymous"></script>


<body style="background-color: #bdc3c7;">

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    @include('student.includes.sidebar')
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom>
        <button class="btn btn-primary" id="menu-toggle"><i class="fas fa-sliders-h"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>


                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" style="padding: 30px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-dark" style="color: white">
                    <div class="card-header">Modifier CV</div>
       
                    <div class="card-body">
                            <div class="card-body">
            
                                <form method=”POST” action="">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                          <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Poste">
                                          </div>
                                        </div>
                                        <div class="col">
                                          <div class="form-group">
                                             <input type="text" class="form-control" placeholder="Employeur">
                                          </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Ville">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group input-daterange">
                                            <input type="text" class="form-control" value="2012-04-05">
                                            <div class="input-group-addon">  To  </div>
                                            <input type="text" class="form-control" value="2012-04-19">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="summernote" id="summernote"></textarea>
                                    </div>
                                    <button type=”submit” class="btn btn-danger btn-block">Save</button>
                                </form>
                                
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  @include('student.includes.footer')
  <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 200
        });
        $('.input-daterange input').each(function() {
    $(this).datepicker('clearDates');
});
    </script>
    

</body>

</html>

