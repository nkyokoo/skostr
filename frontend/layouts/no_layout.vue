<template>
  <v-app dark>
  <v-main>
    <v-container>
      <nuxt/>
    </v-container>
  </v-main>
  </v-app>
</template>

<script>
export default {
  name: "no_layout",
  middleware:'guest'
}
</script>

<style scoped>

</style>
