<html>
<!DOCTYPE html>
<head>
    <title>love meter</title>
    <link href="resultCss.css" rel="stylesheet">
</head>
<body>

<?php if (isset($_POST['button'])) { ?>
        <div class="header">
            <h1>Percentage of love between <?php echo $_POST["urName"] . " and " . $_POST["partnerName"] ?>:</h1>
        </div>
<?php
        echo "<div class='meter'> <div class='metre_body'> <div class='meter_fill'> </div> <div class='meter_cover'>  </div></div>";
        $result = mt_rand(0, 100) / 100;
        loveCalculate();
    }else{
        echo "<h1>please Fill the Form</h1>";
        echo "<h1><a href='LoveMeter.php'>LOVE METER</a></h1>";
    }
    function loveCalculate()
    {
        global $result;
        $myfile = fopen("loveMeter.txt", "a") or die("Unable to open file!");
        fwrite($myfile, $_POST["urName"] . " and " . $_POST["partnerName"] . " are " . $result * 100 . "%\n");
        fclose($myfile);
}
?>

<script>
    const gaugeElement = document.querySelector ('.meter');

    function setGaugeValue(meter,value) {
        if (value < 0 || value > 1) {
            return;
        }

        meter.querySelector('.meter_fill').style.transform = `rotate(${value/2}turn)`;
        meter.querySelector('.meter_cover').textContent = `${Math.round(value*100)}%`;

    }
    setTimeout("setGaugeValue(gaugeElement,<?=$result?>)",200)
</script>


</body>
</html>




