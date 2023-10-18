<script setup>
import BackOfficeLayout from '@/Layouts/BackOfficeLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import NavLink from '@/Components/NavLink.vue';

</script>
<style>
.product-table {
    max-width: 800px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
<template>
    <BackOfficeLayout title="Products">

        
        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-dark overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="product-table">
                    <div class="container">
                      <table class="table table-striped table-hover table-responsive">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
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