@extends("layouts.blog-details")

@section("page_title", \Str::ucfirst($blog->title))

@section('metatags')
    <x-blogs.metatags :blog="$blog" />
@endsection

@section("blog-content")
    <article>
        
        <x-blogs.title :blog="$blog" />

        <section>
            <p>Hi devs,</p>

            <p>In this tutorial, we will discuss how to run a specific seeder in <a href="https://www.laravel.com" target="__blank">Laravel</a>. Here you will learn how to run a specific seeder in Laravel projects. This article goes in detail on how to call a specific seeder in Laravel. Let’s discuss how to run one seed file.</p>

            <p>Here, I will give you a simple example of how to run a specific seeder file in Laravel. You can easily use this example with Laravel 6, Laravel 7, Laravel 8, Laravel 9, Laravel 10, and Laravel 11 versions.</p>

            <h5 class="section-title">How to Run Specific Seeder in Laravel</h5>
            <p>You can use the following command to run a specific seeder in your Laravel application:</p>

            <pre><code>php artisan db:seed --class=AdminSeeder</code></pre>

            <h5 class="section-title">Your Seeder Code</h5>
            <p>Your seeder file might look something like this:</p>
            <pre>
<code>use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
</code>
</pre>

            <h5 class="section-title">How to Make a Seeder File in Laravel</h5>
            <p>You can create a seeder file using the following command:</p>
            <pre><code>php artisan make:seeder AdminSeeder</code></pre>

            <h5 class="section-title">Run All Seeders</h5>
            <p>You can use the following command to run all seeders in your Laravel application:</p>
            <pre><code>php artisan db:seed</code></pre>

            <h5 class="section-title">Run Migrations with Seeder</h5>
            <p>You can also run migrations along with seeders using this command:</p>
            <pre><code>php artisan migrate:fresh --seed</code></pre>
        </section>
    </article>
@endsection