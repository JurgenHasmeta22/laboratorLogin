<?php
  require '../../config/dbConnect.php';
 
  $query = "SELECT * FROM artikulli";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) > 0) {
    $json = array();
    while($row = mysqli_fetch_array($result)) {
      $json[] = array(
        'ArtikullId' =>  intval($row['ArtikullId']),
        'Emri' => $row['Emri'],
        'Pershkrim' => $row['Pershkrim'],
        'Ngjyra' => $row['Ngjyra'],
        'Masa' =>  intval($row['Masa']),
        'Cmimi' =>  floatval($row['Cmimi']),
        'Imazhi' =>  $row['Imazhi']
      );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
  } else {
    $res = [
      'status' => 404,
      'message' => 'Articles error'
    ];
    echo json_encode($res);
  }
?>