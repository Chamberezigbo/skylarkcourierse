<?php
require 'header.php';


?>

    <!-- slider section -->
    <section class=" slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                        <form action="tracking.inc.php" method="POST">
                          <div class="search_input">
                            <input type="text" name="trackingId" placeholder="Tracking Id">
                            <img src="images/search-icon.png" alt="">
                          </div>

                          <button>
                            Search
                          </button>
                        </form>
                      </div>
                      <div>
                        <h1 class="text-white">
                          Fast <br>
                          trucking & Reliable <br>
                          Services
                        </h1>

                      

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="images/truck.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="slider_item-container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="slider_item-detail">
                      <div class="slider_form-box">
                        <form action="tracking.inc.php" method="POST">
                          <div class="search_input">
                            <input type="text" name="trackingId" placeholder="Tracking Id">
                            <img src="images/search-icon.png" alt="">
                          </div>

                          <button>
                            Search
                          </button>
                        </form>
                      </div>
                      <div>
                        <h1 class="text-white">
                          Efficient <br>
                          Safe & Logistics <br>
                          Solutions
                        </h1>


                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="slider_img-box">
                      <img src="images/truck.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>


    </section>

    <!-- end slider section -->
  </div>

  <!-- about section -->
  <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="heading_style">
            About Us
          </h2>
          <p>
            At <?=$companyName ?>, we are more than just a logistics company. We are your trusted partner in ensuring that your goods reach their destination safely, efficiently, and on time. With years of experience in the industry, we have built a reputation for excellence, reliability, and innovation.
          </p>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="about_img-box">

            <img src="images/a-truck.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6 about_detail-container">
          <div class="about_detail-box">
            <h3>
              Our Mission
            </h3>
            <p>
              Our mission is simple: to provide top-tier logistics solutions that empower businesses and individuals to move goods seamlessly across the globe. We are committed to delivering unparalleled service, leveraging the latest technology, and maintaining the highest standards of safety and efficiency.

            </p>
            <div class="d-flex  justify-content-end">
              <a href="about.php" class="quote-btn about-btn">
                <img src="images/white-next.png" alt="">
                <span>
                  About More
                </span>

              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end about section -->

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2 class="heading_style">
          Our Services
        </h2>
      </div>
      <div class="row layout_padding2-top">
        <div class="col-md-4">
          <div class="service_img-box s-b-1">
            <img src="images/service-1.jpg" alt="">
            <div class="d-flex">
              <h3>
                CARGO

              </h3>
            </div>
          </div>
          <div class="service-detail">
            <p>
              At <?=$companyName ?>, our Cargo Logistic Service is designed to streamline your supply chain and ensure that your goods are delivered safely and efficiently, whether across town or across the globe. We specialize in managing the complexities of cargo logistics, offering end-to-end solutions that are tailored to meet your specific needs.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service_img-box s-b-2">
            <img src="images/service-2.jpg" alt="">
            <div class="d-flex">
              <h3>
                LOGISTIC SERVICE


              </h3>
            </div>
          </div>
          <div class="service-detail">
            <p>
              Whether you are shipping a small parcel or a full container load, our Cargo Logistic Service is designed to meet the highest standards of reliability and efficiency, ensuring your goods arrive on time and in perfect condition.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service_img-box s-b-3">
            <img src="images/service-3.jpg" alt="">
            <div class="d-flex">
              <h3>
                STORAGE


              </h3>
            </div>
          </div>
          <div class="service-detail">
            <p>
              In addition to our logistics services, <?=$companyName ?> offers state-of-the-art storage solutions to meet your warehousing needs. Our storage facilities are equipped with the latest technology and security measures, providing a safe and organized environment for your goods.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end service section -->


  <!-- shop section -->
  <section class="shop_section">
    <div class="container">
      <div class="d-flex justify-content-center">
        <h2 class="heading_style">
          Our Shop
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex align-items-center h-100">
            <div class="shop-detail">
              <h5>
                Everything You Need
              </h5>
              <p>
                Welcome to the <?=$companyName ?> Shop, your one-stop destination for all your packaging and shipping needs. Whether you’re preparing a small parcel for a local delivery or packing a large shipment for international transport, we’ve got you covered with a wide range of high-quality packaging materials and supplies.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="shop_img-box">
            <img src="images/gift.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end shop section -->

  <!-- testimonial section -->
  <section class="client_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="heading_style">
        Testimonial
      </h2>
    </div>
    <div id="carouselExampleIndicator" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicator" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicator" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicator" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicator" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="client_box c-b-1">
                  <div class="client_img">
                    <img src="images/client.png" alt="" class="img-fluid">
                  </div>
                  <div class="client_detail">
                    <h5>
                    John A
                    </h5>
                    <p>
                      I’ve been using <?=$companyName ?> for all my shipping needs, and I couldn’t be happier. Their packaging materials are of the highest quality, and the custom solutions they offer have saved me so much time and hassle. Highly recommend!
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box c-b-2">
                  <div class="client_img">
                    <img src="images/testimonial-1.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="client_detail">
                    <h5>
                      David L
                    </h5>
                    <p>
                      What sets <?=$companyName ?> apart is their reliability. I’ve shipped large and valuable consignments with them multiple times, and they’ve never let me down. Their global reach and real-time tracking give me the confidence that my goods are in good hands.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="client_box c-b-1">
                  <div class="client_img">
                    <img src="images/testimonial-2.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="client_detail">
                    <h5>
                      Emily R.
                    </h5>
                    <p>
                      I love the eco-friendly packaging options at Skylark Courier Shop. As someone who cares about the environment, it’s great to find a company that offers sustainable solutions without compromising on quality. Their service is always fast and friendly.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box c-b-2">
                  <div class="client_img">
                    <img src="images/testimonial-3.jpg" alt="" class="img-fluid">
                  </div>
                  <div class="client_detail">
                    <h5>
                      Michael T
                    </h5>
                    <p>
                      <?=$companyName ?> has been our logistics partner for over a year, and they have consistently exceeded our expectations. Their storage facilities are secure, and their inventory management system is easy to use. We couldn’t ask for a better logistics provider.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </section>
  <!-- end testimonial section -->



  <!-- company section -->
  <section class="company_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="d-flex align-items-center h-100">
            <div class="company-detail">
              <h3>
                Company
              </h3>
              <p>
                At <?=$companyName ?>, we understand that your business depends on timely and secure deliveries. That’s why we offer customized logistics solutions tailored to your needs, ensuring that your cargo reaches its destination on time, every time. From small parcels to large freight, our experienced team and cutting-edge technology guarantee your peace of mind.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="company_img-box">
            <img src="images/company.jpg" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end company section -->



  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="d-flex justify-content-center">
      <h2 class="heading_style">
        Contact us
      </h2>
    </div>
    <div class="container layout_padding2-top">
      <div class="row">
        <div class="col-md-6">
          <div id="map" class="h-100 w-100"></div>
        </div>

        <div class="col-md-6">
          <div class="contact_form-container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name">
              </div>
              <div>
                <input type="email" placeholder="Your Email">
              </div>
              <div>
                <input type="text" placeholder="Your Phone">
              </div>

              <div>
                <input type="text" class="message_input" placeholder="Message">
              </div>
              <div class="d-flex justify-content-end">
                <button type="submit " class="">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->



 <?php
 require 'footer.php';
 ?>