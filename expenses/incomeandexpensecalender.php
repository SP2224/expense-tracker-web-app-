<?php 
require('config.php');
if(isset($_REQUEST['item'])){
    $item = stripslashes($_REQUEST['item']);
    $item = mysqli_real_escape_string($con,$item);
    $query = "INSERT into `todo`(item) VALUES ('$item')";
    $result = mysqli_query($con,$query);
   header("Location: incomeandexpensecalender.php");
}
$item = mysqli_query($con,"SELECT * FROM item");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./clock.css">

<link rel="stylesheet" href="app.css">
<link rel="stylesheet" href="./todocalender.css">



  <title>INCOME/EXPENSE CALENDER AND TODO</title>
</head>
<body onload="initClock()" class="light">
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="#"><b>DAILY EXPENSE TRACKER</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
      </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="w3-sidebar w3-bar-block w3-yellow w3-xxlarge" style="width:70px">
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a> 
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a> 
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a> 
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
    <a href="#" class="w3-bar-item w3-button"><i class="fa fa-trash"></i></a> 
  </div>
  
  <div style="margin-left:70px">
  <!-- clock start -->
  
<div>
<div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    

  </div>
  

  <!-- clock end -->

  <!-- calender start -->
  <body class="light">

<div class="calendar">
    <div class="calendar-header">
        <span class="month-picker" id="month-picker">February</span>
        <div class="year-picker">
            <span class="year-change" id="prev-year">
                <pre><</pre>
            </span>
            <span id="year">2021</span>
            <span class="year-change" id="next-year">
                <pre>></pre>
            </span>
        </div>
    </div>
    <div class="calendar-body">
        <div class="calendar-week-day">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
        </div>
        <div class="calendar-days"></div>
    </div>
    <div class="calendar-footer">
        <div class="toggle">
            <span>Dark Mode</span>
            <div class="dark-mode-switch">
                <div class="dark-mode-switch-ident"></div>
            </div>
        </div>
    </div>
    <div class="month-list"></div>
</div>


  <!-- calender end -->
  
  <div class="w3-container">
  </div>
  <div>
  <div>
                                        <div>




                                        <div class="heading">
                                                <h2>TO DO LIST</h2></div>
                                        <form method="POST" action="incomeandexpensecalender.php" id="todoform">
                                        <input type="text" name="item" class="taskinput">
                                        <button type="submit" class="addbtn" name="submit">Add Task</button>

                                        </form>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th id="left">N</th>
                                                    <th id="center">TASK</th>
                                                    <th id="right">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                              include 'config.php';
                                              $sql = "SELECT * FROM todo";
                                              $result = mysqli_query($con,$sql);
                                              if($result){
                                                while($row = mysqli_fetch_assoc($result)){
                                                  $id = $row['id'];
                                                  $item = $row['item'];
                                                
                                              
                                            ?>
                                                <tr>
                                                  <td><?php echo $id ?></td>
                                                  <td><?php echo $item ?></td>

                                                  <td>
                                                  <a class="btn btn-success btn-sm" href="edittodo.php?id=<?php echo $id ?>" role="button">Edit</a>
                                                  <a class="btn btn-danger btn-sm" href="deletetodo.php?id=<?php echo $id ?>" role="button">Delete</a>

                                                  </td>

                                                </tr>
                                            <?php }
                                            }
                                             ?>
                                            </tbody>
                                        </table>
                                        </div>
</div>

  </div>
  <form action="/incomedb.php">
    <label for="mode">Mode of Income</label>
    <input type="text" id="mode" name="mode" placeholder="CASH/CARD/SAVINGS"><br><br>
  </form>

  
    <div>
      <button style="background-color: #4CAF50;">INCOME</button>
      <button style="background-color: red">EXPENSE</button>

      <button style="background-color: blue">TRANSFER</button>

    </div>
    

  </div>
  <script src="./clock.js"></script>
  <script src="app.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>