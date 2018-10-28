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
					<div class="panel-heading">Personal Information</div>
					<div class="panel-body">
						<div class="field field3">
							<label>Firts Name</label>
							<div class="control">
								<input class="input readonly" type="text" placeholder="Firts Name" v-model="list.name" readonly="readonly">
							</div>
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
						<div class="field field3">
							<label>Birthday</label>
							<div class="control">
								<input class="input" type="date" placeholder="Birthday" v-model="list.birthday">
							</div>
							<small v-if="errors.birthday" class="has-text-danger">{{ errors.birthday[0] }}</small>
						</div>
						<div class="field field3">
							<label>Gender</label>
							<select v-model="list.gender" class="select field1">
							    <option :value="null">Select Gender</option>
							    <option value=1>Male</option>
   								<option value=2>Female</option>
   								<option value=3>Other Gender</option>
						  	</select>
						  	<small v-if="errors.gender" class="has-text-danger">{{ errors.gender[0] }}</small>
						</div>
						<div class="field field3">
							<label>Other Gender</label>
							<div class="control">
								<input v-if="list.gender==3" class="input" type="text" placeholder="Other Gender" v-model="list.ogender" maxlength="30">
								<input v-else class="input readonly" type="text" placeholder="Other Gender" readonly="readonly">
							</div>
							<small v-if="error==='ogender'" class="has-text-danger">{{ msg }}</small>
						</div>
						<div class="field field2">
							<label>Email Address</label>
							<div class="control">
								<input class="input readonly" type="text" placeholder="Email Address" v-model="list.email" readonly="readonly">
							</div>
						</div>
						<div class="field field2">
							<label>Business Profile</label>
							<div class="control">
								<input class="input readonly" type="text" placeholder="Business Profile" readonly="readonly">
							</div>
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
						<gaddress @SetCity='getOCity' @Clean='oClean' :gcity='ocity'></gaddress>
						<div class="field field1">
							<label class="field1">Office Address</label>
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
						<gaddress @SetCity='getMCity' @Clean='mClean' :gcity='mcity'></gaddress>
						<div class="field field1">
							<label class="field1">Mailing Address</label>
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
						<gaddress @SetCity='getBCity' @Clean='bClean' :gcity='bcity'></gaddress>
						<div class="field field1">
							<label class="field1">Billing Address</label>
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
	let gaddress = require('./gaddress.vue');
	export default{
		components:{gaddress},
		props:['openmodal'],
		data(){
			return{
				list:{}, errors:{}, user: [],
				error: '', msg: '', items: [],
				countries:{}, gcity: null, 
				ocity: '', bcity: '', mcity: ''
			}
		},

		mounted(){
            axios.get('/countries').then((response) => {
                this.countries = response.data;
            });    
        },

        created(){
	        axios.get('/indprofile').then((response) => {
	                this.items = response.data;
	                this.ocity = this.items[0].ocity;  
	                this.mcity = this.items[0].mcity; 
	                this.bcity = this.items[0].bcity;  
	        });            
        },        

		methods:{
			close(){
				this.$emit('closeRequest')
				this.errors = '';
				this.error = '';
				this.msg = '';
			},

			getOCity(city){
				this.list.ocity = city;
			},

			getMCity(city){
				this.list.mcity = city;
			},

			getBCity(city){
				this.list.bcity = city;
			},

			oClean(){
				this.list.oaddress = null;
				this.list.ocity = null;
			},

			mClean(){
				this.list.maddress = null;
				this.list.mcity = null;
			},

			bClean(){
				this.list.baddress = null;
				this.list.bcity = null;
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

	            if(this.list.gender == 3){
					if(!this.list.ogender){
						this.error = 'ogender';
	                    this.msg = 'Can`t be blank';
	                    this.$refs.ogender.focus();
	                    return;
	                }
	            }else{
	            	this.list.ogender = null;
	            }

				axios.patch(`/indprofile/${this.list.id}`,this.$data.list).then((response)=> this.close())
					.catch((error) => this.errors = error.response.data.errors)
			}			
		}
	}
</script>