<template>
  <div>
    <form @submit.prevent="submit">
      <div class="field">
        <label class="label">Name</label>
        <div class="control">
          <input v-model="form.name" class="input" type="text" placeholder="Name" required/>
        </div>
      </div>
      <div class="field">
        <label class="label">Slug</label>
        <div class="control">
          <input v-model="form.slug" class="input" type="text" placeholder="slug" required/>
        </div>
      </div>
      <div class="field">
        <label class="label">Description</label>
        <div class="control">
          <textarea v-model="form.description" class="textarea" placeholder="Description" required></textarea>
        </div>
      </div>
      <button type="submit" class="button is-success">Save changes</button>
    </form>
  </div>
</template>

<script>
export default {
  props: {
    domain: {
      required: true
    }
  },
  data() {
    return {
      form: new Form({
        name: this.domain.name,
        slug: this.domain.slug,
        description: this.domain.description
      })
    };
  },
  methods: {
    submit() {
      this.form.put("/domain/" + this.domain.slug);

      alert("Changes have been saved");

      window.location.href = "/domain";
    }
  }
};
</script>

<style scoped>
</style>
