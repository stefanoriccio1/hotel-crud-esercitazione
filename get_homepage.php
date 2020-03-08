<?php
include 'database.php';

$query = "SELECT `id`, `floor` FROM `stanze`";
$result = $conn->query($query);


if ($result && $result->num_rows > 0) {
  $rooms = [];
  while($row = $result->fetch_assoc()) {
    $rooms[] = $row;
  }
}
elseif ($result) {
  echo "0 results";
}
else {
  echo "query error";
}
echo json_encode($rooms);
$conn->close();

?>
