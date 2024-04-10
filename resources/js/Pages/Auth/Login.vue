<template>
    <section class="vh-100" style="background-color: #508bfc;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <form @submit.prevent="form.post('/login')">
                    <div class="card-body p-5">

                        <h3 class="mb-5 text-center">Sign in</h3>

                        <div class="form-outline mb-4">
                            <input 
                                type="email" 
                                class="form-control form-control-lg" 
                                placeholder="Email Address" 
                                v-model="form.email"
                            />
                            <small class="text-danger" v-if="form.errors.email">{{ form.errors.email }}</small>
                        </div>

                        <div class="form-outline mb-4">
                            <input 
                                type="password" 
                                class="form-control form-control-lg" 
                                placeholder="Password"
                                v-model="form.password"
                            />
                            <small class="text-danger" v-if="form.errors.password">{{ form.errors.password }}</small>
                        </div>

                        <!-- Checkbox -->
                        <!-- <div class="form-check d-flex justify-content-start mb-4">
                            <input class="form-check-input" id="form1Example3" type="checkbox" value="" v-model="form.remember"/>
                            <label class="form-check-label" for="form1Example3"> Remember password </label>
                        </div> -->
                        
                        <button class="btn btn-primary btn-lg btn-block w-100" type="submit" :disabled="form.processing">Login</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<script setup>
import { useForm, router } from '@inertiajs/vue3';

const form = useForm({
    email: null,
    password: null,
    remember: false
})
</script>