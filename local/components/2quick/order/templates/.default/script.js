$(document).on('change', '[name=LOCATION]', function (e) {
    if ($(this).val().length > 0) {
        BX.ajax.runComponentAction('2quick:order',
            'getupdateDeliveries', { // Вызывается без постфикса Action
                mode: 'class',
                data: {
                    userCityId: $(this).val(),
                    payment: $('[name="payment"]').val()
                }, // ключи объекта data соответствуют параметрам метода
            })
            .then(function (response) {
                $('.tq_delivery_list').html(response.data.html);
                $('[name=delivery]:checked').change();
            });
    }

});

$(document).on('change', '[name=delivery]', function () {
    BX.ajax.runComponentAction('2quick:order',
        'getdeliveryprice', { // Вызывается без постфикса Action
            mode: 'class',
            data: {
                userCityId: $('[name=LOCATION]').val(),
                deliveryId: $(this).val(),
                paySystemId: $('[name="payment"]:checked').val()
            }, // ключи объекта data соответствуют параметрам метода
        })
        .then(function (response) {
            if (response.data.delivery > 0) {
                $('.cart__price-delivery').html(response.data.delivery_price);
            } else {
                $('.cart__price-delivery').html('Бесплатно');
            }
            $('.cart__price-sum').html(response.data.total);
            $('#tq_payment').html(response.data.payment);
            $('#tq_payment input:checked').change();
        });
});

$(document).on('submit', '#ORDER', function (e) {
    e.preventDefault();
    BX.ajax.runComponentAction('2quick:order',
        'createOrder', { // Вызывается без постфикса Action
            mode: 'class',
            data: {data: $('#ORDER').serializeArray()}, // ключи объекта data соответствуют параметрам метода
        })
        .then(function (response) {
            var errorBlock = $('.tq_error_order');
            if (response.data.STATUS == 'ERROR') {
                errorBlock.html(response.data.HTML).addClass('active');
                $('html, body').animate({
                    scrollTop: $('#ORDER').offset().top-200
                }, {
                    duration: 370,   // по умолчанию «400»
                    easing: "linear" // по умолчанию «swing»
                });
            } else {
                errorBlock.html('');
                location.href = '?ORDER_ID=' + response.data
            }
        });
    return false;
});

