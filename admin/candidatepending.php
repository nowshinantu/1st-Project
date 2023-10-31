<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <script src="https://kit.fontawesome.com/7b8ecdb28e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
            
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
button{
    padding: 5px;
    background: limegreen;
}
button a{
    color: white;
    text-decoration: none;
}
.col-8{
  width: 80%;
  float: left;
}
.col-2{
  width: 10%;
  float: left;
  text-align: center;
}

.col-2 button{
  width:90%;
  padding: 8px;
  height: 43px;
}

.col-2 button a{
  text-decoration: none;
  color: white;
  font-weight: bold;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar_section">
            <?php include('partials/sidebar.php') ?>
        </div>
        <div class="main_section">
            
<?php
$sql = "SELECT * FROM `candidate_registration` WHERE status = 'pending'";
include_once '../db/dbconnect.php';

$container = getDataFromDB($sql);
?>

<h1 align="center">Candidate List</h1>
<div class="col-8">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

</div>
<div class="col-2"> <button><a href="candidate_registration.php">Add New</a>  </button></div>
<div class="col-2"> <button><a href="candidatelist.php">Full List</a></button></div>
<table id="myTable" border="2px solid black" width="100%">
<tr class="header">
        <th>serial_no</th>
        <th>Area Code</th>
        <th>N.For</th>
        <th>Cname</th>
        <th>Fname</th>
        <th>Mname</th>
        <th>email</th>
        <th>birthdate</th>
        <!-- <th>PNumber</th> -->
        <th>gender</th>
        <th>Bgroup</th>
        <th>nid</th>
        <!-- <th>password</th> -->
        <th>address</th>
        <th>Action</th>
    </tr>

<?php
foreach($container as $row){
    ?>
    <tr>
        <td><?php echo $row["serialno"] ?></td>
        <td><?php echo $row["ElectionArea"] ?></td>
        <td><?php echo $row["NominationFor"] ?></td>
        <td><?php echo $row["Cname"] ?></td>
        <td><?php echo $row["Fname"] ?></td>
        <td><?php echo $row["Mname"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["birthdate"] ?></td>
        <td><?php echo $row["gender"] ?></td>
        <td><?php echo $row["Bgroup"] ?></td>
        <td><?php echo $row["nid"] ?></td>
        <td><?php echo $row["address"] ?></td>
        <td><button><a href="candidatecode.php?serialno=<?php echo $row["serialno"] ?>">Approve</a></button><button style="background:red"><a href="server/deletecandidate.php?serialno=<?php echo $row["serialno"] ?>">Delete</a></button></td>
    </tr>
    <?php
}

?>
</table>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
        </div>
    </div>
</body>
</html>