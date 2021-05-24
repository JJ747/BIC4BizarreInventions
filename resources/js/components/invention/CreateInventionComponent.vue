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
            <div class="field">
                <label class="label">Domain ID</label>
                <div class="control">
                    <textarea v-model="form.domain_id" class="textarea" placeholder="Domain ID"></textarea>
                </div>
            </div>
            <button type="submit" class="button is-success">Create invention</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: new Form({
                name: "",
                description: "",
                domain_id: "",
            })
        };
    },
    methods: {
        submit() {
            this.form.post("/invention");

            alert("Invention has been created");

            window.location.href = "/invention";
        }
    }
};
</script>

<style scoped>
</style>
