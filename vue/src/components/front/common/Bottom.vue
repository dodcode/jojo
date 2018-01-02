<template>
    <footer class="footer">
        <h6 class="text-center">&copy; {{ copyrightYear }}, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
    </footer>
</template>

<script>
    export default {
        name: "footer",
        data() {
            return {
                copyrightYear: new Date().getFullYear()
            }
        }
    }
</script>

<style scoped>
</style>