<template>
    <div class="content-page">

       <router-view></router-view>

    </div>
</template>

<script>


    export default {
        name: "content",
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