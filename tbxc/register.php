<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>

        <div class="container">
            <form action="#" method="post" autocomplete="off">
                <input type="text" placeholder="Username" name="username" required/>
                <input type="email" placeholder="Email Address" name="email" required/>
                <input type="password"placeholder="Password" name="password" required/>
                <input type="tel" placeholder="Mobile Number" name="phone" required/>
                <input type="submit" name="submit" value="Sumbit" />
                <input type="reset" name="reset" value="Reset"/>
            </form>

            <h6>Already have an account?<a href="login.php">Click Here</a> to login</h6>
        </div>

    </body>

    <footer>
        <div class="container">
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>