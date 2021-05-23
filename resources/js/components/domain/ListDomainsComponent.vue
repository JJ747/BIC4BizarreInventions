<template>
  <div>
    <nav class="buttons is-right">
      <a class="button is-success" href="/domain/create">New domain</a>
    </nav>

    <table class="table is-fullwidth is-hoverable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="domain in domains" :key="domain.id" @click="goToDomain(domain.slug)">
          <td>{{ domain.id }}</td>
          <td>{{ domain.name }}</td>
          <td>{{ domain.description }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    domains: {
      required: true
    }
  },
  methods: {
    goToDomain(slug) {
      window.location.href = "/domain/" + slug;
    }
  }
};
</script>

<style scoped>
tbody tr {
  cursor: pointer;
}
</style>
