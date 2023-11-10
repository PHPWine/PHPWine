<?php 

 ini_set("display_errors", 1);
 ini_set("display_startup_errors", 1);
 error_reporting(E_ALL);

/**
 * @function
 *
 * --------------------------------------------------------------------------------------------
 *
 * Wine method is a primary public method that will use to generate and optimized html
 * you can generate the all element fully optimized tag, it have a parameters such as
 *
 * @string : $tag Which html element are you trying or want to use ??
 * like ex. div, ul, li, p, spane and etc...
 *
 * @string : value this means you can just add a string value to the $content
 * like ex. <div>Your content is string...</div>
 *
 * To do that you just invoke the wine like print wine(div,'Your content is string...');
 *
 * @callable : Means this is a callback function instead of putting dirrectly the value
 * you just assign a string value to make a function return;
 *
 * like ex: prinmt wine(div, 'my_call_back_func');
 *
 * Now you can create your call function
 * like: function my_call_back_func() {
 *
 *   return "Your content is string...";
 *
 * }
 *
 * NOTE: that callable function accept string value only!
 *
 * @array :  This use when you create a child using resevred keyword
 * TO know more about reserve keyword just please checkout our documentation
 * search to searchbox the "Reserve Keywords"
 * Link: https://phpwine.github.io/documents/
 *
 * @bool enable HTML is current false which means the HTML is interfreted
 * by the browser and if you want to enale html just add "true" then wine
 * return you a string version of HTML that you can use for your client approval
 *
 * Defined : public method use optimized html with wine
 * @since: v1.0
 * DT: 10.26.2023 *
 */
function wine(
    string|null $tag,
    // @param first content string|callable|array
    string|callable|array $content = [],
    // @param second attr array
    string|array $attr = [],
    // @param third < Optional >
    $enable_html = false
) : mixed {
    if (is_null($tag) || empty($tag)) {
        $tag = local_provider()["dp"];
    }
    // invoke into function version
    $located = "init";
    $optimized = local_provider([
        $located => [
            $tag, // @param
            $content, // @param
            $attr, // @param
            $enable_html,
            // @param
        ],
    ])[$located];
    return $optimized;
}