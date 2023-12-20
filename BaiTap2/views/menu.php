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
      <a class="nav-link <?= isset($list_users) ? "active" : "" ?>" href="index.php?controller=user&action=index" >User</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=course&action=index">Course</a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="index.php?controller=courseUser&action=index">Course User</a>
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