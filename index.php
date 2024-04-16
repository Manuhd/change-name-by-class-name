add_filter('the_title', 'change_title_by_class_name', 10, 2);

function change_title_by_class_name($title, $id) {
    // Replace "your-class-name" with the actual class name you want to target
    if (has_post_class('your-class-name', $id)) {
        // Replace "New Title" with the desired new title
        $title = 'New Title';
    }
    return $title;
}
