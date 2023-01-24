<?php
include('../../config/dbConnect.php');

if(isset($_POST['PerdoruesId']) && isset($_POST['ArtikullId'])) {
  $perdoruesId = $_POST['PerdoruesId'];
  $artikullId = $_POST['ArtikullId'];

  if (
    $perdoruesId == NULL || 
    $artikullId == NULL
  ) {
    $res = [
      'status' => 422,
      'message' => 'All fields are mandatory'
    ];
    echo json_encode($res);
    return;
  }

  $query = "INSERT into blerje(PerdoruesId, ArtikullId) 
  VALUES ('$perdoruesId', '$artikullId')";
  $result = mysqli_query($connection, $query);

  if($result) {
    $res = [
      'status' => 200,
      'message' => 'Blerje created successfully'
    ];
    echo json_encode($res);
    return;
  }
  else {
    $res = [
      'status' => 500,
      'message' => 'Blerjeie not created'
    ];
    echo json_encode($res);
    return;
  }
}
?>