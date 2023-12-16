
<?php
    include("../class/Database.php");
    $sql = "SELECT * FROM cms_category";
    $data = $connect->query($sql);
    while ($row = $data->fetch_assoc()) {
      $list_category [] = $row;
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
    <title>Categories</title>
  </head>
<body>
  <?php include_once("menu.php") ?>
  <main>
    <p class="head_main">Categories Listing</p> 
    <a href="add_category.php" class="btn btn-success">Thêm mới</a>
    <table>
      <thead>
        <tr>
          <th>STT</th>
          <th style="width: fit-content;">Tên thể loại</th>
        </tr>
      </thead>
      <tbody>
        <tr>  
        <?php foreach( $list_category as $category): ?>
                <tr>
                    <th scope="row"><?= $category["id"] ?></th>
                    <td><?= $category["name"] ?></td>
                    <td>
                      <a class="edit" type="button" href="edit_category.php?id=<?= $category["id"] ?>">Edit</a>
                    </td>
                    <td>
                      <a class="Delete" type="button" href="../category.php?action=delete&id=<?= $category["id"] ?>">Delete</a>
                    </td>
                </tr>
        <?php endforeach; ?>
        </tr>

      </tbody>
    </table>

      </tbody>
    </table>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
