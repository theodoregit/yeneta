
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
            <li><a href="{{route('paymentR')}}" class="d-flex align-items-center"><span class="wrap-icon icon-usd mr-3"></span><span class="menu-text">Payment</span></a></li>
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-volume-up mr-3"></span><span class="menu-text">Announcement</span></a></li>
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
                <div class="panel panel-default">
                <p><b><SPAN STYLE="color: blue; font-size: 40pt">Create Announcement</SPAN></b></p>

                <div class="panel-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="createannouncement-tab" data-toggle="tab" href="#createannouncement" role="tab" aria-controls="create-announcement" aria-selected="true">Create Announcement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="readannouncements-tab" data-toggle="tab" href="#readannouncements" role="tab" aria-controls="read-announcement" aria-selected="false">All Announcements</a>
                        </li>
                    </ul>
                </div>
              <div class="tab-content" id="myTabcontent">
                <div class="tab-pane fade show active" id="createannouncement" role="tabpanel" aria-labelledby="createannouncement-tab">
                  <form action="{{route('announcement.store')}} " method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-row mt-3">
                          <div class="form-group col-md-4">
                              <label for="CreatedFor" class="form-label">Who can read</label>
                              <select class="form-control" aria-label="Default select example" id="CreatedFor" name="CreatedFor">
                                  <option selected>Send to</option>
                                  <option value="Student">Student</option>
                                  <option value="Instructor">Instructor</option>
                                  <option value="Other Employees">Other Employees</option>
                              </select>
                          </div>
                          <div class="form-group col-md-4">
                              <label for="title" class="form-label">Title</label>
                              <input type="text" class="form-control" id="title" placeholder="ex. letter" name="title">
                          </div>
                          <div class="form-group col-md-4">
                              <label for="FileUploaded" class="form-label">Add File</label>
                              <input type="file" class="form-control" id="FileUploaded" name="FileUploaded">
                          </div>
                      </div>
                      
                      <div class="form-row">
                        <div class="form-group col-md-9">
                          <label for="content" class="form-label">Content</label>
                          <textarea class="form-control" id="content" rows="5" cols="5" name="content"></textarea>
                      </div>
                      <div class="form-group col-md-3">
                        <label for="deadline" class="form-label">Deadline</label>
                        <input type="date" name="deadline" id="deadline" name="deadline">
                      </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
              
                <div class="tab-pane fade show mt-3" id="readannouncements" role="tabpanel" aria-labelledby="read-announcements-tab">
                  <table class="table table-striped">
                    <thead class="table-dark">
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Uploaded File</th>
                        <th scope="col">Created For</th>
                        <th scope="col">Created By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Deadline</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($announcements as $announcement)
                          <tr>
                            <th scope="row">{{$announcement->id}}</</th>
                            <td>{{$announcement->title}}</td>
                            <td>{{$announcement->content}}</td>
                            <td><img src="{{$announcement->FileUploaded}}" alt="{{$announcement->title}}" width="90px" height="90px"></td>
                            <td>{{$announcement->CreatedFor}}</td>
                            <td>{{$announcement->CreatedBy}}</td>
                            <td>{{$announcement->created_at}}</td>
                            <td>{{$announcement->deadline}}</td>
                            <td>
                                <!-- Button trigger modal -->
                                <a type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#myModal{{$announcement->id}}">Edit</a>
                                <!-- Button trigger modal -->
              
                                <!-- Modal -->
                                  <div class="modal fade" id="myModal{{$announcement->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel">Editing <span style="color: yellowgreen">{{$announcement->title}}</span></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          </div>
                                          <div class="modal-body">
                                            <form method = "POST" action="{{route('announcement.edit', ['id' => $announcement->id])}}">
                                              <div class="panel panel-default">    
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                  <div class="form-row mt-3">
                                                    <div class="form-group col-md-4">
                                                        <label for="CreatedFor" class="form-label">Who can read</label>
                                                        <select class="form-control" aria-label="Default select example" id="CreatedFor" name="CreatedFor">
                                                            <option selected>{{$announcement->CreatedFor}}</option>
                                                            <option value="Student">Student</option>
                                                            <option value="Instructor">Instructor</option>
                                                            <option value="Other Employees">Other Employees</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" value="{{$announcement->title}}" id="title" placeholder="ex. letter" name="title">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="FileUploaded" class="form-label">Add File</label>
                                                        <input type="file" class="form-control" value="{{$announcement->FileUploaded}}" id="FileUploaded" name="FileUploaded">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                  <div class="form-group col-md-8">
                                                    <label for="content" class="form-label">Content</label>
                                                    <textarea class="form-control" id="content" rows="5" cols="5" name="content">{{$announcement->content}}</textarea>
                                                </div>
                                                <div class="form-group col-md-4">
                                                  <label for="deadline" class="form-label">Deadline</label>
                                                  <input type="date" class="form-control" value="{{$announcement->deadline}}" name="deadline" id="deadline" name="deadline">
                                                </div>
                                                </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                              </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                               <!-- Modal -->
                            </td>
                            <td><a href="{{route('announcement.delete', ['id' => $announcement->id])}} " class="btn btn-danger btn-sm">Delete</a></td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
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

