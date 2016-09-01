var ezblog = ezblog || {};

(function($){

    ezblog.Write = function() {

        /* Functions */
        var loader = function() {
            alert('heyoo');
        };

        var initialize = function() {
            $('#blog_preview').click(previewPost);
            $('#blog_save').click(savePost);
            // loader();
        };

        var previewPost = function(){
            var postContent = $('#entry_content').val();
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

        var savePost = function(){
            var title = $('#entry_title').val();
            var content = $('#entry_content').val();
            var categories = $('#entry_categories').val();
            $.ajax('/blog/save_post',
                {
                    method: 'post',
                    dataType: 'text',
                    data: {title: title, content: content, categories: categories},
                    success: function(data){
                        console.log(data);
                        $('#entry_preview').html(data);
                    },
                    error: function(data){
                        $('#entry_preview').html(data)
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