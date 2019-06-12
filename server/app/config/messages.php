<?php
namespace App\Config;

require_once app_path() . '/config/constants.php';
class Messages
{
    // Login
    public static $login = array(
        LOGIN_SUCCESS => array(
            'vi' => 'Đăng nhập thành công',
            'en' => 'Login successfully',
            'jp' => 'ログイン成功'
        ),
        LOGIN_FAIL => array(
            'vi' => 'Đăng nhập thất bại. Vui lòng kiểm tra lại username và password',
            'en' => 'Login failed please check your username and password',
            'jp' => 'ログイン失敗ユーザー名とパスワードを確認してください'
        ),
        EMPTY_USERNAME => array(
            'vi' => 'Username không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Username cannot be empty. Please check again',
            'jp' => 'ユーザー名は空にできません。 再度確認してください'
        ),
        EMPTY_PASSWORD => array(
            'vi' => 'Password không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Password cannot be empty. Please check again',
            'jp' => 'パスワードを空にすることはできません。 再度確認してください'
        )
    );

    public static function messages($key_message, $lang = 'en')
    {
        $data = array_merge(static::$login);
        return $data[$key_message][$lang];
    }
}
