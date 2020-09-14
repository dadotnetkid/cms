<template>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
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
