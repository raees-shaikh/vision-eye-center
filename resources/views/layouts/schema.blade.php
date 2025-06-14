{{-- Organizational Schema --}}

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "The Vission Eye Center",
        "url": "https://vissioneyes.com/",
        "logo": "https://vissioneyes.com/img/logo.svg"
    }
</script>

{{-- Local Business Schema --}}

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "The Vission Eye Center - Dr. Himanshu Mehta",
        "image": "https://vissioneyes.com/img/logo.svg",
        "@id": "",
        "url": "https://vissioneyes.com/",
        "telephone": "+91 98676 56060",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "101, Hiralaya Apartment, Ashok Nagar, N S Rd Number 10, near IndusInd
            Bank,
            JVPD Scheme,
            Mumbai,
            Maharashtra,
            India ",
            "postalCode": " 400049",
            "addressCountry": "IN"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",


                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        },
        "sameAs": [
            "https://www.facebook.com/thevissioneyecenter/",
            "https://twitter.com/vissioneyecentr?lang=en",
            "https://www.instagram.com/vissioneye/"
        ]
    }
</script>

@switch($pageMeta)
    @case(\Request::is('/'))
        {{-- Aggregate Rating Schema --}}
        <script type="application/ld+json">
            {
            "@context": "https://schema.org/",
            "@type": "Product",
            "name": "The Vission Eye Center",
            "image": "https://vissioneyes.com/img/logo.svg",
            "description": "The Vission Eye Center is one of the most trusted Eye Specialist Hospitals in Mumbai.  The team is lead by Dr. Himanshu Mehta, a world-renowned optical surgeon, who has performed over 5,000 refractive treatments. Also, he has He is skilled to perform the most complicated cases from cataract to LASIK surgery to retinal detachment surgery and more. Once can visit vission eye center or call for consultation to get best eye treatment.",
            "brand": {
                "@type": "Brand",
                "name": "The Vission Eye Center"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.9",
                "bestRating": "5",
                "worstRating": "1",
                "ratingCount": "1162"
            }
            }
        </script>

    @break

    @case(\Request::is('lasik-eye-surgery-mumbai/bladefree-lasik'))
    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "BreadcrumbList",
          "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://vissioneyes.com/"
          },{
            "@type": "ListItem",
            "position": 2,
            "name": "Services",
            "item": "https://vissioneyes.com/services"
          },{
            "@type": "ListItem",
            "position": 3,
            "name": "BLADEFREE LASIK",
            "item": "https://vissioneyes.com/lasik-eye-surgery-mumbai/bladefree-lasik"
          }]
        }
        </script>
    @break
    @case(\Request::is('lasik-eye-surgery-mumbai'))
        {{-- Breadcrumb Schema --}}
        <script type="application/ld+json">
                {
                "@context": "https://schema.org/",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://vissioneyes.com/"
                },{
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Services",
                    "item": "https://vissioneyes.com/services"
                },{
                    "@type": "ListItem",
                    "position": 3,
                    "name": "BLADEFREE LASIK",
                    "item": "https://vissioneyes.com/lasik-eye-surgery-mumbai/bladefree-lasik"
                }]
                }
        </script>

        <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "FAQPage",
              "mainEntity": [{
                "@type": "Question",
                "name": "1. Does LASIK surgery impact your eyesight?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "Laser-assisted in situ keratomileusis, abbreviated as LASIK, is a refractive surgery. In this procedure, the surgeon cuts a thin fold of tissue from the front of the patient’s eye. A laser burns away the offending tissue to reshape the cornea, which helps the light focus on the retina at the back of their eye. LASIK correct vision problems such as farsightedness, astigmatism and nearsightedness.
            Considered to be an effective and safe procedure, the surgeon operates daily. Most patients have 20/20 vision, but people experience side effects such as halos, glare, pain or even loss of sight. Some people have even had 20/40 vision, which is suitable for clearing a driver’s licensing examination."
                }
              },{
                "@type": "Question",
                "name": "2. How long does it take to have clear vision after LASIK surgery?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "In most cases, patients recover from LASIK surgery six to twelve hours after the surgery. This depends on certain factors, but most patients experience a clearer vision within twenty-four hours after LASIK surgery. Some others would need between two and five days to recover. However, they could also experience vision fluctuations and blurred vision for many weeks after their surgery.
            As patients have blurry vision immediately after their surgery, we recommend that a family member or friend drive their home after the surgery. Relax and have a nap, but avoid reading or watching television that could stress your eyes. After your procedure, you must return to the clinic to check for vision and take steroid eyedrops and antibiotics for one week. The patient will fully recover after three to six months when the vision finally stabilises."
                }
              },{
                "@type": "Question",
                "name": "3. For how long should you wear sunglasses after laser operation?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "When performing LASIK surgery, the surgeon cuts a fold of tissue on the top of the patient’s cornea. Next, the top tissue layer is lifted back, which aids in precisely working upon the cornea’s surface. After the surgery is completed, the surgeon lowers the flap back into its position for the tissues to heal. Though LASIK surgery usually does not cause pain, your eyes could be itchy, dry and sensitive to light and the sun.
            You must wear your sunglasses to guard the eyes after the surgery, as they dim the harsh sunlight to reduce irritation and sensitivity. In addition, they block ultraviolet rays that hamper the healing process and prevent the patients from scratching and rubbing. Excessive scratching disturbs the healing corneal flap and delays the recovery process.
            You must wear your sunglasses through the recovery processes, especially the first twenty-four hours after LASIK surgery. After a few more days, your eyes would gradually lose their sensitivity, but the patient must wear them when going outdoors in cloudy weather (at least for one month). Even after complete recovery, sunglasses protect the eyes from long-term ultraviolet damage, prevent growth and cataracts."
                }
              },{
                "@type": "Question",
                "name": "4. Why should you avoid rubbing your eye after the surgery?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "After your LASIK surgery, the patient would constantly wear specialised goggles to protect the eyes. You must observe eye protection after surgery, as the corneal flap created during surgery is healing. Touching or rubbing the eye during the recovery causes displacement to the flap, which would hamper your vision. Generally, only use light pressure for the initial two weeks, but you can gently rub the eyes after two months."
                }
              },{
                "@type": "Question",
                "name": "5. What are some effective eye care tips post LASIK surgery?",
                "acceptedAnswer": {
                  "@type": "Answer",
                  "text": "To protect your eyes after LASIK surgery, wear eye-protective devices for twenty-four hours after the surgery, expect eye irritation and slight redness, use artificial eye drops to lubricate your eyes, maintain your doctor’s appointments and use dark sunglasses to block ultraviolet rays. Don’t watch television, use the computer or read, exercise for a week, drive, use hot tubs and swimming pools for two weeks or apply eye makeup, creams and lotions for a week. Avoid pressure and high-impact activity such as contact sports for two weeks."
                }
              }]
            }
            </script>

    @break

    @case(\Request::is('dry-eyes-treatment'))
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [{
                    "@type": "Question",
                    "name": "1. How to get rid of dry eyes completely?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Dry eye disease is a widespread condition where the eyes lose moisture quickly, which causes discomfort and vision problems. Though we do not have a permanent treatment solution for dry eyes, you can manage them in several ways. This happens when the eye’s tear film does not work correctly, protecting and lubricating the eye’s surfaces and promoting healthy vision.
                        The eye’ s tear film has three layers;the outer layer– reduces tear evaporation and spreads the tear film across the eye surface due to the oily layer
                        .The watery middle layer washes away foreign objects such as dust and dirt,
                        while the sticky inner layer coats the cornea and sticks the tear film to the eye surface
                        .Therefore,
                        dry eye treatment can help minimize the disease by removing environmental triggers by maintaining an efficient tear film on the eye’ s surface
                        .
                        "
                    }
                }, {
                    "@type": "Question",
                    "name": "2. What happens if the problem of dry eyes is not treated?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "If your dry eyes are left untreated, your eyes will not be able to produce sufficient tears and cause itchiness and irritation. The absence of an effective tear film causes scratches on the eye cornea and surface, protecting your eyes from germs, gunk and dust causing eye infections. In addition, it results in permanent scarring and vision, which can be overcomed by surgery in dry eyes treatment."
                    }
                }, {
                    "@type": "Question",
                    "name": "3. Which daily habits can worsen the problem of dry eye?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Daily eye habits worsen the dry eyes problems such as excessive screen time and infrequent blinking (that causes aggravated and dry eyes, medications (anti-anxiety medicine, decongestants, antidepressants, antihistamines, blood pressure medications, hormone therapy medication and birth condition. Sleeping when wearing contact lenses causes eye dryness, as the plastic film prevents the nutrients and oxygens from reaching the corneal tissue. Not wearing sunglasses on a windy day when performing outdoor cyclists, smoking and using eye drops to counter red eyes decreases the body’s nutrient production for efficient tears."
                    }
                }, {
                    "@type": "Question",
                    "name": "4. What are the major symptoms of dry eyes?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "The primary symptoms of dry eye syndrome include burning, scratching and stinging in the eyes. Apart from that, you should visit your eye doctor if you notice mucous around or in your eyes, eye redness, light sensitivity, difficulty with contact lenses and nighttime driving, eye fatigue, blurred vision and watery eyes."
                    }
                }]
            }
        </script>
    @break

    @case(\Request::is('cataract-surgery-mumbai'))
        {{-- Breadcrumb Schema --}}
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://vissioneyes.com/"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Services",
                    "item": "https://vissioneyes.com/services"
                }, {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Cataract",
                    "item": ""
                }]
            }
        </script>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [{
                    "@type": "Question",
                    "name": "1. Can cataract surgery give you 20/20 vision?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Patients want to know if they would achieve 20/20 vision after cataract surgery, a surgical procedure to replace their eye lens with an artificial one. This happens when the existing cataract makes the vision cloudy and blurry, usually in older adults. You can have 20/20 vision if you do not have other health conditions, such as corneal scarring, macular scarring and wrinkling, macular degeneration and glaucoma. During cataract surgery, the surgeon replaces the human lens with an artificial lens, which could cause compromised vision when other conditions are present.
                        Patients could be farsighted or nearsighted,
                        but they can use multifocal artificial lenses when preparing their spectacles after surgery
                        .They resemble bifocal contact lenses,
                        which are permanently placed in the patient’ s eye.They are incredibly effective
                        if you do not have astigmatism,
                        in
                        which you would have to get the same treated before the artificial lens implantation.
                        "
                    }
                }, {
                    "@type": "Question",
                    "name": "2. Should you avoid watching TV, mobile screens after cataract surgery?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Best cataract eye specialists in Mumbai may advise patients to refrain from screens, reading and harsh lights for the first twenty-four hours after surgery. After a few days, you can use a computer, return to work, work on your mobile devices and watch television. Rest your eyes for three to four hours, protect them from air-conditioning and dust, do not rub your eyes, use lubricating eye drops to resolve dryness and itching. Choose baths over showers to avoid getting tap water and soap into the eyes for quick healing."
                    }
                }, {
                    "@type": "Question",
                    "name": "3. Which is better for cataract surgery: laser or traditional?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "In traditional cataract surgery, the surgeon incites the cornea’s side by hand to remove the damaged lens. Next, they insert a probe that breaks the human lens with ultrasonic energy, while another probe brings out the pieces. Finally, using the same incision, they insert the replacement lens and stitch up any cuts.
                        During laser - assisted cataract surgery,
                        the surgeon uses specialised software to create the proper surgical plan using three -
                        dimensional images of the patient’ s eye.The design includes the cataract’ s length,
                        depth and location and breaks the cataract using a femtosecond laser
                        .As there are no major incisions,
                        the stitches heal themselves.
                        If you compare traditional and laser cataract surgery,
                        you will find that the latter uses a computer - guided laser.This increases the accuracy of
                        the surgical incision by ten times,
                        along with half the amount of ultrasonic energy to
                        break the lens and precise placement of the artificial lens.Using traditional cataract surgery,
                        you experience side effects such as eye discomfort,
                        itchy eyes and blurred vision.However,
                        you will not experience pain with laser cataract surgery.
                        "
                    }
                }, {
                    "@type": "Question",
                    "name": "4. When is the right time to go for cataract surgery?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Patients undergo cataract surgery as per their medical requirements and doctor’s recommendations. It is suggested if they already have blurred vision issues, while it becomes critical when they have completely lost their eyesight. Cataract surgery is not performed if you have infection risks and complications in place. The possibility of getting cataracts only increases as we age, but winter is a suitable time for surgery as you recover faster. However, you must avail of cataract surgery quickly should you experience excessively blurred vision that hampers daily activities."
                    }
                }, {
                    "@type": "Question",
                    "name": "5. What are some signs that indicate the need for cataract surgery?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Though cataract is a common eyesight problem for the elderly, it occurs when the proteins of the eye lens cluster and make your vision cloudy. You must consider immediate cataract surgery if you experiencehalos and glare when driving, when your eyesight is below the 20/40 vision legally required for driving, experience light sensitivity during sports and driving, changing colour in vision (usually brown or yellow) and second sight, which is defined as a sudden but temporary improvement insight.
                        Though you can choose not to avail of surgery,
                        it could cause blindness.So instead,
                        save your eye health with quick and efficient eye surgery
                        for a better quality of life.
                        "
                    }
                }]
            }
        </script>
    @break
    @case(\Request::is('cataract-surgery-mumbai/femtosecond-laser'))
        {{-- Breadcrumb Schema --}}
        <script type="application/ld+json">
            {
              "@context": "https://schema.org/",
              "@type": "BreadcrumbList",
              "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://vissioneyes.com/"
              },{
                "@type": "ListItem",
                "position": 2,
                "name": "Services",
                "item": "https://vissioneyes.com/services"
              },{
                "@type": "ListItem",
                "position": 3,
                "name": "FEMTOSECOND LASER CATARACT SURGERY",
                "item": "https://vissioneyes.com/cataract-surgery-mumbai/femtosecond-laser"
              }]
            }
            </script>


    @break
    @case(\Request::is('cataract-surgery-mumbai/multifocal-trifocal'))
        {{-- Breadcrumb Schema --}}
        <script type="application/ld+json">
            {
              "@context": "https://schema.org/",
              "@type": "BreadcrumbList",
              "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://vissioneyes.com/"
              },{
                "@type": "ListItem",
                "position": 2,
                "name": "Services",
                "item": "https://vissioneyes.com/services"
              },{
                "@type": "ListItem",
                "position": 3,
                "name": "MULTIFOCAL & TRIFOCAL CATARACT SURGERY",
                "item": "https://vissioneyes.com/cataract-surgery-mumbai/multifocal-trifocal"
              }]
            }
        </script>



    @break
    @default
@endswitch
