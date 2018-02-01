/**
 * Created by smartankur4u on 11/11/17.
 */

var form=$("#shorten_form");

    $('#shorten_url').on('click', function () {
        console.log('Inside ajax...yuu huu');
        console.log(form.serialize());
        console.log(url);

    $.ajax({
        method:'POST',
        // url:url,
        url:"http://localhost/lara/sweet-url_lara/pubic/shorten",
        data: form.serialize(),
        cache: false,

        // data:{body: $('textarea#post_body').val(), postID:$('#postID').val(), _token:token}
    })

        .done(function (msg) {
            console.log(JSON.stringify(msg));

            $('#sweet_url').val(msg['sweet-url']);

        });

});






