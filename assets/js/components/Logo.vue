<template>
    <p>{{ message }}</p>
</template>
<script>
    export default {
        props: ['message'],
        data() {
            return {
                message: message
            }
        }
    }
</script>
<style lang="stylus" scoped>
    p
        font-size 2em
        color #AA3333
        text-align center
</style>