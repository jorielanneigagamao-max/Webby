<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background: #000000ff;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 70%;
            margin: 50px auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
        }

        .card {
            width: 250px;  
            height: 300px;  
            background: white;
            border-radius: 25px; 
            transition: 0.3s;
            text-align: center;
            overflow: hidden; 
            cursor: default; 
            pointer-events: none; 
        }

        .card .btn {
            pointer-events: auto;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card img {
            width: 100%;
            height: 50%;
            object-fit: contain; 
            margin-top: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: rgba(67, 0, 252, 1);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            border: 2px solid rgba(67, 0, 252, 1);
            margin-top: 10px;
        }

        /* .btn:hover {
            background-color: white;
            color: rgba(67, 0, 252, 1);
        } */

        h1 {
            margin-top: 30px;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>

<h1>Dashboard</h1>

<div class="container">
    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/3788/3788610.png">
        <h2>Age</h2>
        <a href="age_calculator.php" class="btn">Go to Age Calculator</a>
    </div>

    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/5231/5231964.png">
        <h2>Grades</h2>
        <a href="grade_calculator.php" class="btn">Go to Grade Calculator</a>
    </div>

    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/512/4349/4349071.png">
        <h2>BMI</h2>
        <a href="bmi_calculator.php" class="btn">Go to BMI Calculator</a>
    </div>
</div>

</body>
</html>
