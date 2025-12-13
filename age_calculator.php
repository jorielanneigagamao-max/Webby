<?php
$age = null;
$year = "";
$month = "";
$day = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = (int) $_POST["year"];
    $month = (int) $_POST["month"];
    $day = (int) $_POST["day"];
    //checks if the form was submitted using POST. If yes, it gets the values entered by the user for year, month, and day, and converts them to integers.

    if ($year > 0 && $month > 0 && $day > 0) {
        $birthDate = new DateTime("$year-$month-$day");
        $currentDate = new DateTime();
        $ageInterval = $currentDate->diff($birthDate);
        $age = $ageInterval->y; 
    } //checks if the year, month, and day are all greater than 0.
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Age Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #000000ff;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background: white;
            width: 300px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0 15px 0;
        }
        button {
            padding: 10px;
            width: 100%;
            border: none;
            background: #00b894;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #55efc4;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Age Calculator</h2>

    <form method="POST">
        Enter Birth Year:
        <input type="number" name="year" required value="<?php echo htmlspecialchars($year); ?>">

        Enter Birth Month:
        <input type="number" name="month" required value="<?php echo htmlspecialchars($month); ?>">

        Enter Birth Day:
        <input type="number" name="day" required value="<?php echo htmlspecialchars($day); ?>">

        <button type="submit">Calculate</button>
    </form>

    <!-- // check if age has a value(not null), if yes display user age in yr. -->
    <?php if ($age !== null): ?>
        <h3>Your Age: <?php echo $age; ?> years old</h3> 
    <?php endif; ?>  
</div>

</body>
</html>