#Trade Apps Junior Role Practical Test

Brief:

```Thanks for taking part in the interview process. This practical test is just here so that we can
get a better understanding of your knowledge.```

##What to do:
- In this test, we would like you to re-create the screenshot of the crypto website (website.png) using the Vue and Laravel Framework. (required)
- In this test, we would like you to re-create the screenshot of the crypto website
(website.png) using the Vue and Laravel Framework. (required)
- Connect the contact form up so that it emails a test email. The email doesn’t need to
have any design in it. (required)
- Please don’t use any CSS frameworks as we would like to see your skills.
- Make the website responsive. (optional)

Trade Apps Ltd

What has been done:
-Custom css, designed from scratch.
-No CSS framework has been used.
-Project is built with VUe JS and Laravel Framework.
-Re-created the design provided in the supplied screenshot.
-Connected the contact form to Laravel controller to submit a contact form.
-Form has validation for all the fields: name, email, message.
-Display error messages (Validation)
-Clear form once submitted successfully.
-Email to chosen address(set in controller)

What could have been improved:
-Form design.
-Responsive Design.

#Directory Structure:

app/
├─ Http/
│  ├─ Controller/
│  │  ├─ ContactController.php
├─ Mail/
│  ├─ ContactEmail.php
├─ Requests/
│  ├─ ContactFormRequest.php
resources/
├─js/
├─ components/
│  ├─ Contact/
│  │  ├─ ContactAddress.vue
│  │  ├─ ContactForm.vue
│  │  ├─ ContactHeading.vue
│  │  ├─ Index.vue
│  ├─ Header/
│  │  ├─ Hero.vue
│  │  ├─ Nav.vue
│  ├─ AppComponent.vue
│  ├─ Home.vue
├─ app.js
├─ routes.js

routes/
├─ api.php
├─ web.php




