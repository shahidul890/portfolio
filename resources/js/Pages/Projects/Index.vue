<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title m-0">Projects</h5>
                            <Link href="/cp/projects/create" class="btn btn-sm btn-outline-primary ms-auto">+ Create</Link>
                        </div>
                        <div class="card-body table-responsive">
                            <FlashMessage/>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Technogies</th>
                                        <th>Reference Link</th>
                                        <th>Completed Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="collection.data.length > 0" v-for="(item, index) in collection.data">
                                        <td> {{ ++index }} </td>
                                        <td>{{ item.title }}</td>
                                        <td>
                                            <span class="badge bg-orange me-1" v-for="item in item.technologies.split(',')">{{ item }}</span>
                                        </td>
                                        <td>{{ item.reference_link }}</td>
                                        <td>{{ item.completed_at }}</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" :checked="item.active" @change="handleToggleRequests(item.id)">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn bg-orange btn-sm me-1" @click.prevent="handleEditRequests(item)" title="View Details"> <i class="fa fa-eye"></i> </button>
                                            <button class="btn btn-primary btn-sm me-1" @click.prevent="handleEditRequests(item)">Edit?</button>
                                            <button class="btn btn-danger btn-sm" @click.prevent="handleDeleteRequests(item.id)">Delete?</button>
                                        </td>
                                    </tr>
                                    <tr v-else align="center">
                                        <td colspan="4">No record found</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </AdminLayout>
</template>

<script setup>
import AdminLayout from './../Layouts/Admin.vue';
import FlashMessage from '../Components/FlashMessage.vue';
import { Link, useForm, router } from '@inertiajs/vue3';
defineProps(['collection']);

const form = useForm({
    name: null
})

const handleDeleteRequests = (id) => {
    if(confirm('Are you sure?')){
        router.delete('/cp/projects/'+id);
    }
}

const handleToggleRequests = (id) => {
    if(confirm('Are you sure?')){
        router.put('/cp/projects/'+id+'/status');
    }
}

const handleEditRequests = (item) => {
    form.name = item.name;
    form.id = item.id;

    var modalElement = new bootstrap.Modal(document.getElementById('EditModal'));
    modalElement.show();
}

const editModalHide = () => {
    document.getElementById('editModalCloseBtn').click()
}
</script>