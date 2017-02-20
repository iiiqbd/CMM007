<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>
    <body>


        <form id="Sign" action="submit.php" method="post" autocomplete="off">
            <table>
                <tr>
                    <td><input type="text" placeholder="Username" name="username"size="20"autofocus required/></td>
                </tr>

                <tr>
                    <td><input type="email" placeholder="Email Address" name="email"size="20" required/></td>
                </tr>

                <tr>
                    <td><input type="password"placeholder="Password" name="password"size="25" required/></td>
                </tr>

                <tr>
                    <td><input type="tel" placeholder="Mobile Number" name="phone"size="11"required/></td>
                </tr>
            </table>
            <h6>You already have an account?<a href="login.php">Click Here</a></h6>
            <input type="submit" name="submit" value="Sumbit" />
            <input type="reset" name="reset" value="Reset"/>
        </form>

    </body>

    <footer>
        <div class="container">
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>