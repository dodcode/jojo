<template>
    <div class="col-xl-12" id="editor">
        <mavon-editor v-bind="setting"></mavon-editor>
    </div>
</template>

<script>
    import MavonEditor from 'mavon-editor'
    import 'mavon-editor/dist/css/index.css'
    var content = '# abc\n' +
            '## a\n' +
            '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
        '## b\n' +
            '## c\n';

    export default {
        name: "editor",
        data () {
            return {
                setting: {
                    value: content,
                    placeholder: 'start writing...',
                    toolbarsFlag: false,
                    subfield: false,
                    default_open: 'preview'
                }
            }
        },
        components: {
            'mavon-editor': MavonEditor.mavonEditor
        },
    }
</script>

<style scoped>
    #editor {
        margin: auto;
        width: 80%;
    }
</style>