<?php defined('ABSPATH') || die("Nice Try");
    // $info = wp_remote_retrieve_body(wp_remote_get('https://api.github.com/users/MuhammadAzfarAslam'));
    // $user = (json_decode($info));

    $posts = wp_remote_retrieve_body(wp_remote_get('https://jsonplaceholder.typicode.com/posts'));
    $posts = (json_decode($posts));
?>

<table class="widefat fixed striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>userId</th>
            <th>Title</th>
            <th>Body</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $p): ?>
        <tr>
            <th><?php echo $p->id; ?></th>
            <th><?php echo $p->userId; ?></th>
            <th><?php echo $p->title; ?></th>
            <th><?php echo $p->body; ?></th>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
