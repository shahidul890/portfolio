<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title m-0">Create Blogs</h5>
                            <Link href="/admin/blogs" class="btn btn-sm btn-outline-primary ms-auto"> <i class="fa fa-arrow-left"></i> Back</Link>
                        </div>
                        <div class="card-body table-responsive">
                            
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
</script>