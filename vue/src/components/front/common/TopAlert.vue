<template>
    <div class="section section-notifications" id="notifications">
        <div class="alert alert-info alert-with-icon alert-dismissible fade show" data-notify="container">
            <div class="container">
                <div class="alert-wrapper">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <div class="message">
                        <i class="fa fa-bell-o"></i> Welcome to jojo!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "top-alert",
        mounted() {
        }
    }
</script>

<style lang="scss" scoped>
    .navbar {
        #notifications {
            width: 100%;
            &.section {
                padding: 0;
                position: static;
            }
            .alert {
                position: inherit;
                margin: 0;
            }
        }
    }
</style>