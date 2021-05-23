<template>
  <div>
    <nav class="buttons is-right">
      <a class="button is-info" :href="'/domain/' + domain.slug + '/edit'">Edit</a>
      <button class="button is-danger" @click="deleteDomain(domain.slug)">Delete</button>
    </nav>

    <table class="table is-fullwidth is-hoverable">
      <tbody>
        <tr>
          <td>ID</td>
          <th>{{ domain.id }}</th>
        </tr>
        <tr>
          <td>Name</td>
          <th>{{ domain.name }}</th>
        </tr>
        <tr>
          <td>Slug</td>
          <th>{{ domain.slug }}</th>
        </tr>
        <tr>
          <td>Description</td>
          <th>{{ domain.description }}</th>
        </tr>
        <tr>
          <td>Created at</td>
          <th>{{ domain.created_at }}</th>
        </tr>
        <tr>
          <td>Updated at</td>
          <th>{{ domain.updated_at }}</th>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    domain: {
      required: true
    }
  },
  methods: {
    deleteDomain(slug) {
      axios.delete("/domain/" + slug);

      alert(slug + " has been deleted");

      window.location.href = "/domain";
    }
  }
};
</script>

<style scoped>
</style>
