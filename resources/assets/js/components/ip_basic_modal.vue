<template>
	<div class="modal" :class='openmodal'>
		<div class="modal-background"></div>
		<div class="modal-card">
			<header class="modal-card-head">
				<p class="modal-card-title">
					Basic Information
                </p>
				<button class="delete" aria-label="close" @click='close'></button>
			</header>
			<section class="modal-card-body">
				<div class="field field3">
					<label>Firts Name</label>
					<div class="control">
						<input class="input readonly" type="text" placeholder="Firts Name" v-model="list.name" maxlength="50" readonly="readonly">
					</div>
					<small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
				</div>
				<div class="field field3">
					<label>Middle Name</label>
					<div class="control">
						<input class="input" type="text" placeholder="Middle Name" v-model="list.mname" maxlength="50" required>
					</div>
					<small v-if="errors.mname" class="has-text-danger">{{ errors.mname[0] }}</small>
				</div>
				<div class="field field3">
					<label>Last Name</label>
					<div class="control">
						<input class="input" type="text" placeholder="Last Name" v-model="list.lname" maxlength="50" required>
					</div>
					<small v-if="errors.lname" class="has-text-danger">{{ errors.lname[0] }}</small>
				</div>
				<div class="field field2">
					<label>Business Phone</label>
					<div class="control">
						<input class="input" type="tel" placeholder="Business Phone" v-model="list.bphone" maxlength="10" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
					</div>
					<small v-if="errors.bphone" class="has-text-danger">{{ errors.bphone[0] }}</small>
				</div>
				<div class="field field2">
					<label>Cell Phone</label>
					<div class="control">
						<input class="input" type="tel" placeholder="Cell Phone" v-model="list.cphone" maxlength="10" onkeyup="this.value=this.value.replace(/[^\d]/,'')">
					</div>
					<small v-if="errors.cphone" class="has-text-danger">{{ errors.cphone[0] }}</small>
				</div>
				<div class="field field1">
					<label>Hometown</label>
					<div class="control">
						<input class="input" type="text" placeholder="Hometown" v-model="list.hometown" maxlength="20">
					</div>
					<small v-if="errors.hometown" class="has-text-danger">{{ errors.hometown[0] }}</small>
				</div>
				<div class="field field1">
					<label>About Me Description</label>
					<div class="control">
						<textarea class="form-control" rows="4" placeholder="About Me Description" v-model="list.about" maxlength="200"></textarea>
					</div>
					<small v-if="errors.about" class="has-text-danger">{{ errors.about[0] }}</small>
				</div>
				<div class="field field1">
					<label>Back Story Personal</label>
					<div class="control">
						<textarea class="form-control" rows="4" placeholder="Back Story Personal" v-model="list.bstory" maxlength="200"></textarea>
					</div>
					<small v-if="errors.bstory" class="has-text-danger">{{ errors.bstory[0] }}</small>
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
	export default{
		props:['openmodal'],
		data(){
			return{
				list:{},
				errors:{},
				user: []
			}
		},

		methods:{
			close(){
				this.$emit('closeRequest')
				this.errors = '';
			},
			update(){
			axios.patch(`/indprofile/${this.list.id}`,this.$data.list).then((response)=> this.close())
				  .catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>