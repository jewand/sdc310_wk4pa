<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Week 4 PA - Jewand Graham</title>

    <style>

        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 550px;
        }

        th,
        td {
            border: 1px solid black;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: lightblue;
        }

        tr:nth-child(even) {
            background-color: lightgray;
        }

    </style>

</head>

<body>

<h2>Current Products:</h2>

<table>

    <tr>
        <th>Product #</th>
        <th>Name</th>
        <th>Type</th>
    </tr>

    <?php while ($row = $products->fetch(PDO::FETCH_ASSOC)) { ?>

        <tr>

            <td>
                <?php echo htmlspecialchars($row['ProductNo']); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row['Name']); ?>
            </td>

            <td>
                <?php echo htmlspecialchars($row['Type']); ?>
            </td>

        </tr>

    <?php } ?>

</table>

</body>

</html>