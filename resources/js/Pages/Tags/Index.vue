<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title m-0">Tags</h5>
                            <button @click="form.reset()" data-bs-target="#createModal" data-bs-toggle="modal" class="btn btn-sm btn-outline-primary ms-auto">+ Create</button>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tag</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="collection.data.length > 0" v-for="(item, index) in collection.data">
                                        <td> {{ ++index }} </td>
                                        <td>{{ item.name }}</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" :checked="item.is_active" @change="handleToggleRequests(item.id)">
                                                <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-info btn-sm me-1" @click.prevent="handleEditRequests(item)">Edit?</button>
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

        <!-- Create Modal -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createModalLabel">Create a Tag</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form @submit.prevent="form.post('/cp/tags'), form.reset()">
                <div class="modal-body">
                    <FlashMessage/>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" v-model="form.name" class="form-control mt-2" :class="form.errors.name ? 'is-invalid' : ''" />
                        <span class="text-danger text-xs" v-if="form.errors.name">{{ form.errors.name }}</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
                </div>
            </div>
        </div>

        <!-- Edit Modal -->
        <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="EditModalLabel">Edit a Tag</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" id="editModalCloseBtn" aria-label="Close"></button>
                </div>
                <form @submit.prevent="form.put('/cp/tags/'+form.id, {
                    onSuccess: () => editModalHide()
                })">
                <div class="modal-body">
                    <FlashMessage/>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" v-model="form.name" class="form-control mt-2" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                </form>
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
        router.delete('/cp/tags/'+id);
    }
}

const handleToggleRequests = (id) => {
    if(confirm('Are you sure?')){
        router.put('/cp/tags/'+id+'/status');
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