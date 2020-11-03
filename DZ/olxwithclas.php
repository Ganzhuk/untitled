<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    echo '<link href="style1.css" rel="stylesheet"/>';
    ?>
</head>
<body>
<form  method="get" action="olxwithclas.php">
    <div class="main">
        <?php
        include_once("DivInfo.php");
        include ("Main.php");
        $asoc=[
            0=>new Info("Silicone case для iPhone 11promax/11pro/11/XS/Xsmax/7/8plus/6/6splus/5", "Харьков, Киевский", date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/qvtffe34vstj-UA/image;s=1000x700", "149 грн.","true","https://www.olx.ua/obyavlenie/silicone-case-dlya-iphone-11promax-11pro-11-xs-xsmax-7-8plus-6-6splus-5-IDHjdsB.html?sd=1#d677f163fe;promoted"),
            1=>new Info("Apple airpods 2","Ужгород",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/ts6wxeqizblw2-UA/image;s=1000x700", "3 700 грн.","false","https://www.olx.ua/obyavlenie/apple-airpods-2-IDJBlR5.html?sd=1#d677f163fe;promoted"),
            2=>new Info("Xiaomi Redmi 9/A/C/Note9_2/32GB - 8200 руб_Выбор_Доставка_Гарантия", "Донецк, Пролетарский ",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/7hywvtjpe4sv2-UA/image;s=1000x700","2 999 грн..","true","https://www.olx.ua/obyavlenie/xiaomi-redmi-9-a-c-note9-2-32gb-8200-rub-vybor-dostavka-garantiya-IDJeJ2W.html?sd=1#d677f163fe;promoted"),
            3=>new Info("IPhone 11 Pro Max 64gb Gold Neverlock","Львов, Сиховский",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/zs6qoe641u1e-UA/image;s=1000x700","25 999 грн.","true","https://www.olx.ua/obyavlenie/iphone-11-pro-max-64gb-gold-neverlock-IDJstM4.html#d677f163fe;promoted"),
            4=>new Info("Garmin Fenix 6 47mm Sapphire Carbon Gray DLC with Black Band Новые","Харьков, Московский",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/u4f9yf7g5wx92-UA/image;s=1000x700;r=90","680 $","true","https://www.olx.ua/obyavlenie/garmin-fenix-6-47mm-sapphire-carbon-gray-dlc-with-black-band-novye-IDIMYBO.html#d677f163fe;promoted"),
            5=>new Info("Защитное стекло Mocolo Bravis Full Cover Акция","Киев, Голосеевский",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/6bfg3xhdzozo-UA/image;s=1000x700","190 грн.","false","https://www.olx.ua/obyavlenie/zaschitnoe-steklo-mocolo-bravis-full-cover-aktsiya-IDJAKWp.html?sd=1#d677f163fe"),
            6=>new Info("Фитнес браслет m5 смарт часы умные часы Xiaomi mi band","Днепр, Индустриальный",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/6goz4n1c8gdc3-UA/image;s=1000x700","399 грн.","true","https://www.olx.ua/obyavlenie/fitnes-braslet-m5-smart-chasy-umnye-chasy-xiaomi-mi-band-IDJywm4.html?sd=1#d677f163fe;promoted"),
            7=>new Info("Новые mi band M5 Xiaomi фитнес браслет смарт часы","Запорожье, Вознесеновский ",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/6n5m6y16s0ka1-UA/image;s=1000x700","402 грн.","false","https://www.olx.ua/obyavlenie/novye-mi-band-m5-xiaomi-fitnes-braslet-smart-chasy-IDJyvl8.html?sd=1#d677f163fe;promoted"),
            8=>new Info("Дисплей модуль + таскрин Huawei P30 Pro с пятном в рамке","Днепр, Соборный",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/thtglk9qatir-UA/image;s=1000x700","500 грн.","true","https://www.olx.ua/obyavlenie/displey-modul-taskrin-huawei-p30-pro-s-pyatnom-v-ramke-IDJERZL.html?sd=1#d677f163fe"),
            9=>new Info("New iPhone 11 Black 128GB айфон/Днепр/рассрочка/обмен","Днепр, Индустриальный",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/i8ml46pziiob1-UA/image;s=1000x700","775 $","true","https://www.olx.ua/obyavlenie/new-iphone-11-black-128gb-ayfon-dnepr-rassrochka-obmen-IDJERZh.html#d677f163fe"),
            10=>new Info("Xiaomi Redmi Note 9 NFC 64/128Gb - 13750/15200 руб. Global Version","Донецк, Ворошиловский",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/jj03zm5o34kr-UA/image;s=1000x700","5 500 грн.","false","https://www.olx.ua/obyavlenie/xiaomi-redmi-note-9-nfc-64-128gb-13750-15200-rub-global-version-IDIltf7.html?sd=1#d677f163fe"),
            11=>new Info("Iphone 6 16:64:128 телефон:магазин:гарантія:купити:пошта:Київ","Черкассы",date("j.n.Y h:m:s"),
                "https://ireland.apollo.olxcdn.com/v1/files/14gtsestfjlj-UA/image;s=1000x700","2 798 грн.","true","https://www.olx.ua/obyavlenie/iphone-6-1664128-telefonmagazingarantyakupitiposhtakiv-IDJjpv4.html?sd=1#d677f163fe;promoted")
        ];


        $mn=new Main($asoc,5);

        if(isset($_GET['Plage'])) {


            echo $mn->RenderBy(intval($_GET['Plage']));

//    for ($cp = 0; $cp < $tmpcp; $cp++) {
//        echo '';
//    }


        }
        else
        {


            echo $mn->RenderBy(1);

        }
        //function Paggin()
        //{
        //
        //}

        ?>




    </div>
    <!--    <input type="button" name="Release" onclick="document.write('');" value="Click to Release">-->
    <!--    <button onclick="function first(){-->
    <!--        getElementById('yp1').value=4;-->
    <!--        alert('Hello');-->
    <!--    }" action="ollxcopy.php">There</button>-->
</form>
</body>
</html>