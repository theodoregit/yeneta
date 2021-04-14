
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
          <div class="">
            </div>
            <a class="navbar-brand"  href="a"><img src="{{url('image\ycollage.jpg')}}"></a>
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
            <li><a href="{{route('studentsList')}}" class="d-flex align-items-center"><span class="wrap-icon icon-table mr-3"></span><span class="menu-text">Students</span></a></li>
            <li><a href="{{route('gradesR')}}" class="d-flex align-items-center"><span class="wrap-icon icon-font mr-3"></span><span class="menu-text">Grades</span></a></li>
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-usd mr-3"></span><span class="menu-text">Payment</span></a></li>
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
            @if ($students->isNotEmpty())
                @foreach ($students as $student)
                    <div class="student-list">
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
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">{{$student->idnumber}}</th>
                                <td>{{$student->fullname}}</td>
                                <td>{{$student->gender}}</td>
                                <td>{{$student->dept_name}}</td>
                                <td>{{$student->section}}</td>
                                <td>{{$student->year}}</td>
                                <td>{{$student->semester}}</td>
                                <td>{{$student->cgpa}}</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                @endforeach
            @else
                <div>
                    <h2>NO student found</h2>
                </div>
            @endif
          </div>  
</main>
    
    

    <script src="../../app/js/jquery-3.3.1.min.js"></script>
    <script src="../../app/js/popper.min.js"></script>
    <script src="../../app/js/bootstrap.min.js"></script>
    <script src="../../app/js/main.js"></script>
  </body>
</html>

