<x-layout>
    <main>
        <title>Portfolio - Samuele Di Cori -</title>

        <!-- Header -->
        <header id="homepage">
            <div class="px-5 p-5 vh-100 col-md-12">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <div class="text-center text-xxl-start text-container">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                <div class="text-uppercase">Design · Development · Marketing</div>
                            </div>
                            <div class="fs-3 fw-light text-muted">I can help your business to</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Get online and grow fast</span></h1>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="resume.html">Resume</a>
                                <a class="btn btn-outline-danger btn-lg px-5 py-3 fs-6 fw-bolder" href="projects.html">Projects</a>
                            </div>
                        </div>
                    </div>
                    <div id="homeImg" style="background-image: url('{{ asset('img/me.jpg') }}')"></div>
                </div>
            </div>
        </header>

        <!-- Body -->
        <body class="d-flex flex-column h-100">
            <main class="flex-shrink-0">
                <!-- Resume Section -->
                <section id="about">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, saepe nihil sit, voluptatibus facere doloremque odio neque praesentium rem vel necessitatibus dolorum voluptatem velit ab ullam pariatur ut error iste.</p>
                </section>

                <!-- Contact Section -->
                <section id="contact">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, saepe nihil sit, voluptatibus facere doloremque odio neque praesentium rem vel necessitatibus dolorum voluptatem velit ab ullam pariatur ut error iste.</p>
                </section>

                <!-- Service Section -->
                <section id="service">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, saepe nihil sit, voluptatibus facere doloremque odio neque praesentium rem vel necessitatibus dolorum voluptatem velit ab ullam pariatur ut error iste.</p>
                </section>
            </main>
        </body>
    </main>
</x-layout>
