<html>
<head>
<title>User Details</title>
</head>    
<body>
<?php print_r($users); ?>
<h1>User Account Details</h1>
<table>
    <tr>
        <td>First name</td>
        <td>Account No</td>
    </tr>

    <?php foreach($users as $user): ?>


    <tr>
        <td><?php echo $user->Firstname ?></td>
        <td><?php echo $user->AccountNo ?></td>
    </tr>  

    <?php endforeach; ?>
    </table>    
</body>
</html>

<!--  <tr>
        <td><?php echo $user['Firstname']?></td>
        <td><?php echo $user['AccountNo'] ?></td>
    </tr> -->