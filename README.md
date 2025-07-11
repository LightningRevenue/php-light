# lightning-revenue
# lightning-php

# Ghid de Instalare și Configurare pe AWS EC2

## 1. Crearea Instanței EC2

1. Logați-vă în AWS Console
2. Mergeți la EC2 Dashboard
3. Click pe "Launch Instance"
4. Selectați:
   - Ubuntu Server 22.04 LTS
   - t2.micro (free tier)
   - Generați o pereche de chei nouă (sau folosiți una existentă)
   - La Security Group, deschideți:
     - Port 22 (SSH)
     - Port 80 (HTTP)
     - Port 443 (HTTPS)

## 2. Conectarea la Instanță

```bash
# Folosiți cheia .pem descărcată
chmod 400 your-key.pem
ssh -i your-key.pem ubuntu@your-ec2-public-dns
```

## 3. Instalarea Pachetelor Necesare

```bash
# Actualizare sistem
sudo apt update
sudo apt upgrade -y

# Instalare Apache, PHP și module necesare
sudo apt install -y apache2
sudo apt install -y php php-cli php-fpm php-json php-common php-mysql php-zip php-gd php-mbstring php-curl php-xml php-pear php-bcmath
sudo apt install -y git

# Verificare versiuni
php -v
apache2 -v
```

## 4. Configurare Apache

```bash
# Activare module Apache necesare
sudo a2enmod rewrite
sudo a2enmod deflate
sudo a2enmod expires

# Configurare permisiuni pentru .htaccess
sudo nano /etc/apache2/apache2.conf
```

În apache2.conf, găsiți secțiunea `<Directory /var/www/html>` și modificați:
```apache
<Directory /var/www/html>
    AllowOverride All
    Require all granted
</Directory>
```

```bash
# Restart Apache
sudo systemctl restart apache2

# Verificare status
sudo systemctl status apache2
```

## 5. Configurare Git și Clonare Proiect

```bash
# Configurare Git
git config --global user.name "Numele Tau"
git config --global user.email "email@tau.com"

# Crearea directorului pentru proiect
sudo rm -rf /var/www/html/*
cd /var/www/html

# Clonare proiect
sudo git clone https://github.com/user/php-light.git .

# Setare permisiuni
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html
```

## 6. Configurare Virtual Host (Opțional)

```bash
# Creare fișier configurare
sudo nano /etc/apache2/sites-available/php-light.conf
```

Adăugați:
```apache
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    ServerName your-domain.com
    ServerAlias www.your-domain.com
    DocumentRoot /var/www/html
    
    <Directory /var/www/html>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

```bash
# Activare site
sudo a2ensite php-light.conf
sudo a2dissite 000-default.conf
sudo systemctl restart apache2
```

## 7. Configurare SSL cu Certbot (Recomandat)

```bash
# Instalare Certbot
sudo apt install -y certbot python3-certbot-apache

# Obținere certificat SSL
sudo certbot --apache -d your-domain.com -d www.your-domain.com

# Verificare reînnoire automată
sudo certbot renew --dry-run
```

## 8. Comenzi Utile pentru Mentenanță

```bash
# Verificare erori Apache
sudo tail -f /var/log/apache2/error.log

# Verificare acces Apache
sudo tail -f /var/log/apache2/access.log

# Restart servicii
sudo systemctl restart apache2
sudo systemctl restart php8.1-fpm

# Curățare cache
sudo rm -rf /var/www/html/tmp/*
```

## 9. Actualizare Cod

```bash
# Actualizare cod din repository
cd /var/www/html
sudo git pull origin main

# Resetare permisiuni după actualizare
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html
```

## 10. Backup

```bash
# Backup bază de date (dacă există)
mysqldump -u user -p database_name > backup.sql

# Backup fișiere
sudo tar -czf /backup/site-backup-$(date +%F).tar.gz /var/www/html/
```

## Note Importante

1. Înlocuiți `your-domain.com` cu domeniul dvs. real
2. Păstrați cheia .pem într-un loc sigur
3. Configurați backup-uri automate
4. Monitorizați log-urile pentru erori
5. Mențineți sistemul actualizat regulat

## Troubleshooting

1. Dacă primiți erori 403:
```bash
sudo chmod -R 755 /var/www/html
sudo chown -R www-data:www-data /var/www/html
```

2. Dacă .htaccess nu funcționează:
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

3. Dacă PHP nu funcționează:
```bash
sudo apt install php-fpm
sudo a2enmod proxy_fcgi setenvif
sudo a2enconf php8.1-fpm
sudo systemctl restart apache2
```
# php-light
