<template>
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-info">
          <h2 class="footer-title">Cogent Solutions<sup>TM</sup></h2>
          <p class="footer-description">
            Through our conferences we transform your business challenges into opportunities. Our clients and
            customers are leading government entities and the fortune 500 companies.
          </p>

          <div class="awards-section">
            <h2 class="footer-title">Awards</h2>
            <div class="award-badges">
              <img src="/src/assets/bestwork-02.png" alt="Best Workplaces 2024" class="award-image">
              <img src="/src/assets/bestwork-04.png" alt="Best Workplaces 2023" class="award-image">
              <img src="/src/assets/bestwork-03.png" alt="Best Workplaces 2023" class="award-image">
              <img src="/src/assets/bestwork-01.png" alt="Great Place" class="award-image">
            </div>
          </div>
        </div>

        <div class="footer-contact">
          <h2 class="footer-title">Our office</h2>
          
          <div class="office-location">
            <div class="location-icon">
              <img src="/src/assets/location.png" alt="Location" class="icon-image-contact">
            </div>
            <div class="location-details">
              <p class="location-title">Middle East & Africa HQ</p>
              <p>Office No: 209, The Metropolis Tower</p>
              <p>Business Bay, Dubai, United Arab Emirates</p>
            </div>
          </div>

          <div class="office-location">
            <div class="location-icon">
              <img src="/src/assets/location.png" alt="Location" class="icon-image-contact">
            </div>
            <div class="location-details">
              <p class="location-title">Asia Pacific HQ</p>
              <p>7th floor Green Lanka Tower, Colombo</p>
              <p>Sri Lanka</p>
            </div>
          </div>

          <div class="office-location">
            <div class="location-icon">
              <img src="/src/assets/location.png" alt="Location" class="icon-image-contact">
            </div>
            <div class="location-details">
              <p class="location-title">Saudi Arabia HQ</p>
              <p>Riyadh, Saudi Arabia</p>
            </div>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <img src="/src/assets/call.png" alt="Phone" class="icon-image-contact">
            </div>
            <p>+971 50 5718867</p>
          </div>

          <div class="contact-item">
            <div class="contact-icon">
              <img src="/src/assets/email.png" alt="Email" class="icon-image-contact">
            </div>
            <p>partnerships@cogentsolutions.ae</p>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <p class="copyright">&copy; 2025 Cogent Solutions Event Management LLC. All Right Reserved</p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/company/cogent-solutions-event-management/mycompany/" target="_blank" class="social-icon">
            <img src="/src/assets/social/linkedin.png" alt="LinkedIn" class="icon-image">
          </a>
          <a href="https://www.facebook.com/cseventsuae/" target="_blank" class="social-icon">
            <img src="/src/assets/social/facebook.png" alt="Facebook" class="icon-image">
          </a>
          <a href="https://www.instagram.com/cs_event_management/" target="_blank" class="social-icon">
            <img src="/src/assets/social/insta.png" alt="Instagram" class="icon-image">
          </a>
          <a href="https://x.com/cseventsdxb" target="_blank" class="social-icon">
            <img src="/src/assets/social/twitter.png" alt="Twitter" class="icon-image">
          </a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
  .footer {
    background-color: #000;
    color: white;
    padding: 60px 0 20px;
  }

  .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
  }

  .footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 40px;
  }

  .footer-info {
    width: 45%;
    padding-right: 30px;
  }

  .footer-contact {
    width: 45%;
  }

  .footer-title {
    font-size: 1.8rem;
    margin-bottom: 20px;
    font-weight: 600;
  }

  .footer-description {
    margin-bottom: 40px;
    line-height: 1.6;
  }

  .awards-section {
    margin-top: 20px;
  }

  .award-badges {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px;
    padding: 15px 0;
  }

  .award-image {
    height: auto;
    max-height: 90px;
    width: auto;
    max-width: 100%;
    object-fit: contain;
    border-radius: 4px;
  }

  .office-location {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
  }

  .location-icon, .contact-icon {
    margin-right: 15px;
    min-width: 24px;
    display: flex;
    align-items: center;
  }

  .icon-image-contact {
    width: 20px;
    height: 20px;
    object-fit: contain;
    filter: brightness(0) invert(1);
  }

  .location-title {
    font-weight: 500;
    margin-bottom: 5px;
    margin-top: 0;
  }

  .location-details p {
    margin: 3px 0;
    color: #ccc;
    line-height: 1.4;
  }
  
  .location-details {
    padding-top: 3px;
  }

  .contact-item {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .footer-bottom {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }

  .social-icons {
    display: flex;
    gap: 15px;
  }

  .social-icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background-color: #ffff;
    border-radius: 50%;
  }

  .social-icon:hover {
    background-color: #333;
  }

  .icon-image {
    width: 18px;
    height: 18px;
    filter: invert(100%);
  }

  @media (max-width: 768px) {
    .footer-info,
    .footer-contact {
      width: 100%;
      padding-right: 0;
      margin-bottom: 30px;
    }
    
    .award-badges {
      justify-content: center;
      flex-wrap: wrap;
    }
    
    .award-image {
      max-height: 70px;
    }
    
    .footer-bottom {
      flex-direction: column;
      text-align: center;
    }
    
    .copyright {
      margin-bottom: 20px;
    }
    
    .social-icons {
      justify-content: center;
    }
  }
</style>