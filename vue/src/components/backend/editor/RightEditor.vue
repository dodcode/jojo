<template>
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12" id="editor">
                    <mavon-editor v-bind="setting"></mavon-editor>
                </div>
                <div class="col-xl-12">
                    <a role="button" href="#" class="btn btn-primary">
                        <span class="btn-label"><i class="fa fa-check"></i></span>Submit
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import MavonEditor from 'mavon-editor'
    import 'mavon-editor/dist/css/index.css'

    export default {
        name: "right-editor",
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
    }
</script>

<style lang="scss" scoped>
    #editor {
        margin: auto;
        width: 80%;
        height: 600px;

        .v-note-wrapper {
            z-index: inherit;

        }
    }
</style>