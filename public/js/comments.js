$(document).ready(function () {


    $(function () {
        $('#commentMe').click(function (e) {
            console.log('oOmmenting');

            var name = $('#name').val();
            var email = $('#email').val();
            var message = $('#message').val();
            var id = $('#id').val();
            console.log(name);
            console.log(email);
            console.log(message);
            console.log(id);

            if (name && email && message) {
                console.log('All set');

                data = {
                    'name' : name,
                    'email'  : email,
                    'message' :  message,
                    'id' :  id,
                }
                $.ajax({
                    url: 'api/postComment',
                    type: 'post',
                    contentType: 'application/json',
                    data: JSON.stringify(data),
                    success: function( data, textStatus, jQxhr ){
                        console.log(data);
                        $('.media-list').append('  <li id="'+data+'" class="media comment-item"> <a class="pull-left" href="#"><i class="comment-avatar fa fa-user"></i> </a> <div class="media-body"> <div class="comment-item-data"> <div class="comment-author"> <a href="#">'+name+'</a></div>now </div> <p>'+message+' </p> </div> </li>');
                         $('html, body').animate({
                         scrollTop: $('#' + data).offset().top - 50
                        }, 1000);
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        console.log( errorThrown );
                    }
                });
            }

        });
    });
})
