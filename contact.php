<?php
   

        include('top.php');




   ?>

    <section class="site-banner jarallax padding-large" style="background: url(images/DSC03803-1.JPG) no-repeat; background-position: top;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Con<span style="color: bisque;">tact </span> Us</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.html">Home /</a>
              </span>
              <span class="item">Contact us</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-information padding-large">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="section-header">
              <h2 class="section-title">Get in touch</h2>
            </div>
            <div class="contact-detail">
              <div class="detail-list">
                <p>We would love to hear from you. Whether you have a question, feedback, or just want to say hello, feel free to reach out to us through our contact form or email. We look forward to connecting with you.</p>
                <ul class="list-unstyled list-icon">
                  <li>
                    <a href="tel:+234 809 052 7647"> <i class="icon icon-phone"> </i>+2348090527647</a>
                  </li>
                  <li>
                    <a href="mailto:ELITEBYTOL@GMAIL.COM"><i class="icon icon-mail"> </i>ELITEBYTOL@GMAIL.COM</a>
                  </li>
                </ul>
              </div>
              <div class="social-links">
                <h3>Social Links</h3>
                <ul class="d-flex list-unstyled">
                  <li><a href="#" class="icon icon-facebook"></a></li>
                  <li><a href="#" class="icon icon-twitter"></a></li>
                  <li><a href="https://www.instagram.com/elitesmerch/" target="_blank" class="icon icon-instagram"></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="contact-information">
              <div class="section-header">
                <h2 class="section-title">Send us a message</h2>
              </div>
              <form name="contactform" action="contact.php" method="post" class="contact-form">
                <div class="form-item">
                  <input type="text" minlength="2" name="name" placeholder="Name" class="u-full-width bg-light" required>
                  <input type="email" name="email" placeholder="E-mail" class="u-full-width bg-light" required>
                  <textarea class="u-full-width bg-light" name="message" placeholder= "We would like to hear from you!" style="height: 180px;" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-dark btn-full btn-medium">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


   <?php
   

        include('social.php');




   ?>






<?php
   

   include('bottom.php');




?>