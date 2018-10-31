<template>
	<div class="modal" :class='openmodal'>
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<p class="modal-card-title">Add New Job</p>
				<button class="delete" aria-label="close" @click='close'></button>
			</header>
			<section class="modal-card-body">
				<div class="field field1">
					<label>Title</label>
					<div class="control">
						<input class="input" type="text" placeholder="Title" v-model="list.title" maxlength="30">
					</div>
					<small v-if="errors.title" class="has-text-danger">{{ errors.title[0] }}</small>
				</div>
				<div class="field field1">
					<label>Company</label>
					<div class="control">
						<input class="input" type="text" placeholder="Company" v-model="list.company" maxlength="30">
					</div>
					<small v-if="errors.company" class="has-text-danger">{{ errors.company[0] }}</small>
				</div>
				<div class="panel panel-success field1">
					<div class="panel-heading">City of the Job</div>
					<div class="panel-body">
						<gaddress @SetCity='getCity' @Clean='clean' :gcity='city'></gaddress>
						<small v-if="error==='city'" class="has-text-danger">{{ msg }}</small>
					</div>
				</div>
				<div class="field field2">
					<label>From</label>
					<div class="control">
						<input class="input" type="date" v-model="list.date_fr">
					</div>
					<small v-if="errors.date_fr" class="has-text-danger">{{ errors.date_fr[0] }}</small>
				</div>
				<div class="field field2">
					<label>To</label>
					<div class="control">
						<input v-if="list.current!=1" ref='date_to' class="input" type="date" v-model="list.date_to">						
						<input v-else class="input readonly" type="date" readonly="readonly">
						<small v-if="error==='date_to'" class="has-text-danger">{{ msg }}</small>
					</div>
				</div>
				<div class="field field1">
					<label></label>
					<div class="control">
						<input style="text-align:center;" type="checkbox" v-model="list.current" value=1 @change='clear'> <b>I currently work in this role</b>
					</div>
				</div>
				<div class="field field1">
					<label class="field1">Timeline</label>
					<div class="control">
						<textarea class="form-control" rows="5" placeholder="Timeline" v-model="list.timeline" maxlength="300"></textarea>
					</div>
					<small v-if="errors.timeline" class="has-text-danger">{{ errors.timeline[0] }}</small>
				</div>
				<div class="field field1">
					<label>Description</label>
					<div class="control">
						<textarea class="form-control" rows="5" placeholder="Description" v-model="list.description" maxlength="300"></textarea>
					</div>
					<small v-if="errors.description" class="has-text-danger">{{ errors.description[0] }}</small>
				</div>
			</section>
			<footer class="modal-card-foot">
				<button class="button is-success" @click='save'>Save</button>
				<button class="button" @click='close'>Cancel</button>
			</footer>
		</div>
	</div>
</template>

<script>
let gaddress = require('./gaddress.vue');
	export default{
		components:{gaddress},
		props:['openmodal'],
		data(){
			return{
				list:{},
				errors:{},
				error: '', 
				msg: '',
				city: ''
			}
		},
		methods:{
			clear(){
				this.error = '';
				this.msg = '';
			},
			getCity(city){
				this.list.city = city;
			},
			clean(){
				this.list.city = null;
			},
			close(){
				this.$children[0].country = null;
				this.$children[0].state = null;
				this.$children[0].city = null;				
				this.error = '';
				this.errors = '';
				this.msg = '';
				this.$emit('closeRequest');
			},
			save(){
				if(this.list.current==1){
					this.list.date_to = null;
				}else{
					if(!this.list.date_to){
						this.error = 'date_to';
	                    this.msg = 'The date is required';
	                    this.$refs.date_to.focus();
	                    return;
	                }
					this.list.current=0;
				}
				if(!this.list.city){
					this.error = 'city';
                    this.msg = 'The city is required';
                    return;
                }
				axios.post('/jobs',this.$data.list).then((response)=> {
					this.close();
					this.$parent.lists.push(response.data);
					this.$emit('closeRequest');
					this.$parent.lists.sort(function(a,b){
						if (a.from > b.from) {
							return 1;
						}else if(a.from < b.from){
							return -1;
						}
					})
					this.list = "";
				})
				  .catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>