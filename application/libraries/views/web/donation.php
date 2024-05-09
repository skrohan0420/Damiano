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
    <h2 class="text-center mb-4">Make a Donation</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">

                <!-- Projects Dropdown -->
                <div class="mb-3" style="width: auto;">
                    <label for="projectName" class="form-label">Project Name</label>
                    <select class="form-select" id="project_id" name="project_id">
                        <?php if ($flag) { ?>
                            <option id="p_id" value="<?php echo $project['uid'] ?>" selected disabled>
                                <?php echo $project['project_title'] ?>
                            </option>
                        <?php } else { ?>
                            <option id="p_id" selected value="general-donation">general-donation</option>
                            <?php foreach ($project as $p) { ?>

                                <option value="<?php echo $p['uid'] ?>">
                                    <?php echo $p['project_title'] ?>
                                </option>
                            <?php } ?>
                        <?php } ?>
                    </select>
                </div>

                <!-- Full Name -->
                <div class="mb-3" style="width: auto;">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <!-- Email ID -->
                <div class="mb-3" style="width: auto;">
                    <label for="email" class="form-label">Email ID</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Phone Number -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <!-- PAN Card -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">PAN Card</label>
                    <input type="text" class="form-control" id="pan" name="pan" required>
                </div>

                <!-- Donation Address -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Address</label>
                    <textarea type="number" class="form-control" id="address" name="address" required></textarea>
                </div>

                <!-- Donation Amount -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Pin Code</label>
                    <input type="number" class="form-control" id="pin" name="pin" required>
                </div>

                <!-- Donation Amount -->
                <div class="mb-3" style="width: auto;">
                    <label for="" class="form-label">Donation Amount</label>
                    <input type="number" class="form-control" id="amount" name="amount" required>
                </div>

                <!-- Submit Button -->
                <button class="btn btn-primary" style="color: white;" id="donate_btn">Donate Now</button>
   
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>

    $("#donate_btn").click(function () {
        console.log(1)
        var amount = $('#amount').val();
       

        var options = {
            "key": "<?=RAZORPAY_KEY_TEST_ID?>", // Enter the Key ID generated from the Dashboard
            "amount": amount * 100, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
            "name": "Shapath Donation test",
            "description": 'Shapath Donation test',
            "image": "https://example.com/your_logo",
            "handler": function (response) {
                var paymentid = response.razorpay_payment_id;

                $.ajax({
                    url: "<?=base_url('admin/Admin/proccess_payment')?>",
                    type: "POST",
                    data: { 
                        project_id: $('#project_id').val(), 
                        name: $('#name').val(),
                        phone: $('#phone').val(),
                        email: $('#email').val(), 
                        pan: $('#pan').val(), 
                        address: $('#address').val(), 
                        pin: $('#pin').val(),
                        amount: amount 
                    },
                    success: function (finalresponse) {

                        finalresponse = JSON.parse(finalresponse)

                        if (finalresponse.status) {
                            window.location.href = '<?= base_url('donate')?>';
                        }
                        else {
                            alert('Please check console.log to find error');
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
    });
</script>
<!-- Donation Section End -->