
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
<<<<<<< HEAD
            <div class="col-md-11">
                <div class="row">

                  <div class="col-md-5">
                  <form action="" method="POST">
                    <select name="course" class="form-control" id="">
                      <option value="course1">Course One</option>
                      <option value="course1">Course Two</option>
                      <option value="course1">Course Three</option>
                    </select>
                  </div>
                </div>                      
                <br>

              <div class="row">                
=======
            <div class="col-md-12">
              <div class="row">
                <!-- <div class="row">
                  <form action="{{route('teaching_courses')}}" method="post" class="form-inline">
                    {{ csrf_field() }}
                    <div class="form-group mx-sm-3 mb-2">
                      <select name="course" class="form-control" id="">
                        <option value="">--Select Course--</option>
                        @foreach($courses as $course)
                        <option value="{{$course->course}}">{{$course->course}}</option>
                        @endforeach
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Select</button>
                  </form>
                </div>             -->
>>>>>>> 1a5676c83f15569ca661ac0b4c3f74ec37dfba82
                <table class="table table-hover table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">ID Number</th>
                      <th scope="col">FullName</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Department</th>
                      <th scope="col">Section</th>
                      <th scope="col">Year/ Semester</th>
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
                      <td>
                        <!-- Button trigger modal -->
                        
                        <a href="" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter{{$student->id}}">
                          Fill Grade
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
                                @if(1==1)
                                <form action="{{route('submitGrades', ['idnumber' => preg_replace('/[^a-zA-Z0-9\s]/', '', $student->idnumber)])}}" method="post">
                                  {{csrf_field()}}
                                  
                                  <div class="form-group mx-sm-3 mb-2">
                                      <select name="course" class="form-control" id="">
                                        <option value="">--Select Course--</option>
                                        @foreach($courses as $course)
                                        <option value="{{$course->course}}">{{$course->course}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="assessment">Assessment</label>
                                      <input class="form-control" value="" name="assessment" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="mid">Mid Exam</label>
                                      <input class="form-control" value="" name="mid" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="final">Final Exam</label>
                                      <input class="form-control" value="" name="final" type="number" placeholder="">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-primary">Save</button>
                                  </div>
                                </form>
                                @else
                                <form action="" method="post">
                                  {{ csrf_field() }}
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="assessment">Assessment</label>
                                      <input class="form-control" name="assessment" value="{{$student->assessment}}" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="mid">Mid Exam</label>
                                      <input class="form-control" name="mid" value="{{$student->mid_exam}}" type="number" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="final">Final Exam</label>
                                      <input class="form-control" name="final" value="{{$student->final_exam}}" type="number" placeholder="">
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                  </div>
                               
                                </form>    
                                @endif                          
                              </div>                              
                            </div>
                          </div>
                        </div>                        
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
    </main>
    
    

    <script src="../../app/js/jquery-3.3.1.min.js"></script>
    <script src="../../app/js/popper.min.js"></script>
    <script src="../../app/js/bootstrap.min.js"></script>
    <script src="../../app/js/main.js"></script>
  </body>
</html>

