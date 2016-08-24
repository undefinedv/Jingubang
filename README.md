# Jingubang
金箍棒 - 基于SQLMAPAPI的分布式注入系统


数据库配置文件debug模式已开启，开发结束后切记关闭
$config['encryption_key']在config/config.php里设置
api地址在sql_model里设置
请在config/database.php里完成数据库配置
多线程预备:apt-get install python-gevent
./sqlmapapi.py -s --adapter="gevent"

