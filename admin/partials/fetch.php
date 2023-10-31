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
</style>

<?php
$area = $_GET["Area"];
$sql = "SELECT * FROM `pratice` WHERE AreaCode = '".$area."' OR NationalCode = '".$area."'";
include_once '../db/dbconnect.php';

$container = getDataFromDB($sql);
?>

<h1 align="center">Voter List</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable" border="2px solid black" width="100%">
<tr class="header">
        <th>serial_no</th>
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
        <th>userrole</th>
        <th>address</th>
        <th>status</th>
        <th>addedon</th>
    </tr>

<?php
foreach($container as $row){
    ?>
    <tr>
        <td><?php echo $row["serial_no"] ?></td>
        <td><?php echo $row["Cname"] ?></td>
        <td><?php echo $row["Fname"] ?></td>
        <td><?php echo $row["Mname"] ?></td>
        <td><?php echo $row["email"] ?></td>
        <td><?php echo $row["birthdate"] ?></td>
        <!-- <td><?php echo $row["PNumber"] ?></td> -->
        <td><?php echo $row["gender"] ?></td>
        <td><?php echo $row["Bgroup"] ?></td>
        <td><?php echo $row["nid"] ?></td>
        <!-- <td><?php echo $row["password"] ?></td> -->
        <td><?php echo $row["userrole"] ?></td>
        <td><?php echo $row["address"] ?></td>
        <td><?php echo $row["status"] ?></td>
        <td><?php echo $row["addedon"] ?></td>
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