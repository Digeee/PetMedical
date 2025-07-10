<section id="what-we-do" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" style="font-family: 'Poppins', sans-serif; font-weight: 600;">WHAT WE DO</h2>
        <!-- Line under the title -->
        <div class="title-line mb-5"></div>
        <p class="text-center mb-5" style="font-family: 'Poppins', sans-serif;">They will have to make the best of things its an uphill climb</p>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card rounded-0 border-0">
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="https://i.pinimg.com/736x/d6/08/57/d608573caa76e95f5ce02d2768c8716b.jpg" class="card-img-top" alt="Pet Wellness">
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 bg-dark text-white d-flex justify-content-center align-items-center p-3">
                            <div class="text-center">
                                <h5 class="card-title">PET WELLNESS</h5>
                                <p class="card-text">We Take Care On Your Pet<br>To a deluxe apartment in the sky. And we'll do it our way yes our way make all our dreams come true for me and you No phone no lights no motor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card rounded-0 border-0">
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="https://i.pinimg.com/736x/ad/d0/2e/add02e07f87474e5ae310f39a3dee884.jpg" class="card-img-top" alt="Pet Wellness">
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 bg-dark text-white d-flex justify-content-center align-items-center p-3">
                            <div class="text-center">
                                <h5 class="card-title">PET WELLNESS</h5>
                                <p class="card-text">We Take Care On Your Pet <br>To a deluxe apartment in the sky. And we'll do it our way yes our way make all our dreams come true for me and you No phone no lights no motor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card rounded-0 border-0">
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="https://images.pexels.com/photos/1490908/pexels-photo-1490908.jpeg" class="card-img-top" alt="Pet Wellness">
                        <div class="overlay position-absolute top-0 left-0 w-100 h-100 bg-dark text-white d-flex justify-content-center align-items-center p-3">
                            <div class="text-center">
                                <h5 class="card-title">PET WELLNESS</h5>
                                <p class="card-text">We Take Care On Your Pet<br>To a deluxe apartment in the sky. And we'll do it our way yes our way make all our dreams come true for me and you No phone no lights no motor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .card-img-container {
        position: relative;
        overflow: hidden;
    }

    .overlay {
        opacity: 0; /* Initially hide the overlay */
        transition: opacity 0.3s ease; /* Smooth transition when hovering */
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent black */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 1; /* Ensure the overlay is on top */
    }

    /* Image fitting styles */
    .card-img-top {
        object-fit: cover; /* Ensures images cover the area without stretching */
        width: 100%;
        height: 250px; /* Set a fixed height for uniformity */
    }

    /* Show the overlay with text when the user hovers over the card */
    .card:hover .overlay {
        opacity: 1; /* Make overlay visible */
    }

    .overlay .card-title,
    .overlay .card-text {
        color: white;
        font-family: 'Poppins', sans-serif;
        text-align: center;
    }

    .card {
        transition: transform 0.3s ease-in-out;
    }

    /* Optional: Add slight rotation on hover */
    .card:hover {
        transform: rotateY(5deg);
    }

    /* Line under the title */
    .title-line {
        width: 50px;
        height: 3px;
        background-color: #000;
        margin: 0 auto;
        margin-bottom: 30px;
    }
</style>
