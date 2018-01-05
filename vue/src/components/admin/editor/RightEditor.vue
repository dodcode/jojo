<template>
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">mavon text editor</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">mavon text editor</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">mavon</h4>
                <p>a vue based markdown editor.</p>
            </div>

            <div class="row">
                <div class="col-xl-12" id="editor">
                    <mavon-editor v-bind="setting"></mavon-editor>
                    <!--<mavon-editor-->
                            <!--v-bind:value="'# abc'"-->
                            <!--v-bind:placeholder="'start writing...'"-->
                            <!--v-bind:toolbarsFlag="false"-->
                            <!--v-bind:subfield="false"-->
                            <!--v-bind:default_open="'preview'"></mavon-editor>-->
                    <!--<mavon-editor></mavon-editor>-->
                </div>
            </div>

            <!--<div class="alert alert-success" role="alert">-->
                <!--<h4 class="alert-heading">Trumbowyg - A lightweight WYSIWYG editor</h4>-->
                <!--<p>Light, translatable and customisable jQuery plugin. Beautiful design, generates semantic code, comes with a powerful API. <a target="_blank" href="https://alex-d.github.io/Trumbowyg/">Trumbowyg Documentation</a></p>-->
            <!--</div>-->


            <!--<div class="row">-->

                <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">-->
                    <!--<div class="card mb-3">-->
                        <!--<div class="card-header">-->
                            <!--<h3><i class="fa fa-file-o"></i> WYSIWYG editor example</h3>-->
                            <!--Editor and generated code are optimized for HTML5 support. Compatible with all recents browsers like IE9+, Chrome, Opera and Firefox.-->
                        <!--</div>-->

                        <!--<div class="card-body">-->

                            <!--<textarea rows="3" class="form-control editor" name="content"></textarea>-->

                        <!--</div>-->
                    <!--</div>&lt;!&ndash; end card&ndash;&gt;-->
                <!--</div>-->

            <!--</div>-->



        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->
</template>

<script>
    // import '../../assets/pike-admin/plugins/switchery/switchery.min.css'
    // import '../../assets/pike-admin/plugins/trumbowyg/ui/trumbowyg.min.css'
    //
    // import '../../assets/pike-admin/js/jquery.scrollTo.min'
    // import '../../assets/pike-admin/plugins/switchery/switchery.min'
    // import '../../assets/plugins/trumbowyg/trumbowyg.min'

    // import icons from '../../assets/pike-admin/plugins/trumbowyg/ui/icons.svg'

    import MavonEditor from 'mavon-editor'
    import 'mavon-editor/dist/css/index.css'

    export default {
        name: "right-editor",
        data () {
            return {
                setting: {
                    value: '# abc',
                    placeholder: 'start writing...',
                    toolbarsFlag: false,
                    // subfield: false,
                    // default_open: 'preview'
                }
            }
        },
        components: {
            'mavon-editor': MavonEditor.mavonEditor
        },
        mounted() {
            // $('.editor').trumbowyg({
            //     svgPath: '../src/assets/pike-admin/plugins/trumbowyg/ui/icons.svg'
            // });
        }
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