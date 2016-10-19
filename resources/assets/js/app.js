/**
 * Created by Administrator on 2016/10/11 0011.
 */
(function($) {

    var Runner = {

        // init page
        init: function() {
            this.initPjax();
            this.bootstrap();
        },

        // start pjax
        initPjax: function() {
            var self = this;
            $(document).pjax('a:not(a[target="_blank"]):not([data-ajax]):not(.no-pjax)', 'body', {
                timeout: 1500
            });

            // start -> complete -> end
            $(document).on('pjax:start', function() {
                NProgress.start();
                console.log('pjax start');
            });
            $(document).on('pjax:complete', function() {
                NProgress.done();
                console.log('pjax complete');
            });
            $(document).on('pjax:end', function() {
                NProgress.done();
                console.log('pjax end');
                self.bootstrap();
            });
        },

        // bootstrap application
        bootstrap: function() {
            this.initMarkdownEditor();
            this.initFormErrorAlert();
            this.initAjax();
            this.initSubmitButtonLock();
        },

        // init markdown editor
        initMarkdownEditor: function() {
            if($('#article-original-content').length == 0) {
                return false;
            }
            var markdownEditor = new SimpleMDE({
                element: document.getElementById('article-original-content'),
                autoDownloadFontAwesome: false,
                indentWithTabs: false,
                placeholder: 'write with markdown..',
                showIcons: ['code', 'table'],
                hideIcons: ['guide'],
                tabSize: 4,
                spellChecker: false
            });

            inlineAttachment.editors.codemirror4.attach(markdownEditor.codemirror, {
                uploadUrl: Config.routes.upload.image,
                extraParams: {
                    '_token': $('meta[name=_token]').attr('content')
                },
                onUploadedFile: function(response) {
                    alert(123);
                }
            });
            
            markdownEditor.codemirror.on('paste', function(codemirror, event) {
                console.log(codemirror, event);
            });
        },

        // init ajax setting
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
                    target = that.data('url'),
                    redirectUrl = that.data('redirect');

                $.ajax({
                    type: method,
                    url: target,
                    dataType: 'json',
                    success: function(json) {
                        if('DELETE' == method) {
                            window.location.href = redirectUrl;
                        }else {
                            window.location.reload();
                        }
                    },
                    error: function(response) {
                        alert('fail');
                    }
                });
            });
        },

        // init form error alert
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