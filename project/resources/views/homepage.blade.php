<x-layout>
    <title>Portfolio - Samuele Di Cori -</title>

    <header id="homepage" class="container px-5 py-5 d-flex flex-column h-100 bg-black text-light">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <div class="d-flex flex-column align-items-center">
                    <div id="homeImg" style="background-image: url('{{ asset('img/me.jpg') }}')"
                        class="img-fluid rounded-circle border border-light mb-3"></div>
                    <h2 class="text-uppercase">Samuele Di Cori</h2>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="text-container text-center">
                    <div class="badge bg-gradient-primary-to-secondary text-dark mb-1">
                        <p class="text-uppercase">Design · Development · Marketing</p>
                    </div>
                    <div class="fs-3 fw-light text-muted">I can help your business to</div>
                    <h1 class="display-3 fw-bolder mb-4"><span class="text-gradient d-inline">Get online and grow
                            fast</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-md-center mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a>
                        <a class="btn btn-outline-danger btn-lg px-5 py-3 fs-6 fw-bolder" href="https://github.com/RedRibbon990">Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <h2 class="text-center mt-4 py-5">Some simple examples</h2>
        <section class="background-section shadow text-black bg-black d-flex justify-content-center">
            <div class="container bg-black">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/ex1.webp') }}" class="d-block w-75 mx-auto img-thumbnail" alt="Immagine 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ex2.webp') }}" class="d-block w-75 mx-auto img-thumbnail" alt="Immagine 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/ex3.webp') }}" class="d-block w-75 mx-auto img-thumbnail" alt="Immagine 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                            <p class="lead fw-light mb-4">My name is Samuele di Cori and I learned how to create
                                websites and databases to grow your business.</p>
                            <p class="text-muted">Check my profile and find the most suitable service for you. Contact
                                me for a custom need or specific information. In my portfolio, you will find examples and
                                links to my work, which is constantly improving.</p>
                            <div class="d-flex justify-content-center fs-2 gap-4">
                                <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
