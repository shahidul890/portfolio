<template>
    <section class="vh-100 login-bg">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong login-card">
                <form @submit.prevent="form.post('/login')">
                    <div class="card-body p-5">

                        <div class="mb-3">
                            <h3 class="m-0 fw-bolder">Sign in</h3>
                            <p class="m-0">Hi! Shahidul. Please enter your credentials to login.</p>
                        </div>

                        <div class="form-outline mb-4">
                            <input 
                                type="email" 
                                class="form-control bg-transparent border-dark form-control-lg" 
                                placeholder="Email Address" 
                                v-model="form.email"
                            />
                            <small class="text-danger" v-if="form.errors.email">{{ form.errors.email }}</small>
                        </div>

                        <div class="form-outline mb-4">
                            <input 
                                type="password" 
                                class="form-control bg-transparent border-dark form-control-lg" 
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
                        
                        <button class="mb-3 btn btn-orange btn-lg btn-block w-100" type="submit" :disabled="form.processing">Login</button>
                        
                        <a href="">Forgot Password?</a>
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

<style scoped>
.login-bg{
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('/assets/img/footer_bg.svg');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover
}

.login-card{
    border-radius: 16px;
    color: rgb(248, 91, 0);
    background: linear-gradient(244deg, #000 0%, #181427 100%);
}

.login-card .form-control{
    color: rgb(248, 91, 0) !important
}

.login-card .form-control::placeholder{
    color: rgb(209, 160, 132);
}

.btn-orange{
    border: 1px solid black;
    border-radius: 10px;
    background-color: rgb(248, 91, 0);
    color: #000;
}

.btn-orange:hover{
    background-color: #000;
    color: rgb(248, 91, 0);
    border: 1px solid rgb(248, 91, 0);
    /* border-radius: 25px; */
}
</style>