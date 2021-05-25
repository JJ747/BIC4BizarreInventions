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
            <button type="submit" class="button is-success">Change invention</button>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        invention: {
            required: true
        }
    },
    data() {
        return {
                form: new Form({
                    name: this.invention.name,
                    description: this.invention.description,
                    domain_id: this.invention.domain_id
                })
        };
    },
    methods: {
        submit() {
            this.form.put("/invention/" + this.invention.slug);

            alert("Changes have been saved");

            window.location.href = "/invention";
        }
    }
};
</script>

<style scoped>
</style>
