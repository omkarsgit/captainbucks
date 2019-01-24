<?php
    session_start();
    if(!isset($_SESSION["user_name"]))
    {
        $user_name=$_SESSION["user_name"];
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	        
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Captain Bucks</h3>
            </div>
            <ul class="list-unstyled">
                <li>
                	<a href="index.php" >Home</a>
                </li>   
                <li>
                    <a href="dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
        
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="toggleButton">
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            
                            <!-- Button trigger modal -->
					    <li><a href="logout.inc.php">Logout</a></li>
                    <li class="nav-item" data-toggle="modal" data-target="#exampleModal2">
					  
					</li>

                            
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Welcome, <?php $user_name=$_SESSION["user_name"]; echo $user_name ?><p>(Only set the amount for an individual category once a month)</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
            <div class="row">
  <div class="col-sm-7">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="category.php" >Expense tracker</a></h5>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
          Add Category
        </button>

        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="category.inc.php">
                <input type="text" name="category_name" placeholder="Enter category that you want to track">
                <input type="number" name="category_amount" placeholder="Enter a fixed amount ">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Add</button>
    </form>
      </div>
    </div>
  </div>
</div>
    


        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Expense</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" name="submitExpense" class="btn btn-primary">Submit</button>
    </form>
      </div>
    </div>
  </div>
</div>
      </div>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
            Reminders
        </h5>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
          Add
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Reminder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="reminder.inc.php">
                    <input type="text" name="date" placeholder="YYYY-MM-DD">
                    <input type="text" name="reminder_text" placeholder="Reminder text"> 
                    <input type="number" name="reminder_amount" placeholder="Reminder Amount">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
              </div>
            </div>
          </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Text</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    include 'dbc.inc.php';
                    $obj = new dbc();
                    $obj->connect();

                    if($conn->connect_error)
                    {
                        die("Connection failed: ".$conn->connect_error);
                    }

                    $sql="SELECT date, reminder_text, reminder_amount FROM Reminders WHERE user_name='$user_name'";

                      $result = mysqli_query($conn, $sql);

                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            echo "<tr><td>".$row["date"]."</td><td>".$row["reminder_text"]."</td><td>"."$".$row["reminder_amount"]."</td></tr>";
                        }
                        echo "</tbody></table>";
                        
            }
            $conn->close();

        ?>
            
      </div>
    </div>
  </div>
</div>

            <div class="line"></div>
            <div class="row">
                <div class"col-sm-7">
                <div class="card">
                  <div class="card-body">
                    <h4>Add Expenses</h4>
                        <form method="POST" action="expense.inc.php">
                            <select id="inputState" name="category_name" class="form-control">
                             <option>Food</option>
                            <option>Utilities</option>
                             <option>Leisure</option>
                            <option>Rent</option>
                            <option>Miscellaneous</option>
            </select>
            <input type="text" name="expense_text" placeholder="Enter expense">
            <input type="number" name="expense_amount" placeholder="Enter amount">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

            </form>
                            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            <tbody>

                <?php include 'calc2.php'; ?>
                  </div>

                </div>
            </div>

            <div class"col-sm-7" id="balancePrintout">
                <div class="card">
  <div class="card-body">
    <?php include 'calc1.php'; ?>

                <h3>Total set expense: <?php echo $totalExpenses2; ?></h3>
                <h3>Total spent: <?php echo $totalExpenses; ?></h3>
                <h5>Remaining Balance: <?php $bal=$totalExpenses2-$totalExpenses; echo $bal; ?></h5>
  </div>
</div>


            </div>  
        </div>
    </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>


</html>