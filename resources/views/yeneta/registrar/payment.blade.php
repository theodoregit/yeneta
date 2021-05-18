
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
    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}} ">
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
          @if (Auth::guard('registrar')->check())    
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
        @endif
        @if (Auth::guard('finance')->check())
        <ul>
          <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-home mr-3"></span><span class="menu-text">Home</span></a></li>
          <li><a href="{{route('statisticsF')}}" class="d-flex align-items-center"><span class="wrap-icon icon-bar-chart mr-3"></span><span class="menu-text">Statistics</span></a></li>
          <li><a href="{{route('paymentR')}}" class="d-flex align-items-center"><span class="wrap-icon icon-usd mr-3"></span><span class="menu-text">Payments</span></a></li>
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
        @endif
        @if (Auth::guard('dean')->check())
        <ul>
          <li><a href="{{route('index')}}" class="d-flex align-items-center"><span class="wrap-icon icon-home mr-3"></span><span class="menu-text">Home</span></a></li>
          <li><a href="{{route('grades')}}" class="d-flex align-items-center"><span class="wrap-icon icon-font mr-3"></span><span class="menu-text">Grade Reports</span></a></li>
          <li><a href="{{route('statistics')}}" class="d-flex align-items-center"><span class="wrap-icon icon-bar-chart mr-3"></span><span class="menu-text">Statistics</span></a></li>
          <li class="active"><a href="" class="d-flex align-items-center"><span class="wrap-icon icon-usd mr-3"></span><span class="menu-text">Payments</span></a></li>
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
        @endif
        </div>              
      </div>
      
    </aside>
    <main>
      <div class="site-section">
        <div class="container">
            <div class="row justify-content-center">
              <div class="row-group col-md-9">
                <div class="col-md-12">
                  <div class="panel panel-default">
                    <!--<div class="panel-heading"> <p  <p style="font-size:40px<b><i> <b><i>">Create Announcement</b></i></p></div>-->                    
                   <a class="btn btn-info btn-sm mb-2" href="{{route('paymentR')}}">Payment</a>
                    <!--<p><b><i> <p style="font-size:40px">Create Announcement</b></i></p>-->
                  <div class="row">
                    <div class=" container">
                      <form action="{{route('search')}}" class="mb-3">
                    <input type="text" class="form-control mb-2" name="search" id="search" placeholder="Search here...">
    
                       <button type="submit" class="btn btn-primary">Search</button>
                      </form>
                    <table class="table table-dark w-auto table-hover table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Student ID</th>
                          <th scope="col">Full name</th>
                          <th scope="col">Paid For</th>
                          <th scope="col">Amount</th>
                          <th scope="col">Penality</th>
                          <th scope="col">Total</th>
                          <th scope="col"></th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($payments as $payment)
                      <tr>
                      <form action="{{route('paymentstore', ['id' => $payment->id])}}" method="POST">
                        {{ csrf_field() }}
                      @php
                        $gregorian = new DateTime('now');
                        $ethiopic = Andegna\DateTimeFactory::fromDateTime($gregorian);
                      @endphp   
                        <td>{{$payment->idnumber}}</td>
                        <td>{{$payment->fullname}}</td>
                        <td>
                          <select class="form-select" aria-label="Default select example" name="month" id="month">
                            
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
                             ግንቦት
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
                            <option value="4">December</option>
                            <option value="5">January</option>
                            <option value="6">February</option>
                            <option value="7">March</option>
                            <option value="8">April</option>
                            <option value="9">May</option>
                            <option value="10">June</option>
                            <option value="11">July</option>
                            <option value="12">August</option>
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
                            $penality = 0.0;
                            echo $penality;
                          } elseif ($ethiopic->format('d') >= 3 && $ethiopic->format('d') <= 7) {
                            $penality = 15.0;
                            echo $penality;
                          } elseif ($ethiopic->format('d') >= 8 && $ethiopic->format('d') <= 15) {
                            $penality = 50.0;
                            echo $penality;
                          }else{
                            $temp = 50.0;
                            $perday = 0;
                            for ($i=16; $i <= $ethiopic->format('d'); $i++) { 
                              $perday = $perday + 5;
                            }
                            $penality = $temp + $perday;
                            echo $penality;
                          }
                        @endphp
                        </td>
                        <td>
                          @php
                            $total = $amount + $penality;
                            echo $total;
                          @endphp
                        </td>
                        <td>
                          <?php
                            echo "
                            <input type= 'text' value='$amount' name= 'amount' style= 'display:none'>
                            <input type= 'text' value='$penality' name= 'penality' style= 'display:none'>
                            <input type= 'text' value='$total' name= 'total' style= 'display:none'>
                            <input type= 'text' value='{$payment->fullname} ' name= 'fullname' style= 'display:none'>
                            <input type= 'text' value='{$payment->dept_name} ' name= 'dept_name' style= 'display:none'>
                            <input type= 'text' value='{$payment->idnumber} ' name= 'idnumber' style= 'display:none'>
                            "
                          ?>
                          <button class="btn btn-sm btn-primary">Pay</button>
                        </td>
                      </form> 
                      <td>
                                <!-- Button trigger modal -->
                                <a type="button" class="btn btn-info btn-sm float-right" data-toggle="modal" data-target="#myModal{{$payment->id}}">History</a>
                                <!-- Button trigger modal -->
              
                                <!-- Modal -->
                                  <div class="modal fade" id="myModal{{$payment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel" style="color: black">History of <span style="color: rgb(47, 56, 30)">{{$payment->fullname}}</span></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          </div>
                                          <div class="modal-body">
                                            <table  class="table table-success table-striped">
                                              <thead>
                                                <tr>
                                                  <th scope="col">Total Payment</th>
                                                  <th scope="col">Last Payment Time</th>
                                                  <th scope="col">Total Penality</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <tr>
                                                  <td>{{$payment->total}} ETB</td>
                                                  <td>
                                                    @php
                                                        $greog = new DateTime($payment->updated_at);
                                                        $eth = Andegna\DateTimeFactory::fromDateTime($greog);
                                                    @endphp
                                                    {{$eth->format('D-j-F-g-A')}}</td>
                                                  <td>{{$payment->penality}} ETB</td>
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                          <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                               <!-- Modal -->
                      </td>  
                    </tr>              
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="row-group col-md-3">
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
    <script src="{{asset('js/toastr.min.js')}} "></script>
    <script>
      @if (Session::has('success'))
        toastr.success("{{Session::get('success')}} ")
      @endif
      @if (Session::has('info'))
        toastr.info("{{Session::get('info')}} ")
      @endif
    </script>
  </body>
</html>

