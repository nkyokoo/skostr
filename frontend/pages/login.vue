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
          <v-card-text v-model="formValid">
            <v-form>
              <v-text-field type="email" :rules="emailRules" label="Email">
              </v-text-field>
              <v-text-field type="password"  :rules="passwordRules" label="Adgangskode">
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
  layout:"guest",
  data(){
    return {
      formValid:true,
      emailRules:[
        v=> {
          return !!v || 'Email kan ikke være tom'
        },
        v => {
          return XRegExp('^[\\p{L}\\p{N}]+@\\p{L}+[.]\\p{L}+$').test(v) || 'Email skal være gyldig!'
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

    }
  }
}
</script>

<style scoped>

</style>
