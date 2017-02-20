!DOCTYPE html
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Fogotten Password</title>
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    </head>

    <body>
            <div id="Holder">
                <div id="Header"></div>
                <div id="NavBar">
                    <nav>
                        <ul>
                            <li><a href="index.php">Login</a></li>
                            <li><a href="Register.php">Register</a></li>
                        </ul>
                    </nav>
                </div>

                <div id="Content">
                    <div id="PageHeading">
                        <h1>Sorry About That</h1>
                    </div>
                    <div id="ContentLeft">
                        <h2> Fill in your Details</h2>
                    </div>
                </div>
            </div>

            <form id="ForgPass" method="post">
                <input  id = "username"  name="username" title="Username"
                        required type="text" placeholder="Username" />
                <input id = "email" name="email" required
                       type="email" placeholder="Email@address.com"/>
                Confirmation Message:<br>
                <textarea type="text" rows="6" cols="40" name="confmessage"/></textarea><br>
                <input type="submit" name="submit" value = "Send"/>
            </form>
    </body>
</html>
