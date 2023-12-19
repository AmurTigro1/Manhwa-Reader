<!-- Sorry Sir, walay sense ang mga table, apiki na kung mag-usab hehehehe -->
<template>

  <div>
  <div class="container">
      <div class="banner">
        <div class="banner-content">
    <h1>Solo Leveling</h1>
    <p>In a world where hunters, human warriors who possess magical abilities, must battle deadly monsters to protect mankind from certain annihilation, a notoriously weak hunter named Sung Jinwoo finds himself in a seemingly endless struggle for survival. One day, after narrowly surviving an overwhelmingly powerful dungeon that nearly wipes out his entire party, a mysterious program called the System chooses him as its sole player and in turn, gives him the extremely rare ability to level up in strength, possibly beyond any known limits. Follow Jinwoo's journey as he fights against all kinds of enemies, both man and monster, to discover the secrets of the dungeons and the true source of his powers.</p>
  </div>
      </div>
      <hr>
      <div v-for="sinManhwa in manhwas" :key="sinManhwa.id" class="manhwas-info">
        <div class="mini-container">
          <img :src="sinManhwa.image" alt="Game Image" class="manhwa-image" />
         
          <h1 class="title">{{ sinManhwa.title }}</h1>
          <div class="q-p">
            <hr>
            <div class="container1">
              <p>Genre: {{ sinManhwa.genre }}</p>
              <p>Status: {{ sinManhwa.status }}</p>
              <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>
              <a href="" class="bi-star-fill"></a>       
            </div>
            <div class="container2">
              
            </div>
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
const topManhwas = ref([]);
const bottomManhwas = ref([]);

const splitManhwas = (data) => {
  const midpoint = Math.ceil(data.length / 2);
  topManhwas.value = data.slice(0, midpoint);
  bottomManhwas.value = data.slice(midpoint);
};

onMounted(async () => {
  try {
    const response = await fetch("http://localhost:8000/api/populars");
    const data = await response.json();
    manhwas.value = data;
    splitManhwas(data); 
  } catch (error) {
    console.error("Error fetching manhwas:", error);
  }
});



</script>

<style scoped>
 .container {
    display: flex;
    flex-wrap: wrap;
    padding: 10px 0 10px 0;
    justify-content: space-between;
  }
p {
  color: white;
}
.bi-star a {
  transition: .6s;
  color: gold;
}
.container1 .star a::backdrop{
  color: gold;
}
.banner {
  background-image: url("https://rare-gallery.com/mocahbig/1377023-sung-jinwoo-solo-leveling-manhwa-4k-pc-wallpaper.jpg");
  background-size: cover;
  background-position: center center;
  color: black;
  object-fit: contain;
  height:85vh;
  width: 100%;
  border-radius: 15px;
  /* margin: 0%; */
  border-bottom: 2px solid white;
  transition: transform 500ms;
  display: flex;
  justify-content: center;
  align-items: center;
}
.banner-content {
  position: absolute;
  bottom: 200px;
  left: 20px;
  text-align: left;
  color: white;
}
.banner-content h1 {
  font-size: 50px;
}
.banner-content p {
  margin: 5px;
  max-width: 500px;
  font-size: 17px;
}
.banner:hover{
  transform: scale(.9);
}
.title {
    color: white;
    font-size: 15px;
    font-weight: 600;
    margin-top: -20px;
    font-size: 25px;
    margin-top: 15px;
    padding: 14px;
    align-items: center;
    display: flex;
    justify-content: center;
    background-color: #43037f;

}
  .container1{
    color: black;
  }
  .title {
    font-size: 15px;
    font-weight: 600;
    margin-top: -20px;
  }
  
  .mini-container {
  box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px,
    rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
  border-radius: 10px;
  width: 300px;
  margin: 10px;
  height: 300px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background-color: rgb(54, 35, 125);
  transition: transform 200ms;
}
.mini-container:hover {
  transform: scale(1.08);
}
.q-p {
  display: flex;
  justify-content: space-between;
  padding: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
 background-color: black;
}
/* .title:hover {
    background-color: white;
} */
.manhwas-info {
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
    rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
  display: flex;
  margin: 15px;
  background-color: black;
}
.manhwa-image {
  width: 100%; /* Make the image fill the container width */
  height: 100%; /* Make the image fill the container height */
  object-fit: cover; /* Maintain aspect ratio */
  border-radius: 5px; /* Optional: add border radius */
}
</style>
