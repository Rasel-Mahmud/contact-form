(function ($) {
    $(document).ready(function () {


          let form = $("#contactForm");
          form.on('submit', function (e) {
            e.preventDefault();
            const formData = $("#contactForm").serialize();


            $.post(formBuilder.ajaxurl, {
                dataType: "json",
                action: "sendMailData",
                formData: formData
            }).then(function (res) {
                console.log(res.data)
                // Send to the thank you page
            });

          })


    })
})(jQuery)