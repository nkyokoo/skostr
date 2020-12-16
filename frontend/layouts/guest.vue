<template>
  <v-app dark>
    <v-app-bar app>
      <v-toolbar-title @click="$router.push('/')">Steen Skomageren</v-toolbar-title>
      <v-spacer></v-spacer>
        <v-list nav class="appbar-nav">
          <v-list-item class="appbar-nav-item" link nuxt>
            sko
          </v-list-item>
          <v-list-item class="appbar-nav-item" ink nuxt to="/usershoesizes">
            brugers størrelser
          </v-list-item>
        </v-list>
    </v-app-bar>
    <v-main>
      <v-container>
        <nuxt/>
      </v-container>
    </v-main>
    <v-footer
      app
    >
      <span>&copy; {{ new Date().getFullYear() }}</span>
    </v-footer>
  </v-app>
</template>

<script>
export default {
  name: "guest",

}
</script>

<style scoped>
.appbar-nav {
  background: none;
}

.appbar-nav-item {
  display: inline;
}
</style>
