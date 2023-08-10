<?php
/**
 * Plugin Name:
 * Plugin Author:
 * Plugin URI: 
 * Description: 
 * Version:
 */
// プラグイン用の名前空間
const PLUGIN_NAMESPACE = 'Plugin';

// プラグイン用のオートローダーを読み込む
require_once __DIR__ . '/src/autoload.php';

// Composerのオートローダーは基本的には開発環境のみで使用する想定
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// プラグイン有効化時に実行
register_activation_hook(__FILE__, function () {

});
// プラグイン無効化時に実行
register_deactivation_hook(__FILE__, function () {

});