<template>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        First Name
                    </td>
                    <td>
                        Last Name
                    </td>
                    <td>address</td>
                </tr>
                </thead>
                <tbody v-for="patient in data">
                <tr>
                    <td><a href="#">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                    <td>{{ patient.firstname }}</td>
                    <td>{{ patient.lastname }}</td>
                    <td>{{ patient.address }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "PatientsComponent",
    data() {
        return {
            data: null
        }
    },
    mounted() {
        axios
            .get("http://127.0.0.1:8000/api/patients")
            .then(response => {
                this.data = response.data
            });
    }
}
</script>

<style scoped>

</style>
