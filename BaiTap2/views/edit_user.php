<?php
    include_once("../class/Database.php");
    $id = (isset($_GET["id"])) ? intval($_GET["id"]) : 0;

    $sql = "SELECT * FROM cms_user WHERE id=" . $id;
    $data = $connect->query($sql);
    $user = [];
    while ($row = $data->fetch_assoc()) {
        $user = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/Index.css">
    <title>Users</title>
</head>
<body>
    <?php include_once("menu.php") ?>
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa user</h3>
                <form action="../users.php?action=edit" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">ID</span>
                        <input type="text" class="form-control" name="id" value="<?= $user["id"] ?>" required>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">First Name</span>
                        <input type="text" class="form-control" name="first_name" value="<?= $user["first_name"] ?>"  required>
                    </div>                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Last Name</span>
                        <input type="text" class="form-control" name="last_name" value="<?= $user["last_name"] ?>" required>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Email</span>
                        <input type="text" class="form-control" name="email" value="<?= $user["email"] ?>" required>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Password</span>
                        <input type="text" class="form-control" name="password" value="<?= $user["password"] ?>" readonly>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Deteted</span>
                        <select class="form-select" name="deleted">
                            <option value="0">No</option>
                            <option value="1" <?= ($user["deleted"]=="1") ? "selected" : "" ?>>Yes</option>
                        </select>
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Sửa" class="btn btn-success">
                        <a href="users.php" class="btn btn-warning ">Quay lại</a>
                    </div>

                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>