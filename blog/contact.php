<?php

    include "nav.php";
?>
<!--Contact Us Start-->
 
<!--Contact text-->
<div class="container mt-5 mb-5">
    <h1 class="text-center">We're here to help</h1>
    <p class="text-center">Whether you're curious about features, a free trail or even press- we're ready to answer any and all questions</p>
</div>
<!--Contact body-->
<div class="container mt-5 mb-5">
    <div class="row mb-5">
    <div class="col-md-6 offset-md-3">
            <div>
                <input type="text" name="name" id="name" placeholder="Fullname" class="form-control"><br>
                <input type="number" name="number" id="number" placeholder="Phone Number" class="form-control"><br>
                <input type="email" name="email" id="email" placeholder="Email" class="form-control"><br>
                
                <textarea name="description" id="description" class="form-control" placeholder="Description"></textarea><br>
                <button type="submit" class="btn btn-dark text-white">Submit</button>
                <button class="btn btn-danger">Cancel</button>
            </div>
        </div>
    </div>
    <div class="row">    
        <div class="col">
            <div class="card">
                        <div class="card-header">
                            <h2><i class="fa-solid fa-phone-volume"></i>&nbsp;&nbsp;&nbsp;Call Us</h2>
                        </div>
                        <div class="card-body">
                            <span>We'd love to hear from you<br><small>+959964033115</small></span><br>
                            <button class="btn btn-dark mt-3 mb-4 text-white">Call Now</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2><i class="fa-solid fa-map-location"></i>&nbsp;&nbsp;&nbsp;Address</h2>                    
                        </div>
                    <div class="card-body">
                        <span>No(51),32 street, bet 72*73,Yan Lone Ward,Chan Aye Tharsan Township,Mandalay</span><br>
                        <button class="btn btn-dark mt-3 mb-4 text-white">See Map</button>
                    </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h2><i class="fa-solid fa-envelope-circle-check"></i>&nbsp;&nbsp;&nbsp;Ask A Question</h2>
                        </div>
                    <div class="card-body">
                        <span>We're available<br> From 9:00 AM to 6:00PM</span><br>
                        <button class="btn btn-dark mt-3 mb-4 text-white">Chat Now</button>
                    </div>
                    </div>
                </div>
            </div>
            
            

        </div>
    </div>
</div>



















<?php

    include "footer.php";

?>