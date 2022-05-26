<template>
 
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
<button class="button button-wrapper">Buy Now</button>
</div>


                   
                </div>
      
            
        </form>

        

</div>

</div>
</template>
