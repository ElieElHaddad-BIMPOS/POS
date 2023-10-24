<script setup>
import BackOfficeLayout from '@/Layouts/BackOfficeLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import NavLink from '@/Components/NavLink.vue';

</script>
<style>
.product-table {

  min-width: 800px;
  max-width: 100%;
  padding: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  overflow: auto;
}
.table {
  align-content: center;
  align-self: center;
}
</style>
<template>
    <BackOfficeLayout title="Products">

        
        <div class="py-14 ">
            
            <div class="mx-auto sm:px-12 lg:px-16" >
              <div class="d-flex justify-content-center">
                <div class="product-table">
                  <table class="table table-striped table-hover table-responsive">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>
                      <th scope="col">Handle</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                  </table>
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