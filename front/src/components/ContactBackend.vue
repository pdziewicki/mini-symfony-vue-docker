<template>
  <table>
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
    </thead>

    <tbody>
    <tr v-for="contact in contacts">
      <th scope="row">{{ contact.id }}</th>
      <td>{{ contact.first_name }}</td>
      <td>{{ contact.last_name }}</td>
      <td>{{ contact.email }}</td>
      <td>{{ contact.message }}</td>
    </tr>
    </tbody>
  </table>
</template>

<script setup>
  import { ref, onMounted } from "vue";

  const contacts = ref([])

  onMounted(async () => {
    contacts.value = await fetchContacts();
  })

  const fetchContacts = async () => {
    try {
      const response = await fetch('http://localhost:8000/contact');
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
  table {
    background-color: white;
    color: black;
  }
</style>