<script setup>
defineProps({
    layout: {type: Object, required: true}
})

</script>

<template>
    <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
            <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                 src="https://dummyimage.com/104x94">
            <div class="flex-grow">
                <h2 class="text-gray-900 title-font font-medium" v-text="layout.attributes.title" />
                <p class="text-gray-500" v-text="layout.attributes.title" />
            </div>
        </div>
    </div>

</template>

