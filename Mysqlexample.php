<?php
$conn = mysqli_connect("localhost", "root", "", "classicmodels");
$employees_data = "SELECT * FROM employees;";
$employees_result = $conn->query($employees_data);
$products_data = "SELECT * FROM products;";
$products_result = $conn->query($products_data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENGAKSES DATA DARI MYSQL KE PHP</title>
</head>

<body>
    <h1> <b> DATA EMPLOYEES </b></h1>
    <table border = "1" cellpadding = "3">
        <tr>
            <th>
                employeeNumber
            </th>
            <th>
                lastName
            </th>
            <th>
                firstName
            </th>
            <th>
                extension
            </th>
            <th>
                email
            </th>
            <th>
                officeCode
            </th>
            <th>
                reportsTo
            </th>
            <th>
                jobTitle
            </th>
        </tr>

        <?php
            while ($row = $employees_result->fetch_assoc()){
                echo "<tr>
                <td>"
                    .$row ["employeeNumber"].
                "</td>
                    <td>"
                    .$row ["lastName"].
                "</td>
                <td>"
                    .$row ["firstName"].
                    "</td>
                <td>"
                    .$row ["extension"].
                    "</td>
                <td>"
                    .$row ["email"].
                    "</td>
                <td>"
                    .$row ["officeCode"].
                    "</td>
                <td>"
                    .$row ["reportsTo"].
                    "</td>
                <td>"
                    .$row ["jobTitle"].
                    "</td>
            <tr>";
            }
        ?>
    </table>

    <hr>
    <h1> <b> DATA PRODUCTS </b></h1>
    <table border = "1" cellpadding = "3">
        <tr>
            <th>
                productCode
            </th>
            <th>
                productName
            </th>
            <th>
                productLine
            </th>
            <th>
                productScale
            </th>
            <th>
                productVendor
            </th>
            <th>
                productDescription
            </th>
            <th>
                productInStock
            </th>
            <th>
                buyPrice
            </th>
            <th>
                MSRP
            </th>
        </tr>

        <?php
            while ($row = $products_result->fetch_assoc()) {
                echo "<tr>
            <td>"
                    .$row["productCode"].
                    "</td>
            <td>"
                    .$row["productName"].
                    "</td>
            <td>"
                    .$row["productLine"].
                    "</td>
            <td>"
                    .$row["productScale"].
                    "</td>
            <td>"
                    .$row["productVendor"].
                    "</td>
            <td>"
                    .$row["productDescription"].
                    "</td>
            <td>"
                    .$row["quantityInStock"].
                    "</td>
            <td>"
                    .$row["buyPrice"].
                    "</td>
            <td>"
                    .$row["MSRP"].
                    "</td>
        </tr>";
            }
        ?>
    </table>
</body>

</html>