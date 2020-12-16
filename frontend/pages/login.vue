<template>
  <div>
    <v-row>
      <v-col>
        <v-spacer></v-spacer>

      </v-col>
      <v-col>
      <v-spacer></v-spacer>
      </v-col>
      <v-col>
        <v-spacer></v-spacer>

      </v-col>
    </v-row>
    <v-row>
      <v-col>

      </v-col>
      <v-col>
        <v-card>
          <v-card-title>
            Login
          </v-card-title>
          <v-card-text>
            <v-form v-model="formValid">
              <v-text-field type="email" v-model="email" :rules="emailRules" label="Email">
              </v-text-field>
              <v-text-field type="password" v-model="password"  :rules="passwordRules" label="Adgangskode">
              </v-text-field>
            </v-form>
          </v-card-text>
          <v-card-actions>
            <v-spacer></v-spacer>
            <v-btn :disabled="!formValid" @click="login">
              Login
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-col>
      <v-col>

      </v-col>
    </v-row>
    <v-row>
      <v-col>

      </v-col>
      <v-col>

      </v-col>
      <v-col>

      </v-col>
    </v-row>

  </div>
</template>

<script>
import XRegExp from "xregexp";

export default {
  name: "login",
  layout:"none",
  middleware:'guest',
  data(){
    return {
      formValid:false,
      email:'',
      password:'',
      emailRules:[
        v=> {
          return !!v || 'Email kan ikke være tom'
        },
      ],
      passwordRules:[
        v=> {
          return !!v || 'Adgangskode kan ikke være tom'
        },
      ]

    }
  },
  methods: {
   async login(){
     if(this.formValid === true){
       let crendetials = {
         email:this.email,
         password:this.password,
       }
       try {
         await this.$auth.loginWith('local', {
           data:crendetials
         })
          this.$router.push('administration')
       } catch (err) {

         if (err.response.data) {
           if (err.response.data[0].field === 'email' || err.response.data[0].field === "password") {
             alert('Email or password incorrect');
           } else {

             alert(`${err.response.data[0].message}`);
           }
           if (err.response.status === 502) {
             alert("Can't login, gateway error");
           }

         } else {
           alert('Service is down');
         }

       }

     }

   }
  }
}
</script>

<style scoped>

</style>
