<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$world = "conectify";
$con=mysqli_connect($servername,$username,$password,$world);
if (mysqli_connect_errno($con)){
  echo "Baza je v k*rcu: " . mysqli_connect_error();
}
else {
  echo "Baza ti dela čuj ";
  mysqli_query($con,"INSERT INTO contacts (name, surname, birthday, address_1, address_2, city, region, zip, country, facebook, twitter, linkedin) VALUES ('$_REQUEST[name]', '$_REQUEST[surname]', '$_REQUEST[birthday]', '$_REQUEST[address_1]', '$_REQUEST[address_2]', '$_REQUEST[city]', '$_REQUEST[region]', '$_REQUEST[zip]', '$_REQUEST[country]', '$_REQUEST[facebook]', '$_REQUEST[twitter]', '$_REQUEST[linkedin]')");
}
?>

<!-- verification site -> send back data-->
 <table class="table">
  <tr>
    <th>Name:</th>
    <td><?php echo $_POST["name"]; ?></td>
  </tr>
  <tr>
    <th>Surname:</th>
    <td><?php echo $_POST["surname"]; ?></td>
  </tr>
  <tr>
    <th>Birthday:</th>
    <td><?php echo $_POST["birthday"]; ?></td>
  </tr>
  <tr>
    <th>Address 1:</th>
    <td><?php echo $_POST["address_1"]; ?></td>
  </tr>
  <tr>
    <th>Address 2:</th>
    <td><?php echo $_POST["address_2"]; ?></td>
  </tr>
  <tr>
    <th>City:</th>
    <td><?php echo $_REQUEST["city"]; ?></td>
  </tr>
  <tr>
    <th>Region:</th>
    <td><?php echo $_POST["region"]; ?></td>
  </tr>
  <tr>
    <th>Zip:</th>
    <td><?php echo $_POST["zip"]; ?></td>
  </tr>
  <tr>
    <th>Country:</th>
    <td><?php echo $_POST["country"]; ?></td>
  </tr>
  <tr>
    <th>Facebook:</th>
    <td><?php echo $_POST["facebook"]; ?></td>
  </tr>
  <tr>
    <th>Twitter:</th>
    <td><?php echo $_POST["twitter"]; ?></td>
  </tr>
  <tr>
    <th>Linkedin:</th>
    <td><?php echo $_POST["linkedin"]; ?></td>
  </tr>
</table>