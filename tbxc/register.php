<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>

        <div class="container">
            <h2>Fill in your details to create an account.</h2>
            <form action="#" method="post" autocomplete="off">
                <input type="text" name="username" placeholder="Username" required/>
                <input type="email" name="email" placeholder="Email Address" required/>
                <input type="password"name="password" placeholder="Password" required/>
                <input type="tel" name="phone" placeholder="Mobile Number" required/>
                <input type="submit" name="submit" value="Submit"/>
                <input type="reset" name="reset" value="Reset"/>
            </form>

            <h4>Already have an account? <a href="login.php">Click Here</a> to login</h4>
        </div>

    </body>

    <footer>
        <div class="container">
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>