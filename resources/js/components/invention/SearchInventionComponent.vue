<template>
    <div>
        <form @submit.prevent="fetch">
            <input type="text" placeholder="Search" v-model="q">
            <button type="submit" class="button is-success" @Click="fetch(this.q)">Search</button>
        </form>
        <table class="table is-fullwidth is-hoverable">
            <tr v-for="result in results" :key="result.id" @click="goToInvention(result.slug)">
                <td>{{ result.id }}</td>
                <td>{{ result.name }}</td>
                <td>{{ result.description }}</td>
                <td>{{ result.domain_id }}</td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            q: null,
            results: []
        };
    },
    methods: {
        fetch() {
            axios.post('/search/invention', {
                q: this.q
            })
                .then(response => this.results = response.data)
                .catch(error => {});
        },
        goToInvention(slug) {
            window.location.href = "/invention/" + slug;
        }
    }
}
</script>
