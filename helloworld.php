<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>My server</title>
</head>

<body>

  <?php echo ("Hello World!") ?>
  <h1>
    <?php echo ("lorem 59") ?>
  </h1>
  <?php echo "<p> hiiiiiiiiiiiii </p>" ?>

  <!-- <?php
        $age = 53;


        echo "My age is $age ";

        ?> -->



  <form action="helloworld.php" method="get">
    Name: <input type="text" name="namee" id="">
    <input type="submit" value="Submit">
  </form>
  <br>
  <?php echo $_GET["namee"] ?>
  <br>
  <?php

  $friends = array("Tareq", 2, 3, 4);
  echo $friends[0];
  echo count($friends);
  ?>



  <form action="helloworld.php" method="post">
    banana <input type="checkbox" name="fruits[]" value="banana" id="">
    apple <input type="checkbox" name="fruits[]" value="apple" id="">
    mango <input type="checkbox" name="fruits[]" value="mango" id="">
    strawberry <input type="checkbox" name="fruits[]" value="strawberry" id="">
    grape <input type="checkbox" name="fruits[]" value="grape" id="">
    <br>
    <input type="submit" value="Submit">
  </form>


  <form action="helloworld.php" method="post">
    Enter student name <input type="text" name="student" id="">

    <input type="submit" value="Submit">
  </form>

  <?php

  // $fruits = $_POST["fruits"];
  // echo $fruits[0];
  // echo $fruits[1];

  ?>


  <?php

  $grades = array("Pam" => "A+", "Tamim" => "B+");
  echo $grades[$_POST["student"]];



  ?>

  <?php

  function  sayHI($name)
  {
    echo "Hello $name!";
  }

  sayHI("Tareq");

  ?>

  <?php

  function sum($a, $b)
  {
    return $a + $b;
  }

  ?>

  <form action="helloworld.php" method="POST">

    <input type="text" name="value1" id="">
    <input type="text" name="value2" id="">
    <input type="submit" value="Submit">
  </form>

  <?php

  $value = sum($_POST["value1"], $_POST["value2"]);
  echo $value;
  ?>

  <?php

  $num = 5;

  if ($num >= 5) {
    echo "Greater than or equal 5";
  } else {
    echo "less than 5";
  }

  ?>

  <?php

  $isMale = false;
  $isTall = false;

  if ($isMale && $isTall) {
    echo "You are a tall man";
  } else if ($isMale && !$isTall) {
    echo "You are a short male";
  } else {
    echo "You are not a male";
  }
  ?>


  <form action="helloworld.php" method="POST">
    <input type="text" name="value1" id="">
    <input type="text" name="value2" id="">
    <br>
    + <input type="radio" name="operator" value="+" id=""> <br>
    - <input type="radio" name="operator" value="-" id=""> <br>
    * <input type="radio" name="operator" value="*" id=""> <br>
    / <input type="radio" name="operator" value="/" id=""> <br>
    <input type="submit" value="Submit">

  </form>

  <?php

  if ($_POST["operator"] == "+") {
    echo $_POST["value1"] + $_POST["value2"];
  } else  if ($_POST["operator"] == "-") {
    echo $_POST["value1"] - $_POST["value2"];
  } else  if ($_POST["operator"] == "*") {
    echo $_POST["value1"] * $_POST["value2"];
  } else {
    echo $_POST["value1"] / $_POST["value2"];
  }

  ?>

  <?php

  echo "<br>";
  for ($i = 1; $i <= 20; $i++) {
    echo "$i <br>";
  }

  ?>


</body>

</html>