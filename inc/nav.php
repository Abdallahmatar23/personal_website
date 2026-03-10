<?php
$path= "http://localhost/eraasoft/tasks/week8/personal-website/index.php";
$base = "http://localhost/eraasoft/tasks/week8/personal-website/";
// if ($_SERVER['HTTP_REFERER'] == "/index.php") {
//     echo $path = "views/resume.php";
// }else{
//     echo $path = "../views/resume.php";
// }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="../index.php"><span class="fw-bolder text-primary">Abdallah Personal Webiste</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href=" <?php 
                echo $base."views/resume.php";
                //echo ($_SERVER['HTTP_REFERER'] == $path) ? 'views/resume.php' : '../views/resume.php';?> "> Resume </a></li>
                <li class="nav-item"><a class="nav-link" href="<?=  $base . "views/projects.php" ?>">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="<?=  $base . "views/contact.php" ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
