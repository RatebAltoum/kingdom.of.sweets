<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/3b1384a103.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section class="sign_in">
        <div class="sign_in_child">
            <form id="form_signin">
                <label for="">Enter Your Name:</label>
                <input type="text" placeholder="Enter Your Name" id="sign_name" required>
                <label for="">Enter Your Password:</label>
                <input type="password" placeholder="Enter Your Password" id="sign_pass" required>
                <button type="submit"  class="btn btn-outline-dark w-100">Log In</button>
                <p id="massage" style="margin-top:10px;"></p>
               
            </form>
        </div>
    </section>
    <script src="programming.js"> </script>
</body>
</html>