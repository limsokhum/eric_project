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

    <title>Article Donwload Page</title>
</head>

<body>
    <!-- Start Top Navigation Bar -->
    <?php include('asset/include/navbar-login.php');?>
    <!-- End Top Navigation Bar -->
    <!-- Start Navigation Bar -->
    <?php include('asset/include/navbar.php');?>
    <!-- Ent Navigation Bar -->

    <!-- Start content Article -->
    <div class="container mt-5">
        <div class="row">
            <div data-aos="fade-down-right" class="left-nav col-sm-3">
                <ul>
                    <li>
                        <a href="">Director's Message</a>
                    </li>
                    <li>
                        <a href="ourhistory.html">Our History</a>
                    </li>
                    <li>
                        <a href="boarddirector.html">Board of Directors</a>
                    </li>
                    <li>
                        <a href="advicer.html">Board of Advisors</a>
                    </li>
                    <li>
                        <a href="ericstaff.html">ERIC Staff</a>
                    </li>
                </ul>
            </div>
            <div data-aos="fade-down-left" class="right-nav col-sm-9">
                <div class="container right-nav my-4 ">
                    <a href="arcticle.html">
                        <div class="card my-3" style="width: 100%;">
                            <div class="card-body my-4">
                                <h5 class="card-title">Our History</h5>
                                <p class="card-text mt-4">Angkor Wat is an architectural masterpiece and the largest
                                    religious monument in the world – covering an area four times the size of Vatican
                                    City. It was built by the Khmer King Suryavarman II in the first half of the 12th
                                    century, around the year 1110-1150, making Angkor Wat almost 900 years old.

                                    The temple complex, built in the capital of the Khmer Empire, took approximately 30
                                    years to build. It was originally dedicated to the Hindu god Vishnu before becoming
                                    a Buddhist temple by the end of the 12th century.

                                    One of the first Western visitors to the temple was Antonio de Madalena, a
                                    Portuguese friar who visited in 1586. Angkor Wat was then effectively rediscovered
                                    by the French explorer Henri Mouhot in the 1840s. Mouhot described Angkor Wat as
                                    “grander than anything left to us by Greece or Rome” and spread the word about this
                                    incredible monument to the western world.

                                    The French, who ruled Cambodia for much of the 20th century, restored the site in
                                    the early 1900s for tourism purposes. However, this work was then disrupted by the
                                    Cambodian Civil War and during the rule of the Khmer Rouge. Angkor Wat sustained
                                    minimal damage – however there are still bullet holes on its outer walls due to the
                                    battles of the Khmer Rouge regime.

                                    Cambodia gained independence from France in 1953 and has controlled Angkor Wat ever
                                    since.

                                    In 1992 the temple complex was named a UNESCO World Heritage site, and is now a
                                    highly popular tourist attraction in Cambodia - welcoming 2 million visitors every
                                    year. The most popular time to visit Ankgor Wat is in the early hours of the
                                    morning; to witness a beautiful sunrise over the magical temple.</p>
                            </div>
                        </div>
                    </a>
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