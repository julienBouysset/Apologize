<template>
    <button v-on:click="count++">
        Vous m\'avez cliqué {{ count }} fois.
    </button>
</template>
<script>
    export default {
        data() {
            return {
                count: 0
            }
        }
    }
</script>