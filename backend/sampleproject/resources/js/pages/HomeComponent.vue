<template>
  <div>
      <h1>Home Component</h1>
      <p>ログインしたユーザーしか見れないページにしたい</p>
      <!-- <p>ログインユーザー名：{{user.name}}</p>
      <p>ログインユーザーメールアドレス：{{user.email}}</p> -->
  </div>
</template>

<script>
export default {
  data() {
    return {
    }
  },
  methods: {
    async getUser() {
       await this.$store.dispatch('login/getUser')
      //  console.log(this.$store.state.login.user);
      //  this.user = this.$store.state.login.user
    },
  },
  computed: {
    user() {
      return this.$store.state.login.user
    }
  },
  mounted() {
      Promise.all([
        this.getUser()
      ])
    }
}
</script>

<style>
</style>