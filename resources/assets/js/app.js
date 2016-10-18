/**
 * Created by Administrator on 2016/10/11 0011.
 */
(function($) {

    var Runner = {
        init: function() {
            this.initPjax();
            this.initMarkdownEditor();
            this.initFormErrorAlert();
            this.initAjax();
            this.initSubmitButtonLock();
        },
        initPjax: function() {
            $(document).pjax('a:not(a[target="_blank"])', 'body', {
                timeout: 1500
            });
            $(document).on('pjax:start', function() {
                NProgress.start();
            });

            $(document).on('pjax:complete', function() {
                NProgress.done();
            });
            $(document).on('pjax:end', function() {
                NProgress.done();
            });
            $(document).on('pjax.click', 'a.no-pjax', false);
            $(document).on('pjax.click', 'a[data-ajax]', false);
        },
        initMarkdownEditor: function() {
            if($('#article-editormd-container').length == 0) {
                return false;
            }
            var markdownEditor = editormd({
                id: 'article-editormd-container',
                path: '/assets/editormd/lib/',
                emoji: true,
                imageUpload: true,
                imageFormats: ['jpg', 'jpeg', 'png', 'gif'],
                imageUploadURL: Config.routes.upload.image,
                placeholder: 'write with markdown, have fun..'
            });
        },
        initAjax: function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $('[data-ajax]').click(function() {
                if('' == Config.user.id) {
                    window.location.href = '/login';
                    return false;
                }
                var that = $(this),
                    method = that.data('ajax'),
                    target = that.data('url');

                $.ajax({
                    type: method,
                    url: target,
                    dataType: 'json',
                    success: function(json) {
                        alert(json);
                    },
                    error: function(response) {
                        alert('失败');
                    }
                });
            });
        },
        initFormErrorAlert: function() {
            if(!Config.errors) {
                return true;
            }
            var formItem;
            for(i in Config.errors) {
                formItem = $('.form-group .form-control[name="' + Config.errors[i].name + '"]');
                if(formItem.length > 0) {
                    formItem.parent('.form-group').addClass('has-error');
                }
            }
        },
        initSubmitButtonLock: function() {
            $('input[type=submit]').click(function() {
                $(this).val('submitting..').disabled();
            });
        }
    };

    window.Runner = Runner;

})(jQuery);

$(document).ready(function() {
    Runner.init();
});