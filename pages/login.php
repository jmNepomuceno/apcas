<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <main class="">
        <header class="">
            <img id="logo-img" src="../images/logo.png" alt="logo-img" />
            <nav>
                <ul>
                    <a href="../index.php"><li>Home</li></a>
                    <a href=""><li>About us</li></a>
                    <li id="join-us-btn">JOIN US</li>
                </ul>
            </nav>
        </header>

        <div class="container">
            <img id="main-bg" src="../images/bg_1.png" alt="bg-1">
            <div id="left-side">
                <h1>Login</h1>
                <hr/>
                <form action="POST">
                    <input type="text" placeholder="Enter email">
                    <input type="password" placeholder="Enter password">
                    <input id="sign-up-btn" type="submit">
                </form>
            </div>
        </div>
    </main>
</body>
</html>