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
            <a class="nav-link" href="index.php?controller=user&action=index">User</a>
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
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm tùy chọn</h3>
                <form action="index.php?controller=option&action=store" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Option</span>
                        <input type="text" class="form-control" name="Option">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Is Corect</span>
                        <input type="text" class="form-control" name="Is Corect">
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="index.php?controller=option&action=index" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>