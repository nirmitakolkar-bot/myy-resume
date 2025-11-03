
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $gender = htmlspecialchars($_POST['gender']);
  $course = htmlspecialchars($_POST['course']);
  $address = nl2br(htmlspecialchars($_POST['address']));

  echo "
    <h3>✅ Application Submitted Successfully!</h3>
    <p><strong>Full Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Gender:</strong> $gender</p>
    <p><strong>Course:</strong> $course</p>
    <p><strong>Address:</strong><br>$address</p>
  ";
}
?> 