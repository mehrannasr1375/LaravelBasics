<template>
    <div>
        <button class="butn-1" :type="type" v-text="text">click me!</button>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted!')
        },
        props:[
            'text',
            'type'
        ]
    }
</script>

<style>
    .butn-1 {
        position: relative;
        padding: 8px 16px;
        font-weight: bold;
        font-size: 12px;
        background-color: transparent;
        border:none;
        border-bottom:2px solid purple;
        transition: .3s ease all;
        overflow: hidden;
        /*z-index: 10 !important;*/
    }
    .butn-1:hover {
        color:white;
    }

        .butn-1:after {
            position: absolute;
            transition: .3s ease all;
            content:'';
            z-index: -1;
            right:0;
            left:0;
            bottom:0;
            height:0%;
            background-color: purple;
        }

            .butn-1:hover:after {
                height:100%;
            }
</style>
