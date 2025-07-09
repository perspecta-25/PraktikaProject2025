<?php
include 'common/header_start.php';
include 'common/header_end.php';
?>
<body class="contact-page">
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contact</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol class="d-flex align-items-center justify-content-center ps-0">
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="icon bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="icon bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Me</h3>
                <p>+1 5589 55488 55</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="icon bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>info@example.com</p>
              </div>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
              <i class="icon bi bi-share flex-shrink-0"></i>
              <div>
                <h3>Social Profiles</h3>
                <div class="social-links">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>
            

          </div>
        </form><!-- End Contact Form -->
        <a href="export_to_json.php" type="submit">Fetch Message</a>

        <!-- Contacts List Section -->
            <div class="contacts-section" id="contacts-list">
                <h2 class="section-title">
                    <i class="bi bi-inbox me-2"></i>Recent Messages
                </h2>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div id="contacts-container">
                            <div class="loading-spinner">
                                <div class="spinner-border text-light" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                <p class="text-light mt-2">Loading messages...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


      </div>

    </section><!-- /Contact Section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Load existing contacts when page loads
            loadContacts();
            
            // Form submission
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();
                
                // Get form data
                var formData = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    message: $('#message').val()
                };
                
                // Disable submit button and show loading
                $('#submit-btn').prop('disabled', true).html('<i class="bi bi-hourglass-split me-2"></i>Sending...');
                $('#response-message').hide();
                
                // Make AJAX request
                $.ajax({
                    url: 'submit.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            showMessage(response.message, 'success');
                            // Clear form on success
                            $('#contact-form')[0].reset();
                            // Reload contacts to show the new one
                            loadContacts();
                        } else {
                            showMessage(response.message, 'danger');
                        }
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = 'An error occurred while submitting the form.';
                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorMessage = xhr.responseJSON.message;
                        }
                        showMessage(errorMessage, 'danger');
                    },
                    complete: function() {
                        // Re-enable submit button
                        $('#submit-btn').prop('disabled', false).html('<i class="bi bi-send me-2"></i>Send Message');
                    }
                });
            });
            
            function showMessage(message, type) {
                var $responseDiv = $('#response-message');
                $responseDiv.removeClass().addClass('alert alert-' + type);
                $responseDiv.html('<i class="bi bi-' + (type === 'success' ? 'check-circle' : 'exclamation-triangle') + ' me-2"></i>' + message).show();
                
                // Auto-hide success messages after 5 seconds
                if (type === 'success') {
                    setTimeout(function() {
                        $responseDiv.fadeOut();
                    }, 5000);
                }
            }
            
            function loadContacts() {
                $.ajax({
                    url: 'submit.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success && response.data) {
                            displayContacts(response.data);
                        } else {
                            showNoContacts();
                        }
                    },
                    error: function() {
                        showNoContacts();
                    }
                });
            }
            
            function displayContacts(contacts) {
                var $container = $('#contacts-container');
                
                if (contacts.length === 0) {
                    showNoContacts();
                    return;
                }
                
                var html = '';
                contacts.forEach(function(contact) {
                    var date = new Date(contact.created_at || Date.now()).toLocaleDateString();
                    html += `
                        <div class="contact-item">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="flex-grow-1">
                                    <div class="contact-name">${escapeHtml(contact.name)}</div>
                                    <div class="contact-email">
                                        <i class="bi bi-envelope me-1"></i>${escapeHtml(contact.email)}
                                    </div>
                                    <div class="contact-message">${escapeHtml(contact.message)}</div>
                                    <div class="contact-date">
                                        <i class="bi bi-calendar me-1"></i>${date}
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <span class="badge bg-primary">#${contact.id}</span>
                                </div>
                            </div>
                        </div>
                    `;
                });
                
                $container.html(html);
            }
            
            function showNoContacts() {
                $('#contacts-container').html(`
                    <div class="no-contacts">
                        <i class="bi bi-inbox display-1 text-light opacity-50"></i>
                        <h4 class="text-light mt-3">No messages yet</h4>
                        <p class="text-light opacity-75">Be the first to send us a message!</p>
                    </div>
                `);
            }
            
            function escapeHtml(text) {
                var map = {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#039;'
                };
                return text.replace(/[&<>"']/g, function(m) { return map[m]; });
            }
        });
    </script>

  </main>
<?php
include 'common/footer_start.php';
include 'common/footer_end.php';
?>