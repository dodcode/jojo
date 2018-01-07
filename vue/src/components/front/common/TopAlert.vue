<template>
    <div class="section section-notifications" id="notifications">
        <div v-for="(notification, index) in notifications" v-bind:class="'alert alert-' + notification.type+' alert-with-icon alert-dismissible fade show'" data-notify="container">
            <div class="container">
                <div class="alert-wrapper">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" v-on:click="remove(index)">
                        <i class="fa fa-close"></i>
                    </button>
                    <div class="message">
                        <i class="fa fa-bell-o"></i> {{ notification.message }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'

    export default {
        name: "top-alert",
        computed: {
            ...mapGetters({
                notifications: 'getNotifications'
            })
        },
        mounted() {
            console.log(this.notifications)
        },
        methods: {
            remove: function (index) {
                this.$store.dispatch('remove', index)
                console.log(this.notifications)
            }
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

    #notifications {
        .alert-dismissible {
            .close {
                position: relative;
                top: 0;
                right: 0;
                padding: 0;
            }
        }
    }
</style>