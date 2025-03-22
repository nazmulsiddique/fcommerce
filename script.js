$(document).ready(function () {
    $("#checkout-form").on("submit", function (e) {
        e.preventDefault();
        // Collect form data
        let formData = {
            fullName: $("#fullName").val(),
            phoneNumber: $("#phoneNumber").val(),
            deliveryPoint: $("input[name='deliveryPoint']:checked").val(),
            fullAddress: $("#fullAddress").val(),
            quantity: $("#quantity").text(),
            totalAmount: $("#total-amount").text(),
            agree: $("#iAgree").is(":checked") ? 1 : 0
        };

        // AJAX request
        $.ajax({
            url: "order.php",
            type: "POST",
            data: formData,
            dataType: "json",
            beforeSend: function () {
                // $(".formBox").css({"opacity": "0.3", "min-height": "250px"});
                // $("#loader").show();
            },
            success: function (response) {
                if (response.success) {
                    alert("Order placed successfully!");
                } else {
                    alert("Error: " + response.message);
                }
            },
            error: function () {
                //alert("AJAX request failed!");
            },
            complete: function () {
                // $("#wsms_feedback_result").show();
                // $("#loader").hide();
                // $(".formBox").css("opacity", 1);
            }
        });
    });
});
