
<div class="container welcome text-center">
    <h2>Welcome to <span class="text-primary">Natco Lifesciences Philippines!</span></h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>

<div class="container product-cat-cards">
    <div class="row">
        <div class="col-md-4 cat-cards-row">
            <div class="card text-center">
                <img src="{{ asset('Images/product_category/natco_med_oncology.webp') }}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Medical Oncology</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus veritatis rerum nihil?</p>
                    <a href="{{ route('natcoProducts') }}?category=MO" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 cat-cards-row">
            <div class="card text-center">
                <img src="{{ asset('Images/product_category/natco_hema_oncology.webp') }}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Hematology Oncology</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus veritatis rerum nihil?</p>
                    <a href="{{ route('natcoProducts') }}?category=HO" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 cat-cards-row">
            <div class="card text-center">
                <img src="{{ asset('Images/product_category/natco_gyne_oncology.webp') }}" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Gynecologic Oncology</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, voluptatum!</p>
                    <a href="{{ route('natcoProducts') }}?category=GO" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        <!-- Add more product cards as needed -->
    </div>
</div>

