<?php
$final = null;
$scores = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $scores = $_POST["scores"];  // gina check if ang form is submitted using POST method, gets the value the user entered.

    $scores = array_filter(array: $scores, callback: fn($s): bool => $s !== "");
    // removes all the empty value gikan scores array, ang mahibilin kay actual numbers only

    if (count(value: $scores) > 0) {
        $sum = array_sum(array: $scores);
        $final = number_format(num: $sum / count(value: $scores), decimals: 2);
    }   // e check kong naay at least one score inside sa array, if yes ma calculate ang average of all scores and it round it to 2 decimal places.
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
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
            width: 350px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #000000;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #000000;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            width: 100%;
            border: none;
            background: #27ae60;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #2ecc71;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #000000ff;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Student Grade Calculator</h2>

    <form method="POST">
    <p>Enter subject scores:</p>

    <div class="input-row">
        <label>Sub 1</label>
        <input type="number" name="scores[]" required value="<?php echo isset($scores[0]) ? $scores[0] : ''; ?>">
    </div>

    <div class="input-row">
        <label>Sub 2</label>
        <input type="number" name="scores[]" required value="<?php echo isset($scores[1]) ? $scores[1]: ''; ?>">
    </div>

    <div class="input-row">
        <label>Sub 3</label>
        <input type="number" name="scores[]" required value="<?php echo isset($scores[2]) ? $scores[2]: ''; ?>">
    </div>

    <button type="submit">Calculate Final Grade</button>
</form>


    <?php if ($final !== null): ?>    
        <div class="result">Final Grade: <?php echo $final; ?></div>
    <?php endif; ?>
    <!-- check kung ang variable nga $final naa bay sulod (dili null). -->
</div>

</body>
</html>