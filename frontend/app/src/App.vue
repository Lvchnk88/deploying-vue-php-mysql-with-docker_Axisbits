<template>
  <div>
    <h1>Databases from PHP api</h1>
    <div v-if="loading">Loading...</div>
    <div v-else>
      <div v-for="database in databases" :key="database">
        {{ database }}
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      loading: true,
      databases: []
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get(process.env.VUE_APP_BACKEND_ENDPOINT)
        .then(response => {
          this.loading = false;
          this.databases = response.data.Databases;
          console.log('Databases:', this.databases);
        })
        .catch(error => {
          console.error(error);
        });
    }
  }
};
</script>