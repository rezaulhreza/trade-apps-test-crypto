<template>

<div class="home">


<div class="header">
<nav>
<div class="topnav">
  <a class="active" href="#signin">Sign In</a>
  <a href="#dashboard">Dashboard</a>
  <a href="#app">App</a>
    <a href="#price">Price</a>
  <a href="#home">Home</a>
</div>
</nav>

<div class="hero">
<div class="hero-left">
    <h1>Buy and Sell cryptocurrency</h1>
    <div class="hero-subtitle">
    Fast and secure way to purchase or exchange 150+ cryptocurrencies
</div>
<form  class="subscription-form" @submit.prevent="subscribe">
      
      <input type="email" placeholder="Subscribe now">
      
      <button class="button"><i class="fas fa-arrow-right fa"></i>
                            </button>
</form>
</div>

<div class="hero-right">
 
 <form @submit.prevent="buyCrypto">

                <div class="crypto form-wrapper">
                  <h3>Send</h3>
                    <div class="subscription-form">

                        <div class="crypto-form">
                           
                            <input type="text" placeholder="USD">
                            
                        </div>

                        <div class="crypto-form">
                           
                    
                            <input type="text"  placeholder="0.0214 BTC">
                        </div>
                    </div>
<h3>Receive</h3>
                    <div class="subscription-form">

                        <div class="crypto-form">
                           
                            <input type="text" placeholder="BTC">
                            
                        </div>

                        <div class="crypto-form">
                           
                    
                            <input type="text"  placeholder="0.0214 BTC">
                        </div>
                    </div>
                    <p class="conversion-info">1 USD = 0.000088 BTC <span class="expected-rate">Expected Rate</span> <br> <span class="no-fees">No extra fees</span></p>

 <div class="centered-button">
<button class="button" id="button-wrapper">Buy Now</button>
</div>


                   
                </div>
      
            
        </form>

        

</div>

</div>

</div>


<div class="contact-heading">
   <h4 class="upper-sub">Ask Question</h4>
  <h2>Let us hear from you directly!</h2>
</div>

<div class="contact-section">

 

<div class="address">
  <h3>Address</h3>
  <ul>
    <li><i class="fa-solid fa-location-pin"></i> Dartford, Kent</li>
    <li><i class="fa-solid fa-phone-flip"></i>0203 633 1775</li>
    <li><i class="fa-solid fa-envelope"></i>hello@example.com</li>
  </ul>
</div>

<Contact></Contact>



</div>
</div>


</template>

<script>
import axios from 'axios'
import Contact from './Contact.vue'

export default {
    name: "Home",
    data() {
        return {};
    },
    methods: {},
    components: { Contact }
}

</script>




