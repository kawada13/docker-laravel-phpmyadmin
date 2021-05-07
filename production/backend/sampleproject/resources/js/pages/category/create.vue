<template>
  <div>
    
    <v-card color="grey lighten-2">
      <div class="justify-space-around d-flex">
       <v-card-title>Create Category</v-card-title>
       <v-card-title>
         <v-btn
          outlined
          rounded
          color="primary"
          @click="$router.push({ name: 'category-list' })"
          >
          category-list
          </v-btn>
       </v-card-title>

      </div>
    </v-card>

    <div class="mt-4" v-show="!loading">
      <v-form ref="form" @submit.prevent='upload'>
        <v-text-field 
          placeholder="Category name" 
          v-model="createName"
         >
         </v-text-field>
        <v-btn color="green darken-1" dark type="submit">Create Category</v-btn>
      </v-form>
    </div>



  </div>
</template>

<script>
import { mapState, mapActions } from "vuex"
export default {
  data() {
    return {
      loading: false,
      createName:''
    }
  },
  methods: {
    async upload() {
      this.loading = false
      if (!this.$refs.form.validate()) {
          this.loading = false
          return
        }
       await this.$store.dispatch('product/create', this.createName)
       if(this.apiStatus) {
         this.$store.dispatch('product/resetCreateName')
         this.$refs.form.resetValidation()
       } else {
       }
       this.loading = false
    },
  },
  computed: {
    ...mapState(
      "product",
      { apiStatus: state => state.apiStatus }
    ),
    // createName: {
    //   get(){
    //     return this.$store.state.product.createName
    //   },
    //   set(val) {
    //     return this.$store.dispatch('product/setCreateName', val)
    //   }
    // },
  },
  mounted() {
      this.loading = true
       Promise.all([
        this.$store.dispatch('product/resetCreateName')
      ])
      this.$refs.form.resetValidation()
      this.loading = false
    }
}
</script>

<style>
</style>
