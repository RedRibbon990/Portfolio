<x-layout>
    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelop"></i></div>
            <h1 class="fw-bolder">Get in touch</h1>
            <p class="lead fw-normal text-muted mb-0">We'd love to hear from you</p>
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
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="{{ route('send') }}"
                    method="POST">
                    @csrf
                    <!-- Name input -->
                    <div class="form-floating mb-3">
                        <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                            name="name" value="{{ old('name') }}" data-sb-validations="required"
                            data-sb-can-submit="no" placeholder="Enter your name...">
                        <label for="name">Full name</label>
                        @error('name')
                            <div class="text-danger" data-sb-feedback="name:required">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Email input -->
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}" data-sb-validations="required,email"
                            data-sb-can-submit="no" placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @if($errors->has('email'))
                            <blade
                                if|%20(%24errors-%3Ehas(%26%2339%3Bemail%26%2339%3B%2C%20%26%2339%3Brequired%26%2339%3B))%0D>
                                <div class="text-danger" data-sb-feedback="email:required">{{ $message }}</div>
                            @elseif($errors->has('email'))
                                <div class="text-danger" data-sb-feedback="email:email">Email is not valid.</div>
                            @endif
                        @endif
                    </div>
                    <!-- Phone number input -->
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone" name="text"
                            value="{{ old('text') }}" data-sb-validations="required"
                            data-sb-can-submit="no" placeholder="(123) 456-7890">
                        <label for="phone">Phone number</label>
                        @error('text')
                            <div class="text-danger" data-sb-feedback="phone:required">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- Message input -->
                    <div class="form-floating mb-3">
                        <textarea type='text' class="form-control" id="message" name="message" style="height: 10rem"
                            data-sb-validations="required"
                            data-sb-can-submit="no">{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                        @error('text')
                            <div class="text-danger" data-sb-feedback="message:required">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br>
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>

                    <div class="d-grid"><button class="btn btn-primary btn-lg " id="sumbitButton"
                            type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
