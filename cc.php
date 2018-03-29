 <?php
$conn=mysqli_connect("localhost","jangared_indeed","reddycse502","jangared_indeed");
    if (mysqli_connect_errno($conn))
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

if(isset($_POST['submit'])) {
              $name = mysqli_real_escape_string($conn,$_POST['name']);
              $email = mysqli_real_escape_string($conn,$_POST['email']);
              $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
              $comment = mysqli_real_escape_string($conn,$_POST['comment']);
             
if (!mysqli_query($conn,"INSERT INTO contact (name, email, mobile, comment) 
VALUES ('$name', '$email','$mobile','$comment')"))
  {
  echo("Error description: " . mysqli_error($conn));
  }
}

 mysqli_close($conn);
?>
