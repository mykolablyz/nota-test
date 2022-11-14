<script setup>
defineProps(['content'])
</script>

<template>

    <div>
        <div v-for="(layout, i) in content" :key="i">
            <pre v-text="JSON.stringify(layout, null, 4)"></pre>
        </div>
    </div>

</template>


