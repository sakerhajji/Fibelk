<?php
include '../Controller/userc.php';
$userc = new Userc();
$list = $userc->listusers();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of users</h1>
        <h2>
            <a href="addUser.php">Add users</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id Users</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $user) {
        ?>
            <tr>
                <td><?= $user['idAC']; ?></td>
                <td><?= $user['nom']; ?></td>
                <td><?= $user['prenom']; ?></td>
                <td><?= $user['email']; ?></td>
                <td><?= $user['date']; ?></td>
                <td align="center">

                    <button><a href="update.php?idAC=<?= $user['idAC']; ?>">Update</a></button>
                    
                </td>
                <td>
                <button><a href="delete.php?idAC=<?= $user['idAC']; ?>">Delete</a></button>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>