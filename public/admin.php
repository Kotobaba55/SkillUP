<?php
require "../src/selectAll.php" ?>
<?php
require "../src/delete.php" ?>
<?php
require "../src/update.php" ?>


<!-- <link rel="stylesheet" href="../assets/style/bootstrap.5.0.min.css"> -->

<table border="1">

    <thead>
        <tr>
            <th>Name</th>
            <th>first_name</th>
            <th>Mail</th>
            <th>Matricule</th>
            <th>Admin</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($result as $value) : ?>
            <tr>
                <td><?php echo $value['student_name']; ?></td>
                <td><?php echo $value['student_firstname']; ?></td>
                <td><?php echo $value['student_mail']; ?></td>
                <td><?php echo $value['student_reference']; ?></td>
                <td>
                    <a href="#"><button>Modifier</button></a>
                    <a href="?action=delete&id_student=<?php echo $value['id_student']; ?>"><button>Effacer</button></a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>