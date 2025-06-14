@switch($pageMeta)
    @case(\Request::is('/'))
        <title> Best Eye Doctor, Eye Specialist & Surgeon in Mumbai - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Dr. Himanshu Mehta is one of the best ophthalmologists in Mumbai. Contact us to schedule an appointment for cataract surgery, lasik surgery or dry eyes treatment!">

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://vissioneyes.com/">
        <meta property="og:type" content="website">
        <meta property="og:title"
            content=" Best Eye Specialist Dr. Himanshu Mehta a Surgeon Or Ophthalmologist | Eye Specialist Hospital in Mumbai">
        <meta property="og:description"
            content="At Vission Eye Center Dr. Himanshu Mehta an ophthalmologists provide medical and surgical treatment of eye diseases. To book an appointment contact us now!">
        <meta property="og:image" content="https://vissioneyes.com/img/main-banner01.png">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="vissioneyes.com">
        <meta property="twitter:url" content="https://vissioneyes.com/">
        <meta name="twitter:title"
            content=" Best Eye Specialist Dr. Himanshu Mehta a Surgeon Or Ophthalmologist | Eye Specialist Hospital in Mumbai">
        <meta name="twitter:description"
            content="At Vission Eye Center Dr. Himanshu Mehta an ophthalmologists provide medical and surgical treatment of eye diseases. To book an appointment contact us now!">
        <meta name="twitter:image" content="https://vissioneyes.com/img/main-banner01.png">
    @break

    @case(\Request::is('about'))
        <title>About - {{ config('app.name') }}</title>
        <meta name="description"
            content="Eye Clinic in Mumbai provies best Ophthalmologist services namely lasik, cataract, retinal detachment, diabetic retinopathy, macular degeneration etc.  " />
    @break

    @case(\Request::is('services'))
        <title>Eye Treatment Facility Service - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="The Vission Eye Centre - best ophthalmologist in Mumbai provide eye treatment services like - Cataract, LASIK, Dry Eye Suite, Cornea, Refraction, Retina, Glaucoma, Squint, and many more." />
    @break

    @case(\Request::is('teleconsultation'))
        <title>Teleconsultation - {{ config('app.name') }}</title>
        <meta name="description"
            content="best ophthalmologist services with best eye care doctor dr. Himanshu mehta in Juhu, Mumbai, India." />
    @break

    @case(\Request::is('lensex-cataract-surgery'))
        <title>LenSx Cataract Surgery - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Vission eyes centre's lensx laser system is designed to offer precision and efficiency with reproducible outcomes for your patients. Visit Vission Eyes to learn more." />
            <meta property="og:title" content=LenSx Cataract Surgery>
<meta property="og:site_name" content=The Vission Eye Center - Dr. Himanshu Mehta>
<meta property="og:url" content=https://vissioneyes.com/lensex-cataract-surgery>
<meta property="og:description" content=Vission eyes centre's lensx laser system is designed to offer precision and efficiency with reproducible outcomes for your patients. Visit Vission Eyes to learn more.>
<meta property="og:type" content=website>
<meta property="og:image" content=https://vissioneyes.com/img/services/refraction.jpg>

    @break

    @case(\Request::is('cataract-surgery-mumbai'))
        <title> Best Cataract Surgeon & Cataract Surgery in Mumbai - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Dr. Himanshu Mehta is one of the best cataract eye specialists in Mumbai. Visit us for info. on cataract operation cost, surgery and treatment methods etc." />

        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://vissioneyes.com/cataract-surgery-mumbai/">
        <meta property="og:type" content="website">
        <meta property="og:title" content=" Dr. Himanshu Mehta a Best Cataract Eye Surgery Specialist in Mumbai India">
        <meta property="og:description"
            content=" Get the cost of a cataract operation in Mumbai. Dr. Himanshu Mehta has a particular interest in Cataract Eye Surgery. He has credit for more than 5000 surgeries.">
        <meta property="og:image" content="https://vissioneyes.com/img/services/cataract.jpg">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="vissioneyes.com">
        <meta property="twitter:url" content="https://vissioneyes.com/cataract-surgery-mumbai/">
        <meta name="twitter:title" content=" Dr. Himanshu Mehta a Best Cataract Eye Surgery Specialist in Mumbai India">
        <meta name="twitter:description"
            content=" Get the cost of a cataract operation in Mumbai. Dr. Himanshu Mehta has a particular interest in Cataract Eye Surgery. He has credit for more than 5000 surgeries.">
        <meta name="twitter:image" content="https://vissioneyes.com/img/services/cataract.jpg">
    @break

    @case(\Request::is('cataract-service'))
        <title>Cataract Services - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Our cataract services are performed with sterile techniques and in a comfortable, relaxed atmosphere. We use the best equipment available to ensure the safety of you and your optical needs." />
    @break

    @case(\Request::is('cornea-service'))
        <title>Cornea - {{ config('app.name') }}</title>
        <meta name="description"
            content="We at Vission eye provides aftercare vision treatments with no cataract surgery complications hence taking care of your vision even after surgery. Book your consultation to know more" />
    @break

    @case(\Request::is('pterygium'))
        <title>Pterygium Surgery | Pterygium Eye Treatment & Surgery</title>
        <meta name="description"
            content="Pterygium surgery is a minimally invasive procedure performed to remove benign conjunctiva growths (pterygia) from the eye." />
    @break

    @case(\Request::is('kearatocnus'))
        <title>Kearatocnus Surgery - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Keratoconus often affects both eyes and can lead to very different vision between the two eyes. Symptoms can differ in each eye, and they can change over time. Consult us for better treatment." />
    @break

    @case(\Request::is('cornea-ulcer'))
        <title>Corneal Ulcer Treatment | Eye Ulcer Treatment | Corneal Ulcer Surgery</title>
        <meta name="description"
            content="You must visit your ophthalmologist immediately if you think you have a corneal ulcer or any symptoms that concern you. " />
    @break

    @case(\Request::is('corneal-transplant'))
        <title>Corneal Transplant | Cornea Transplant Cost</title>
        <meta name="description"
            content="There are different types of corneal transplants. In some cases, only the front and middle layers of the cornea are replaced. In others, only the inner layer is removed." />
    @break

    @case(\Request::is('lasik-eye-surgery-mumbai'))
        <title>Laser & Lasik Eye Surgery in Mumbai, India - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="As a renowned eye specialist, Dr. Himanshu Mehta conducts the best Laser or Lasik Eye Surgery in Mumbai. Visit Vissioneyes.com for more info. on Lasik Eye Surgery cost." />


        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://vissioneyes.com/lasik-eye-surgery-mumbai/">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Dr. Himanshu Mehta a Best Lasik Eye Surgeon in Mumbai India">
        <meta property="og:description"
            content="Get the cost of Laser (LASIK) Eye Surgery in Mumbai. Blade free Lasik eye surgeries by best eye specialist Dr. Himanshu Mehta in Mumbai at Vission Eye Center.">
        <meta property="og:image" content="https://vissioneyes.com/img/services/Lasik.jpg">



        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="vissioneyes.com">
        <meta property="twitter:url" content="https://vissioneyes.com/lasik-eye-surgery-mumbai/">
        <meta name="twitter:title" content="Dr. Himanshu Mehta a Best Lasik Eye Surgeon in Mumbai India">
        <meta name="twitter:description"
            content="Get the cost of Laser (LASIK) Eye Surgery in Mumbai. Blade free Lasik eye surgeries by best eye specialist Dr. Himanshu Mehta in Mumbai at Vission Eye Center.">
        <meta name="twitter:image" content="https://vissioneyes.com/img/services/Lasik.jpg">
    @break

    @case(\Request::is('lasik-service'))
        <title>Lasik Services - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Our lasik services are performed with sterile techniques and in a comfortable, relaxed atmosphere. We use the best equipment available to ensure the safety of you and your optical needs." />
    @break

    @case(\Request::is('retina-specialist-mumbai'))
        <title> Dr. Himanshu Mehta a Best Retina Specialist in Mumbai India</title>
        <meta name="description"
            content="Dr. Himanshu Mehta a Retinal Detachment Treatment Specialist in Mumbai. They have operated some of the oldest living patients and have successfully restored sight in them." />
    @break

    @case(\Request::is('retinal-detachment'))
        <title>Retinal Detachment Treatment | Retinal Detachment Surgery</title>
        <meta name="description"
            content="If objects seem to be floating across your eye or a gray veil is moving into your field of vision, you could have a retinal detachment. Learn how it’s treated with Vission Eye Centre." />
        <meta name="keywords"
            content="retinal detachment in India, best ophthalmologist in mumbai, eye surgeon in mumbai, eye treatment in mumbai" />
    @break

    @case(\Request::is('dry-eyes-treatment'))
        <title> Dry Eyes Treatment and Diagnosis in Mumbai, India By Dr. Himanshu Mehta</title>
        <meta name="description"
            content="At Vission Eye Center, Dr. Himanshu Mehta - best dry eye specialist in Mumbai helps you to identify the causes & recommends an appropriate treatment for dry eyes. Visit now!" />


        <!-- Facebook Meta Tags -->
        <meta property="og:url" content="https://vissioneyes.com/dry-eyes-treatment/">
        <meta property="og:type" content="website">
        <meta property="og:title" content=" Dry Eyes Treatment and Diagnosis in Mumbai, India By Dr. Himanshu Mehta">
        <meta property="og:description"
            content="Vission Eye Center our eye specialist Dr. Himanshu Mehta can assist you with causes, symptoms & Treatment. Book an appointment now!">
        <meta property="og:image" content="https://vissioneyes.com/img/services/dry-eye-suit.jpg">


        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:domain" content="vissioneyes.com">
        <meta property="twitter:url" content="https://vissioneyes.com/dry-eyes-treatment/">
        <meta name="twitter:title" content=" Dry Eyes Treatment and Diagnosis in Mumbai, India By Dr. Himanshu Mehta">
        <meta name="twitter:description"
            content="Vission Eye Center our eye specialist Dr. Himanshu Mehta can assist you with causes, symptoms & Treatment. Book an appointment now!">
        <meta name="twitter:image" content="https://vissioneyes.com/img/services/dry-eye-suit.jpg">
    @break

    @case(\Request::is('age-related-macular-degeneration-treatment'))
        <title>Treatment for Wet Age-Related Macular Degeneration | Vissioneyes</title>
        <meta name="description"
            content="Get complete treatment for wet age-related macular
                                            degeneration at Vission Eyes in Mumbai. Get a consultation from an eye specialist, Book an
                                            Appointment now! " />
    @break

    @case(\Request::is('diabetic-retinopathy'))
        <title>Diabetic Retinopathy - {{ config('app.name') }}</title>
        <meta name="description"
            content="Treatment of Diabetic retinopathy and symptoms is also known as diabetic eye disease in the medical terms in Mumbai, Navi Mumbai, Thane and Maharashtra India." />

    @break

    @case(\Request::is('laser'))
        <title>Retinal Laser Treatment | Retina Laser Surgery</title>
        <meta name="description"
            content="Vission Eye Centre is equipped with best-in-class retinal laser treatment facilities. Take a look at different types of retinal Laser, their procedure, benefits, and its suitability." />
    @break

    @case(\Request::is('anti-vgefs'))
        <title>Anti VGEF | antivgef - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Your ophthalmologist may treat your wet AMD or other retina problem with an anti-VEGF drug. This medicine slows or stops damage from abnormal blood vessels." />
    @break

    @case(\Request::is('retinopathy-of-prematurity'))
        <title>Retinopathy of Prematurity - {{ config('app.name') }}</title>
        <meta name="description"
            content="Take guideline for the prevention and treatment retinopathy of prematurity screening treatment at vision eye center in Juhu, Mumbai, Navi Mumbai, Thane, and Maharashtra India." />
    @break

    @case(\Request::is('retinits-pigmentosa'))
        <title>Retinits Pigmentosa - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Retinitis pigmentosa (RP) refers to a group of eye diseases that can cause blindness. What they have in common are specific changes in your doctor's retina, which is a bundle of tissue at the back of your eye." />
    @break

    @case(\Request::is('refraction'))
        <title>Refraction Error - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Refractive surgery is a surgical procedure performed to correct the refractive error (spectacle power) of the eye." />
    @break

    @case(\Request::is('glaucoma-surgery-mumbai'))
        <title> Glaucoma Surgery Treatment in Mumbai | Dr. Himanshu Mehta Glaucoma Surgeon</title>
        <meta name="description"
            content="Glaucoma Surgery treatment In Mumbai. The Vision Eye Center has Latest Equipment for diagnosis and treatment of Glaucoma!" />
    @break

    @case(\Request::is('squint'))
        <title>Squint Eye Treatment | Squint Surgery</title>
        <meta name="description"
            content="Squint is a misalignment of the eye where the two eyes are pointed towards different directions." />
    @break

    @case(\Request::is('oculoplasty-service'))
        <title>Oculoplasty Services - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Oculoplasty — often referred to as ophthalmic plastic surgery and oculoplastic surgery is surgery related to the eye and its surrounding structures." />
    @break

    @case(\Request::is('chalazion'))
        <title>Chalazion Treatment | Chalazion Surgery | Chalazion Eye Treatment</title>
        <meta name="description"
            content="Chalazion surgery entails removing a small lump that develops on the eyelid. Learn what to expect. Reviewed by Vission Eye Centre." />
    @break

    @case(\Request::is('ptosis'))
        <title>Ptosis Treatment | Eyelid Ptosis Surgery</title>
        <meta name="description"
            content="Ptosis treatment is where a small tuck in the lifting muscle and the removal of excess eyelid skin can sometimes raise the lid sufficiently." />
    @break

    @case(\Request::is('testimonial'))
        <title>Testimonial - The Vission Eye Center - Dr. Himanshu Mehta</title>
        <meta name="description"
            content="Testimonial - The Vission Eye Center - Dr. Himanshu Mehta - a statement testifying to benefits received" />
    @break

    @case(\Request::is('medical-tourism'))
        <title>Medical Tourism - {{ config('app.name') }}</title>
        <meta name="description"
            content="Got an eye problem? Want to be treated in India? No worries, get in touch with Best Ophthalmologist in Mumbai India. " />
    @break

    @case(\Request::is('home-test'))
        <title>Home Test - {{ config('app.name') }}</title>
        <meta name="description"
            content="The simple home test advice from Dr. Himanshu Mehta to check your color vision with step by step process." />
    @break

    @case(\Request::is('mirror-wisdom-reflected'))
        <title>Mirror Wisdom Reflected - {{ config('app.name') }}</title>
        <meta name="description"
            content="Vission eye center gallery includes clients videos, eye clinic testimonials etc. " />

    @break

    @case(\Request::is('photos'))
        <title>Photos - {{ config('app.name') }}</title>
        <meta name="description"
            content="Vission eye center gallery includes clients photos, eye clinic testimonials etc. " />
    @break

    @case(\Request::is('blog'))
        <title>Blog - {{ config('app.name') }}</title>
        <meta name="description"
            content="Vission Eye center blogs contains informative and knowledgeable articles regarding various types of eye surgeries!" />
        <meta name="keywords" content="" />
    @break

    @case(\Request::is('cataract-surgery-mumbai/femtosecond-laser'))
        <title>Femtosecond Laser Cataract Surgery | Femto Laser Treatment For Eye</title>
        <meta name="description"
            content="Femto Laser Cataract Surgery in Mumbai by Dr. Himanshu Mehta of Vission Eye center. Find out more about the procedure and benefits it offers over the other types of procedures." />
        <meta name="keywords" content="" />
        <meta property="og:title" content=Femto Laser Treatment For Eye>
<meta property="og:site_name" content=Vission Eye Center >
<meta property="og:url" content=https://vissioneyes.com/cataract-surgery-mumbai/femtosecond-laser>
<meta property="og:description" content=Femto Laser Cataract Surgery in Mumbai by Dr. Himanshu Mehta of Vission Eye center. Find out more about the procedure and benefits it offers over the other types of procedures.>
<meta property="og:type" content=website>
<meta property="og:image" content=https://vissioneyes.com/img/services/Lasik.jpg>

    @break

    @case(\Request::is('cataract-surgery-mumbai/multifocal-trifocal'))
        <title>Multifocal Lens Cataract Surgery | Trifocal Lenses For Cataract Surgery</title>
        <meta name="description"
            content="Multifocal lenses are prosthetic lenses that are used to replace natural lenses in intraocular surgeries to remove cataracts. Visit Vission Eyes Centre for better treatment for multifocal lenses." />
        <meta name="keywords" content="" />
        <meta property="og:title" content=Multifocal And Trifocal Lens Cataract Surgery>
<meta property="og:site_name" content=Vission Eye Center >
<meta property="og:url" content=https://vissioneyes.com/cataract-surgery-mumbai/multifocal-trifocal>
<meta property="og:description" content=Multifocal lenses are prosthetic lenses that are used to replace natural lenses in intraocular surgeries to remove cataracts. Visit Vission Eyes Centre for better treatment for multifocal lenses.>
<meta property="og:type" content=website>
<meta property="og:image" content=https://vissioneyes.com/img/services/Lasik.jpg>

    @break

    @case(\Request::is('lasik-eye-surgery-mumbai/bladefree-lasik'))
        <title>Blade Free Lasik Surgery | Blade Free Laser Eye Surgery</title>
        <meta name="description"
            content="For some patients, Blade free LASIK eye surgery can significantly reduce or eliminate the need for glasses or contacts. Find out more about the procedure and how it compares to traditional LASIK." />
        <meta name="keywords" content="" />
        <meta property="og:title" content=Blade Free Lasik Eye Surgery in Mumbai>
<meta property="og:site_name" content=Vission Eye Center >
<meta property="og:url" content=https://vissioneyes.com/lasik-eye-surgery-mumbai/bladefree-lasik>
<meta property="og:description" content=For some patients, Blade free LASIK eye surgery can significantly reduce or eliminate the need for glasses or contacts. Find out more about the procedure and how it compares to traditional LASIK.>
<meta property="og:type" content=website>
<meta property="og:image" content=https://vissioneyes.com/img/services/Lasik.jpg>
    @break

    @default
        <title>@yield('pageTitle'){{ config('app.name') }}{{-- Eye Specialist Hospital - Best Eye Specialist Doctors, Surgeons & Ophthalmologist in
                Mumbai --}}</title>
        {{-- <meta name="description" content="Vissioneyes.com - Best eye hospital in Mumbai.  Book appointment s
        with Ophthalmologist for Lasik, cataract, retinal detachment, diabetic retinopathy, macular degeneration
        etc" /> --}}
@endswitch
