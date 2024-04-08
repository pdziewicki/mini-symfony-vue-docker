<template>
  <div>
    <h1>{{ hello.message }}</h1>
    <h3>
      {{ hello.path }}
    </h3>
  </div>
</template>

<script setup>
  import { ref, onMounted } from "vue";

  const hello = ref({})

  onMounted(async () => {
    hello.value = await fetchHello();
  })

  const fetchHello = async () => {
    try {
      const response = await fetch('http://localhost:8000/hello');
      if (!response.ok) {
        throw new Error('Failed while calling backend');
      }
      return response.json();
    } catch (error) {
      console.error(error);
    }
  }
</script>

<style scoped>
  div {
    background-color: white;
    color: black;
  }
</style>