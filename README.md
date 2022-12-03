# Laravel Crud İşlemleri
Laravel, Taylor Otwell tarafından hazırlanan ve MVC mimari desenini takiben web uygulamalarının geliştirilmesi için tasarlanmış, açık kaynak kodlu bir PHP web uygulamasıdır. "PHP framework for Web Artisans" slaganı ile yola çıkar. Laravel öğrenilmesi kolay olmakla birlikte, dokümantasyonuna https://laravel.com/docs/9.x adresinden ulaşılabilir.

# CRUD Nedir?
Programlamada oluşturma, okuma, güncelleme ve silme (Create, Read, Update, Delete), gibi veri depolamada kullanılan dört temel fonksiyondur. Aşağıda örnek bir blog sayfası oluşturarak temel fonksiyonları ele alacağız.

### 1.	Composer ile Laravel projesi oluşturulur
Aşağıdaki komutla blog isimli laravel projesi oluşturulur.




2.	Proje Klasörüne Gidip Proje Çalıştırılır




  İnternet tarayıcısından localhost:8000 adresine gidildiğinde sayfa açılacaktır.

4.Veritabanı ile Laravel projesi bağlanır.
Uygulamamızın ana dizinindeki .env dosyasında aşağıdaki alanlarda değişiklikler yapılır.

5.Komut sistemine giderek oluşturmak istenen tablo adı belirlenerek aşağıda belirtilen şekilde yazılır.




6.	Php-MyAdmin’de Veri tabanı oluşturulur

 Blog adında bir veritabanı oluşturulmuş ve news adındaki tablo eklenmiştir.

Create Komutu: komutunu kullanarak veritabanında ki tabloya ekleme yapabilmek adına;


Belirtilen komut satırları kullanılmı ştır.
-Update Komutu:
Veritabanın da var olan kayıtları güncellemek için DB sınıfı içerisinde bulunan update metodu kullanılır. Update komutu ilgili controller sayfasında yapılır.

-Delete Komutu:
Laravel’ de veri silme işlemleri delete komutu ile sağlanır.

Fakat şart koyulması halinde DB de belirlenen ilgili komut silinir.


Delete komutunda “destory” fonksiyonu da kullanılmaktadır.


Read Komutu:
