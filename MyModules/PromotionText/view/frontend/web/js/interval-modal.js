// define(['jquery', 'jquery/ui'],
//     document.onreadystatechange = function(){
//         if(document.readyState === 'complete'){
//
//
//
//
//             setTimeout(console.log( 'Привет' ), 3000);
//         }
//     }
//
//
// );












//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

define([
        "jquery", "Magento_Ui/js/modal/modal"
    ], function($){
        var ExampleModal = {
            initModal: function(config, element) {

                var $target = $(config.target);
                var interval = $('#element-id').data('interval');
                $target.modal();
                setInterval(function() {
                    $target.modal('openModal')
                }, interval);


            }
        };

        return {
            'interval-modal': ExampleModal.initModal
        };
    }
);

