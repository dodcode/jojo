<template>
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <breadcrumb></breadcrumb>

                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>


    import Breadcrumb from "./Breadcrumb";

    export default {
        components: {Breadcrumb},
        name: "right",
        created () {
            console.log('right created')
        },
        mounted () {
            console.log('right mounted')
        }
    }
</script>

<style scoped>
    .content-page {
        margin-left: 250px;
        overflow: hidden; }

    .content-page .content {
        padding: 0 5px;
        margin-top: 50px; }

    #admin.enlarged .content-page {
        margin-left: 70px; }
</style>