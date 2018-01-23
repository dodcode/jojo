<template>
    <div class="wrapper">
        <div class="main">
            <div class="section section-buttons">
                <div class="container">
                    <div class="tim-title">
                        <h2>Basic Elements</h2>
                    </div>
                    <div class="row">
                        <editor></editor>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import editor from '../../common/Editor'
    export default {
        name: "main-content",
        components: {
            editor
        }
    }
</script>

<style scoped>

</style>