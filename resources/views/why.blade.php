 @extends('layout.master')
 @section('Content')
<!-- why section -->

<section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
        <p>
          words which don't look even slightly believable. If you are going to use a passage m
        </p>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/why1.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              We have Medical Care For Baby
            </h5>
            <a href="">
              <span>
                Read More
              </span>
              <hr />
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/why2.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              We have Good Babysitter
            </h5>
            <a href="">
              <span>
                Read More
              </span>
              <hr />
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/why3.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              We have Security for Baby
            </h5>
            <a href="">
              <span>
                Read More
              </span>
              <hr />
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/why4.png" alt="" />
          </div>
          <div class="detail-box">
            <h5>
              Successful
            </h5>
            <a href="">
              <span>
                Read More
              </span>
              <hr />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->


  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              Address
            </h5>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_link_box">
            <h5>
              Navigation
            </h5>
            <div class="info_links">
              <a class="" href="index.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
              <a class="" href="about.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> About</a>
              <a class="active" href="why.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Why Us </a>
              <a class="" href="team.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Our Team</a>
              <a class="" href="testimonial.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a>
              <a class="" href="contact.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h5>
            Newsletter
          </h5>
          <form action="">
            <input type="text" placeholder="Enter Your email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  @endsection