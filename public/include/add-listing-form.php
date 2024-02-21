<section>
    <div class="container-fluid" data-aos="fade-down">
        <form id="signUpForm" action="#!">
            <!-- start step indicators -->
            <div class="form-header d-flex mb-4">
                <span class="stepIndicator">1. Description</span>
                <span class="stepIndicator">2. Media</span>
                <span class="stepIndicator">3. Location</span>
                <span class="stepIndicator">4. Details</span>
                <span class="stepIndicator">5. Amenities</span>
            </div>
            <!-- end step indicators -->

            <!-- step one -->

            <div class="step mt-5">
               
                <!-- <div><h5 class="form-heading text-center mb-4">Description</h5></div> -->
                <div class="d-flex">
                    <div class="vr mr-2 ml-2"></div>
                    <div><h5 class="form-heading">Property Description</h5></div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="First Name" />
                    </div>

                    <div class="col-md-12">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Comment"></textarea>
                    </div>
                </div>

                <div class="d-flex mt-5">
                    <div class="vr mr-2 ml-2"></div>
                    <div><h5 class="form-heading">Property Price</h5></div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Tittle (Mandatory)" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control form-control-lg" id="inputPassword4" placeholder="Tittle (Mandatory)" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Tittle (Mandatory)" />
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control form-control-lg" id="inputPassword4" placeholder="Tittle (Mandatory)" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="email" class="form-control form-control-lg" id="inputPassword4" placeholder="Tittle (Mandatory)" />
                    </div>
                </div>

                <div class="d-flex mt-5">
                    <div class="vr mr-2 ml-2"></div>
                    <div><h5 class="form-heading">Select Categories</h5></div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-3">
                        <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Tittle (Mandatory)" />
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3">
                        <input type="text" class="form-control form-control-lg" id="inputPassword4" placeholder="Tittle (Mandatory)" />
                    </div>

                    <div class="col-md-6 col-lg-4 mb-3">
                        <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Tittle (Mandatory)" />
                    </div>
                </div>
            </div>

            <!-- step two -->
            <div class="step">
                <p class="text-center mb-4">step 2</p>
                <div class="mb-3">
                    <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook" />
                </div>
            </div>

            <!-- step three -->
            <div class="step">
                <p class="text-center mb-4">step 3</p>
                <div class="mb-3">
                    <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Address" oninput="this.className = ''" name="address" />
                </div>
            </div>

            <!-- step 4 -->
            <div class="step">
                <p class="text-center mb-4">step 4</p>
                <div class="mb-3">
                    <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Address" oninput="this.className = ''" name="address" />
                </div>
            </div>

            <!-- step 5 -->
            <div class="step">
                <p class="text-center mb-4">step 5</p>
                <div class="mb-3">
                    <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile" />
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Address" oninput="this.className = ''" name="address" />
                </div>
            </div>

            <!-- start previous / next buttons -->
            <div class="form-footer d-flex">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next Step</button>
            </div>
            <!-- end previous / next buttons -->
        </form>
    </div>
</section>