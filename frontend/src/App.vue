<!-- Sorry Sir, walay sense ang mga table, apiki na kung mag-usab hehehehe -->
<template>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <div class="right">
    <div class="navs">
      <router-link to="/">Home</router-link>
      <router-link to="/manhwa">Popular</router-link>
      <router-link to="/reader">Favorites</router-link>  <!-- Reader = Favorite-->
      <router-link to="/about">About</router-link> 
    </div>

    <div class="title">
      <a id="menu" @click="toggleDropdown" :class="{ change: isDropdownOpen }">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="hamburger-icon" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 2.5A.5.5 0 0 1 1.5 2h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 2.5zm0 5a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1H1zm0 5a.5.5 0 0 1 0-1h13a.5.5 0 0 1 0 1H1z"/>
        </svg>
      </a>
    </div>
  </div>

  <!-- <div id="app">
    <router-view></router-view>
  </div> -->

  <div class="container" :class="{ 'show-nav': isDropdownOpen }">
    <div class="close">
      <a id="close" @click="toggleDropdown" :class="{ change: isDropdownOpen }">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="white" class="bi bi-x-lg" viewBox="0 0 16 16">
          <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
        </svg>
      </a>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light" v-if="isDropdownOpen">
      <router-link to="/"><i class="fa-solid fa-house"></i><strong>Home</strong></router-link>
      <router-link to="/about"><i class="fa-solid fa-gamepad"></i><strong>About</strong></router-link>
      <router-link to="/"><i class="fa-solid fa-box"></i><strong>Contact</strong></router-link>
      <i class="fa-solid fa-box"></i><strong><a href="https://github.com/AmurTigro1" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
</svg></a></strong>
    </nav>
  </div>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isDropdownOpen: false,
    };
  },
  watch: {
    $route(to, from) {
      this.isDropdownOpen = false;
    },
  },
  methods: {
    toggleDropdown() {
      this.isDropdownOpen = !this.isDropdownOpen;
    },
  },
};
</script>

<style scoped>
.right {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #32045d;
  }

  .navs {
    display: flex;
    justify-content: center;
    gap: 100px; /* Adjust this value to add spacing between nav links */
  }
  .navs a {
    color: white;
  }
nav {
  margin-top: 40px;
  display: flex;
  flex-direction: column;
  gap: 15px;
  align-items: center;
}


.title {
  text-align: right;
}
nav a:hover {
  background-color: #43037f;
}

nav a {
  display: flex;
  align-items: center;
  gap: 10px;
  color: white;
}

#menu i:hover {
  background-color: black;
  color: white;
  border-radius: 5px;
}


.right {
  padding: 20px;

}

a {
  cursor: pointer;
}

.close {
  text-align: right;
  transform: translate(1px, 1px);
}

.container {
  width: 20%;
  background-color: #7310d0;
  padding: 10px;
  transform: translate(115%, -53px); 
  transition: transform 0.3s ease;
  height: 100%;
  position: fixed;
  z-index: 1;
  right: 0;
}

.container.show-nav {
  transform: translate(0, -53px);
  height: 100%;
}

</style>
