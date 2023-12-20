<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="C:\laragon\www\CSE485_2023_TH3\BaiTap2\css\Index.css">
  <title>Quản lý Quizze</title>
</head>
<body>
  <main>
  <?php include_once("views/menu.php") ?>
    <a href="index.php?controller=quizze&action=create" class="btn btn-success">Thêm mới</a>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Lesson_ID</th>
          <th>Title</th>
          <th>Created</th>
          <th>Updated</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($list_quizzes as $quizze):  ?>
            <tr>
                <td><?= $quizze["id"] ?></td>
                <td><?= $quizze["lesson_id"] ?></td>
                <td><?= $quizze["title"] ?></td>
                <td><?= $quizze["created_at"] ?></td>
                <td><?= $quizze["updated_at"] ?></td>
                <td>
                  <a class="btn btn-warning" type="button" href="index.php?controller=quizze&action=edit&id=<?php echo $quizze['id']; ?>">Edit</a>
                </td>
                <td>
                  <a class="btn btn-danger" type="button" href="index.php?controller=quizze&action=delete&id=<?php echo $quizze['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
</body>
</html>
