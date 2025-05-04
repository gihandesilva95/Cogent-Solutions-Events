<template>
  <section id="register" class="register section">
    <div class="container">
      <div class="register-content">
        <h2 class="section-title">Register Now</h2>
        <p class="section-subtitle">Join us for an unforgettable experience!</p>
      </div>
      <div class="register-form-container">
        <form @submit.prevent="submitRegistration" class="registration-form">
          <div class="form-group">
            <input 
              type="text" 
              id="fullName" 
              v-model="registrationForm.fullName" 
              placeholder="Full Name"
              required
            />
          </div>
          <div class="form-group">
            <input 
              type="email" 
              id="email" 
              v-model="registrationForm.email" 
              placeholder="Email Address"
              required
            />
          </div>
          <div class="form-group">
            <textarea 
              id="message" 
              v-model="registrationForm.message" 
              placeholder="Message"
              required
            ></textarea>
          </div>
          <div class="form-submit">
            <button type="submit" class="btn-register">Register</button>
          </div>
        </form>
        <div v-if="formSubmitted" class="submission-message">
          <h3>Thank you for registering!</h3>
          <p>We have received your registration and will be in touch shortly with further details.</p>
        </div>
        <div v-if="formError" class="submission-message">
          <h3>Registration Failed</h3>
          <p>{{ formError }}</p>
        </div>
      </div>
    </div>
  </section>
</template>
  
<script>
  import axios from 'axios';

  export default {
    name: 'RegisterSection',
    data() {
      return {
        registrationForm: {
          fullName: '',
          email: '',
          message: ''
        },
        formSubmitted: false,
        formError: ''
      };
    },
    methods: {
      async submitRegistration() {
        try {
          const response = await axios.post('http://127.0.0.1:8000/api/register', this.registrationForm, {
            headers: {
              'Content-Type': 'application/json'
            }
          });
          console.log('Form submitted:', response.data);
          this.formSubmitted = true;
          this.formError = '';
          this.resetForm();

          setTimeout(() => {
            this.formSubmitted = false;
          }, 5000);

        } catch (error) {
          console.error('Error submitting the form:', error.response ? error.response.data : error.message);
          this.formError = error.response ? 'Something went wrong. Please try again.': '';

          this.formSubmitted = false;

          setTimeout(() => {
            this.formError = '';
          }, 5000);
          
        }
      },

      resetForm() {
        this.registrationForm = {
          fullName: '',
          email: '',
          message: ''
        };
      }
    } 
  };
</script>
  
<style scoped>
  .register.section {
    padding: 80px 0;
    background: linear-gradient(135deg, #9146ff 0%, #6f42c1 100%);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
  }
  
  .container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
  }
  
  .register-content {
    flex: 1;
    padding-right: 30px;
    max-width: 400px;
  }
  
  .section-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
  }
  
  .section-subtitle {
    font-size: 1.1rem;
    margin-bottom: 25px;
    color: rgba(255, 255, 255, 0.8);
  }
  
  .register-form-container {
    flex: 1;
    max-width: 500px;
    background-color: rgba(0, 0, 0, 0.6);
    padding: 30px;
    border-radius: 8px;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group textarea{
    width: 100%;
    padding: 12px 15px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 4px;
    background-color: rgba(0, 0, 0, 0.2);
    color: white;
    font-size: 0.95rem;
  }

  .form-group textarea {
    min-height: 100px;
    resize: vertical;
  }

  .form-group input::placeholder,
  .form-group textarea::placeholder {
    color: rgba(255, 255, 255, 0.6);
    font-family: inherit;
  }
  
  .privacy-link {
    color: #ff4081;
    text-decoration: underline;
  }
  
  .form-submit {
    margin-top: 20px;
  }
  
  .btn-register {
    width: 100%;
    background-color: #d81b60;
    color: white;
    border: none;
    padding: 12px 0;
    font-size: 1.1rem;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-weight: 600;
  }
  
  .btn-register:hover {
    background-color: #eb3535;
  }
  
  .submission-message {
    text-align: center;
    padding: 20px 0;
  }
  
  .submission-message h3 {
    color: white;
    margin-bottom: 10px;
  }
  
  .submission-message p {
    color: rgba(255, 255, 255, 0.8);
  }
  
  @media (max-width: 992px) {
    .container {
      flex-direction: column;
    }
    
    .register-content {
      max-width: 100%;
      padding-right: 0;
      text-align: center;
      margin-bottom: 30px;
    }
    
    .register-form-container {
      max-width: 600px;
      width: 100%;
    }
  }
  
  @media (max-width: 576px) {
    .register-form-container {
      padding: 20px 15px;
    }
    
    .section-title {
      font-size: 2rem;
    }
  }
</style>
