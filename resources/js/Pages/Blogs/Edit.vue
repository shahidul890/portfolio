<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title m-0">Edit Blogs</h5>
                            <Link href="/cp/blogs" class="btn btn-sm btn-outline-primary ms-auto"> <i class="fa fa-arrow-left"></i> Back</Link>
                        </div>
                        <div class="card-body table-responsive">
                            <FlashMessage/>

                            <form @submit.prevent="form.post('/cp/blogs')">
                                <div class="form-group">
                                    <label for="">Category</label>
                                    <VueMultiselect
                                        class="mt-1"
                                        v-model="form.category_id"
                                        :options="categories"
                                        :searchable="true"
                                        @search-change="asyncFind"
                                        placeholder="Type to search"
                                        label="name"
                                        track-by="id"
                                    />
                                    <span class="text-danger text-xs" v-if="form.errors.category_id">{{ form.errors.category_id }}</span>
                                </div>

                                <div class="form-group">
                                    <label for="">Tags</label>
                                    <VueMultiselect
                                        class="mt-1"
                                        v-model="form.tag_id"
                                        :options="tags"
                                        :searchable="true"
                                        :multiple="true"
                                        @search-change="asyncFind"
                                        placeholder="Type to search"
                                        label="name"
                                        track-by="id"
                                    />
                                    <span class="text-danger text-xs" v-if="form.errors.category_id">{{ form.errors.category_id }}</span>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control mt-1 p-3" :class="form.errors.title ? 'is-invalid' : ''" v-model="form.title" placeholder="Enter title here">
                                    <span class="text-danger text-xs" v-if="form.errors.title">{{ form.errors.title }}</span>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="">Featured Image</label>
                                    <input type="file" class="form-control mt-1" @input="form.thumbnail = $event.target.files[0]" :class="form.errors.thumbnail ? 'is-invalid' : ''" />
                                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                        {{ form.progress.percentage }}%
                                    </progress>
                                    <span class="text-danger text-xs" v-if="form.errors.thumbnail">{{ form.errors.thumbnail }}</span>
                                </div>

                                <div class="form-group my-2">
                                    <label for="">Content Image (Upload and get link)</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control mt-1" @input="upload.file = $event.target.files[0]" :class="upload.errors.thumbnail ? 'is-invalid' : ''" />
                                        <button class="input-group-text btn btn-sm btn-primary" @click.prevent="uploadAndGetLink">Upload</button>
                                    </div>
                                    <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                                        {{ form.progress.percentage }}%
                                    </progress>
                                    <span class="text-danger text-xs" v-if="form.errors.thumbnail">{{ form.errors.thumbnail }}</span>
                                    <span class="text-success text-sm" v-if="uploadedUrl">{{ uploadedUrl }}</span>
                                </div>

                                <div class="form-group mt-2">
                                    <label for="">Content</label> <br>
                                    <span class="text-danger text-xs" v-if="form.errors.content">{{ form.errors.content }}</span>
                                    <Editor 
                                        api-key="aepu4lrc2mk9f2h3ivkjzgzbabo8xi5xfjafmmd48na18baa"
                                        :init="{ plugins: 'lists link image table code help wordcount', toolbar: 'numlist bullist' }"
                                        v-model="form.content" 
                                    />
                                </div>

                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary px-5">Submit</button>
                                </div>
                            </form>
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
import Editor from '@tinymce/tinymce-vue';
import VueMultiselect from 'vue-multiselect';
import axios from 'axios';
import { ref } from 'vue';

const props = defineProps(['categories', 'tags', 'blog']);
const uploadedUrl = ref(null);

const form = useForm(props.blog);

const upload = useForm({
    file: null
});

const headers = {
    'Content-Type': 'multipart/form-data',
    "Accept": "application/json",
}

const uploadAndGetLink = async () => {
    const http = await axios.post('/cp/upload/file', upload, {headers:headers});
    uploadedUrl.value = http.data.link;
}

</script>
<style src="vue-multiselect/dist/vue-multiselect.css"></style>
