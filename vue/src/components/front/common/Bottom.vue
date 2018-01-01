<template>
    <div class="footer register-footer text-center">
        <h6>&copy; {{ copyrightYear }}, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
    </div>
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