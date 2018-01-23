<template>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="card mb-3">
                <div class="card-header">
                    <h3><i class="fa fa-check-square-o"></i> Simple form</h3>
                    Be sure to use an appropriate <i>type</i> attribute on all inputs (e.g., <i>email</i> for email address or <i>number</i> for numerical information) to take advantage of newer input controls like email verification, number selection, and more.
                </div>

                <div class="card-body">

                    <form action="/api/article/create" v-on:submit="save">
                        <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title" aria-describedby="title-help" placeholder="Enter title" required>
                            <small id="title-help" class="form-text text-muted">The title for this article.</small>
                        </div>

                        <div class="form-group col-md-12" id="editor">
                            <label>Content</label>
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
    import EnvConfig from '../../../config'

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
                let url = EnvConfig.host + $(event.target).attr('action')

                var data = $(event.target).serialize()
                // data += '&content=' + $('.v-show-content').html()+'&author_id=1'
                data += '&content=' + $('.v-show-content').html()

                var _this = this

                axios.post(url, data, {
                    headers: {
                        'Accept': 'application/json',
                        // 'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(function (response) {
                    _this.$store.dispatch('send', {
                        type: 'success',
                        title: 'Saved!',
                        message: 'You\'ve successfully saved this article!'
                    })
                }).catch(function(error) {
                    _this.$store.dispatch('send', {
                        type: 'warning',
                        title: 'Warning!',
                        message: 'Something error has occurred!'
                    })
                    console.log(error)
                })
            }
        }
    }
</script>

<style lang="scss" scoped>
    #editor {
        .v-note-wrapper {
            z-index: inherit;
        }
    }
</style>