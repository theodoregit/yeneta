
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
  @include('includes.student-header')
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
          <span class="logo-text">Yeneta</span>
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
            <li><a href="{{route('student')}}" class="d-flex align-items-center"><span class="wrap-icon icon-home mr-3"></span><span class="menu-text">Home</span></a></li>
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-font mr-3"></span><span class="menu-text">My Grade</span></a></li>
            <li><a href="{{route('announcementsS')}}" class="d-flex align-items-center"><span class="wrap-icon icon-volume-up mr-3"></span><span class="menu-text">Announcement</span></a></li>
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
                    
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Year 1 --- Semester I
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_1_I as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: {{$gpa_1_I}}<strong></strong></p>
                                            <p>Comulative GPA: {{$cgpa}}<strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Year 1 --- Semester II
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_1_II as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: {{$gpa_1_II}}<strong></strong></p>
                                            <p>Comulative GPA: <strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Year 2 --- Semester I
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_2_I as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: <strong></strong></p>
                                            <p>Comulative GPA: <strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Year 2 --- Semester II
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_2_II as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->year}}</td>
                                                        <td>{{$table->semester}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: <strong></strong></p>
                                            <p>Comulative GPA: <strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Year 3 --- Semester I
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_3_I as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: <strong></strong></p>
                                            <p>Comulative GPA: <strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Year 3 --- Semester II
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                   <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_3_II as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: <strong></strong></p>
                                            <p>Comulative GPA: <strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            @if($dept == 'computer science')
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Year 4 --- Semester I
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_4_I as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: <strong></strong></p>
                                            <p>Comulative GPA: <strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Year 4 --- Semester II
                                    </button>
                                </h2>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="row">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Course</th>
                                                        <th scope="col">Assessment</th>
                                                        <th scope="col">Mid Exam</th>
                                                        <th scope="col">Final Exam</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">Credit Hour</th>
                                                        <th scope="col">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($table_4_II as $table)
                                                    <tr>
                                                        <td>{{$table->course_name}}</td>
                                                        <td>{{$table->assessment}}</td>
                                                        <td>{{$table->mid_exam}}</td>
                                                        <td>{{$table->final_exam}}</td>
                                                        <td>{{$table->total}}</td>
                                                        <td>{{$table->credit_hrs}}</td>
                                                        <td>{{$table->grade_type}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            
                                        <div style="margin-left=100%">
                                            <p>Semester GPA: <strong></strong></p>
                                            <p>Comulative GPA: <strong></strong></p>
                                            <p>Status: <strong></strong></p>
                                        </div>
                                        

                                    </div>
                                </div>
                                </div>
                            </div>
                            @else

                            @endif
                        </div>


                        <!-- <div class="row">
                            <h4>Year 1 --- Semester I</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_1_I as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: {{$gpa_1_I}}<strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div><hr>
                        <div class="row">
                            <h4>Year 1 --- Semester II</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_1_II as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: {{$gpa_1_II}}<strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div><hr>
                        <div class="row">
                            <h4>Year 2 --- Semester I</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_2_I as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: <strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div><hr>
                        <div class="row">
                            <h4>Year 2 --- Semester II</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_2_II as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->year}}</td>
                                            <td>{{$table->semester}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: <strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div><hr>
                        <div class="row">
                            <h4>Year 3 --- Semester I</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_3_I as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: <strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div><hr>
                        <div class="row">
                            <h4>Year 3 --- Semester II</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_3_II as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: <strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div><hr>
                        @if($dept == 'computer science')
                        <div class="row">
                            <h4>Year 4 --- Semester I</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_4_I as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: <strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div><hr>
                        <div class="row">
                            <h4>Year 4 --- Semester II</h4>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">Assessment</th>
                                            <th scope="col">Mid Exam</th>
                                            <th scope="col">Final Exam</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Credit Hour</th>
                                            <th scope="col">Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($table_4_II as $table)
                                        <tr>
                                            <td>{{$table->course_name}}</td>
                                            <td>{{$table->assessment}}</td>
                                            <td>{{$table->mid_exam}}</td>
                                            <td>{{$table->final_exam}}</td>
                                            <td>{{$table->total}}</td>
                                            <td>{{$table->credit_hrs}}</td>
                                            <td>{{$table->grade_type}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            <div style="margin-left=100%">
                                <p>Semester GPA: <strong></strong></p>
                                <p>Comulative GPA: <strong></strong></p>
                                <p>Status: <strong></strong></p>
                            </div>
                            

                        </div>
                        @else

                        @endif -->
                        
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

