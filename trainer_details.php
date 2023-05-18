<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Trainer Details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<!-- Display a jumbotron with a background image -->
<div class="jumbotron" style="background: url('images/prsn.jpg') no-repeat;background-size: cover;height: 500px;"></div>	
<!-- Display a container and a card to hold the search form and the member details table -->
<div class="container">
    <div class="card">
         <div class="card-body" style="background-color:#ff9;color:black;">
             <!-- Display a row with a "Go Back" button, a title and a search form -->
             <div class="row">
                 <div class="col-md-1">
                     <a href="admin-panel.php" class="btn btn-light ">Go Back</a>
                 </div>
                 <div class="col-md-3">
                     <h3>Members Details</h3>
                 </div>
                 <div class="col-md-8">
                     <form class="form-group" action="trainer_search.php" method="post">
                         <div class="row">
                             <div class="col-md-10">
                                 <input type="text" name="search" class="form-control" placeholder="Enter ID or Name">
                             </div>
                             <div class="col-md-2">
                                 <input type="submit" name="member" class="btn btn-light" value="Search"> 
                             </div>
                         </div>           
                     </form>
                 </div>
             </div>
         </div>
         <!-- Display a card body for the member details table -->
         <div class="card-body" style="background-color:#ff9;color:black;">
             <div class="card-body">
                <!-- Display a table with the member details obtained from the 'get_member_details' function -->
                <table class="table table-hover">
                    <thead>
                     <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                         <th>Email</th>
                         <th>ID</th>
                         <th>Trainer ID</th>
                        </tr>   
                    </thead>
                    <tbody>
                      <?php get_member_details(); ?>
                    </tbody>
                </table>
             </div>
        </div>
    </div>
</div>
<!-- Include jQuery and Bootstrap scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>