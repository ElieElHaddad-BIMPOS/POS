<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import NavLink from '@/Components/NavLink.vue';

</script>
<style>
.nav-tabs {
  
  --bs-nav-tabs-border-width: var(--bs-border-width);
  --bs-nav-tabs-border-color: #181b1e;
  --bs-nav-tabs-border-radius: var(--bs-border-radius);
  --bs-nav-tabs-link-hover-border-color:  rgba(246, 147, 35);
  --bs-nav-tabs-link-active-color: var(--bs-emphasis-color);
  --bs-nav-tabs-link-active-bg: #181b1e;
  --bs-nav-tabs-link-active-border-color: var(--bs-border-color) rgba(246, 147, 35) var(--bs-body-bg);
  border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
  color: white;
  background-color: var(--bs-nav-tabs-link-active-bg);
  border-color: rgba(246, 147, 35);
}
.nav-link {
  color:white

}
.nav-item {
  margin-top: 13px;
  
}
.nav-tabs {
  height: 66px;
  position: fixed;
  background-color: #212529;
  width:100%;
  margin-top:-5px
  
}
.products-container {
  margin-top: 50px;
  text-align: center;
  /* box-shadow: 0px 0px 5px 2px rgba(218, 218, 218, 0.4); */
}
.product-container {
  display: flex;
  flex-flow: row wrap;
  text-align: center;
}
.product-box {
  box-shadow: 0px 0px 5px 2px rgba(53, 59, 65, 0.4);
  background-color: #181b1e;
  width:155px;
  height:200px;
  border-radius: 5%;
  margin-right: 15px ;
  margin-top: 15px ;

  display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}
.product-item {
  color: white;
}
.product-item-price {
  color:white;
}
.product-item-image {
    margin-top: -10px; /* Adjust this value to your desired position */
    border: 2px solid white;
    border-radius: 50%;
}
.circular-image-container {
    width: 100px; /* Set the width and height as needed */
    height: 100px;
    overflow: hidden;
    border-radius: 50%;
}

.circular-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image fills the circular container */
}

</style>
<template>
    <AppLayout title="Dashboard">

        
        <div class="py-12">
            
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <div class="bg-dark overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="container">
                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#salads">Salads</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#pizza">Pizza</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#burgers">Burgers</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>

                  </div>
                  <div class="products-container">
                    <div id="salads" >
                        <!-- Content for Salads section -->
                        <div class="container">
                          <div class="row">
                            <div class="product-container">
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/salmon.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Spicy Salmon Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/shrimp.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Spicy Shrimp Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/salad1.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                    Caesar Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/steak.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Steak Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/chef.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Chef Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/chicken.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                    Chicken Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/crab.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Crab Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/tuna.jpeg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Tuna Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/tunapasta.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Tuna Pasta Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/truffle.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                    Truffle Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/chickenavocado.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Chicken Avocado Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/eel.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Eel Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/rawfish.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Raw Fish Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/kokoda.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                    kokoda Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/green.jpg" class="circular-image">
                                      </div>
                                  </div>

                                  <div class="product-item">
                                      Green Salad
                                  </div>
                                  <div class="product-item-price">
                                      $12.00
                                  </div>
                              </button>
                              
                            </div>
                          </div>
                        </div>
                    </div>

                    <div id="pizza">
                      <div class="container">
                          <div class="row">
                            <div class="product-container">
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/peperoni.jpeg" class="circular-image">
                                      </div>
                                  </div>
                                  <div class="product-item">
                                      Peperoni Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $22.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/margherita.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Margherita Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $22.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/fries.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Fries Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $16.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/bbqchicken.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    BBQ Chicken Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $26.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/napolitana.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Napolitana Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $21.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/vegetarian.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Vegetarian Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $18.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/hawaiian.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Hawaiian Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $17.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/steakpizza.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Steak Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $32.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/seafood.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Sea Food Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $42.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/meat.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Meat Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $36.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/trufflepiza.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Truffle Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $21.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/swiss.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Swiss Cheese Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $24.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/pastapizza.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Pasta Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $25.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/chicago.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Chicago Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $36.00
                                  </div>
                              </button>
                              
                            </div>
                          </div>
                        </div>
                    </div>

                    <div id="burgers">
                      <div class="container">
                          <div class="row">
                            <div class="product-container">
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/steakb.jpeg" class="circular-image">
                                      </div>
                                  </div>
                                  <div class="product-item">
                                      Steak Burger
                                  </div>
                                  <div class="product-item-price">
                                      $24.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/chickenb.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Cicken Burger Pizza
                                  </div>
                                  <div class="product-item-price">
                                      $21.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/doublecheeseb.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Double Cheese Burger
                                  </div>
                                  <div class="product-item-price">
                                      $23.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/hamb.png" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Ham Burger
                                  </div>
                                  <div class="product-item-price">
                                      $26.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/swissmushroomb.jpeg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Swiss Burger
                                  </div>
                                  <div class="product-item-price">
                                      $24.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/pizzaburger.png" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Pizza Burger
                                  </div>
                                  <div class="product-item-price">
                                      $28.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/ribb.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Ribs Burger
                                  </div>
                                  <div class="product-item-price">
                                      $31.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/asianb.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Asian Rib Burger
                                  </div>
                                  <div class="product-item-price">
                                      $32.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/porkchopsb.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Pork Chops Burger
                                  </div>
                                  <div class="product-item-price">
                                      $42.00
                                  </div>
                              </button>
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/buffalob.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Buffalo Burger
                                  </div>
                                  <div class="product-item-price">
                                      $36.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/bbqchickenb.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    BBQ Chicken Burger
                                  </div>
                                  <div class="product-item-price">
                                      $21.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/tripleb.jpg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Tripple Burger
                                  </div>
                                  <div class="product-item-price">
                                      $38.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/zingerb.jpeg" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Zinger Burger
                                  </div>
                                  <div class="product-item-price">
                                      $25.00
                                  </div>
                              </button>
                              
                              <button class="btn product-box">
                                  <div class="product-item-image">
                                      <div class="circular-image-container">
                                          <img src="/img/friedb.png" class="circular-image">
                                      </div>
                                  </div>
                                  
                                  <div class="product-item">
                                    Fried Burger
                                  </div>
                                  <div class="product-item-price">
                                      $20.00
                                  </div>
                              </button>
                              
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </AppLayout>
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