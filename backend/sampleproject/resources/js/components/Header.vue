<template>
  <div>
    <v-app-bar
      color="blue lighten-2"
      dark
    >
      <!-- <v-app-bar-nav-icon></v-app-bar-nav-icon> -->

      <v-toolbar-title 
        class="display-1" 
        style="cursor: pointer" 
        @click="$router.push({ name: 'home' })"
        >
        Site Logo
        </v-toolbar-title>

      <v-spacer></v-spacer>


      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'home' })"
        v-if="isLogined"
        >
        Home
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'about' })"
        >
        about
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'login' })"
        v-if="!isLogined"
        >
        login
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'register' })"
        v-if="!isLogined"
        >
        register
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="logout()"
        >
        logout
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'category-list' })"
        v-if="isLogined"
        >
        category
        </v-toolbar-title>
      <!-- <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'category-list' })"
        >
        Category List
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'product-list' })"
        >
        Product List  
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'login' })"
        >
        Login 
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="$router.push({ name: 'register' })"
        >
        Register 
        </v-toolbar-title>
      <v-toolbar-title 
        class="ml-5"
        style="cursor: pointer" 
        @click="logout()"
        >
        Logout 
        </v-toolbar-title> -->

      <!-- <v-btn icon>
        <v-icon>mdi-heart</v-icon>
      </v-btn>
      <v-btn icon>
        <v-icon>mdi-magnify</v-icon>
      </v-btn> -->

    </v-app-bar>
  </div>
</template>
<script>
import { mapState, mapActions } from "vuex"
export default {
  methods:{
    logout() {
      console.log('ログアウト');
      this.$store.dispatch('login/logout')
    }
  },
  computed: {
    isLogined() {
      return this.$store.state.login.isAuth
    }
  },
}
</script>

<style>
</style>
