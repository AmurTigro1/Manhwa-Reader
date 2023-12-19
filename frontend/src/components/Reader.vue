<template>
  <div class="bg">
   <div class="readers-favorites-container"></div>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <h1 style="color: #43037f; display: flex; align-items: center; justify-content: center;" >Reader's Favorites</h1>
    <div class="button-container">
      <router-link
        to="/reader/create"
        class="btn btn-primary add-favorite-btn"
        type="button"
      >
        Add Favorite
      </router-link>
    </div>
    <div class="row">
      <div
        class="col-md-4"
        v-for="(reader, index) in readers"
        :key="reader.id"
      >
        <div class="card mb-3">
          <div class="card-body card-dark-bg"> 
            <h5 class="card-title text-white">Manhwa ID: {{ reader.id }}</h5> 
            <p class="card-text small text-white">Reader Name: {{ reader.name }}</p> 
            <p class="card-text small text-white">Reader Email: {{ reader.email }}</p> 
            <p class="card-text small text-white">Reader Address: {{ reader.address }}</p> 
            <img
              :src="reader.manhwa.image"
              alt="Manhwa Image"
              class="manhwa-image img-fluid"
              style="max-width: 150px; height: auto;"
            />
            <p class="card-text small text-white">Manhwa Title: {{ reader.manhwa.title }}</p> 
            <button
              @click="deleteReader(reader.id)"
              class="btn btn-danger btn-sm"
            >
              Delete
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style>

.bg {
  background-color: black;
}
.readers-favorites-container {
  background-color: black;
  color: white;
  padding: 20px;
}
.card-dark-bg:hover {
  transform: scale(1.08);
  cursor: pointer;
}
.small {
  font-size: 0.8rem;
}

.card-dark-bg {
  background-color: black;
  transition: transform 500ms;
}

.text-white {
  color: white; 
}
</style>

  <script setup>
  import { onMounted, ref } from "vue";
  import { useRouter } from "vue-router";
  
  const readers = ref([]); 
  const router = useRouter();
  
  onMounted(async () => {
    await fetchReaders();
  });
  
  const fetchReaders = async () => {
    try {
      const response = await fetch("http://localhost:8000/api/readers");
      const data = await response.json();
      readers.value = data;
    } catch (error) {
      console.error("Error fetching readers:", error);
    }
  };
  
  const deleteReader = async (readerId) => {
    try {
      const response = await fetch(
        `http://localhost:8000/api/readers/${readerId}`,
        {
          method: "DELETE",
        }
      );
  
      if (response.ok) {
    
        readers.value = readers.value.filter(
          (reader) => reader.id !== readerId 
        );
        alert("Reader deleted successfully");
        console.log("Reader deleted successfully");
      } else {
        console.error("Error deleting reader:", response.statusText);
      }
    } catch (error) {
      console.error("Error deleting reader:", error);
    }
  };
  </script>
  