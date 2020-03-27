-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Mar 2020, 23:26:30
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `antakya`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `admin_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admin_rank` enum('0','1') COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_username`, `admin_mail`, `admin_pass`, `admin_rank`) VALUES
(1, 'demo', 'demo@demo.demo', 'fe01ce2a7fbac8fafaed7c982a04e229', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `content`
--

CREATE TABLE `content` (
  `c_id` int(11) NOT NULL,
  `c_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_title_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_description` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `c_description_en` mediumtext COLLATE utf8_turkish_ci NOT NULL,
  `c_date` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `content`
--

INSERT INTO `content` (`c_id`, `c_title`, `c_title_en`, `c_description`, `c_description_en`, `c_date`) VALUES
(60, 'Antakya Surları', 'Antioch Walls', 'M.Ö.300 yıllarında Büyük İskender’in generallerinden Seleucos I. Nikator tarafından kurulan Antakya kalesi dünyanın önemli yapıları arasında yer alır. Sırasıyla Seleukos’lar Romalılar, Bizanslılar, Haçlılar, Selçuklular ve Osmanlılar tarafından kullanılarak zamanımıza kadar gelebilmiştir.12 km uzunluğunda olan surların 360 kuleden oluştuğu düşünülmektedir. Sayısız depremler ve savaşlar sonucunda çok harap olmuştur. Bugün ayakta kalan duvarların büyük bir kısmı M.S.6.yy’da Bizans İmparatoru Justianus tarafından yaptırılmıştır. Kale duvarları; Asi nehrinin kenarından başlayarak Silpius dağları arasında dolanıp, Küçükdalyan’da tekrar nehre kavuşmakta idi. Şimdi ancak Silpius dağı (Habib-i Neccar ) üzerindeki kısımları bulunmaktadır Kalenin, kuzeyde Halep Kapısı (St. Paul), doğuda Demir Kapı, güneyde Şam Kapısı, batıda Köprü kapısı ve kuzeybatıda Köpek Kapısı olmak üzere 5 kapısı vardır.', 'Founded by Seleucos I. Nikator, one of the generals of Alexander the Great in 300 BC, Antakya castle is among the important structures of the world. The Seleucids, respectively, were used by the Romans, Byzantines, Crusaders, Seljuks and Ottomans. It has been devastated by countless earthquakes and wars. Most of the walls that survive today were built by the Byzantine Emperor Justianus in the 6th century AD. Castle walls; Starting from the edge of the Asi River, he was wandering between the Silpius Mountains and rejoining the river in Küçükdalyan. Now there are only parts on the Silpius mountain (Habib-i Neccar). The castle has 5 gates, the Aleppo Gate in the north (St. Paul), the Iron Gate in the east, the Damascus Gate in the south, the Bridge gate in the west and the Dog Gate in the northwest.', '2020-02-06'),
(61, 'Yunushan Gelinler Dağı Roma Nekropolü', 'Yunushan Brides Mountain Roman Necropolis', 'Altınözü ilçesine bağlı Yunushan Mahallesinde bulunan turizm değerine sahip Yunushan Gelinler Dağı Roma Nekropolü ve Kaya Mezarları ', 'Yunushan Gelinler Mountain Roman Necropolis and Rock Tombs with tourism value in Yunushan Neighborhood of Altınözü district', '2020-01-30'),
(65, 'ST. PIERRE KİLİSESİ', 'ST. PIERRE CHURCH', 'ST. PIERRE DÜNYANIN İLK MAĞARA KİLİSESİ “Dünyanın ilk mağara kilisesi” olarak kabul edilen St. Pierre Kilisesi, Antakya-Reyhanlı yolu üzerinde, Stauris Dağı\'nın (Haç Dağı) batı yamacında yer almaktadır. Hz. İsa’nın 12 havarisinden biri olan St.Pierre, M.S. 29-40 tarihleri arasında Antakya’ya gelerek Hristiyanlığı bu kilisede yaymaya çalışmıştır. Dini toplantıların yapıldığı bu kilisede “Hristiyan” adının cemaate ilk kez burada verilmiş olması, St. Pierre Kilisesi’nin Hristiyanlığın ilk kiliselerinden biri olmasını sağlamaktadır. St. Pierre (Aziz Petrus) Kilisesi, 1963 yılında Papa VI. Paul tarafından “Hac yeri” ilân edilmiştir. Modern şehir manzarası eşliğinde gezilen kilisede,her yıl 29 Haziran’da Katolik Kilisesi tarafından ayin düzenlenmektedir. Hristiyanlığın Katolik, Ortodoks ve Protestanlık mezheplerine ayrılmadan önceki ilk kilisesi olarak da biliniyor. MAĞARADAN KİLİSEYE UZANAN YOLCULUK Doğal bir mağarayken eklemelerle kiliseye dönüştürülen yapı, 12. ve 13. yüzyıllarda Haçlılar tarafından ön cephesine yapılan ek inşaatla gotik tarza dönüştürüldü. Mağaranın tabanında 4. ve 5. yüzyıllara ait mozaik kalıntıları yer almaktadır. Ayrıca kilisede altar (sunak), niş içinde St. Pierre’nin küçük mermer heykeli, kutsal sayılan su ve saldırı esnasında cemaatin gizlice kaçmasına yarayan bir tünel de yer almaktadır. St. Pierre Kilisesi’ni her yıl binlerce yerli ve yabancı turist ziyaret etmektedir.', 'ST. PIERRE THE FIRST CAVE CHURCH OF THE WORLD Pierre Church is located on the Antakya-Reyhanlı road, on the western slope of Stauris Mountain (Cross Mountain). Hz. One of the 12 apostles of Jesus, St. Pierre, M.S. He came to Antakya between 29-40 and tried to spread Christianity in this church. In this church where religious meetings were held, the name “Christian” was first given to the community here. It provides Pierre Church to be one of the first churches of Christianity. St. Pierre (St. Peter\'s) Church, Pope VI. \"Place of pilgrimage\" was declared by Paul. The church, which is visited with a modern city view, is held annually by the Catholic Church on June 29. It is also known as the first church of Christianity before it was divided into Catholic, Orthodox and Protestant sects. JOURNEY FROM THE CAVE TO THE CHURCH When the building was transformed into a church with additions, it was transformed into a gothic style by the Crusaders in the 12th and 13th centuries. There are mosaic remains of the 4th and 5th centuries at the base of the cave. Also in the church altar (altar), in the niche St. There is also Pierre\'s small marble statue, a sacred water and a tunnel that helps the community to escape secretly during the attack. St. Thousands of local and foreign tourists visit Pierre Church every year.', '2020-03-11'),
(67, 'Demir Kapı', 'Iron Door', 'Demir Kapı\r\nŞehrin 5 giriş kapısından günümüze kadar bazı kayıplarıyla korunabilen tek yapıdır. Şehir suru, aquaduk, şehir kapısı ve bent özelliğini bir arada bulundurur. Roma dönemi imparatorlarından Justinianus döneminde inşa edilmiştir. Derin bir vadi içine yapılan bu kapı surları birbirine bağlayıcı özelliğiyle sel sularını kontrol amaçlı olarak tasarlanmıştır. 18 m yüksekliğindedir.', 'Iron door\r\nIt is the only building that can be protected with some losses from the 5 entrance doors of the city to the present day. City wall, aquaduk, city gate and embankment feature together. It was built in the period of Justinian, one of the Roman emperors. These door walls, which are built in a deep valley, are designed to control flood waters with their binding feature. It is 18 m high.', '2020-03-04'),
(69, 'Taş Köprü', 'Stone Bridge', 'Antakya’nın bir zamanlar sembolü olan Roma Köprüsü, 1972 yılında DSİ eliyle yıkıldı. Amaç, Asi Nehri’ni genişletip suyun akışını hızlandırmaktı. Yıkıldığında 1700 yaşındaydı ve insan eli dışında onu hiç bir şey yıkamamıştı.', 'The Roman Bridge, once a symbol of Antakya, was demolished by DSI in 1972. The aim was to expand the Asi River and speed up the flow of water. When he collapsed, he was 1700 years old and nothing had washed him apart from the human hand.', '2020-03-12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `control`
--

CREATE TABLE `control` (
  `c_id` int(11) NOT NULL,
  `c_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_logo_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_twitter` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `c_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `c_instagram` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `c_adres` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_adres_en` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_telefon` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `c_title` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `c_title_en` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_keywords` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `c_email` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_footer_social` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_footer_social_en` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_atif` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_atif_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_description` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `c_about` varchar(2000) COLLATE utf8_turkish_ci NOT NULL,
  `c_about_en` varchar(2000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `c_about_p` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `c_bg` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `control`
--

INSERT INTO `control` (`c_id`, `c_logo`, `c_logo_en`, `c_twitter`, `c_facebook`, `c_instagram`, `c_adres`, `c_adres_en`, `c_telefon`, `c_title`, `c_title_en`, `c_keywords`, `c_email`, `c_footer_social`, `c_footer_social_en`, `c_atif`, `c_atif_en`, `c_description`, `c_about`, `c_about_en`, `c_about_p`, `c_bg`) VALUES
(0, 'assets/img/static/logo.png', 'assets/img/static/logo-en.png', 'https://twitter.com/', 'https://www.facebook.com/', 'https://www.instagram.com/antakyakulturelmirasi/', 'Mustafa Kemal Üniversitesi Antakya/ HATAY', 'Mustafa Kemal University Antioch/ HATAY', '244 888 32552', 'Antakya Kültürel Mirası Koruma Derneği', 'Antioch Cultural Heritage', 'antakya,kültürel,miras,mustafa kemal üniversitesi', 'miras@antakya.com', 'Sosyal Medya Hesaplarımız', 'Social Media Accounts', 'Tüm Hakları Saklıdır © 2020', 'Copyright © 2019', 'Antakya Kültürel Mirası Koruma Derneği Resmi Web Sayfası', 'Antakya Kültürel Mirası Koruma Derneği’nin amacı, başta Antakya olmak üzere ilişkili tüm coğrafyadaki -somut veya somut olmayan eser veya birikimlerin- kültürel mirasın araştırılması, tespiti, belgelenmesi, korunması, toplum temelli kültürel miras yönetiminin gerçekleştirilebilmesi adına farkındalığın artırılması için, eğitimler-atölyeler düzenlemek, müzeler ve kütüphaneler açmak, gerekli materyali üretmek, kampanyalar düzenlemek vb. faaliyetler yoluyla ulusal, bölgesel, uluslararası düzeyde işbirlikleri geliştirerek bu mirasın gelecek kuşaklara taşınması, olarak belirlenmiştir.', 'The aim of the Antakya Cultural Heritage Conservation Association is to explore, investigate, identify, document, problems, open society, museums and libraries, produce the necessary material, organize campaigns, etc. in all geography - tangible or intangible works or accumulations - of your choice, Antakya. To develop this heritage to future generations by developing cooperation at national, regional and international level through activities.', 'assets/img/static/about.png', 'assets/img/static/site-bg.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `title_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `description_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `img` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `date` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `events`
--

INSERT INTO `events` (`id`, `title`, `title_en`, `description`, `description_en`, `img`, `date`) VALUES
(6, 'Antakya Yemek Yapma Yarışması', 'Antioch Cooking Competition', 'ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia vol', 'ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia vol', 'assets/uploads/events/2778927314.jpg', '2020-03-18'),
(7, 'Antakya Gezi Etkinliği', 'Antioch Travel Event', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mo', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mo', 'assets/uploads/events/2750628484.jpg', '2020-03-29');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `gallery`
--

INSERT INTO `gallery` (`id`, `url`, `date`) VALUES
(7, 'assets/uploads/gallery/2766928421.jpg', '1584891368'),
(8, 'assets/uploads/gallery/2016423778.jpg', '1584891656'),
(9, 'assets/uploads/gallery/2337720648.jpg', '1584891714'),
(10, 'assets/uploads/gallery/2337227761.jpg', '1584891726'),
(11, 'assets/uploads/gallery/2578320221.jpg', '1584891732'),
(12, 'assets/uploads/gallery/2723025267.jpg', '1584891738'),
(13, 'assets/uploads/gallery/2154329307.jpg', '1584891752'),
(14, 'assets/uploads/gallery/2042528531.jpg', '1584891756'),
(15, 'assets/uploads/gallery/2774322858.jpg', '1584894560'),
(16, 'assets/uploads/gallery/2180822980.jpg', '1584894566');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `title_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `url` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `media`
--

INSERT INTO `media` (`id`, `title`, `title_en`, `url`) VALUES
(4, 'ASİ GAZETESİ : Antakya Kültürel Mirası Koruma Derneği Açıldı.', 'ASİ GAZETESİ : Antioch Cultural Heritage Opened.', 'https://www.asigazetesi.com/haber/antakya-kulturel-mirasi-koruma-dernegi-acildi/25109/'),
(5, 'Antakya Gazetesi : Antakya Kültürel Mirası Koruma Derneği', 'Antakya Gazetesi : Antioch Cultural Heritage', 'https://www.antakyagazetesi.com/antakya-kulturel-mirasi-koruma-dernegi/'),
(6, 'Körfez Gazete : Antakya Kültürel Mirası Koruma Derneği açıldı', 'Körfez Gazete : Antioch Cultural Heritage Opened.', 'https://www.korfezgazete.com/antakya-kulturel-mirasi-koruma-dernegi-acildi/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menus`
--

CREATE TABLE `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `menu_link` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `photos`
--

CREATE TABLE `photos` (
  `c_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `upload_time` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `photos`
--

INSERT INTO `photos` (`c_id`, `id`, `url`, `upload_time`) VALUES
(60, 140, '2628974687592_101333261293983_8179391821765710781_n.jpg', '1584895668'),
(60, 141, '2628976891439_508134590030853_8205825050722069315_n.jpg', '1584895668'),
(61, 142, '2568087542245_405970020271088_7893239181684391393_n.jpg', '1584895811'),
(61, 143, '2568087596280_154349606041030_5422847821128601315_n.jpg', '1584895811'),
(61, 144, '2568088377915_3575613365813018_301360054040468259_n.jpg', '1584895811'),
(61, 145, '2568088916269_596742834507827_3215967746470803165_n.jpg', '1584895811'),
(61, 146, '2568089124648_2868649366491214_7344802535237857930_n.jpg', '1584895811'),
(61, 147, '2568089391817_546344769319671_2821329402954105890_n.jpg', '1584895811'),
(61, 148, '2568089406232_2625772727667983_6289122822204554203_n.jpg', '1584895811'),
(65, 153, '2236771836893_111210083705224_285089376492596834_n.jpg', '1584899918'),
(65, 154, '2236774676935_3132733683403903_3719038419124144734_n.jpg', '1584899918'),
(65, 155, '2236775458017_192091191922796_4075494886904585200_n.jpg', '1584899918'),
(65, 156, '2236780900698_446265842991635_5182301778546793006_n.jpg', '1584899918'),
(67, 161, '2824271760612_477296999799227_6961519864087752723_n.jpg', '1584900562'),
(69, 162, '21260slide-3.jpg', '1584900734');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `time` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sessions`
--

INSERT INTO `sessions` (`id`, `time`) VALUES
('a3ij0hdevjnnphrus94tg997bh', 1584915764),
('a3ij0hdevjnnphrus94tg997bh', 1584915790),
('a3ij0hdevjnnphrus94tg997bh', 1584915801),
('a3ij0hdevjnnphrus94tg997bh', 1584915846),
('a3ij0hdevjnnphrus94tg997bh', 1584915848),
('a3ij0hdevjnnphrus94tg997bh', 1584915848),
('a3ij0hdevjnnphrus94tg997bh', 1584915852),
('a3ij0hdevjnnphrus94tg997bh', 1584915854);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_title_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_description_en` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_img_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `slider_sq` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_title_en`, `slider_description`, `slider_description_en`, `slider_link`, `slider_img_url`, `slider_sq`) VALUES
(100, '', '', '', '', '', 'assets/uploads/slider/2906430119.jpg', ''),
(101, '', '', '', '', '', 'assets/uploads/slider/2770221217.jpg', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Tablo için indeksler `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `content`
--
ALTER TABLE `content`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Tablo için AUTO_INCREMENT değeri `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
