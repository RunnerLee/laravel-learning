/**
 * Created by Administrator on 2016/10/11 0011.
 */
(function($) {

    var Runner = {
        init: function() {
            this.initPjax();
            this.initMarkdownEditor();
            this.initFormErrorAlert();
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
        },
        initMarkdownEditor: function() {
            var markdownEditor = editormd({
                id: 'article-editormd-container',
                path: '/assets/editormd/lib/',
                emoji: true,
                imageUpload: true,
                imageFormats: ['jpg', 'jpeg', 'png', 'gif'],
                imageUploadURL: Config.routes.upload.image
            });
        },
        initAjax: function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
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
        }
    };

    window.Runner = Runner;

})(jQuery);

$(document).ready(function() {
    Runner.init();
});