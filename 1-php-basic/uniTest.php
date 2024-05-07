<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Analysis (1 to 10)</title>
</head>
<body>
    <h1>Number Analysis (1 to 10)</h1>
    <table>
        <thead>
            <tr>
                <th>Number</th>
                <th>Even/Odd</th>
                <th>Prime Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    $isEven = ($i % 2 === 0) ? "Even" : "Odd";
                    $isPrime = isPrime($i) ? "Yes" : "No";
                    echo "<tr>
                        <td>$i</td>
                        <td>$isEven</td>
                        <td>$isPrime</td>
                    </tr>";
                }

                // Function to check if a number is prime
                function isPrime($num) {
                    if ($num <= 1) return false;
                    for ($i = 2; $i <= sqrt($num); $i++) {
                        if ($num % $i === 0) return false;
                    }
                    return true;
                }
            ?>
        </tbody>
    </table>
</body>
</html>
