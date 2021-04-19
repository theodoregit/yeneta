
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
            <li><a href="{{route('register')}}" class="d-flex align-items-center"><span class="wrap-icon icon-file-text mr-3"></span><span class="menu-text">Register</span></a></li>
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-table mr-3"></span><span class="menu-text">Students</span></a></li>
            <li><a href="{{route('assign')}}" class="d-flex align-items-center"><span class="wrap-icon icon-male mr-3"></span><span class="menu-text">Assign</span></a></li>
            <li><a href="{{route('paymentR')}}" class="d-flex align-items-center"><span class="wrap-icon icon-usd mr-3"></span><span class="menu-text">Payment</span></a></li>
            <li><a href="{{route('announcementsR')}}" class="d-flex align-items-center"><span class="wrap-icon icon-volume-up mr-3"></span><span class="menu-text">Announcement</span></a></li>
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
            <div class="col-md-11">
              <div class="row">
                <div class="row">
                  <div class="col-md-12">

                    <nav>
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Accounting</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Management</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Computer Science</a>
                        <form action="{{route('results')}}" method="get">
                          <div class="input-group nav-item">                          
                            <input type="text" name="query" class="form-control rounded" placeholder="Search" aria-label="Search"
                              aria-describedby="search-addon" required />
                            <button type="submit" class="btn btn-outline-primary">search</button>                          
                          </div>
                        </form>                      
                      </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                      
                        <table class="table table-hover table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">ID Number</th>
                              <th scope="col">Full Name</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Department</th>
                              <th scope="col">Section</th>
                              <th scope="col">Year</th>
                              <th scope="col">Semester</th>
                              <th scope="col">CCPA</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($students_a as $student)
                            <tr>
                              <th scope="row">{{$student->idnumber}}</th>
                              <td>{{$student->fullname}}</td>
                              <td>{{$student->gender}}</td>
                              <td>{{$student->dept_name}}</td>
                              <td>{{$student->section}}</td>
                              <td>{{$student->year}}</td>
                              <td>{{$student->semester}}</td>
                              <td>{{$student->cgpa}}</td>
                              <td>
                                <a href="{{route('studentdetail', ['idnumber' => preg_replace('/[^a-zA-Z0-9\s]/', '', $student->idnumber)])}}" class="btn btn-outline-primary btn-sm">See Detail</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

                      </div>
                      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      
                        <table class="table table-hover table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">ID Number</th>
                              <th scope="col">Full Name</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Department</th>
                              <th scope="col">Section</th>
                              <th scope="col">Year</th>
                              <th scope="col">Semester</th>
                              <th scope="col">CCPA</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($students_m as $student)
                            <tr>
                              <th scope="row">{{$student->idnumber}}</th>
                              <td>{{$student->fullname}}</td>
                              <td>{{$student->gender}}</td>
                              <td>{{$student->dept_name}}</td>
                              <td>{{$student->section}}</td>
                              <td>{{$student->year}}</td>
                              <td>{{$student->semester}}</td>
                              <td>{{$student->cgpa}}</td>
                              <td>
                                <a href="{{route('studentdetail', ['idnumber' => preg_replace('/[^a-zA-Z0-9\s]/', '', $student->idnumber)])}}" class="btn btn-outline-primary btn-sm">See Detail</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

                      </div>
                      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        
                        <table class="table table-hover table-striped">
                          <thead class="thead-dark">
                            <tr>
                              <th scope="col">ID Number</th>
                              <th scope="col">Full Name</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Department</th>
                              <th scope="col">Section</th>
                              <th scope="col">Year</th>
                              <th scope="col">Semester</th>
                              <th scope="col">CCPA</th>
                              <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($students_c as $student)
                            <tr>
                              <th scope="row">{{$student->idnumber}}</th>
                              <td>{{$student->fullname}}</td>
                              <td>{{$student->gender}}</td>
                              <td>{{$student->dept_name}}</td>
                              <td>{{$student->section}}</td>
                              <td>{{$student->year}}</td>
                              <td>{{$student->semester}}</td>
                              <td>{{$student->cgpa}}</td>
                              <td>
                                <a href="{{route('studentdetail', ['idnumber' => preg_replace('/[^a-zA-Z0-9\s]/', '', $student->idnumber)])}}" class="btn btn-outline-primary btn-sm">See Detail</a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

                      </div>
                    </div>


                    
                  </div>
                </div><br><br>
                
              </div>
              </div>
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

