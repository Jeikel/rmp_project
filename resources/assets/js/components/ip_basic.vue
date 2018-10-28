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
                <div class="pull-right image-upload">
                    <label for="file-input">
                        <div v-if="image">
                            <img :src="image" class="img-circle">
                        </div>
                        <div v-else-if="item.image_name">
                            <img :src="'images/avatar/' + item.image_name + '?cache=none'" class="img-circle">
                        </div>
                        <div v-else>
                            <img src="images/avatar/avatar.png" class="img-circle">
                        </div>
                    </label> 
                    <input id="file-input" name="file" type="file" accept="image/gif, image/jpeg, image/png" v-on:change="onImageChange" class="form-control">
                </div>
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
                <div class="form-group">
                    <img v-if="item.rating==0.5" src="images/star-half.png">
                    <img v-else-if="item.rating>1" src="images/star-on.png">
                    <img v-else src="images/star-off.png">
                    <img v-if="item.rating==1.5" src="images/star-half.png">
                    <img v-else-if="item.rating>=2" src="images/star-on.png">
                    <img v-else src="images/star-off.png">
                    <img v-if="item.rating==2.5" src="images/star-half.png">
                    <img v-else-if="item.rating>=3" src="images/star-on.png">
                    <img v-else src="images/star-off.png">
                    <img v-if="item.rating==3.5" src="images/star-half.png">
                    <img v-else-if="item.rating>=4" src="images/star-on.png">
                    <img v-else src="images/star-off.png">
                    <img v-if="item.rating==4.5" src="images/star-half.png">
                    <img v-else-if="item.rating==5" src="images/star-on.png">
                    <img v-else src="images/star-off.png">
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
            onImageChange(e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(files[0]);
            },
            createImage(file) {
                let reader = new FileReader();
                let vm = this;
                reader.onload = (e) => {
                    vm.image = e.target.result;
                    axios.post('/image',{image: vm.image}).then(response => {
                        response.data.success;
                    });
                };
                reader.readAsDataURL(file);
            },
            close(){
                this.updateActive = ''
            }
        }
    }
</script>
