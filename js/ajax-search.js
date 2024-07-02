jQuery(function ($) {
    $('.header__main-search input[name="s"]').on('keyup', function () {
        var search = $('.header__main-search input[name="s"]').val();
        if (search.length < 4) {
            return false;
        }
        var data = {
            s:search,
            action: 'search_action',
            nonce : search_form.nonce

        };
        $.ajax({
            url: search_form.url,
            data :data,
            type:'POST',
            dataType:'json',
            beforeSend:function(xhr){
            },
            success:function(data){
                console.log(data.out);
                $('.header__search-get').html(data.out);
            }
        });

    });
});


jQuery(function($) {
    $product_wrapper = $('.filter__products');

    $('.filter__button').click(function(e) {
        e.preventDefault();
        
        var linkCat = $(this).attr('href');
        var titleCat = $(this).text();

        document.title = titleCat;
        history.pushState({page_title: titleCat}, titleCat, linkCat);

        // ajaxCat(linkCat);
    })
    let datas = {
        action: 'filter_action',
        whatever: 123,
    }

    $.ajax({
        url: filter.url,
        data: datas,
        type: 'GET',
        succes: function (res) {
            console.log(res);
        }
    })
})