
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
  @include('includes.instructor-header')
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
            <li><a href="{{route('instructor')}}" class="d-flex align-items-center"><span class="wrap-icon icon-home mr-3"></span><span class="menu-text">Home</span></a></li>
            <li><a href="{{route('courses')}}" class="d-flex align-items-center"><span class="wrap-icon icon-book mr-3"></span><span class="menu-text">My Courses</span></a></li>
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-table mr-3"></span><span class="menu-text">My Students</span></a></li>
            <li><a href="{{route('studentsGrades')}}" class="d-flex align-items-center"><span class="wrap-icon icon-font mr-3"></span><span class="menu-text">Fill Grades</span></a></li>
            <li><a href="{{route('announcement')}}" class="d-flex align-items-center"><span class="wrap-icon icon-volume-up mr-3"></span><span class="menu-text">Announcement</span></a></li>
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
              <div class="row col-md-11"> 
                <form action="{{route('submitGrades')}}" method="POST">
                    {{ csrf_field() }}
                      <div class="row">
                        <div class="col-md-5">
                          <select name="course" class="form-control" id="">
                            <option value="course1">Course One</option>
                            <option value="course1">Course Two</option>
                            <option value="course1">Course Three</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <button type="submit" class="btn btn-primary">Select</button>
                        </div>
                      </div> 
                  <button type="submit" class="btn btn-sm btn-success form-control col-md-1 float-right">Submit all</button>         
                <table class="table table-hover table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID Number</th>
                      <th scope="col">FullName</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Department</th>
                      <th scope="col">Section</th>
                      <th scope="col">Year/ Semester</th>
                      <th scope="col">Assessment</th>
                      <th scope="col">Mid</th>
                      <th scope="col">Final</th>
                      <th scope="col">Total</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $student)
                    <tr>
                      <th scope="row">{{$student->idnumber}}</th>
                      <td>{{$student->fullname}}</td>
                      <td>{{$student->gender}}</td>
                      <td>{{$student->dept_name}}</td>
                      <td>{{$student->section}}</td>
                      <td>{{$student->year}} / {{$student->semester}}</td>
                    @if (1!=1) <!--if specific student's grade submited just show the grade else make a fillable field-->
                        <td>assessment</td>
                        <td>mid</td>
                        <td>final</td>
                        <td>Total</td>
                    @else

                        <td><div class="form-group"><input type="text" name="assessment{{$student->idnumber}}" id="assessment{{$student->idnumber}}" class="col-md-9"></div></td>
                        <td><div class="form-group"><input type="text" name="final{{$student->idnumber}}" id="final{{$student->idnumber}}" class="col-md-9"></div></td>
                        <td><div class="form-group"><input type="text" name="total{{$student->idnumber}}" id="total{{$student->idnumber}}" class="col-md-9"></div></td>
                    
                    @endif
                    
                      <td>
                        <!-- Button trigger modal -->
                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$student->id}}">
                          Edit
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Fill Grades</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                {{$student->fullname}}
                                <hr>
                                @if(1==1) <!--if specific student's grade submited just show the grade else make a fillable field-->
                                <form action="" method="post">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="assessment">Assessment</label>
                                      <input class="form-control" name="assessment" type="number" placeholder="Assessment">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="mid">Mid Exam</label>
                                      <input class="form-control" name="mid" type="number" placeholder="Mid Exam">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="final">Final Exam</label>
                                      <input class="form-control" name="final" type="number" placeholder="Final Exam">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                  </div>
                                </form>
                                @else
                                <form action="" method="post">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="assessment">Assessment</label>
                                      <input class="form-control" name="assessment" value="12" type="number" placeholder="Assessment">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="mid">Mid Exam</label>
                                      <input class="form-control" name="mid" value="22" type="number" placeholder="Mid Exam">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="final">Final Exam</label>
                                      <input class="form-control" name="final" value="33" type="number" placeholder="Final Exam">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save</button>
                                  </div>
                                </form>
                                @endif
                              </div>                              
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </td>  <!--edit modal -->                    
                    </tr>                    
                  </tbody>
                </table>
            </form>
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

