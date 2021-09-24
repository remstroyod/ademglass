jQuery(document).ready(function() {
    /**
     * Contact Form 7
     */
    /** Before Send **/
    $(document).on('click', '.fancyFastOrder', function (event) {

    });

    $(document).on('submit', '.wpcf7-form', function (event) {
        var frm = $(this),
            btn = $(frm).find('[type="submit"]');
        $(btn).find('span').addClass('hidden');
        $(btn).append('<span class="loaded">Минутку <b class="btn__loading"><i>.</i><i>.</i><i>.</i></b></span>');
        $(frm).find('input,button,select,textarea,checkbox').addClass('disabled');
        $('.popup [name="page-url"]').val($('.popup').data('url'));
        //return false;
        
    });
    /** After Send **/
    document.addEventListener('wpcf7submit', function (event) {
        var $submit = $('#' + event.detail.id).find('[type="submit"]'),
            $form = $('#' + event.detail.id);
        $submit.find('.loaded').remove();
        $submit.find('.hidden').removeClass('hidden');
        $submit.removeClass('disabled');
        $form.find('input,button,select,textarea')
            .removeClass('disabled');
    });
    /** Success Send **/
    document.addEventListener('wpcf7mailsent', function (event) {
        $.fancybox.close(true);
        $.fancybox.open('' +
            '<div class="popup fancybox-thanks">' +
            '<div class="popup__header">' +
            '<h5 class="h3 popup__title">Спасибо!</h5>' +
            '</div>' +
            '<div class="popup__content">' +
            '<div class="">' +
            '<p style="margin: 0;padding: 0">Ваше сообщение успешно отправлено.</p>' +
            '</div>' +
            '</div>' +
            '<div class="popup__footer">' +
            '<a href="#close" class="btn btn-red" data-fancybox-close>Закрыть</a>' +
            '</div>' +
            '</div>'
        );

        $('body').removeAttr('class');
        $('.overlay').remove();
    });


    /**
     * Single Product
     * Быстрый заказ
     */

    $(document).on('click', '.fancyFastOrder', function(e){
        e.preventDefault();
        var data = {
                'action'        : 'adem_form_fancybox_fastorder',
                'title'         : $(this).attr('data-title'),
                'page_url'      : $(this).attr('data-url'),
            },
            $this = $(this);
        $this.block({ message: null, overlayCSS: { background: '#fff', opacity: 0.6 } });
        $.post(woocommerce_params.ajax_url, data, function(response) {

        }).done(function( data ) {
            $.fancybox.close();
            $.fancybox.open({
                type: "html",
                src: data,
                opts : {
                    afterShow : function( instance, current ) {
                        jQuery('.wpcf7 > form').each(function () {
                            var $form = jQuery(this);
                            wpcf7.initForm($form);
                            if (wpcf7.cached) {
                                wpcf7.refill($form);
                            }
                        });
                        floatingLabel.init();
                    }
                }
            });


            $this.unblock();
        });
    });

});
