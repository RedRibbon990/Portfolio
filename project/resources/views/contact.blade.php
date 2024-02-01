<x-layout>
    <div id="dark-background" class="bg-light rounded-3 py-4 px-4 px-md-5 mb-4">
        <div id="delayedDiv" class="col-md-1">
            <div class="card" id="card-mode">
                <div class="d-flex justify-content-center align-items-center pos">
                    <div class="dark-button align-items-center" id="mode">
                        <span class="text-uppercase">Mode</span>
                        <span class="dot mode"></span>
                        <span class="dark-dot"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h1 class="fw-bolder">Get in Touch</h1>
            <p class="lead fw-normal text-muted mb-0">We'd Love to Hear from You</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
                    @csrf

                    <div class="form-floating mb-3">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                            name="name" value="{{ old('name') }}" data-sb-validations="required"
                            data-sb-can-submit="no" placeholder="Enter your name...">
                        <label for="name">Full Name</label>
                        @error('name')
                            <div class="text-danger" data-sb-feedback="name:required">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}"
                            data-sb-validations="required,email" data-sb-can-submit="no" placeholder="name@example.com">
                        <label for="email">Email Address</label>
                        @error('email')
                            <div class="text-danger"
                                data-sb-feedback="email:{{ $message == 'required' ? 'required' : 'email' }}">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('text') is-invalid @enderror" id="phone"
                            name="text" value="{{ old('text') }}" data-sb-validations="required"
                            data-sb-can-submit="no" placeholder="(123) 456-7890">
                        <label for="phone">Phone Number</label>
                        @error('text')
                            <div class="text-danger" data-sb-feedback="phone:required">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('message') is-invalid @enderror" id="message"
                            name="message" style="height: 10rem" data-sb-validations="required"
                            data-sb-can-submit="no">{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                        @error('message')
                            <div class="text-danger" data-sb-feedback="message:required">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form Submission Successful!</div>
                            To activate this form, sign up at
                            <br>
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
