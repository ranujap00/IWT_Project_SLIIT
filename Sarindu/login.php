
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log in</title>
   <link rel="stylesheet" href="login.css">
</head>

<body>
   <!-- Container -->
   <div class="container">
      <!-- Heading -->
      <div class="head">
         <div class="title">
            Welcome!<br>
            <h3>Sign in to your account to continue.</h3>
         </div>
      </div>
      <!-- Forms -->
      <div class="form-container">
         <!-- Toggle Tab -->
         <div class="slide-controls">
            <input type="radio" name="slide" id="user" checked>
            <input type="radio" name="slide" id="employee">

            <label for="user" class="slide user">User</label>
            <label for="employee" class="slide employee">Employee</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">

            <!-- USER FORM -->
            <form method="POST" action="loginProcess.php" class="user" for="user">
               <div class="field">
                  <input type="text" name="username" placeholder="Email or Username" required>
               </div>
               <div class="field">
                  <input type="password" name="password" placeholder="Password" required>
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login" name="submit-user">
               </div>
               <div class="employee-link">
                  Don't have an account yet? <a href="../Ranuja/SignUp/signUp.php">Sign-up</a>
               </div>
            </form>

            <!-- EMPLOYEE FORM -->
            <form action="loginProcess.php" class="employee" for="employee" method="POST">
               <div class="field">
                  <input type="text" name="Eusername" placeholder="Email or Username" required>
               </div>
               <div class="field">
                  <input type="password" name="Epassword" placeholder="Password" required>
               </div>
               <div class="field">
                  <select name="type" class="select-type" required>
                     <option value="#" hidden>Select Type</option>
                     <option value="admin">Admin</option>
                     <option value="agent">Agent</option>
                  </select>
                  <!-- <input type="text" name="type" placeholder="Type"> -->
               </div>
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login" name="submit-emp">
               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      const userForm = document.querySelector("form.user");
      const userBtn = document.querySelector("label.user");
      const employeeBtn = document.querySelector("label.employee");
      employeeBtn.onclick = (() => {
         userForm.style.marginLeft = "-50%";
         userText.style.marginLeft = "-50%";
      });
      userBtn.onclick = (() => {
         userForm.style.marginLeft = "0%";
         userText.style.marginLeft = "0%";
      });
   </script>
</body>
</html>