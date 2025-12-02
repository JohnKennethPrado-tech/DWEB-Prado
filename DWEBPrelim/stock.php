<?php
require "includes/header.php";
require "includes/footer.php";

$candyProducts = [
    "Chocolate" => [15, 8],
    "Lollipop" => [10, 25],
    "Mints" => [20, 5],
];

$tax_rate = 12;

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $tax_rate = 0): float {
    return ($price * $qty) * ($tax_rate / 100);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>The Candy Store</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h2>Stock Control</h2>
        <table>
            <tr>
                <th>Product</th>
                <th>Stock</th>
                <th>Reorder</th>
                <th>Total Value</th>
                <th>Tax Due</th>
            </tr>

            <?php foreach ($candyProducts as $product_name => $data): ?>
                <tr>
                    <td><?= $product_name ?></td>
                    <td><?= $data[1] ?></td>
                    <td><?= get_reorder_message($data[1]) ?></td>
                    <td>$<?= number_format(get_total_value($data[0], $data[1]), 2) ?></td>
                    <td>$<?= number_format(get_tax_due($data[0], $data[1], $tax_rate), 2) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
