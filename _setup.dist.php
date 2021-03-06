<?php

/*******************************系統環境設定********************************/

//資料庫位址
define('_DB_HOST', 'localhost');

//資料庫使用者
define('_DB_USER', 'root');

//資料庫密碼
define('_DB_PASS', '');

//資料庫名稱
define('_DB_NAME', 'photographic');

//用來驗證使用者的信箱（不填代表由使用者自行驗證）
define('_VERIFY_EMAIL', '');

//管理員信箱
define('_ADM_EMAIL', '');

//是否使用SMTP寄信？
define('_USE_SMTP', false);

//SMTP 主機
define('_SMTP_SERVER', 'smtp.gmail.com');

//SMTP 帳號，如： xxx@gmail.com
define('_SMTP_USER', '');

//SMTP 密碼，如： xxx@gmail.com的密碼
define('_SMTP_PASS', '');

/*******************************網站內容設定********************************/

//首頁預設顯示幾個分類，設定數值愈高畫面會
define('_SLIDES_PER_VIEW', '3');

//網站名稱
define('_SITE_TITLE', '社大攝影班');
