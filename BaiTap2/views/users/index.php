<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="C:\laragon\www\CSE485_2023_TH3\BaiTap2\css\Index.css">
  <title>Quản lý người dùng</title>
</head>
<body>
  <main>
    <?php include_once("views/menu.php") ?>
    <a href="index.php?controller=user&action=create" class="btn btn-success">Thêm mới</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Password ID</th>
          <th>Created</th>
          <th>Updated</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list_users as $user):  ?>
            <tr>
                <td><?= $user["id"] ?></td>
                <td><?= $user["name"] ?></td>
                <td><?= $user["email"] ?></td>
                <td><?= $user["password"] ?></td>
                <td><?= $user["created_at"] ?></td>
                <td><?= $user["updated_at"] ?></td>
                <td>
                  <a class="btn btn-warning" type="button" href="index.php?controller=user&action=edit&id=<?php echo $user['id']; ?>">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger" type="button" href="index.php?controller=user&action=delete&id=<?php echo $user['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>
</html>
