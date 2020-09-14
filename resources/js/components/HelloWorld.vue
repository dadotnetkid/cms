<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <b>Add Edit Patients</b>
                    </div>
                    <div class="card-body">
                        <form class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label for="firstName">First Name</label>
                                    <input class="form-control" id="firstName" name="firstName"
                                           placeholder="First Name"/>
                                </div>
                                <div class="col-4">
                                    <label for="middleName">Middle Name</label>
                                    <input class="form-control" id="middleName" name="middleName"
                                           placeholder="Middle Name"/>
                                </div>
                                <div class="col-4">
                                    <label for="lastName">Last Name</label>
                                    <input class="form-control" id="lastName" name="lastName"
                                           placeholder="Last Name"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    data() {
        return {
            patients: null
        }
        /*  mounted() {
              this.data();
          },
          data(){
              axios
                  .get('http://127.0.0.1:8000/api/patients')
                  .then(response=>{console.log(response.data)});
          }*/
    },
    mounted() {
        axios
            .get('http://127.0.0.1:8000/api/patients')
            .then(response => {
                this.patients = response.data
                console.log(this.patients);
            });
    }


}
</script>

<style scoped>

</style>
