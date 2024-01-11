<x-layout>
    <title>Portfolio - Samuele Di Cori -</title>

    <header id="homepage" class="container px-5 py-5 d-flex flex-column h-100">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-12 col-md-6 mb-4 text-center">
                <div class="d-flex flex-column align-items-center">
                    <div id="homeImg" style="background-image: url('{{ asset('img/me.jpg') }}')" class="img-fluid"></div>
                    <h2 class="text-uppercase">Samuele Di Cori</h2>
                </div>
            </div>
            
            <div class="col-12 col-md-6">
                <div class="text-container">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-1">
                        <p class="text-uppercase">Design · Development · Marketing</p>
                    </div>
                    <div class="fs-3 fw-light text-muted">I can help your business to</div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Get online and grow
                            fast</span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-md-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a>
                        <a class="btn btn-outline-danger btn-lg px-5 py-3 fs-6 fw-bolder"
                            href="projects.html">Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-8">
                        <div class="text-center my-5">
                            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
                            <p class="lead fw-light mb-4">My name is Samuele di Cori and I learned how to create websites and databases to grow your business.</p>
                            <p class="text-muted">check my profile and find the most suitable service for you. Contact me for a custom need or specific information. In my portfolio you will find examples and links of my work, which is constantly improving.</p>
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
