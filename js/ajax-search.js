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

jQuery(document).ready(function($) {
    $('.filter__button').click(function(e) {
        e.preventDefault();
        let linkCat = $(this).attr('href');
        let titleCat =  $(this).text();
        $(this).toggleClass("active");
        document.title = titleCat;
        

        history.pushState({page_title: titleCat}, titleCat, linkCat);

    })

    function ajaxCat(linkCat) {
        $mainBox.animate({opacity: 0.5}, 300);

        jQuery.post(
            myPlugin.ajaxurl,
            {
                action: 'get_cat',
                link: linkCat
            },
            function (response) {
                $mainBox
                    .html(response)
                    .animate({opacity: 1}, 300);
            });
    }
})