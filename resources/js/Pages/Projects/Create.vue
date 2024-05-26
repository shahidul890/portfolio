<template>
    <AdminLayout>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h5 class="card-title m-0">Projects Create</h5>
                            <buttun @click="redirectBack()" class="btn btn-sm btn-outline-primary ms-auto"> <i class="fa fa-arrow-left"></i> Back</buttun>
                        </div>
                        <form >
                        <div class="card-body table-responsive">
                            <FlashMessage/>
                            
                            <div class="row row-gap-3">
                                <div class="col-md-12 d-flex flex-column gap-1">
                                    <label title="This field is required"> <i class="fa fa-star-of-life text-danger"></i> Project Name</label>
                                    <input type="text" v-model="form.title" class="form-control" :class="form.errors.title ? 'is-invalid' : ''" required />
                                    <span class="text-danger" v-if="form.errors.title">{{form.errors.title}}</span>
                                </div>
                                <div class="col-md-12 d-flex flex-column gap-1">
                                    <label title="This field is required"> <i class="fa fa-star-of-life text-danger"></i> Technologies</label>
                                    <input type="text" v-model="form.technologies" class="form-control" :class="form.errors.technologies ? 'is-invalid' : ''" required />
                                    <span class="text-danger" v-if="form.errors.technologies">{{form.errors.technologies}}</span>
                                </div>
                                <div class="col-md-4 d-flex flex-column gap-1">
                                    <label title="This field is required"> <i class="fa fa-star-of-life text-danger"></i> Category </label>
                                    <!-- <input type="text" v-model="form.title" class="form-control" :class="form.errors.title ? 'is-invalid' : ''" /> -->
                                    <v-select :options="categories" class="style-chooser text-white" label="name" v-model="form.category_id" required></v-select>
                                    <span class="text-danger" v-if="form.errors.category_id">{{form.errors.category_id}}</span>
                                </div>
                                <div class="col-md-4 d-flex flex-column gap-1">
                                    <label title="This field is required"> Reference Link</label>
                                    <input type="text" v-model="form.reference_link" class="form-control" :class="form.errors.reference_link ? 'is-invalid' : ''" />
                                    <span class="text-danger" v-if="form.errors.reference_link">{{form.errors.reference_link}}</span>
                                </div>
                                <div class="col-md-4 d-flex flex-column gap-1">
                                    <label title="This field is required"> Completed At</label>
                                    <input type="date" v-model="form.completed_at" class="form-control" :class="form.errors.completed_at ? 'is-invalid' : ''" />
                                    <span class="text-danger" v-if="form.errors.completed_at">{{form.errors.completed_at}}</span>
                                </div>
                                <div class="col-md-12 d-flex flex-column gap-1">
                                    <label title="This field is required">Description</label>
                                    <textarea class="form-control" v-model="form.description" :class="form.errors.description ? 'is-invalid' : ''" rows="8"></textarea>
                                    <span class="text-danger" v-if="form.errors.description">{{form.errors.description}}</span>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer d-flex">
                            <div class="ms-auto d-flex gap-2">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-floppy-disk"></i> Save</button>
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-right-to-bracket"></i> Save and Back</button>
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-cancel"></i> Cancel</button>
                            </div>
                        </div>
                        </form>
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
defineProps(['categories']);


const form = useForm({
    name: null
})

const redirectBack = () => {
    if(confirm('Are you sure?')){
        router.get('/cp/projects');
    }
}

</script>

<style>
.style-chooser .vs__search::placeholder,
.style-chooser .vs__dropdown-toggle,
.style-chooser .vs__dropdown-menu {
  background: #1e212b;
  border: 1px solid rgb(63, 62, 62);
  color: #fff;
  /* padding-bottom: 4px; */
  /* text-transform: lowercase;
  font-variant: small-caps; */
}

.style-chooser .vs__search,
.style-chooser .vs__selected{
  /* fill: #394066; */
  color: #fff;
}
</style>