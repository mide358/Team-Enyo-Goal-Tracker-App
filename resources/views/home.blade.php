<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dash.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add-goal.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/edit-form.css') }}">

    <title>Dashboard | Enyo</title>
</head>

<body>

<div class="form-popup" id="myForm">
          <form class="form-container">
            <h1>Add New Goal</h1>

            <label for="email"><b>Enter Goal Title</b></label>
            <input type="text" placeholder="Your Goal Title" name="goal" id="goal-title">

            <button type="submit" class="btn" id="add-goal-btn">Add</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </form>
    </div>

    <div class="form-popup" id="myTaskForm">
        <form class="form-container">
          <h1>Add New Task</h1>

          <label for="email"><b>Enter Task Title</b></label>
          <input type="text" placeholder="Your Task Title" name="task" taskTitle="">

          <button type="submit" class="btn" addTask="">Add</button>
          <button type="button" class="btn cancel" onclick="closeTaskForm()">Close</button>
        </form>
  </div>    

    <div class="container">
        <div class="row">
            <div class="col-md-4 sidebar">
            
                <div class="edit-popup" id="edit">
                  <form class="edit-container">
                   <!--  <label for="email"><b>Edit Goal Title</b></label> -->
                    <input type="text" placeholder="Your Goal Title" name="goal" id="edit-value">

                    <button type="submit" class="edit-btn" id="edit-goal-btn">Confirm</button>
                    <button type="button" class="edit-btn cancel" onclick="closeEdit()">Close</button>
                  </form>
                </div>
                
                <div class="edit-popup" id="edit-task">
                    <form class="edit-container">
                     <!--  <label for="email"><b>Edit Goal Title</b></label> -->
                      <input type="text" placeholder="Your Task Title" name="goal" id="edit-task-value">
  
                      <button type="submit" class="edit-btn" id="edit-task-btn">Confirm</button>
                      <button type="button" class="edit-btn cancel" onclick="closeEdit()">Close</button>
                    </form>
                </div>


                <h3 class="welcome-message">Welcome back, <span class="username">Mide</span></h3>
                <p class="title">
                    <img class="icon" src="https://res.cloudinary.com/mide358/image/upload/v1569410903/sniper_lzrtbc.png" /> Goals
                </p>

                <input class="search" type="text" name="name" placeholder="name your goal">

                <ul id="goal-list">
                    <li class="active initial">Test goal
                       <span id="clone">
                        <span id="drop-toggle" class="treedots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                        <div id="drop" class="dropdown-menu manipulate" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item edit" href="#" >
                                <i class="fa fa-edit"></i>Eedit
                            </a>
                            <a class="dropdown-item delete" href="#">
                                <i class="fa fa-trash-o"></i>Delete
                            </a>
                        </div>
                       </span>
                    </li>
                </ul>

                <button class="add-goal" onclick="openForm()">
                    <img class="icon" src="https://res.cloudinary.com/mide358/image/upload/c_scale,w_16/v1569327133/Group_2_nr6p6g.png">Add a new goal
                </button>



            </div>
            <div class="col-md-8 main">
                <nav class="navbar">
                    <a class="navbar-brand" href="#">
                        <img class="logo" src="https://res.cloudinary.com/mide358/image/upload/c_scale,w_115/v1569255273/Logo_aikcfk.png" alt="logo">
                    </a>

                    <form class="form-inline my-1" id="logout-form" action="" method="POST">
                        <button class="btn btn-outline-white btn-sm my-0" type="submit">Logout</button>
                    </form>

                </nav>
                <div class="content">

                    <div class="row content-header">
                        <div class="col-md-12 goal-header">
                            Climb mount kilimanjaro
                        </div>
                    </div>

                    <div class="row content-body">
                        <div class="col-md-4 sidebar">
                            <div class="taskContainer">
                            <p class="title">To do List</p>
<!-- Do not remove this attribute called taskList="" -->
                            <ul taskList=""> 
                                <li class="active initial">Test task
                                   <span id="clone">
                                    <span id="drop-toggle" class="treedots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                    <div id="drop" class="dropdown-menu manipulate" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item edit" href="#" >
                                            <i class="fa fa-edit"></i>Edit
                                        </a>
                                        <a class="dropdown-item delete" href="#">
                                            <i class="fa fa-trash-o"></i>Delete
                                        </a>
                                    </div>
                                   </span>
                                </li>
                            </ul>
                        </div>

                                <!-- <label class="custom-check">Plan the goal 
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-check">Morning  workout
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="custom-check">Work out one hour before going to bed
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label> -->

                                <button class="add-task" onclick="openTaskForm()">
                                    <img class="icon" src="https://res.cloudinary.com/mide358/image/upload/c_scale,w_16/v1569327133/Group_2_nr6p6g.png">Add a new task
                                </button>
                            
                        </div>
                        <div class="col-md-8 pt-3 goal-status">
                            <div class="progress-container row">
                                <div class="col-md-12">
                                    <p class="title">Progess</p>

                                    <div class="progress">
                                        <div class="progress-bar bg-orange" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" taskProgressBar="">
                                            25%
                                        </div>
                                    </div>

                                    <div class="progress-labels">
                                        <span class="stat">0%</span>
                                        <span class="end">100%</span>
                                    </div>
                                </div>

                                <p class="col-md-12 m-2 note">
                                    Complete the three remaining tasks to achieve this goal
                                </p>
                            </div>

                            <div class="row">
                                <div class="col-md-12 pt-3">
                                    <p class="title">Statistics</p>


                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('js/dashboard.js') }}"></script>

</body>

</html>