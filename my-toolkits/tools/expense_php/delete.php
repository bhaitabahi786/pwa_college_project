
<?php
include_once '../../backend/config.php';

$sql = "DELETE FROM exp_tool WHERE id ='".$_GET["task"]."'";
mysqli_query($conn, $sql);

header("Location:expense-cal.php#gettable");

// if (mysqli_query($conn, $sql)) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . mysqli_error($conn);
// }
// mysqli_close($conn);
?>