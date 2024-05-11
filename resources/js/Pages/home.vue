<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body d-flex">
                            Hi {{ $page.props.auth.user.name }} . You are logged in!
                            <span class="ms-auto text-success fw-bolder">v1.1.2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from './Layouts/Admin.vue';
</script>