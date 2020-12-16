<template>
  <div>
    <template>
      <v-data-table
        :headers="headers"
        :items="customers"
        :items-per-page="5"
        class="elevation-1"
      ></v-data-table>
    </template>
  </div>
</template>

<script>
export default {
  name: "customers",
  data() {
    return {
      headers:[],
      customers:[]
    }
  }
}
</script>

<style scoped>

</style>
