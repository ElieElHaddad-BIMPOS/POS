<script setup>
import BackOfficeLayout from '@/Layouts/BackOfficeLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import NavLink from '@/Components/NavLink.vue';

</script>
<style>

</style>
<template>
    <BackOfficeLayout title="Dashboard">

        
        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-dark overflow-hidden shadow-xl sm:rounded-lg">
                  
                </div>
            </div>
        </div>
    </BackOfficeLayout>
</template>
<script>
export default {
  data() {
    return {
    };
  },
  computed: {

  },
  mounted(){
    
  },
  methods: {
    isActive(route) {
        return window.location.pathname === route;
    },

  },
};
</script>