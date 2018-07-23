<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Hello, world!</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6" style="border: 1px solid #ccc; text-align: center;">
                    <form method="POST" action="action.php" style=" margin-top: 50px; margin-bottom: 50px;">
                        FirstName : <input type="text" name="firstname"><br><br>
                        LastName : <input type="text" name="lastname"><br><br>
                        Email : <input type="email" name="email"required><br><br>
                        Password : <input type="password" name="password"><br><br>
                        Date of Birth : <input type="date" name="dob"><br><br>
                        Gender : <br>
                        Male : <input type="radio" name="gender" value="Male"><br>
                        Female: <input type="radio" name="gender" value="Female"><br><br>
                        Languages known : <input type="checkbox" name="kannade">Kannada <input type="checkbox" name="english"> English<br><br>
                        Color you like : <select name="colors">
                            <option value="Red" name="red">Red</option>
                            <option value="Green" name="green">Green</option>
                            <option value="Blue" name="blue">Blue</option>
                        </select><br><br>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>