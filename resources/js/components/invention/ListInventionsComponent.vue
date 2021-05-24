<template>
    <div>
        <nav class="buttons is-right">
            <a class="button is-success" href="/invention/create">New invention</a>
        </nav>

        <table class="table is-fullwidth is-hoverable">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Domain ID</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="invention in inventions" :key="invention.id" @click="goToInvention(invention.slug)">
                <td>{{ invention.id }}</td>
                <td>{{ invention.name }}</td>
                <td>{{ invention.description }}</td>
                <td>{{ invention.domain_id }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    props: {
        inventions: {
            required: true
        }
    },
    methods: {
        goToInvention(slug) {
            window.location.href = "/invention/" + slug;
        }
    }
};
</script>

<style scoped>
tbody tr {
    cursor: pointer;
}
</style>
