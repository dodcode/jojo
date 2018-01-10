<template>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <!-- Modal -->
            <div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{ notification.title }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{ notification.message }}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" v-bind:class="'btn btn-'+notification.type" data-dismiss="modal">Ok</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'

    export default {
        name: "modal",
        computed: {
            ...mapGetters({
                notification: 'lastNotification'
            })
        },
        watch: {
            // When there is a new notification arrived, show it!
            notification: function (newValue, oldValue) {
                $('#notification').modal()
            }
        }
    }
</script>

<style scoped>

</style>