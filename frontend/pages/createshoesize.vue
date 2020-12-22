<template>
  <div>
    <v-row>
      <v-col></v-col>
      <v-col>
        <v-card>
          <v-card-title>
            Opret sko størrelese
          </v-card-title>
          <v-card-text>
            <v-form>
              <v-text-field v-model="name" :rules="nameRules" label="Navn">

              </v-text-field>
              <v-text-field v-model="email" label="Email" type="email">

              </v-text-field>

              <v-text-field v-model="age"  min="13" max="120" label="Alder" type="number">

              </v-text-field>
              <v-select  @change="setChoice"
                         :items="genderSelectData"
                         label="Køn">

              </v-select>
              <v-text-field  v-model="size"  min="30" max="50" label="Størrelse" type="number">

              </v-text-field>
            </v-form>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn>
                opret
              </v-btn>
            </v-card-actions>
          </v-card-text>
        </v-card>
      </v-col>
      <v-col></v-col>
    </v-row>
  </div>
</template>

<script>
import XRegExp from "xregexp";
export default {
  name: "createshoesize",
  layout: 'guest',
  data(){
    return{
      genderSelectData:[
        {
          text:'Mand',
          value:'Mand'
        },
        {
          text:'Kvinde',
          value:'Kvinde'
        }
      ],
      nameRules:[
        v => {
          return !!v ||  'Navn kan ikke være tomt!'
        },
        v => {
          return !XRegExp(/[^\p{Alphabetic}\s\d\u0400-\u04FFء-ي]/gu).test(v) ||  'Navn må kun indenholde bogstaver!'
        },
      ],
      name:'',
      email:'',
      age:0,
      gender:"",
      size:0,
      formValid:false,
    }
  },
  methods: {
     async createShoeSize(){
        const fields = ['name','email','gender']
        for (const field of fields){
            switch (field){
              case "email":
                this.email = this.$sanitize(this.email);
                break;
              case "gender":
                this.email = this.$sanitize(this.email);
                break;
            }
        }
        const data = {
          name:this.name,
          email: this.email,
          age: this.age,
          gender: this.gender,
          size: this.size,
        }
      },
    setChoice(choice) {
      this.gender = choice
    },
  },

}
</script>

<style scoped>

</style>
