/**
 * Created by Administrator on 2016/10/11 0011.
 */
(function($) {

    var Runner = {
        init: function() {
            this.initPjax();
        },
        initPjax: function() {
            $(document).pjax('a', 'body', {
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
        }
    };

    window.Runner = Runner;

})(jQuery);

$(document).ready(function() {
    Runner.init();
});