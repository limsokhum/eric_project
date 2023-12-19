<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Costom Link CSS -->
    <link rel="stylesheet" href="asset/css/style.css">

    <!-- Link favavicon -->
    <link rel="shortcut icon" href="asset/images/ERICRemove Logo.png" type="image/x-icon">

    <!-- Skitter Styles -->
    <link href="asset/dist/skitter.css" type="text/css" media="all" rel="stylesheet" />

    <!-- Michalsnik CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Journal Education psychology Innovation Page</title>
</head>

<body>
    <!-- Start Top Navigation Bar -->
    <?php include('asset/include/navbar-login.php');?>
    <!-- End Top Navigation Bar -->
    <!-- Start Navigation Bar -->
    <?php include('asset/include/navbar.php');?>
    <!-- Ent Navigation Bar -->

    <!-- Start Header Article -->
    <div class="article-summary bg-primary d-flex justify-content-center align-items-center">
        <a href="">
            <img src="asset/images/book_research.png" alt="" style="width: 10rem; margin-right: 3rem;">
        </a>
        <div class="search-engine">
            <h4 class="text-center text-light my-4">Education Psychology and Innovation, Volume 1,Issue 1 (2023).</h4>

            <form class="d-flex" action="" method="post">
                <div class="search">
                    <input class="form-control" type="text">
                    <i class="fa-solid fa-magnifying-glass text-light"></i>
                </div>
            </form>
            <div class="d-flex justify-content-center mt-4">
                <a href="submit_journal.php">
                    <button class="button_smjepi btn_submitJounal btn btn-2x-lg" type="submit"
                        style="font-size: 1rem;">Submit an
                        Article</button>
                </a>

            </div>

        </div>

    </div>
    <!-- Ent Header Article -->

    <!-- Start content Article -->
    <div class="container my-4">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="text-center my-4" style="color: #0284a7;">About this journal</h4>
            </div>
            <div class="col-sm-8">
                <h4 class="my-4" style="color: #0284a7;">Aims and Scope</h4>
            </div>

            <div class="left-nav col-sm-4">
                <ul>
                    <li>
                        <a href="journalepiarims.html">Aims and Scope</a>
                    </li>
                    <li>
                        <a href="journalepiintroduct.html">Instructions</a>
                    </li>
                    <li>
                        <a href="">Journal Information</a>
                    </li>
                    <li>
                        <a href="">Editorial Board</a>
                    </li>
                    <li>
                        <a href="">Editorial Policies</a>
                    </li>
                    <li>
                        <a href="">Calls for Papers</a>
                    </li>
                    <li>
                        <a href="">Editing Services</a>
                    </li>
                </ul>
            </div>
            <div class="right-nav col-sm-8">

                <div class="container aims-scope mt-4">
                    <div class="text-body">
                        Educational Psychology and Innovation (EPI) is aimed at providing quality
                        scholarly work for educational researchers, school principals, teachers, and
                        other stakeholders. To serve the purpose, EPI publishes original rigorous
                        research articles on all aspects and levels of education. EPI also welcomes
                        the submission of academic articles that foregrounds new insights into
                        contemporary educational challenges.
                    </div>
                    <h6 class="my-3">Below is the coverage of educational areas in EPI:</h6>
                    <div class="list-airm">
                        <ol type="1">
                            <li> Educational psychology</li>
                            <li> Learning innovation and technology</li>
                            <li> Curriculum and pedagogy</li>
                            <li> Student assessment</li>
                            <li> Educational leadership</li>
                            <li> Higher education</li>
                            <li> Teacher education</li>
                            <li> K-12 education</li>
                            <li> Non-formal education</li>
                        </ol>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Ent content Article -->

    <!-- Start Footer -->
    <?php include('asset/include/footer.php');?>
    <!-- Ent Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Michalsnik JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    function NavBarFunction() {
        document.getElementById("navbar").style = "display: block";
        document.getElementById("menu_navbar").style = "display: none";
        document.getElementById("remove_navbar").style = "display: block";
    }

    function RemoveNavBarFunction() {
        document.getElementById("navbar").style = "display: none";
    }
    // Ent Init Skitter

    // Start Michalsnik JS
    AOS.init();
    // Ent Michalsnik JS
    </script>

</body>

</html>