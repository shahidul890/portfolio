@extends("layouts.blog-details")

@section("page_title", \Str::ucfirst($blog->title))

@section('metatags')
<x-blogs.metatags :blog="$blog" />
@endsection

@section("blog-content")
<div>

    <x-blogs.title :blog="$blog" />

    <div class="blog-content">
        <p>
            @islang('en')
            <a href="https://laravel.com/" target="__blank">Laravel</a> is a powerful PHP web application framework with
            elegant syntax. It simplifies tasks like routing, authentication, and caching. Designed for developers,
            Laravel promotes clean code and rapid development. With features like Eloquent ORM and Blade templating, it
            provides a robust foundation for building modern, scalable, and secure web applications.
            @else
            <a href="https://laravel.com/" target="__blank">লারাভেল</a> একটি শক্তিশালী পিএইচপি ওয়েব অ্যাপ্লিকেশন
            ফ্রেমওয়ার্ক, যার সিনট্যাক্স অত্যন্ত সুন্দর। এটি রাউটিং, অথেনটিকেশন এবং ক্যাশিং-এর মতো কাজগুলো সহজ করে তোলে।
            ডেভেলপারদের জন্য তৈরি এই ফ্রেমওয়ার্কটি পরিচ্ছন্ন কোড এবং দ্রুত ডেভেলপমেন্টে সহায়তা করে। ইলোকুয়েন্ট ORM
            এবং ব্লেড টেমপ্লেটিং-এর মতো ফিচারসহ এটি আধুনিক, স্কেলেবল এবং নিরাপদ ওয়েব অ্যাপ্লিকেশন তৈরির জন্য একটি
            শক্তিশালী ভিত্তি প্রদান করে।
            @endislang
        </p>

        <p>
            In this tutorial you will learn how we create a laravel project by command panel or terminal.
            To be a professional programmer, you should know the using of terminal. To setup a Laravel project via
            terminal, please make sure you have installed <a href="https://www.php.net/" target="__blank">PHP</a> and <a
                href="https://getcomposer.org/" target="__blank">Composer</a> in your system before starting. Here’s how
            you can create a basic Laravel project:

            <ul class="py-3 list-unstyled">
                <li class="mb-2">
                    <p class="h3">Step 1: Install Laravel</p>

                    <p>
                        Open your command-line interface (e.g., Terminal on macOS, Command Prompt on Windows).
                        Navigate to the directory where you want to create your Laravel project.
                        Run the following command to create a new Laravel project:

                        <code>
                            composer create-project --prefer-dist laravel/laravel your-project-name
                        </code>

                        Here you need to replace <small class="code-inline">your-project-name</small> with the name you
                        want for your Laravel project.
                    </p>
                </li>

                <li class="mb-2">
                    <p class="h3">Step 2: Configure Your Environment</p>

                    <p>
                        After the installation is complete, navigate into your project directory:

                        <code>cd your-project-name</code>

                        Create a copy of the <small class="code-inline">.env.example</small> file and rename it .env

                        <code>cp .env.example .env</code>

                        Generate an application key by entering command <small class="code-inline">php artisan
                            key:generate</small>
                    </p>
                </li>

                <li class="mb-2">
                    <p class="h3">Step 3: Set Up the Database</p>

                    <p>
                        Open the <small class="code-inline">.env</small> file in a text editor and configure your
                        database connection settings. You need to set the
                        <small class="code-inline">DB_CONNECTION</small>,
                        <small class="code-inline">DB_HOST</small>,
                        <small class="code-inline">DB_PORT</small>,
                        <small class="code-inline">DB_DATABASE</small>,
                        <small class="code-inline">DB_USERNAME</small>,
                        <small class="code-inline">DB_PASSWORD</small>.

                        Run database migrations to create the necessary database tables:

                        <code>php artisan migrate</code>
                    </p>
                </li>

                <li class="mb-2">
                    <p class="h3">Step 4: Start the Development Server</p>

                    <p>
                        You can start a development server by running: <small class="code-inline">php artisan
                            serve</small>. This will start a local development server at <small
                            class="code-inline">http://localhost:8000</small>
                    </p>
                </li>

                <li class="mb-2">
                    <p class="h3">Step 5: Create Your First Route and View</p>

                    <p>
                        Open the : <small class="code-inline">routes/wep.php</small> file and define a route that points
                        to a controller or a view.
                        For example, you can create a route that returns a basic welcome view:

                        <pre><code>Route::get('/', function () {
    return view('welcome');
});
</code></pre>

                        Create a corresponding Blade view file in the <small class="code-inline">resources/views</small>
                        directory. In this case, you can create a <small class="code-inline">welcome.blade.php</small>
                        file.

                        Access your Laravel application in your web browser at <small
                            class="code-inline">http:://localhost:8000</small>. You should see the "Welcome to Laravel"
                        page.
                    </p>
                </li>
            </ul>

            Congratulations! You’ve just created your first Laravel project. You can continue to build your application
            by defining routes, creating controllers, and adding functionality as needed. Laravel’s documentation is a
            valuable resource for learning more about its features and capabilities: <a href="https://laravel.com/"
                target="__blank">Laravel Documentation</a>
        </p>
    </div>
</div>
@endsection