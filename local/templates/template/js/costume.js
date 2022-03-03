function ajaxUpdate() {
    $.get("/local/templates/template/ajax/basketupdate.php", function (data) {
        $('.basket-block').html(data);
        BX.onCustomEvent('OnBasketChange');
        lazyLoad($('body'));
    });
}

function compFavPageRefresh() {
    $.get("/favorites/", function (data) {
        $('.favorites-block').html(data);
        BX.onCustomEvent('OnBasketChange');
        lazyLoad($('body'));
    });
}

BX.addCustomEvent('onAjaxSuccess', function () {
    lazyLoad($('body'));
});

$(document).on('click', '[data-show-more]', function () {
    var btn = $(this);
    var page = btn.attr('data-next-page');
    var id = btn.attr('data-show-more');
    var data = {};
    data['PAGEN_' + id] = page;

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            var list = $(data).find('.dds-list-items');
            $('.dds-list-pag').remove();
            $('.dds-list-items').append(list.html());
            $('.dds-list-items').after($(data).find('.dds-list-pag'));
            lazyLoad($('body'));
        }
    });
});

$(document).on('click change submit', '[data-class]', function (e) {
    let mClass = $(this).data('class');
    let method = $(this).attr('data-method');
    let $this = $(this);
    let data = {};
    data['method'] = method;

    switch (e.type) {
        case 'click':
            switch (method) {
                case 'add2basket':
                    let id = $this.data('id');
                    data['id'] = id;
                    data['quantity'] = $this.parents('.dds-parent-basket').find('[name="dds-quantity"]').val();
                    break;
                case 'delete':
                    data['id'] = $this.attr('data-id');
                    break;
                case 'clearOrder':
                    data['method'] = 'clear';
                    break;
                case 'removeFromOrder':
                    data['method'] = 'delete';
                    data['id'] = $this.attr('data-id');
                    break;

                case 'compfav':
                    data['id'] = $this.attr('data-id');
                    data['add'] = $this.attr('data-add');
                    break;
                case 'compfavdelete':
                    data['id'] = $this.attr('data-id');
                    data['add'] = $this.attr('data-add');
                    break;
                case 'clear_favorites':
                    break;
                case 'clear':
                    break;
                default:
                    return false;
            }
            break;
        case 'change':
            switch (method) {
                case 'update':
                    data['id'] = $this.attr('data-id');
                    data['quantity'] = $this.val();
                    break;
                default:
                    return false;
            }
            break;
        case 'submit':
        default:
            return false;
    }

    $.ajax({
        url: "/api/2quick/ajax/index.php",
        type: "POST",
        dataType: 'json',
        data: {action: mClass, data: data},
        success: function (result) {
            switch (method) {
                case 'clear':
                case 'update':
                case 'delete':
                    ajaxUpdate();
                    break;
                case 'clearOrder':
                case 'removeFromOrder':
                    location.reload();
                    break;
                case 'add2basket':
                    ajaxUpdate();
                    $('#success-modal').modal('show');
                    $('#success-modal').find('.modal-text').html(result.result.message);
                    break;
                case 'compfav':
                    $this.addClass('is-active');
                    $this.attr('data-method', 'compfavdelete');
                    compFavPageRefresh();
                    break;
                case 'clear_favorites':
                    compFavPageRefresh();
                    break;
                case 'compfavdelete':
                    $this.removeClass('is-active');
                    $this.attr('data-method', 'compfav');
                    compFavPageRefresh();
                    break;
            }
        }
    });
    return false;
});

$(document).on('change', '.smartfilter', function () {
    location.href = location.pathname + '?' + $('.smartfilter').serialize();
});

$(document).ready(function () {
    $('.bx-ui-sls-fake').addClass('requiredField').addClass('callback-text');
});