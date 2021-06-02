<template>
    <div>
        <form @submit.prevent="fetch">
            <input type="text" placeholder="Search" v-model="q">
            <button type="submit" class="button is-success" @Click="fetch(this.q)">Search</button>
        </form>
        <table class="table is-fullwidth is-hoverable">
            <thead>
            <tr v-if="this.results.length">
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Domain ID</th>
            </tr>
            <tr v-if="!this.firstVisit && !this.results.length">
                <th>No results found.</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="result in results" :key="result.id" @click="goToInvention(result.slug)">
                <td>{{ result.id }}</td>
                <td>{{ result.name }}</td>
                <td>{{ result.description }}</td>
                <td>{{ result.domain_id }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            q: null,
            results: [],
            firstVisit : 1
        };
    },
    methods: {
        fetch() {
            axios.post('/search/invention', {
                q: this.q
            })
                .then(response => this.results = response.data)
                .catch(error => {});
            this.firstVisit = 0;
        },
        goToInvention(slug) {
            window.location.href = "/invention/" + slug;
        }
    }
}
</script>
