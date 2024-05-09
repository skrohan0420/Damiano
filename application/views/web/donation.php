<style>
        .bg-breadcrumb {
        position: relative;
        background-image: url('https://shapath.org.in/assets/img/team6.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .bg-breadcrumb::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity (0.5) as needed */
        z-index: 1;
    }

    .container {
        position: relative;
        z-index: 2; 
    }
    
    .example_amount {
    margin-left: 15px;
    border: 1px solid;
    width: 60px;
    text-align: center !important;
}

.fa-big {
    font-size: 1.5rem;
    color: gray;
    /* border:2px solid gray;
        width:30px;
        align:center; */
}
    .success-icon {
      font-size: 4em;
      color: #28a745;
    }
    .cross-icon{
        display: flex;
        justify-content: flex-end;
        margin-right: 20px;
        margin-top: 15px;
    }
    .for-bold{
        font-weight:bold;
        color: black;
    }
    .faild-icon{
        font-size: 4rem;
        color:red;
    }


.amount-label .example_amount:active {
    background: var(--bs-primary) !important;
    color: var(--bs-white) !important;
}

.example_amount {
    margin-left: 15px;
    border: 1px solid;
    width: 60px;
    text-align: center !important;
}
.for-color{
    color: gray;
}
.cursor{
     cursor: auto;
}
</style>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Make a Donation</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-white">Make a Donation</li>
            </ol>
    </div>
</div>
<!-- Header End -->



<!-- Donation Section Start -->
<div class="container py-5">
    <h2 class="text-center mb-4"></h2>
    <div class="row justify-content-center">
        <div class="col-md-8">

                <!-- Projects Dropdown -->
                <div class="mb-3" style="width: auto;">
                    <label for="projectName" class="form-label">Project Name</label>
                    <select class="form-select" id="project_id" name="project_id">
                        <?php if ($flag) {?>
                            <?php if($for == 'project'){?>
                                <option id="p_id" value="<?=  $project['uid'] ?>" selected><?php echo $project['project_title'] ?></option>
                            <?php }else{?>
                                <option id="p_id" value="<?=  $project['uid'] ?>" selected><?php echo $project['title'] ?></option>
                        <?php }} else { ?>
                            <option id="p_id" selected disabled>Select Project</option>
                        <?php foreach ($project as $p) { ?>
                            <option value="<?php echo $p['uid'] ?>"><?php echo $p['project_title'] ?></option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </div>
                <span id="valid_project" style="color:red"></span>

                <!-- Full Name -->
                <div class="mb-3" style="width: auto;">
                    <label for="fullName" class="form-label">Full Name<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <span id="valid_name" style="color:red"></span>
                </div>
                

                <!-- Email ID -->
                <div class="mb-3" style="width: auto;">
                    <label for="email" class="form-label">Email ID<span style="color: red;">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                     <span id="valid_email" style="color:red"></span>
                </div>
               

                <!-- Phone Number -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Phone Number<span style="color: red;">*</span></label>
                    <input type="tel" class="form-control" id="phone" name="phone" maxlength="10" required>
                     <span id="valid_phone" style="color:red"></span>
                </div>
              

                <!--  Date of Birth -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Date of Birth<span style="color: red;">*</span></label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                    <span id="valid_dob" style="color:red"></span>
                </div>
                

                <!-- PAN Card -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">PAN Card<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="pan" name="pan" style="text-transform: uppercase;" required>
                    <span id="valid_pan" style="color:red"></span>
                </div>
                

                <!-- Donation Address -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Address<span style="color: red;">*</span></label>
                    <textarea type="number" class="form-control" id="address" name="address" required></textarea>
                    <span id="valid_address" style="color:red"></span>
                </div>
                

                <!-- Pin -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Pin Code<span style="color: red;">*</span></label>
                    <input type="number" class="form-control" id="pin" name="pin" maxlength="6" required>
                    <span id="valid_pin" style="color:red"></span>
                </div>

                <!-- Donation Amount -->
                <div class="amount-label mb-3" style="width: auto;">
                    <label for="" class="form-label">Donation Amount:-</label>
                    <label class="example_amount" id="amount_1000" onclick="donation_amount('1000', 'amount_1000')">₹1000</label>
                    <label class="example_amount" id="amount_2500" onclick="donation_amount('2500', 'amount_2500')">₹2500</label>
                    <label class="example_amount" id="amount_5000" onclick="donation_amount('5000', 'amount_5000')">₹5000</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                    <span id="valid_amount" style="color:red"></span>
                </div>
             
                
                 <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">YOUR CONTRIBUTIONS ARE ELIGIBLE FOR UPTO 50% TAX BENEFIT UNDER SECTION 80G AS SHAPATH IS REGISTERED AS NON PROFIT ORGANIZATION. <b>Pan: ABETS1765R, 80G: ABETS1765RF20221</b></label>
                </div>

                <div class="mb-3" style="width: auto;">
                <label for="" class="form-label">
                <input type="checkbox" id="check_value" name="check_value" required>
                    You that Shapath can reach out to you through WhatsApp/ email/ SMS/ Phone to provide information of your donation campaigns, 80G receipt etc.
                </label>
                <span id="please_check" style="color:red"></span>
                </div>
                

                <!-- Submit Button -->
                <button class="btn btn-primary" style="color: white;" id="donate_btn">Donate Now</button>
   
        </div>
    </div>
</div>
 <!-- Payment Successful Modal -->
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" ria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="cross-icon">
                        <a class="close" href="<?php echo base_url('donate')?>">
                            <i class="fas fa-times fa-big"></i>
                        </a>
                    </div>
                    <a class="cursor" href="<?php echo base_url('donate')?>">
                    <div class="modal-body">
                        <div class="container container-mayment-success">
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center">
                                    <i class="fa fa-check-circle success-icon"></i>
                                    <h2 class="mt-3">Payment Successful!</h2>
                                    <p class="mt-3 for-bold">Thank you for your contrubution.</p>
                                    <p class="for-color">Payment ID: <small id="success_amount_id"></small></p>
                                    <p class="for-color">Transaction Status: <small id="success_status"></small></p>
                                    <p class="for-color">Transaction Amount: <small id="success_amount"></small></p>
                                    <p class="for-bold">The donor will receive a 80G receipt in 5-6
                                        <br>working days at the regstered email <br>address.</p>
                                    <p class="for-color">Thank you for generous donation!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Modal -->
        <!-- Payment Faild Modal -->
        <div class="modal" id="exampleModal_faild" tabindex="-1" role="dialog" ria-labelledby="exampleModalLabel" data-backdrop="static" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="cross-icon">
                        <a class="close" href="<?php echo base_url('donate')?>">
                            <i class="fas fa-times fa-big"></i>
                        </a>
                    </div>
                    <a class="cursor" href="<?php echo base_url('donate')?>">
                    <div class="modal-body">
                        <div class="container container-mayment-success">
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center">
                                <i class="fas fa-times-circle faild-icon"></i>
                                    <h2 class="mt-3">Payment Failed!</h2>
                                    <p class="mt-3 for-bold">Unfortunately, the payment was not successful.</p>
                                    <p>Order ID: N/A</p>
                                    <p>Tracking ID: N/A</p>
                                    <p>Transaction Status: Failed</p>
                                    <p>Transaction Amount: N/A</p>
                                    <p class="for-bold">Please check your payment details and try again later.</p>
                                    <p>We apologize for any inconvenience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- End Modal -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>-->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    function donation_amount(amount, id) {
        $('#amount').val(amount)
        $('#amount_1000').css({
            "background-color": "",
            "color": "",
        });
        $('#amount_2500').css({
            "background-color": "",
            "color": "",
        });
        $('#amount_5000').css({
            "background-color": "", 
            "color": "",
        });
        $('#'+id).css({
            "border": "1px solid gray",
            "background": "var(--bs-primary)",
          "color": "white",
        });
    }

    $("#donate_btn").click(function () {
        console.log(1)
        var regpan = /^([A-Z]){5}([0-9]){4}([A-Z]){1}?$/;

        var isChecked = $('#check_value').is(':checked');
        var project =   $('#project_id').val()
        var name =  $('#name').val()
        var phone = $('#phone').val()
        var dob =  $('#dob').val()
        var email = $('#email').val() 
        var pan = $('#pan').val()
        var address = $('#address').val()
        var pin =  $('#pin').val()
        var amount =  $('#amount').val()
        var panUpper = pan.toUpperCase();

        var checkDob = new Date(dob);
        var currentDate = new Date();
        var minDate = new Date(currentDate.getFullYear() - 18, currentDate.getMonth(), currentDate.getDate());
       

        $('#please_check').empty();
        $('#valid_amount').empty();
        $('#valid_project').empty();
        $('#valid_name').empty();
        $('#valid_email').empty();
        $('#valid_phone').empty();
        $('#valid_dob').empty();
        $('#valid_pan').empty();
        $('#valid_address').empty();
        $('#valid_pin').empty();
        
        if(project == ""){
            $('#valid_project').append("please select a project");
        }else{
            $('#valid_project').empty();
        }
        if(name == ""){
            $('#valid_name').append("please enter your name");
        }else{
            $('#valid_name').empty();
        }
        if(email == ""){
            $('#valid_email').append("please enter your email");
        }else{
            $('#valid_email').empty();
        }
        if(phone == ""){
            $('#valid_phone').append("please enter your phone no");
        }else{
            $('#valid_phone').empty();
        }
        if(dob == ""){
            $('#valid_dob').append("please enter date of birth");
        }else if(checkDob > minDate){
            $('#valid_dob').append("please enter valid date of birth");
        }else{
            $('#valid_dob').empty();
        }
        if(panUpper == ""){
            $('#valid_pan').append("please enter PAN");
        }else if(!regpan.test(panUpper)){
            $('#valid_pan').empty();
            $('#valid_pan').append("please enter valid PAN");
        }else{
            $('#valid_pan').empty();
        }
        if(address == ""){
            $('#valid_address').append("please enter address");
        }else{
            $('#valid_address').empty();
        }
        if(pin == ""){
            $('#valid_pin').append("please enter pin");
        }else{
            $('#valid_pin').empty();
        }
        if(amount == ""){
            $('#valid_amount').append("please enter pin");
        }else{
            $('#valid_amount').empty();
        }
        // alert(panUpper)
        if(!isChecked){
            $('#please_check').append("please check the box");
        }else{
            $('#please_check').empty();
            if(project != "" && name != "" && email != "" && phone != "" && dob != "" && panUpper != "" && address != "" && pin != "" && amount != "" && checkDob < minDate && regpan.test(panUpper)){
                var options = {
            "key": "<?=RAZORPAY_KEY_TEST_ID?>", // Enter the Key ID generated from the Dashboard
            "amount": amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "name": "Shapath Donation",
            "description": 'Shapath Donation test',
            "image": "<?= base_url()?>assets/img/favicon.ico",
            "handler": function (response) {
                var paymentid = response.razorpay_payment_id;

                $.ajax({
                    url: "<?=base_url('admin/Admin/proccess_payment')?>",
                    type: "POST",
                    data: { 
                        project_id:project,
                        name: name,
                        phone: phone,
                        dob: dob,
                        email: email,
                        pan: panUpper,
                        address: address,
                        pin: pin,
                        amount: amount,
                        paymentid:paymentid
                    },
                    success: function (finalresponse) {
                        // alert("Payment Successful. Your receipt will be send to your mail.")
                        // finalresponse = finalresponse;
                        var res = (JSON.parse(finalresponse))
                        console.log(res.payment_id)
                        // console.log(finalresponse)
                        if (res.status) {
                            $("#exampleModal").modal('show');
                            $("#exampleModal").modal({backdrop: 'static'});
                            $('#success_amount_id').append(res.payment_id)
                            $('#success_status').append('success')
                            $('#success_amount').append(res.amount)
                            $('#project_id').val("")
                            $('#name').val("")
                            $('#phone').val("")
                            $('#dob').val("")
                            $('#email').val("") 
                            $('#pan').val("")
                            $('#address').val("")
                            $('#pin').val("")
                            $('#amount').val("")
                            $('#check_value').prop('checked', false);
                            // window.location.href = '<?= base_url('payment-success')?>';
                        }else {
                            $("#exampleModal_faild").modal('show');
                            // alert('Please check console.log to find error');
                            $('#project_id').val("")
                            $('#name').val("")
                            $('#phone').val("")
                            $('#dob').val("")
                            $('#email').val("") 
                            $('#pan').val("")
                            $('#address').val("")
                            $('#pin').val("")
                            $('#amount').val("")
                            $('#check_value').prop('checked', false);
                            console.log(finalresponse);
                        }
                    }
                })

            },
            "theme": {
                "color": "#3399cc"
            }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            }
        }
        
    });
</script>
<!-- Donation Section End -->