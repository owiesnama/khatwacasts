<template>
    <div class="border-b mb-6 w-full outline-none block">

        <button @click="$refs.fileInput.click()"
                class="border mb-1 border-gray-light outline-none hover:bg-gray-300 hover:bg-indigo-900
    hover:text-white rounded-full px-5 py-1 text-sm text-light"
        >
            <span v-if="value">
            Selected File: {{value.name}}
            </span>
            <span v-else>Choose file</span>
        </button>
        <p></p>
        <input class="hidden"
               v-bind="$attrs"
               @change="updateFile"
               ref="fileInput"
               type="file"
        >
    </div>
</template>
<script>
    export default{
        props: {
            value: File
        },

        inheritAttrs: false,

        methods: {
            updateFile(event){
                this.$emit('input', event.target.files[0])
            }
        }
    }
</script>