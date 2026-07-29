<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Natco Lifesciences</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
    @include('layout.navBar')

    <body>
        <div class="container">
    <!-- banner -->
            <div class="contact-img">
                <img src="{{ asset('Images/carousel/SLIDER_4.webp') }}" class="img-fluid" alt="Contact Us">
                <div class="contact-txt">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                    <h1>
                        Contact Us
                    </h1>
                    <p>Let’s Connect and Discuss Your Needs.
                    Whether you’re a customer, health-professional or an investor, feel free to contact us.</p>
                </div>
            </div>
        </div>
        <br>
        <br>
        
    <!-- Contact Information & Contact Form -->
    <section class="contact-us-section py-5">
    <div class="container">

        <div class="row g-3">

            <!-- LEFT -->
            <div class="col-lg-4">
                <div class="contact-info">
                    <h2>Get in Touch</h2>
                    <p class="text-muted mb-4">
                        We'd love to hear from you. Reach out to us through any of the channels below.
                    </p>

                    <!-- Office Hours -->
                    <div class="contact-box">
                        <div class="icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <div>
                            <h5>Office Hours</h5>
                            <p class="mb-1">
                                <strong>Monday - Friday</strong><br>
                                8:00 AM - 5:00 PM
                            </p>
                            <p class="mb-0">
                                <strong>Saturday - Sunday</strong><br>
                                CLOSED
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="contact-box">
                        <div class="icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>

                        <div>
                            <h5>Phone</h5>
                            <p>(02) 88163981</p>
                        </div>

                    </div>

                    <!-- Mobile -->
                    <div class="contact-box">
                        <div class="icon">
                            <i class="bi bi-phone-fill"></i>
                        </div>

                        <div>
                            <h5>Mobile</h5>
                            <p>(+63) 9399362541</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="contact-box">
                        <div class="icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <a href="mailto:contact@natcoph.com">contact@natcoph.com</a>
                        </div>
                    </div>

                    <!-- Social -->
                    <div class="contact-box">
                        <div class="icon">
                            <i class="bi bi-share-fill"></i>
                        </div>

                        <div>
                            <h5>Follow Us</h5>
                            <a href="#">Facebook</a><br>
                            <a href="#">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-8">

                <div class="contact-form">
                    <h2>Send Us a Message</h2>
                    <p class="text-muted mb-4">Have a question? Fill out the form below and we'll get back to you as soon as possible.</p>

                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>Name *</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Email *</label>
                                <input type="email" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Contact Number</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Inquiry Type</label>
                                <select class="form-select">
                                    <option>General Inquiry</option>
                                    <option>Product Inquiry</option>
                                    <option>Medical Information</option>
                                    <option>Distributor Partnership</option>
                                    <option>Careers</option>
                                    <option>Technical Support</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label>Subject</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="col-12 mb-4">
                                <label>Message *</label>
                                <textarea rows="6" class="form-control"></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary-send px-5">
                                    <i class="bi bi-send-fill me-2"></i>
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <section class="office-location py-5">

    <div class="container">
        <div class="text-center mb-5">
            <h2>Find Our Office</h2>
            <p class="text-muted">Visit us or locate our office easily using Google Maps.</p>
        </div>

        <div class="location-card">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5410.339616039625!2d120.99271177636588!3d14.561708635920073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c97bdeb20aad%3A0xe9831fa3e669ec3a!2sManor%20Building%2C%20Malate%2C%20Manila%2C%201004%20Metro%20Manila!5e1!3m2!1sen!2sph!4v1785307530912!5m2!1sen!2sph"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin">
            </iframe>

            <div class="address">
                <h4>Natco Lifesciences Philippines Inc.</h4>
                <p>Unit 3005-3007 Manor Bldg. 2629, Taft Ave., Malate, Manila</p>
            </div>
        </div>
    </div>
</section>

<!-- Office location -->
<section class="faq-section py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2>Frequently Asked Questions</h2>

            <p class="text-muted">

                Answers to common inquiries.

            </p>

        </div>

        <div class="accordion" id="faqAccordion">

            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button"

                        data-bs-toggle="collapse"

                        data-bs-target="#faq1">

                        How can I inquire about a product?

                    </button>

                </h2>

                <div id="faq1"

                    class="accordion-collapse collapse show"

                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">

                        Submit the inquiry form above or contact us through our phone or email.

                    </div>

                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"

                        data-bs-toggle="collapse"

                        data-bs-target="#faq2">

                        What are your office hours?

                    </button>

                </h2>

                <div id="faq2"

                    class="accordion-collapse collapse"

                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">

                        Monday to Friday, 8:00 AM to 5:00 PM.
                        Closed on Saturdays and Sundays.

                    </div>

                </div>

            </div>

            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"

                        data-bs-toggle="collapse"

                        data-bs-target="#faq3">

                        How can I become a distributor?

                    </button>

                </h2>

                <div id="faq3"

                    class="accordion-collapse collapse"

                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">

                        Choose "Distributor Partnership" in the inquiry form and our team will contact you.

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

    </body>

    <footer>
        @include('layout.footerSec')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</html>