$(document).ready(function () {
    var pageNumber = 1;
    $(function () {
        $(window).scroll(function () {
            console.log('Scroll');
            var aTop = $('#page-2').height();
            console.log(aTop);
            console.log($(this).scrollTop());
            if ($(this).scrollTop() + 10 >= aTop) {

                $('#spinner').show();
                var articles;
                $.ajax({
                    type: 'GET',
                    url: '/?page=' + pageNumber,
                    success: function (data) {

                        $('.gridWrapper').append(data);
                        localStorage.setItem('windowscrolltop',$(window).scrollTop());
                        $(function () {
                            $(".item").hover(
                                function () {
                                    $(this).parent().find('.details').addClass("active");
                                }, function () {
                                    $(this).parent().find('.details').removeClass("active");
                                }
                            );
                        })
                        pageNumber += 1;
                        if (data.length === 0) {
                            $('.gridWrapper').append('No data');
                        } else {
                            // Great we have more articles
                            console.log('Got new items');
                        }
                    }, error: function (data) {
                        console.log(data);
                    },
                });
            }
        });
    });
});