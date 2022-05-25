<template>
<div>


<ContactHeading></ContactHeading>
<div class="contact-section">
<ContactAddress></ContactAddress>
<ContactForm></ContactForm>
</div>

</div>
</template>

<script>
import ContactHeading from './ContactHeading.vue';
import ContactAddress from './ContactAddress.vue';
import ContactForm from './ContactForm.vue';


export default {
    name: "Home",
    data() {
        return {};
    },
    methods: {},
    components: { ContactHeading, ContactForm, ContactAddress}
}

</script>

