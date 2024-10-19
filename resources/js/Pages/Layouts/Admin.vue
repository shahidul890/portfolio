<template>
    <div class="d-flex">
        <sidebar class="d-flex flex-column flex-shrink-0 p-3 min-vh-100" style="width:280px; background-color: #040312;">

            <a href="/" class="d-flex align-items-center text-white text-decoration-none">
                <!-- <div> <i class="fa-brands fa-speaker-deck h5 m-0 me-2"></i> </div> -->
                <span class="fs-4 mx-auto text-orange"> <i>shahidul.com.bd</i> </span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <Link href="/cp/home" class="nav-link text-white" :class="{'active': $page.url === '/cp/home'}" aria-current="page">
                    <i class="fa fa-gauge me-2" width="20" height="20"></i>
                        Dashboard
                    </Link>
                </li>
                <li>
                    <Link href="/cp/categories" class="nav-link text-white" :class="{'active': $page.url === '/cp/categories'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa fa-layer-group me-2" width="20" height="20"></i>
                        Categories
                    </Link>
                </li>
                <li>
                    <Link href="/cp/tags" class="nav-link text-white" :class="{'active': $page.url === '/cp/tags'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa fa-tags me-2" width="20" height="20"></i>
                        Tags
                    </Link>
                </li>
                <li>
                    <Link href="/cp/projects" class="nav-link text-white" :class="{'active': $page.url === '/cp/projects'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa fa-diagram-project me-2" width="20" height="20"></i>
                        Projects
                    </Link>
                </li>
                <li>
                    <Link href="/cp/skills" class="nav-link text-white" :class="{'active': $page.url === '/cp/skills'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa-brands fa-laravel me-2" width="20" height="20"></i>
                        Skills
                    </Link>
                </li>
                <li>
                    <Link href="/cp/services" class="nav-link text-white" :class="{'active': $page.url === '/cp/services'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa fa-wrench me-2" width="20" height="20"></i>
                        Services
                    </Link>
                </li>
                <li>
                    <Link href="/cp/blogs" class="nav-link text-white" :class="{'active': $page.url === '/cp/blogs'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa-brands fa-blogger me-2" width="20" height="20"></i>
                        Blogs
                    </Link>
                </li>
                <li>
                    <Link href="/cp/contact-requests" class="nav-link text-white" :class="{'active': $page.url === '/cp/contact-requests'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa fa-envelope me-2" width="20" height="20"></i>
                        Contact Requests
                    </Link>
                </li>
                <li>
                    <Link href="/cp/settings" class="nav-link text-white" :class="{'active': $page.url === '/cp/settings'}">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa fa-gear me-2" width="20" height="20"></i>
                        Settings
                    </Link>
                </li>
                <li>
                    <Link href="/cp/logout" method="post" as="button" class="nav-link text-white">
                    <!-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg> -->
                    <i class="fa fa-right-from-bracket me-2" width="20" height="20"></i>
                        Logout
                    </Link>
                </li>
            
            </ul>
        </sidebar>

        <main class="w-100">
        
            <nav class="navbar navbar-expand-md shadow-sm">
                <div class="container">
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            <li class="nav-item dropdown">
                                <Link id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $page.props.auth.user.name }}
                                </Link>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <Link class="dropdown-item" href="/logout" method="post" as="button">Logout</Link>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="py-4"><slot/></div>

        </main>
    </div>
</template>

<script setup>
import { Link, router } from '@inertiajs/vue3';
</script>
