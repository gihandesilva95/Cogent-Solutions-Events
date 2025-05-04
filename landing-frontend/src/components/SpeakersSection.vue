<template>
  <section id="speakers" class="speakers section">
    <div class="container">
      <h2 class="section-title">Our Speakers</h2>
      <div class="speakers-grid">
        <div 
          class="speaker-card" 
          v-for="(speaker, index) in speakers" 
          :key="index"
          @click="openSpeakerModal(speaker)"
        >
          <div class="speaker-image">
            <img :src="speaker.image" :alt="speaker.name" />
          </div>
          <div class="speaker-info">
            <h3>{{ speaker.name }}</h3>
            <p class="speaker-title">{{ speaker.title }}</p>
            <p class="speaker-company">{{ speaker.company}}</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Speaker Modal -->
    <div class="speaker-modal" v-if="selectedSpeaker" @click.self="closeSpeakerModal">
      <div class="modal-content">
        <button class="close-button" @click="closeSpeakerModal">&times;</button>
        <div class="modal-header">
          <h2>Speaker</h2>
        </div>
        <div class="modal-body">
          <div class="modal-speaker-details">
            <div class="modal-speaker-image">
              <img :src="selectedSpeaker.image" :alt="selectedSpeaker.name" />
            </div>
            <div class="modal-speaker-info">
              <h3>{{ selectedSpeaker.name }}</h3>
              <p class="modal-speaker-title">{{ selectedSpeaker.title }}</p>
              <p class="modal-speaker-company">{{ selectedSpeaker.company}}</p>
              <div class="modal-speaker-bio" v-if="selectedSpeaker.Bio">
                <h4>Bio:</h4>
                <p>{{ selectedSpeaker.Bio }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SpeakersSection',
  data() {
    return {
      selectedSpeaker: null,
      speakers: [
        {
          name: 'Mr. Mohamed Elazzazy',
          title: 'Head of IT Governance and Change Management',
          company: 'Al-Baraka Bank Egypt',
          image: '/src/assets/speakers/speaker0.png',
          Bio: ''
        },
        {
          name: 'Mr. Shehab Moustafa',
          title: 'Country Center of Excellence Director',
          company: 'Money Fellows',
          image: '/src/assets/speakers/speaker1.jpg',
          Bio: ''
        },
        {
          name: 'Mr. Marwan Abouzeid',
          title: 'Principal Solutions Consultant & Customer Value Lead, MEA & APAC',
          company: 'Finastra',
          image: '/src/assets/speakers/speaker2.jpg',
          Bio: 'Marwan Abouzeid is a seasoned professional with over 22 years of experience in the Fintech industry. Currently serving as the Principal Solutions Consultant & Customer Value Lead for MEA and APAC at Finastra, Marwan is known for his strategic consulting, customer relationship management, and business development expertise.'
        },
        {
          name: 'Mr. Karim El Mourabet',
          title: 'Solution Consulting Director - MEA',
          company: 'Finastra',
          image: '/src/assets/speakers/speaker3.jpg',
          Bio: 'Karim El Mourabet leads the Retail Banking Solution Consulting team at Finastra, covering Middle East & Africa. He has over 12 years’ experience in retail banking software implementation and consulting and working with Digital Banks. He previously led the Innovation services for Finastra Global Services team and worked on Next Gen implementation services, including core banking migrations.'
        },
        {
          name: 'Ms. Siobhan Byron',
          title: 'Executive Vice President, Universal Banking',
          company: 'Finastra',
          image: '/src/assets/speakers/speaker4.jpg',
          Bio: ' Siobhan oversees Universal Banking, including market leading core banking and digital solutions globally. She has more than 25 years of experience in IT and channel management, as well as leading and growing prominent technology companies across financial services, insurance, manufacturing, and public sectors. Siobhan is a strong advocate for diversity and inclusion.'
        },
        {
          name: 'Mr. Narendra Mistry',
          title: 'Chief Product and Technology Officer Universal Banking',
          company: 'Finastra',
          image: '/src/assets/speakers/speaker5.jpg',
          Bio: 'Narendra leads the global product and technology organization for Universal Banking as the Chief Product and Technology Officer (CPTO). Narendra has been in the financial software industry for more than 25 years and his career with Finastra spans more than 13 years in various leadership roles, including running product for International Retail.'
        },
        {
          name: 'Mr. Ahmed Hamdy Bahey El Din',
          title: 'Head of Information Technology',
          company: 'Incolease',
          image: '/src/assets/speakers/speaker6.jpg',
          Bio: 'Ahmed Hamdy is a results-driven IT professional with extensive experience leading IT departments and delivering innovative solutions. As the IT Head at Incolease, he manages all IT operations, ensuring strategic alignment, process optimization, and efficient resource management.'
        },
        {
          name: 'Mr. Emad Shawky Habib Hanna',
          title: 'Chief Data and Analytics Officer',
          company: 'Banque Misr',
          image: '/src/assets/speakers/speaker7.png',
          Bio: ''
        },
        {
          name: 'Ms. Heba Yehia',
          title: 'Head of Digital Products',
          company: 'Arab African International Bank',
          image: '/src/assets/speakers/speaker8.jpg',
          Bio: ''
        },
        {
          name: 'Mr. Hamid Nirouzad',
          title: 'Managing Director - Africa',
          company: 'Finastra Universal',
          image: '/src/assets/speakers/speaker9.jpg',
          Bio: ' Hamid Nirouzad is a seasoned professional in the fintech industry. He began his career at National Westminster Bank in the UK before joining Midas-Kapiti in 1994. Throughout his tenure at Finastra, Hamid has played a pivotal role in various business aspects across Europe and the MEA regions. With a robust background in both retail and corporate banking, he possesses a comprehensive understanding of the banking sector.'
        },
        {
          name: 'Mr. Rudy Kawmi',
          title: 'Managing Director - Middle East, Africa & Asia-Pacific',
          company: 'Finastra Universal Banking',
          image: '/src/assets/speakers/speaker10.jpg',
          Bio: 'Rudy Kawmi oversees the Retail Banking business across the Middle East, Africa, and Asia-Pacific regions at Finastra. With a career dedicated to financial technology, Rudy has collaborated with banks on numerous digital transformation initiatives. As a proponent of innovative business models that promote financial inclusion, he is passionate about establishing fintech partnerships across these regions to drive innovation and expand access to next-generation banking systems.'
        },
        {
          name: 'Mr. Matthew Hughes',
          title: 'Head of FS&I, International Markets',
          company: 'Atos',
          image: '/src/assets/speakers/speaker11.jpg',
          Bio: 'Matthew Hughes is a seasoned professional with over 25 years of experience in the financial services and insurance sectors. Matthew worked for 17 years at Royal Bank of Scotland in various leadership roles, including Country Head of Operations in China, Head of Retail and Commercial Banking in China, Head of Core Banking Operations for England and Wales, and Head of Consumer Finance for Spain and Portugal.'
        },
        {
          name: 'Mr. Daragh O-Byrne',
          title: 'Senior Director, Marketing, Universal Banking',
          company: 'Finastra',
          image: '/src/assets/speakers/speaker12.jpg',
          Bio: 'Daragh leads the Finastra Universal Banking marketing team. For more than 25 years he has worked in the Financial Services application software market, focusing on ensuring that software provides tangible business benefits for customers, and that those business benefits are explained in a clear, concise and compelling way via an integrated set of creative marketing activities that generate results.'
        },
        {
          name: 'Dr. Ismail Ali',
          title: 'Co-Founder and CEO',
          company: 'CARITech',
          image: '/src/assets/speakers/speaker13.jpg',
          Bio: 'Dr. Ismail Ali is the Co-Founder and CEO of CARITech, a digital banking solutions provider supporting financial institutions across the Middle East and Africa. With over 25 years of experience in financial technology, Dr. Ali has led core banking modernization programs for both Islamic and conventional banks—helping them overcome legacy challenges and respond to dynamic market demands.'
        },
        {
          name: 'Ms. Riham Muhammad',
          title: 'Corporate CEX Senior Analyst',
          company: 'FABMISR',
          image: '/src/assets/speakers/speaker14.png',
          Bio: ''
        },
      ]
    };
  },
  methods: {
    openSpeakerModal(speaker) {
      this.selectedSpeaker = speaker;
      document.body.classList.add('modal-open');
    },
    closeSpeakerModal() {
      this.selectedSpeaker = null;
      document.body.classList.remove('modal-open');
    }
  }
};
</script>

<style scoped>
  .speakers {
    background: linear-gradient(135deg, #080808 0%, #433b50 100%);
    padding: 60px 20px;
    color: #fff;
    text-align: center;
  }

  .speakers-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
  }

  .speaker-card {
    background-color: #2b2a2a;
    border-radius: 12px;
    overflow: hidden;
    width: 100%;
    max-width: 260px;
    text-align: center;
    padding: 20px;
    transition: transform 0.3s;
    cursor: pointer;
  }

  .speaker-card:hover {
    transform: translateY(-5px);
  }

  .speaker-image img {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 50%;
    margin-bottom: 15px;
  }

  .speaker-info h3 {
    margin: 10px 0 5px;
    font-size: 18px;
    font-weight: bold;
  }

  .speaker-title .speaker-company{
    font-size: 14px;
    color: #ccc;
    margin-bottom: 4px;
  }

  .speaker-org {
    font-size: 13px;
    color: #999;
  }

  .speaker-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
  }

  .modal-content {
    background-color: #fff;
    width: 90%;
    max-width: 800px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    position: relative;
    color: #333;
  }

  .modal-header {
    padding: 15px 20px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .modal-header h2 {
    margin: 0;
    font-size: 1.5rem;
    color: #333;
  }

  .close-button {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    border: none;
    background: transparent;
    cursor: pointer;
    color: #777;
    z-index: 10;
  }

  .close-button:hover {
    color: #000;
  }

  .modal-body {
    padding: 20px;
  }

  .modal-speaker-details {
    display: flex;
    gap: 30px;
  }

  .modal-speaker-image {
    flex: 0 0 250px;
  }

  .modal-speaker-image img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
  }

  .modal-speaker-info {
    flex: 1;
    text-align: left;
  }

  .modal-speaker-info h3 {
    margin-top: 0;
    margin-bottom: 10px;
    color: #333;
    font-size: 24px;
  }

  .modal-speaker-title {
    color: #666;
    font-size: 18px;
    margin-bottom: 5px;
  }

  .modal-speaker-company {
    color: #888;
    font-size: 16px;
    margin-bottom: 20px;
  }

  .modal-speaker-bio {
    margin-top: 20px;
  }

  .modal-speaker-bio h4 {
    margin-bottom: 10px;
    color: #444;
  }

  .modal-speaker-bio p {
    line-height: 1.6;
    color: #555;
  }

  @media (max-width: 768px) {
    .modal-speaker-details {
      flex-direction: column;
    }
    
    .modal-speaker-image {
      flex: 0 0 auto;
      max-width: 200px;
      margin: 0 auto 20px;
    }
  }

  :global(body.modal-open) {
    overflow: hidden;
  }
</style>