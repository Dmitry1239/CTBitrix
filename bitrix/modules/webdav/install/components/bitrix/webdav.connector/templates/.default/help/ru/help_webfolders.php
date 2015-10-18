<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<h3>Подключение через компонент Веб-папок (web-folders)</h3>
<p>Прежде, чем подключать библиотеку документов, убедитесь, что <a href="<?=$arResult["URL"]["HELP"]?>#oswindowsreg">внесены изменения в реестр</a> и <a href="<?=$arResult["URL"]["HELP"]?>#oswindowswebclient">запущена служба Веб-клиент (WebClient).</a></p>
<p>Для подключения к библиотеке документов данным способом необходим компонент веб-папок. Желательно установить последнюю версию программного обеспечения для веб-папок ( <a href="http://www.microsoft.com/downloads/details.aspx?displaylang=ru&FamilyID=17c36612-632e-4c04-9382-987622ed1d64" target="_blank">перейти на сайт Microsoft</a> ) на клиентский компьютер. </p>
<ul>
<li>Запустите <b>Проводник</b></li>
<li>Выберите в меню пункт <b>Сервис &gt; Подключить сетевой диск</b></li>
<li>С помощью ссылки <b>Подписаться на хранилище в Интернете или подключиться к сетевому серверу</b> запустите <b>Мастер добавления в сетевое окружение</b>:</p> 
<p><a href="<? echo 'javascript:ShowImg(\''.$templateFolder.'/images/network_add_1.png\',447,322,\'Подключение сетевого диска\');'?>">
<img width="250" height="180" border="0" src="<?=$templateFolder.'/images/network_add_1_sm.png'?>" style="cursor: pointer;" alt="Нажмите на рисунок, чтобы увеличить" /></a></li>
<li>Нажмите кнопку <b>Далее</b>, откроется второе окно <b>Мастера</b></li>
<li>В этом окне сделайте активным позицию <b>Выберите другое сетевое размещение</b> и нажмите кнопку <b>Далее</b>. Откроется следующий шаг <b>Мастера</b>:
<p><a href="<? echo 'javascript:ShowImg(\''.$templateFolder.'/images/network_add_4.png\',563,459,\'Добавление в сетевое окружение: Шаг 3\');'?>">
<img width="250" height="204" border="0" src="<?=$templateFolder.'/images/network_add_4_sm.png'?>" style="cursor: pointer;" alt="Нажмите на рисунок, чтобы увеличить" /></a></li>
<li>В поле <b>Сетевой адрес или адрес в Интернете</b> введите URL подключаемой папки вида: <i>http://<ваш_сервер>/docs/shared/</i>.</li>
<li>Нажмите кнопку <b>Далее</b>. Если появится окно для авторизации, то введите данные для авторизации на сервере.</li>
</ul>

<p>Для последующего открытия папки выполните команду: <b>Пуск > Сетевое окружение > Имя папки</b>.</p>