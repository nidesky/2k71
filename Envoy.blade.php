@servers(['web' => 'root@114.215.157.189'])

@task('gp', ['on' => 'web'])
cd /home/wwwroot/www.if-k.com
git pull
@endtask