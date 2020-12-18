<template>
  <div>
      <v-data-table
        :headers="headers"
        :items="customers"
        :items-per-page="5"
        class="elevation-1"
      ></v-data-table>
  </div>
</template>

<script>
export default {
  name: "customers",
  data() {
    return {
      headers:[
        {
          text: 'ID',
          align: 'start',
          sortable: false,
          value: "id"
        },
        {
          text: 'Navn',
          value: "name"
        },
        {
          text:'Email',
          value: "email"
        },
        {
          text: 'Alder',
          value: "age"
        },
        {
          text: 'Køn',
          value: "gender"
        },
        {
          text: 'Størrelse',
          value: "size"
        }
      ],
      customers:[]
    }
  },
  methods:{
    async getCustomerData(){
      await this.$axios.get('/customers').then( res => {
         this.customers = res.data.data
      })
    }
  },
  mounted() {
     this.getCustomerData()
  }
}
</script>

<style scoped>

</style>
