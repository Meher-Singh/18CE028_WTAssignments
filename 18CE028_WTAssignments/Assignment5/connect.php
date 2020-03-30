<?php
$conn=mysqli_connect('localhost','root');
mysqli_select_db($conn,'assignment_5');

if(!$conn)
{
echo "Error in connecting Database";
}
else
{
  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if (isset($_POST["Participant"]) && isset($_POST["College"]) && isset($_POST["Branch"]) && isset($_POST["Occupation"]) && isset($_POST["Email"]) && isset($_POST["phone"]) && isset($_POST["Gender"])){
      
      $Pname=$_POST["Participant"];
      $Cname=$_POST["College"];
      $Branch=$_POST["Branch"];
      $Occ=$_POST["Occupation"];
      $email=$_POST["Email"];
      $phone=$_POST["phone"];
      $Gender=$_POST["Gender"];

        
          if($Pname!=' ' && $Cname!=' ' && $Branch!=' ' && $Occ!=' ' && $email!=' '  && $phone!=' ' &&  $Gender!=' '){
              $sql="INSERT INTO assignment_5(Participant,College,Branch,Occupation,Email,phone,Gender) values ('$Pname','$Cname','$Branch','$Occ',$email','$phone','$Gender')";
            $result=mysqli_query($conn,$connect);
            die;
            if($result){
        echo "<script>alert(\"Registration Successfull\");</script>";
      }
    }
  }
  else{
    echo "<script>alert(\"Registration Failed\");</script>";
  }
}
?>
