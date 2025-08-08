# استخدم صورة PHP مع Apache جاهزة (تستمع على المنفذ 80)
FROM php:8.2-apache

# نسخ ملفات الموقع إلى مجلد الويب في الاباتشي
COPY . /var/www/html/

# تأكد أن ملف index.php يملك صلاحيات قراءة
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# (اختياري) فعل mod_rewrite لو تحتاجه
RUN a2enmod rewrite

# اعرض المنفذ 80
EXPOSE 80

# أمر التشغيل الافتراضي لـ image php:apache already starts apache
CMD ["apache2-foreground"]
