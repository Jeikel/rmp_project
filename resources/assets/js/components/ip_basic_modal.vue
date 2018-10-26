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
								<input class="input" type="text" placeholder="Middle Name" v-model="list.mname" maxlength="50">
							</div>
							<small v-if="errors.mname" class="has-text-danger">{{ errors.mname[0] }}</small>
						</div>
						<div class="field field3">
							<label>Last Name</label>
							<div class="control">
								<input class="input" type="text" placeholder="Last Name" v-model="list.lname" maxlength="50">
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
						</div>
						<div class="field field2">
							<label>Business Phone</label>
							<div class="control">
								<input v-if="list.bp_code" class="input" type="tel" placeholder="Business Phone" v-model="list.bphone" maxlength="14" v-mask="'(###) ###-####'" ref="bphone">
								<input v-else class="input readonly" placeholder="Select a Code First" readonly="readonly">
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
						</div>
						<div class="field field2">
							<label>Cell Phone</label>
							<div class="control">
								<input v-if="list.cp_code" class="input" type="tel" placeholder="Cell Phone" v-model="list.cphone" maxlength="14" v-mask="'(###) ###-####'" ref="cphone">
								<input v-else class="input readonly" placeholder="Select a Code First" readonly="readonly">
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
								<select v-model="ocountry" class="select" @change='getCountryStates(1,1)'>
								    <option :value="null">Select Country</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field3">
							<label>State</label>
								<select v-model="ostate" class="select field4" @change='getStatesCities(1)'>
								    <option :value="null">Select State</option>
								    <option v-for="state in ostates" 
								            :value='state.id'>{{ state.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field3">
							<label>City</label>
								<select v-model="list.ocity" class="select field4">
								    <option :value="null">Select City</option>
								    <option v-for="city in ocities" 
								            :value='city.id'>{{ city.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field1">
							<label>Office Address</label>
							<div class="control">
								<input v-if="list.ocity" ref='oaddress' class="input" type="text" placeholder="Office Address" v-model="list.oaddress" maxlength="50">
								<input v-else class="input readonly" placeholder="Office Address - Select a City" readonly="readonly">
							</div>
							<small v-if="error==='oaddress'" class="has-text-danger">{{ msg }}</small>
						</div>
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Mailing Address Information</div>
					<div class="panel-body">
						<div class="field field3">
							<label>Country</label>
								<select v-model="mcountry" class="select" @change='getCountryStates(2,1)'>
								    <option :value="null">Select Country</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field3">
							<label>State</label>
								<select v-model="mstate" class="select field4" @change='getStatesCities(2)'>
								    <option :value="null">Select State</option>
								    <option v-for="state in mstates" 
								            :value='state.id'>{{ state.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field3">
							<label>City</label>
								<select v-model="list.mcity" class="select field4">
								    <option :value="null">Select City</option>
								    <option v-for="city in mcities" 
								            :value='city.id'>{{ city.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field1">
							<label>Mailing Address</label>
							<div class="control">
								<input v-if="list.mcity" ref='maddress' class="input" type="text" placeholder="Mailing Address" v-model="list.maddress" maxlength="50">
								<input v-else class="input readonly" placeholder="Mailing Address - Select a City" readonly="readonly">
							</div>
							<small v-if="error==='maddress'" class="has-text-danger">{{ msg }}</small>
						</div>
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Billing Address Information</div>
					<div class="panel-body">
						<div class="field field3">
							<label>Country</label>
								<select v-model="bcountry" class="select" @change='getCountryStates(3,1)'>
								    <option :value="null">Select Country</option>
								    <option v-for="country in countries" 
								            :value='country.id'>{{ country.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field3">
							<label>State</label>
								<select v-model="bstate" class="select field4" @change='getStatesCities(3)'>
								    <option :value="null">Select State</option>
								    <option v-for="state in bstates" 
								            :value='state.id'>{{ state.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field3">
							<label>City</label>
								<select v-model="list.bcity" class="select field4">
								    <option :value="null">Select City</option>
								    <option v-for="city in bcities" 
								            :value='city.id'>{{ city.name }}
								    </option>
							  	</select>
						</div>
						<div class="field field1">
							<label>Billing Address</label>
							<div class="control">
								<input v-if="list.bcity" ref='baddress' class="input" type="text" placeholder="Billing Address" v-model="list.baddress" maxlength="50">
								<input v-else class="input readonly" placeholder="Billing Address - Select a City" readonly="readonly">
							</div>
							<small v-if="error==='baddress'" class="has-text-danger">{{ msg }}</small>
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
				list:{}, errors:{}, user: [],
				error: '', msg: '', items: [],
				countries:{}, country: '', 
				ocountries:{}, mcountries:{}, bcountries:{},
				ocountry: null, mcountry: null, bcountry: null,	
				state: '', ostates:{}, mstates:{}, bstates:{},
				ostate: null, mstate: null, bstate: null, 
				city: '', ocities:{}, mcities:{}, bcities:{}
			}
		},

		mounted(){
            axios.get('/countries').then((response) => {
                this.countries = response.data;
            });

            axios.get('/indprofile').then((response) => {
                this.items = response.data;
                axios.get(`/cities/${this.items[0].ocity}`).then((response) => {
					this.ostates = response.data;
					if(this.ostates==""){
						this.ostates = null;
					}else{
						this.ostate = this.ostates.state_id;
						axios.get(`/states/${this.ostate}`).then((response) => {
							this.ocountries = response.data;
							if(this.ocountries==""){
								this.ocountries = null;
							}
							this.ocountry = this.ocountries.country_id;
							this.getCountryStates(1,0);
							this.getStatesCities(1);            			
			            });	
					}				
	            });
	            axios.get(`/cities/${this.items[0].mcity}`).then((response) => {
					this.mstates = response.data;
					if(this.mstates==""){
						this.mstates = null;
					}else{
						this.mstate = this.mstates.state_id;
						axios.get(`/states/${this.mstate}`).then((response) => {
							this.mcountries = response.data;
							if(this.mcountries==""){
								this.mcountries = null;
							}
							this.mcountry = this.mcountries.country_id;
							this.getCountryStates(2,0);
							this.getStatesCities(2);            			
			            });	
					}				
	            });
	            axios.get(`/cities/${this.items[0].bcity}`).then((response) => {
					this.bstates = response.data;
					if(this.bstates==""){
						this.bstates = null;
					}else{
						this.bstate = this.bstates.state_id;
						axios.get(`/states/${this.bstate}`).then((response) => {
							this.bcountries = response.data;
							if(this.bcountries==""){
								this.bcountries = null;
							}
							this.bcountry = this.bcountries.country_id;
							this.getCountryStates(3,0);
							this.getStatesCities(3);            			
			            });
					}					
	            });
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
				if(!this.list.bp_code){
					this.list.bphone = null;
                }else{
                	if(this.list.bphone){
	                	if(this.list.bphone.length < 14){
	                    	this.error = 'bphone';
	                    	this.msg = 'You must fill the whole number';
	                    	this.$refs.bphone.focus();
	                    	return;
	                    }
	                }else{
	                	this.list.bp_code = null;
	                }    
                }                
                if(!this.list.cp_code){
					this.list.cphone = null;
                }else{
                	if(this.list.cphone){
	                	if(this.list.cphone.length < 14){
	                    	this.error = 'cphone';
	                    	this.msg = 'You must fill the whole number';
	                    	this.$refs.cphone.focus();
	                    	return;
	                    }
	                }else{
	                	this.list.cp_code = null;
	                }    
                }

                if(this.list.ocity){
					if(!this.list.oaddress){
						this.error = 'oaddress';
	                    this.msg = 'Can`t be blank';
	                    this.$refs.oaddress.focus();
	                    return;
	                }
	            }
	            if(this.list.mcity){
					if(!this.list.maddress){
						this.error = 'maddress';
	                    this.msg = 'Can`t be blank';
	                    this.$refs.maddress.focus();
	                    return;
	                }
	            }
	            if(this.list.bcity){
					if(!this.list.baddress){
						this.error = 'baddress';
	                    this.msg = 'Can`t be blank';
	                    this.$refs.baddress.focus();
	                    return;
	                }
	            }

				axios.patch(`/indprofile/${this.list.id}`,this.$data.list).then((response)=> this.close())
					.catch((error) => this.errors = error.response.data.errors)
			},

			getCountryStates(ind,est){
				switch(ind) {
				    case 1:			        
						axios.get(`/cstates/${this.ocountry}`).then((response) => {
							this.ostates = response.data;
							if(est==1){
								this.ostate = null;
								this.list.ocity = null;
								this.list.oaddress = null;
							}
							
			            });
				        break;
				    case 2:				        
						axios.get(`/cstates/${this.mcountry}`).then((response) => {
							this.mstates = response.data;
							if(est==1){
								this.mstate = null;
								this.list.mcity = null;
								this.list.maddress = null;
							}							
			            });
				        break;
				    case 3:				        
						axios.get(`/cstates/${this.bcountry}`).then((response) => {
							this.bstates = response.data;
							if(est==1){
								this.bstate = null;
								this.list.bcity = null;
								this.list.baddress = null;
							}								
			            });
				        break;
				}	
			},

			getStatesCities(ind){
				switch(ind) {
				    case 1:			
						axios.get(`/scities/${this.ostate}`).then((response) => {
							this.ocities = response.data;
							this.list.ocity = null;
							this.list.oaddress = null;
			            });
				        break;
				    case 2:					
						axios.get(`/scities/${this.mstate}`).then((response) => {
							this.mcities = response.data;
							this.list.mcity = null;
							this.list.maddress = null;
			            });
				        break;
				    case 3:			
						axios.get(`/scities/${this.bstate}`).then((response) => {
							this.bcities = response.data;
							this.list.bcity = null;
							this.list.baddress = null;
			            });
				        break;
				}
				
			}
		}
	}
</script>