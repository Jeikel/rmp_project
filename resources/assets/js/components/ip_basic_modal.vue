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
				<div class="panel panel-success">
					<div class="panel-heading">Name Information</div>
					<div class="panel-body">
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
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Phone Information</div>
					<div class="panel-body">
						<div class="field field2">
							<label>Country Code</label>
								<select v-model="list.bp_code" class="select">
								    <option :value="null">Select Country Code</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='bp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field2">
							<label>Business Phone</label>
							<div class="control">
								<input class="input" type="tel" placeholder="Business Phone" v-model="list.bphone" maxlength="14" v-mask="'(###) ###-####'">
							</div>
							<small v-if="error==='bphone'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field2">
							<label>Country Code</label>
								<select v-model="list.cp_code" class="select">
								    <option :value="null">Select Country Code</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field2">
							<label>Cell Phone</label>
							<div class="control">
								<input class="input" type="tel" placeholder="Cell Phone" v-model="list.cphone" maxlength="14" v-mask="'(###) ###-####'">
							</div>
							<small v-if="error==='cphone'" class="has-text-danger">{{ msg }}</small>
						</div>
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Office Address Information</div>
					<div class="panel-body">
						<div class="field field3">
							<label>Country</label>
								<select class="select">
								    <option :value="null">Select Country</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field3">
							<label>State</label>
								<select class="select">
								    <option :value="null">Select State</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field3">
							<label>City</label>
								<select class="select">
								    <option :value="null">Select City</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field1">
							<label>Office Address</label>
							<div class="control">
								<input class="input" type="text" placeholder="Office Address" v-model="list.oaddress" maxlength="50" required>
							</div>
							<small v-if="errors.oaddress" class="has-text-danger">{{ errors.oaddress[0] }}</small>
						</div>
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Mailing Address Information</div>
					<div class="panel-body">
						<div class="field field3">
							<label>Country</label>
								<select class="select">
								    <option :value="null">Select Country</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field3">
							<label>State</label>
								<select class="select">
								    <option :value="null">Select State</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field3">
							<label>City</label>
								<select class="select">
								    <option :value="null">Select City</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field1">
							<label>Mailing Address</label>
							<div class="control">
								<input class="input" type="text" placeholder="Office Address" v-model="list.maddress" maxlength="50" required>
							</div>
							<small v-if="errors.maddress" class="has-text-danger">{{ errors.maddress[0] }}</small>
						</div>
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Billing Address Information</div>
					<div class="panel-body">
						<div class="field field3">
							<label>Country</label>
								<select class="select">
								    <option :value="null">Select Country</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field3">
							<label>State</label>
								<select class="select">
								    <option :value="null">Select State</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field3">
							<label>City</label>
								<select class="select">
								    <option :value="null">Select City</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name + ' (+' + country.phonecode + ')' }}
								    </option>
							  	</select>
							<small v-if="error==='cp_code'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field1">
							<label>Billing Address</label>
							<div class="control">
								<input class="input" type="text" placeholder="Office Address" v-model="list.baddress" maxlength="50" required>
							</div>
							<small v-if="errors.baddress" class="has-text-danger">{{ errors.baddress[0] }}</small>
						</div>
					</div>
				</div>
				<div class="field">
					<label>Hometown</label>
					<div class="control">
						<input class="input" type="text" placeholder="Hometown" v-model="list.hometown" maxlength="20">
					</div>
					<small v-if="errors.hometown" class="has-text-danger">{{ errors.hometown[0] }}</small>
				</div>
				<div class="field">
					<label>About Me Description</label>
					<div class="control">
						<textarea class="form-control" rows="4" placeholder="About Me Description" v-model="list.about" maxlength="200"></textarea>
					</div>
					<small v-if="errors.about" class="has-text-danger">{{ errors.about[0] }}</small>
				</div>
				<div class="field">
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
				user: [],
				error: '',
				msg: '',
				country: '',
				countries:{}
			}
		},

		mounted(){
            axios.get('/countries').then((response) => {
                this.countries = response.data;
            });
        },

		methods:{
			close(){
				this.$emit('closeRequest')
				this.errors = '';
				this.error = '';
				this.msg = '';
			},
			update(){
				if(this.list.bphone){
					if(!this.list.bp_code){
                    	this.error = 'bp_code';
                    	this.msg = 'Select a code';
                    	return;
                    }
					if(this.list.bphone.length < 14){
                    	this.error = 'bphone';
                    	this.msg = 'You must fill the whole number';
                    	return;
                    }
                }
                if(this.list.cphone){
                	if(!this.list.cp_code){
                    	this.error = 'cp_code';
                    	this.msg = 'Select a code';
                    	return;
                    }
                    if(this.list.cphone.length < 14){
                    	this.error = 'cphone';
                    	this.msg = 'You must fill the whole number';
                    	return;
                    }
                }
				axios.patch(`/indprofile/${this.list.id}`,this.$data.list).then((response)=> this.close())
					.catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>