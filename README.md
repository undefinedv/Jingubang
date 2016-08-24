# Jingubang
金箍棒 - 基于SQLMAPAPI的分布式注入系统


数据库配置文件debug模式已开启，开发结束后切记关闭
$config['encryption_key']在config/config.php里设置
api地址在sql_model里设置
请在config/database.php里完成数据库配置
多线程预备:apt-get install python-gevent
./sqlmapapi.py -s --adapter="gevent"
更新:请在config/config.php里设定为Jingubang所在目录
比如本地为:http://127.0.0.1/Jingubang/
