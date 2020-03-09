<?php

require('registration.php');

  $conn = mysqli_connect('localhost','root','','file_system_db');

    if(isset($_POST['sign-up'])){

            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $idno = $_POST["idno"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $phone_number = $_POST["phone_number"];
            $job = $_POST["job"];
            $faculty = $_POST["faculty"];
            $password = $_POST["password"];


       $sql1 = "SELECT * FROM users WHERE email ='".$_POST["email"]."' ";
       $result = $conn->query($sql1);



                  if ($result->num_rows > 0) {

                      //echo "<script>alert('Sorry, user already exist!');</script>";
                      echo "Sorry, user already exist!";
                 }else{

                      $sql = "INSERT INTO users (first_name,last_name,idno,email,gender,phone_number,job,faculty,password) VALUES ('" . $_POST["first_name"] . "','" . $_POST["last_name"] . "','" . $_POST["idno"] . "','" . $_POST["email"] . "','" . $_POST["gender"] . "','" . $_POST["phone_number"] . "','" . $_POST["Job"]. "','" . $_POST["faculty"]. "','" . $_POST["password"]. "' )";

                          if ($conn->query($sql) === TRUE)
                          {
                              //echo "<script>location.replace('patient_success_msg.php');</script>";
                              echo "User registered successfull!!! Go to login button";
                              /*header("location: ../login.php");*/
                          }
                          else
                          {
                              echo "There was an Error";

                          }


                  }
            }else
            {

              echo "<script>alert('Please confirm your password again!!!')</script>";

            }

            $conn->close();
