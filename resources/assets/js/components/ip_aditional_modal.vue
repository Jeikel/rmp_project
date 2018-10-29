<template>
	<div class="modal" :class='openmodal'>
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<p class="modal-card-title">
					Aditional Information
                </p>
				<button class="delete" aria-label="close" @click='close'></button>
			</header>
			<section class="modal-card-body">
				<div class="field field1">
					<label>Accomplishments</label>
					<div class="control">
						<textarea class="form-control" rows="5" placeholder="Accomplishments" v-model="list.accomp" maxlength="300"></textarea>
					</div>
					<small v-if="errors.accomp" class="has-text-danger">{{ errors.accomp[0] }}</small>
				</div>
				<div class="field field1">
					<label>Publications</label>
					<div class="control">
						<textarea class="form-control" rows="5" placeholder="Publications" v-model="list.publications" maxlength="300"></textarea>
					</div>
					<small v-if="errors.publications" class="has-text-danger">{{ errors.publications[0] }}</small>
				</div>
				<div class="field field1">
					<label>Projects</label>
					<div class="control">
						<textarea class="form-control" rows="5" placeholder="Projects" v-model="list.projects" maxlength="300"></textarea>
					</div>
					<small v-if="errors.projects" class="has-text-danger">{{ errors.projects[0] }}</small>
				</div>
				<div class="field field1">
					<label>Timeline of Past</label>
					<div class="control">
						<textarea class="form-control" rows="10" placeholder="Timeline of Past" v-model="list.ptimeline" maxlength="2500"></textarea>
					</div>
					<small v-if="errors.ptimeline" class="has-text-danger">{{ errors.ptimeline[0] }}</small>
				</div>
				<div class="field field1">
					<label>Description of Event</label>
					<div class="control">
						<textarea class="form-control" rows="2" placeholder="Description of Event" v-model="list.devent" maxlength="100"></textarea>
					</div>
					<small v-if="errors.devent" class="has-text-danger">{{ errors.devent[0] }}</small>
				</div>
				<div class="field field1">
					<label>Vision</label>
					<div class="control">
						<textarea class="form-control" rows="6" placeholder="Vision" v-model="list.vision" maxlength="500"></textarea>
					</div>
					<small v-if="errors.vision" class="has-text-danger">{{ errors.vision[0] }}</small>
				</div>
				<div class="field field1">
					<label>Obstacles to Achieving Vision</label>
					<div class="control">
						<textarea class="form-control" rows="6" placeholder="Obstacles to Achieving Vision" v-model="list.obstacle" maxlength="500"></textarea>
					</div>
					<small v-if="errors.obstacle" class="has-text-danger">{{ errors.obstacle[0] }}</small>
				</div>
				<div class="field field1">
					<label>Open to have Meetings regarding</label>
					<div class="control">
						<textarea class="form-control" rows="4" placeholder="Open to have Meetings regarding" v-model="list.openreg" maxlength="250"></textarea>
					</div>
					<small v-if="errors.openreg" class="has-text-danger">{{ errors.openreg[0] }}</small>
				</div>
				<div class="field field1">
					<label>Ways to Assist Me</label>
					<div class="control">
						<textarea class="form-control" rows="4" placeholder="Ways to Assist Me" v-model="list.waysta" maxlength="250"></textarea>
					</div>
					<small v-if="errors.waysta" class="has-text-danger">{{ errors.waysta[0] }}</small>
				</div>
				<div class="field field1">
					<label>Why Work with me</label>
					<div class="control">
						<textarea class="form-control" rows="4" placeholder="Why Work with me" v-model="list.whywork" maxlength="250"></textarea>
					</div>
					<small v-if="errors.whywork" class="has-text-danger">{{ errors.whywork[0] }}</small>
				</div>
				<div class="field field1">
					<label>Mission</label>
					<div class="control">
						<textarea class="form-control" rows="4" placeholder="Mission" v-model="list.mission" maxlength="250"></textarea>
					</div>
					<small v-if="errors.mission" class="has-text-danger">{{ errors.mission[0] }}</small>
				</div>
				<div class="field field1">
					<label>Current Goals</label>
					<div class="control">
						<textarea class="form-control" rows="6" placeholder="Current Goals" v-model="list.currentg" maxlength="500"></textarea>
					</div>
					<small v-if="errors.currentg" class="has-text-danger">{{ errors.currentg[0] }}</small>
				</div>
				<div class="panel panel-success field1">
					<div class="panel-heading">Favorite Place in the World</div>
					<div class="panel-body">
						<gaddress @SetCity='getFCity' @Clean='fClean' :gcity='fcity'></gaddress>
					</div>
				</div>
			</section>
			<footer class="modal-card-foot">
				<button class="btn btn-success" @click='update'>Save</button>
				<button class="btn btn-secondary" @click='close'>Cancel</button>
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
				items: [],
				fcity: ''
			}
		},

		created(){
	        axios.get('/indprofile').then((response) => {
	                this.items = response.data;
	                this.fcity = this.items[0].fcity;  
	        });            
        }, 

		methods:{
			getFCity(city){
				this.list.fcity = city;
			},
			fClean(){
				this.list.oaddress = null;
				this.list.fcity = null;
			},
			close(){
				this.$emit('closeRequest')
				this.errors = ''
			},
			update(){
				axios.patch(`/indprofile/${this.list.id}`,this.$data.list).then((response)=> this.close())
					.catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>