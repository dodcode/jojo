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
        <form class="register-form">
            <label>Email</label>
            <input type="text" class="form-control" placeholder="Email">

            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password">

            <label>Confirm Password</label>
            <input type="password" class="form-control" placeholder="Confirm Password">
            <button class="btn btn-danger btn-block btn-round" @click="register">Register</button>
        </form>
        <div class="forgot">
            <router-link :to="'/'" class="btn btn-link btn-danger">Login</router-link>
            <a href="#" class="btn btn-link btn-danger">Forgot password?</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "register",
        methods: {
            register () {
                var params = {
                    pageinfo: {
                        index: 12,
                        count: 10,
                        size: 10
                    },
                    sortinfo: {
                        field: 'id',
                        type: 'desc'
                    }
                };
                this.$http.post('/get-list', params).then((res) => {
                    console.log(res.data);
                }, (error) => {
                    console.log(error);
                });
            }
        }
    }
</script>

<style scoped>

</style>