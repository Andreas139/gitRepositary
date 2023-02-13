<?php
$layout = 'home';
/** @var Post[] $data */
?>

<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><span class="text-primary">Cesto</span><span
                    class="text-success">vka</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="#SlovakiaMore">Slovakia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#UsaMore">USA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#BulgaryMore">Bulgary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#CreteMore">Crete</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#DubaiMore">Dubai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=auth&a=login">Profile</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="public/images/project-2img/Slovakia.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Slovakia</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><a href="#SlovakiaMore" class="btn btn-secondary mt-3"> More info</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/project-2img/Dubai.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Dubai</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><a href="#DubaiMore" class="btn btn-success mt-3"> More info</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/project-2img/Bulgaria.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Bulgaria</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><a href="#BulgaryMore" class="btn btn-info mt-3"> More info</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/project-2img/Crete.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>Crete</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><a href="#CreteMore" class="btn btn-info mt-3"> More info</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="public/images/project-2img/USA.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
                <h5>USA</h5>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p><a href="#UsaMore" class="btn btn-info mt-3"> More info</a></p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!--Portfolio section -->



<section id="portfolio" class="portfolio section-padding ">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5 ">
                    <h2> Our Projects </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br>
                        do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <div class="card text-light text-center bg-white pb-2" id="SlovakiaMore">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">

                                <img src="public/images/project-2img/Slovakia1.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">Slovakia</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque
                                nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita
                                inventore ipsum perferendis
                                possimus quisquam, repellat, sit temporibus?</p>
                            <a href="Slovakia.html" class="btn bg-warning text-dark" role="button">Select Location </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <div class="card text-light text-center bg-white pb-2" id="DubaiMore">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="public/images/project-2img/Dubai1.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">Dubai</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque
                                nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita
                                inventore ipsum perferendis
                                possimus quisquam, repellat, sit temporibus?</p>
                            <a href="?c=home&a=dubai" class="btn bg-warning text-dark" role="button">Select Location </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <div class="card text-light text-center bg-white pb-2" id="BulgaryMore">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="public/images/project-2img/Bulgaria1.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">Bulgaria</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque
                                nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita
                                inventore ipsum perferendis
                                possimus quisquam, repellat, sit temporibus?</p>
                            <a href="Bulgaria.html" class="btn bg-warning text-dark" role="button">Select Location </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <div class="card text-light text-center bg-white pb-2" id="CreteMore">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="public/images/project-2img/Crete1.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">Crete</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque
                                nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita
                                inventore ipsum perferendis
                                possimus quisquam, repellat, sit temporibus?</p>
                            <a href="Crete.html" class="btn bg-warning text-dark" role="button">Select Location </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <div class="card text-light text-center bg-white pb-2" id="UsaMore">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="public/images/project-2img/USA1.jpg" class="img-fluid" alt="">
                            </div>
                            <h3 class="card-title">USA</h3>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt itaque
                                nostrum optio qui vel. Ad animi, autem consequuntur cumque doloribus et expedita
                                inventore ipsum perferendis
                                possimus quisquam, repellat, sit temporibus?</p>
                            <a href="USA.html" class="btn bg-warning text-dark" role="button">Select Location </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- contact section-->
<section id="contact" class="contact section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2> Anything to say? Contact us </h2>
                    <p>
                        Lorem ipsum dolor sit amet,
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
        <div class="row m-0">
            <div class="col-md-12 p-0 pt-4 pb-4">
                <form action="#" class="bg-light p-4.m-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" required placeholder="Your Full Name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="email" class="form-control" required placeholder="Your email Here">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                             <textarea rows="3" required class="form-control"
                                       placeholder="Your text here"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block mt-3">Send Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!--- footer -->

<footer class="bg-dark p-2 text-center">
    <div class="container">
        <div class="text-white"> All Rights Reserved @Cestovka</div>

    </div>

    <div>
        <script>
            const options = {
                method: 'GET',
                headers: {
                    accept: 'application/json',
                    'X-RapidAPI-Key': '9f27468136msh6a32888270af132p15b93ajsn747c484fe2ce',
                    'X-RapidAPI-Host': 'matchilling-chuck-norris-jokes-v1.p.rapidapi.com'
                }
            };

            fetch('https://matchilling-chuck-norris-jokes-v1.p.rapidapi.com/jokes/random', options)
                .then(response => response.json())
                .then(response => console.log(response))
                .catch(err => console.error(err));
        </script>
    </div>

</footer>





