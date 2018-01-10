<template>
    <div class="content">
        <div class="container-fluid">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">media</h4>
                <p>The place to mange medias.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary" v-on:click="notify">modal</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Modal from "../common/Modal";

    export default {
        components: {Modal},
        name: "right-media",
        methods: {
            notify: function () {
                this.$store.dispatch('send', {
                    type: 'success',
                    title: 'You win!',
                    message: 'Congratulations! You win the game in KPL!'
                })
            }
        },
    }
</script>

<style scoped>

</style>