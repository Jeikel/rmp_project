<template>
	<div>
		<div class="field field3">
			<label>Country</label>
				<select v-model="country" class="select" @change='getCountryStates(1)'>
				    <option :value="null">Select Country</option>
				    <option v-for="country in countries" 
				            :value='country.id'>{{ country.name }}
				    </option>
			  	</select>
		</div>
		<div class="field field3">
			<label>State</label>
				<select v-model="state" class="select field4" @change='getStatesCities(1)'>
				    <option :value="null">Select State</option>
				    <option v-for="state in states" 
				            :value='state.id'>{{ state.name }}
				    </option>
			  	</select>
		</div>
		<div class="field field3">
			<label>City</label>
				<select v-model="city" class="select field4" @change='setCities()'>
				    <option :value="null">Select City</option>
				    <option v-for="city in cities" 
				            :value='city.id'>{{ city.name }}
				    </option>
			  	</select>
		</div>
	</div>
</template>

<script>
	export default{
		props: ['gcity'],
		data(){
			return{		
				country: null, icountry: null, 
				countries:{}, icountries:{},
				state: null, states:{},
				city: null, cities:{}
			}
		},

		mounted(){
            axios.get('/countries').then((response) => {
                this.countries = response.data; 
                if(this.gcity){                    
	                axios.get(`/cities/${this.gcity}`).then((response) => {
						this.states = response.data;
						if(this.states==""){
							this.states = null;
						}else{
							this.state = this.states.state_id;
							axios.get(`/states/${this.state}`).then((response) => {
								this.icountries = response.data;
								if(this.icountries==""){
									this.icountries = null;
								}
								this.icountry = this.icountries.country_id;
								this.country = this.icountry
								this.city = this.gcity;
								this.getCountryStates(0);
								this.getStatesCities(0);        			
				            });	
						}				
		            });
	            }                       
            });   
        },

		methods:{
			getCountryStates(est){	
				axios.get(`/cstates/${this.country}`).then((response) => {
					this.states = response.data;
					if(est==1){
						this.state = null;
						this.city = null; 
						this.$emit('Clean');
					}					
	            });
			},

			getStatesCities(est){				
				axios.get(`/scities/${this.state}`).then((response) => {
					this.cities = response.data;
					if(est==1){
						this.city = null; 
						this.$emit('Clean');
					}
	            });
				
			},

			setCities(ind){		
				this.$emit('SetCity',this.city);			
			}
		}
	}
</script>