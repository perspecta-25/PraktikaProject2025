<?php
include 'common/header_start.php';
include 'common/header_end.php';
?>
<body class="portfolio-page">
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Portfolio</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol class="d-flex align-items-center justify-content-center ps-0">
            <li><a href="index.php">Home</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <!-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul>End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 1</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-1.jpg" title="Cat 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-10.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-10.jpg" title="Cat 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-7.jpg" title="Cat 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 5</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-4.jpg" title="Cat 5" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 4</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-2.jpg" title="Cat 4" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-11.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 6</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-11.jpg" title="Cat 6" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 8</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-8.jpg" title="Cat 8" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 9</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-5.jpg" title="Cat 9" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 7</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-3.jpg" title="Cat 7" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-12.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 11</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-12.jpg" title="Cat 11" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 12</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-9.jpg" title="Cat 12" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Cat 10</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/portfolio-6.jpg" title="Cat 10" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>
<?php
include 'common/footer_start.php';
include 'common/footer_end.php';
?>