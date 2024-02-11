<!DOCTYPE HTML>
<html>

<head>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    h2 {
      color: #333;
    }

    form {
      width: 50%;
      margin: 0 auto;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 8px;
      margin: 5px 0 15px 0;
      display: inline-block;
      box-sizing: border-box;
    }

    input[type="radio"] {
      margin-right: 5px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    #output {
      margin-top: 20px;
    }
  </style>
</head>

<body>

  <?php
  // define variables and set to empty values
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2>PHP Form Validation Example</h2>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Website: <input type="text" name="website"><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other<br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <div id="output">
    <?php
    echo "<h2>Your Input:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Website: $website <br>";
    echo "Comment: $comment <br>";
    echo "Gender: $gender <br>";
    ?>
  </div>
  
  <?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "myDB";

//for Socitcloud
$servername = "localhost";
$username = "webprogmi221";
$password = "g_6bCitLu.ljMK*m";
$dbname = "webprogmi221";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cpagot_myguests (name, email, website, comment, gender)
VALUES ('$name', '$email', '$website', '$comment', '$gender')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

  






</body>

</html>
