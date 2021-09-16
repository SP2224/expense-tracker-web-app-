<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Document</title>
</head>
<body>
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
  
  <div class="w3-container">
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
    <div>
        <form action="/action_page.php">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="amount">Amount</label><br>
            <input type="text" id="amount" name="amount"><br><br>
            
            <label for="amount">TO Account</label><br>
            <input type="text" id="toaccount" name="toaccount"><br><br>
            <label for="amount">Date</label><br>
            <input type="text" id="date" name="date"><br><br>
            <label for="amount">Description</label><br>
            <input type="text" id="description" name="description"><br><br>

            <input type="submit" value="Submit">
            <input type="reset">
          </form> 
    </div>

  </div>
  
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>