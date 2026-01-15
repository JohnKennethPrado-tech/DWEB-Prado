<?php
include 'includes/header.php';
include 'includes/footer.php';
include 'classes/Account.php';
include 'classes/Customer.php';

$accounts = [
    new Account("12345", "Savings", 2000),
    new Account("123456", "Cash Out", -500),
    new Account("1234567", "Cash In", 5000),
    new Account("12345678", "Transfers", -2500)
];

$customer = new Customer("RR", "Everest", $accounts);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Waldas Wallet</title>
    </head>
    <body>
        <h2>
            <?= $customer->getFullName(); ?>'s Accounts
        </h2>

        <table border="1" cellpadding="5">
            <tr>
                <th>Account Number</th>
                <th>Type</th>
                <th>Balance (₱)</th>
            </tr>
            <?php foreach($customer->accounts as $account): ?>
            <tr>
                <td><?= $account->number; ?></td>
                <td><?= $account->type; ?></td>
                <?php if($account->balance >= 0): ?>
                    <td style="color:white;">₱ <?= $account->balance; ?></td>
                <?php else: ?>
                    <td style="color:red;">₱ <?= $account->balance; ?></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>