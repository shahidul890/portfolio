<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title m-0">Contact Requests</h5>
                            <!-- <Link href="/admin/contacts/create" class="btn btn-sm btn-outline-primary ms-auto">+ Create</Link> -->
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="collection.data.length > 0" v-for="(item, index) in collection.data">
                                        <td>{{ ++index }}</td>
                                        <td>{{ item.full_name }}</td>
                                        <td>{{ item.email }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" data-bs-target="#details-modal" data-bs-toggle="modal" @click.prevent="showDetails(item)">Details</button>
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

        <div class="modal fade" id="details-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-bordered table-stripe">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ contact.name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ contact.email }}</td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td>{{ contact.message }}</td>
                                </tr>
                                <tr>
                                    <td>IP</td>
                                    <td>{{ contact.ip }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup>
import { ref } from "vue";
import AdminLayout from './../Layouts/Admin.vue';
import { Link } from '@inertiajs/vue3';
defineProps(['collection']);

const contact = ref({});

const showDetails = (item) => {
    contact.value = {
        name: item.full_name,
        email: item.email,
        message: item.message,
        ip: item.ip,
    }
}

</script>