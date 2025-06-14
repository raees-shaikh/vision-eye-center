<?php

use Illuminate\Filesystem\Cache;
use Wink\WinkPost;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\MirrorWisdomController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ccavenue payment testing routes start here

// 1. shows forms
// Route::get('teleconsultation/test', function () {
//     return view('CC.IFRAME_KIT.contact');
// })->name('contact');

// 2. redirect to ccavenue
// Route::post('teleconsultation/confirm', function (Request $request) {
//     // dd($request->all());
//     $request->validate([
//         'name' => 'required|string',
//         'email' => 'required|email',
//         'amount' => ['required', Rule::in([1.00])],
//         'billing_address' => 'required|string',
//         'billing_city' => 'required|string',
//         'billing_state' => 'required|string',
//         'billing_country' => 'required|string',
//         'billing_zip' => 'required|numeric|digits_between:6,10',
//         'service' => 'required|string',
//         'phone' => 'required|string|digits:10',
//     ]);

//     $array = collect($_POST);
//     $billin_name = [];
//     $array['billing_name'] = $_POST['name'];
//     $array['billing_email'] = $_POST['email'];
//     $array['billing_tel'] = $_POST['phone'];
//     $array['merchant_param1'] = $_POST['service'];
//     session()->put('data', $array);
//     //x    dd(session()->get('data'));
//     return redirect()->route('payment.test');
// });


// 3. ccavenue payment iframe
// Route::any('teleconsultation/test/payment', function () {
//     //    session()->put('data',$_POST);
//     return view('CC.IFRAME_KIT.payment');
// })->name('payment.test');

// Test payment routes end here



//blog login
Route::domain(config('app.domain.blog'))->group(function () {
    Route::get('/', function () {
        return redirect()->route('wink.auth.login');
    });
});

Route::domain(config('app.domain.web'))->group(function () {
    Route::get('landing-page', function(){
        $result=  getReviews();
        $reviews= $result['reviews'];
        $totalReviews= $result['totalReviews'];
        $totalRating= $result['totalRating'];
        return view('landing-page',compact( 'reviews','totalReviews','totalRating'));
    });

    Route::get('teleconsultation', function () {
        return view('CC.IFRAME_KIT.contact');
    })->name('contact');

    Route::post('/book/appointment/submit', 'websiteController@bookTeleAppointment')->name('book.teleAppointment.submit');

    // Route::post('teleconsultation/secure/confirm', function (Request $request) {
    //     $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         // 'amount' => ['required',Rule::in([1000.00])],
    //         'billing_address' => 'required|string',
    //         'billing_city' => 'required|string',
    //         'billing_state' => 'required|string',
    //         'billing_country' => 'required|string',
    //         'billing_zip' => 'required|numeric|digits_between:6,10',
    //         'service' => 'required|string',
    //         'phone' => 'required|string|digits:10',
    //     ]);

    //     $array = collect($_POST);
    //     $billin_name = [];
    //     $array['billing_name'] = $_POST['name'];
    //     $array['billing_email'] = $_POST['email'];
    //     $array['billing_tel'] = $_POST['phone'];
    //     $array['merchant_param1'] = $_POST['service'];
    //     session()->put('data', $array);
    //     //x    dd(session()->get('data'));
    //     return redirect()->route('payment.secure');
    // });

    // Route::any('teleconsultation/secure/payment', function () {
    //     return view('CC.IFRAME_KIT.payment');
    // })->name('payment.secure');

    // Route::any('teleconsultation/response', function () {
    //     return view('CC.IFRAME_KIT.response');
    // });

    Route::get('/', function () {
        $result=  getReviews();

        $reviews= $result['reviews'];
        $totalReviews= $result['totalReviews'];
        $totalRating= $result['totalRating'];

        $posts = WinkPost::with('tags')
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->limit(3)->get();
        return view('index', compact('posts' , 'reviews','totalReviews','totalRating'));
    })->name('index');

    Route::get('about', function () {
        return view('about');
    })->name('about');

    Route::get('services', function () {
        return view('services');
    })->name('services');

    Route::get('cataract-surgery-aftercare', function () {
        return redirect(route('cataract'), 301);
    })->name('cataract-old');

    Route::get('cataract-surgery-mumbai', function () {
        return view('cataract');
    })->name('cataract');

    Route::get('cataract-service', function () {
        return view('cataract-service');
    })->name('cataract-service');

    Route::get('lensex-cataract-surgery', function () {
        return view('lensex-cataract-surgery');
    })->name('lensex-cataract-surgery');

    Route::get('cornea-service', function () {
        return view('cornea-service');
    })->name('cornea-service');

    Route::get('pterygium', function () {
        return view('pterygium');
    })->name('pterygium');

    Route::get('kearatocnus', function () {
        return view('kearatocnus');
    })->name('kearatocnus');

    Route::get('cornea-ulcer', function () {
        return view('cornea-ulcer');
    })->name('cornea-ulcer');

    Route::get('corneal-transplant', function () {
        return view('corneal-transplant');
    })->name('corneal-transplant');

    Route::get('lasik-service', function () {
        return view('lasik-service');
    })->name('lasik-service');

    Route::get('lasik-eye-surgery-mumbai', function () {
        return view('lasik');
    })->name('lasik');
    Route::post('appointment', 'websiteController@appointment');
    // Route::post('contact', 'websiteController@contact');

    Route::get('testimonial', function () {
        return view('testimonial');
    })->name('testimonial');

    Route::get('medical-tourism', function () {
        return view('medical-tourism');
    })->name('medical-tourism');

    Route::get('retina-service', function () {
        return redirect(route('retina-service'), 301);
    })->name('retina-service-old');

    Route::get('retina-specialist-mumbai', function () {
        return view('retina-service');
    })->name('retina-service');

    Route::get('retinal-detachment', function () {
        return view('retinal-detachment');
    })->name('retinal-detachment');

    Route::get('dry-eye', function () {
        return redirect(route('dry-eye'), 301);
    })->name('dry-eye-old');

    Route::get('dry-eyes-treatment', function () {
        return view('dry-eye');
    })->name('dry-eye');

    Route::get('age-related', function () {
        return redirect(route('age-related'), 301);
    })->name('age-related-old');

    Route::get('age-related-macular-degeneration-treatment', function () {
        return view('age-related');
    })->name('age-related');

    Route::get('diabetic-retinopathy', function () {
        return view('diabetic-retinopathy');
    })->name('diabetic-retinopathy');

    Route::get('laser', function () {
        return view('laser');
    })->name('laser');

    Route::get('anti-vgefs', function () {
        return view('anti-vgefs');
    })->name('anti-vgefs');

    Route::get('retinopathy-of-prematurity', function () {
        return view('retinopathy-prematurity');
    })->name('retinopathy-prematurity');

    Route::get('retinits-pigmentosa', function () {
        return view('retinits-pigmentosa');
    })->name('retinits-pigmentosa');

    Route::get('refraction', function () {
        return view('refraction');
    })->name('refraction');

    Route::get('glaucoma', function () {
        return redirect(route('glaucoma'), 301);
    })->name('glaucoma-old');

    Route::get('glaucoma-surgery-mumbai', function () {
        return view('glaucoma');
    })->name('glaucoma');

    Route::get('squint', function () {
        return view('squint');
    })->name('squint');

    Route::get('oculoplasty-service', function () {
        return view('oculoplasty-service');
    })->name('oculoplasty-service');

    Route::get('chalazion', function () {
        return view('chalazion');
    })->name('chalazion');

    Route::get('ptosis', function () {
        return view('ptosis');
    })->name('ptosis');

    Route::get('photos', function () {
        return view('photos');
    })->name('photos');

    // Route::get('mirror-wisdom-reflected', function () {
    //     return view('mirror-wisdom-reflected');
    // })->name('mirror-wisdom-reflected');

    Route::get('mirror-wisdom-reflected',[\App\Http\Controllers\frontend\MirrorWisdomController::class, 'index'])->name('mirror-wisdom-reflected');

    Route::get('home-test', function () {
        return view('home-test');
    })->name('home-test');

    Route::get('appointment/thank-you', function () {
        if (request()->headers->get('referer') == config('app.url') . '/') {
            return view('appointment-thankyou');
        }
        elseif(request()->headers->get('referer') == config('app.url') . '/landing-page'){
            return view('appointment-thankyou');
        } else {
            // abort(403);
            return redirect()->route('index');
        }
    })->name('appointment.thank-you');

    Route::get('tele-consultation/thank-you', function () {
        if (request()->headers->get('referer') == config('app.url') . '/teleconsultation') {
            return view('appointment-thankyou');
        } else {
            // abort(403);
            return redirect()->route('index');
        }
    })->name('tele-consultation.thankyou');

    // Route::get('payment-thankyou', function () {
    //     return view('payment-thankyou');
    // })->name('payment-thankyou');

    // Route::get('sitemap', function () {
    //     return view('sitemap');
    // })->name('sitemap');

    Route::resource('blog', 'BlogController')->parameters(['blog' => 'slug'])->only('index', 'show');

    Route::get('404', function () {
        return view('404');
    })->name('404');

    //unused routes

    // Route::get('/email/sample', function () {
    //     return new Contact();
    // });

    // Route::get('blog-detail', function () {
    //     return view('blog-detail');
    // })->name('blog-detail');

});

// Route::get('sitemap.xml', "websiteController@generateSiteMap");

//ccavenue dummy testing routes

// Route::get('dataFrom', function () {
//     return view('CC.NON_SEAMLESS_KIT.dataFrom');
// });
// Route::get('cc', function(){
//     return view('CC.NON_SEAMLESS_KIT.dataFrom');
// })->name('payment-page');

// Route::post('payment', function () {
//     return view('CC.NON_SEAMLESS_KIT.ccavRequestHandler');
// });

// Route::get('teleconsultation/dataFrom', function () {
//     return view("CC.IFRAME_KIT.dataFrom");
// });

// Route::post('ccavRequestHandler', function () {
//     return view('CC.IFRAME_KIT.ccavRequestHandler');
// });

// Route::get('newContact/{url}', function () {
//     return view('CC.IFRAME_KIT.contact');
// });


Route::get('lasik-eye-surgery-mumbai/bladefree-lasik', function () {
    return view('bladefree-lasik');
})->name('bladefree-lasik');

Route::get('cataract-surgery-mumbai/femtosecond-laser', function () {
    return view('femtosecond-laser');
})->name('femtosecond-laser');

Route::get('cataract-surgery-mumbai/multifocal-trifocal', function () {
    return view('multifocal-trifocal');
})->name('multifocal-trifocal');









