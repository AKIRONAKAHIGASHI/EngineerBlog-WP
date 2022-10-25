<?php
//テーマのセットアップ
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');
register_post_type(
    'event',
    // 'supports'に'thumbnail'を追記
    array('supports' => array('title','editor','thumbnail'))
);
//サムネイルの大きさ指定
add_image_size('thumb75',75,75,true);
