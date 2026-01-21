<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;

Route::get('/', function () {
    return view('welcome', [
        'seo' => [
            'title' => 'Bedi Buildwell | Leading Construction Company',
            'description' => 'Bedi Buildwell is a leading construction company delivering quality projects with precision and excellence. Expert construction services for residential and commercial projects.',
            'keywords' => 'construction company, building contractors, construction services, Bedi Buildwell, construction India',
            'canonical' => url('/'),
            'is_homepage' => true,
        ],
        'bodyClass' => 'home wp-singular page-template page-template-tmpl page-template-template-fullwidth page-template-tmpltemplate-fullwidth-php page page-id-40 wp-theme-hank theme-hank woocommerce-no-js sliding-desktop-off sliding-overlay layout-wide wpb-js-composer js-comp-ver-6.8.0 vc_responsive',
    ]);
})->name('welcome');

Route::get('/about', function () {
    return view('about', [
        'seo' => [
            'title' => 'About Us | Bedi Buildwell - Your Trusted Construction Partner',
            'description' => 'Learn about Bedi Buildwell, a trusted construction partner with years of experience delivering quality construction projects. Discover our history, values, and commitment to excellence.',
            'keywords' => 'about Bedi Buildwell, construction company history, construction team, building contractors',
            'canonical' => url('/about'),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'About Us', 'url' => url('/about')],
            ],
        ],
    ]);
})->name('about');

Route::get('/projects', function () {
    return view('projects', [
        'seo' => [
            'title' => 'Projects | Bedi Buildwell - Our Construction Portfolio',
            'description' => 'Explore Bedi Buildwell\'s portfolio of successful construction projects. View our completed residential and commercial construction projects.',
            'keywords' => 'construction projects, building portfolio, completed projects, construction gallery',
            'canonical' => url('/projects'),
        ],
    ]);
})->name('projects');

Route::get('/core-values', function () {
    return view('pages.core-values', [
        'seo' => [
            'title' => 'Core Values | Bedi Buildwell',
            'description' => 'Discover the core values that drive Bedi Buildwell. Quality, integrity, safety, and excellence guide every construction project we undertake.',
            'keywords' => 'construction values, company values, building ethics, construction principles',
            'canonical' => url('/core-values'),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'About Us', 'url' => url('/about')],
                ['name' => 'Core Values', 'url' => url('/core-values')],
            ],
        ],
    ]);
})->name('core-values');

Route::get('/leadership', function () {
    return view('pages.leadership', [
        'seo' => [
            'title' => 'Leadership Team | Bedi Buildwell',
            'description' => 'Meet the leadership team at Bedi Buildwell. Experienced professionals dedicated to delivering exceptional construction services and building lasting relationships.',
            'keywords' => 'construction leadership, company executives, construction management team',
            'canonical' => url('/leadership'),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'About Us', 'url' => url('/about')],
                ['name' => 'Leadership', 'url' => url('/leadership')],
            ],
        ],
    ]);
})->name('leadership');

Route::get('/why-choose-us', function () {
    return view('pages.why-choose-us', [
        'seo' => [
            'title' => 'Why Choose Us | Bedi Buildwell',
            'description' => 'Discover why clients choose Bedi Buildwell for their construction needs. Quality craftsmanship, timely delivery, competitive pricing, and exceptional customer service.',
            'keywords' => 'why choose Bedi Buildwell, construction advantages, best construction company',
            'canonical' => url('/why-choose-us'),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'About Us', 'url' => url('/about')],
                ['name' => 'Why Choose Us', 'url' => url('/why-choose-us')],
            ],
        ],
    ]);
})->name('why-choose-us');

Route::get('/contact', function () {
    return view('pages.contact', [
        'seo' => [
            'title' => 'Contact Us | Bedi Buildwell - Get in Touch',
            'description' => 'Contact Bedi Buildwell for your construction needs. Get in touch with our team for expert construction services, project consultations, and quotes.',
            'keywords' => 'contact Bedi Buildwell, construction contact, building consultation, construction quote',
            'canonical' => url('/contact'),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'Contact Us', 'url' => url('/contact')],
            ],
        ],
    ]);
})->name('contact');

Route::get('/experience', function () {
    return view('pages.experience', [
        'seo' => [
            'title' => 'Our Services & Experience | Bedi Buildwell',
            'description' => 'Explore Bedi Buildwell\'s comprehensive construction services and extensive experience. From design-build to construction management, we deliver excellence in every project.',
            'keywords' => 'construction services, building services, construction experience, design build, construction management',
            'canonical' => url('/experience'),
            'breadcrumbs' => [
                ['name' => 'Home', 'url' => url('/')],
                ['name' => 'Services & Experience', 'url' => url('/experience')],
            ],
        ],
    ]);
})->name('experience');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/calculator', function () {
    return view('pages.calculator', [
        'seo' => [
            'title' => 'Construction Cost Calculator | Bedi Buildwell',
            'description' => 'Use Bedi Buildwell\'s free construction cost calculator to estimate your project costs. Get accurate construction cost estimates for your building project.',
            'keywords' => 'construction calculator, building cost calculator, construction cost estimate, project cost calculator',
            'canonical' => url('/calculator'),
        ],
    ]);
})->name('calculator');

// Sitemap route
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/login', function () {
    return view('auth.login')->with('title', 'Login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->with('title', 'Dashboard');
    })->name('dashboard');
});
