<script setup>
import {computed, toRefs} from "vue"
const props = defineProps(['content'])
const { content } = toRefs(props)
const layouts = computed(() => JSON.parse(content.value))


</script>

<template>

    <div>
        <component is="DataComponent" v-for="(layout, i) in layouts" :key="i" :layout="layout" />
    </div>

</template>


