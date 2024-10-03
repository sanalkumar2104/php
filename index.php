<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Fill the form</h2>
        <form action="submit.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="phone">Phone No:</label>
            <input type="tel" id="phone" name="phone" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label>
            <input type="text" id="message" name="message"><br><br>
            
            <button type="submit" name="submit" onclick="send()">Submit</button> |
        </form>
    </div>
</body>
<style>
    .container {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

label {
    display: inline-block;
    width: 150px;
    margin-bottom: 10px;
}

input[type="text"], input[type="email"], input[type="tel"], input[type="file"] {
    width: 250px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

</style>
</html>