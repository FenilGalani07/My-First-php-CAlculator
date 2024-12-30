<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Simple Calculator</title>
</head>
<body>
<div class="container mt-5">
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="num1">Number 1:</label>
            <input type="number" class="form-control" id="num1" name="num1" required>
        </div>
        <div class="form-group">
            <label for="num2">Number 2:</label>
            <input type="number" class="form-control" id="num2" name="num2" required>
        </div>
        <div class="form-group">
            <label for="operation">Operation:</label>
            <select class="form-control" id="operation" name="operation" required>
                <option value="">Select Operation</option>
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
            </select>
        </div>
        <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
    </form>

    <?php
    if (isset($_POST["calculate"])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        switch ($operation) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Cannot divide by zero!";
                }
                break;
            default:
                $result = "Invalid operation!";
        }
        
        echo "<h4>Result: " . htmlspecialchars($result) . "</h4>";
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
