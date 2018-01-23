<template>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-users"></i> Article Management</h3>
                    You can view/add/delete/update articles here.
                    <router-link :to="'/editor'" class="btn btn-primary"><i class="fa fa-plus"></i>Add </router-link>
                </div>
                <div class="card-body">
                    <table id="article-list" class="table table-bordered table-responsive-xl table-hover display">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Publish</th>
                            <th>Created Time</th>
                            <th>Updated Time</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="article in articles">
                            <td>{{ article.title }}</td>
                            <td>{{ article.author.username }}</td>
                            <td>{{ article.publish }}</td>
                            <td>{{ article.created_at }}</td>
                            <td>{{ article.updated_at }}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div><!-- end card-->
        </div>
    </div>
</template>

<script>
    import 'datatables.net-bs4'

    import axios from 'axios'
    import EnvConfig from '../../../config'
    import { mapGetters } from 'vuex'

    export default {
        name: "article-list",
        computed: {
            ...mapGetters({
                articles: 'getArticles'
            })
        },
        mounted() {
            let url = EnvConfig.host + '/api/article?expand=author'
            let _this = this
            axios.get(url, {
                headers: {
                    'Accept': 'application/json'
                }
            }).then(function (response) {
                EnvConfig.log(response)
                _this.$store.dispatch('append', response.data)

                // $('#article-list').DataTable()
            }).catch(function (error) {

            })
        }
    }
</script>

<style scoped>

</style>