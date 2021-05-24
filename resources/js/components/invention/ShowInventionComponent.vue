<template>
    <div>
        <nav class="buttons is-right">
            <a class="button is-info" :href="'/invention/' + invention.slug + '/edit'">Edit</a>
            <button class="button is-danger" @click="deleteInvention(invention.slug)">Delete</button>
        </nav>

        <table class="table is-fullwidth is-hoverable">
            <tbody>
            <tr>
                <td>ID</td>
                <th>{{ invention.id }}</th>
            </tr>
            <tr>
                <td>Name</td>
                <th>{{ invention.name }}</th>
            </tr>
            <tr>
                <td>Slug</td>
                <th>{{ invention.slug }}</th>
            </tr>
            <tr>
                <td>Description</td>
                <th>{{ invention.description }}</th>
            </tr>
            <tr>
                <td>Domain ID</td>
                <th>{{ invention.domain_id}}</th>
            </tr>
            <tr>
                <td>Created at</td>
                <th>{{ invention.created_at }}</th>
            </tr>
            <tr>
                <td>Updated at</td>
                <th>{{ invention.updated_at }}</th>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        invention: {
            required: true
        }
    },
    methods: {
        deleteInvention(slug) {
            axios.delete("/invention/" + slug);

            alert(slug + " has been deleted");

            window.location.href = "/invention";
        }
    }
};
</script>

<style scoped>
</style>
