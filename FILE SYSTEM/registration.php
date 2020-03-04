<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>registration</title>
    <link rel="stylesheet" href="./css/registration.css">
  </head>
  <body>

      <h1>Register new account</h1>

        <div class ="wrapper" method ="post" action ="">

            <form class="" action="index.html" method="post">

              <p>Please provide all the relevant information below</p>
                <input type="text" name="firstname" id="name" placeholder="First_name" required ="Don't leave any empty spaces please"><br><br>
                <input type="text" name="lastname" id="name" placeholder="Last_name" required ="required *"><br><br>
                <input type="text" name="id_num" id="name" placeholder="ID number" required ="required *"><br><br>
                <input type="email" name="email_address" id="name" placeholder="E-mail address" required ="required *"><br><br>

                <select>
                  <option>-Select-</option>
                  <option>+91</option>
                  <option>+27</option>
                  <option>+11</option>
                  <option>+12</option>
                  <option>+97</option>
                  <option>+95</option>
                </select>

                  <input type="text" name="phone_number" id="name" placeholder="Phone_number" required ="required *"><br><br>

                Faculty: <select>
                  <option>-Select-</option>
                  <option>ARTS AND DESIGN</option>
                  <option>ECONOMICS AND FINANCE</option>
                  <option>ENGINEERING AND THE BUILDING ENVIRONMENT</option>
                  <option>HUMANITIES</option>
                  <option>ICT</option>
                  <option>MANAGEMENT SCIENCE</option>
                  <option>SCIENCE</option>
                </select><br><br>

            Gender:  <select>
                  <option>-Select-</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>Others</option>
                </select><br><br>


                <input type="password" name="password" id="name" placeholder="Password" required ="required *"><br><br>
                <input type="password" name="conPas" id="name" placeholder="Confirm Password" required ="required *"><br><br>
                <button type="submit" name="submit_btn" id ="btn_submit">Submit</button><br>

            </form>

        </div>

  </body>
</html>
