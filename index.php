<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Fcommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<?php 
 $price = 3266;
 $shippingCost = 50;
?>
<body>
    <!-- Checkout Form -->
    <div class="container my-5">
        <h2 class="mb-4 bi-title">billing information</h2>
        <div class="row">
            <!-- Billing Details -->
            <div class="col-md-12">
                <form id="checkout-form">
                    <div class="mb-3">
                        <label for="fullName" class="form-label mb-0" name="fullName">Full Name <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullName" required>
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label mb-0" name="phoneNumber">Phone Number <span
                                class="text-danger">*</span></label>
                        <input type="tel" class="form-control" id="phoneNumber" maxlength="11" pattern="01\d{9}" required>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label d-block mb-2">
                            Delivery Point <span class="text-danger">*</span>
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="deliveryPoint" id="inside_dhaka" value="50" required>
                            <label class="form-check-label" for="inside_dhaka">
                                Inside Dhaka (TK. 50)
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="deliveryPoint" id="outside_dhaka" value="100" required>
                            <label class="form-check-label" for="outside_dhaka">
                                Outside of Dhaka (TK. 100)
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="fullAddress" rows="3"
                            placeholder="Full Address" name="fullAddress"></textarea>
                    </div>
                    <div class="mb-3">
                        <div class="product-card d-flex align-items-center p-3 border rounded">
                            <img src="ricecooker.png" alt="Product Image" class="product-img me-5">
                            <div class="product-info flex-grow-1">
                                <h5 class="product-title mb-2">WRC-SGAE280</h5>
                                <div class="d-flex align-items-center justify-content-around">
                                    <button class="btn btn-outline-secondary btn-sm quantity-btn" id="decrease-btn">−</button>
                                    <span class="mx-2 quantity" id="quantity">1</span>
                                    <button class="btn btn-outline-secondary btn-sm quantity-btn" id="increase-btn">+</button>
                                    <span class="text-primary fw-bold price text-end">Tk. <span id="total-price"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="accordion accordion-flush product-features" id="product_features">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#productFeatures" aria-expanded="false" aria-controls="productFeatures">
                                    Product Features
                                    </button>
                                </h2>
                                <div id="productFeatures" class="accordion-collapse collapse" data-bs-parent="#product_features">
                                    <div class="accordion-body">
                                        <ul class="">
                                            <li>- Usable For 1.8-2.0 KG Uncooked Rice</li>
                                            <li>- Unique “Safety thermostat” for the Best Electrical Safety</li>
                                            <li>- Electrical Shock Resistance</li>
                                            <li>- Seamless Robust Outer Body with Double Inner Pot</li>
                                            <li>- Separate Aluminum Food Steamer</li>
                                            <li>- Easy to Clean and Removable Inner Pot</li>
                                            <li>- Simple Electronic Operation with Automatic Keep-Warm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                            <ul class="list-group shipping">
                                <li class="list-group-item d-flex justify-content-between align-items-center py-3">
                                Shipping Cost
                                    <span id="shipping-cost"></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center text-black py-3">
                                    Total: <span id="total-amount">Tk. <?php echo $price; ?></span>
                                </li>
                            </ul>
                    </div>
                    <div class="mb-3">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="iAgree" name="agree" required>
                            <label class="form-check-label" for="iAgree">I Agree With Terms & Conditions</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 btn-lg" id="place-order">Place Order TK. <span id="order-total-amount"></span></button>

                </form>

                <div class="py-5">
                    <p class="fw-bold">সম্মানিত গ্রাহক,</p>
                    <p> ১) ঢাকা সিটির ভেতরে ডেলিভারির সময়সীমা ৩-৫ কার্যদিবস এবং ঢাকার বাইরে ৫-৭ কার্যদিবস। </p>
                    <p> ২) মার্কেটপ্লেস সেলার প্রোডাক্টের ক্ষেত্রে ঢাকা সিটির মধ্যে ডেলিভারি চার্জ ৬০ টাকা এবং ঢাকা সিটির বাইরে ডেলিভারি চার্জ ১২০ টাকা | </p>
                    <p> ৩) সারা লাইফস্টাইল এবং মার্কেটপ্লেস সেলার প্রোডাক্টের ক্ষেত্রে পার্সেল এর ওজনের ওপর ভিত্তি করে ডেলিভারি চার্জ পরিবর্তন হবে। </p>
                </div>
            </div>

           


                
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <script>
    $(document).ready(function () {
        var quantity = 1;
        var pricePerUnit = <?php echo json_encode($price); ?>; // Use json_encode to ensure proper output of PHP value
        var shippingCost = 0;

        function updateTotalPrice() {
            var productTotal = pricePerUnit * quantity;
            var totalAmount = productTotal + shippingCost;

            // Update UI elements
            $("#quantity").text(quantity);
            $("#total-price").text(productTotal.toFixed(2)); // Update product price
            $("#shipping-cost").text(shippingCost); // Update shipping cost
            $("#total-amount").text("Tk. " + totalAmount.toFixed(2)); // Update total price
            $("#order-total-amount").text(totalAmount.toFixed(2));
        }

        // Quantity Increase
        $("#increase-btn").click(function () {
            quantity++;
            updateTotalPrice();
        });

        // Quantity Decrease (min value: 1)
        $("#decrease-btn").click(function () {
            if (quantity > 1) {
                quantity--;
                updateTotalPrice();
            }
        });

        // Shipping Cost Change
        $('input[name="deliveryPoint"]').change(function () {
            shippingCost = parseFloat($(this).val());
            updateTotalPrice();
        });

        updateTotalPrice(); // Initial calculation
    });
</script>

</body>

</html>