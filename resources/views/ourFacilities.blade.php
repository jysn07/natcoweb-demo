<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities - Natco Lifesciences</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/facilities.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

@include('layout.navBar')

<body>    

<div class="container">
    
    <div class="facilities-img">
        <img src="{{ asset('Images/carousel/SLIDER_4.webp') }}" class="img-fluid" alt="Our Facilities">
        <div class="facilities-txt">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Facilities</li>
                </ol>
            </nav>
            <h1>
                Our Facilities
            </h1>
            <p>We excel in manufacturing niche and complex pharmaceutical and crop health science products, meeting expectations with precision and care.</p>

        </div>
    </div>
</div>
<br>
<!-- Facility Details -->

<section class="facility-section py-5">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title">World-class Manufacturing Facilities</h2>
            <p class="text-muted">
                Explore Natco Pharma India's manufacturing and research facilities.
            </p>
        </div>
<br>
        <div class="row g-4">

            <!-- LEFT MENU -->
            <div class="col-lg-4 left-menu">

                <div class="facility-menu">

                    <h4>API Facility</h4>

                    <ul>

                        <li class="facility-item active"
                            data-facility="chennai">

                            Chennai

                        </li>

                        <li class="facility-item"
                            data-facility="mekaguda">

                            Mekaguda

                        </li>

                    </ul>

                    <h4>Formulations</h4>

                    <ul>

                        <li class="facility-item"
                            data-facility="kothur">

                            Kothur

                        </li>

                        <li class="facility-item"
                            data-facility="guwahati">

                            Guwahati

                        </li>

                        <li class="facility-item"
                            data-facility="dehradun">

                            Dehradun

                        </li>

                    </ul>

                    <h4>Research Center</h4>

                    <ul>

                        <li class="facility-item"
                            data-facility="hyderabad">

                            Hyderabad

                        </li>

                        <li class="facility-item"
                            data-facility="nagarjuna">

                            Nagarjuna Sagar

                        </li>

                    </ul>

                </div>

            </div>

            <!-- RIGHT SIDE -->

            <div class="col-lg-8">

                <div class="facility-card">

                    <div class="row g-4">

                        <div class="col-md-5">

                            <img
                                id="facilityImage"
                                class="facility-image"
                                src="{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}">

                        </div>

                        <div class="col-md-7">

                            <h2 id="facilityTitle"></h2>

                            <h3 class="facility-location">
                                <i class="fa-solid fa-location-dot"></i>
                                <span id="facilityLocation"></span>
                            </h3>

                            <p>
                                <strong>Phone:</strong><br>
                                <span id="facilityPhone"></span>
                            </p>

                            <p id="facilityDescription"></p>

                            <hr>

                            <div class="row">

                                <div class="col-md-12">

                                    <h5>Capabilities</h5>

                                    <ul id="facilityCapabilities"></ul>

                                </div>
                            </div>
<hr>
                                <div class="col-md-12">

                                    <h5>Number of Employees</h5>

                                    <h3 id="facilityEmployees" class="text-success fw-bold"></h3>

                                    <hr>

                                    <h5>Certifications</h5>

                                    <div id="facilityCertifications"></div>

                                </div>

                            

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<br>
<br>
<script>

const facilities = {

chennai:{
title:"API Facility, Chennai",
image:"{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}",
location:`Natco Pharma Limited, Chemical Division,<br>
No-74/7B, Vaikkadu TPP Salai,<br>
Manali, Chennai – 600 103, India.`,
phone:"+91-44-29011779 / 7299009981 / 82 / 83 / 84",
description:"The Chennai API Facility is one of Natco Pharma's key Active Pharmaceutical Ingredient manufacturing sites, supporting global pharmaceutical operations.",
capabilities:[
"Producing Cytotoxic Final APIs",
"Capability to handle NHK Reaction (Oxygen & Water Sensitive Reaction)",
"Containment facility for OEL-5 category APIs",
"Preparative HPLC Systems for purification of APIs"
],
employees:"331",
certifications:["FDA","WHO GMP","HEALTH CANADA","ANVISA","TGA CERTIFIED"]
},

mekaguda:{
title:"API Facility, Mekaguda",
image:"{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}",
location:`Natco Pharma Limited Chemical Division,<br>
Mekaguda Village, Nandigama Mandal,<br>
Rangareddy District, Telangana – 509223, India.`,
description:"The Mekaguda facility manufactures a wide range of Active Pharmaceutical Ingredients.",
capabilities:[
"50+ Non-Cytotoxic APIs",
"Non Beta-Lactam APIs"
],
employees:"1,233",
certifications:["FDA","EDOM","KOREAN FDA", "TGA CERTIFIED", "ANVISA", "PMDA", "WHO GMP", "GERAMAN HEALTH AUTHORITY", "COFEPRIS"]
},

kothur:{
title:"Formulations Facility, Kothur",
image:"{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}",
location:`Natco Pharma Limited, Kothur Post, <br>
Kothur Mandal, Rangareddy District,<br>
Telangana – 509228, India.`,
phone:"",
description:"State-of-the-art formulations manufacturing facility.",
capabilities:[
"Non-Cytotoxic Tablets",
"Cytotoxic Tablets",
"Capsules",
"Cytotoxic Parenterals"
],
employees:"1,468",
certifications:["FDA","ANVISA","WHO GMP","HEALTH CANADA","PHARMACY AND POISONS BOARD","BEHöRDE FüR STADTENTWICKLUNG UND UMWELT HAMBURG","TAIWAN FDA","SFDA","MINISTRY OF HEALTH UAE","GERMANY-LANDESAMT HESSEN","MINISTRY OF HEALTH OF BELARUS","UGANDA NDA","GREECE NOM","CDSCO","DCA TELANGANA","FREIE UND HANSESTADT HAMBURG"]
},

guwahati:{
title:"Tablets & Capsules Manufacturing Facility, Guwahati",
image:"{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}",
location:`Dag No.749 & 750,<br>
Village Kokjhar, Mirza, Guwahati – 781125,<br>
Assam, India.`,
phone:"",
description:"Dedicated manufacturing facility for oral solid dosage forms.",
capabilities:[
"Manufacturing Non-Cytotoxic Tablets",
"Manufacturing Capsules"
],
employees:"107",
certifications:["WHO GMP"]
},

dehradun:{
title:"Contract Manufacturing Hub, Dehradun",
image:"{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}",
location:`Natco Pharma Limited,<br>
Plot No. A3, UPSIDC Industrial Area,<br>
Selaqui, Dehradun – 248011,<br>
Uttarakhand, India.`,
phone:"",
description:"Dedicated oral solid dosage manufacturing facility.",
capabilities:[
"Oral Solid Dosages",
"Cytotoxic Oral Products"
],
employees:"135",
certifications:["ISO 9001"]
},

hyderabad:{
title:"Natco Research Center, Hyderabad",
image:"{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}",
location:`B-11, 13 & 14 Industrial Estate,<br>
Sanathnagar, Hyderabad, Telangana – 500018.`,
phone:"",
description:"Natco's central Research & Development facility focused on complex generic medicines.",
capabilities:[
"Process Chemistry",
"Analytical Chemistry",
"Process Engineering",
"Peptides",
"Oligonucleotides",
"ADC Drugs"
],
employees:"300+ Members",
certifications:["GLP"]
},

nagarjuna:{
title:"Finished Dosage Facility, Nagarjuna Sagar",
image:"{{ asset('Images/facilities/natco_api_research_facility_chennai.webp') }}",
location:`Natco Pharma Limited, Pharma Division – Parenterals,<br>
Vijayapuri North, Nagarjuna Sagar, Peddavura Mandal, Nalgonda District – 508202, Telangana, India.`,
phone:"",
description:"Advanced injectable manufacturing facility.",
capabilities:[
"Liquid Injectable Products",
"Lyophilized Injectable Products",
"General Injectable Block (Non-Cytotoxic)",
"Cytotoxic Injectable Block"
],
employees:"349",
certifications:["WHO GMP"]
}

};


function loadFacility(id){

const f = facilities[id];

document.getElementById("facilityImage").src = f.image;
document.getElementById("facilityTitle").innerHTML = f.title;
document.getElementById("facilityLocation").innerHTML = f.location;
document.getElementById("facilityPhone").innerHTML = f.phone || "N/A";
document.getElementById("facilityDescription").innerHTML = f.description;
document.getElementById("facilityEmployees").innerHTML = f.employees;

let cap="";

f.capabilities.forEach(function(item){
    cap += `
<li>
    <i class="bi bi-check-circle-fill text-success me-2"></i>
    ${item}
</li>`;
});

document.getElementById("facilityCapabilities").innerHTML = cap;

let cert="";

f.certifications.forEach(function(item){
    cert += `<span class="badge bg-primary me-2 mb-2">${item}</span>`;
});

document.getElementById("facilityCertifications").innerHTML = cert;

}

document.querySelectorAll(".facility-item").forEach(function(item){

item.addEventListener("click",function(){

document.querySelectorAll(".facility-item").forEach(function(i){

i.classList.remove("active");

});

this.classList.add("active");

loadFacility(this.dataset.facility);

});

});

loadFacility("chennai");

</script>

<!-- Certifications -->


<section class="certifications py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h6 class="section-subtitle">Global Standards</h6>

            <h2 class="section-title">Certifications & Regulatory Approvals</h2>

            <p class="text-muted">
                Natco Pharma's manufacturing facilities comply with stringent international
                regulatory standards and are approved by leading health authorities worldwide.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/ANVISA.webp') }}" alt="ANVISA">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/MINISTRY_OF_HEALTH_AND_SOCIAL_SOLIDARITY.webp') }}" alt="Greece">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/INFARMED.webp') }}" alt="Infarmed">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/COFEPRIS.webp') }}" alt="Cofepris">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/PMDA.webp') }}" alt="PMDA">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/MINISTRY_OF_FOOD_AND_DRUG_SAFETY.webp') }}" alt="MFDS">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/FREIE_HANSESTADT_HAMBURG.webp') }}" alt="Hamburg">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="cert-card">
                    <img src="{{ asset('Images/facilities/AUSTRALIAN_GOVERNMENT_DOHAC_TGA.webp') }}" alt="Australia TGA">
                </div>
            </div>

        </div>

    </div>

</section>

</body>

<footer>

    @include('layout.footerSec')

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</html>

