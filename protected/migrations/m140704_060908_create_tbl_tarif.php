<?php

class m140704_060908_create_tbl_tarif extends CDbMigration
{

    public function up()
    {
        $this->createTable('tbl_tarif', array(
            'id'        => 'INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY COMMENT "Идентификатор"',
            'type'      => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'price'     => 'INT(10) UNSIGNED NULL DEFAULT 0',
            'period'    => 'VARCHAR(255) NOT NULL DEFAULT ""',
            'map'       => 'BOOLEAN COMMENT "Карта сайта"',
            'comments'  => 'BOOLEAN COMMENT "Коментарии"',
            'basket'    => 'BOOLEAN COMMENT "Корзина"',
            'qa'        => 'BOOLEAN COMMENT "ЧаВо"',
            'cms'       => 'BOOLEAN COMMENT "Система управления сайтом(CMS)"',
            'unlimpage' => 'BOOLEAN COMMENT "Неограниченое количество страниц"',
            'freefill'  => 'BOOLEAN COMMENT "Бесплатное базовое наполнение"',
            'visitstat' => 'BOOLEAN COMMENT "Статистика посещений"',
            'blog'      => 'BOOLEAN COMMENT "Блог, прайс-лист"',
            'votes'     => 'BOOLEAN COMMENT "Голосование"',
            'rotator'   => 'BOOLEAN COMMENT "Ротатор слайдов"',
            'gallery'   => 'BOOLEAN COMMENT "Галерея"',
            'contact'   => 'BOOLEAN COMMENT "Обратная связь"',
            'catalog'   => 'BOOLEAN COMMENT "Каталог товаров"',
            'forum'     => 'BOOLEAN COMMENT "Форум"',
            'sitemap'   => 'BOOLEAN COMMENT "Создание Sitemap"',
            'google'    => 'BOOLEAN COMMENT "Добавление в Google,Yandex"',
            'huu'       => 'BOOLEAN COMMENT "ЧПУ"',
        ));
    }

    public function down()
    {
        $this->dropTable('tbl_tarif');
    }
}
