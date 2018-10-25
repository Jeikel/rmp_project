<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Aditional Information
                <span class="btn-group pull-right">
                    <button class="btn btn-success" v-on:click="openUpdate()">
                        <span class="glyphicon glyphicon-pencil "></span>
                    </button>
                </span>
            </h4>
            <div class="clearfix"></div>
        </div>        
        <modal :openmodal='updateActive' @closeRequest='close'></modal>
    </div>   
</template>

<script>
    let modal = require('./ip_aditional_modal.vue');
    export default{
        components:{modal},
        data(){
            return{
                updateActive : '',
                errors:{},
                items: [],
                image: ''
            }
        },

        mounted(){
            axios.get('/indprofile').then((response) => {
                this.items = response.data;
            });
        },

        methods:{
            openUpdate(){
                this.$children[0].list = this.items[0];
                this.updateActive = 'is-active';
            },
            close(){
                this.updateActive = ''
            }
        }
    }
</script>
