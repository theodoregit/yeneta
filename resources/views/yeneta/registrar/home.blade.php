
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
            <li class="active"><a href="#" class="d-flex align-items-center"><span class="wrap-icon icon-home mr-3"></span><span class="menu-text">Home</span></a></li>
            <li><a href="{{route('register')}}" class="d-flex align-items-center"><span class="wrap-icon icon-file-text mr-3"></span><span class="menu-text">Register</span></a></li>
            <li><a href="{{route('studentsList')}}" class="d-flex align-items-center"><span class="wrap-icon icon-table mr-3"></span><span class="menu-text">Students</span></a></li>
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
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-9" style="background-color: rgb(194, 194, 194)">
                  <div class="form-row">
                    <div class="form-group col-md-5">
                      <form class="form-inline" action="{{route('registrar.store.todo')}}" method="POST">
                        {{ csrf_field() }}
                            <input type="text" class="col-md-8" name="todo" placeholder="Create a new Todo">
                            <button href="" class="btn btn-sm btn-success col-md-4" type="submit">Add</button>
                      </form>
                    </div>
                    <div class="form-group col-md-4">
                      <a href="{{route('announcementsR')}} " class="btn btn-primary btn-sm">Create Announcement</a>
                    </div>
                    <div class="form-group col-md-3">
                      <a href="#" class="btn btn-info btn-sm">File Transfer</a>
                    </div>
                  </div>

                  @if ($todos->count()>0)
                  @foreach ($todos as $todo)

                  {{$todo->todo}}

                  <a href=" {{route('registrar.delete.todo', ['id'=> $todo->id ])}}" class="btn btn-sm btn-danger float-right">Delete</a>

                 
                   <!-- Button trigger modal -->
                   <a type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#myModal">Edit</a>
                   <!-- Button trigger modal -->
 
                   <!-- Modal -->
                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h4 class="modal-title" id="myModalLabel">Editing</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         </div>
                         <div class="modal-body">
                           <form method = "POST" action="{{route('registrar.update.todo', ['id' => $todo->id])}}">
                             <div class="panel panel-default">    
                               {{ csrf_field() }}
                               <div class="form-group">
                                 <input type="text" value="{{$todo->todo}}" name="todo" class="form-control">
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

                  @if ($todo->completed)
                  <a href="{{ route('registrar.uncompleted.todo', ['id'=> $todo->id ] ) }} " class="btn btn-sm btn-warning float-right">Uncompleted</a>
                  @endif

                  @if(!$todo->completed)
                        <a href="{{ route('registrar.completed.todo', ['id'=> $todo->id ] ) }} " class="btn btn-sm btn-success float-right">Completed</a>
                  @else

                        <span class="text-success float-right">Completed</span>

                  @endif
                    
                  <hr>
                  @endforeach
                @else
                  <h3><p><b><i> <p style="color: black">First please add a Todo</b></i></p></h3>
                @endif
          </div>
          <hr>
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

