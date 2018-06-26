<?php

return [
    'validation_error' => '在请求的一个或多个表格中发生了错误.',
    'errors' => [
        'return' => '回到上一页',
        'home' => '回到主页',
        '403' => [
            'header' => 'Forbidden',
            'desc' => '你没有权限访问这个资源.',
        ],
        '404' => [
            'header' => 'File Not Found',
            'desc' => '我们无法找到这个资源.',
        ],
        'installing' => [
            'header' => 'Server Installing',
            'desc' => '请求的服务器仍然在执行安装过程.请在数分钟后重新检查,你应该会在过程完成之后收到一封电子邮件.',
        ],
        'suspended' => [
            'header' => 'Server Suspended',
            'desc' => '这个服务器已经被停机且不能访问.',
        ],
    ],
    'index' => [
        'header' => '你的服务器',
        'header_sub' => '你有权限访问的服务器.',
        'list' => '服务器列表',
    ],
    'api' => [
        'index' => [
            'list' => '你的密钥s',
            'header' => '账户 API',
            'header_sub' => '管理可以在面板上执行操作的账户访问密钥.',
            'create_new' => '创建新的API密钥',
            'keypair_created' => '一个API密钥已经被生成并且在下方显示.',
        ],
        'new' => [
            'header' => '新API密钥',
            'header_sub' => '创建一个账户访问密钥.',
            'form_title' => '详情',
            'descriptive_memo' => [
                'title' => '描述',
                'description' => '输入此密钥的简要说明以供参考.',
            ],
            'allowed_ips' => [
                'title' => '允许的IP',
                'description' => '输入允许使用此密钥访问API的IP列表.CIDR 符号是允许的.留空代表允许任何IP.',
            ],
        ],
    ],
    'account' => [
        'details_updated' => '你的账户信息已被成功更新.',
        'invalid_password' => '提供的密码和你的账户不匹配.',
        'header' => '你的账户',
        'header_sub' => '管理你的账户详情.',
        'update_pass' => '更新密码',
        'update_email' => '更新电子邮件地址',
        'current_password' => '当前密码',
        'new_password' => '新密码',
        'new_password_again' => '重新输入新密码',
        'new_email' => '新邮箱',
        'first_name' => '名',
        'last_name' => '姓',
        'update_identity' => '更新凭证',
        'username_help' => '您的用户名必须是唯一的,并且必须只包含以下字符: :requirements.',
    ],
    'security' => [
        'session_mgmt_disabled' => '你的服务商没有启用这个界面.',
        'header' => '账户安全',
        'header_sub' => '控制活动的会话和两步验证.',
        'sessions' => '活动的会话',
        '2fa_header' => '两步验证',
        '2fa_token_help' => '输入你的应用程序生成的两边验证密钥 (Google Authenticator, Authy, 以及其他).',
        'disable_2fa' => '禁用两步验证',
        '2fa_enabled' => '此帐户启用了两步验证,并且需要使用两步验证代码登录面板.如果你想禁用两步验证,只需在下面输入密钥并提交.',
        '2fa_disabled' => '此账户没有启用两步验证!你应该启用两步验证增加账户的安全性.',
        'enable_2fa' => '启用两步验证',
        '2fa_qr' => '在你的设备上控制两步验证',
        '2fa_checkpoint_help' => '使用手机上的两步验证应用程序拍摄QR(二维)码,或手动输入其下的代码.完成后,请输入两步验证应用生成的代码.',
        '2fa_disable_error' => '提供的两步验证密钥无效. 两步验证没有被停用.',
    ],
];
