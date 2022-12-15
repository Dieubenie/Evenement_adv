@extends('layout.main')
@section('containt')

<main id="main">
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="section-bg">

    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Contact Us</h2>
        <p>Nihil officia ut sint molestiae tenetur.</p>
      </div>

      <div class="row contact-info">

        <div class="col-md-4">
          <div class="contact-address">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>A108 Adam Street, NY 535022, USA</address>
          </div>
        </div>

        </div>

      </div>

      <div class="form">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="form-group col-md-6 mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Nom de la catégorie" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection