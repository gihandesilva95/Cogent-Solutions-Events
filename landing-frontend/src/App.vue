<template>
  <div id="app">
    <Header />
    <MainSection />
    <EventSection />
    <SpeakersSection :speakers="speakers" />
    <AgendaSection />
    <AboutSection />
    <RegisterSection />
    <Footer />
  </div>
</template>

<script>
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
import MainSection from './components/MainSection.vue';
import EventSection from './components/EventSection.vue';
import SpeakersSection from './components/SpeakersSection.vue';
import AgendaSection from './components/AgendaSection.vue';
import AboutSection from './components/AboutSection.vue';
import RegisterSection from './components/RegisterSection.vue';

export default {
  name: 'App',
  components: {
    Header,
    Footer,
    MainSection,
    EventSection,
    AgendaSection,
    SpeakersSection,
    AboutSection,
    RegisterSection
  }
};
</script>

<style>
/* Global Styles */
:root {
  --primary-color: #0056b3;
  --secondary-color: #004494;
  --accent-color: #ff9800;
  --light-color: #f8f9fa;
  --dark-color: #343a40;
  --text-color: #333;
  --light-text: #6c757d;
  --border-color: #dee2e6;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.6;
  color: var(--text-color);
}

.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

.section {
  padding: 80px 0;
}

.bg-light {
  background-color: var(--light-color);
}

.section-title {
  text-align: center;
  margin-bottom: 40px;
  color: #ffffff;
  font-size: 2.5rem;
  position: relative;
}

.section-title::after {
  content: '';
  display: block;
  width: 60px;
  height: 4px;
  background-color: var(--accent-color);
  margin: 15px auto 0;
}

.btn-primary {
  display: inline-block;
  background-color: var(--accent-color);
  color: white;
  text-decoration: none;
  padding: 12px 30px;
  font-size: 1.1rem;
  border-radius: 4px;
  margin-top: 30px;
  transition: background-color 0.3s;
  border: none;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: #e68a00;
}

/* Responsive Styles */
@media (max-width: 992px) {
  .highlight-item {
    width: 48%;
    margin-bottom: 20px;
  }
}

@media (max-width: 768px) {
  .section {
    padding: 60px 0;
  }
}
</style>