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
            'vi' => 'Đăng nhập thất bại. Vui lòng kiểm tra lại tên đăng nhập và mật khẩu',
            'en' => 'Login failed please check your username and password',
            'jp' => 'ログイン失敗ユーザー名とパスワードを確認してください'
        ),
        EMPTY_USERNAME => array(
            'vi' => 'Tên đăng nhập không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Username cannot be empty. Please check again',
            'jp' => 'ユーザー名は空にできません。 再度確認してください'
        ),
        EMPTY_PASSWORD => array(
            'vi' => 'Mật khẩu không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Password cannot be empty. Please check again',
            'jp' => 'パスワードを空にすることはできません。 再度確認してください'
        )
    );

    public static $member = array(
        EMPTY_FULLNAME => array(
            'vi' => 'Họ và tên không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Fullname cannot be empty. Please check again',
            'jp' => 'フルネームは空にできません。 再度確認してください'
        ),
        EMPTY_IS_MALE => array(
            'vi' => 'Giới tính không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Gender cannot be empty. Please check again',
            'jp' => '性別は空にできません。 再度確認してください'
        ),
        EMPTY_BIRTHDAY => array(
            'vi' => 'Ngày sinh không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Birthday cannot be empty. Please check again',
            'jp' => '誕生日は空にできません。 再度確認してください'
        ),
        EMPTY_EMAIL => array(
            'vi' => 'Email không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Email cannot be empty. Please check again',
            'jp' => 'メールアドレスは空にできません。 再度確認してください'
        ),
        EMPTY_PHONE => array(
            'vi' => 'Số điện thoại không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Phone cannot be empty. Please check again',
            'jp' => '電話を空にすることはできません。 再度確認してください'
        ),
        EMPTY_ACCESS_LEVEL => array(
            'vi' => 'Quyền truy cập không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Access level cannot be empty. Please check again',
            'jp' => 'アクセスレベルを空にすることはできません。 再度確認してください'
        ),
        EMPTY_EXECUTE_BY => array(
            'vi' => 'Người thực hiện không thể rỗng. Vui lòng kiểm tra lại',
            'en' => 'Execute by cannot be empty. Please check again',
            'jp' => '実行者は空にできません。 再度確認してください'
        ),
        IDENTICAL_USERNAME => array(
            'vi' => 'Tên đăng nhập đã được sử dụng. Vui lòng kiểm tra lại',
            'en' => 'Username is already in use. Please check again',
            'jp' => 'ユーザー名が既に使われています。 再度確認してください'
        ),
        FORMAT_INVALID_IS_MALE => array(
            'vi' => 'Giới tính không đúng định dạng. Vui lòng kiểm tra lại',
            'en' => 'Gender format is incorrect. Please check again',
            'jp' => '性別の形式が正しくありません。 再度確認してください'
        ),
        FORMAT_INVALID_BIRTHDAY => array(
            'vi' => 'Ngày sinh không đúng định dạng. Vui lòng kiểm tra lại',
            'en' => 'Birthday format is incorrect. Please check again',
            'jp' => '誕生日の形式が正しくありません。 再度確認してください'
        ),
        FORMAT_INVALID_EMAIL => array(
            'vi' => 'Email không đúng định dạng. Vui lòng kiểm tra lại',
            'en' => 'Email format is incorrect. Please check again',
            'jp' => 'メールの形式が正しくありません。 再度確認してください'
        ),
        FORMAT_INVALID_PHONE => array(
            'vi' => 'Số điện thoại không đúng định dạng. Vui lòng kiểm tra lại',
            'en' => 'Phone format is incorrect. Please check again',
            'jp' => '電話の形式が正しくありません。 再度確認してください'
        ),
        FORMAT_INVALID_IMAGE => array(
            'vi' => 'Hình ảnh không đúng định dạng. Chấp nhận jpeg, png, jpg, gif. Vui lòng kiểm tra lại',
            'en' => 'The image is not properly formatted. Accept jpeg, png, jpg, gif. Please check again',
            'jp' => '画像が正しくフォーマットされていません。 jpeg、png、jpg、gifを受け入れます。 再度確認してください'
        ),
        MAX_SIZE_PICTURE => array(
            'vi' => 'Kích thước hình ảnh không được lớn hơn 3MB. Vui lòng kiểm tra lại',
            'en' => 'Image size cannot be greater than 3MB. Please check again',
            'jp' => '画像サイズは3MBを超えることはできません。 再度確認してください'
        ),
        INTEGER_ACCESS_LEVEL => array(
            'vi' => 'Quyền truy cập phải là kiểu số. Vui lòng kiểm tra lại',
            'en' => 'Access level must be numeric. Please check again',
            'jp' => 'アクセスレベルは数値でなければなりません。 再度確認してください'
        ),
        INTEGER_EXECUTE_BY => array(
            'vi' => 'ID người thực hiện phải là kiểu số. Vui lòng kiểm tra lại',
            'en' => 'Execute by must be numeric. Please check again',
            'jp' => '実行は数値でなければなりません。 再度確認してください'
        )
    );

    public static $config = array(
        GET_CONFIG_SUCCESS => array(
            'vi' => 'Lấy danh sách cấu hình thành công',
            'en' => 'Get the configuration list successfully',
            'jp' => '構成リストを正常に取得する'
        ),
        GET_CONFIG_FAIL => array(
            'vi' => 'Lấy danh sách cấu hình không thành công',
            'en' => 'Get the configuration list failded',
            'jp' => '構成リストの取得に失敗しました'
        )
    );

    public static function messages($key_message, $lang = 'en')
    {
        $data = array_merge(static::$login, static::$member, static::$config);
        return $data[$key_message][$lang];
    }
}
