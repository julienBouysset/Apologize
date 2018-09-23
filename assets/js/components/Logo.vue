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