cd /home/root/hackathon/
git pull
cp /home/root/hackathon/www/* /var/www/html/
/etc/init.d/apache2 start

while :
do
	echo "Press [CTRL+C] to stop.."
	sleep 10
done