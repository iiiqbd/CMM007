<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Password reset</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>

    <body>
        <div class="container">
            <h3>Request a new password here</h3>
            <h4>Fill in your details</h4>
            <form method="post">
                <input id="username" name="username" title="Username"
                        required type="text" placeholder="Username"/>
                <br></br><br></br>
                <input id="email" name="email" required
                       type="email" placeholder="abc@xyz.com"/>
                <input type="submit" name="submit" value ="Send"/>
            </form>
        </div>
    </body>

    <footer>
        <div class="container">
            <p>&copy; 2017 textbookexchange.com</p>
        </div>
    </footer>

</html>
