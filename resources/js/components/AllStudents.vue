<template>
    <div>
        <h3 class="text-center">All Students</h3><br/>
  
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="student in students" :key="student.id">
                <td>{{ student.id }}</td>
                <td>{{ student.name }}</td>
                <td>{{ student.email }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
  
<script>
    export default {
        data() {
            return {
                students: []
            }
        },
        created() {
            this.axios
                .get('http://127.0.0.1:8000/api/students')
                .then(response => {
                    this.students = response.data;
                });
        }
    }
</script>