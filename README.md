# html
The four fundamental arithmetic operations
## 준비물
Linux OS(Red Hat 계열 권장), PHP, notepad++(옵션)

## 사용법
글쓴이 AWS 환경으로 Amazon Linux 2 AMI (HVM), SSD Volume Type AMI 이미지로 하였습니다.

1. Root 계정으로 전환 및 환경변수 설정

`# sudo su -`

2. Apache 설치

`# yum install httpd -y`

3. PHP 설치

`# yum install php -y`

4. index.php로 코드 작성

`# vi /var/www/html/index.php`

또는 git clone으로 받기

`# git clone https://github.com/michinheeje/html.git /var/www/html/`

5. Apache 서버 시작 및 Booting 시 자동 실행

`systemctl start httpd` 와 `systemctl enable httpd`

## 결과
Web을 이용하여 사칙연산을 이용할 수 있다.
