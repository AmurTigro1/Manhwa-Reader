<template>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="row">
      <div id="container" class="col-md-5">
        <form @submit.prevent="createReader">
          <div class="manhwa_id">
            <label
              ><i class="fa-solid fa-id-card"></i> Manhwa ID:
              <input
                v-model="formData.manhwa_id"
                required
                class="form-control"
                placeholder="ID"
            /></label>
          </div>
          <div class="name">
            <label
              ><i class="fa-solid fa-user"></i> Reader Name:
              <input
                v-model="formData.name"
                required
                class="form-control"
                placeholder="Name"
            /></label>
          </div>
  
          <div class="email">
            <label
              ><i class="fa-solid fa-envelope"></i> Email:
              <input
                v-model="formData.email"
                required
                class="form-control"
                placeholder="Email"
            /></label>
          </div>

          <div class="address">
            <label
              ><i class="fa-solid fa-location-dot"></i> Address:
              <input
                v-model="formData.address"
                class="form-control"
                placeholder="Address"
            /></label>
          </div>
          <button type="submit" class="btn btn-primary">
            Create Reader/Favorite<i class="fa-solid fa-circle-arrow-right"></i>
          </button>
        </form>
        <div v-if="successMessage" class="success-message">
      {{ successMessage }}
    </div>
      </div>
    </div>
  </template>
  
  <script setup>
import { ref } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

const formData = ref({
  manhwa_id: "",
  Manhwa_title: "",
  email: "",
  address: "",
});

const successMessage = ref("");

const createReader = async () => {
  try {
    const response = await fetch("http://localhost:8000/api/readers", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData.value),
    });

    if (response.ok) {
      alert("Reader Favorite created successfully");
      router.push("/reader");

      setTimeout(() => {
        successMessage.value = "";
      }, 5000);
    } else {
      console.error("Error creating reader:", response.statusText);
    }
  } catch (error) {
    console.error("Error creating reader:", error);
  }
};
</script>
  
  <style scoped>
  .success-message {
  background-color: #4caf50;
  color: white;
  padding: 10px;
  margin-top: 10px;
  border-radius: 5px;
}
  #container {
    margin: auto;
    width: 50%;
    display: flex;
    flex-direction: column;
  }
  
  .row {
    width: 100%;
  }
  
  .name,
  .manhwa_id,
  .connum,
  .address,
  .email {
    margin-bottom: 15px;
  }
  
  form {
    margin-top: 40px;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px,
      rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px,
      rgba(0, 0, 0, 0.09) 0px 32px 16px;
    background-color: white;
    padding: 20px;
  }
  </style>
  