<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Status</th>
            <th>Creat_at</th>
            <th>Password</th>

        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['firstname']; ?></td>
                <td><?php echo $user['lastname']; ?></td>
                <td><?php echo $user['status']; ?></td>
                <td><?php echo $user['creat_at']; ?></td>
                <td><?php echo $user['password']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>