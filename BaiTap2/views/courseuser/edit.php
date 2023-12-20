<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
    <?php include_once("views/menu.php") ?>
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa Course User</h3>
                <form action="index.php?controller=courseUser&action=update" method="post">
    <div class="input-group mt-3 mb-3">
        <span class="input-group-text" id="lblCatName">Course ID</span>
        <input type="text" class="form-control" name="course_id" value="<?= $courseUser["course_id"] ?>">
    </div>
    <div class="input-group mt-3 mb-3">
        <span class="input-group-text" id="lblCatName">User ID</span>
        <input type="text" class="form-control" name="user_id" value="<?= $courseUser["user_id"] ?>">
    </div>
    <div class="input-group mt-3 mb-3">
        <input type="text" class="form-control" name="course_id_old" value="<?= $courseUser["course_id"] ?>" hidden>
    </div>
    <div class="input-group mt-3 mb-3">
        <input type="text" class="form-control" name="user_id_old" value="<?= $courseUser["user_id"] ?>" hidden>
    </div>
    <div class="form-group float-end">
        <input type="submit" value="Lưu lại" class="btn btn-success">
        <a href="index.php?controller=courseUser&action=index" class="btn btn-warning">Quay lại</a>
    </div>
</form>
            </div>
        </div>
    </main>
</body>
</html>