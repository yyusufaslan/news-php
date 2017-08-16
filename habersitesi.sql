-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 May 2017, 16:13:45
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `habersitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `haber_id` int(11) NOT NULL,
  `haber_basligi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `haber_icerigi` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  `haber_kategori` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `haber_resmi` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`haber_id`, `haber_basligi`, `haber_icerigi`, `haber_kategori`, `haber_resmi`) VALUES
(43, 'Takla Atan Araçtan Yara Almadan Kurtuldu', 'SİVAS\'tan  Ulaş İlçesi\'ne giden 44 yaşındaki Üstün Uluk yönetimindeki otomobil, sürücüsünün direksiyon hakimiyetini kaybetmesi sonucu refüje çarparak takla atıp karşı şeride geçti. Sürücü Uluk, kazadan yara almadan kurtuldu.\n\nKaza, akşam saatlerinde Sivas-Kayseri karayolu üzerindeki Mescitli Köyü yakınlarında meydana geldi.  Sivas\'tan  Ulaş İlçesi\'ne giden Üstün Uluk kontrolündeki 58 DR 112 plakalı otomobil, sürücüsünün direksiyon hakimiyetini kaybetmesi nedeniyle refüje çarparak takla atıp karşı şeride geçti. Ters dönen araçtan yara almadan çıkan Uluk, 80 kilometre hızda seyrettiğini ancak otomobilin denge kolunun koptuğunu, bu nedenle devrildiğini ileri sürdü. Sağlık ekiplerinin kontrolünden geçen Uluk\'un alkollü olmadığı saptandı. Ters dönen araç çekici yardımıyla kaldırıldı. - Sivas', 'gündem', '/habersitesi/images/ty9379.jpg'),
(42, '1 Mayıs Emek ve Dayanışma Günü', 'dassadKayseri\'de  1 Mayıs Emek ve Dayanışma Günü çeşitli etkinliklerle kutlandı.\n\nDİSK, KESK, TÜRK-İŞ\'e bağlı sendika üyeleri, sivil toplum kuruluşları temsilcileri ile işçiler,  Gevher Nesibe Mahallesi Salih Avgun Paşa İlkokulu önünde toplandı.\n\nSlogan atarak, ellerinde pankartlarla kortej halinde  Mimarsinan Parkı\'na gelen katılımcılar, polisin farklı noktalarda kurduğu arama noktalarından geçerek alana girdi.\n\nBazı sendika temsilcilerinin konuşmalarının ardından etkinliğe katılanlar halay çekti.', 'siyaset', '/habersitesi/images/as3357.jpg'),
(44, 'Kayseri\'de Uyuştucu Operasyonu: 1 Tutuklama', 'KAYSERİ\'de  uyuşturucu ticareti yaptığı iddia edilen ve gözaltına alınan 3 kişiden 1\'i tutuklandı. \n\nNarkotik Suçlarla Mücadele Şube Müdürlüğü ekipleri O.C. (39), P.T. (33) ve H.K.\'Yİ (34) yakaladı. Bu kişilerin evlerinde ve araçlarında yapılan aramada, satışa hazır 28,5 gram metamfetamin, hassas terazi, uyuşturucu içiminde kullanılan çeşitli aparatlar, uyuşturucu madde paketlemesinde kullanılan kilitli poşetler, 1 ruhsatsız tabanca, 28 tabanca fişeği ele geçirildi. Polisteki sorguları tamamlanan şüphelilerden O.C. çıkarıldığı mahkemece tutuklandı.\n', 'gündem', '/habersitesi/images/fg3866.jpg'),
(48, 'dasdasdasdas', 'dasdasdasdas', 'dasdasdasdas', '/habersitesi/images/as3205.jpg'),
(47, 'sadsad', 'dsada', 'dsadsa', '/habersitesi/images/rt603.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkinda`
--

CREATE TABLE `hakkinda` (
  `hakkinda_id` int(11) NOT NULL,
  `hakkinda_icerigi` varchar(10000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkinda`
--

INSERT INTO `hakkinda` (`hakkinda_id`, `hakkinda_icerigi`) VALUES
(1, 'WEB TEKNOLOJİLERİ DÖNEM ÖDEVİ');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_icerigi` varchar(10000) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_icerigi`) VALUES
(0, 'yyusufaslan@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `password` int(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 12345);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `haber_id` int(11) NOT NULL,
  `haber_basligi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `haber_icerigi` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  `haber_kategori` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `haber_resmi` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`haber_id`, `haber_basligi`, `haber_icerigi`, `haber_kategori`, `haber_resmi`) VALUES
(8, 'Reklamı Kapat\r\n\r\nGalatasaray\'ın Penaltısını Çalmayan Halis Özkahya Geceye Damgasını Vurdu', 'Spor Toto Süper Lig\'deki  Bursaspor –  Galatasaray maçının ilk yarısında mücadelenin hakemi  Halis Özkahya çok tartışmalı bir karara imza attı.\r\n\r\nNET PENALTIYI GÖRMEDİ\r\n\r\nBursaspor savunmacısı  Ertuğrul Ersoy\'un ceza sahasında eliyle yaptığı net müdahaleyi görmeyen Özkahya devam dedi.\r\n\r\nErtuğrul\'dan seken top  Bruma\'nın önünde kalırken pozisyonun devamında sarı-kırmızılılar tehlike yaratamadı. Galatasaraylı futbolcular kısa süreli itirazdan sonra oyuna devam ettiler.  Fenerbahçe maçındaki arzu ve coşkuyu devam ettiren  Galatasaray, ilk yarıda dominant olan taraftı.', 'spor', '/habersitesi/images/5.jpg'),
(7, 'Kayseri\'de Türkiye Yamaç Paraşütü 1\'inci Etap Yarışı Tamamlandı', 'TALAS Belediyesi,  Türkiye Havacılık Federasyonu ve Gençlik ve Spor İl Müdürlüğü\'nün düzenlediği Türkiye Yamaç Paraşütü Hedef Ligi Şampiyonası 1\'inci etap yarışması sona erdi.\r\n\r\nAli Dağı\'nda 2 gün süren 5 görev uçuşlu yarışmanın ilk etabına  Türkiye\'nin çeşitli illerinden 28 sporcu katıldı. Cumartesi günü antrenman ve deneme uçuşları ile başlayan şampiyonanın 1. ve 2. gününde pilotlar Ali Dağının zirvesinden kalkarak iniş alanındaki hedefe gol yapmaya çalıştı. Oldukça renkli görüntülere sahne olan yarışmayı vatandaşlar ilgiyle izledi. 2. Gün yarışma organizasyonunun ardından Yamaç Paraşütü iniş alanında ödül töreni gerçekleştirildi.  Yarışmalarda \'Ferdi Klasman\' sonuçlarında Kerem Dinçer  1., Bekir Atlıhan 2., İbrahim Dinçer 3. oldu. Kadınlarda ise Ayşenur Katırcı  1., Özlem Bağ 2.,  Leyla Nur Karakullukçu, Deniz Uzunkaya ve Hira Selma  Kalkan 3. lük ödülünü paylaştılar. Takımlarda 1.  Adana Yamaç Paraşütü Spor Kulübü  2. Gökyüzü Havacılık Spor Kulübü 3. Nilüfer Belediye Spor Kulübü dereceye girdi. Yarışma sonucunda dereceye giren sporculara kupa ve madalyaları verildi.\r\n\r\nTörende bir konuşma yapan  Talas Belediye Başkan Yardımcısı Ali Rıza Karakullukçu, Ali Dağında ilk kez hedef şampiyonası gerçekleştirdiklerini belirterek başarılı bir yarışma olduğunu söyledi. Gençlik ve Spor İl Müdürü Murat Eskici Hava Sporları Federasyonunun hizmete girmesiyle bu tür organizasyonlara her türlü desteği verdiklerini belirterek yarışmayı gerçekleştiren ev sahibi  Talas Belediyesine teşekkür etti. Hava Sporları Federasyonu temsilcisi Serdar İlker ise yarışmanın çok verimli olduğunu belirterek aynı zamanda yarışmacı olarak katıldığını Ali Dağının hava sporlarında bir marka olduğunu söyledi.\r\n\r\nYarışmanın en renkli yanı ise baba ve oğlunun aynı yarışmada derece elde etmesiydi. Erkekler klasmanında 1\'inci lik ödülünü alan 17 yaşındaki Kerem Dinçer, 3\'üçüncülük ödülünü alan babası İbrahim Dinçer\'le aynı takımda yarışmanın mutluluğunu yaşadığını ifade etti. İbrahim Dinçer ise oğlunun 1\'inci olmasıyla gurur duyduğunu belirtti.\r\n\r\nTürkiye Yamaç Paraşütü Hedef Ligi Şampiyonası Ali Dağı\'nın ardından  Antalya,  Erzincan,  Eskişehir ve KKTC\'de devam edecek', 'gündem', '/habersitesi/images/4.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`haber_id`);

--
-- Tablo için indeksler `hakkinda`
--
ALTER TABLE `hakkinda`
  ADD PRIMARY KEY (`hakkinda_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`haber_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `haber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Tablo için AUTO_INCREMENT değeri `hakkinda`
--
ALTER TABLE `hakkinda`
  MODIFY `hakkinda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `haber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
