<template>
  <section class="main">
    <div class="container">
      <div class="main-content">
        <p class="organized-by">Organized By</p>
        <h2 class="organizer">FINASTRA</h2>
        <h1>Reimagine Banking:<br>Adapt. Evolve. Thrive.</h1>
        <p class="event-date">Date: 9th April 2025</p>
        <p class="event-time">Time: 9:00 AM - 2:00 PM GMT+2</p>
        <p class="event-location">The Nile Ritz-Carlton, Cairo, Egypt</p>
        <div class="event-image">
          <img src="/src/assets/overview-image.jpg" alt="Office life" />
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
  .main {
    background: linear-gradient(rgba(0, 0, 0, 0.95), rgba(72, 28, 115, 0.85));
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 60px 20px 0px;
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
  
  .container {
    width: 100%;
    padding: 100px 0px 0px 0px;
  }
  
  .main-content {
    max-width: 800px;
    margin: 0 auto;
  }
  
  .organized-by {
    font-size: 1.2rem;
    margin-bottom: 5px;
    opacity: 0.8;
  }
  
  .organizer {
    font-size: 3.5rem;
    font-weight: 700;
    color: #e94cda;
    margin-bottom: 15px;
    margin-top: 0;
  }
  
  .main h1 {
    font-size: 3.5rem;
    line-height: 1.2;
    margin-bottom: 30px;
    font-weight: 700;
  }
  
  .event-date, .event-time, .event-location {
    font-size: 1.2rem;
    margin-bottom: 8px;
    opacity: 0.9;
  }
  
  .event-image {
    margin-top: 40px;
    border-radius: 8px;
    overflow: hidden;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
  }
  
  .event-image img {
    width: 100%;
    height: auto;
  }
  
  @media (max-width: 768px) {
    .main h1 {
      font-size: 2rem;
    }
    
    .organizer {
      font-size: 2rem;
    }
  }
</style>