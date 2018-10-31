<template>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Job Experience
                <span class="btn-group pull-right">
                    <button class="btn btn-success" v-on:click="openAdd()">
                        <span class="glyphicon glyphicon-plus "></span>
                    </button>
                </span>
            </h4>
            <div class="clearfix"></div>
        </div>
        <div class="panel-body" v-for="item,key in temp">
            <div v-if="key>0" class="separator">
                <hr style="border:1px;">
            </div> 
            <div class="row">
                <div class="col-xs-8 col-sm-10 col-md-10 col-lg-10">                
                    <div>
                        <b>Title: </b> {{ item.title }}
                    </div>
                    <div>
                        <b>Company: </b> {{ item.company }}
                    </div>
                    <div>
                        <b>City: </b> {{ item.city_name + ' (' + 
                                         item.state_name + ' - ' +
                                         item.iso + ')' }}
                    </div>
                    <div>
                        <b>From: </b>{{ item.date_fr }} 
                    </div>
                    <div v-if="item.date_to">
                        <b>To: </b> {{ item.date_to }} 
                    </div>
                    <div v-else>
                        <b>To: </b> {{ 'Currently Job' }} 
                    </div>
                    <div v-if="item.timeline">
                        <b>Timeline: </b> {{ item.timeline }}
                    </div>
                    <div v-if="item.description">
                        <b>Description: </b> {{ item.description }}
                    </div>
                </div>          
                <div class="col-xs-4 col-sm-2 col-md-2 col-lg-2">                   
                    <p class="pull-right btn btn-danger" @click="del(key,item.id)">
                        <span class="glyphicon glyphicon-trash"></span>
                    </p>
                     <p class="pull-right btn btn-info" @click="openUpdate(key)">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </p>
                </div>  
            </div>     
        </div>   
        <Add :openmodal='addActive' @closeRequest='close'></Add>
        <Update :openmodal='updateActive' @closeRequest='close'></Update>
    </div>   
</template>

<script>
let Add = require('./ip_add_job.vue');
let Update = require('./ip_update_job.vue');
    export default{
        components:{Add,Update},
        data(){
            return{
                addActive : '',
                updateActive : '',
                lists:{},
                items: [],
                errors:{},
                temp:''
            }
        },        
        mounted(){
            axios.post('/getJobs').then((response)=> {
                this.lists = this.temp = response.data;
            })
            .catch((error) => this.errors = error.response.data.errors)
        },
        methods:{
            openAdd(){
                this.addActive = 'is-active';                
            },
            openUpdate(key){
                this.$children[1].list = this.temp[key];
                this.updateActive = 'is-active';
            },
            close(){
                this.addActive = this.showActive = this.updateActive = '';
                axios.post('/getJobs').then((response)=> {
                    this.lists = this.temp = response.data;
                })
                .catch((error) => this.errors = error.response.data.errors)
            },
            del(key,id){
                axios.delete(`/jobs/${id}`)
                .then((response)=> {this.lists.splice(key,1);this.loading = !this.loading})
                .catch((error) => this.errors = error.response.data.errors) 
            }
        }
    }
</script>