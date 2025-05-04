<template>
  <section id="agenda" class="agenda section bg-light">
    <div class="container">
      <h2 class="section-title">Agenda</h2>
      <div class="timeline">
        <div class="timeline-item" v-for="(item, index) in agendaItems" :key="index">
          <div class="time">{{ item.time }}</div>
          <div class="content">
            <h3>{{ item.title }}</h3>
            <p v-if="item.speaker">{{ item.speaker }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
  
<script>
  export default {
    name: 'AgendaSection',
    data() {
      return {
        agendaItems: [
          {
            time: '9:30 AM',
            title: 'Registration & Welcome Coffee',
            speaker: ''
          },
          {
            time: '10:00 AM',
            title: 'Opening Remarks',
            speaker: 'Rudy Kawmi, Managing Director - Middle East, Africa & Asia-Pacific, Finastra Universal Banking'
          },
          {
            time: '10:10 AM',
            title: 'Keynote session: Digital Transformation in a Gen AI World',
            speaker: 'Ms. Siobhan Byron, Executive Vice President, Finastra Universal Banking'
          },
          {
            time: '10:30 AM',
            title: 'Decoding the Future - Transformation: The Opportunity & Time is Now',
            speaker: 'Mr. Daragh O\'Byrne, Senior Director, Marketing, Universal Banking, Finastra'
          },
          {
            time: '11:00 AM',
            title: 'Panel Discussion: Customer Acquisition - Gaining New Customers in a Hyper Competitive World',
            speaker: 'Hamid Nirouzad, Managing Director - Africa, Finastra Universal Banking; Ahmad Hamdy, Head of Information Technology, International Company for Leasing S.A.E. "Incolease"; Ms. Riham Ismail Kassem Muhammad, Corporate & Supporting Functions CEX Senior, FABMISR'
          },
          {
            time: '11:30 AM',
            title: 'Panel Discussion: Customer Retention - Keeping Customers When Loyalty Is Dead',
            speaker: 'Karim El Mourabet, Solution Consulting Director - Middle East & Africa, Finastra Universal Banking; Heba Yehia, Head of Digital Products, Arab African International Bank; Ismail Ali, Co-Founder and CEO of CARITech; Mohamed Elazzazy, Head of IT Governance and Change Management, Al-Baraka Bank Egypt'
          },
          {
            time: '12:00 PM',
            title: 'Coffee Break & Networking',
            speaker: ''
          },
          {
            time: '12:30 PM',
            title: 'Panel Discussion: Cost to Serve: Deliver Customer Delight',
            speaker: 'Narendra Mistry, Chief Product and Technology Officer, Finastra Universal Banking; Shehab Moustafa, Country Center of Excellence Director, Money Fellows; Matthew Hughes, Head of FS&I, International Markets, Atos; Emad Shawky Habib Hanna, Chief Data and Analytics Officer, Banque Misr'
          },
          {
            time: '01:00 PM',
            title: 'The Essential Elements: What do you need to be "all things to all people"?',
            speaker: 'Narendra Mistry, Chief Product and Technology Officer, Finastra Universal Banking'
          },
          {
            time: '01:30 PM',
            title: 'Making the case for change: The Question is How',
            speaker: 'Marwan Abouzeid, Principal Solutions Consultant & Customer Value Lead, MEA & APAC, Finastra Universal Banking'
          },
          {
            time: '01:50 PM',
            title: 'Closing Remarks',
            speaker: 'Rudy Kawmi, Managing Director - Middle East, Africa & Asia-Pacific, Finastra Universal Banking'
          },
          {
            time: '02:00 PM',
            title: 'Lunch',
            speaker: ''
          }
        ]
      };
    }
  }
</script>
  
<style scoped>

  .section-title{
    color: #000000;
  }
  .timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
  }
  
  .timeline::before {
    content: '';
    position: absolute;
    width: 4px;
    background-color: var(--primary-color);
    top: 0;
    bottom: 0;
    left: 120px;
    margin-left: -2px;
  }
  
  .timeline-item {
    display: flex;
    margin-bottom: 30px;
    position: relative;
  }
  
  .time {
    width: 120px;
    padding-right: 20px;
    text-align: right;
    font-weight: bold;
    color: var(--primary-color);
  }
  
  .content {
    flex: 1;
    padding-left: 30px;
    position: relative;
  }
  
  .content::before {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    left: -11px;
    background-color: white;
    border: 4px solid var(--primary-color);
    border-radius: 50%;
    z-index: 1;
  }
  
  .content h3 {
    margin-bottom: 5px;
    color: var(--secondary-color);
  }
  
  @media (max-width: 768px) {
    .timeline::before {
      display: none;
    }
    
    .timeline-item {
      flex-direction: column;
    }
    
    .time {
      width: 100%;
      text-align: left;
      margin-bottom: 5px;
    }
    
    .content {
      padding-left: 0;
    }
    
    .content::before {
      display: none;
    }
  }
</style>