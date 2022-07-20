<?php
if (!function_exists('dd')) {
    function dd($data)
    {
        ini_set("highlight.comment", "#969896; font-style: italic");
        ini_set("highlight.default", "#FFFFFF");
        ini_set("highlight.html", "#D16568");
        ini_set("highlight.keyword", "#7FA3BC; font-weight: bold");
        ini_set("highlight.string", "#F2C47E");
        $output = highlight_string("<?php\n\n" . var_export($data, true), true);
        echo "<div style=\"background-color: #1C1E21; padding: 1rem\">{$output}</div>";
        die();
    }
}

/**
 *  Theme standard - Retro-compatibility > 5.2
 */
if ( !function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}


$args = array(
    'post_type' => 'post',
    'post_status' => 'published'

);

$query = new WP_Query($args);

if( $query->have_posts()){
    while($query->have_posts()){
        $post_ID = get_the_ID($query->the_post());
        $post_Status = get_post_status($post_ID);
    }
};


/**
 * Cron
 */

if(! wp_next_scheduled('bl_cron_api_pilotin')) {
    wp_schedule_event(strtotime('tomorrow 10:00'),'daily', 'bl_cron_api_pilotin');
}

add_action('bl_cron_api_pilotin','bl_cron_api_pilotin_exec');



/**
 * Api Pilot-in
 */

$request = wp_remote_get('https://www.pilot-in.com/wp-json/wp/v2/posts');

$body = wp_remote_retrieve_body($request);

$response = json_decode($body, true);
// dd($response);

function bl_cron_api_pilotin_exec($response) {
    $args = array(
        'post_type' => 'post',
    );
    
    $query = new WP_Query($args);


    foreach ($response as $article) {
        if( $query->have_posts()){
            while($query->have_posts()){
                // dd(get_the_title($query->the_post()));
                $post_ID = get_the_ID($query->the_post());
                $post = get_post($post_ID);
                // dd(get_post($post_ID));
                $post_Status = get_post_status($post_ID);

                if($post_Status === "publish"){
                    var_dump('coucou');
                    wp_update_post(
                        array(
                            apply_filters('the_content', $article["content"]["rendered"]),
                            apply_filters('the_tile', $article["title"]["rendered"]),
                            apply_filters('the_status', $article["status"])
                        )
                    );
                }
                else{
                    wp_insert_post(
                            array(
                            'post_title' => $article["title"]["rendered"],
                            'post_content' => $article["content"]["rendered"],
                            'post_type' => $article["type"],
                            'post_status' => $article["status"],
                        )
                    );
                }
                
            }
        };

        dd($article);
        
    }
}

bl_cron_api_pilotin_exec($response);




/**
 *  Includes
 */
require_once get_stylesheet_directory() . '/includes/class-project.php';
