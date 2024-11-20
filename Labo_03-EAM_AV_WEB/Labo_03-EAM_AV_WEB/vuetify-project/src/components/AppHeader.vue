<template>
  <header>
    <v-img :width="500" :height="220" src="/src/img/web/logov23749802.png" />
    <nav>
      <a href="">Accueil</a>
      <a href="">Produits</a>
      <a href="">Infolettre</a>
    </nav>
  </header>
</template>

<style>
header {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  margin: 0px;
  padding: 0px;
}

nav {
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  width: 100%;
  padding: 0px;
  background-color: #800796;
}

nav > a {
  text-decoration: none;
  font-size: 2rem;
  color: #ff71ce;
  margin: 2px;
  padding: 15px 56px;
  font-style: italic;
  font-weight: 600;
  text-transform: uppercase;
  text-shadow: 3px 4px 0 #b967ff;
}

nav > a:hover {
  text-shadow: 1px 2px 0 #b967ff;
}
</style>
