<template>
  <v-app>
    <AppHeader />
    <v-main class=".container">
      <router-view />
    </v-main>
    <AppFooter />
  </v-app>
</template>

<script setup>
import AppFooter from "@/components/AppFooter.vue";
import AppHeader from "@/components/AppHeader.vue";
</script>

<style>
.v-application {
  background-color: rgba(58, 5, 72, 0.6) !important; /* Mauve transparent */
}
html,
body {
  height: 100%;
  margin: 0;
}

html {
  background: url(/src/img/web/BackgroundUnicornv2Webp.webp) no-repeat center
    center fixed;
  background-size: cover;
  height: 100%;
  cursor: url(/src/img/web/pink_unicorn_neon.png), auto;
}

a {
  cursor: url(/src/img/web/purple_unicorn_neon.png), auto;
}

body {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
