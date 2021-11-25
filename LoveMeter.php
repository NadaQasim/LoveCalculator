<html>
<!DOCTYPE html>
<head>
    <title>love meter</title>
    <link href="loveMeterCss.css" rel="stylesheet">
</head>
<body>
<div class="header">
    <h1>LOVE CALCULATOR</h1>
</div>
<div class="form" >
    <form method="post" name="form" action="result.php">

        <div class="left">
            <label>Enter Your Name:</label><br>
            <input class="text" name="urName" type="text" required><br>

            <label>Female: <input type="radio" name="Gender" value="Female" required></label><br>
            <label>Male: <input type="radio" name="Gender" value="Male" required></label>

        </div >

        <div class="right">
            <label>Enter Your Partner's Name:</br> </label>
            <input class="text" name="partnerName" type="text" required></br>
            <label>Female: <input type="radio" name="PGender" value="Female" required></label></br>
            <label>Male: <input type="radio" name="PGender" value="Male" required></label><br>

        </div>

        <div class="middle">
            <button type="submit" value="Calculate" name="button">Calculate</button>
            <button type="reset" name="reset" >Reset</button><br>
        </div>


    </form>

</div>
</body>
</html>
