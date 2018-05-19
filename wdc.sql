-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2018 at 11:59 PM
-- Server version: 5.6.28-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
`id` int(11) unsigned NOT NULL,
  `topic` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `commenter` text CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `topic`, `content`, `time`, `commenter`) VALUES
(24, '虐待動物', 'I think we should protect the animals.', '2013-07-08 09:38:40', 'wht'),
(25, '虐待動物', 'I think we should protect the animals.', '2013-07-08 10:26:51', 'wht'),
(26, '捐血', '多點捐血，多點關心別人。', '2013-07-09 01:44:01', 'WHT'),
(1, 'd', 'd', '2013-06-26 04:05:24', ''),
(2, ' ', ' ', '2013-06-26 04:05:49', ''),
(5, '虐待動物', 'asdf', '2013-06-26 08:41:23', ''),
(6, '虐待動物', 'asdf', '2013-06-26 09:25:50', ''),
(7, '虐待動物', 'qwer', '2013-06-26 09:25:57', ''),
(8, '虐待動物', 'qwer', '2013-06-26 09:35:18', ''),
(9, '虐待動物', 'qwer', '2013-06-26 09:35:52', ''),
(10, '貧困人', 'a', '2013-06-27 03:25:10', ''),
(11, '資訊玩樂', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2013-06-27 07:41:32', ''),
(27, '虐待動物', '感想', '2013-07-15 08:27:22', '名字'),
(28, '虐待動物', 'hi', '2017-04-17 06:14:25', 'hi'),
(29, 'è‡ªç„¶ç½å®³', 'a', '2018-05-18 15:43:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
`id` int(11) NOT NULL,
  `topic` text COLLATE utf8_unicode_ci NOT NULL,
  `topicinfo` text COLLATE utf8_unicode_ci NOT NULL,
  `search` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `topic`, `topicinfo`, `search`, `date`) VALUES
(1, '虐待動物', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id1.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\n<p>虐待動物是指使動物承受無法忍受的痛苦的行為，如獲取動物的肉或皮毛､虐打及殺害動物。</p>\n<div class=contentsubtitle>防止虐待動物的法律</div>\n<p>大多數國家的立法中有禁止虐待動物的規定，這些法律大多數限於要求對動物提供至少的護理和人道的對待，例如對動物提供居住、食物和醫療保護，以及不拷打動物，或以不人道的方式殺動物。\n而醫學研究中使用動物來做實驗是不會受到法律約束。</p>\n<p>\n在中國大陸，已在2009年新增了《中華人民共和國動物保護法》。這個法律指出普通動物應享有生存權利，和侵犯動物應承擔的處罰和法律責任，並強調了虐待動物是犯罪行為。</p>\n\n</td>\n</tr>\n</table>\n\n\n', 39, '2013-07-09 16:12:53'),
(2, '賭博', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id2.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>對一個事件與不確定的結果，下注錢或具物質價值的東西，其主要目的為贏取金錢或物質價值。</p>\r\n<div class=contentsubtitle>賭博帶來的影響</div>\r\n<p>由於長期沉迷賭博下而缺乏正常的人際交流，甚至因輸了賭博而導致財產流失</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 3, '2013-06-28 10:49:41'),
(3, '現金分享計劃', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id3.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>簡介</div>\r\n<p>現金分享計劃是澳門特區政府於2008年起每個財政年度向澳門居民一次性發放現金的計劃；計劃發放目的是分享經濟發展成果。<br><br>\r\n凡在限期時持有有效或可續期的澳門居民身份證居民均是為此計劃之受惠對象。</p>\r\n<div class=contentsubtitle>發放方式</div>\r\n<p>澳門政府把社會工作局經濟援助金受益人、領取直接津貼的教職員、教育暨青年局學生福利基金以及大專助學金受惠學生、敬老金受益人、公務員、領取退休金的退休公務員及撫恤金受領人自動轉帳至其銀行帳戶；其他合乎資格人士透過郵寄方式把劃線支票至受惠人士。</p>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 5, '2013-07-09 10:26:45'),
(5, '廚餘', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id5.jpg width="90%" height="90%"></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\n<p>廚餘，又稱食品廢棄物，是可食用物，於烹煮前食材物料處理所剩或食用後所剩之統稱。由於「廢棄物」的定義不一，許多國際組織、政府機關、專業機構對食品廢棄物都有各自的定義。</p>\n<div class=contentsubtitle>\n廚餘的分類</div>\n<p>\n生廚餘：烹煮前食材物料處理所剩之物。(菜葉、果皮等均屬)\n熟廚餘：經烹煮食用所剩之物。(剩葉、飯、骨、湯水等均屬)\n</p>\n<div class=contentsubtitle>廚餘的影響</div>\n<p>根據香港環保署的資料顯示，香港每天會產生約三千噸的廚餘，數量驚人。\n廚餘是可造成環境污染，回收成本也不少。在特定的節慶日期間，因為應節的特定食物（如：年糕、粽子、月餅等）過期而要丟棄的食物，亦是廢棄食物的最大宗。\n</p>\n<div class=contentsubtitle>採取的措施</div>\n<p>\n<br>分解堆肥：<br><br>\n    廚餘可以回收，運送往家豬或家禽農場作飼料用，也是另一解決廚餘的方法。部分廚餘（例如：咖啡渣、茶渣）可以無需分解而直接用來堆肥。<br><br>\n發電：<br><br>\n    在2009年搞笑諾貝爾獎的生物學獎得主的研究項目，就是透過從熊貓排出的糞便裡提取細菌，以幫助更有效地分解廚餘。\n</p>\n</td>\n</tr>\n</table>\n\n', 16, '2013-07-07 11:38:36'),
(6, '貧窮', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id6.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p><br>人類物質上的所需，包括日常生活的必需品和服務的不足，這些不足有沒有改變、改善。<br><br>\r\n相對貧窮<br><br>\r\n經濟上是否豐裕，錢財、資源（天然資源）是否足夠。「足夠」一詞在世界各地的文化、政治、經濟上，都有著不同的定義，歐盟國家對「貧窮」的定義就包含了資源分佈是否平等。<br><br>\r\n社會人際關係，面臨貧窮的人有否被邊緣化、是否對他人依賴、能否過著普遍認為「正常」的生活模式——例如，是否能夠維持一個健康的家庭、能否教養小孩、能否參與社會上的活動。</p>\r\n<div class=contentsubtitle>成因</div>\r\n<p>\r\n<br>個人因素：「病態性」的因素，即將貧窮視為是行為、選擇或缺乏能力所導致的後果。<br><br>\r\n家庭因素： 將貧窮歸因於家庭的教養過程；還有可能是因為高昂的醫藥費而陷入貧窮。<br><br>\r\n次文化因素：將貧窮歸因於一個社群中藉由學習及分享所得的生活模式。<br><br>\r\n社會因素：將貧窮視為其他人（包括政府及經濟體系）所造成的後果。<br><br>\r\n結構性因素：立論貧窮是社會結構所導致的。<br><br>\r\n文化因素：把貧窮歸咎於過度消費。<br><br>\r\n</p>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 10, '2013-07-07 11:36:47'),
(7, '自然災害', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id7.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>天災，指自然界中所發生的異常現象，這種異常現象給周圍的生物造成悲劇性的後果，相對於人類社會而言即構成災難。世界氣象組織表示，所有的天災有百分之九十跟天氣、水和氣候事件有關。自然災害的嚴重程度與人口的彈性受其的影響或其恢復的能力有關。</p>\r\n<div class=contentsubtitle>常見的自然災害</div>\r\n<p>地震、雪崩、火山爆發、暴雨等</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 3, '2013-07-31 10:13:54'),
(8, '獨居長者', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id8.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>問題</div>\n<p>對於絕大部分的獨居長者，他們生活的資金來源最主要是政府，而那筆資金很難足夠應付日常的生活，所以獨居長者長期都處於清貧獎態。<br><br>\n獨居長者因較少接觸社會，間接地令他們被遺棄在社會資源網絡之外。一份調查顯示，大多數獨居長者不知道，原來他們仍可申請綜援以外之特別津貼，而且更遭到社署職員之白眼。在九十八位被訪者中，有七成長者是不知道十項特別津貼中的其中八項。<br><br>\n獨居長者，顧名思義，即長期獨自一人居於斗室中，遇到甚麼生活難題，都只有無助地「單打獨鬥」。但突發性之意外、疾病之復發等。都是防不勝防。難過的是他們往往求助無門，求救亦沒有人回應。九六年初嚴寒導致過百名獨居長者病發失救而死，正正反映這威脅他們安危的計時炸彈之可怖。</p>\n\n\n</td>\n</tr>\n</table>\n\n', 0, '2013-07-09 10:49:21'),
(9, '酒吧', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id9.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\n<p>酒吧是指提供啤酒、葡萄酒、洋酒、雞尾酒等酒精類飲料的消費場所。Bar多指娛樂休閒類的酒吧，提供現場的樂隊或歌手、舞女表演。高級的Bar還有調酒師表演精彩的花式調酒。而Pub和tavern多指英式的以酒為主的酒吧。酒吧有很多類型和風格，既有最低檔的「潛水吧」，也有為社會精英人士提供娛樂的優雅場所。酒吧最初源於美國西部大開發時期的歐洲大陸，bar一詞到16世紀才有「賣飲料的櫃檯」這個義項，後又經美洲進一步的變異、拓展，約20世紀80至90年代傳入華人地區及華洋雜處的社會。</p>\n<div class=contentsubtitle>問題</div>\n<p>由於酒吧會賣含酒精的飲品，如果有人在醉後駕駛車輛，就會很容易發生危險。而且有不法之徒透過酒吧這一個地方來銷售毒品，嚴重影響社會秩序。所以警方和酒吧負責人應該加大監管。</p>\n\n</td>\n</tr>\n</table>\n\n', 3, '2013-07-09 11:11:21'),
(10, '資訊玩樂', '資訊玩樂', 2, '2013-06-28 08:32:43'),
(11, '家庭暴力', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id11.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>家庭暴力，是指家庭成員間實施身體或精神上的侵害行為，往往由於現實之親屬關係與利益的約束而出現一定程度的隱蔽性。</p>\r\n<p>家庭暴力的侵害行為可包括了實際攻擊、傷害、虐待等直接實施暴力或在精神上威脅家庭成員。其涉及的成員可以指：配偶、前配偶、父母、子女、繼父母帶來的孩子、有血緣關係家人、同居伴侶、殘疾者與照顧者、情侶關係。</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 1, '2013-06-29 13:09:00'),
(12, '吸毒', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id12.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>吸毒指凡采取各種方式，反複大量地使用一些具有依賴性潛力的物質。這種使用與醫療無關，其结果是濫用者對該物質產生依賴獎態，迫使他但無止境地追求使用，由此造成健康損害并带来嚴重的社會、經濟甚至政治問題。</p>\r\n<div class=contentsubtitle>危害</div>\r\n<p><br>（一）身體依賴性<br><br>\r\n毒品作用於人體，使人體體能產生適應性改變，形成在藥物作用下的新的平衡狀態。一旦停掉藥物，生理功能就會發生紊亂，出現一系列嚴重反應，稱為戒斷反應，使人感到非常痛苦。用藥者為了避免戒斷反應，就必須定時用藥，並且不斷加大劑量，使吸毒者終日離不開毒品。<br><br>\r\n（二）精神依賴性<br><br>\r\n毒品進入人體後作用於人的神經系統，使吸毒者出現一種渴求用藥的強烈慾望，驅使吸毒者不顧一切地尋求和使用毒品。<br><br>\r\n（三）毒品危害人體的機理<br><br>\r\n正常人的腦內和體內一些器官，存在著內源性阿片肽和阿片受體。在正常情況下，內源性阿片肽作用於阿片受體，調節著人的情緒和行為。\r\n</p>\r\n<div class=contentsubtitle>禁毒宣傳</div>\r\n<p>由於毒品危害極大，因此不少地方都有禁毒的宣傳工作。例如：透過互聯網、電視、報章、過來人親身經歷、學校宣傳工作等。</p>\r\n</td>\r\n</tr>\r\n</table>\r\n', 22, '2013-07-31 09:58:09'),
(13, '敬老', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id13.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>為何要敬老?</div>\r\n<p>老人為我們創造了幸福的今天，值得我們尊敬和愛戴。老人是我們的長輩，沒有他們的辛勤勞動，就沒有我們幸福的今天。今天我們的幸福生活，正是他們當年辛勤勞動打下的基礎。如今，當年的勞動者雖然已經失去勞動能力，但他們曾為社會做過貢獻，值得我們尊敬和愛戴。退一步，從老年人本身來說，他們大量的知識、豐富的閱歷和經驗，是整個社會的寶貴財富，值得我們繼承和借鑒。老人也理應受到社會的尊敬和重視。</p>\r\n<div class=contentsubtitle>敬老的方法</div>\r\n<p>多一點關心他們，與他們多聊天、巴士讓座、教導他們新事物。</p>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 0, '2013-07-09 14:35:53'),
(14, '運動問題', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id14.jpg width="90%" height="90%"></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>影響</div>\n<p>由美國運動醫學科學院以及國際運動科學和體育理事會聯合組織的一項全球調研顯示，今天的美國人比1965年的美國人運動量減少了32%，預計到2030年將減少46%；在中國，與1991年相比，人們運動量減少了45%，預計到2030年將減少51%。缺少運動已經成為一個社會問題。\n</p>\n<p>最直接的影響是，缺少運動會導致體質下降。該研究稱，中國每年有530萬人死於與缺少運動有關的疾病，甚至高於吸煙所造成的500萬死亡人數，其中，因高血壓死亡的人數為115萬；中國已超過印度成為全球糖尿病人最多的國家，全國約四分之一的成年人患糖尿病或前期糖尿病；3000萬名17歲以下的中國青少年心理亞健康。這些疾病都和缺少運動直接相關。\n</p>\n<p>缺少運動對兒童的影響更明顯。缺少運動導致肥胖、體質下降，進而影響學習成績；走上社會之後，會影響工作能力，肥胖可能性高出兩倍。相反，多運動會讓孩子受益終生。調研發現，喜歡運動的兒童90%不肥胖，40%在學校成績優異，而且很少染上吸煙等不良習慣。在工作中精力充沛，更有創造力；進入中老年則降低心血管疾病、癌症的風險，平均壽命會多5年。\n</p>\n\n</td>\n</tr>\n</table>\n\n', 0, '2013-06-28 09:40:39'),
(15, '地球資源', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id15.jpg width="400" height="300"></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>在自然界中凡是能提供人類生活和生產需要的任何形式的物質，均可稱為自然資源，它是人類賴以生存的基礎。如太陽輻射、大氣、水、生物、土地、各種礦物和能源等均為自然資源。</p>\r\n<p>可分為再生性自然資源及非再生性自然資源</p>\r\n<div class=contentsubtitle>資源問題</div>\r\n<p>資源問題亦和環境問題一樣，和每個國家、每個人都有著密切的關係，亦屬於重大的全球性的問題。由於全世界人口的急劇增長，對自然資源的需求量日益增加，因而自然資源短缺的矛盾將日趨尖銳，如不正確處理勢必影響國家的安定和杜會的發展，因此資源問題受到全世界範圍的嚴重關注。</p>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 0, '2013-06-28 09:46:03'),
(16, '環保', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id16.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\n<p>環境保護是指人類為解決現實的或潛在的環境問題，協調人類與環境的關係，保障經濟社會的持續發展而採取的各種行動的總稱。 其方法和手段有工程技術的、行政管理的，也有法律的、經濟的、宣傳教育的等。</p>\n<div class=contentsubtitle>主要保護措施</div>\n<p>防治污染<br><br>\n包括防治工業生產排放的“ 三廢 ”（廢水、廢氣、廢渣）、粉塵、放射性物質以及產生的噪聲、振動、惡臭和電磁微波輻射， 交通運輸活動產生的有害氣體、液體、噪聲，海上船舶運輸排出的污染物，工農業生產和人民生活使用的有毒有害化學品，城鎮生活排放的煙塵 、污水和垃圾等造成的污染。<br><br>\n防止破壞<br><br>\n包括防止由大型水利工程 、鐵路、公路幹線、大型港口碼頭、機場和大型工業項目等工程建設對環境造成的污染和破壞，農墾和圍湖造田活動、海上油田、 海岸帶和沼澤地的開發、森林和礦產資源的開發對環境的破壞和影響，新工業區、 新城鎮的設置和建設等對環境的破壞、污染和影響。<br><br>\n保護自然環境<br><br>\n包括對珍稀物種及其生活環境、特殊的自然發展史遺跡、 地質現象 、地貌景觀等提供有效的保護。 另外， 城鄉規劃 ，控制水土流失和沙漠化、植樹造林、控制人口的增長和分佈、合理配置生產力等，也都屬於環境保護的內容。 環境保護已成為當今世界各國政府和人民的共同行動和主要任務之一。 中國則把環境保護宣佈為中國的一項基本國策，並製定和頒布了一系列環境保護的法律、法規，以保證這一基本國策的貫徹執行。\n<div class=contentsubtitle>簡單的環保方法</div>\n<p>\n燈泡換成節能燈用電能省近八成<br><br>\n家中的普通燈泡換為節能燈泡 ，並且要購買經過“國家節能產品認證”的產品，您可以通過是否印有“節”字標誌來判斷。 在相同光通量條件下，節能燈比白熾燈可節約電能 80%，用於購買節能燈的費用，在(8～10)個月的電費節餘中就可以收回。<br><br>\n垃圾分類<br><br>\n在垃圾中，約50%是生物性有機物，約30%—40%具有可回收再利用價值。<br><br>\n對高耗能企業鼓勵安裝節能設施<br><br>\n由於能源緊張，隨著節能工作進一步開展。 各種新型，節能先進爐型日趨完善，且採用新型耐火纖維等優質保溫材料後使得爐窯散熱損失明顯下降。 採用先進的燃燒裝置強化了燃燒，降低了不完全燃燒量，空燃比也趨於合理。 然而，降低排煙熱損失和回收煙氣餘熱的技術仍進展不快。 為了進一步提高窯爐的熱效率 ，達到節能降耗的目的，回收煙氣餘熱也是一項重要的節能途徑。</p>\n</p>\n</td>\n</tr>\n</table>\n\n', 0, '2013-07-09 13:30:53'),
(17, '貧富懸殊', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id17.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\n<p>是指一個群體裡面每個人之間的經濟資產（財富）及收入的分配不均等。本用詞一般是指一個社會裡面個人或群體之間的收入差距，但亦可用以指出國際貧富差距。貧富差距問題跟經濟平等、平等機會及平等結果的概念有關。</p>\n<div class=contentsubtitle>成因(以香港為例)</div>\n<p>\n<br>1. 勞工階層收入低<br><br>\n香港雖然已實施最低工資，但以現時最低工資時薪28元來計算，一個月休假4天，每天做8小時月薪只得五千多元月薪，做足12小時才有八千多元月薪，如一個家庭只有一份薪水收入，以現時香港的生活水平，要養家實在很困難。<br><br>\n2. 綜援審批太苛刻<br><br>\n回歸15年以來，有很多中、港婚姻家庭以團聚理由，將原住在內地的伴侶及兒女，申請來香港定居，這些家庭如有經濟困難申請綜援，妻子居港未滿7年，是不被計算在受助人口之內，變成很多受助家庭只靠一個人的綜援金去應付兩個人、甚至3個人的生活，生活難上加難。<br><br>\n3. 生活支出花費大<br><br>\n香港的高地價政策，加上熱錢狂炒，令到地價無止境飆升，連帶低下階層的屋租亦十分昂貴，一間籠屋床位的租金已佔去一個支取最低工資工人的四分一工資，加上車費、水費、電費年年加，食品價格更因人民幣升值而創新高，支出實在太大。<br><br>\n4. 醫療開支龐大<br><br>\n公營醫療體系除了收進基本收費外，很多藥物或手術都要另行收費，如果因無法等候輪候公營醫療，而找私家醫生診病，開支就更大，基層家庭一旦有成員患上長期病患，便很容易掉進貧窮人口的行列。\n</p>\n\n</td>\n</tr>\n</table>\n', 0, '2013-07-07 10:54:55'),
(18, '禮貌', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id18.gif></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\n<p>禮貌是指人與人之間和諧相處的意念和行為，是言談舉止對別人尊重與友好的體現。 禮貌是處理人與人之間關係的一種規範，是人們在日常交往中應當共同遵守的道德準則。 它包含著對他人的尊重、寬容、謙讓、與人為善等良好品質。</p>\n<div class=contentsubtitle>禮貌在中國的地位</div>\n<p>中國是世界聞名的禮儀之邦，“禮”是中國文化的突出精神，也是中國古代倫理思想的基本概念之一。 好禮、有禮、注重禮儀是中國人立身處世的重要美德。 <br><br>\n中國文化認為，禮是人與動物相區別的標誌。 “凡人之所以為人者，禮儀也。”（《禮記·冠義》）禮是治國安邦的根本。 “禮，經國家，定社稷，序民人，剩後嗣者也。”（《左傳·隱公十五年》）禮同時又是立身之本和區分人格高低的標準。 《詩經》言：“ 人而無禮 ，胡不遄死？”孔子說：“不學禮，無以立。”中國倫理文化從某種意義上可以說是“禮儀文化”。 “禮”是中華民族的美德之一。</p>\n</td>\n</tr>\n</table>\n\n', 1, '2013-07-09 13:29:43'),
(19, '市容', '市容', 0, '2013-06-21 17:55:02'),
(20, '食品安全問題', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id21.jpg></td><td valign=top style=\\"padding-left:5px;\\">\n<p>今年前幾個月，曝光的食品安全事件數量已經超過去年全年總數。這一方面說明食品安全問題的嚴峻形勢，另一方面也說明打擊力度在不斷加大。然而，從奶粉中的三聚氰胺，到養雞企業使用的抗生素，一些影響較大的食品安全事件，要麼是因消費者健康受損被曝光，要麼是媒體採訪調查被揭露，主動、及時的發現仍然較少。\n	食品生產加工單位數量龐大，食品的流通環節也範圍甚廣。面對數百倍甚至上千倍于監管人員的監管對象，監管部門不可能靠人力對一家家企業、一個個生產個體進行全天候監督，要第一時間發現問題、有力有效防治問題，確實有難度。同時，新業態、新技術的出現，也讓監管難度更大。	\n	採取有獎舉報、鼓勵公眾提供線索，就是解決監管部門“看不全、看不到”的特效藥。要讓這項措施充分發揮作用，就要利用有效傳播媒介，讓舉報內容、舉報途徑、獎金額度更深入人心。有些地方的監管部門，以群發短信的方式，告知社會“歡迎舉報，舉報有獎”，就取得了很好的效果。\n</p>\n\n</td>\n</tr>\n</table>', 0, '2013-06-27 04:42:16'),
(21, '假貨', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id21.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\n<p>假貨，又稱贗品，仿製品的一種，模仿真貨而成，所以又為翻版一種。如果涉及品牌，就叫冒牌貨。假貨基本上都比正貨便宜，將貨就價，品質差劣。\n	由於部分假貨與正貨從肉眼上很難看出差別，所以有不少市民即使自己買了假貨都不知道，甚至有時連舖主也不知道是假貨，這對社會的發展有相當大的影響。有時假貨製作為了降低成本，不惜利用可能會危害身體的材料，導致使用了的市民造成身體不適的情況。\n</p>\n\n</td>\n</tr>\n</table>', 0, '2013-06-27 04:42:23'),
(22, '安全意識', '安全意識', 0, '2013-06-21 17:55:13'),
(23, '欺凌', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id23.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>指的是一種長時間持續的、並對個人在心理、身體和言語遭受惡意的攻擊，且因為欺凌者與受害者之間的權力或體型等因素不對等，而不敢或無法有效的反抗。</p>\r\n<div class=contentsubtitle>成因</div>\r\n<p>校園霸凌源自社會學習，孩童的人格養成與家庭生活有密切關聯，家人，尤其父母，通常是孩童的第一個重要他人。這些重要他人對孩童的身心發展有舉足輕重的影響，少或從未給予孩童關懷的父母，其子女極可能成為霸凌加害人。因為霸凌是一種學習行為，霸凌者通常都有攻擊前科，而攻擊則從模仿而來。</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n\r\n', 1, '2013-07-31 09:57:18'),
(24, '教育制度', '教育制度', 0, '2013-06-21 17:55:21'),
(25, '交通問題', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id25.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>主要問題</div>\r\n<p>交通堵塞、車位不足、環境污染</p>\r\n<div class=contentsubtitle>主要成因</div>\r\n<p>交通堵塞:地少人多、車輛甚多、良好經濟令交通大增、城市延伸、交通流量集中、道路曲折、人車爭路</p>\r\n<p>車位不足:市區土地有限</p>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 0, '2013-06-28 10:00:17'),
(26, '隱居青年', '隱居青年', 0, '2013-06-21 18:30:34'),
(27, '人口販賣', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id27.jpg width="80%" height="100%"></td><td valign=top style=\\"padding-left:5px;\\">\n<div class=contentsubtitle>定義</div>\n<p>人口販賣是指以剝削、利用為目的，而進行的招募、運輸、移送、提供或取得某人。人口販賣的過程通常會牽涉到非法的手段，例如以暴力威脅、其他形式的強迫、綁架、詐騙等方式。剝削的內容包括強迫賣淫或其他類型的性剝削、強迫勞動、奴役、摘除器官等。兒童的剝削形式也包括非法的跨國收養、強迫在年幼時結婚、招募為童兵、或是進行非自願的乞討。</p>\n<p>被販賣的受害者通常來自世界上工作機會有限、經濟較貧困的地區，也大多是該社會上的弱勢族群，例如逃家的兒童、難民等（尤其是在一些戰後地區，例如科索沃和波斯尼亞黑塞哥維那），但受害者也可能來自各種社會背景、階層、或種族。</p>\n</td>\n</tr>\n</table>', 10, '2013-07-08 23:34:54'),
(28, '疾病', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id28.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>疾病是生物在一定原因的損害性作用下，因自穩調節紊亂而發生的異常生命活動過程。</p>\r\n<div class=contentsubtitle>影響</div>\r\n<p>機體對病因所引起的損害發生一系列抗損害反應；自穩調節的紊亂，損害和抗損害反應，表現為疾病過程中各種複雜的機能、代謝和形態結構的異常變化，而這些變化又可使機體各器官系統之間以及機體與外界環境之間的協調關係發生障礙，從而引起各種癥狀、體征和行為異常,特別是對環境適應能力和體力減弱甚至喪失。</p>\r\n<div class=contentsubtitle>常見疾病類型</div>\r\n<p>傳染病、非傳染性疾病、食源性疾病、空氣傳播疾病、生活習慣病、精神障礙、器質性病變</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 0, '2013-06-28 10:15:25'),
(29, '澳門留級率全球之冠', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><img src=contentphoto/id29.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>報導(力報)</div>\n<p>根據統計局資料顯示， 本澳目前共有78所中、小學校，學生需按照就讀學校或投考學校之標準來評核是否升學。可惜現時各間學校均各自為政，升留級標準不一，沒有統一的考試機制。而有議員表示，本澳評核學生升留級的標準竟多達約120種，某些一條龍學校（同時提供中、小學課程），擁有超過一種的評核標準，令到學生無所適從，無法跟上學校的進度，導致本澳的留級率高達43.7%，居世界首位。有見及此，本報特意找來教育界人士，深入探討造成留級率高的原因，及其解決辦法。<br><br>\n小學、初中及高中三個學習階段，大部分市民都認為高中學習的知識比較困難，小學及初中較容易，但事實上，初中的留級率卻是三者之冠，初中留級率達11.8%， 比小學4.2% 及高中4.8% 高出一倍有多。根據經濟合作與發展組織編製的《教育公平和質量：支持弱勢學生和學校》研究報告中，有關學生在15 歲時至少有一次留班紀錄的百分比中，本澳的留級率最高達43.7%，而經濟合作與發展組織國家的報告指出世界各地留級率的平均數為13%，相比下澳門留級率高出逾兩倍。中華教育會理事長何少金稱，「初中留級率高係因為學生啱啱小學升上嚟，一下子應付唔到咁多科目，要用一段時間先調節到自己嘅學習方式。」學生除了要適應新的學習生活，他們同時要面對環境的改變及避免受到同儕不良的誘惑，及經歷青少年的反叛期。<br><br>\n<p>\n<br>各地區的留級率：<br><br>\n澳門  43.7%<br><br>\n巴西	 40.1%<br><br>\n法國	 36.8%<br><br>\n葡萄牙 35%<br><br>\n墨西哥 21.6%<br><br>\n香港	 15.6%<br><br>\n世界平均值 13%<br><br>\n 歷史留下來的問題<br><br>\n現時本澳有120多種升留級標準，各間學校的升留級評核制度不一，間接令學生難以調節學習方式，是本澳的留級率高的主因。何少金表示，留級率高是歷史遺留下來的問題，早在回歸以前，為了讓華人子女可以受到教育，所以不少社團及民間組織興辦私校，「私校係由社會上唔同嘅機構同社團興辦，所以各間學校都有唔同嘅制度。」何更指出，就算同一間一條龍式的學校，其中、小學升留級標準也有不同，會令學生無所適從。另外，從上世紀70、80年代開始，學校都是由社團、組織或個人名義辦校，導致本澳學校大多以私校為主，形成各種不同的評核制度，這亦是導致留級率高的原因之一。<br><br>\n教育方向仍在摸索當中<br><br>\n「至今本澳仍未有一套適合的教育評核標準，本澳是否應仿照鄰近地區設立統一的教育評核標準？」何少金表示，本澳留級率高一直是教育界所關注的問題，經過教育界各方面的努力，近年留級率有稍微下降的趨勢，「澳門的情況同香港唔一樣，如果要好似香港咁，對澳門嚟講唔係一件簡單嘅事。」何更指出，教育學生不是用數字來衡量，而是用質量來評定教育效果，教育界應從制度一步一步改變，首先是要解決現時擁有的120多種升留級評核標準， 不是盲目跟隨鄰近地區的做法， 何認為澳門要尋找一條適合自己教育方向的道路，而這條道路是需要時間去尋找。\n</p>\n\n</td>\n</tr>\n</table>\n\n', 1, '2013-07-31 10:02:09'),
(30, '關懷', '關懷', 0, '2013-06-21 18:32:05'),
(31, '捐錢', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/id31.jpg></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>指人們不要求任何利益下把金錢捐贈給一些慈善機構等。</p>\r\n<div class=contentsubtitle>捐款的理由</div>\r\n<p>現在天災常見，加上地球上有很多貧困的部落，所以我們可以透過捐款這個途徑去令一些貧困的人可以改善他們的生活。</p>\r\n\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 0, '2013-07-09 14:42:39'),
(32, '捐血', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\r\n<tr>\r\n<td><img src=contentphoto/></td><td valign=top style=\\"padding-left:5px;\\"><div class=contentsubtitle>定義</div>\r\n<p>指捐血者自願捐獻全血、血漿或血液成分，而不收取任何報酬的行為。這些血液通常存儲在血庫中，由醫療單位、血站或紅十字會保管，以備需要者輸血時使用。</p>\r\n<div class=contentsubtitle>捐血的技術分類</div>\r\n<p>目前捐血分為捐獻全血、捐獻血漿、捐獻成分血（成分捐血）。目前較為普遍的成分捐血是機採血小板。其次有白血球分離捐血，但因為沒有急迫性，加上可以透過全血分離出來，故較少見。</p>\r\n<div class=contentsubtitle>捐血的好處</div>\r\n<p>人體血液的紅細胞的壽命大約為110～120天，平均每4個月要更新一次。捐血能夠刺激骨髓中的造血幹細胞活動，促進新陳代謝，增加新生血紅細胞的含量，有益於身體健康。</p>\r\n</td>\r\n</tr>\r\n</table>\r\n\r\n', 12, '2013-07-31 10:04:50'),
(34, '貪污', '<table width=98% style=\\"padding-left:5px;padding-top:10px;\\">\n<tr>\n<td><iframe width="560" height="315" src="http://www.youtube.com/embed/mckk7JIG0p8" frameborder="0" allowfullscreen></iframe></td><td valign=top style=\\"padding-left:5px;\\">\n	<p>歐文龍貪污案是指歐文龍在2000年至2006年間擔任澳門運輸工務司司長期間涉及貪污舞弊的案件。由於涉案數字驚人，歐文龍貪污數目是出任司長期間的薪俸56倍之多，因而有「澳門開埠最大貪污案」、「世紀貪污案」、「司長貪污案」等別稱。由於歐文龍在拘捕後即時被免職，因此是為香港回歸及澳門回歸以來因貪污而被革職的主要官員，而媒體猜測此案更有可能涉及前行政長官何厚鏵。</p>\n<p>\n聆訊時歐文龍被控41項受賄、30項洗黑錢及2項濫權罪，另外3項分別是在法律行為中分享利益、發表虛假聲明及財產來歷不明合共76項罪名。2008年1月30日下午四時，澳門終審法院裁定40項收受商人賄款，批出工務工程，及13項清洗黑錢罪名成立，判歐文龍入獄27年，罰款24萬元。\n</p>\n</td>\n</tr>\n</table>\n\n', 0, '2013-06-26 09:51:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
