<!--page de devoir apres ma l'enseignant yb3t devoir ytafficha lletudiant dans un tableau apres l'etudiant yroh blink llfichier du devoir pour valider-->
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
<style>
th {
  color:#D5DDE5;;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:23px;
  font-weight: 100;
  padding:24px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color:#666B85;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
td {
  background:#FFFFFF;
  padding:20px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:18px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}
.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 100px;
  margin: auto;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
</style>
<head>
<body style="margin-top:0px;background:#B0C4DE;">

<div class="vert" style="margin-left:0px;background:#5c60f5;">
        <header>
        <br>
        <h1 style="color:white;">ELS</h1>
        </header>
        <br>
        <div class="vertical-menu">
            <a href="student.php"><i class="fa fa-home" style="font-size:20px"> &nbsp;Home</i></a>
            <a href="courses.php" ><i class="fa fa-book" style="font-size:20px"> &nbsp;Course</i></a>
            <a href="test.php" class="active"><i class="fa fa-file-text" style="font-size:20px"> &nbsp;Test</i></a>
            <a href="note.php"><i class="fa fa-comments" style="font-size:20px"> &nbsp;Result</i></a>
            <a href="Profile.php"><i class="fa fa-user-circle-o" style="font-size:20px"> &nbsp;Profile</i></a>
            <br><br>
            <a href="logout.php" style="color:red;"><i class="fas fa-sign-out-alt" style="font-size:20px"> &nbsp;Sign out</i></a>
        </div>
      
    </div>
    
        <div class="main" style="margin-top:0px;">
            <h2>Test</h2>
             <div class="main" style="margin-top:0px;">
            <div style="border-radius:10px;width:800px;height:500px;background:white;width:1000px;height:570px;">
              <table class="table-fill"style="width:100%;border-radius:10px;">
                <tr>
                <th>Id</th>
                <th> File Name</th>
                <th>Action </th>
                </tr>
    <?php
        $DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'els';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM devoir");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>" . $row['nom'] . "</td>";
$link = $row['nom'];
echo "<td><a href='$link'>View</a></td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
			
    </table>
           </div>
         </div>
         <script type="text/javascript">

var popup;

function openPopup()

{

popup = window.open("<?=$link ?>","<?=$_SESSION['name']?>", "height=1500,width=1500")

}

function closePopup()

{

popup.close();

}

</script>

</body>
</html>