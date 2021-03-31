<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../app/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../app/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../app/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../../app/css/style.css">

    <title>Yeneta</title>
  </head>
  <body>
  
  <header class="row">
  @include('includes.registrar-header')
</header>
    <br><br>
    
    <aside class="sidebar">
      <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
      </div>
      <div class="side-inner">

        <div class="logo-wrap">
          <div class="logo">
            <span>Y</span>
          </div>
          <span class="logo-text">{{ Auth::user()->name }}</span>
        </div>
          
        <!-- <div class="search-form">
          <form action="#">
            <span class="wrap-icon">
              <span class="icon-search2"></span>
            </span>
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div> -->
        <div class="nav-menu">
          <ul>
            <li><a href="{{route('registrar')}}" class="d-flex align-items-center"><span class="wrap-icon icon-home mr-3"></span><span class="menu-text">Home</span></a></li>
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-file-text mr-3"></span><span class="menu-text">Register</span></a></li>
            <li><a href="{{route('studentsList')}}" class="d-flex align-items-center"><span class="wrap-icon icon-table mr-3"></span><span class="menu-text">Students</span></a></li>
            <li><a href="{{route('gradesR')}}" class="d-flex align-items-center"><span class="wrap-icon icon-font mr-3"></span><span class="menu-text">Grades</span></a></li>
            <li><a href="{{route('payment')}}" class="d-flex align-items-center"><span class="wrap-icon icon-usd mr-3"></span><span class="menu-text">Payment</span></a></li>
            <li><a href="{{route('announcements')}}" class="d-flex align-items-center"><span class="wrap-icon icon-volume-up mr-3"></span><span class="menu-text">Announcement</span></a></li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="">
                    <span class="wrap-icon icon-lock mr-3">
                    </span>
                    <span class="menu-text">
                        Logout
                    </span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
          </ul>
        </div>
      </div>
      
    </aside>
    <main>
      <div class="site-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <form action="" method="POST">
                {{ csrf_field() }}
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First name">
                  </div>   
                  <div class="form-group">
                    <input type="text" name="middlename" class="form-control" id="middlename" placeholder="Middle name">  
                  </div> 
                  <div class="form-group">
                    <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last name">  
                  </div> 
                  <div class="form-group col-md-6">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>Students Id</option>
                      <option value="">RT/8996/12</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="" class="radio inline">
                      <input type="radio" name="gender" id="gender" value="male">
                      <span>Male</span>
                    </label>
                    <label for="" class="radio inline">
                      <input type="radio" name="gender" id="gender" value="female">
                      <span>Female</span>
                    </label>
                  </div>    
                </div>  
                <div class="col-md-6">
                  <div class="form-group col-md-6">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>department</option>
                      <option value="computer science" name = "dept_name">computer science</option>
                      <option value="management" name = "dept_name">management</option>
                      <option value="accounting" name = "dept_name">accounting</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>Section</option>
                      <option value="1" name = "section">One</option>
                      <option value="2" name = "section">Two</option>
                      <option value="3" name = "section">Three</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>year</option>
                      <option value="1" name = "year">One</option>
                      <option value="2" name = "year">Two</option>
                      <option value="3" name = "year">Three</option>
                      <option value="4" name = "year">Four</option>
                      <option value="5" name = "year">Five</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control" aria-label="Default select example">
                      <option selected>Semester</option>
                      <option value="1" name = "semester">One</option>
                      <option value="2" name = "semester">Two</option>
                      <option value="3" name = "semester">Three</option>
                    </select>
                  </div>
                 <div class="form-group">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Paid for this semester</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Promoted this semester</label>
                  </div>
                 </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
               </div>
              </form>
            </div>
          </div>
        </div>
      </div>  
    </main>
    
    

    <script src="../../app/js/jquery-3.3.1.min.js"></script>
    <script src="../../app/js/popper.min.js"></script>
    <script src="../../app/js/bootstrap.min.js"></script>
    <script src="../../app/js/main.js"></script>
  </body>
</html>

