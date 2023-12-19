<!-- Sorry Sir, walay sense ang mga table, apiki na kung mag-usab hehehehe -->
<template>
  <div>
    <div class="header">
      <h1>Popular Today</h1>
    </div>

    <div class="container">
      <div v-for="sinManhwa in manhwas" :key="sinManhwa.id" class="manhwas-info">
        <div class="mini-container">
          <router-link to="/reader">
          <img :src="sinManhwa.image" alt="Manhwa Image" class="manhwa-image" />
    </router-link>
          <h2 class="title">{{ sinManhwa.title }}</h2>
          <div class="info">
            <p><strong>Genre:</strong> {{ sinManhwa.genre }}</p>
            <p><strong>Status:</strong> {{ sinManhwa.status }}</p>
            <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>   
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
  
  <script setup>
  import { onMounted, ref } from "vue";
  import { useRoute } from "vue-router";
  
  const manhwas = ref([]);
  const inventorys = ref([]);
  const selectedQuantity = ref(1);
  
  onMounted(async () => {
    try {
      const response = await fetch("http://localhost:8000/api/manhwas");
      const data = await response.json();
      manhwas.value = data;
    } catch (error) {
      console.error("Error fetching manhwas:", error);
    }
  });
  
  
  </script >
  <style scoped>
  .container {
    display: flex;
    justify-content: space-between;
    padding: 50px;
    flex-wrap: wrap;
  }
  /* Styles */
  .header {
    text-align: center;
    margin-bottom: 20px;
  }

  .manhwas-info {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
  }

  .mini-container {
    border: 1px solid #ccc;
    padding: 15px;
    text-align: center;
    width: 250px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 400ms;
  }
.mini-container:hover {
  transform: scale(1.08);
  cursor: pointer;
}

  .manhwa-image {
    max-width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 8px;


  }

  .title {
    margin-top: 10px;
    font-size: 1.2em;
  }

  .info {
    margin-top: 15px;
  }

  .info p {
    margin-bottom: 5px;
  }

</style>