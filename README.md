# wordpress-inning
For local database run
```
sudo docker-compose up
```
If you want to use preconfigured wp-config.php database run
```
sudo docker build -t wordpress-inning .
sudo docker run -p 8080:80 wordpress-inning
```
