<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Google Accounts</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="container">
        <div class="logo">
            <span class="material-symbols-outlined">
                home_app_logo
            </span>
        </div>
        <h1>Sign in</h1>
        <form action="#">
            <div class="input-field">
                <label for="email">Email or phone number</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="input-field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="checkbox-field">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <button type="submit">Sign in</button>
            <a href="#">Forgot password?</a>
        </form>

        <p>Create an account. <a href="#">Sign up for Google</a></p>
    </div>
    <footer>
        <p>©2023 QuickRef.ME</p>
    </footer>
</body>

</html>