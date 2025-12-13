<?php
$bmi = null;
$category = "";
$weight = $height = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $weight = $_POST["weight"];
    $height = $_POST["height"];

    if ($weight > 0 && $height > 0) {
        // e convert ang height form cm to meters
        $height_m = $height / 100;

        // BMI formula: weight (kg) / height^2 (m^2)
        $bmi = number_format($weight / ($height_m * $height_m), decimals: 2);

        // Determine BMI category
        if ($bmi < 18.5) {
            $category = "Underweight";
        } elseif ($bmi < 24.9) {
            $category = "Normal weight";
        } elseif ($bmi < 29.9) {
            $category = "Overweight";
        } else {
            $category = "Obese";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0);
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
            color: #000000;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>BMI Calculator</h2>

    <form method="POST">
        Weight (kg)
        <input type="number" step="0.1" name="weight" required value="<?php echo $weight; ?>">  
        <!-- creates an input box for the user to enter a number (0.1allows decimal numbers) -->
        Height (cm)
        <input type="number" step="0.1" name="height" required value="<?php echo $height; ?>">

        <button type="submit">Calculate BMI</button>
    </form>
    
    <?php if ($bmi !== null): ?> 
        <div class="result">
            BMI: <?php echo $bmi; ?><br>
            Category: <?php echo $category; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>