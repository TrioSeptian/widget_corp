<?php
//1. buat koneksi
/*$dbhost = "localhost";
$dbuser = "";
$dbpass = "";
$dbname = "widget_corp";
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);*/
$db = mysqli_connect("localhost","root","","widget_corp");

// test konek gak
if (mysqli_connect_errno()) {
	die("database connection failed". 
	mysqli_connect_errno ().
	"(". mysqli_connect_errno().")");
}
?>
<?php require_once("../includes/function.php"); ?>
<?php
 // 2. pilih query
 /*$query = "SELECT * ";
 $query = "FROM subjects ";
 $query = "ORDER BY position ASC";
 $result = mysqli_query($db, $query);

 // test eror tidak
  if (!$result){
  	die ("database query gagal");
  }*/
  $query = "SELECT * FROM subjects ORDER BY position ASC";
   $result = mysqli_query($db, $query);
  ?>
<?php include("../includes/layouts/header.php"); ?>
		<div id= "main">
			<div id = "navigation">
				<ul class = "subjects" >
	<?php
	// 3. use return data

		while ($subjects = mysqli_fetch_assoc($result)){
			?>
			<li><?php echo $subjects ["menu_name"]. "(". $subjects["id"]. ")"; ?></li>
			<?php
		}
		?>
	</ul>

			</div>
		}
		<div id = "page">
			<h2> Manage Content </h2> 
		</div>
	</div>

	/<?php 
	//4. release returned data
	mysqli_free_result($result);
	?>

<?php include("../includes/layouts/footer.php"); ?>
<?php
 // 5. close connection
mysqli_close($db);
?>