<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ragistration Form</h1>
    <div class="container">
<form action="connect.php" method="post">
    <div>
    <label>Name</label>
        <input type="Text" Name="name" placeholder="Enter your name" autocomplete="off">
    <label>Email</label>
        <input type="email" Name="email" placeholder="Enter your email" autocomplete="off">

    <label>Gender</label>
                <div class="genderContainer">     
        <input class="gender1" type="radio" Name="gender" value="m">Male
        <input class="gender1" type="radio" Name="gender" value="f">Female
        <input class="gender1" type="radio" Name="gender" value="o">Other
                </div>

    <label>Mobile</label>
        <input type="text" Name="mobile" placeholder="Enter your mobile" autocomplete="off">
    </div>


    <label>Password</label>
        <input type="password" Name="password" placeholder="Enter your Password" autocomplete="off">
    </div>

    <div class="btn">
    <button type="submit">Submit Data</button>
    </div>
    </form>
    </div>
</body>
</html>