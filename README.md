codeigniter
===========

#codeigniter 线上配置 版本1


在本地开发完 CodeIgniter 之后上传到服务器时，或你更换服务器时，您必须更改你的$config['base_url'],这样做法是极之不便的，不过这些不便也有解决的方法。解决的方法如下：
#修改 config.php 文件中的

$config['base_url'] 的值 修改为如下：
$config['base_url'] = “http://”.$_SERVER['HTTP_HOST'];

$config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']),”",$_SERVER['SCRIPT_NAME']);
#如果

你的空间有可能性使用 SSL 协议(https)就需要修改为如下：

$config['base_url'] = 

‘http’ . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == ‘on’) ? ’s’ : ”).’://’.$_SERVER['HTTP_HOST'].str_replace(’//’,'/’,dirname($_SERVER['PHP_SELF']).’/');

如果在使用 CodeIgniter 开发过程中遇到的问题可以到 http://www.phpall.cn 去发帖求助,文章首发于： http://www.seven2.com.cn/archives/731

