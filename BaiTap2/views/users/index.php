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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">LMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
      <a class="nav-link active" href="index.php?controller=user&action=index">User</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=course&action=index">Course</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=course_user&action=index">Course User</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=lesson&action=index">Lesson</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=material&action=index">Material</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=quizze&action=index">Quizze</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=question&action=index">Question</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=option&action=index">Option</a>
      </li>
    </ul>
  </div>
</nav>
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
