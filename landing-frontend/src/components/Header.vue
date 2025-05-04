<template>
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="https://cogentsolutions.ae/" target="_blank" rel="noopener">
          <img src="/src/assets/logo.png" alt="Cogent Solutions Logo" />
        </a>
      </div>
      
      <!-- Mobile menu button-->
      <button class="navbar-toggler" type="button" @click="toggleMobileMenu" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Navigation menu-->
      <nav class="nav-menu" :class="{ 'show': mobileMenuOpen }">
        <ul>
          <li><a href="#event" @click="closeMobileMenu">Event Overview</a></li>
          <li><a href="#agenda" @click="closeMobileMenu">Agenda</a></li>
          <li>
            <a href="#register" class="btn-register" @click="closeMobileMenu">Register Now</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  name: 'Header',
  data() {
    return {
      mobileMenuOpen: false
    }
  },
  methods: {
    toggleMobileMenu() {
      this.mobileMenuOpen = !this.mobileMenuOpen;
    },
    closeMobileMenu() {
      this.mobileMenuOpen = false;
    }
  }
}
</script>

<style scoped>
  .header {
    background-color: #111111;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    padding: 15px 0;
  }

  .header .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 15px;
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
  }

  .logo img {
    height: 50px;
  }

  .nav-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
  }

  .nav-menu li {
    margin-left: 30px;
  }

  .nav-menu a {
    text-decoration: none;
    color: #ffffff;
    font-weight: 400;
    transition: color 0.3s;
  }

  .nav-menu a:hover {
    color: #cccccc;
  }

  .btn-register {
    background-color: transparent;
    color: #ffffff;
    padding: 10px 25px;
    border: 1px solid #ffffff;
    border-radius: 25px;
    transition: all 0.3s;
    display: inline-block;
  }

  .btn-register:hover {
    background-color: #ffffff;
    color: #111111 !important;
  }

  .navbar-toggler {
    display: none;
    background-color: transparent;
    border: none;
    padding: 8px;
    cursor: pointer;
  }

  .navbar-toggler-icon {
    display: block;
    width: 30px;
    height: 24px;
    position: relative;
    background: transparent;
  }

  .navbar-toggler-icon:before,
  .navbar-toggler-icon:after,
  .navbar-toggler-icon {
    background-color: #ffffff;
  }

  .navbar-toggler-icon:before,
  .navbar-toggler-icon:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 3px;
    background-color: #ffffff;
    left: 0;
    transition: all 0.3s ease;
  }

  .navbar-toggler-icon:before {
    top: 0;
  }

  .navbar-toggler-icon:after {
    bottom: 0;
  }

  .navbar-toggler-icon {
    height: 3px;
    margin-top: 10px;
  }

  @media (max-width: 768px) {
    .nav-menu {
      position: fixed;
      top: 80px;
      left: 0;
      right: 0;
      background-color: #111111;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease;
      z-index: 999;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }

    .nav-menu.show {
        max-height: 300px;
    }

    .nav-menu ul {
        flex-direction: column;
        padding: 15px 0;
    }

    .nav-menu li {
        margin: 15px 0;
        width: 100%;
        text-align: center;
    }

    .navbar-toggler {
        display: block;
    }
  }
</style>