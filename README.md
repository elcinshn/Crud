# Laravel Crud İşlemleri
Laravel, Taylor Otwell tarafından hazırlanan ve MVC mimari desenini takiben web uygulamalarının geliştirilmesi için tasarlanmış, açık kaynak kodlu bir PHP web uygulamasıdır. "PHP framework for Web Artisans" slaganı ile yola çıkar. Laravel öğrenilmesi kolay olmakla birlikte, dokümantasyonuna https://laravel.com/docs/9.x adresinden ulaşılabilir.

# CRUD Nedir?
Programlamada oluşturma, okuma, güncelleme ve silme (Create, Read, Update, Delete), gibi veri depolamada kullanılan dört temel fonksiyondur. Aşağıda “Crud” işlemleri adında örnek  proje sayfası oluşturularak temel işlemler ele alıncaktır.

## 1.	Composer ile Laravel projesi oluşturulur
Aşağıdaki komutla Crud isimli laravel projesi oluşturulur.

```
composer create-project laravel/laravel Crud --prefer-dist
composer update komutu ile dependencyler yüklenir/güncellenir
```


## 2.	Proje Klasörüne Gidip Proje Çalıştırılır
```
cd Crud
php artisan serve

```
  İnternet tarayıcısından localhost:8000 adresine gidildiğinde sayfa açılacaktır.
  

## 3.Veritabanı ile Laravel projesi bağlanır.
Uygulamamızın ana dizinindeki .env dosyasında aşağıdaki alanlarda değişiklikler yapılır.

```
APP_NAME=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

```

## 4.Komut sistemine giderek oluşturmak istenen tablo adı belirlenerek aşağıda belirtilen şekilde yazılır.

```
php artisan make: migration ... –create=...

```

## 5.	Php-MyAdmin’de Veri tabanı oluşturulur

 Crud adında bir veritabanı oluşturulmuş ve ... adındaki tablo eklenmiştir.

### Create Komutu: komutunu kullanarak veritabanında ki tabloya ekleme yapabilmek adına;


Belirtilen komut satırları kullanılmı ştır.
-Update Komutu:
Veritabanın da var olan kayıtları güncellemek için DB sınıfı içerisinde bulunan update metodu kullanılır. Update komutu ilgili controller sayfasında yapılır.

-Delete Komutu:
Laravel’ de veri silme işlemleri delete komutu ile sağlanır.

Fakat şart koyulması halinde DB de belirlenen ilgili komut silinir.


Delete komutunda “destory” fonksiyonu da kullanılmaktadır.


Read Komutu:
