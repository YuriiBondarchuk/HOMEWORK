define([
        "jquery", "Magento_Ui/js/modal/modal"
    ], function ($) {
        var ExampleModal = {
            initModal: function (config, element) {

                var $target = $(config.target);
                var interval = $('#element-id').data('interval') * 1000;
                if (interval == 0) {

                    console.log("Promotion interval not installed")
                    return
                }
                else {
                    $target.modal();
                    setInterval(function () {
                        console.log(interval)
                        $target.modal('openModal')
                    }, interval);
                }

            }
        };

        return {
            'interval-modal': ExampleModal.initModal
        };
    }
);

