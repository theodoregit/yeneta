
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
            <li><a href="{{route('assign')}}" class="d-flex align-items-center"><span class="wrap-icon icon-male mr-3"></span><span class="menu-text">Assign</span></a></li>
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
              <div class="row-group col-md-7">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <!--<div class="panel-heading"> <p  <p style="font-size:40px<b><i> <b><i>">Create Announcement</b></i></p></div>-->                    
                    <p><b><i><SPAN STYLE="color: blue; font-size: 40pt; font-family: Times New Roman">Payment</SPAN></i></b></p>
                    <!--<p><b><i> <p style="font-size:40px">Create Announcement</b></i></p>-->
                  <div class="row">
                    <div class=" container">
                    <input type="text" class="form-control" name="search" id="" placeholder="Search here...">
    
                       <button type="submit" class="btn btn-primary">Search</button>
    
                    <table class="table table-dark w-auto table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Student ID</th>
                          <th scope="col">Full name</th>
                          <th scope="col">Paid For</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Arrears</th>
                          <th scope="col">Total</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($payments as $payment)
                      <form action="{{route('paymentstore', ['idnumber' => $payment->idnumber])}}" method="POST">
                        {{ csrf_field() }}
                      @php
                        $gregorian = new DateTime('now');
                        $ethiopic = Andegna\DateTimeFactory::fromDateTime($gregorian);
                      @endphp   
                        <td>{{$payment->idnumber}}</td>
                        <td>{{$payment->fullname}}</td>
                        <td>
                          <select class="form-select" aria-label="Default select example">
                            
                            <option selected value={{$ethiopic->format('m')}}>
                             @if ($ethiopic->format('m') == 1)
                             January
                             @elseif ($ethiopic->format('m') == 2)
                             February
                             @elseif ($ethiopic->format('m') == 3)
                             March
                             @elseif ($ethiopic->format('m') == 4)
                             April
                             @elseif ($ethiopic->format('m') == 5)
                             May
                             @elseif ($ethiopic->format('m') == 6)
                             June
                             @elseif ($ethiopic->format('m') == 7)
                             July
                             @elseif ($ethiopic->format('m') == 8)
                             ሚያዝያ
                             @elseif ($ethiopic->format('m') == 9)
                             September
                             @elseif ($ethiopic->format('m') == 10)
                             October
                             @elseif ($ethiopic->format('m') == 11)
                             November
                             @elseif ($ethiopic->format('m') == 12)
                             December
                             @endif
                            </option>
                            <option value="1">September</option>
                            <option value="2">October</option>
                            <option value="3">November</option>
                            <option value="3">December</option>
                            <option value="3">January</option>
                            <option value="3">February</option>
                            <option value="3">March</option>
                            <option value="3">April</option>
                            <option value="3">May</option>
                            <option value="3">June</option>
                            <option value="3">July</option>
                            <option value="3">August</option>
                          </select>
                        </td>
                        <td>
                          @php
                            if ($payment->dept_name == 'management'){
                                $amount = 300.0;
                                echo $amount;
                              }
                            elseif ($payment->dept_name == 'accounting'){
                                $amount = 350.0;
                                echo $amount;
                              }
                            else{
                                $amount = 400.0;
                                echo $amount;
                              }
                          @endphp
                        </td>
                        <td>
                        @php
                          if ($ethiopic->format('d') <= 2) {
                            $arrears = 0.0;
                            echo $arrears;
                          } elseif ($ethiopic->format('d') >= 3 && $ethiopic->format('d') <= 7) {
                            $arrears = 15.0;
                            echo $arrears;
                          } elseif ($ethiopic->format('d') >= 8 && $ethiopic->format('d') <= 15) {
                            $arrears = 50.0;
                            echo $arrears;
                          }else{
                            $temp = 50.0;
                            for ($i=16; $i <= $ethiopic->format('d'); $i++) { 
                              $perday = $perday + 5;
                            }
                            $arrears = $temp + $perday;
                            echo $arrears;
                          }
                        @endphp
                        </td>
                        <td>
                          @php
                            $total = $amount + $arrears;
                            echo $total;
                          @endphp
                        </td>
                        <td>
                          <button class="btn btn-sm btn-primary">Pay</button>
                        </td>
                      </form>                 
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="row-group col-md-5">
                <div class="col-md-5">
                  @include('includes.filter-payment')
                </div>
              </div>
          </div>
      </div>  
      </div>
      <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
    </main>
    
    

    <script src="../../app/js/jquery-3.3.1.min.js"></script>
    <script src="../../app/js/popper.min.js"></script>
    <script src="../../app/js/bootstrap.min.js"></script>
    <script src="../../app/js/main.js"></script>
  </body>
</html>

