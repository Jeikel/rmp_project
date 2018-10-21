<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Basic Information
                <span class="btn-group pull-right">
                    <button class="btn btn-success" v-on:click="openUpdate()">
                        <span class="glyphicon glyphicon-pencil "></span>
                    </button>
                </span>
            </h4>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body" v-for="item in items">
            <div class="content">
                <div class="pull-right"><img src="/images/avatar.png" class="img-circle" width="100" height="100"></div>                 
                <div class="form-group">
                    <label style="font-size: 4vw">
                        {{item.name + ' ' +
                          item.mname + ' ' + 
                          item.lname}}
                    </label>
                </div>
                <div class="form-group">
                    <label>{{item.email}}</label>
                </div>                
            </div>
        </div>
        <modal :openmodal='updateActive' @closeRequest='close'></modal>
    </div>   
</template>

<script>
    let modal = require('./ip_basic_modal.vue');
    export default{
        components:{modal},
        data(){
            return{
                updateActive : '',
                errors:{},
                items: []
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
