
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../../app/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../../app/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../app/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="../../../app/css/style.css">

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
                  <div class="col-md-11">                    
                  </div>
                </div><br><br>
                <h4>{{$results[0]->fullname}} [<strong>{{$results[0]->idnumber}}</strong>]</h4>
                @if($results[0]->dept_name == 'computer science')
                <table class="table table-hover table-striped">
                  <thead class="thead-dark">
                    <tr>                      
                      <th scope="col">Department</th>
                      <th scope="col">Year</th>
                      <th scope="col">Semester</th>
                      <th scope="col">Year 1 - Sem I</th>
                      <th scope="col">Year 1 - Sem II</th>
                      <th scope="col">Year 2 - Sem I</th>
                      <th scope="col">Year 2 - Sem II</th>
                      <th scope="col">Year 3 - Sem I</th>
                      <th scope="col">Year 3 - Sem II</th>
                      <th scope="col">Year 4 - Sem I</th>
                      <th scope="col">Year 4 - Sem II</th>
                      <th scope="col">CGPA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">{{$results[0]->dept_name}}</th>
                      <td>{{$results[0]->year}}</td>
                      <td>{{$results[0]->semester}}</td>
                      <td>{{$results[0]->s11gpa}}</td>
                      <td>{{$results[0]->s12gpa}}</td>
                      <td>{{$results[0]->s21gpa}}</td>
                      <td>{{$results[0]->s22gpa}}</td>
                      <td>{{$results[0]->s31gpa}}</td>
                      <td>{{$results[0]->s32gpa}}</td>
                      <td>{{$results[0]->s41gpa}}</td>
                      <td>{{$results[0]->s42gpa}}</td>
                      <td>{{$results[0]->cgpa}}</td>                      
                    </tr>
                  </tbody>
                </table>
                @else
                <table class="table table-hover table-striped">
                  <thead class="thead-dark">
                    <tr>                      
                      <th scope="col">Department</th>
                      <th scope="col">Year</th>
                      <th scope="col">Semester</th>
                      <th scope="col">Year 1 - Sem I</th>
                      <th scope="col">Year 1 - Sem II</th>
                      <th scope="col">Year 2 - Sem I</th>
                      <th scope="col">Year 2 - Sem II</th>
                      <th scope="col">Year 3 - Sem I</th>
                      <th scope="col">Year 3 - Sem II</th>
                      <th scope="col">CGPA</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">{{$results[0]->dept_name}}</th>
                      <td>{{$results[0]->year}}</td>
                      <td>{{$results[0]->semester}}</td>
                      <td>{{$results[0]->s11gpa}}</td>
                      <td>{{$results[0]->s12gpa}}</td>
                      <td>{{$results[0]->s21gpa}}</td>
                      <td>{{$results[0]->s22gpa}}</td>
                      <td>{{$results[0]->s31gpa}}</td>
                      <td>{{$results[0]->s32gpa}}</td>
                      <td>{{$results[0]->cgpa}}</td>                      
                    </tr>
                  </tbody>
                </table>
                @endif
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </main>
    
    

    <script src="../../../app/js/jquery-3.3.1.min.js"></script>
    <script src="../../../app/js/popper.min.js"></script>
    <script src="../../../app/js/bootstrap.min.js"></script>
    <script src="../../../app/js/main.js"></script>
  </body>
</html>

