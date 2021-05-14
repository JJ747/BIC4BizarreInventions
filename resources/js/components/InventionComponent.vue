<template>
    <div class="container">
        <hero main-title="Blogs"></hero>
        <div class="columns is-multiline">
            <div class="column is-three-fifths is-offset-one-fifth">
                <success-box :message="successMessage" v-if="showSuccessMessage"></success-box>
                <div class="box custom-box" v-if="hasInventions">
                    <invention-list :invention-list="inventions" :user="user" v-on:open-modal="setModal"></invention-list>
                </div>
                <error-box message="No inventions found" v-if="!hasInventions"></error-box>
            </div>
        </div>
        <delete-modal :title="modalTitle" :delete-url="modalUrl" :active="modalActive" :content="modalContent"
                      :entry-id="modalId" v-on:close-modal="toggleModal"></delete-modal>
    </div>
</template>

<script>
import InventionList from './InventionListComponent';

export default {
    components: {
        InventionList,
        ErrorBox,
        SuccessBox,
        DeleteModal
    },
    name: "InventionsComponent",
    data() {
        return {
            inventions: [],
            user: {},
            modalActive: false,
            modalTitle: '',
            modalContent: '',
            modalUrl: '',
            modalId: 0,
            successMessage: ''
        }
    },
    props: {
        allInventions: {
            type: Array,
            required: true
        },
        currentUser: {
            type: Object,
            required: true
        }
    },
    methods: {
        toggleModal(info) {
            this.modalActive = !this.modalActive;

            if(info.id !== 0) {
                this.inventions = _.remove(this.inventions, blg => blg.id !== info.id);
                this.successMessage = info.message;
            }
        },
        setModal(data) {
            this.modalId = data.id;
            this.modalTitle = data.title;
            this.modalContent = data.content;
            this.modalUrl = data.url;
            this.toggleModal({id: 0});
        }
    },
    created() {
        this.inventions = this.allInventions;
        this.user = this.currentUser;
    },
    computed: {
        hasInventions() {
            return !!this.inventions.length;
        },
        showSuccessMessage() {
            return this.successMessage !== '';
        }
    }

}
</script>

<style scoped>

</style>
