$(document).ready(function () {
    $("form").sisyphus({locationBased: true});
    if ($('.slugify').length) {
        $('.slugify').slug({
            slug: 'slug',       // class of input / span that contains the generated slug
            hide: false        // hide the text input, true by default
        });
    }
});
