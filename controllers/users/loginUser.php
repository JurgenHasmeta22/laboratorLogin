<!-- <?php
// include('../../config/dbConnect.php');

// if(isset($_POST['Username']) && isset($_POST['Password'])) {
//   $username = $_POST['Username'];
//   $password = $_POST['Password'];

//   if (
//     $username == NULL || 
//     $password == NULL
//   ) {
//     $res = [
//       'status' => 422,
//       'message' => 'All fields are mandatory'
//     ];
//     echo json_encode($res);
//     return;
//   }

//   $query = "SELECT * FROM perdoruesi WHERE Username='$username'";
//   $result = mysqli_query($connection, $query);

//   if($result) {
//     $res = [
//       'status' => 200,
//       'message' => 'User exists'
//     ];
//     echo json_encode($res);
//     return;
//   }
//   else {
//     $res = [
//       'status' => 404,
//       'message' => 'User doesnt exist'
//     ];
//     echo json_encode($res);
//     return;
//   }
// }

  session_start(); 
  include('../../controllers/users/loginUser.php');

  if (isset($_POST['Username']) && isset($_POST['Passwordi'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $username = validate($_POST['Username']);
    $password = validate($_POST['Passwordi']);

    if (empty($uname)) {
      header("Location: login.php?error=User Name is required");
      exit();
    } else if(empty($pass)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
      $sql = "SELECT * FROM Perdoruesi WHERE Username='$username' AND Passwordi='$password'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
          if ($row['user_name'] === $uname && $row['password'] === $pass) {
            $_SESSION['Username'] = $row['Username'];
            $_SESSION['Email'] = $row['Email'];
            $_SESSION['PerdoruesId'] = $row['PerdoruesId'];
            header("Location: index.php");
            exit();
          } else {
            header("Location: login.php?error=Incorect User name or password");
            exit();
          }
      } else {
        header("Location: login.php?error=Incorect User name or password");
        exit();
      }
    }
  } else {
    header("Location: login.php");
    exit();
  }
?>