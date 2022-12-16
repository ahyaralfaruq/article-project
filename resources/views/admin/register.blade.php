<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>

   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/all.min.css">
   <link rel="stylesheet" href="../css/style.css">
</head>
<body>
   <main id="register-content">
      <div>

         <form action="" method="post" enctype="" class="w-100 bg-white px-2 py-2">
            <h4 class="h4 text-center">Register</h4>
            <div class="mb-3">
               <div class="form-group">
                  <label for="name">Your name :</label>
                  <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
                  <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                  <label for="username">Your username :</label>
                  <input type="email" class="form-control" name="username" id="username" aria-describedby="usernameHelp">
                  <small id="usernameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleInputPassword1" aria-describedby="passwordHelp">
                  <small id="passwordHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
               <div class="form-group">
                  <label for="password2">Re-type Password</label>
                  <input type="password" class="form-control" name="password2" id="password2" aria-describedby="password2Help">
                  <small id="password2Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
               </div>
            </div>
            <div class="mb-3 text-center">
               <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </form>
      </div>
   </main>

   <script src="../js/jquery-3.4.1.min.js"></script>
   <script src="../js/all.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
</body>
</html>