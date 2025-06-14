<?php

namespace App\Http\Controllers;

use App\User;
use Wink\WinkPost;
use App\Appointment;
use App\Contact;
//use App\Mail\Contact;
use App\Mail\Consultation;
use Spatie\Sitemap\Sitemap;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Spatie\Sitemap\SitemapGenerator;

class websiteController extends Controller
{
    public function appointment(Request $request)
    {
        //dd($request->input());
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|string|email|max:30|min:3',
            'service' => 'required|string|max:20|min:3'.Rule::in(getServices()),
            'phone' => 'required|numeric|digits:10',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with([
                "formid"=>$request->formid
            ])->withErrors($validator)->withInput();
        }
        $appointment =  new Appointment();
        $appointment->name = $request->get('name');
        $appointment->email = $request->get('email');
        $appointment->service = $request->get('service');
        $appointment->phone = $request->get('phone');
        $appointment->ip_address = $_SERVER['REMOTE_ADDR'];
        if($request->formid=='1'){
            $appointment->page = 'Home page';
        }
        elseif($request->formid=='2'){
            $appointment->page = 'Landing Pop Up';
        }
        elseif($request->formid=='3'){
            $appointment->page = 'Landing Top';
        }
        elseif($request->formid=='4'){
            $appointment->page = 'Landing Bottom';
        }
        elseif($request->formid=='5'){
            $appointment->page = 'Landing Slider';
        }
        else{
            $appointment->page = 'NA';
        }
        $data=$appointment;
        //sending mail'
        Mail::to(config('app.mail_to'))->send(new Consultation($data));

        if (!Mail::failures() && $appointment->save()) {
            return redirect(route('appointment.thank-you'));
        }
        else{
            return redirect()->back()->with([
                "message" => "Something went wrong. Please contact us on email or phone.",
                "alert-type" => "error"
            ]);
        }
        // return redirect()->back()->with([
        //     "message" => "Appoinment request sent. We will shortly confirm your appointment.",
        //     "alert-type" => "success"
        // ]);
    }
    // public function contact(Request $request)
    // {
    //     // dd($request);
    //     $request->validate([
    //         'name' => 'required|string',
    //         'email' => 'required|string',
    //         'service' => 'required',
    //         'phone' => 'required|string|digits:10',
    //     ]);
    //     $contact =  (object) array();
    //     $contact->name = $request->get('name');
    //     $contact->email = $request->get('email');
    //     $contact->service = $request->get('service');
    //     $contact->phone = $request->get('phone');

    //     //send mail
    //     Mail::to(config('app.mail_to'))->send(new Contact($contact));

    //     if (Mail::failures()) {
    //         return redirect()->back()->with([
    //             "message" => "Something went wrong. Please contact us on email or phone.",
    //             "alert-type" => "error"
    //         ]);
    //     }
    //     // $contact->save();
    //     return redirect()->back()->with([
    //         "message" => "Appoinment request sent. We will shortly confirm your appointment.",
    //         "alert-type" => "success"
    //     ]);
    // }

    public function generateSiteMap()
    {

        // $path = public_path('sitemap.xml');
        // SitemapGenerator::create('http://vec.digitalservices.co.in')->writeToFile($path);

        $sitemap = Sitemap::create(env("APP_URL"));

        $sitemap->add(url('/'))
            ->add(url('about'))
            ->add(url('services'))
            ->add(url('cataract-surgery-aftercare'))
            ->add(url('cataract-surgery-mumbai'))
            ->add(url('cataract-service'))
            ->add(url('lensex-cataract-surgery'))
            ->add(url('cornea-service'))
            ->add(url('pterygium'))
            ->add(url('kearatocnus'))
            ->add(url('cornea-ulcer'))
            ->add(url('corneal-transplant'))
            ->add(url('lasik-service'))
            ->add(url('lasik-eye-surgery-mumbai'))
            ->add(url('testimonial'))
            ->add(url('medical-tourism'))
            ->add(url('retina-service'))
            ->add(url('retina-specialist-mumbai'))
            ->add(url('retinal-detachment'))
            ->add(url('dry-eyes-treatment'))
            ->add(url('age-related'))
            ->add(url('age-related-macular-degeneration-treatment'))
            ->add(url('diabetic-retinopathy'))
            ->add(url('laser'))
            ->add(url('anti-vgefs'))
            ->add(url('retinopathy-of-prematurity'))
            ->add(url('retinits-pigmentosa'))
            ->add(url('refraction'))
            ->add(url('glaucoma-surgery-mumbai'))
            ->add(url('squint'))
            ->add(url('oculoplasty-service'))
            ->add(url('chalazion'))
            ->add(url('ptosis'))
            ->add(url('photos'))
            ->add(url('videos'))
            ->add(url('home-test'));


        WinkPost::select()
            ->live()
            ->orderBy('publish_date', 'DESC')
            ->get()->each(function ($row) use (&$sitemap) {
                $blogSlug = $row->slug;
                $sitemap = $sitemap->add(
                    Url::create(url("blog", [$blogSlug]))
                        ->setLastModificationDate($row->updated_at)
                );
            });


        return $sitemap->toResponse([]);
        // $sitemap->writeToFile($path);
    }
    public function bookTeleAppointment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:20',
            'email' => 'required|string|email|max:30|min:3',
            'service' => 'required|string|max:20|min:3',
            'phone' => 'required|numeric|digits:10',
            // 'billing_address'=>'nullable|string|min:3|max:80',
            // 'billing_city'=>'required|string|min:3|max:50',
            // 'billing_state'=>'required|string|min:3|max:50',
            // 'billing_country'=>'required|string|min:3|max:50',
            // 'billing_zip'=>'required|string',
        ]);
        // dd($request);
        $toAdmin = ['email' => $request->email, 'name' => $request->name, 'mobile' => $request->phone, 'service' => $request->service];

        $contact=new Contact();

        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->service=$request->service;
        $contact->phone=$request->phone;
        $contact->ip_address=$_SERVER['REMOTE_ADDR'];

        Mail::to(env('MAIL_TO'))->send(new \App\Mail\Success(null, $toAdmin));

        if(!Mail::failures() && $contact->save()){
            return redirect()->route('tele-consultation.thankyou')->with(["message"=>"Appointment Submitted Successfully.","alert-type"=>"success"]);
        }
        else{
            return redirect()->back()->with(["message"=>"Something Went Wrong.","alert-type"=>"error"]);
        }
    }
}
