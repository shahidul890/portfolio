<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title m-0">Blogs</h5>
                            <Link href="/cp/blogs/create" class="btn btn-sm btn-outline-primary ms-auto">+ Create</Link>
                        </div>
                        <div class="card-body table-responsive">
                            <FlashMessage/>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Thumbnail</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Tags</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="collection.data.length > 0" v-for="(blog, index) in collection.data">
                                        <td>{{ ++index }}</td>
                                        <td>
                                            <img :src="blog.thumbnail" :alt="'Thumbnail of '+index" width="150" height="70" class="img-fluid rounded" />
                                        </td>
                                        <td>{{ blog.title }}</td>
                                        <td>{{ blog.category?.name }}</td>
                                        <td>
                                            <span class="badge bg-success me-1" v-if="blog.tags?.length" v-for="tag in blog.tags">{{ tag.name }}</span>
                                        </td>
                                        <td>{{ blog.active_as }}</td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <button @click="handleEditRequest(blog.id)" class="btn btn-warning btn-sm">Edit?</button>
                                                <button @click="handleDeleteRequest(blog.id)" class="btn btn-sm btn-danger">Delete?</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr v-else align="center">
                                        <td colspan="5">No record found</td>
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

// const form = useForm();

const handleDeleteRequest = (id) => {
    if(confirm('Are you sure? Do you want to delete this record?')){
        router.delete('/cp/blogs/'+id);
    }
}

const handleEditRequest = (id) => {
    if(confirm('Are you sure? Do you want to edit this record?')){
        router.get('/cp/blogs/'+id+'/edit');
    }
}
</script>