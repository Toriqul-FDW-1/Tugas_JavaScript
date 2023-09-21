<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>portofolio</title>
</head>

<body id="home">
    <?php
    // navbar
    $logo = "My Website";
    $home = "Home";
    $about = "About";
    $project = "Project";
    $contact = "Contact";

    // jumbotron
    $nama = "Toriqul Firdaus";
    $info = "Programer | Designer";

    // about me
    $aboutMe = "About Me";
    $aboutMeP = "Saya adalah mahasiswa Universitas Bumigora Fakultas Teknik Program Studi Ilmu Komputer
    Kompetensi Jaringan.";

    //project
    $myProject = "My Project";
    $myProject1 = "Desain dan Implementasi Server Internet Centos7";
    $myProject2 = "Membuat design website web server menggunakan wordpress";
    $myProject3 = "Diagnosa Penyakit Asma Menggunakan Metode Naive Bayes & Forward
    Chaining";
    $myProject4 = "Penerapan metode Naive Bayes dan Forward Chaining dalam mendiagnosa penyakit ASMA.";
    $myProject5 = "Desain Aplikasi Oke Kurir menggunakan Framework Laravel";
    $myProject6 = "Penerapan Framework Laravel dalam mendesain aplikasi oke kurir berbasis
    web.";

    // contact
    $contactMe = "Contact Me";
    $telepon = "+6285333178917";
    $email = "idhofirdauz017@gmail.com";
    $instagram = "idho_firdauz17";
    $telegram = "Idho_Firdauz";


    ?>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><?= $logo ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home"><?= $home ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><?= $about ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#project"><?= $project ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><?= $contact ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- jumbotron -->
    <section class="jumbotron text-center">
        <img src="img/img.jpeg" alt="profil" width="200" class="rounded-circle img-thumbnail">
        <h1 class="display-4">
            <?= $nama ?>
        </h1>
        <p class="lead"><?= $info ?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,106.7C672,75,768,53,864,80C960,107,1056,181,1152,208C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h2><?= $aboutMe ?></h2>
                </div>
                <div class="row justify-content-center fs-5 mb-3">
                    <div class="col-md-8">
                        <p><?= $aboutMeP ?></p>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#E5E4E2" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,117.3C384,128,480,192,576,192C672,192,768,128,864,128C960,128,1056,192,1152,192C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- project -->
    <section class="project text-center" id="project">
        <div class="conntainer mt-4">
            <div class="row mb-3">
                <div class="col">
                    <h2><?= $myProject ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/1.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-text"><?= $myProject1 ?></h6>
                            <p class="card-text"><?= $myProject2 ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/2.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-text"><?= $myProject3 ?></h6>
                            <p><?= $myProject4 ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/3.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h6 class="card-text"><?= $myProject5 ?></h6>
                            <p class="card-text"><?= $myProject6 ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,128L48,144C96,160,192,192,288,186.7C384,181,480,139,576,106.7C672,75,768,53,864,80C960,107,1056,181,1152,208C1248,235,1344,213,1392,202.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2><?= $contactMe ?></h2>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row  mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong>Telepon : </strong>
                                        <span><?= $telepon ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Email :</strong>
                                        <span><?= $email ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Instagram :</strong>
                                        <span><?= $instagram ?></span>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Telegram :</strong>
                                        <span><?= $telegram ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <!-- footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0d6efd" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,165.3C384,203,480,245,576,229.3C672,213,768,139,864,128C960,117,1056,171,1152,170.7C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <footer class="bg-primary text-light text-center pb-5">
        <p>&copy Created with by <a href="" class="fw-bold text-light"> <?= $nama ?> </a> </p>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>