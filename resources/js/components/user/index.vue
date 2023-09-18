<template>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(user,index) in users.data" :key="index">
      <th scope="row">3</th>
      <td>{{ user.id }}</td>
      <td>{{ user.full_name }}</td>
      <td>{{ user.email }}</td>
    </tr>
  </tbody>
</table>
</template>

<script>
export default {
    data(){
        return {
            users:{}
        }
    }
}
</script>
