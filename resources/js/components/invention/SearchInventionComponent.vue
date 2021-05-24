<template>
    <div>
        <input type="text" placeholder="Search" v-model="keywords">
        <ul v-if="results.length > 0 && keywords">
            <li v-for="result in results.slice(0,10)" :key="result.id">
                <a :href="result.url">
                    <div v-text="result.title"></div>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            keywords: null,
            results: []
        };
    },
    watch: {
        keywords(after, before) {
            this.fetch();
        }
    },
    methods: {
        fetch() {
            axios.get('/search/invention', { params: { keywords: this.keywords } })
                .then(response => this.results = response.data)
                .catch(error => {});
        }
    }
}
</script>
