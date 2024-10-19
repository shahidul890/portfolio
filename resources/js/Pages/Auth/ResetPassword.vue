<template>
    <section class="vh-100 login-bg">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong login-card">
                
                <div class="card-body" v-if="request_processing || $page.props.flash.exception">
                    <div class="d-flex justify-content-center align-items-center" v-if="request_processing">
                        <div class="spinner-border" role="status"></div> <h5 class="m-0">Verifying ...</h5>
                    </div>

                    <div v-else>
                        <FlashMessage />
                        <p>Back to <Link href="/cp">Login</Link></p>
                    </div>
                </div>

                <form @submit.prevent="form.post('/cp/password/reset')" v-if="!request_processing && !$page.props.flash.exception">
                    <div class="card-body p-5">

                        <div class="mb-3">
                            <h3 class="m-0 fw-bolder">Reset Password</h3>
                            <!-- <p class="m-0">Hi! Shahidul. Please enter your credentials to login.</p> -->
                        </div>

                        <div class="form-outline mb-4">
                            <input 
                                type="email" 
                                class="form-control bg-transparent border-dark form-control-lg" 
                                placeholder="Your email address" 
                                v-model="form.email"
                            />
                            <small class="text-danger" v-if="form.errors.email">{{ form.errors.email }}</small>
                        </div>

                        <div class="form-outline mb-4">
                            <input 
                                type="password" 
                                class="form-control bg-transparent border-dark form-control-lg" 
                                placeholder="New password" 
                                v-model="form.new_password"
                            />
                            <small class="text-danger" v-if="form.errors.new_password">{{ form.errors.new_password }}</small>
                        </div>

                        <div class="form-outline mb-4">
                            <input 
                                type="password" 
                                class="form-control bg-transparent border-dark form-control-lg" 
                                placeholder="Re-type new password"
                                v-model="form.confirm_new_password"
                            />
                            <small class="text-danger" v-if="form.errors.confirm_new_password">{{ form.errors.confirm_new_password }}</small>
                        </div>
                        
                        <button class="mb-3 btn btn-orange btn-lg btn-block w-100" type="submit" :disabled="form.processing">Submit</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</template>

<script setup>
import { useForm, router, Link } from '@inertiajs/vue3';
import { onMounted } from 'vue';
import FlashMessage from '../Components/FlashMessage.vue';
import { ref } from 'vue';

const request_processing = ref(true);

const form = useForm({
    email: null,
    new_password: null,
    confirm_new_password: null
});

function getParametersFromUrl(url) {
    // Get the query string.
    const queryString = url.split('?')[1];

    // Split the query string into an array of parameters.
    const parameters = queryString.split('&');

    // Create an object to store the parameter names and values.
    const params = {};

    // Iterate over the array of parameters and extract the parameter names and values.
    parameters.forEach(parameter => {
        const [name, value] = parameter.split('=');
        params[name] = value;
    });

    // Return the object.
    return params;
}

const verifyToken = () => {
    const query = getParametersFromUrl(window.location.href);
    const email = query.email;
    const token = query.token;

    router.post('/cp/password/reset/verify', {email: email, token: token}, {
        onSuccess: (resp) => {
            return Promise.all([
                request_processing.value = false,
                form.email = email
            ])
        }
    });
}

onMounted(() =>{
    verifyToken();
});
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