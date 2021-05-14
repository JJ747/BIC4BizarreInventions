<template>
    <div class="table-container is-fullwidth">
        <table class="table is-fullwidth is-hoverable">
            <thead>
            <tr class="title is-6">
                <table-element element-type="th">Name</table-element>
                <table-element element-type="th">Description</table-element>
                <table-element element-type="th">Domain-ID</table-element>
                <table-element element-type="th">Created</table-element>
                <table-element element-type="th">Modified</table-element>
                <table-element element-type="th"></table-element>
            </tr>
            </thead>
            <tbody>
            <tr v-for="invention in inventions" :key="invention.id">
                <table-element element-type="td">
                    <a :href="'/invention/' + invention.slug"
                       :title="invention.title">
                        <i class="fa fa-comment"></i>&nbsp;{{ invention.title }}
                    </a>
                </table-element>
                <table-element element-type="td">{{ invention.user.name }}</table-element>
                <table-element element-type="td" text-class="has-text-centered">{{ invention.domain_id }}
                </table-element>
                <table-element element-type="td">{{ invention.created_at | moment('DD.MM.YYYY') }}</table-element>
                <table-element element-type="td">{{ invention.updated_at | moment('DD.MM.YYYY') }}</table-element>
                <table-element element-type="td">
                    <p class="buttons">
                        <a :href="'/invention/' + invention.slug + '/edit'" class="button is-info is-outlined is-small">
                            <span class="icon">
                              <i class="fa fa-edit"></i>
                            </span>
                        </a>
                        <button v-if="!invention.messages.length" @click="openDeleteModal(invention)"
                                class="button is-danger is-outlined is-small">
                            <span class="icon">
                              <i class="fa fa-remove"></i>
                            </span>
                        </button>
                    </p>
                </table-element>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "InventionListComponent",
    props: {
        inventionList: {
            required: true
        },
        user: {
            required: true
        },
    },
    components: {
        TableElement
    },
    data() {
        return {
            inventions: []
        }
    },
    methods: {
        openDeleteModal(invention) {
            this.$emit('open-modal',
                {
                    id: invention.id,
                    title: invention.title,
                    content: 'Do you really want to delete this invention?',
                    url: '/invention/' + invention.slug
                });
        }
    },
    created() {
        this.inventions = this.inventionList;
    },
    watch: {
        inventionList(newVal) {
            this.inventions = newVal;
        }
    }
}
</script>

<style scoped>

</style>
