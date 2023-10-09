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
    background-color: #212529;
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
    background-color: grey;
}

.side-bar[data-position="right"] {
    position: fixed;
    top: 60px; /* Add 'px' units */
    right: 0;
    min-height: 100%;
    width: 25%;
    background-color: #181b1e;
    border-top-right-radius: 6px;
    border-bottom-right-radius: 6px;
    max-height: 80%; /* Set a maximum height */
}
.items-box-container {
    
    height: 500px; /* Set the desired height for scrollable content */
    overflow-y: auto; /* Enable vertical scrolling when content overflows */

}

.side-bar[data-position="right"] .item:hover {
  background-color: rgba(246, 147, 35);
  border-top-right-radius: 10%;
  border-bottom-right-radius: 10%;
  cursor: pointer;
}

.side-bar[data-position="right"] .item {
    
  color: white;
  height: 100%;
  width: 25%;
  /* background-color: #444; */
  text-align: center;
  
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
.order-number {
    color: white;
    font-size: 20px;
}
.ordertype-container {
    margin-top: 3%;
}
.ordertype-btns {
    margin-right: 10px;
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
.row-item-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.iteminfo-container {
    display: flex;
    align-items: center;
    margin-top: 3%;
}

.spacer {
    flex-grow: 1;
}
.item-info-text {
    color: white;
    font-size: 16px;
    margin-left: 7%;

}
.item-info-qty {
    margin-right: 8%;
    color: white;
    font-size: 16px;
}
.item-info-price {
    margin-right: 8%;
    color: white;
    font-size: 16px;
}
.item-box-container {
    background-color: #212529;
    border: 1px solid #212529;
    border-radius: 10px;
    padding: 20px;
    margin-top: 10px;
}

.item-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.item-image {
    width: 60px;
    height: 60px;
    margin-bottom: 20px;
    border-radius: 50%;
}

.item-name {
    color: white;
    margin-left: 10px; /* Adjust margin as needed */
}

.item-qty {
    color: white;
    margin-right: 10px; /* Adjust margin as needed */
}

.item-qty-price {
    color: white;
}

.item-price {
    color: white;
    margin-right: 10px; /* Adjust margin as needed */
}

.item-input-container {
    margin-top: 10px; /* Adjust margin as needed */
}
.main-content {
    width: 80%; /* Same as the side panel width */
    padding: 20px; /* Adjust this as needed */
}
.order-container {
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    align-items: center;
    padding: 20px;
    margin:15px;
    border-radius: 20px;
    height: 200px
}

.order-row {
    display: flex;
    justify-content: space-between;
    width: 100%;
    padding: 5px 0;
    color:white;
}

.label, .value {
    flex: 1;
}
.order-btn {
    width:100%;
    margin-top: 20px;
    font-weight: bold;
    --bs-btn-color: black;
    --bs-btn-bg: rgba(246, 147, 35);
    --bs-btn-border-color: rgba(246, 147, 35);
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #f98603;
    --bs-btn-hover-border-color: #f98603;
    --bs-btn-focus-shadow-rgb: 60,153,110;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #f98603;
    --bs-btn-active-border-color: #f98603;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #f98603;
    --bs-btn-disabled-border-color: #f98603;
}
@media (max-width: 768px) {
    .container {
        align-items: flex-start; /* Align items to the top on smaller screens */
    }
}
.item-image-container {
    position: relative;
    overflow: hidden;
    border-radius: 50%;


}

.item-circular-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image fills the circular container */
}


</style>
<template>
    <div>
        <Head :title="title" />

        <Banner />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

        <div class="min-h-screen body-bg">
            <nav class="nav-bg">
                <!-- Primary Navigation Menu -->
                <div class="px-3 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationMark class="block h-9 w-auto" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class=" hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink class="lable" :href="route('dashboard')" :class="{ 'active-nav': isActive('/dashboard') }">
                                    Dashboard
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">
                                <!-- Teams Dropdown -->
                                <Dropdown v-if="$page.props.jetstream.hasTeamFeatures" align="right" width="60">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.current_team.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <div class="w-60">
                                            <!-- Team Management -->
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                Manage Team
                                            </div>

                                            <!-- Team Settings -->
                                            <DropdownLink :href="route('teams.show', $page.props.auth.user.current_team)">
                                                Team Settings
                                            </DropdownLink>

                                            <DropdownLink v-if="$page.props.jetstream.canCreateTeams" :href="route('teams.create')">
                                                Create New Team
                                            </DropdownLink>

                                            <!-- Team Switcher -->
                                            <template v-if="$page.props.auth.user.all_teams.length > 1">
                                                <div class="border-t border-gray-200" />

                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    Switch Teams
                                                </div>

                                                <template v-for="team in $page.props.auth.user.all_teams" :key="team.id">
                                                    <form @submit.prevent="switchToTeam(team)">
                                                        <DropdownLink as="button">
                                                            <div class="flex items-center">
                                                                <svg v-if="team.id == $page.props.auth.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                </svg>

                                                                <div>{{ team.name }}</div>
                                                            </div>
                                                        </DropdownLink>
                                                    </form>
                                                </template>
                                            </template>
                                        </div>
                                    </template>
                                </Dropdown>
                            </div>

                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <button v-if="$page.props.jetstream.managesProfilePhotos" class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                                        </button>

                                        <span v-else class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            Manage Account
                                        </div>

                                        <DropdownLink :href="route('profile.show')">
                                            Profile
                                        </DropdownLink>

                                        <DropdownLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')">
                                            API Tokens
                                        </DropdownLink>

                                        <div class="border-t border-gray-200" />

                                        <!-- Authentication -->
                                        <form @submit.prevent="logout">
                                            <DropdownLink as="button">
                                                Log Out
                                            </DropdownLink>
                                        </form>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" @click="showingNavigationDropdown = ! showingNavigationDropdown">
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                </div>
                <div class="side-panel" id="side-panel">
                    <div data-position="left" class="side-bar">
                        <div class="item" :class="{ 'active': isActive('/dashboard') }" > 
                            <a :href="route('dashboard')" >
                                <div class="inner-item">
                                    <span class="inner-icon material-symbols-outlined">
                                        point_of_sale
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="item" :class="{ 'active': isActive('/test') }" > 
                            <a :href="route('dashboard')" >
                                <div class="inner-item" :class="{ 'inner-active': isActive('/test') }">
                                    <span class="inner-icon  material-symbols-outlined">
                                        schedule
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="item"><i class="fa fa-comments-o"></i></div>
                        <div class="item"><i class="fa fa-folder-o"></i></div>
                        <div class="item"><i class="fa fa-file-code-o"></i></div>

                        <div class="item bottom" id="show_hide"><i class="fa fa-angle-double-right"></i></div>
                    </div>
                </div>
                <div class="side-panel" id="side-panel">
                    <div data-position="right" class="side-bar">
                        <div class="container">
                            
                            <div class="row">
                                <div class="order-number">Order #19985</div>
                            </div>
                            <div class="row">
                                <div class="ordertype-container">
                                    <div class="btn ordertype-btns btn-outline-bimpos">Dine In</div>
                                    <div class="btn ordertype-btns btn-outline-bimpos">Take Away</div>
                                    <div class="btn ordertype-btns btn-outline-bimpos">Delivery</div>
                                </div>
                            </div>
                            <div class="row row-item-info">
                                <div class="iteminfo-container">
                                    <div class="item-info-text">Items</div>
                                    <div class="spacer"></div>
                                    <div class="item-info-qty">Qty</div>
                                    <div class="item-info-price">Price</div>
                                    <div class="item-info-price">Total</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="container items-box-container">

                                    <div class="item-box-container">
                                        <div class="item-container">
                                            <div class="item-image item-image-container">
                                                <img src="/img/shrimp.jpg" class="item-circular-image">
                                            </div>
                                            <div class="item-name">Spicy Salmon Salad</div>
                                            <div class="item-qty">
                                                <button class="btn btn-secondary">2</button>
                                            </div>
                                            <div class="item-price">$12.00</div>
                                            <div class="item-qty-price">$24.00</div>
                                        </div>

                                        <div class="item-input-container">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn trash-btn btn-outline-danger">
                                                        <span class="material-symbols-outlined">delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="item-box-container">
                                        <div class="item-container">
                                            <div class="item-image item-image-container">
                                                <img src="/img/swiss.jpg" class="item-circular-image">
                                            </div>
                                            <div class="item-name">Swiss Cheese Pizza</div>
                                            <div class="item-qty">
                                                <button class="btn btn-secondary">1</button>
                                            </div>
                                            <div class="item-price">$24.00</div>
                                            <div class="item-qty-price">$24.00</div>
                                        </div>

                                        <div class="item-input-container">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn trash-btn btn-outline-danger">
                                                        <span class="material-symbols-outlined">delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item-box-container">
                                        <div class="item-container">
                                            <div class="item-image item-image-container">
                                                <img src="/img/peperoni.jpeg" class="item-circular-image">
                                            </div>
                                            <div class="item-name">Peperoni Pizza</div>
                                            <div class="item-qty">
                                                <button class="btn btn-secondary">2</button>
                                            </div>
                                            <div class="item-price">$22.00</div>
                                            <div class="item-qty-price">$44.00</div>
                                        </div>

                                        <div class="item-input-container">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn trash-btn btn-outline-danger">
                                                        <span class="material-symbols-outlined">delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-box-container">
                                        <div class="item-container">
                                            <div class="item-image item-image-container">
                                                <img src="/img/tripleb.jpg" class="item-circular-image">
                                            </div>
                                            <div class="item-name">Tripple Burger</div>
                                            <div class="item-qty">
                                                <button class="btn btn-secondary">1</button>
                                            </div>
                                            <div class="item-price">$38.00</div>
                                            <div class="item-qty-price">$38.00</div>
                                        </div>

                                        <div class="item-input-container">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="col-auto">
                                                    <button class="btn trash-btn btn-outline-danger">
                                                        <span class="material-symbols-outlined">delete</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Repeat this block for other items -->
                                </div>

                            </div>


                            
                        </div>
                        <div class="order-container">
                            <div class="order-row">
                                <div>Discount:</div>
                                <div>$5</div>
                            </div>
                            <div class="order-row">
                                <div>Total:</div>
                                <div>$125</div>
                            </div>
                            <button class="btn order-btn btn-success">
                                Continue to Payment
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Responsive Navigation Menu -->
                <!-- <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="flex items-center px-4">
                            <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name">
                            </div>

                            <div>
                                <div class="font-medium text-base text-gray-800">
                                    {{ $page.props.auth.user.name }}
                                </div>
                                <div class="font-medium text-sm text-gray-500">
                                    {{ $page.props.auth.user.email }}
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                                Profile
                            </ResponsiveNavLink>

                            <ResponsiveNavLink v-if="$page.props.jetstream.hasApiFeatures" :href="route('api-tokens.index')" :active="route().current('api-tokens.index')">
                                API Tokens
                            </ResponsiveNavLink>

                            <form method="POST" @submit.prevent="logout">
                                <ResponsiveNavLink as="button">
                                    Log Out
                                </ResponsiveNavLink>
                            </form>

                            <template v-if="$page.props.jetstream.hasTeamFeatures">
                                <div class="border-t border-gray-200" />

                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Manage Team
                                </div>

                                <ResponsiveNavLink :href="route('teams.show', $page.props.auth.user.current_team)" :active="route().current('teams.show')">
                                    Team Settings
                                </ResponsiveNavLink>

                                <ResponsiveNavLink v-if="$page.props.jetstream.canCreateTeams" :href="route('teams.create')" :active="route().current('teams.create')">
                                    Create New Team
                                </ResponsiveNavLink>

                                <template v-if="$page.props.auth.user.all_teams.length > 1">
                                    <div class="border-t border-gray-200" />

                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        Switch Teams
                                    </div>

                                    <template v-for="team in $page.props.auth.user.all_teams" :key="team.id">
                                        <form @submit.prevent="switchToTeam(team)">
                                            <ResponsiveNavLink as="button">
                                                <div class="flex items-center">
                                                    <svg v-if="team.id == $page.props.auth.user.current_team_id" class="mr-2 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    <div>{{ team.name }}</div>
                                                </div>
                                            </ResponsiveNavLink>
                                        </form>
                                    </template>
                                </template>
                            </template>
                        </div>
                    </div>
                </div> -->
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