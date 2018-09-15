<?php

return [
    'alipay' => [
        'app_id'         => '2016092100563189',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAumrd5BSJymLwVwWvw8T7wC9iMlnh+nzDPuPQ9Y6mEGnF8QuNvo4xxIkk2cvctWxp5jx6HskjksFN/a3m5MQYrrM6/ZvbXp6FsDQ1gggbN0bLgQRV+u3MVC//vbpmt+l+kynoKjGxI9Z5twRGeJ9S+b5rT6SpfdmiNBJBCygBdTrHBFda3W8HrECAuUPUr2qTE2oFgMERGirnmYFLwLeevizKYJIC89d0pEaYAHSLVxNzG6XTEooaC8sk3hkdvQcZXNcahGCa2I7aiRx1LWHtZ0W/wMMmmyuE9vi0Wkv3lswoV4PhH4xukbHAa+98ZR+ORIoOMvBBaFQ97mkE9zWiGQIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAumrd5BSJymLwVwWvw8T7wC9iMlnh+nzDPuPQ9Y6mEGnF8QuNvo4xxIkk2cvctWxp5jx6HskjksFN/a3m5MQYrrM6/ZvbXp6FsDQ1gggbN0bLgQRV+u3MVC//vbpmt+l+kynoKjGxI9Z5twRGeJ9S+b5rT6SpfdmiNBJBCygBdTrHBFda3W8HrECAuUPUr2qTE2oFgMERGirnmYFLwLeevizKYJIC89d0pEaYAHSLVxNzG6XTEooaC8sk3hkdvQcZXNcahGCa2I7aiRx1LWHtZ0W/wMMmmyuE9vi0Wkv3lswoV4PhH4xukbHAa+98ZR+ORIoOMvBBaFQ97mkE9zWiGQIDAQABAoIBAQCPmv+wUjoLlMg84X6TO04MsPPegetZgX8PFYTFhcxb3H/FvvbEktm340ZmGWu+vvOdj30r9hrXVN51y9+Q35d8DUomUEhfzZKDONT3hLMilAD1NJffpAzB1fAXAl9a0h7V03Sr/HfPecttt3dqOKI9Dfmw8tI2xs7zehRtObZVzU1mub8EGZFCd4maR3BbX070BvSdyp5q+auoz6BKIHAuyUIEQYWQB4wiiprNtFdpq9xLLKCpFgQxHEMnsCBUX7vcbYqMpX4Ng6+BPTxNJNw91oHJqq6wcqKeASobHOkGoC6pYbgSlj/NrNWR5lrNG2hHt7YlRHiYfcwjquhdqBVhAoGBAPIGFvttKHbQpP6XAmOcn2L7RpzHpzyNurjftivJjtzzf6453fJmyynmrfkQUOZacYDFaq80tP5VA5wEvZ98rcb+w/6kDzJdNlLS1v30V5KLODf5XkBmUCeXSbQqoVpfXlHJsd4gT7JyvQBBkZOpOJnJ4F+qh/PdQVJKBhpCKBlVAoGBAMUuu1bCH8c0n/XHBKFnQNENXlugbkGuudYjUZBsy8n60gVLfRlbIu1Bqgl43snmzULF/B9Dhvjki54gQn6VX9I60OFjwsPzzpdn/v7KnV4+R2Y1uv+GHQkDnu+nfg1P4lDkZ+o1tyE2Bkn71p5zZmpgrjc2yT7X7HNrEmdkqNW1AoGAK2voR6en8NkyIPMa3KBHAE0wuAQh/v02mOCaIHUDCqUtLSb4qPrETHo0kFDbEtj7MC07HMAKEO9TvHQlSS3nR6KBq3fnuhN7IZTuOZXS+Fm99lzpCgjRLKk58fcMB9jAZVAYd0+4vL1VJ2ycH6/mlcDgXomL5ra1d3wMaD2iUBkCgYBqJEO36ftNMijBFoaJk5kyby3RyMRRGwryGET5p3bznM6dBwuqMILWkDhFrQjQSitHvGeBNMpdBDmbvuXMWgAgnISAL0FSVdVpbxO2d77KUmAAxv+IONs8VPSjMNgLtmqu/KRrUMrpV7l+7c+Tr677qFtfYWBnMbgYURSxD2BK2QKBgGMSN1HJAE5g9GSXW+qQTG7sr+B6dVrZF3xklmnZqZ4p74FBnODcbATgG3fIGlLpDVLf4Zw9sQkkHKwZSV1vM+l8/yuBtovq6obYxUjVA7OwBHwlsAp1PYMs40wBK1+aNT+V+lcjUcVTpnO3smDjssYcpdmMAjcWkeGrCh+2fZeS',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
