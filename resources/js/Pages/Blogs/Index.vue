<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title m-0">Blogs</h5>
                            <Link href="/cp/blogs/create" class="btn btn-sm btn-outline-primary ms-auto">+ Create</Link>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="collection.data.length > 0" v-for="item in collection">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
import { Link } from '@inertiajs/vue3';
defineProps(['collection']);
</script>