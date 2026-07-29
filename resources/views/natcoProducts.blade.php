<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - Natco Lifesciences</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
    @include('layout.navBar')

    <body>
        <div class="container">
    <!-- banner -->
            <div class="product-img">
                <img src="{{ asset('Images/carousel/SLIDER_4.webp') }}" class="img-fluid" alt="Our Products">
                <div class="product-txt">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Our Products</li>
                        </ol>
                    </nav>
                    <h1>
                        Our Products
                    </h1>
                    <p>We are committed to making life-changing specialty medicines accessible to every Filipino.</p>

                </div>
            </div>
        </div>

<!-- product section -->

<div class="container py-5">
    <div class="row">

        <!-- LEFT SIDEBAR -->
        <div class="col-lg-3">
            <div class="product-sidebar">

                <h5 class="sidebar-title">Search Products</h5>

                <div class="input-group mb-4">
                    <span class="input-group-text">
                        <i class="bi bi-search"></i>
                    </span>

                    <input
                        type="text"
                        id="searchProduct"
                        class="form-control"
                        placeholder="Search product...">
                </div>

                <h5 class="sidebar-title">Categories</h5>

                <ul class="category-list">
                    <li class="active" data-category="All">All</li>
                    <li data-category="MO">Medical Oncology</li>
                    <li data-category="HO">Hematology Oncology</li>
                    <li data-category="GO">Gynecologic Oncology</li>
                </ul>

            </div>
        </div>


        <!-- RIGHT CONTENT -->
        <div class="col-lg-9 product-menu">

            <!-- Toolbar -->
            <div class="products-toolbar d-flex justify-content-between align-items-center mb-4">

                <div>
                    <h3 id="categoryTitle">All Products</h3>
                    <p id="categoryDescription" class="mb-0">
                        Browse our pharmaceutical products.
                    </p>
                </div>

                <div class="product-counter">
                    <span id="productCount">0 Products</span>
                </div>

            </div>


            <!-- Product Grid -->
            <div class="row g-4" id="productGrid">
            
            <div id="noProducts" class="text-center py-5 d-none">
                <i class="bi bi-search display-4 text-secondary"></i>
                <h4 class="mt-3">No products found</h4>
                <p class="text-muted">Try another keyword or category.</p>
            </div>

                <!-- Nab-Paclinat -->
                <div class="col-lg-4 col-md-6 product-card"
                    data-category="MO"
                    data-name="Paclitaxel"
                    data-brand="Nab-Paclinat">

                    <div class="card h-100 border-0 shadow-sm rounded-4">

                        <!-- Card content -->
                         <div class="text-center p-6">
                            <img src="{{ asset('Images/products/NATCO_PHILIPPINES_NAB-PACLINAT_PACLITAXEL.jpg') }}" class="img-fluid product-image" alt="Nab-Paclinat">
                        </div>
                            <div class="card-body">
                                <h4>Paclitaxel</h4> 
                                <p class="text-primary fw-bold">Nab-Paclinat</p> 
                                
                                <hr class="container"> 
                                
                                <small class="text-muted"><i class="bi bi-capsule"></i> DOSAGE & FORMS </small>
                                    <p>100 mg Lyophilized Powder for Suspension for IV Infusion Protein-bound particles</p>
                                    
                                <small class="text-muted"><i class="bi bi-box-seam"></i> PACKAGING </small>
                                    <p>50-mL capacity USP Type I Clear and colorless glass vial / (Box of 1’s)</p> 
                                    
                                <small class="text-muted"><i class="bi bi-thermometer-half"></i> STORAGE </small> 
                                    <p>Not exceeding 30°C</p>
                                    <p>24-months Shelf Life</p>

                                <span class="badge bg-success mb-3">MO</span>

                            </div> 
                                    
                            <div class="card-footer bg-white border-0"> 
                                <div class="d-grid gap-2"> 
                                    <!-- <button class="btn btn-outline-primary"> View Details </button>  -->
                                     <button
                                        class="btn btn-primary w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#inquiryModal"
                                        data-product="Capecitabine"
                                        data-brand="Capecinat">

                                        <i class="bi bi-envelope-paper me-2"></i>

                                        Send Inquiry

                                    </button>
                                </div>
                            </div>

                    </div>

                </div>

                <!-- Filgranat -->
                <div class="col-lg-4 col-md-6 product-card"
                    data-category="MO, GO, HO"
                    data-name="Filgrastim"
                    data-brand="Filgranat">

                    <div class="card h-100 border-0 shadow-sm rounded-4">

                        <!-- Card content -->
                         <div class="text-center p-6">
                            <img src="{{ asset('Images/products/NATCO_PHILIPPINES_FILGRASTIM_FILGRANAT.jpg') }}" class="img-fluid product-image" alt="Filgranat">
                        </div>
                            <div class="card-body">
                                <h4>Filgrastim</h4> 
                                <p class="text-primary fw-bold">Filgranat</p> 
                                
                                <hr class="container"> 
                                
                                <small class="text-muted"><i class="bi bi-capsule"></i> DOSAGE & FORMS </small>
                                    <p>300 mcg/0.5 mL Solution for Injection (IV/SC)</p>
                                    
                                <small class="text-muted"><i class="bi bi-box-seam"></i> PACKAGING </small>
                                    <p>1 mL USP Type I pre-filled syringe / (Box of 2's)</p> 
                                    
                                <small class="text-muted"><i class="bi bi-thermometer-half"></i> STORAGE </small> 
                                    <p>Not exceeding 30°C</p>
                                    <p>24-months Shelf Life</p>

                                <span class="badge bg-success mb-3">MO</span>
                                <span class="badge bg-warning mb-3">GO</span>
                                <span class="badge bg-danger mb-3">HO</span>
                            </div> 
                                    
                            <div class="card-footer bg-white border-0"> 
                                <div class="d-grid gap-2"> 
                                    <!-- <button class="btn btn-outline-primary"> View Details </button>  -->
                                    <button
                                        class="btn btn-primary w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#inquiryModal"
                                        data-product="Filgrastim"
                                        data-brand="Filgranat">

                                        <i class="bi bi-envelope-paper me-2"></i>

                                        Send Inquiry

                                    </button>
                                </div>
                            </div>
                    </div>
                </div>

                <!-- Capecinat -->
               <div class="col-lg-4 col-md-6 product-card"
                    data-category="MO"
                    data-name="Capecitabine"
                    data-brand="Capecinat">

                    <div class="card h-100 border-0 shadow-sm rounded-4">

                        <!-- Card content -->
                         <div class="text-center p-6">
                            <img src="{{ asset('Images/products/NATCO_PHILIPPINES_CAPECINAT_CAPECITABINE_500MG.jpg') }}" class="img-fluid product-image" alt="Capecinat">
                        </div>
                            <div class="card-body">
                                <h4>Capecitabine</h4> 
                                <p class="text-primary fw-bold">Capecinat</p> 
                                
                                <hr class="container"> 
                                
                                <small class="text-muted"><i class="bi bi-capsule"></i> DOSAGE & FORMS </small>
                                    <p> 500 mg Film-Coated Tablet</p>
                                    
                                <small class="text-muted"><i class="bi bi-box-seam"></i> PACKAGING </small>
                                    <p> Alu/PVC Blister Pack x 10’s (Box of 10’s)</p> 
                                    
                                <small class="text-muted"><i class="bi bi-thermometer-half"></i> STORAGE </small> 
                                    <p>Not exceeding 30°C</p>
                                    <p>36-months Shelf Life</p>

                                <span class="badge bg-success mb-3">MO</span>
                            </div> 
                                    
                            <div class="card-footer bg-white border-0"> 
                                <div class="d-grid gap-2"> 
                                    <!-- <button class="btn btn-outline-primary"> View Details </button>  -->
                                     <button
                                        class="btn btn-primary w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#inquiryModal"
                                        data-product="Capecitabine"
                                        data-brand="Capecinat">

                                        <i class="bi bi-envelope-paper me-2"></i>

                                        Send Inquiry

                                    </button>
                                </div>
                            </div>

                    </div>

                </div>

                <!-- Gefitinib -->
                <div class="col-lg-4 col-md-6 product-card"
                    data-category="MO"
                    data-name="Gefitinib"
                    data-brand="Geftinat">

                    <div class="card h-100 border-0 shadow-sm rounded-4">

                        <!-- Card content -->
                         <div class="text-center p-6">
                            <img src="{{ asset('Images/products/NATCO_PHILIPPINES_GEFINITINIB_GEFTINAT_250MG.jpg') }}" class="img-fluid product-image" alt="Geftinat">
                        </div>
                            <div class="card-body">
                                <h4>Gefitinib</h4> 
                                <p class="text-primary fw-bold">Geftinat</p> 
                                
                                <hr class="container"> 
                                
                                <small class="text-muted"><i class="bi bi-capsule"></i> DOSAGE & FORMS </small>
                                    <p> 250 mg Film-Coated Tablet</p>
                                    
                                <small class="text-muted"><i class="bi bi-box-seam"></i> PACKAGING </small>
                                    <p>Blister Pack x 10’s (Box of 10's)</p> 
                                    
                                <small class="text-muted"><i class="bi bi-thermometer-half"></i> STORAGE </small> 
                                    <p>Not exceeding 30°C</p>
                                    <p>36-months Shelf Life</p>

                                <span class="badge bg-success mb-3">MO</span>
                            </div> 
                                    
                            <div class="card-footer bg-white border-0"> 
                                <div class="d-grid gap-2"> 
                                    <!-- <button class="btn btn-outline-primary"> View Details </button>  -->
                                     <button
                                        class="btn btn-primary w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#inquiryModal"
                                        data-product="Gefitinib"
                                        data-brand="Geftinat">

                                        <i class="bi bi-envelope-paper me-2"></i>

                                        Send Inquiry

                                    </button>
                                </div>
                            </div>

                    </div>

                </div>
                <!-- Anzonat -->
                <div class="col-lg-4 col-md-6 product-card"
                    data-category="MO, GO"
                    data-name="Anastrozole"
                    data-brand="Anzonat">

                    <div class="card h-100 border-0 shadow-sm rounded-4">

                        <!-- Card content -->
                         <div class="text-center p-6">
                            <img src="{{ asset('Images/products/NATCO_PHILIPPINES_ANZONAT_ANASTROZOLE.jpg') }}" class="img-fluid product-image" alt="Anzonat Anastrozole 1mg Film Coated Tablet pharmaceutical product package">
                        </div>
                            <div class="card-body">
                                <h4>Anastrozole</h4> 
                                <p class="text-primary fw-bold">Anzonat</p> 
                                
                                <hr class="container"> 
                                
                                <small class="text-muted"><i class="bi bi-capsule"></i> DOSAGE & FORMS </small>
                                    <p> 1mg Film Coated Tablet</p>
                                    
                                <small class="text-muted"><i class="bi bi-box-seam"></i> PACKAGING </small>
                                    <p>Alu Blister Pack x10's (Box of 30's)</p> 
                                    
                                <small class="text-muted"><i class="bi bi-thermometer-half"></i> STORAGE </small> 
                                    <p>Not exceeding 30°C</p>
                                    <p>24-months Shelf Life</p>

                                <span class="badge bg-success mb-3">MO</span>
                                <span class="badge bg-warning mb-3">GO</span>
                            </div> 
                                    
                            <div class="card-footer bg-white border-0"> 
                                <div class="d-grid gap-2"> 
                                    <!-- <button class="btn btn-outline-primary"> View Details </button>  -->
                                     <button
                                        class="btn btn-primary w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#inquiryModal"
                                        data-product="Anastrozole"
                                        data-brand="Anzonat">

                                        <i class="bi bi-envelope-paper me-2"></i>

                                        Send Inquiry

                                    </button> 
                                </div>
                            </div>

                    </div>

                </div>

                <!-- Bemunat -->
                <div class="col-lg-4 col-md-6 product-card"
                    data-category="MO, HO"
                    data-name="Bendamustin"
                    data-brand="Bemunat">

                    <div class="card h-100 border-0 shadow-sm rounded-4">

                        <!-- Card content -->
                         <div class="text-center p-6">
                            <img src="{{ asset('Images/products/NATCO_PHILIPPINES_BEMUNAT_BENDAMUSTINE_100.jpg') }}" class="img-fluid product-image" alt="Bemunat">
                        </div>
                            <div class="card-body">
                                <h4>Bendamustine</h4> 
                                <p class="text-primary fw-bold">Bemunat</p> 
                                
                                <hr class="container"> 
                                
                                <small class="text-muted"><i class="bi bi-capsule"></i> DOSAGE & FORMS </small>
                                    <p> 100mg Lyophilized powder concentrate</p>
                                    
                                <small class="text-muted"><i class="bi bi-box-seam"></i> PACKAGING </small>
                                    <p>Type 1 Amber Glass Vial w/ orange flip- off Seal (Box of 1’s)</p> 
                                    
                                <small class="text-muted"><i class="bi bi-thermometer-half"></i> STORAGE </small> 
                                    <p>Not exceeding 30°C</p>
                                    <p>36-months Shelf Life</p>

                                <span class="badge bg-success mb-3">MO</span>
                                <span class="badge bg-danger mb-3">HO</span>
                            </div> 
                                    
                            <div class="card-footer bg-white border-0"> 
                                <div class="d-grid gap-2"> 
                                    <!-- <button class="btn btn-outline-primary"> View Details </button>  -->
                                     <button
                                        class="btn btn-primary w-100"
                                        data-bs-toggle="modal"
                                        data-bs-target="#inquiryModal"
                                        data-product="Bendamustine"
                                        data-brand="Bemunat">

                                        <i class="bi bi-envelope-paper me-2"></i>

                                        Send Inquiry

                                    </button>
                                </div>
                            </div>

                    </div>

                </div>



                <!-- More product cards here -->

            </div>

        </div>

    </div>
</div>

<!-- Modal Inquiry Form -->

<div class="modal fade"
     id="inquiryModal"
     tabindex="-1">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content rounded-4">

            <div class="modal-header">

                <h4 class="modal-title">

                    Product Inquiry

                </h4>

                <button
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="alert alert-light border">

                    <strong id="modalProduct">
                        Product Name
                    </strong>

                    <br>

                    <small id="modalBrand">

                        Brand

                    </small>

                </div>

                <form id="inquiryForm">

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label>I am a *</label>
                            <select class="form-select" id="userType" required>

                                <option value="">Please select</option>
                                <option value="patient">Patient / Caregiver</option>
                                <option value="physician">Physician</option>
                                <option value="pharmacist"> Pharmacist</option>
                                <option value="hospital">Hospital / Clinic Representative</option>
                                <option value="distributor">Distributor</option>
                                <option value="hcp">Other Healthcare Professional</option>
                                <option value="other">Other</option>

                            </select>
                        </div>

                        <div class="col-md-6 mb-3">

                            <label>First Name *</label>

                            <input
                                type="text"
                                class="form-control"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Last Name *</label>

                            <input
                                type="text"
                                class="form-control"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Email *</label>

                            <input
                                type="email"
                                class="form-control"
                                required>

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Contact Number</label>

                            <input
                                type="text"
                                class="form-control">

                        </div>

                        <div class="col-md-6 mb-3">

                            <label>Hospital / Clinic</label>

                            <input
                                type="text"
                                class="form-control">

                        </div>

                        <div class="col-md-6 mb-3">
                            <label>City / Province</label>
                            <input type="text"class="form-control">
                        </div>
                        
                        <!-- PATIENT ONLY FIELDS -->

                        <div id="patientFields" class="d-none">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label>Doctor's Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- <div class="col-md-6 mb-3">
                                    <label>Hospital / Clinic</label>
                                    <input type="text" class="form-control">
                                </div> -->

                                <div class="col-12 mb-3">
                                    <label>Upload Prescription</label>
                                    <input type="file" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                                    <small class="text-muted"> Accepted file types: PDF, JPG, PNG (Max 5MB)</small>
                                </div>

                            </div>

                        </div>

                        <div class="col-12 mb-3">
                            <label>Message</label>
                            <textarea class="form-control" rows="5" placeholder="Tell us how we can help..."></textarea>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label">I agree to the Privacy Policy.</label>
                            </div>
                        </div>

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button
                    class="btn btn-outline-secondary"
                    data-bs-dismiss="modal">

                    Cancel

                </button>

                <button
                    class="btn btn-primary">

                    <i class="bi bi-send-fill me-2"></i>

                    Send Inquiry

                </button>

            </div>

        </div>

    </div>

</div>

<script>

// For filtering product menu
const searchInput = document.getElementById("searchProduct");

const filters = document.querySelectorAll(".category-list li");

const products = document.querySelectorAll(".product-card");

// Get category from URL
const urlParams = new URLSearchParams(window.location.search);
const categoryFromURL = urlParams.get("category");

let selectedCategory = categoryFromURL || "All";

// Highlight selected category from URL
filters.forEach(item => {
    item.classList.remove("active");
    if(item.dataset.category === selectedCategory){
        item.classList.add("active");
    }
});

const categoryTitle = document.getElementById("categoryTitle");
const categoryDescription = document.getElementById("categoryDescription");
const productCount = document.getElementById("productCount");
const noProducts = document.getElementById("noProducts");


// Category Names
const categoryNames = {
    All: "All Products",
    MO: "Medical Oncology",
    HO: "Hematology Oncology",
    GO: "Gynecologic Oncology"
};


// Filter Function
function filterProducts(){
    const keyword = searchInput.value.toLowerCase().trim();
    let visible = 0;
    products.forEach(product=>{
        const categories = product.dataset.category
            .split(",")
            .map(c=>c.trim());

        const name = product.dataset.name.toLowerCase();
        const brand = product.dataset.brand.toLowerCase();
        const matchCategory =
            selectedCategory==="All" ||
            categories.includes(selectedCategory);

        const matchSearch =
            name.includes(keyword) ||
            brand.includes(keyword);

        if(matchCategory && matchSearch){
            product.style.display="";
            visible++;
        }else{
            product.style.display="none";
        }
    });

    productCount.innerHTML =
        visible+" Product"+(visible!==1?"s":"");

    categoryTitle.innerHTML =
        categoryNames[selectedCategory];

    if(selectedCategory==="All"){
        categoryDescription.innerHTML =
            "Browse our pharmaceutical product portfolio.";
    }else{
        categoryDescription.innerHTML =
            "Showing products under "+categoryNames[selectedCategory]+".";
    }

    if(visible===0){
        noProducts.classList.remove("d-none");
    }else{
        noProducts.classList.add("d-none");
    }
}


// Category Click
filters.forEach(filter=>{
    filter.addEventListener("click",function(){
        filters.forEach(item=>{
            item.classList.remove("active");
        });

        this.classList.add("active");
        selectedCategory=this.dataset.category;
        filterProducts();
    });
});


// Live Search
searchInput.addEventListener("keyup",filterProducts);

// Initial Load
filterProducts();

// Modal Inquiry Form
const inquiryModal = document.getElementById('inquiryModal');
inquiryModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    const product = button.getAttribute('data-product');
    const brand = button.getAttribute('data-brand');
    document.getElementById('modalProduct').textContent = product;
    document.getElementById('modalBrand').textContent = brand;
});

// Patient Fields

const userType = document.getElementById("userType");

const patientFields = document.getElementById("patientFields");

userType.addEventListener("change", function(){

    if(this.value === "patient"){

        patientFields.classList.remove("d-none");

    }else{

        patientFields.classList.add("d-none");

    }

});

// Initial filter
filterProducts();

</script>

</body>

<footer>
    @include('layout.footerSec')
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</html>