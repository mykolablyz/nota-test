<script setup>
import { Head } from '@inertiajs/inertia-vue3'
defineProps(['collectionItem'])
import RenderFlexibleContent from '@/Components/FlexibleContent/RenderFlexibleContent.vue'
</script>

<template>
    <Head title="Dashboard" />


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <render-flexible-content :content="collectionItem.content" />

            </div>
        </div>
</template>
