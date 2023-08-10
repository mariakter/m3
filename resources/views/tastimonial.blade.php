   @extends('layout.master')
   @section('Content')

   <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="" />
              </div>
              <div class="client_detail">
                <div class="client_name">
                  <div class="client_info">
                    <h4>
                      Roocky Rom
                    </h4>
                    <span>
                      Parante
                    </span>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="" />
              </div>
              <div class="client_detail">
                <div class="client_name">
                  <div class="client_info">
                    <h4>
                      Roocky Rom
                    </h4>
                    <span>
                      Parante
                    </span>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="" />
              </div>
              <div class="client_detail">
                <div class="client_name">
                  <div class="client_info">
                    <h4>
                      Roocky Rom
                    </h4>
                    <span>
                      Parante
                    </span>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                </p>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
  </section>

  <!-- end client section -->

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
              <a class="" href="why.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Why Us </a>
              <a class="" href="team.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Our Team</a>
              <a class="active" href="testimonial.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a>
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