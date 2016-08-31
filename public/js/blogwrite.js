var ezblog = ezblog || {};

(function($){

    ezblog.Write = function() {

        /* Functions */
        var loader = function() {
            alert('heyoo');
        };

        var initialize = function() {
            $('#blog_preview').click(previewPost);
            // loader();
        };

        var previewPost = function(){
            var postContent = $('#entry_content').val();
            console.log(postContent);
            $.ajax('/blog/preview_post',
                {
                    method: 'post',
                    dataType: 'text',
                    data: {data: postContent},
                    success: function(data){
                        console.log(data);
                        $('#entry_preview').html(data);
                    }
                }

            )
        };

        return {
            init: initialize
        }
    };

})($);


var writeblog = new ezblog.Write;
writeblog.init();