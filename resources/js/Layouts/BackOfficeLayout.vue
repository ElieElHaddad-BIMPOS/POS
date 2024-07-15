<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>
<style>

.lable {
    text-decoration: none;
    color:white
}
.body-bg {
    background-color: #fafafa;
}
.nav-bg {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: #181b1e;
    z-index: 1000;
}
.active-nav {
    border-bottom: 2px solid rgba(246, 147, 35);
}
body {
    background-color: white;
}
.side-bar[data-position="left"]{
    position: fixed;
    overflow-y: auto; /* Enable vertical scrolling */

    min-height: 100%;
    width: 64px;
    background-color: #181b1e;
}

.side-bar[data-position="left"] .item:hover {
  background-color: rgba(246, 147, 35);
  border-top-left-radius: 10%;
  border-bottom-left-radius: 10%;
  cursor: pointer;
}

.side-bar[data-position="left"] .item {
  color: white;
  height: 64px;
  width: 64px;
  line-height: 40px;
  text-align: center;
  font-size: 20px;
  
}
div.item a {
    text-decoration: none;
    color: white;
    margin-top: 100px;
}

.active {
  background-color: #212529;
  border: 2px solid #212529;
  border-top-left-radius: 10%;
  border-bottom-left-radius: 10%;
}
.inner-item{
    color: #181b1e;
    background-color: rgba(246, 147, 35);
    border: 2px solid rgba(246, 147, 35);
    border-radius: 10%;
    width: 40px;
    height: 35px;
    margin-left: 16%;
    margin-top: 20%;
}
.inner-icon{
    text-align: center;

    
}
.inner-active {
    color: #181b1e;
    background-color: rgba(246, 147, 35);
    border: 2px solid rgba(246, 147, 35);
    border-radius: 10%;
    width: 40px;
    height: 40px;
    text-align: center;
    margin-left:16%;
}
.btn-outline-bimpos {
    --bs-btn-color: rgba(246, 147, 35);
  --bs-btn-border-color: rgba(246, 147, 35);
  --bs-btn-hover-color: #000;
  --bs-btn-hover-bg: rgba(246, 147, 35);
  --bs-btn-hover-border-color: rgba(246, 147, 35);
  --bs-btn-focus-shadow-rgb: 248,249,250;
  --bs-btn-active-color: #000;
  --bs-btn-active-bg: rgba(246, 147, 35);
  --bs-btn-active-border-color: rgba(246, 147, 35);
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: rgba(246, 147, 35);
  --bs-btn-disabled-bg: transparent;
  --bs-btn-disabled-border-color: rgba(246, 147, 35);
  --bs-gradient: none;
}


.main-content {
    padding: 20px; /* Adjust this as needed */
}
@media (max-width: 768px) {
    .container {
        align-items: flex-start; /* Align items to the top on smaller screens */
    }
}

.ms-1{
  color:white;
}

.inside a{
  color:lightblue;
}

  
  .col{
    border: solid;
    width:100%;
    height: 300px;
    background-image: url("https://hw-events.s3.amazonaws.com/636294cf5cb43c71cf9ed524/cat.jpg");
    background-repeat: no-repeat;
    background-size:cover;
}

.nav-container{
    border-right: 2px solid #f77d10;
}
.the-dashboard {
    color: #f77d10;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-size: 14px;
    margin-top: -20px;
}

.the-logo{
    width: 60%;
    padding-top:30px
}

.in-page-title {
    color: #f77d10;
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 800;


}


.line-div{
    content: '';
    width: 100%;
    height: 2px; /* Adjust the thickness of the line */
    background-color: #dbdbdb; /* Adjust the color of the line */
    transform: translateY(-50%);
}

.icon-left-arrow {
    color: #696969
}

.drop-down-products-title {
    color: #696969;
    text-transform: uppercase;
    font-size: 10px;
    font-weight: 800;



}
.drop-down-products-descript {
    color: #dbdbdb;
    text-transform: uppercase;
    font-size: 8px;


}
.drop-down-products-amount {
    color: #777777;
    font-weight: 800;
}

.drop-down-products-amount-icon {
    background-color: #f77d10;
    border-radius: 50%;
    color: white;
    font-size: 20px !important;

    display: inline-flex; /* Ensures the element is only as wide as its content */
    align-items: center; /* Centers the icon vertically */
    justify-content: center; /* Centers the icon horizontally */
    width: 20px; /* Set the width of the circle */
    height: 20px; /* Set the height of the circle */
}

.drop-down-products-amount-container  {
    display: flex;
    justify-content: space-between;
}


.drop-down-products-title-container {
    text-align: start;
}
.drop-down-products{
    width:100%;
}

.rounded-pill-start {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.rounded-pill-end {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    margin-left: -1px; /* To overlap the button and input slightly */
}
.search-input {
    border-radius: 20px 20px 20px 20px;
    background-color: #eeeeee;
    margin-right: -15px;
    z-index: 1000;
}

.search-input::placeholder {
    color: #c9c9c9;  /* Custom color */
    font-size: 8px;  /* Custom font size */
    opacity: 1;  /* Ensures the custom color is fully applied */
}

.btn-search-submit {
    border-radius: 0 20px 20px 0;
    background-color: #f77d10;
    color: white;
    width:80px;
    font-size: 12px;
    font-weight: 800;
}
.btn-search-submit:hover {
    background-color: #bb5c08;
    color: white;

}

.search-title {
    color: #696969;
    text-transform: uppercase;
    font-size: 10px;
    font-weight: 800;
    text-align: start;
}

.search-container {
    text-align: start;
}

.li-link-container {
    background-color: #dbdbdb;
    padding: 2px;
    border-radius: 5px;
    margin-bottom: 10px;
}
.li-link-container-is-active {
    background-color: #F77D10;
}

.li-link {
    color: #929292;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: 800;
}

.li-link-is-active {
    color: #ffffff;
}

.list-container {
    width: 100%;
    padding: 10px 15px; /* Adjust padding as needed */
}

.scrollable-div {
    height: 900px;
    overflow: auto;
    padding-right:  10px;
}

</style>
<template>
    <div>
        
        <Head :title="title" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Symbols+Outlined">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <Banner />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

        <div class="min-h-screen body-bg">
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <nav class="scrollable-div col-auto col-sm-2 px-sm-2 px-0 bg-light nav-container d-flex flex-column justify-content-center align-items-center">
                        <!-- Navbar Toggler Button -->
                        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> -->

                        <div >
                            <div class="d-flex flex-column align-items-center text-center min-vh-100">
                                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 the-logo text-decoration-none justify-content-center">
                                    <img src="https://financesonline.com/uploads/2019/02/BIM-POS-logo.jpg">
                                </a> 
                                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 the-dashboard text-decoration-none justify-content-center">
                                    <span class="d-none d-sm-inline">The Dashboard</span>
                                </a> 
                                <hr />
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                    <div class="line-div"></div>

                                    <li class="container nav-item li-in-page-title">
                                        
                                        <a href="#" class="nav-link d-flex align-items-center">
                                            
                                            <span class="material-symbols-outlined me-2 icon-left-arrow">
                                                chevron_left
                                            </span>
                                            
                                            <span class="in-page-title">Product Setup</span>
                                        </a>

                                    </li>
                                    <div class="line-div"></div>

                                    <li class="nav-item drop-down-products">
                                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link ">
                                            <i class="fs-4 bi-speedometer2"></i> 
                                            <div class="drop-down-products-title-container">
                                                <span class="drop-down-products-title">
                                                    USD Products
                                                </span> 
                                                <span class="drop-down-products-descript">
                                                    FUSD At
                                                </span> 
                                            </div>
                                            <div class="drop-down-products-amount-container">
                                                <span class="d-sm-inline drop-down-products-amount">
                                                    91,000
                                                </span> 
                                                <span class="drop-down-products-amount-icon material-symbols-outlined ">
                                                    keyboard_arrow_down
                                                    
                                                </span> 
                                            </div>

                                        </a>
                                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                            <li class="inside w-100">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                            </li>
                                            <li class="inside">
                                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <div class="line-div"></div>

                                    <li class="nav-item nav-link search-container">
                                        <span class="search-title">
                                            Quick Search
                                        </span> 
                                        <a href="#" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-table"></i>
                                            <div>
                                                <form class="form-inline d-flex">
                                                    <input class="form-control search-input rounded-pill-start" type="search" placeholder="Product Description Ex: Burger" aria-label="Search">
                                                    <button class="btn btn-search-submit rounded-pill-end" type="submit">F3</button>
                                                </form>
                                            </div>
                                        </a>
                                    </li>
                                    <div class="list-container">
                                        <li class="nav-item li-link-container li-link-container-is-active">
                                            <a href="#" class="nav-link d-flex " >
                                                <span class="li-link li-link-is-active">General Information</span>
                                            </a>
                                            
                                        </li>
                                        <li class="nav-item li-link-container">
                                            <a href="#" class="nav-link d-flex">
                                                <span class="li-link">Product Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item li-link-container">
                                            <a href="#" class="nav-link d-flex">
                                                <span class="li-link">Stock Center</span>
                                            </a>
                                        </li>
                                        <li class="nav-item li-link-container">
                                            <a href="#" class="nav-link d-flex">
                                                <span class="li-link">Other Information</span>
                                            </a>
                                        </li>
                                    </div>
                                    <li>
                                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                                <li class="w-100">
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0 align-middle">
                                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                                    </li>
                                </ul>
                                <hr>
                                <div class="dropdown pb-4">
                                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="d-none d-sm-inline mx-1">loser</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                        <li><a class="dropdown-item" href="#">New project...</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <!-- Page Heading -->
                    <header v-if="$slots.header" class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            <slot name="header" />
                        </div>
                    </header>

                    <!-- Page Content -->
                    <main class="main-content">
                        <slot />
                    </main>
                </div>
            </div>
        </div>

    </div>

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
        return window.location.pathname.startsWith(route);
    }


  },
};
</script>