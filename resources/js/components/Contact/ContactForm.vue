<template>
    <div class="contact-form">
<form @submit.prevent="sendContact">

  <div class="message"  v-if="flash">
  {{ flashMessage }}
  </div>
           
               
               <div class="form-wrapper">

                    <div class="errors">
                         <ul>
                        <li v-if="errorName">{{  errorName }} </li>
                        <li v-if="errorEmail">{{  errorEmail }}</li>
                        <li v-if="errorMessage">{{  errorMessage }}</li>
                         </ul>
                    </div>
                       
                    <div class="form-inner">

                        <div class="input-wrapper">
                            <label for="name"> Full Name</label>
                            
                            <input type="text" id="name" placeholder="Full name" class="input-text" v-model="form.name">
                            
                        </div>
  <div class="email-input"></div>
                        <div class="input-wrapper">
                          
                            <label for="email"> Email</label>
                           
                            <input type="text" id="email" placeholder="hello@domain.com"  v-model="form.email">
                        </div>
                    </div>

                    <div class="input-wrapper">
                        <label for="message"> Message </label>
                        
                        <textarea name="message" id="message" class="text-area" placeholder="Tell us what we can help with!" v-model="form.message"> </textarea>
                    </div>
                        
    <div class="submit-contact">
        <button  class="button">Send Message</button>
    </div>
                    

                   
                </div>

            
        </form>
</div>
</template>


<script>
import axios from 'axios'

export default {
    name: 'Contact',

//state
    data(){
        return {
          form:{
            name:'',
            email: '',
            message:''
          },
          flash: false,
          flashMessage: '',
          errorName: '',
          errorEmail: '',
          errorMessage:''

        }
    },

//actions
    methods: {
       
        sendContact() {
          axios.post('/api/send-email', {
            'name': this.form.name,
            'email': this.form.email,
            'message': this.form.message
          }).then(res=> {
            
            this.clearForm();
            this.flash=true;
            this.flashMessage=res.data;
            setTimeout( () =>{this.flash = false},3000)

          
            
          }).catch(e=> {
           if(e.response.status==422){
            this.errorName = e.response.data.errors['name'] ? e.response.data.errors['name'][0]:'';
              this.errorEmail = e.response.data.errors['email'] ? e.response.data.errors['email'][0]:'';
                this.errorMessage = e.response.data.errors['message'] ? e.response.data.errors['message'][0]:'';
            this.flash=true;
            this.flashMessage='Please check all the fields'
            setTimeout( () =>{this.flash = false},3000)
           }

           if(e.response.status==500){
            
            console.log(e);
            
           }
            
          })
        },
        clearForm(){
          this.form.name='';
           this.form.email='';
            this.form.message='';
        }
    }
}

</script>

<style>
.errors {
    color: red;
}
.message {
    
    font-weight: 500;
    font-size: 30px;
}
.submit-contact>button {
  
    width:auto;
    padding: 10px;
}

</style>