<template>
    <div v-if="$page.props.flash.message" class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
        <div>
            {{$page.props.flash.message}}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div v-if="$page.props.flash.exception" class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
        <div>
            {{$page.props.flash.exception}}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
</template>