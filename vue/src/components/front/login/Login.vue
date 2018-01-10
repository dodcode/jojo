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
            <input type="hidden" v-bind:name="csrf_param" v-bind:value="csrf_token" />
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="LoginForm[username]">

            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password" name="LoginForm[password]">
            <button class="btn btn-danger btn-block btn-round" type="submit">Login</button>
        </form>
        <div class="forgot">
            <a href="javascript:;" v-on:click="register" class="btn btn-link btn-danger">Register</a>
            <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
        </div>
    </div>
</template>

<script>
    export default {
        http: {
            headers: {
                Accept: 'application/json'
            }
        },
        name: "login",
        data() {
            return  {
                csrf_token: 'waiting',
                csrf_param: '_csrf'
            }
        },
        mounted() {
            // get csrf token.
            this.$http.get('http://dodcode.me/api/security/csrf').then(response => {
                this.csrf_token = response.body.csrf_token;
                this.csrf_param = response.body.csrf_param;
            }, error => {

            });
        },
        methods: {
            register: function () {
                this.$store.dispatch('send', {type: 'danger', title: 'test', message: 'Not opened yet!'})
            }
        }
    }
</script>

<style scoped>

</style>