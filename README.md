# _OSSLab Final Project_
# Movie Note

## What does this project do? 
This project create a web page where you can record a video moment. 
You can write down movie name, director, cast, genre, and one-line review on this page.
## Why is this project useful? 
You can check the movie list including movie core information and your reviews at once. It can save memories and help you when you recommend a movie to another person or watch a movie again.
## How to get started?
1. Install Apache2, PHP, Phpmyadmin(to administrate Database), and Mysql and start Apache2
```sh
sudo apt-get install apache2 -y
sudo apt-get install mariadb-server php-mysql -y
sudo apt-get install phpmyadmin -y
sudo apt-get install php -y
```
```sh
sudo service apache2 restart
```
2. Make DataBase to save your movie note data
3. Clone this repository, and revise DB information to your DataBase of php files
```sh
git clone https://github.com/yoon110/OSSLab_Final.git
```
4. Move(copy) this derectory files to /var/www/html
```sh
sudo cp ./code/* /var/www/html
```
5. In web browser, type your server ip
```sh
http:// {your server ip}
```
6. You can see the list page and use it!

<img src="https://user-images.githubusercontent.com/79903077/173019292-173495c7-7049-4f78-af28-e1b57be483b0.png">

<img src="https://user-images.githubusercontent.com/79903077/173019536-3ea89ec6-3b00-468c-97fd-5b1a3ce82592.png">

<img src="https://user-images.githubusercontent.com/79903077/173019616-0c7162f2-72d8-4dda-8643-c2406fb6dcf0.png">

## Presentation
Link: https://youtu.be/kkIAk3Z23kU

## Where can people get more help, if needed? 
You can contact me by email: 22000706@handong.ac.kr

## My contribution
Produced by myself using reference materials
 
### Reference
- http://jun.hansung.ac.kr/SWP/PHP/PHP%20Connect%20to%20the%20MySQL%20Server.html
- https://dawitblog.tistory.com/11
- https://www.w3schools.com/html/
- https://www.leafcats.com/11
