<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terrarium</title>
    <!--image for tab-->
    <link rel="icon" href="static/logos/green_nobg.png" type="image/x-icon" />
    <!-- linking css file -->
    <link rel="stylesheet" href="style.css" />
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/45da1ec43a.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top navbarScroll" id="mynav">
        <div class="container-fluid" width="100% !important">
            <a class="navbar-brand" href="#">
                <img src="static/logos/square.png" alt="logo" class="brand" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <img src="static/assets/down-arrow.png" alt="menu" width="30px" height="30px" />
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#promise">Promise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
                    <h2 class="hero_title">
                        The best <span class="coffee-text">coffee</span> in the milky way
                        <?php
                        // get the current date
                        $date = date('Y-m-d');
                        echo "<br>Today's date is: " . $date;
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container mt-4 pt-4">
            <div class="card custom-card" id="custom-card">
                <h1 class="card-header text-center custom-card">About Us</h1>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-left">
                                    <p>
                                        Cosmic Coffee is not just an ordinary coffee brand. We are
                                        the epitome of excellence, flavor, and innovation in the
                                        world of coffee. Our journey began decades ago during the
                                        groundbreaking Apollo missions to the moon. It was during
                                        this time that our coffee gained legendary status as the
                                        chosen brew of the brave astronauts venturing into the
                                        unknown. Our coffee beans were meticulously selected and
                                        expertly roasted to perfection, ensuring a taste that was
                                        out of this world.
                                    </p>
                                    <p>
                                        Cosmic Coffee is not just an ordinary coffee brand. We are
                                        the epitome of excellence, flavor, and innovation in the
                                        world of coffee. Our journey began decades ago during the
                                        groundbreaking Apollo missions to the moon. It was during
                                        this time that our coffee gained legendary status as the
                                        chosen brew of the brave astronauts venturing into the
                                        unknown. Our coffee beans were meticulously selected and
                                        expertly roasted to perfection, ensuring a taste that was
                                        out of this world.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <img src="images/beans.png" alt="Image" class="img-fluid aboutImage" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services section-->
    <section id="promise">
        <div class="container">
            <h1 class="text-center">Our Promise</h1>
            <style>
                span {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <span>
                                <i class="fas servicesIcon fa-clock icons-promise"></i>
                                <h4 class="card-title mt-3">Quick service</h4>
                            </span>

                            <p class="card-text mt-3">
                                Our services are quick and efficient. We value your time as
                                much as you do. Never again will you have to wait in line for
                                your coffee. We guarantee that you will receive your order
                                within 7 minutes of placing it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <span>
                                <i class="fa-solid fa-mug-saucer icons-promise"></i>
                                <h4 class="card-title mt-3">Best Quality</h4>
                            </span>
                            <p class="card-text mt-3">
                                Our coffee is made from the finest beans in the galaxy. We
                                handpick our beans from the Coffea Neptuniac plants that grow
                                on the planet Neptune. These beans are then roasted to perfection.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mt-4">
                    <div class="card servicesText">
                        <div class="card-body">
                            <span>
                                <i class="fa-solid fa-face-grin-tongue-squint icons-promise"
                                    style=" transform: scale(1.35);"></i>
                                <h4 class="card-title mt-3">Great taste</h4>
                            </span>
                            <p class="card-text mt-3">
                                As the saying goes, "The proof of the pudding is in the eating".
                                We are confident that you will love our coffee. If you don't, we
                                will give you a full refund. No questions asked <i>(p.s. no refunds requested yet)</i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section-->
    <section id="contact">
        <div class="container mt-4 pt-4">
            <div class="card custom-card" id="custom-card">
                <h1 class="card-header text-center custom-card">Come, Visit us!</h1>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-center">
                                    <iframe
                                        src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=Eyjafjallaj%C3%B6kul,%20volcano,%20Iceland+(Cosmic%20coffee)&amp;t=h&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                                        style="border:0;width:400px;height:400px;vertical-align:center;display:flex;"
                                        allowfullscreen="" loading="lazy">
                                    </iframe>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div style="height: 5px;"></div>
                                <div class="text-center">
                                    <h4 class="card-title">Address</h4>
                                    <p>14, Eyjafjallajökul <br>
                                        Volcano, Iceland</p>
                                </div>
                                <div class="text-center">
                                    <h4 class="card-title">Opening Hours</h4>
                                    <p>
                                        <b>Monday - Friday</b> <br>
                                        6:00 AM - 12:00 Midnight <br>
                                        <b>Saturday & Sunday</b> <br>
                                        7:00 AM - 11:00 PM <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <div style="width: 100%; height: 10px"></div>
    <div class="container-fluid">
        <footer class="text-center text-lg-start">
            <div>
                <section>
                    <h2 class="text-center" style="padding-top: 20px; padding-bottom:0px;" id="finduson">Find us on</h2>
                </section>
            </div>
            <div class="container d-flex justify-content-center py-5" style="padding-top:0px">
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2 footbtn facebook"
                    style="background-color: #8b4513; width:53px">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2 footbtn youtube"
                    style="background-color: #8b4513; aspect-ratio:1;">
                    <i class="fab fa-youtube"></i>
                </button>
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2 footbtn instagram"
                    style="background-color: #8b4513; width:53px">
                    <i class="fab fa-instagram"></i>
                </button>
                <button type="button" class="btn btn-primary btn-lg btn-floating mx-2 footbtn twitter"
                    style="background-color: #8b4513;">
                    <i class="fab fa-twitter"></i>
                </button>
            </div>

            <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.4);">
                © 1940-2023 Cosmic Coffee:
                <a class="text-white" href="https://guthib.com">cosmic-coffee.mw</a>
            </div>
        </footer>

    </div>
    <script src="script.js"></script>
</body>

</html>