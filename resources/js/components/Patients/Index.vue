<template>
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <div class="float-left">
                        <h3>Patients</h3>
                    </div>
                    <div class="float-right">

                        <b-button v-b-modal.add-edit-modal><span class=""></span> Add Patientsl</b-button>
                        <b-modal id="add-edit-modal" title="Add Edit Patients">
                            <add-edit-component></add-edit-component>
                        </b-modal>
                    </div>
                </div>
                <div class="card-body">
                    <patients-component></patients-component>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

import AddEditComponent from "./AddEditComponent";
import PatientsComponent from "./PatientsComponent";

export default {
    components: {PatientsComponent, AddEditComponent},

}
</script>

<style scoped>

</style>
