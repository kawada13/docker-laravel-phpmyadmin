<template>
  <div>

    <v-card color="grey lighten-2">
      <div class="justify-space-around d-flex">
       <v-card-title>Category List</v-card-title>
       <v-card-title>
         <v-btn
        outlined
        rounded
        color="primary"
        @click="$router.push({ name: 'create-category' })"
      >
        Create Category
      </v-btn>
         </v-card-title>
      </div>
    </v-card>

    <v-simple-table v-show="!loading">
      <template v-slot:default>
        <thead>
          <tr>
            <th class="text-left">
              ID
            </th>
            <th class="text-left">
              Name
            </th>
            <th class="text-left">
              slug
            </th>
            <th class="text-left">
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          <tr
            v-for="(item, index) in categories"
            :key="item.name"
          >
            <td>{{ index + 1 }}</td>
            <td>{{ item.name }}</td>
            <td>{{ item.slug }}</td>
            <td>
              <v-btn
                depressed
                color="primary"
                @click="$router.push({ name: 'edit-category', params: { id: item.id } })"
              >
                Edit
              </v-btn>
              <v-btn
                depressed
                color="error"
                @click="deleteCategory(item.id)"
              >
                Delete
              </v-btn>
            </td>
          </tr>
        </tbody>
      </template>
    </v-simple-table>
  </div>
</template>


<script>
import { mapState, mapActions } from "vuex"
  export default {
    data() {
      return {
        loading: false,
      }
    },
    computed: {
        ...mapState(
        "product",
        { categories: state => state.categories }
      ),
    },
    methods: {
      async loadCategories() {
        await this.$store.dispatch('product/loadCategories')
      },
      async deleteCategory(id) {
        let result = confirm('本当に削除しますか');
        if(result){
          await this.$store.dispatch('product/deleteCategory', id)
        　this.loadCategories()
        }else{
          console.log('削除をとりやめました');
        }
      }
    },
    mounted() {
      this.loading = true
      Promise.all([
        this.loadCategories()
      ])
      this.loading = false
    }
   }
   
</script>