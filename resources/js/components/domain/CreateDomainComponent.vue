<template>
  <div>
    <form @submit.prevent="submit">
      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input v-model="form.name" class="input" type="text" placeholder="Name" />
        </div>
      </div>
      <div class="field">
        <label class="label">Slug</label>
        <div class="control">
          <input v-model="form.slug" class="input" type="text" placeholder="slug" />
        </div>
      </div>
      <div class="field">
        <label class="label">Description</label>
        <div class="control">
          <textarea v-model="form.description" class="textarea" placeholder="Description"></textarea>
        </div>
      </div>
      <button type="submit" class="button is-success">Create domain</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: new Form({
        name: "",
        slug: "",
        description: ""
      })
    };
  },
  methods: {
    submit() {
      this.form.post("/domain");

      alert("Domain has been created");

      window.location.href = "/domain";
    }
  }
};
</script>

<style scoped></style>
