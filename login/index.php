<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<style>
    body {
        background: #1d9aff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    * {
        font-family: sans-serif;
        box-sizing: border-box;
    }

    h2 {
        text-align: center;
        margin-bottom: 40px;
    }

    form {
        /* display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column; */
        width: 500px;
        border: 2px solid #ccc;
        padding: 30px;
        background: #fff;
        border-radius: 15px;
    }

    input {
        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin: 10px auto;
        border-radius: 5px;
    }

    label {
        color: #888;
        font-size: 18px;
        padding: 10px;
    }

    button {
        float: right;
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
    }

    .error {
        background: #f2dede;
        color: #a94442;
        padding: 10px;
        width: 95%;
        border-radius: 8px;
    }
</style>

<body>
    <form action="login.php" method="POST">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?>
            </p>
        <?php } ?>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter Your Email"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter Your password"><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>