<template>
    <footer class="footer">
        <h6 class="text-center">&copy; {{ copyrightYear }}, theme <i class="fa fa-heart heart"></i> by Creative Tim | powerd by <a target="_blank" href="https://github.com/dodcode/jojo"> jojo</a></h6>
    </footer>
</template>

<script>
    export default {
        name: "bottom",
        data() {
            return {
                copyrightYear: new Date().getFullYear()
            }
        }
    }
</script>

<style scoped>
</style>