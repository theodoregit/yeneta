
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
    <style>
      tbody {
          display:block;
          height:400px;
          overflow:auto;
      }
      thead, tbody tr {
          display:table;
          width:100%;
          table-layout:fixed;
      }
    </style>

    <title>Yeneta</title>
  </head>
  <body>
  
  <header class="row">
  @include('includes.dean-header')
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
            <li><a href="{{route('index')}}" class="d-flex align-items-center"><span class="wrap-icon icon-home mr-3"></span><span class="menu-text">Home</span></a></li>
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-font mr-3"></span><span class="menu-text">Grade Reports</span></a></li>
            <li><a href="{{route('statistics')}}" class="d-flex align-items-center"><span class="wrap-icon icon-bar-chart mr-3"></span><span class="menu-text">Statistics</span></a></li>
            <li><a href="{{route('payments')}}" class="d-flex align-items-center"><span class="wrap-icon icon-usd mr-3"></span><span class="menu-text">Payments</span></a></li>
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
            <div class="col-md-9">
              <div class="row">
                Student Grade Reports
                <div class="table-responsive">
                  <table class="table table-fixed w-auto table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Student Id</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Department</th>
                        <th scope="col">Section</th>
                        <th scope="col">Year</th>
                        <th scope="col">Semester</th>
                        <th scope="col">SGPA</th>
                        <th scope="col">CGPA</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                      <tr>
                        <th scope="row">YR/7845/12</th>
                        <td>Mark zuckenb elon</td>
                        <td>computer science</td>
                        <td>II</td>
                        <td>2</td>
                        <td>I</td>
                        <td>3.33</td>
                        <td>3.33</td>
                        <td><a href="#" class="btn btn-info btn-sm">More</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
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

