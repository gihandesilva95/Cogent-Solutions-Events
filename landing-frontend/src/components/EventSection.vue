<template>
  <section id="event" class="event-overview-section">

    <div class="event-container">
      <div class="event-title">
        <h3>Event<br />Overview</h3>
      </div>
      <div class="event-content">
        <p>
          Join us on April 9th in Cairo, Egypt, for Finastra's Universal Banking Forum,
          "Reimagine Banking: Adapt. Evolve. Thrive." This exclusive event is designed to help
          you navigate and excel in the rapidly evolving banking landscape.
        </p>
        <p>
          Our forum will bring together business and technology experts, industry leaders, and
          visionaries to share their insights on the latest trends and challenges in the banking
          sector. You'll gain valuable knowledge on topics such as Generative AI, the impact of
          volatility, globalization challenges, persistent supply chain issues, recession threats,
          shifts in competitive dynamics, and evolving regulations.
        </p>
        <p>
          Each session will delve into the implications, challenges, and opportunities these topics
          present, providing you with practical strategies to leverage the latest technologies and
          capitalize on emerging opportunities. This is a unique chance to learn from the best in
          the industry, stay ahead of the curve, and connect with fellow retail banking professionals.
        </p>
        <p>
          Don't miss this opportunity to enhance your knowledge, skills, and network in the finance
          and banking sector. Register today and secure your place at this must-attend event!
        </p>
      </div>
    </div>

    <div class="reasons-container">
      <div class="reasons-image">
        <img src="/src/assets/smartwatch-hand.jpg" alt="Business professional checking smartwatch" />
      </div>
      <div class="reasons-content">
        <h2>TOP REASONS WHY THIS IS THE ONLY CONFERENCE YOU NEED TO ATTEND IN 2025</h2>
        
        <div class="reason-item">
          <div class="reason-icon">
            <img src="/src/assets/Icon_5h.png" alt="Learn" class="icon">
          </div>
          <p>Learn from industry experts</p>
        </div>
        
        <div class="reason-item">
          <div class="reason-icon">
            <img src="/src/assets/Icon_4f.png" alt="Trends" class="icon">
          </div>
          <p>Stay ahead of emerging trends</p>
        </div>
        
        <div class="reason-item">
          <div class="reason-icon">
            <img src="/src/assets/Icon_2ff.png" alt="Connect" class="icon">
          </div>
          <p>Connect with fellow banking professionals</p>
        </div>
        
        <div class="reason-item">
          <div class="reason-icon">
            <img src="/src/assets/Icon_8d.png" alt="Enhance" class="icon">
          </div>
          <p>Enhance your knowledge, skills, and network</p>
        </div>
        
        <div class="reason-item">
          <div class="reason-icon">
            <img src="/src/assets/Icon_1f.png" alt="Share" class="icon">
          </div>
          <p>Share your expertise and experience with peers</p>
        </div>
      </div>
    </div>
  </section>
</template>


<style scoped>
  .event-overview-section {
    background-color: #141414;
    color: #fff;
    padding: 60px 20px;
    font-family: Arial, sans-serif;
  }

  .event-container {
    display: flex;
    flex-direction: row;
    max-width: 1200px;
    margin: 0 auto 60px;
    gap: 40px;
  }

  .event-title {
    font-size: 45px;
    line-height: 1.2;
  }

  .event-content {
    flex: 2;
    font-size: 18px;
    line-height: 1.6;
  }

  .event-content p {
    margin-bottom: 20px;
  }

  .reasons-container {
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #5e35b1 0%, #7b4bcc 100%);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    max-width: 1100px;
    margin: 0 auto;
  }

  .reasons-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    border-radius: 20px;
    margin: 20px;
  }

  .reasons-content {
    flex: 0 0 55%;
    padding: 40px;
  }

  .reasons-content h2 {
    margin-bottom: 30px;
    line-height: 1.2;
    letter-spacing: 0.5px;
  }

  .reason-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .reason-icon {
    width: 35px;
    height: 35px;
    margin-right: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .icon {
    width: 24px;
    height: 24px;
    object-fit: contain;
    background-color: #fff;
  }

  .reason-item p {
    font-size: 1.05rem;
    margin: 0;
    font-weight: 400;
  }

  @media (max-width: 992px) {
    .event-container,
    .reasons-container {
      flex-direction: column;
    }

    .reasons-image {
      width: 100%;
      height: 250px;
    }

    .reasons-content {
      width: 100%;
      padding: 30px 20px;
    }
  }

  @media (max-width: 768px) {
    .reasons-content h2 {
      font-size: 1.5rem;
    }

    .reason-item p {
      font-size: 1rem;
    }

    .reasons-content {
      padding: 25px 15px;
    }
  }
</style>
