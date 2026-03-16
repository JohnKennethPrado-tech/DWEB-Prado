<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Database error</title>
<link rel="stylesheet" type="text/css" href="css/styles.css" />
</head>

<body style="padding: 3rem">
<h1>You are not connected to the database, let's try to fix that...</h1>
<p>First, this is what we think might be the issue:</p>

<?php
if (isset($e)) {

switch ($e->getCode()) {

    case 0:
        echo '<p>The value for <code>$type</code> must be <code>mysql</code>.<br>
        It is the first value in the DSN.</p>';
        break;

    case 2002:
        echo '<p>Cannot connect to MySQL.<br>
        Try <code>localhost</code> or <code>127.0.0.1</code>.</p>';
        break;

    case 1044:
        echo '<p>Your user account does not appear to have permission to work with this database.<br>
        Check the permissions in phpMyAdmin.</p>';
        break;

    case 1045:
        echo '<p>The username or password appear to be wrong.<br>
        Check the user account in phpMyAdmin and verify the username and password.</p>';
        break;

    case 1049:
        echo '<p>The value for <code>$db</code> is incorrect.<br>
        Check the database name in phpMyAdmin.</p>';
        break;

    case 1042:
        echo '<p>Cannot get hostname for your database server.</p>';
        break;

    case 2003:
        echo '<p>Check that MySQL is running.<br>
        If this does not work, check the port number in phpMyAdmin.</p>';
        break;

    case 2005:
        echo '<p>The value for <code>$server</code> is incorrect.<br>
        Try <code>localhost</code> or <code>127.0.0.1</code>.</p>';
        break;

    case 2019:
        echo '<p>The <code>charset</code> in the DSN is incorrect.<br>
        Set it to <code>utf8</code>.</p>';
        break;

    default:
        echo '<p>First, check that you have:</p>
        <ul>
            <li>Created the sample database in phpMyAdmin</li>
            <li>Created a user account to access the database</li>
        </ul>';
        break;
}
}
?>

<hr style="margin-top: 3rem;">

<p>Here is the SQL error code and message the web server created:</p>
<p><b>SQLSTATE error code:</b> <?= isset($e) ? $e->getCode() : "No error object" ?></p>
<p><b>Error message:</b> <?= isset($e) ? htmlspecialchars($e->getMessage()) : "No message" ?></p>

<?php exit; ?>

</body>
</html>