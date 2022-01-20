
<?php
include_once '../../backend/config.php';

$sql = "DELETE FROM tasks WHERE task ='".$_GET["task"]."'";
mysqli_query($conn, $sql);

header("Location:todo_index.php");

// if (mysqli_query($conn, $sql)) {
//     echo "Record deleted successfully";
// } else {
//     echo "Error deleting record: " . mysqli_error($conn);
// }
// mysqli_close($conn);
?>


