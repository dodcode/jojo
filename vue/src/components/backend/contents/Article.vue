<template>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-check-square-o"></i> Simple form</h3>
                    Be sure to use an appropriate <i>type</i> attribute on all inputs (e.g., <i>email</i> for email address or <i>number</i> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
                </div>

                <div class="card-body">

                    <form action="http://dodcode.me/api/article/create" v-on:submit="save">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="title-help" placeholder="Enter title" required>
                            <small id="title-help" class="form-text text-muted">The title for this article.</small>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="content">Content</label>
                            <mavon-editor v-bind="setting"></mavon-editor>
                            <small id="content-help" class="form-text text-muted">The content for this article.</small>
                        </div>

                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" name="publish" class="form-check-input" value="1">
                                publish
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div><!-- end card-->
        </div>
    </div>
</template>

<script>
    import MavonEditor from 'mavon-editor'
    import 'mavon-editor/dist/css/index.css'
    import axios from 'axios'

    export default {
        name: "right-article",
        data () {
            return {
                setting: {
                    placeholder: 'start writing...',
                    // subfield: false,
                    // default_open: 'preview'
                }
            }
        },
        components: {
            'mavon-editor': MavonEditor.mavonEditor
        },
        methods: {
            save: function (event) {
                event.preventDefault()
                let url = $(event.target).attr('action')
                // var dataArray = $(event.target).serializeArray()
                // dataArray.push({
                //     name: 'content',
                //     value: $('.v-show-content').html()
                // })

                // var data = {}
                // for (var i in dataArray) {
                //     data[dataArray[i].name] = dataArray[i].value
                // }

                var data = $(event.target).serialize()
                data += '&content=' + $('.v-show-content').html()+'&author_id=1'
                console.log(data)

                axios.post(url, data, {
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(function (response) {
                    console.log(response)
                }).catch(function(error) {
                    console.log(error)
                })
            }
        }
    }
</script>

<style scoped>

</style>