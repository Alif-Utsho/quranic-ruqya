@extends('frontend.layouts.master')
@section('content')

<!-- contact -->
<section id="contact">
    <div class="container">
        <div class="row gapp my-3">
            <div class="col-lg-6 mt-5 col-md-6">
                <div class="footer-logo">
                    <img src="images/logo.jpg-removebg-preview.png" alt="">
                </div>
                <h1>স্বাগতম কুরআনিক রুকইয়াহ
                </h1>
                <p>description</p>
                <br>
                <h4>যোগাযোগ</h4>
                <p></p>
                <!--<p><i class="fa-solid fa-location-dot"></i> <strong>অবস্থান:</strong> যুক্তরাজ্য</p>-->
                <p><i class="fa-solid fa-phone"></i> <strong>ফোন:</strong>০১৭৭৭৭৭৭৭৭</p>
                <p><i class="fa-solid fa-location-dot"></i> <strong>ঠিকানা:</strong>ঢাকা, বাংলাদেশ</p>
            </div>


            <div class="col-lg-6">
                <h2 class="text-center mb-4">যোগাযোগ ফর্ম</h2>
                <form class="c-form">
                    <!-- Name Field -->
                    <div class="mb-3">
                        <label for="name" class="form-label">নাম</label>
                        <input type="text" class="form-control" id="name" placeholder="আপনার নাম লিখুন" required>
                    </div>
                    <!-- Phone Field -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">ফোন নম্বর</label>
                        <input type="tel" class="form-control" id="phone" placeholder="আপনার ফোন নম্বর লিখুন" required>
                    </div>
                    <!-- Address Field -->
                    <div class="mb-3">
                        <label for="address" class="form-label">ঠিকানা</label>
                        <textarea class="form-control" id="address" rows="3" placeholder="আপনার ঠিকানা লিখুন" required></textarea>
                    </div>
                    <!-- Message Field -->
                    <div class="mb-3">
                        <label for="message" class="form-label">বার্তা</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="আপনার বার্তা লিখুন" required></textarea>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">পাঠান</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- contact -->
@endsection