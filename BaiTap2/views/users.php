<?php
    include_once("../class/Database.php");
    $sql = "SELECT * FROM cms_user";
    $data = $connect->query($sql);
    $list_users = [];
    while ($row = $data->fetch_assoc()) {
        $list_users[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/Index.css">
  <title>Users</title>
</head>
<body>
  <?php include_once("menu.php") ?>
  <main>
    <p class="head_main">Users Listing</p> 
    <a href="add_user.php" class="btn btn-success">Thêm mới</a>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email ID</th>
          <th>Password ID</th>
          <th>Type</th>
          <th>Deleted</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list_users as $user):  ?>
            <tr>
                <td><?= $user["id"] ?></td>
                <td><?= $user["first_name"] ?></td>
                <td><?= $user["last_name"] ?></td>
                <td><?= $user["email"] ?></td>
                <td><?= $user["password"] ?></td>
                <td><?= $user["type"] ?></td>
                <td><?= $user["deleted"] ?></td>
                <td>
                  <a class="edit" type="button" href="edit_user.php?id=<?= $user["id"] ?>">Edit</a>
                </td>
                <td>
                  <a class="Delete" type="button" href="../users.php?action=delete&id=<?= $user["id"] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>
</html>
