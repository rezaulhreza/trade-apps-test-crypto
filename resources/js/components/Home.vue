<template>

<div class="home">


<div class="header">
<Nav></Nav>
<Hero></Hero>
</div>
<ContactSection></ContactSection>

</div>


</template>

<script>
import Nav from './Header/Nav.vue';
import Hero from './Header/Hero.vue';
import ContactSection from './Contact/Index.vue';

export default {
    name: "Home",
    data() {
        return {};
    },
    methods: {},
    components: { Nav, Hero, ContactSection }
}

</script>




