<template>
    <div class="card card-register">
        <h3 class="title">Welcome</h3>
        <div class="social-line text-center">
            <a href="#pablo" class="btn btn-neutral btn-facebook btn-just-icon">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-neutral btn-google btn-just-icon">
                <i class="fa fa-google-plus"></i>
            </a>
            <a href="#pablo" class="btn btn-neutral btn-twitter btn-just-icon">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
        <form class="register-form" action="/front/login" method="post">
            <input type="hidden" name="_csrf" v-bind:value="csrf" />
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="LoginForm[username]">

            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="LoginForm[password]">
            <button class="btn btn-danger btn-block btn-round" type="submit">Login</button>
        </form>
        <div class="forgot">
            <router-link :to="'/register'" class="btn btn-link btn-danger">Register</router-link>
            <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "login",
        data() {
            return  {
                csrf: 'none'
            }
        },
        mounted() {
            // get csrf token.
        }
    }
</script>

<style scoped>

</style>