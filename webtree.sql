-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 13, 2019 lúc 06:22 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webtree`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `birth` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `taikhoan`, `pass`, `name`, `sex`, `birth`, `phone`, `address`, `mail`) VALUES
(1, 'admin1@admin.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Nguyễn Văn Đạt', 'Nam', '09/10/1997', '0969991097', 'Xuân Kiên, Xuân Trường, Nam Định', 'nguyendatbk910@gmail.com'),
(2, 'admin@admin.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Nguyễn Văn Đạt', 'Nam', '09/10/1997', '0969991097', 'Xuân Kiên, Xuân Trường, Nam Định', 'nguyendatbk910@gmail.com'),
(3, 'Nguyendat910', '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Văn Đạt', 'Nam', '09/10/1997', '0969991097', '322 lê trọng tấn', 'Dat.nv154484@sis.hust.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baicung`
--

CREATE TABLE `baicung` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `baicung`
--

INSERT INTO `baicung` (`id`, `name`, `date`, `content`) VALUES
(1, 'VĂN KHẤN TẠI ĐÌNH, ĐỀN, MIẾU, PHỦ', ' ', '1. Ý nghĩa truyền thống\r\nTheo tập tục văn hoá truyền thống, ở mỗi tỉnh thành, làng, xã Việt Nam đều có các Đình,\r\nĐền, Miếu, Phủ là nơi thờ tự Thần linh, Thành Hoàng, Thánh Mẫu.\r\nCác vị Thần linh, Thành Hoàng, Thánh Mẫu là các bậc tiền nhân đã có công với cộng\r\nđồng làng xã, dân tộc trong lịch sử đấu tranh giữ nước và dựng nước của người Việt\r\nNam.\r\nNgày nay, theo nếp xưa người Việt Nam ở khắp mọi miền đất nước hàng năm vẫn đi lễ,\r\nđi trẩy Hội ở các Đình, Đền, Miếu, Phủ vào các ngày lễ, tết, tuần tiết, sóc, vọng và ngày\r\nHội, để tỏ lòng tôn kinh, ngưỡng mộ biết ơn các bậc Tôn thần đã có công với đất nước.\r\nĐình, Đền, Miếu, Phủ cùng với sự lưu truyền sự linh diệu của các thần trong nhiều\r\ntrường hợp đã đi vào trang sử oai hùng của dân tộc Việt Nam góp phần không nhỏ vào\r\nviệc duy trì tình cảm yêu nước.\r\nNơi thờ tự Đình, Đền, Miếu, Phủ còn là những nơi sinh hoạt tâm linh, tín ngưỡng. Con\r\nngười hy vọng rằng bằng những hành vi tín ngưỡng, có thể cầu viện đấng Thần linh phù\r\nhộ cho bản thân, cùng gia đình, cộng đồng được an khang, thành đạt và thịnh vượng, yên\r\nbình, biến hung thành cát, giải trừ tội lỗi…\r\n2. Sắm lễ\r\nTheo phong tục cổ truyền khi đến Đình, Đền, Miếu, Phủ nên có lễ vật có thể to, nhỏ,\r\nnhiều, ít, sang, mọn tuỳ tâm. Mặc dù ở những nơi này thờ Thánh, Thần, Mẫu nhưng\r\nngười ta vẫn có thể sắm các lễ chay như hương hoa quả, oản,… để dâng cũng được.\r\nLễ Chay: Gồm hương hoa, trà, quả, phẩm oản… dùng để lễ ban Phật, Bồ Tát (nếu có).\r\nLễ chay cũng dùng để dâng ban Thánh Mẫu. Trong trường hợp này sắm thêm một số\r\nhàng mã để dâng cũng như: tiền, vàng, nón, hia…\r\nLễ Mặn: Gồm gà, lợn, giò, chả… được làm cẩn thận, nấu chín. Nếu có lễ này thì đặt bàn\r\nthờ Ngũ vị quan lớn tức là ban công đồng.\r\nLễ đồ sống: Gồm trứng, gạo, muối hoặc thịt mồi (một miếng thịt lợn khoảng vài lạng).\r\nĐây là lễ dành riêng cho việc dâng cúng quan Ngũ Hổ, Bạch xà, Thanh xà đặt ở hạ ban\r\nCông Đồng Tứ phủ. Theo lễ thường thì gồm 5 quả trứng vịt sống đặt trong một đĩa muối,\r\ngạo, hai quả trứng gà sống đặt trong hai cốc nhỏ, một miếng thịt mồi được khía (không\r\nđứt rời) thành năm phần, để sống. Kèm theo lễ này cũng có thêm tiền vàng.\r\nCỗ mặn sơn trang: Gồm những đồ đặc sản Việt Nam: cua, ốc, lươn, ớt, chanh quả…\r\nNếu có gạo nếp cẩm nấu xôi chè thì cũng thuộc vào lễ này. Theo lệ thường, khi sắm lễ\r\nmặn sơn trang, người ta thường sắm theo con số 15: 15 con ốc, cua, 15 quả ớt, chanh\r\nhoặc có thể chỉ cần 1 quả nhưng được khía ra làm 15 phần…\r\nCon số 15 này tương ứng với 15 vị được thờ tại ban sơn trang:\r\n- 1 vị chúa\r\n- 2 vị hầu cận\r\n- 12 vị cô sơn trang\r\nLễ ban thờ cô, thờ cậu: Thường gồm oản, quả, hương hoa, hia, hài, nón, áo… (đồ hàng\r\nmã) gương, lược… Nghĩa là những đồ chơi mà người ta thường làm cho trẻ nhỏ. Nhưng\r\nlễ vật này cầu kỳ, nhỏ, đẹp và được bao trong những túi nhỏ xinh xắn, đẹp mắt.\r\nLễ thần Thành Hoàng, Thư điền: Thường dùng lễ mặn: chân giò lợn luộc, xôi, rượu,\r\ntiền, vàng…\r\n3. Trình tự dâng lễ\r\nTheo lệ thường, người ta lễ thần Thổ địa, thủ Đền trước, gọi là lễ trình. Gọi là lễ trình vì\r\nđó là lễ cáo Thần linh Thổ Địa nơi mình đến dâng lễ. Người thực hành tín ngưỡng cáo lễ\r\nThần linh cho phép được tiến hành lễ tại Đình, Đền, Miếu, Phủ.\r\nSau đó người ta sửa sang lễ vật một lần nữa. Mỗi lễ đều được sắp bày ra các mâm và\r\nkhay chuyên dùng vào việc cúng lễ tại Đình, Đền, Miếu, Phủ.\r\n– Kế đến là đặt lễ vào các ban. Khi dâng lễ phải kính cẩn dùng hai tay dâng lễ vật, đặt\r\ncẩn trọng lên bàn thờ. Cần đặt lễ vật lên ban chính trở ra ban ngoài cùng.\r\n– Chỉ sau khi đã đặt xong lễ vật lên các ban thì mới được thắp hương.\r\n– Khi làm lễ, cần phải lễ từ ban thờ chính đến ban ngoài cùng. Thường lễ ban cuối cùng\r\nlà ban thờ cô thờ cậu.\r\n– Thứ tự khi thắp hương: Thắp từ trong ra ngoài\r\nBan thờ chính của điện được đặt theo hàng dọc, ở gian giữa được thắp hương trước.\r\nCác ban thờ hai bên được thắp hương sau khi đã thắp xong hương ban chính ở gian giữa.\r\nKhi thắp hương cần dùng số lẻ: 1, 3, 5, 7 nén. Thường thì 3 nén.\r\nSau khi hương được châm lửa thì dùng hai tay dâng hương lên ngang trán, vái ba vái rồi\r\ndùng cả hai tay kính cẩn cắm hương vào bình trên ban thờ.\r\nNếu có sớ tấu trình thì kẹp sớ vào giữa bàn tay hoặc đặt lên một cái đĩa nhỏ, hai tay nâng\r\nđĩa sớ lên ngang mày rồi vái 3 lần.\r\nTrước khi khấn thường có thỉnh chuông. Thỉnh ba hồi chuông. Thỉnh chuông xong thì\r\nmới khấn lễ.\r\nKhi tiến hành lễ dâng hương bạn có thể đọc văn khấn, sớ trình trước các ban, hoặc chỉ\r\ncần đặt văn khấn, sớ trình lên một cái đĩa nhỏ, rồi đặt vào mâm lễ dâng cúng cũng được.\r\nKhi hoá vàng thì phải hoá văn khấn và sớ trước.\r\n4. Hạ lễ\r\nSau khi kết thúc khấn, lễ ở các ban thờ, thì trong khi đợi hết một tuần nhang có thể viếng\r\nthăm phong cảnh nơi thừa tự, thờ tự.\r\nKhi thắp hết một tuần nhang có thể thắp thêm một tuần nhang nữa. Thắp nhang xong, vái\r\n3 vái trước mỗi ban thờ rồi hạ tiền, vàng… (đồ mã) đem ra nơi hoá vàng để hoá. Khi hoá\r\ntiền, vàng… cần hoá từng lễ một, từ lễ của ban thờ chính cho tới cuối cùng là lễ tiền\r\nvàng… ở ban thờ Cô thờ cậu.\r\nHoá tiền vàng xong mới hạ lễ dâng cúng khác. Khi hạ lễ thì hạ từ ban ngoài cùng vào\r\nđến ban chính.\r\nRiêng các đồ lễ ở bàn thờ Cô, thờ Cậu như gương, lược… thì để nguyên trên bàn thờ\r\nhoặc giả nơi đặt bàn thờ này có nơi để riêng thì nên gom vào đó mà không đem về.\r\n5. Văn khấn Thành hoàng ở Đình, Đền, Miếu\r\n– Con lạy chín phương trời, mười phương Chư Phật, Chư Phật mười phương.\r\n– Con kính lạy Hoàng Thiên Hậu Thổ chư vị Tôn thần.\r\n– Con xin kính lạy ngài Kim Niên Đương cai Thái tuế chí đức Tôn thần.\r\n– Con kính lạy ngài Bản cảnh Thành Hoàng chư vị Đại Vương.\r\nHưởng tử con là ............................................................ Tuổi ...............................\r\nNgụ tại...................................................................................................................\r\nHôm nay là ngày…… tháng……năm…..(Âm lịch)\r\nHương tử con đến nơi .................................................. (Đình hoặc Đền hoặc Miếu) thành\r\ntâm kính nghĩ: Đức Đại Vương nhận mệnh Thiên đình giáng lâm ở nước Việt Nam làm\r\nBản cảnh Thành Hoàng chủ tể một phương bấy nay ban phúc lành che chở cho dân. Nay\r\nhương tử chúng con thành tâm dâng lên lễ bạc, hiến tế hương hoa, phẩm oản…\r\nCầu mong đức Bản cảnh Thành hoàng chư vị Đại Vương chứng giám, rủ lòng thương\r\nxót, phù hộ che chở cho chúng con sức khoẻ dồi dào, mọi sự tốt lành, lắm tài nhiều lộc,\r\nan khang thịnh vượng, sở cầu như ý, sở nguyện tòng tâm.\r\nHương tử con lễ bạc tâm thành, trước án kính lễ, cúi xin được phù hộ độ trì. Phục duy\r\ncẩn cáo!\r\n6. Văn khấn ban Công Đồng\r\n– Con lạy chín phương trời, mười phương Chư phật, Chư phật mười phương\r\n– Con lạy đức Vua cha Ngọc Hoàng Thượng Đế\r\n– Con lạy Tam Toà Thánh Mẫu\r\n– Con lạy Tam phủ Công Đồng, Tứ phủ Vạn linh\r\n– Con lạy Tứ phủ Khâm sai\r\n– Con lạy Chầu bà Thủ Mệnh\r\n– Con lạy Tứ phủ Đức Thánh Hoàng\r\n– Con lạy Tứ phủ Đức Thánh Cô\r\n– Con lạy Tứ phủ Đức Thánh Cậu\r\n– Con lạy cộng đồng các Giá, các Quan, mười tám cửa rừng, mười hai cửa bể.\r\n– Con lạy quan Chầu gia.\r\nHương tử con là:…………………………………….Tuổi………………….. Cùng đồng\r\ngia đại tiểu đẳng, nam nữ tử tôn\r\nNgụ tại:……………………………………………………….\r\nHôm nay là ngày…… tháng…… năm………………(Âm lịch). Tín chủ con về\r\nĐền…………… thành tâm kính lễ, xin Chúa phù hộ độ trì cho gia đình chúng con sức\r\nkhoẻ dồi dào, phúc thọ khang ninh, cầu tài đắc tài, cầu lộc đắc lộc, cầu bình an đắc bình\r\nan, vạn sự hanh thông, gặp nhiều may mắn.\r\nPhục duy cẩn cáo!\r\n7. Văn khấn lễ Tam Toà Thánh Mẫu\r\nĐức đệ tứ khâm sai Thánh Mẫu, tứ vi chầu bà, năm toà quan lớn, mười dinh các quan,\r\nmười hai Tiên cô, mười hai Thánh cậu, ngũ hổ Đại tướng, Thanh Hoàng Bạch xà đại\r\ntướng\r\n– Con kính lạy Đức Hiệu Thiên chí tôn kim quyết Ngọc Hoàng Huyền khung cao\r\nThượng đế.\r\n– Con kính lạy Hoàng Thiên Hậu Thổ chư vị Tôn thần.\r\n– Con xin kính Cửu trùng Thanh Vân lục cung công chúa.\r\n– Con kính lạy Đức thiên tiên Quỳnh Hoa Liễu Hạnh Mã Hoàng Công chúa, sắc phong\r\nChế Thắng Hoà Diệu đại vương, gia phong Tiên Hương Thánh Mẫu.\r\n– Con kính lạy Đức đệ nhị đỉnh thượng cao sơn triều mường Sơn tinh công chúa Lê\r\nMại Đại Vương.\r\n– Con kính lạy Đức đệ tứ khâm sai Thánh Mẫu, tứ vi chầu bà, năm toà quan lớn, mười\r\ndinh các quan, mười hai Tiên cô, mười hai Thánh cậu, ngũ hổ Đại tướng, Thanh Hoàng\r\nBạch xà đại tướng.\r\nHưởng tử con là .............................................................. Tuổi .................................\r\nNgụ tại.........................................................................................................................\r\nHôm nay là ngày…… tháng.…..năm…….(Âm lịch)\r\nHương tử con đến nơi Điện (hoặc Phủ, hoặc Đền)………chắp tay kính lễ khấu đầu vọng\r\nbái, lòng con\r\nthành khẩn, dạ con thiết tha, kính dâng lễ vật, cúi xin các Ngài xót thương phù hộ độ trì\r\ncho gia đạo chúng con sức khoẻ dồi dào, phúc thọ khang ninh, cầu tài đắc tài, cầu lộc đắc\r\nlộc, cầu bình an đắc bình an, vạn sự hanh thông, gặp nhiều may mắn.\r\nHương tử con lễ bạc tâm thành, trước án kính lễ, cúi xin được phù hộ độ trì. Phục duy\r\ncẩn cáo!														'),
(2, 'BÀI CÚNG CẦU SIÊU CHO CÁC VONG VÀ HÀI NHI', '', 'Trong cuộc sống đôi khi vì hoàn cảnh không mong muốn mà ta phải từ bỏ đi giọt máu\r\ncủa chính mình hoặc chẳng may bạn không giữ được đứa con của chính mình. Chính vì\r\nvậy bạn nên làm lễ cầu siêu cho các vong linh bé bỏng để tâm hồn cảm thấy thanh thản\r\nhơn. Trong bài viết này Web xin được gửi đến các bạn bài cúng cầu siêu cho các vong\r\nvà hài nhi và cách làm lễ cúng cầu siêu để các bạn cùng tham khảo.\r\nBước vào mùa Vu lan đồng thời cũng là mùa cầu siêu cho vong linh tháng 7. Chúng ta,\r\nai cũng có cha mẹ, ông bà, gia tiên, cửu huyền thất tổ. Hầu như tất cả các gia đình bên\r\nPhật giáo hay lương (dân gian đơn thuần) đều có lễ cúng cơm hay đốt vàng mã cho gia\r\ntiên vào dịp này với tâm tư tưởng nhớ và cầu siêu cho người quá vãng. Nhưng trong đó\r\ncó những vong nhi chưa kip làm người, lại không bao giờ được một lời cầu chúc siêu\r\nsinh bởi các vong nhi đó chưa có sự hiện diện trên cõi đời. Đồng thời từ sâu thẳm, nó lại\r\nlà nỗi đau một thời thầm kín, những sai lầm tuổi trẻ, của chị em nên nhiều khi người ta\r\ncố quên đi... hoặc đơn giản do hoàn cảnh điều kiện mà không thể sinh thêm những bé thứ\r\n2, thứ 3, thứ 4... \"do vỡ kế hoạch\" hay con chẳng may sa sẩy khi chưa kịp làm người. Dù\r\nlà lý do gì thì chúng ta đều tiếc và buồn vì những điều đó.\r\nĐôi khi chúng ta gặp những cản trở trong cuộc sống, đôi khi chúng ta cứ lận đận, long\r\nđong, đôi khi con cái chúng ta cứ ốm yếu hay quấy quả mà không rõ nguyên nhân...\r\nChúng ta mệt mỏi nhưng không biết do đâu, đôi khi lòng chúng ta day dứt một cách mơ\r\nhồ về một điều gì đó…\r\nNếu thực tâm, các bạn dù vô tình hay cố ý đã phạm lầm lỡ, các bạn hãy tìm cách hóa giải\r\nnghiệp chướng đó cho lòng thanh thản. Cho những vong nhi được ngậm cười, yên lòng\r\nđi đầu thai nơi cửa khác. Web xin được chia sẻ tới các bạn cách tự cúng cầu siêu\r\ncho các vong một cách đơn giản như sau.\r\n1. Cách làm lễ cầu siêu cho thai nhi\r\nCúng 2 ngày trong tháng (Vào ngày 16 âm lịch & mùng 2 âm lịch), đặt mâm cúng để\r\ntrên cái bàn nhỏ phía trước cửa, nửa trong nửa ngoài, tức là nửa trong nhà,nửa ngoài bậc\r\nthềm cửa, không được đặt trên bàn thờ.) do thai nhi không được xác nhận là con cháu\r\ntrong gia tiên, nên thần tài thổ địa không cho vào nhà nhận đồ. Quý vị lưu ý chỉ cần thụ\r\nthai được khoảng 13 ngày thì thai nhi đẫ có linh hồn chứng thai rồi nhé.\r\nTrường hợp ngại có thể đến chùa cúng, nhưng không cúng trước mặt tượng PHẬT hay\r\nThần Thánh, vong thai nhi sẽ không dám nhận, nên tìm 1 vị trí khuất tượng để dễ cúng\r\nlễ.\r\n2. Sắm lễ cúng cầu siêu\r\nĐồ cúng rất đơn giản:\r\nSữa ông thọ pha ra ly hoặc sữa hộp nhỏ (cô gái Hà Lan, Vinamilk. vv...kèm ống\r\nhút).\r\nBánh kẹp loại ngon (không phải loại cúng cô hồn), Socola càng tốt.\r\nTùy bạn bỏ hay mất bao nhiêu thai nhi, thì cứ 1 thai nhi là 2 bộ quần áo giấy nam,\r\nnữ (nếu như không biết giới tính thai nhi) kèm theo giấy tiền vàng bạc.\r\n3. Văn cúng cầu siêu\r\n\"OM AH HUNG Xin nhờ lửa làm tan chảy không còn sót những món diệu dục đơn giản\r\nnhưng quí giá này hóa một đám mây vô tận trong không gian thành một tiệc cúng dường\r\nkhông chấp trước, xin cho con dâng cúng lên chín phương Trời mười Phương Phật chư\r\nPhật mười phương.\r\nHôm nay là ngày... tháng... năm... Tín chủ con là... ở tại số nhà... thành kính dâng lên\r\ncúng dường Chư Phật mong Chư Phật ban phước cho toàn thể chúng sinh không chừa\r\nsót một ai những điều an lành nhất. Con cũng xin nhờ vào tiệc cúng dường này, ánh sáng\r\ntừ bi và trí tuệ của Chư phật sẽ hiện hữu trong tâm con và tất cả mọi người đồng thời\r\nchiếu sáng tất thảy các cõi khác để tất thảy hướng về Phật Pháp. Con nguyện với lòng\r\nthành tâm của mình trước Chư Phật xin được sám hối mọi lỗi lầm do thân khẩu ý con đã\r\nphạm phải từ trước tới nay.\r\nCon xin cúng dường tới các chư thiên, thiện thần, hộ pháp mong các ngài che chở cho\r\ncon cùng gia đình luôn an lành, thoát khỏi mọi thế lực xấu và ác của cõi dương và cõi\r\nâm.\r\nCon cũng xin được nhờ vào lễ hỏa cúng này, hồi hướng cầu siêu cho tất cả các chúng\r\nsinh không chừa sót một ai đang lang thang trong cõi thân trung ấm hay cõi âm để họ bớt\r\nsợ hãi, đau khổ và nhanh chóng được chuyển nghiệp. Con cầu xin được cầu siêu cho cửu\r\nhuyền thất tổ gia tiên gia tộc họ... cho cha..., mẹ... hay.... được hoan hỉ và sớm siêu thoát\r\nvề nơi cực lạc hay cõi an lành khác\".\r\n(Bỏ đồ cúng cho vong nhi vào đốt... rồi khấn tiếp): \"Đặc biệt con xin được thành tâm\r\nsám hối cho nghiệp sát con phạm phải đối với các hài nhi đã từng kết duyên cùng con mà\r\ncon chối bỏ. Cầu mong các hài nhi tha thứ và xóa bỏ mọi tâm tư oán hờn gây chướng\r\nngại tới con, cầu mong các vong nhi buông bỏ và sớm chuyển đầu thai vào các cõi an\r\nlành mới. Cầu mong tất cả các vong nhi khác cũng đều hoan hỉ và siêu thoát như vậy.\r\nCon nguyện sẽ gắng làm những điều thiện để hồi hướng, trợ duyên cho các vong nhi\r\nsớm được siêu thoát (nguyện thêm gì tùy tâm khấn ra...). Cầu mong cho lời nguyện lành\r\ncủa con được thành sự thật. Nếu đã tu thì đọc mật chú, nếu không biết thì đọc thần chú\r\nsáu âm của Bồ tát Quán Thế Âm \"OM MA NI PADE ME HUM\" 108 lần. [Cách đọc:\r\n\"ôm ma ni pát đờ (đờ đọc thầm âm gió) mê hum\". (Không bắt buộc đọc câu này).\r\nSau khi cúng xong hãy nói: \"Lễ hỏa cúng đến đây là kết thúc, xin được mời các ngài và\r\ncác chư vị an tọa về nơi trụ xứ của mình và chỉ trở lại khi gia chủ có lời thỉnh mời. Xin\r\ncác vong hãy hoan hỷ đón nhận tấm lòng thành của gia chủ mà sớm được siêu thoát\".\r\nCũng xin che chở cho gia chủ mọi sự được tốt đẹp an lành. Gia chủ xin cảm tạ.																													'),
(3, 'BÀI VĂN KHẤN CÚNG LỄ TẤT NIÊN CUỐI NĂM', '', 'Bài văn khấn cúng Lễ Tất Niên sẽ được sử dụng cho các gia đình trong dịp cúng Tất\r\nNiên cuối năm. Lễ Tất Niên thường diễn ra ở thời điểm năm cũ sắp qua đi và chuẩn bị\r\nđón chào những ngày đầu năm mới, các gia đình tại Việt Nam thường tổ chức một bữa\r\ncơm cuối năm kèm theo đó là một mâm lễ cúng tổ tiên gọi là Lễ tất niên. Thông thường\r\nLễ tất niên hay được tiến hành vào chiều 30 tết hoặc 29, 28, 27 âm lịch… Mời bạn tải\r\nmẫu Bài cúng tất niên sau để hoàn tất cho thủ tục cúng tất niên cuối năm.\r\nMời bạn đọc tải Văn khấn Lễ Tất niên về máy hoặc in ra để chuẩn bị cho mình một bài\r\ncúng thật hay, ý nghĩa và thành tâm nhất đến ông bà, tổ tiên của mình.\r\n1. Ý nghĩa của cúng Tất niên\r\nTất niên còn gọi là Lễ Tất niên hay tiệc Tất niên là một nghi thức nhằm đánh dấu kết\r\nthúc một năm và chuẩn bị bước sang năm mới. Đây là phong tục tập quán lâu đời và\r\nmang nét đẹp văn hóa của người Việt Nam.\r\nLễ Tất niên được tiến hành vào chiều ngày 30 Tết. Vào ngày này, mọi người thường\r\nquây quần bên nhau, tổ chức tiệc mừng, văn nghệ, để tổng kết, nhìn lại một năm đã qua,\r\ncùng đón giao thừa và mừng năm mới. Họ tận hưởng bầu không khí ấm cúng và tràn\r\nngập niềm vui bên cạnh các thành viên trong gia đình sau một năm tất bật học tập, làm\r\nviệc và chạy đua với cuộc sống.\r\nCúng Tất niên cũng thể hiện một nếp sống tâm linh của người Việt. Sau một năm làm ăn\r\nvất vả, vào những ngày cuối năm, mọi người đều dọn dẹp nhà cửa sạch sẽ, tươm tất để\r\ncúng Tất niên và chuẩn bị đón Tết.\r\n2. Cách sắm lễ cúng Tất niên\r\nLễ Tất niên thường được các gia đình chuẩn bị trang trọng vào chiều 30 Tết, sau khi đã\r\nvệ sinh nhà cửa, trang hoàng, bày biện ban thờ đầy đủ, con cháu xôm tụ về đông vui.\r\nLễ vật cũng như mâm cơm cúng Tất niên không nặng về vật chất, tùy theo điều kiện và\r\ntâm ý của gia chủ mà chuẩn bị.\r\nSong thông thường cúng Tất niên cần sắm lễ như sau:\r\nMâm ngũ quả, hương hoa, giấy tiền vàng mã, đèn nến, trầu cau, rượu, trà, bánh chưng\r\n(hoặc bánh tét).\r\nCỗ mặn hoặc chay với đầy đủ các món ăn ngày Tết, được chế biến thơm ngon tinh khiết,\r\nbày biện đầy đặn, trang nghiêm.\r\n3. Bài cúng tất niên cuối năm\r\nNam Mô A Di ĐàPhật! Nam Mô A Di ĐàPhật! Nam Mô A Di ĐàPhật!\r\n- Con kính lạy chín phương trời, mười phương chư Phật, chư Phật mười phương.\r\n- Con kính lạy Hoàng thiên, Hậu Thổ, chư vị Tôn thần.\r\n- Con kính lạy ngài Kim niên Đương cai Thái Tuế chí đức tôn thần.\r\n- Con kính lạy các ngài Bản cảnh Thành hoàng chư vị Đại Vương.\r\n- Con kính lạy ngài Bản xứ Thần linh Thổ địa tôn thần.\r\n- Con kính lạy các ngài Ngũ phương, Ngũ Thổ, Long mạch, Tài thần, Bản gia Táo quân,\r\ncùng tất cả các vị thần linh cai quản trong xứ này.\r\n- Con kính lạy chư gia Cao Tằng Tổ Khảo, Cao Tằng Tổ Tỷ, Tiên linh nội ngoại\r\nhọ ................. (1)\r\nHôm nay là ngày 30 tháng Chạp năm ..............(2)\r\nTín chủ (chúng) con là:..................................................................................\r\nNgụ tại:........................................................................................................\r\nTrước án kính cẩn thưa trình: Đông tàn sắp hết, năm kiệt tháng cùng, xuân tiết gần kề,\r\nminh niên sắp tới.\r\nHôm nay là ngày 30 tết chúng con cùng toàn thể gia quyến sắm sanh phẩm vật hương\r\nhoa, cơm canh thịnh soạn, sửa lễ tất niên, dâng cúng Thiên địa Tôn thần, phụng hiến tổ\r\ntiên, truy niệm chư linh. Theo như thường lệ tuệ trừ cáo tế cúi xin chư vị tôn thần, liệt vị\r\ngia tiên, bản xứ tiền hậu chư vị hương linh giáng lâm án toạ, phủ thùy chứng giám, thụ\r\nhưởng lễ vật phù hộ cho toàn gia lớn bé trẻ già bình an thịnh vượng luôn luôn mạnh khoẻ,\r\nmọi sự bình an, vạn sự tốt lành, gia đình hoà thuận.\r\nNam Mô A-di-đà Phật (cúi lạy). Nam Mô A-di-đà Phật (cúi lạy). Nam Mô A-di-đà Phật\r\n(cúi lạy)																													'),
(4, 'BÀI CÚNG TẾT CỔ TRUYỀN', '', 'Kính lạy:\r\nCác cụ Tổ khảo, Tổ tỷ, bá thúc huynh đệ, đường thượng tiên linh, và các hương hồn nội tộc, ngoại tộc.\r\nHôm nay là ngày mùng một Tết, tháng Giêng, năm............. Chúng con là: ............................................................................................Tuổi............... Hiện cư ngụ tại số nhà Đường......................................Khu phố:....................................... Phường ....................................Quận......................Thành phố.........................................\r\nNay theo tuế luật, âm dương vận hành tới tuần Nguyên đán, mồng một đầu xuân, mưa móc thấm nhuần, đón mừng năm mới. Con cháu tưởng niệm ân đức Tổ tiên như trời cao biển rộng, khôn đem tấc cỏ báo đáp ba xuân. Do đó, chúng con cùng toàn thể con cháu trong nhà sửa sang lễ vật, oản quả hương hoa kính dâng trước án.\r\nKính mời các cụ Cao tằng Tổ khảo, Cao tằng Tổ tỷ, bá thúc đệ huynh, cô di tỷ muội,\r\nnam nữ tử tôn nội ngoại, cúi xin thương xót con cháu, linh thiêng giáng về linh sàng, phù\r\nhộ độ trì con cháu, năm mới an khang, mọi bề thuận lợi, sự nghiệp hanh thông, bốn mùa\r\nkhông hạn ách nào xâm hại, tám tiết có điềm lành tiếp ứng. Tín chủ lại mời các vị vong\r\nlinh, tiền chủ, hậu chủ ở trong đất này cùng về hâm hưởng.\r\nGiải tấm lòng thành cúi xin chứng giám. Phục duy cẩn cáo!\r\nVăn cúng tết nguyên đán\r\nKính cáo chư vị chư gia Cao tằng Tổ khảo, Cao tằng Tổ tỷ, cùng chư vị tiền nhân\r\nhọ.........(ghi họ chủ nhà).\r\nChúng con là:......................................................\r\nHiện nay ở tại......................................................\r\nCùng toàn gia kính bái. Kính cẩn thưa rằng:\r\nĐất trời có vận luật, Nhật Nguyệt phải đổi thay. Mồng một (Hoặc các ngày 2,3..) hôm\r\nnay.\r\nXuân sắc tràn đầy, \"Vạn tượng canh tân\"*, \"Tam dương khai thái\"*, Toàn gia phấn khởi,\r\nThụ lộc tổ tông, \"Hải đức sơn công\"*, \"Vĩnh miên thế trạch\"*, \"Quang tiền thùy hậu\"*,\r\nVạn đại trường Xuân, Mưa móc thấm nhuần, Mừng Tết Nguyên đán, Cháu con ghi nhớ,\r\nCông đức Tổ Tiên, Kính cẩn dâng lên, Chi nghi cụ soạn.\r\n(Kể các thứ cúng)\r\n............................................\r\nCúi xin chứng giám. Lễ bạc lòng thành. Thỉnh cáo Tiên linh. Cùng vui hâm hưởng.\r\nTôn linh tại thượng, Phù hộ độ trì, Năm mới mọi bề, An khang thịnh vượng. Cẩn cáo.\r\nChú thích:\r\n* Tam dương khai thái. Theo Dịch học: Tháng giêng thuộc quẻ Thái có 3 hào dương, nên gọi là tháng Tam dương. Thái là tên quẻ. Ý chỉ Tháng Giêng là tháng mở đầu mọi sự\r\nhanh thông cả năm.\r\n* Vạn tượng canh tân: Mọi cảnh vật đều mới.\r\n* Hải Đức Sơn Công: Công đức như biển rộng núi cao.\r\n* Vĩnh miên thế trạch: Ân Trạch Tổ Tiên kéo dài nhiều đời sau.\r\n* Quang tiền thùy hậu: Gương sáng người trước, để phúc người sau.\r\nNhững ngày Tết, lệ thường cúng cỗ mặn một lần vào buổi sáng. Khi cúng cỗ mặn mới\r\nđọc Văn cúng trên. Còn lại bánh trái, hoa quả, đèn nhang vẫn liên tục cho đến ngày đưa\r\n\"ông Vải\".											'),
(5, 'VĂN KHẤN THẦN LINH TRONG NHÀ NGÀY MÙNG 1 TẾT', '1/1', 'Ngoài việc cúng Tổ tiên trong ngày mùng 1 Tết, thì việc cúng Thần linh trong nhà ngày Tết là không thể thiếu được. Dưới đây là bài cúng Thần linh trong ngày mùng một Tết để thỉnh các vị chư Thần về hưởng Tết cùng gia chủ.\r\nTrong dịp Tết Nguyên đán, người Việt Nam ta thường có phong tục thờ cúng Tổ tiên và các vị Thần linh trong những ngày Tết. Đêm 30 Tết mọi nhà sẽ làm lễ cúng Tất niên để tiễn năm cũ và đón năm mới. Ngoài việc thờ cúng ông bà Tổ tiên, mọi nhà còn phải làm lễ thỉnh thần linh về dự Tết. Mời các bạn cùng tham khảo bài văn khấn Thần linh trong ngày mùng 1 Tết trong bài viết này nhé.\r\nKính lạy: Hoàng Thiên Hậu Thổ. Chư vị Tôn Thần.\r\nHôm nay là ngày mồng 1 tháng Giêng, nhằm ngày Tết Nguyên Đán đầu xuân, giải trừ\r\ngió đông lạnh lẽo, hung nghiệt tiêu tan, đón mừng Nguyên Đán xuân thiên, mưa móc\r\nthấm nhuần, muôn vật tưng bừng đổi mới. Nơi nơi lễ tiết, chốn chốn tường trình.\r\nTín chủ con tên là ………………………………Tuổi:………….......... Ngụ\r\ntại …………………………………………………………………\r\nNhân tiết minh niên sắm sửa hương hoa, cơm canh lễ vật bày ra trước án, dâng cúng Thiên Địa Tôn Thần. Thiết nghĩ Tôn Thần hào khí sáng loà, ân đức rộnglớn.\r\nNgôi cao vạn trượng uy nghi, vị chính mười phương biến hiện. Lòng thành vừa khởi,\r\nTôn Đức càn thông. Cúi xin giáng lâm trước án, chứng giám lòng thành thụ hưởng lễ\r\nvật.\r\nNguyện cho chúng con mọi người hoan hỷ vinh xương, con cháu cát tường khang kiện.\r\nMong ơn Đương Cảnh Thành Hoàng, đội đức Tôn Thần Bản xứ.\r\nHộ trì tín chủ, gia lộc gia ân, cứu khổ trừ tai.\r\nĐầu năm chí giữa, nửa năm chí cuối, sự nghiệp hanh thông, sở cầu như ý. Dải tấm lòng\r\nthành cúi xin chứng giám.\r\nPhục duy cẩn cáo!								'),
(6, 'BÀI CÚNG THAY BÁT HƯƠNG MỚI', '', 'Theo phong tục truyền thống của người Việt, trên bất cứ ban thờ nhà nào cũng có bát\r\nhương để thờ cúng thần linh và tổ tiên. Nếu như gia đình bạn có nhu cầu thay bát hương\r\nmới thì các bạn có thể tham khảo bài văn cúng bốc bát hương dưới đây.\r\n1. Cách sắm lễ cúng thay bát hương\r\n1 con gà lễ (nếu có)\r\n1 chân giò trước làm sạch luộc chín\r\n1 đĩa xôi trắng\r\n1 chai rượu trắng (1/2 lít)\r\n5 quả trứng gà ta (để sống) 2 lạng thịt vai (để sống)\r\nLễ xong phải luộc chín luôn\r\n3 lá trầu + 3 quả cau\r\n3 chén nước\r\n5 quả tròn (táo hay lê...)\r\n9 bông hồng màu hồng son\r\n1 đĩa gạo mối (không trộn lẫn)\r\n1 lạng chè ngon + 1 bao thuốc lá\r\n1 đinh vàng hoa\r\n5 lễ vàng tiền\r\n1 bộ quần áo quan thần linh đỏ, hia, mũ, ngựa đỏ, kiếm trắng\r\n1 mâm cơm canh (không hành tỏi), nước luộc + canh bí, 6 bát cơm (một xới).\r\n2. Bài khấn thay bát hương\r\nNam Mô A Di Đà Phật (3 lần).\r\nCon lạy chín phương trời mười phương Phật. Con kính lạy các chư vị thần linh, hiển linh,\r\nhiển pháp, pháp thuật vô biên.\r\nHôm nay là ngày …….. tháng ……. Năm …….\r\nTên con là .............................. (Tín chủ của ....................... địa chỉ ..........................)\r\nCon làm lễ bốc bát hương mới (thay bàn thờ mới), mục đích con xin cầu........., cầu tài\r\nđắc tài, cầu lộc đắc lộc, ăn nên làm ra, cầu được ước thấy, vạn sự như ý.\r\nCon xin kính lạy các cụ tổ tiên nội ngoại sống khôn chết thiêng, hôm nay con làm lễ bốc\r\nbát hương mới (thay bàn thờ mới), kính xin các cụ về phù hộ độ trì cho con cho cháu\r\nmạnh khoẻ, ăn nên làm ra, cầu được ước thấy.\r\nCon kính lạy các bà cô tổ ông mãnh nội ngoại sống khôn chết thiêng cho con\r\ncầu...........…\r\nCúng xong, hương cháy hết đợt thứ nhất, sau khi thắp đợt thứ hai thì bắt đầu hóa tiền\r\nvàng, tờ văn khấn. Vãi gạo, muối ra trước cửa ngõ (vãi riêng từng thứ). Lúc tàn hết\r\nhương thì xin hạ lễ, đem thịt và trứng sống luộc chín.									'),
(7, 'BÀI VĂN KHẤN LỄ KHAI TRƯƠNG CỬA HÀNG, CÔNG TY ĐẦU NĂM MỚI', '', 'Nam mô a di Đà Phật! Nam mô a di Đà Phật! Nam mô a di Đà Phật! Kính lạy:\r\n- Con lạy chín phương Trời, mười phương Chư Phật, Chư phật mườiphương.\r\n- Con kính lạy Quan Đương niên Hành khiển Thái tuế đức Tôn thần.\r\n- Con kính lạy các ngài Bản cảnh Thành hoàng chư vị ĐạiVương.\r\n- Con kính lạy các Ngài Ngũ phương, Ngũ thổ, Long mạch, Tài thần định phúc Táo\r\nquân, chư vị Tôn thần.\r\n- Con kính lạy các Thần linh cai quản trong khu vực này.\r\nTín chủ (chúng) con là: ……………………………………….\r\nTuổi: …………………………………..\r\nHiện ở tại: …………………………………\r\nHôm nay là ngày …. tháng … năm …, tín chủ con thành tâm sắm sửa lễ, quả cau lá trầu,\r\nhương hoa trà quả, thắp nén tâm hương dâng lên trước án, lòng thành tâu rằng: tín chủ\r\ncon xây cất (hoặc thuê được) một ngôi hàng ở tại xứ này (nêu rõ địa chỉ) ….. (nếu là cơ\r\nquan, công xưởng thì khấn là tín chủ con là con là Giám đốc hay Thủ trưởng cùng toàn\r\nthể công ty), nay muốn khai trương khởi đầu việc kinh doanh (hoặc sản xuất) phục vụ\r\nnhân sinh, phục vụ sinh hoạt. Do đó chúng con chọn được ngày lành tháng tốt sắm sính\r\nlễ vật cáo yết Tôn thần dâng cùng Bách linh ……. cúi mong soi xét.\r\nChúng con xin kính mời quan Đương niên quan Đương cảnh, quan Thần linh Thổ địa,\r\nĐịnh phúc Táo quân cùng các ngài địa chúa Long Mạch cùng tất cả Thần linh cai quản\r\nkhu vực này linh thiêng giáng hiện trước hương án, thụ hưởng lễ vật, chứng giám lòng\r\nthành. Cúi xin các vị phù hộ cho chúng con buôn bán hanh thông,là ăn thuận lợi, lộc tài\r\nvượng tiến, cần gì được nấy, nguyện gì cũng thành.\r\nTín chủ lại mời các vị Tiền chủ, Hậu chủ cùng chư Hương linh y thảo phụ mộc ngụ trong\r\nkhu vực này, xin hãy tới đây thụ hưởng lễ vật, phù trì cho tín chủ con làm ăn buôn lán\r\ngặp nhiều may mắn.\r\nChúng con lễ bạc tâm thành, trước án kính lễ, cúi xin được phù hộ độ trì. Nam mô a di\r\nĐà Phật!\r\nNam mô a di Đà Phật! Nam mô a di Đà Phật!\r\nLưu ý: Nếu ghi ra giấy, thì lúc đốt giấy vàng bạc hãy hóa luôn tờ giấy vái cúng chung\r\nvới giấy vàng bạc.											'),
(8, 'LỄ CÚNG GIAO THỪA TRONG NHÀ', '', '1. Sắp dọn bàn thờ\r\nTrong gia đình người Việt thường có một bàn thờ tổ tiên, ông bà (hay còn gọi ông Vải).\r\nTuỳ theo từng nhà, cách trang trí và sắp đặt bàn thờ khác nhau. Biền, bàn thờ là nơi\r\ntưởng nhớ, là thế giới thu nhỏ của người đã khuất. Hai cây đèn tượng trưng cho mặt trời,\r\nmặt trăng, hương là tinh tú. Hai bát hương để đối xứng, phía sau 2 cây đèn thường có hai\r\ncành hoa cúc giấy, với nhiều bông nhỏ bao quanh bông lớn. Cũng có nhà cắm \"cành\r\nvàng lá ngọc\" (một thứ hàng mã) với cầu mong làm ăn được quả vàng, quả bạc, buôn\r\nbán lãi gấp 5 hoặc gấp 10 lần năm trước. Ở giữa có trục \"vũ trụ\" là khúc trầm hương\r\ndưới dạng khúc khuỷu, vươn lên trong bát hương. Nhiều gia đình đặt xen giữa đèn và\r\nhương là hai cái đĩa để đặt hoa quả lễ gọi là mâm ngũ quả (tuỳ mỗi miền có sự biến thiên\r\ncác loại quả, nhưng mỗi loại quả đều có ý nghĩa của nó), phía trước bát hương để một bát\r\nnước trong, coi như nước thiêng. Hai cây mía đặt ở hai bên bàn thờ là để các cụ chống\r\ngậy về với con cháu, dẫn linh hồn tổ tiên từ trên trời về hạ giới...\r\nCúng Giao thừa trong nhà là lễ cúng tổ tiên vào chính thời khắc giao thừa vừa tới, nhằm\r\ncầu xin Tổ tiên phù hộ độ trì cho gia đình mình gặp những điều tốt lành trong năm mới\r\nsắp đến.\r\n2. Sắp mâm cúng giao thừa\r\nMâm lễ bao gồm các món ăn mặn ngày Tết được chế biến tinh khiết, trang nghiêm, bao\r\ngồm:\r\nCỗ mặn: Bánh chưng; Giò - chả; Xôi gấc; Thịt gà; Xôi đậu xanh; Các món ăn mặn khác\r\ntùy theo nhu cầu của gia đình.\r\nCỗ ngọt và chay: Hương, hoa, đèn nến; Bánh kẹo; Mứt Tết; Rượu/bia và các loại đồ\r\nuống khác.\r\nKhi cúng Giao thừa trong nhà, tất cả các thành viên trong gia đình đứng trang nghiêm\r\ntrước bàn thờ, khấn tổ tiên để xin được các cụ phù hộ độ trì trong nhà mới, cầu an khang\r\nthịnh vượng, sức khỏe tốt.\r\nTrước khi khấn Tổ tiên để mời tiền nhân về ăn Tết cùng với con cháu hậu thế, các gia\r\nchủ khấn Thổ Công, tức là vị thần cai quản trong nhà (thường bàn thờ tổ tiên ở giữa, bàn thờ Thổ Công ở bên trái) để xin phép cho tổ tiên về ăn Tết.\r\n3. Văn khấn cúng giao thừa trong nhà\r\nDưới đây là 2 bài văn khấn cúng Giao thừa trong nhà phổ biến nhất:\r\nVăn khấn Giao thừa trong nhà (bài 1)\r\n- Nam mô A-di-đà Phật (3 lần)\r\n- Nam mô Đương Lai Hạ Sinh Di Lặc Tôn Phật\r\n- Nam mô Đông Phương Giáo Chủ Dược Sư Lưu Ly Quang Vương Phật\r\n- Nam mô Đức Bồ-tát Quán Thế Âm cứu nạn cứu khổ chúng sinh\r\n- Con kính lạy chín phương trời, mười phương chư Phật, chư Phật mười phương\r\n- Con kính lạy Hoàng Thiên, Hậu Thổ, Long Mạch, Táo Quân, chư vị tôn thần\r\n- Các cụ tổ tiên nội ngoại chư vị tiên linh\r\nNay phút Giao thừa năm cũ …….. với năm mới ……………\r\nChúng con là:…………………sinh năm: …………., hành canh: ………… tuổi (ví dụ:\r\n75 tuổi), ngụ tại số nhà ………, ấp/khu phố ……….., xã/phường……............….,\r\nquận/huyện/thành phố ……….., tỉnh/thành\r\nphố …...…....................................……………\r\nPhút Giao thừa vừa điểm, nay theo vận luật, tống cựu nghênh tân, giờ Tý đầu xuân, đón\r\nmừng Nguyên đán, tín chủ chúng con thành tâm, tu biện hương hoa phẩm vật, nghi lễ\r\ncung trần, dâng lên trước án, cúng dàng Phật- Thánh, dâng hiến tôn Thần, tiến cúng Tổ\r\ntiên, đốt nén tâm hương, dốc lòng bái thỉnh.\r\nChúng con kính mời: Ngài Bản cảnh Thành hoàng chư vị Đại vương, ngài Bản xứ Thần\r\nlinh Thổ địa, Hỷ Thần, Phúc đức chính Thần, ngài Ngũ phương, Ngũ thổ, Long mạch\r\nTài Thần, các ngài bản gia Táo phủ Thần quân và chư vị Thần linh cai quản ở trong xứ\r\nnày. Cúi xin giáng lâm trước án, thụ hưởng lễ vật.\r\nCon lại kính mời các cụ tiên linh, Cao tằng Tổ khảo, Cao tằng Tổ tỷ, Bá thúc đệ huynh, Cô di tỷ muội, nội ngoại gia tộc, chư vị hương linh, cúi xin giáng phó linh sàng thụ\r\nhưởng lễ vật.\r\nTín chủ lại kính mời các vị vong linh tiền chủ, hậu chủ, y thảo phụ mộc ở trong đất này,\r\nnhân tiết giao thừa, giáng lâm trước án, chiêm ngưỡng tân xuân, thụ hưởng lễ vật.\r\nNguyện cho tín chủ, minh niên khang thái, vạn sự cát tường, bốn mùa được bình an, gia\r\nđạo hưng long, thịnh vượng.\r\nTâm thành cầu nguyện, lễ bạc tiến dâng, cúi xin chứng giám. Nam mô A-di-đà Phật (3\r\nlần, 3 lạy)\r\n(Theo Văn khấn cổ truyền Việt Nam)\r\nVăn khấn Giao thừa trong nhà (bài 2)\r\nKính lạy:\r\n- HOÀNG THIÊN, HẬU THỔ, CHƯ VỊ TÔNTHẦN\r\n- LONG MẠCH, TÁO QUÂN, CHƯ VỊ TÔNTHẦN\r\n- CÁC CỤ TỔ TIÊN NỘI-NGOẠI CHƯ VỊ TIÊNLINH\r\nNay phút giao thừa giữa năm Quý Tỵ và năm Giáp Ngọ.\r\nChúng con là: ……………………........................Tuổi…...…Hiện cư ngụ tại số\r\nnhà …….. Đường……………………..Khu phố …….............……….\r\nPhường ……………………Quận…………………………..Thành phố…………..\r\nPhút Giao thừa vừa tới, nay theo vận luật, tống cựu nghênh tân, giờ Tý đầu xuân, đón\r\nmừng Nguyên đán, chúng con thành tâm, tu biện hương hoa phẩm vật, nghi lễ cung trần,\r\ndâng lên trước án, cúng dàng Phật- Thánh, dâng hiến tôn Thần, tiến cúng Tổ tiên, đốt\r\nnén tâm hương, dốc lòng bái thỉnh.\r\nChúng con kính mời:\r\nNgài Bản cảnh Thành hoàng chư vị Đại vương, ngài Bản xứ Thần linh Thổ địa, Hỷ Thần,\r\nPhúc đức chính Thần, ngài Ngũ phương, Ngũ thổ, Long mạch Tài Thần, các ngài bản gia\r\nTáo phủ Thần quân và chư vị Thần linh cai quản ở trong xứ này. Cúi xin giáng lâm trước\r\nán, thụ hưởng lễ vật. Con lại kính mời, các cụ tiên linh, Cao tằng Tổ khảo, Cao tằng Tổ tỷ, Bá thúc đệ huynh, Cô di tỷ muội, nội tộc, ngoại tộc, chư vị hương linh, cúi xin giáng phó linh sàng hâm hưởng lễ vật. Tín chủ lại kính mời các vị vong linh tiền chủ, hậu chủ, y thảo thụ mộc ở trong đất này, nhân tiết giao thừa, giáng lâm trước án, chiêm ngưỡng tân xuân, thụ hưởng lễ vật.\r\nNguyện cho chúng con, tân niên khang thái, ngày đêm tốt lành, thời thời được chữ bình\r\nan, gia đạo hưng long, thịnh vượng. Giải tấm lòng thành cúi xin chứng giám.\r\nPhục duy cẩn cáo!											'),
(9, 'VĂN CÚNG TẠ NĂM MỚI', '', 'Theo truyền thống xưa, lễ Tạ năm mới được tiến hành khi kết thúc Tết, còn gọi là lễ Hoá\r\nVàng.\r\nVào ngày mùng 3 Tết, tiệc xuân đã mãn, con cháu lại cáo lễ để tiễn đưa Tổ tiên trở về\r\nâm cảnh, tục gọi là “Đưa ông bà”, và hóa vàng hay cúng tạ cho Tổ tiên.\r\nViệc chọn ngày làm lễ hóa vàng tùy thuộc vào mỗi gia đình, chủ yếu từ mùng 3 đến\r\nkhoảng mùng 10 Tết Nguyên đán. Điều quan trọng nhất là phải có lễ tạ gia tiên, gia thần\r\nvà chư vị thánh thần, phật. Theo quan niệm dân gian, có lễ tạ thì tấm lòng của chủ nhà\r\nmới được người âm chứng giám.\r\n1. Sắm lễ cúng hóa vàng\r\nLễ vật dâng cúng trong lễ tạ năm mới gồm: Nhang, hoa, ngũ quả, trầu cau, rượu, đèn nến,\r\nbánh kẹo, mâm lễ mặn hoặc chay cùng các món ăn ngày Tết đầy đủ, tinh khiết.\r\n2. Văn cúng tạ năm mới (lễ hóa vàng)\r\n- Nam mô A-di-đà Phật (3 lần)\r\n- Con kính lạy chín phương trời, mười phương chư Phật, chư Phật mười phương\r\n- Con kính lạy Hoàng Thiên, Hậu Thổ, Long Mạch, Táo Quân, chư vị tôn thần\r\n- Con kính lạy Hoàng thiên Hậu thổ. Chư vị Tôn thần\r\n- Con kính lạy Ngài Đương niên hành khiển, ngài Bản cảnh Thành Hoàng, các ngài\r\nThổ địa, Táo quân, Long mạch Tôn thần.\r\n- Con kính lạy các cụ Tổ khảo, Tổ tỷ, nội ngoại tiên linh. Hôm nay là ngày mùng 3\r\ntháng giêng năm …………Chúng con là: ……………………… tuổi………………\r\nHiện cư ngụ tại ……………………………………………….\r\nThành tâm sửa biện hương hoa phẩm vật, phù tửu lễ nghi, cung bày trước án. Kính cẩn\r\nthưa trình: tiệc xuân đã mãn, Nguyên đán đã qua, nay xin thiêu hóa kim ngân, lễ tạ Tôn thần, rước tiễn âm linh trở về âm cảnh.\r\nKính xin lưu phúc, lưu ân, phù hộ độ trì dương cơ âm trạch, mọi chỗ tốt lành, con cháu\r\nđược bách sự như ý, vạn sự bình an, tài lộc song toàn, gia đạo hưng vượng.\r\nLòng thành kính cẩn, lễ bạc tiến dâng, lượng cả xét soi, cúi xin chứng giám. Nam mô\r\nA-di-đà Phật (3 lần)'),
(10, 'THỦ TỤC LÀM LỄ CẤT MÁI', '', 'Khi làm lễ cất nóc mọi người thường phải xem ngày giờ rất cẩn thận vì nóc nhà đối với\r\nmỗi gia đình rất quan trọng. Để lễ cất nóc hay còn gọi là lễ Thượng lương diễn ra suôn\r\nsẻ, các bạn phải chuẩn bị đầy đủ các thủ tục làm lễ cất mái sao cho thành tâm và đúng\r\nnghi thức nhất.\r\nNóc đối với nhà rất quan trọng, không có nóc thì không thành nhà. Nên nóc đối với nhà\r\ncó vai trò như người cha đối với gia đình. Nóc nhà quan trọng như vậy nên người xưa\r\nmới sinh tục xây nhà phải có lễ cất nóc, hay còn gọi là lễ Thượng lương. Trong bài viết\r\nsau đây VnDoc sẽ hướng dẫn các bạn cách làm lễ cúng cất nóc nhà đầy đủ và đúng nghi\r\nthức nhất để công việc xây dựng của các bạn tiến hành được suôn sẻ thuận lợi.\r\n1. Sắm lễ cất nóc nhà\r\nGia chủ cần chuẩn bị: một con gà, một đĩa xôi/ bánh chưng, một đĩa muối.\r\n- Một bát gạo; Một bát nước.\r\n- Nửa lít rượu trắng; Bao thuốc, lạng chè.\r\n- Một bộ quần áo Quan Thần Linh, mũ, hia tất cả màu đỏ, kiếm trắng.\r\n- Một bộ đinh vàng hoa; Năm lễ vàng tiền.\r\n- Năm cái oản đỏ; Năm lá trầu, năm quả cau.\r\n- Năm quả tròn; Chín bông hoa hồng đỏ.\r\nLễ vật này đặc trưng cho mâm cúng miền Bắc, tùy vào các vùng miền khác nhau sẽ có\r\nphong tục, lễ vật khác nhau cho lễ cất nóc.\r\n2. Văn cúng lễ Thượng lương\r\nNam mô a di Đà Phật Nam mô a di Đà Phật Nam mô a di Đà Phật\r\n- Con lạy chín phương Trời, mười phương Chư Phật, Chư Phật mườiphương.\r\n- Con kính lạy Hoàng thiên Hậu thổ chư vị Tôn thần.\r\n- Con kính lạy quan Đương niên.\r\n- Con kính lạy các tôn thần bản xứ.\r\nTín chủ (chúng) con là: ………………………………………………\r\nNgụ tại: ……………………………………………………………… Hôm nay là\r\nngày ….. tháng ……… năm ……………\r\nTín chủ con thành tâm sắm lễ, quả cau lá trầu, hương hoa trà quả, thắp nén tâm hương,\r\ndâng lên trước án, có lời thưa rằng: Vì tín chủ con khởi tạo …………….. cất nóc căn nhà\r\nở địa chỉ: …………… ngôi dương cơ trụ trạch để làm nơi cư ngụ cho gia đình, con cháu.\r\nNay chọn được ngày lành tháng tốt, kính cáo chư vị linh thần, cúi mong soi xét và cho\r\nphép được động thổ (cất nóc, chuyển nhà, sửa chữa, mở cổng, xây thêm…)\r\nTín chủ con thành tâm kính mời:\r\nNgài Kim Niên Đường cai Thái Tuế chí đức tôn thần. Ngài Bản cảnh Thành hoàng Chư\r\nvị Đại vương.\r\nNgài Bản xứ Thần linh Thổ địa. Ngài Định phúc Táo quân.\r\nCác ngài Địa chúa Long Mạch tôn thần và tất cả các vị Thần linh cai quản trong khu vực\r\nnày.\r\nCúi xin các Ngài, nghe thấu lời mời, giáng lâm trước án, chứng giám lòng thành, thụ\r\nhưởng lễ vật, độ cho chúng con được vạn sự tốt lành, công việc hanh thông, chủ - thợ\r\nđược bình an, ngày tháng hưởng phần lợi lạc, âm phù dương trợ, sở cầu như ý, sở\r\nnguyện tòng tâm.\r\nTín chủ lại xin phổ cáo với các vị Tiền chủ, Hậu chủ và các vị Hương linh, cô hồn y thảo\r\nphụ mộc, phảng phất quanh khu vực này, xin mời các vị tới đây thụ hưởng lễ vật, phù trì\r\ntín chủ, cũng như chủ thợ đôi bên khiến cho an lành, công việc chóng thành, muôn sự\r\nnhư ý.\r\nChúng con lễ bạc tâm thành, trước án kính lễ, cúi xin được phù hộ độ trì. Nam mô a di\r\nĐà Phật\r\nNam mô a di Đà Phật Nam mô a di Đà Phật'),
(11, 'VĂN CÚNG LỄ HỒI HOÀN ĐỊA MẠCH', '', 'Khi gia đình ai đó đào đất lấp ao, khơi rãnh, xây tường không may làm tổn thương đến\r\nLong Mạch, thì những người sống trong gia đình đó dễ gặp tai họa, vận rủi, điềm xấu…\r\nDo đó gia chủ phải làm lễ bồi hoàn địa mạch để giải trừ tai hoạ, vận xấu.\r\n1. Sắm lễ\r\nĐể tránh được tai họa thì gia chủ phải lấy nước ở ba con sông, hoà với năm loại đất linh\r\nđể nặn Thần Quy (Thần Rùa), cho chỉ 5 màu vào thân Rùa. Sau đó, chọn các ngày Thiên\r\nXá, Thiên Nguyên, Địa Nguyên, Cường Nhật, Trùng Mậu, Trùng Kỷ rồi tìm nơi đào đất\r\ntạo thành hố bày lễ hoa quả ứng với Ngũ Hành (5 màu: xanh, vàng, đỏ, trắng, đen hoặc\r\ntím) cùng lễ mặn ứng với Ngũ Hành, hoa 5 màu, hương, vàng mã… cạnh hố khấn cầu\r\ntheo bài văn khấn bồi hoàn địa mạch.\r\n2. Văn khấn bồi hoàn địa mạch\r\n– Con lạy chín phươngTrời, mười phương Chư Phật, Chư Phật mười phương.\r\n– Con kính lạy Đức U minh Giáo chủ Địa Tạng Vương BồTát\r\n– Con kính lạy Đức Hoàng thiên Hậu Thổ chư vị Tôn thần.\r\n– Con kính lạy các Ngài Ngũ phương, Ngũ đế, Ngũ nhạc thánh đế, Nhị thập tứ khí phần\r\nquan, Địa mạch thần quan, Thanh Long Bạch Hổ, chư vị thổ thần cùng quyến thuộc.\r\n– Con kính lạy các ngài Kim Niên Đương cai Tôn thần, Bản cảnh Thành hoàng Tôn\r\nthần và các vị thần minh cai quản trong khu vực này.\r\nTín chủ (chúng) con là:...................................................................................\r\nNgụ tại:...........................................................................................................\r\nHôm nay là ngày…. Tháng…. Năm…, tín chủ con thành tâm sắm lễ, quả cau lá trầu,\r\nhương hoa trà quả, thắp nén tâm hương dâng lên trước án, xin điền hoàn địa mạch. Tín\r\nchủ có lời thưa rằng:\r\nBởi vì trước đây\r\nDo tinh mờ mịt\r\nThức tính hồn mờ\r\nĐào đất lấp ao\r\nGầy nên chấn động\r\nHoặc bởi khách quan\r\nHoặc do chủ sự\r\nTổn thương Long Mạch\r\nMạo phạm thần uy\r\nẢnh hưởng khí mạch\r\nNay muốn cho phong thổ an hòa, gia đình chúng con mọi người được an bình, miễn trừ\r\ntai họa, nên tín chủ con trượng uy Đại Sỹ, nương đức Tôn thần, cung tạo bồi hoàn,\r\nnhương kỳ khẩn đảo thần công, nguyện xin bảo hộ, chứng minh sám hối, thụ hưởng đan\r\nthành.\r\nTín chủ chúng con xin thành tâm cúng dâng Ngài U minh Giáo chủ Bản tôn Địa Tạng\r\nVương Bồ Tát\r\nNgài Kiên Lao địa thần Bồ Tát, các Ngài Ngũ phương, Ngũ đế, Hậu Thổ nguyên quân,\r\nSơn nhạc Đế quân, Đương phương Thổ địa, Thổ phủ Thần kỳ, 24 Khí Thần quan, 24\r\nLong Mạch Thần quan, 24 Địa Mạch Thần quan, 24 Sơn Địa Mạch Thần quan, 24\r\nHướng Địa Mạch Thần quan, Thanh long Bạch hổ, Thổ bá, Thổ hầu, Thổ mãnh, Thổ\r\ntrọng Thần quan, Thổ phụ, Thổ mẫu, Thổ lương, Thổ gia Thần quan, Thổ tử, Thổ tôn,\r\nThổ khảm, Thổ khôn Thần quan, Thổ kỳ Ngũ phương Bát quái và các Thần minh quyến\r\nthuộc, Kim niên Hành khiển Thái tuế chư đức Tôn thần, Đương cảnh Thành hoàng bản\r\nthổ Đại Vương và tất cả các vị Thần minh cai quản khu vực này, cúi xin thương xót tín\r\nchủ chúng con, nhận lời cầu thỉnh, chuẩn tâu sám tạ. giáng phó án tiền, hưởng lễ vật.\r\nNguyện cho:\r\nPhong thổ phì nhiêu\r\nKhí sung mạch vượng\r\nThần an tiết thuận\r\nNhân sự hưng long\r\nSở cầu như ý.\r\nChúng con lễ bạc tâm thành, trước án kính lễ, cúi xin được phù hộ độ trì.\r\nSau khi khấn xong, chờ cho tàn ba tuần hương, thì gia chủ dùng nước màu đỏ do tam\r\ngiang thủy (nước của 3 con sông) nấu thành đem tưới xuống hố. Tiếp đến đặt Thần Rùa\r\nvừa nặn xuống hố. rồi dùng cát lấy ở bãi nước nơi ngã ba sông trộn với 5 thứ đỗ là: đỗ\r\nxanh, đỗ vàng, đỗ đỏ, đỗ trắng và đỗ đen lấp lên hố cho đầy.\r\nTheo tục xưa: nếu làm động đến Long Mạch thì gia đình phải làm lễ bồi hoàn Long\r\nMạch như trình bày ở trên sẽ tránh được tai họa.'),
(12, 'VĂN CÚNG LỄ TÂN GIA', '', 'Theo tục xưa sau lễ Nhập trạch dọn về nhà mới, gia chủ phải làm lễ Tân Gia. Lễ Tân Gia\r\nthường được tổ chức Long trọng.\r\n1. Sắm lễ:\r\nTrước tiên dâng lễ: Hương, hoa, vàng mã, trầu, rượu và mâm cỗ mặn thịnh soạn để cúng\r\nTáo quân, Thổ thần, Gia Tiên.\r\nTiếp đó mời: bạn bè, họ hàng, người thân, hàng xóm đến dự lễ Tân Gia - ăn mừng nhà\r\nmới. Những người được mời thường mang lễ vật đến như: các bức đại tự, câu đối, trầu\r\ncau, quà kỷ niệm… và nói lời chúc mừng gia chủ.\r\n2. Văn khấn:\r\n– Văn khấn yết cáo Táo quân Thổ thần.\r\n– Văn cúng Gia Tiên nhân lễ Tân Gia Văn khấn yết cáo Táo quân Thổ thần Nam mô a\r\ndi Đà phật!\r\nNam mô a di Đà phật! Nam mô a di Đà phật!\r\nCon lạy chín phương trời, mười phương Chư Phật, Chư Phật mười phương. Hôm nay là\r\nngày…. tháng………. năm ………..\r\nTại thôn……. xã…… huyện…….. tỉnh………..\r\nTín chủ con là......................................................................\r\nThành tâm sắm lễ, quả cau lá trầu, hương hoa trà quả, thắp nén tâm hương dâng lên truớc\r\nán toạ Đông trù Tư mệnh Táo phủ Thần quân. Kính cẩn tâu rằng:\r\nNgài giữ ngôi nam thái\r\nTrừ tai cứu hoạ, bảo vệ dân lành\r\nNay bản gia hoàn tất công trình\r\nChọn ngày lành gia đình nhóm lửa\r\nNhân lễ khánh hạ, kính cẩn tâu trình:\r\nCầu xin gia đình, an ninh khang thái\r\nLàm ăn tấn tới, tài lộc dồi dào\r\nCửa rộng nhà cao, trong êm ngoài ấm\r\nVợ chồng hoà thuận, con cháu sum vầy\r\nCúi nhờ ân đức cao dày\r\nĐoái thương phù trì bảo hộ.\r\nChúng con lễ bạc têm thành, trước án kính lễ, cúi xin được phù hộ bảo trì\r\nNam mô a di Đà phật!\r\nNam mô a di Đà phật! Nam mô a di Đà phật!');
INSERT INTO `baicung` (`id`, `name`, `date`, `content`) VALUES
(13, 'VĂN CÚNG ĐẦY THÁNG - CÚNG THÔI NÔI CHO BÉ', '', 'Cúng đầy tháng – Cúng thôi nôi là một trong nhiều nghi lễ gắn liền với cuộc đời của mỗi con người, là nét đẹp văn hoá truyền thống của người Việt Nam.\r\nLà nghi lễ mà qua đó không chỉ khẳng định sự hiện hữu của một con người – một thành viên mới trong xã hội, mà còn khẳng định vai trò của gia đình và xã hội đối với thành viên mới, thế hệ mới. Tuy đây là hình thức tín ngưỡng dân gian mang đậm dấu ấn của tín ngưỡng thờ mẫu, nhưng qua đó cho thấy tín ngưỡng dân gian nói chung luôn hướng con người không chỉ biết có hiện tại, tương lai, mà còn nhận rõ truyền thống văn hóa mang tính bản sắc của gia đình – xã hội. Đồng thời Lễ đầy tháng – Lễ thôi nôi còn là sự biểu hiện của những ước muốn tốt đẹp của các thế hệ trước đối với các thế hệ kế thừa.\r\n1. Lễ cúng đầy tháng\r\nTrẻ sinh đúng tháng phải làm lễ cúng mụ hay còn gọi là đám đầy tháng. Việc tổ chức lễ đầy tháng trước là tạ ơn Mụ bà không chỉ nặn ra đứa trẻ, mà còn phù trợ cho “mẹ tròn con vuông”, sau là để trình với nội – ngoại, họ hàng, lối xóm về đứa cháu sau một tháng chào đời, nhưng ít ai nhìn thấy (cả mẹ và con), đây như là chứng nhận của xã hội về sự tồn tại của một con người, để được nâng niu, chúc tụng, để cộng đồng có trách nhiệm giúp đỡ, cưu mang, che chở…\r\nTrong ngày đầy tháng, ngoài việc chuẩn bị món ăn, thức uống dùng để chiêu đãi khách, gia chủ còn chuẩn bị mâm lễ vật cúng kính 12 Mụ bà gồm 12 chén chè, 3 tô chè, 3 đĩa xôi và một mâm cúng kính 3 Đức ông gồm con vịt tréo cánh được luộc chín, 3 chén cháo và 1 tô cháo…\r\n12 chén chè cúng 12 Mụ bà gồm:\r\n– Mụ bà Trần Tứ Nương, coi việc sanh đẻ (chú sanh)\r\n– Mụ bà Vạn Tứ Nương, coi việc thai nghén (chuyển sanh)\r\n– Mụ bà Lâm Cửu Nương, coi việc thụ thai (thủ thai)\r\n– Mụ bà Lưu Thất Nương, coi việc nặn hình hài nam, nữ cho đứa bé\r\n– Mụ bà Lâm Nhất Nương, coi việc chăm sóc bào thai (an thai)\r\n– Mụ bà Lý Đại Nương, coi việc chuyển dạ (chuyển sanh)\r\n– Mụ bà Hứa Đại Nương, coi việc khai hoa nở nhụy (hộ sản)\r\n– Mụ bà Cao Tứ Nương, coi việc ở cữ (dưỡng sanh)\r\n– Mụ bà Tăng Ngũ Nương, coi việc chăm sóc trẻ sơ sinh (bảo tống)\r\n– Mụ bà Mã Ngũ Nương, coi việc ẵm bồng con trẻ (tống tử)\r\n– Mụ bà Trúc Ngũ Nương, coi việc giữ trẻ (bảo tử)\r\n– Mụ bà Nguyễn Tam Nương, coi việc chứng kiến và giám sát việc sinh đẻ\r\nBa Đức thầy bao gồm: Thánh sư, tổ sư và tiên sư có chức năng truyền dạy nghề nghiệp\r\n(không phải 13 đức thầy).\r\nSau khi bày lễ vật, một trưởng tộc hoặc người biết thực hành nghi lễ, thắp ba nén hương\r\nkhấn nguyện:\r\n“Hôm nay, ngày (mùng)… tháng… (âl), ngày cháu (nội hay cháu ngoại…) họ,\r\ntên...................... tròn 1 tháng tuổi, gia đình chúng tôi bày mâm lễ vật này, cung thỉnh\r\nthập nhị mụ bà và tam đức ông trước về chứng minh nhận lễ, sau tiếp tục phù trợ cho\r\ncháu (tên..........................) mạnh tay, mạnh chân, mau lớn, hiền, ngoan, phù trợ cho gia\r\nđình an vui, hạnh phúc”.\r\nSau nghi thức cúng kính là nghi thức khai hoa còn gọi là “bắt miếng”. Đứa bé được đặt\r\nngay trên bàn giữa, chủ lễ rót trà thấp hương xin phép bắt miếng. Xong, bồng đứa trẻ\r\nmột tay, tay kia cầm một nhánh hoa điệp (có thể hoa khác) vừa quơ qua, quơ lại trên\r\nmiệng cháu bé vừa dạy những lời tốt đẹp như sau:\r\nMở miệng ra cho có bông, có hoa,\r\nMở miệng ra cho kẻ thương, người nhớ, Mở miệng ra cho có bạc, có tiền,\r\nMở miệng ra cho xóm giềng quý mến…\r\nTiếp sau là lời chúc mừng và tặng quà hoặc tiền lì xì của khách mời, của dòng họ bà con\r\ncho cháu bé và gia đình nhân ngày cháu tròn một tháng tuổi.\r\n2. Lễ cúng thôi nôi\r\nKhi đứa trẻ được đúng 12 tháng, người ta tổ chức lễ thôi nôi, còn gọi là đám thôi nôi.\r\nLễ thôi nôi, ngoài lễ vật chè – xôi, vịt luộc cúng Mụ bà – Đức ông như trong lễ đầy\r\ntháng,\r\ncòn có heo quay cúng đất đai diên địa, thổ công, thổ chủ. Mâm cúng được bày ngoài sân,\r\nđầu hướng ra ngoài, đi kèm với heo quay còn có 5 chén cháo, 1 tô cháo, 1 đĩa lòng lợn,\r\nrau sống, nhang, đèn, rượu, trà, hoa quả, trên lưng lợn quay gắn một con dao bén.\r\nTrong nhà, bày 3 mâm cúng gồm mâm cúng Thành hoàng bổn cảnh; mâm cúng cửu\r\nhuyền thất tổ và mâm cúng ông bà quá vãng (bao nhiêu bàn thờ, bấy nhiêu mâm cúng).\r\nLễ vật là những thức ăn chín phù hợp với tập quán mỗi địa phương. Kế bên (trên bộ ván\r\nhoặc bộ vạt) bày 12 chén chè, xôi; con vịt luộc chín với 3 chén cháo và 1 tộ cháo cúng\r\n12 Mụ bà và 3 Đức ông.\r\nNghi cúng đất đai diên địa, thổ công thổ chủ lời khấn như sau:\r\n“Hôm nay, ngày (mùng)… tháng… (âm lịch), gia đình cháu (nêu họ tên)…....................\r\nbày làm mâm lễ vật, trước cung thỉnh đất đai diên địa, thổ công thổ chủ trước về chứng\r\nminh nhận lễ mừng cho cháu (….......................) tròn một năm tuổi, sau tiếp tục phù trợ\r\ncho cháu (tên…..........................) khỏe mạnh, chóng lớn, ngoan hiền, phù trợ cho gia\r\nđình luôn ấm no, hạnh phúc…”.\r\nLời khấn mâm cúng Thành hoàng bổn cảnh; mâm cúng Cửu huyền thất tổ và mâm cúng\r\nÔng bà quá vãng nội dung cơ bản giống như lời khấn nghi cúng đất đai diên địa, thổ\r\ncông thổ chủ, chỉ thay đổi đối tượng được thỉnh mời.\r\nLời khấn cầu 12 Mụ bà và 3 Đức ông cơ bản giống như lời khấn trong ngày đầy tháng.\r\nBa tuần rượu và một tuần trà lời khấn không thay đổi (trùng ngôn, trùng ngữ).\r\nKết thúc ba tuần rượu và một tuần trà là thực hiện nghi thức “thử tài” cháu bé bằng cách\r\nbày những vật dụng phù hợp trên bộ ván hoặc trên bộ ván phù hợp với tính cách của nam,\r\nhoặc nữ. Sau đó, đặt cháu bé ngồi trước các vật dụng để cháu tự chọn lựa các vật dụng\r\nnhư: gương, lược, viết, tập sách, nắm xôi, tiền, kéo… Vật nào được cháu chọn trước (cầm trước) dân gian tin tưởng đó là sự chọn lựa của cháu về nghề nghiệp tương lai cho\r\nmình.\r\nSau khi kết thúc nghi thức tử tài, khách mời thực hiện nghi thức chúc mừng và lì xì cho\r\ncháu bé.\r\nNghi lễ kết thúc, cuộc tiệc mừng cháu tròn một tuổi cũng bắt đầu.\r\nNhìn chung, lễ đầy tháng – lễ thôi nôi là một nghi lễ biểu hiện tính nhân bản của người\r\nViệt Nam nói chung, người Bến Tre nói riêng đối với mỗi con người, cho dù con người\r\ncòn rất non dại.\r\nNgày nay, trong quá trình hội nhập và phát triển, nhiều hình thức tín ngưỡng dân gian\r\ntrong đó có lễ đầy tháng – lễ thôi nôi một nét đẹp văn hóa truyền thống đang có nguy cơ\r\nmai một hoặc biến dạng theo cơ chế thị trường. Nếu không biết giữ gìn và phát huy sẽ\r\nlàm mất đi nét đẹp văn hóa truyền thống của dân tộc và của chính bản thân mình.'),
(14, 'VĂN CÚNG RẰM THÁNG GIÊNG (GIA TIÊN VÀ THẦN LINH)', '', 'Rằm tháng giêng, hay còn gọi là Tết Nguyên Tiêu, xuất phát từ thời Hán Vũ Đế của\r\nTrung Quốc, thâm nhập vào Việt Nam, được bản địa hóa. Sau đây là văn cúng Rằm\r\ntháng giêng cho gia tiên và thần linh.\r\n1. Văn cúng rằm tháng giêng thần linh\r\nNam Mô A Di Đà Phật! (3 lần) Kính lạy:\r\n- Hoàng Thiên, Hậu Thổ chư vị Tôn thần\r\n- Ngài Đông trù tư mệnh Táo Phủ thần quân\r\n- Ngài Bản gia Thổ Địa Long mạch Tôn thần\r\n- Các Ngài Ngũ phương, Ngũ hổ, Phúc đức Tôn thần\r\n- Ngài tiền hậu địa chủ tài thần\r\n- Các Tôn thần cai quản ở trong khu vực này Hôm nay là ngày……tháng…..năm…….\r\nTín chủ con là:...............................................................................\r\nNgụ tại:...........................................................................................\r\nThành tâm sửa biện, hương hoa lễ vật kim ngân trà quả và các thứ cúng dâng, bầy ra trước án. Chúng con thành tâm kính mời:\r\nNgài Kim niên đương cai Thái Tuế chí đức tôn thần Ngài Bản cảnh Thành hoàng Chư vị Đại Vương Ngài Đông trù tư mệnh Táo Phủ Thần quân Ngài Bản gia Thổ Địa Long mạch Tôn thần\r\nCác ngài Ngũ Phương Ngũ Thổ, Phúc đức chính thần, các vị Tôn thần cai quản ở trong\r\nkhu vực này. Cúi xin các Ngài thương xót tín chủ. Giáng lâm trước án, chứng giám lòng\r\nthành, thụ hưởng lễ vật, phù trì tín chủ chúng con toàn gia an lạc, công việc hanh thông.\r\nNgười người được chữ bình an, tám tiết vinh khang thịnh vượng, lộc tài tăng tiến, tâm\r\nđạo mở mang, sở cầu tất ứng, sở nguyện tòng tâm.\r\nDãi tấm lòng thành cúi xin chứng giám. Cẩn cáo.\r\n2. Văn cúng rằm tháng Giêng gia tiên\r\nNam Mô A Di Đà Phật! (3 lần) Kính lạy:\r\n- Hoàng thiên hậu Thổ chư vị Tôn thần\r\n- Ngài Bản cảnh Thành hoàng, ngài Bản xứ Thổ Địa, ngài Bản gia Táo quân cùng chư vị TônThần.\r\n- Tổ Tiên, Hiền khảo, Hiền tỷ, chư vị Hương linh (nếu bố, mẹ còn sống thì thay bằng Tổ khảo,Tổ tỷ).\r\nHôm nay là ngày …………… gặp tiết … Nguyên tiêu, tín chủ con cảm nghĩ thâm ân trời đất, chư vị Tôn thần, nhớ đức cù lao tiên tổ, mỗi niệm không quên. Do đó chúng con sắm sanh lễ vật, sửa sang hương đăng, trần thiết trà quả dâng lên trước án.\r\nChúng con kính mời:\r\nNgài Bản cảnh Thành hoàng Chư vị Đại Vương Ngài Bản xứ Thần Linh Thổ Địa\r\nNgài Bản gia Táo quân, Ngũ phương, Long mạch, Tài thần.\r\nCúi xin giáng lâm trước án chứng giám lòng thành thụ hưởng lễ vật.\r\nChúng con kính mời các cụ Tổ khảo, Tổ tỷ, chư vị Hương linh Gia Tiên nội ngoại trong\r\nhọ, cúi xin thương xót con cháu giáng về linh sàng, chứng giám tâm thành thụ hưởng lễ vật.\r\nTín chủ con lại kính mời các vị vong linh, tiền chủ hậu chủ ở trong nhà này, đất này\r\nđồng lâm án tiền, đồng lai hâm hưởng, độ cho chúng con thân cung khang thái, bản\r\nmệnh bình an. Bốn mùa không hạn ách nào xâm, tám tiết hưởng vinh quang thịnh vượng.\r\nDãi tấm lòng thành cúi xin chứng giám. Cẩn cáo.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person0`
--

CREATE TABLE `person0` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `person0`
--

INSERT INTO `person0` (`id`, `id_father`, `name`, `birth`, `death`, `address`, `phone`, `mail`, `lv`) VALUES
(1, 0, 'Nguyễn Văn Vượng', ' 1890', ' ', ' Xuân Kiên, Xuân Trường, Nam Định', '', '', 0),
(2, 0, 'Tổ 2', '', '', '', '', '', 0),
(3, 0, 'Tổ 3', '', '', '', '', '', 0),
(4, 0, 'Tổ 4', '', '', '', '', '', 0),
(5, 0, 'Tổ 5', '', '', '', '', '', 0),
(6, 0, 'Tổ 6', '', '', '', '', '', 0),
(7, 0, 'Trần abc', ' 1890', '1950', '322 lê trọng tấn', '0969991097', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person1`
--

CREATE TABLE `person1` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `person1`
--

INSERT INTO `person1` (`id`, `id_father`, `name`, `birth`, `death`, `address`, `phone`, `mail`, `lv`) VALUES
(1, 1, 'Nguyễn Văn Tuất', '11/11/1910', '22/12/2000', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 1),
(2, 1, 'Nguyễn Văn Tý', '11/11/1912', '22/02/2004', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 1),
(3, 1, 'Nguyễn Văn Dần', '21/11/1914', '30/03/2000', 'Xuân Kiên, Xuân Trường, Nam Định', '', '', 1),
(4, 1, 'Nguyễn Văn Tỵ', '21/11/1917', '30/03/2005', 'Xuân Kiên, Xuân Trường, Nam Định', '', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person2`
--

CREATE TABLE `person2` (
  `id` int(11) NOT NULL,
  `id_father` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `person2`
--

INSERT INTO `person2` (`id`, `id_father`, `name`, `birth`, `death`, `address`, `phone`, `mail`, `lv`) VALUES
(1, 1, 'Nguyễn Văn Cường', '11/11/1933', '22/05/2000', 'Xuân Kiên, Xuân Trường, Nam Định', '0123456789', '', 2),
(2, 1, 'Nguyễn Văn Dự', '11/11/1932', '21/05/2010', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 2),
(3, 2, 'Nguyễn Văn Én', '11/11/1940', ' ', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 2),
(4, 1, 'Nguyễn Văn Mạnh', '11/01/1935', '22/12/2015', 'Xuân Kiên, Xuân Trường, Nam Định', '7654321098', '', 2),
(5, 2, 'Nguyễn Văn Minh', '11/11/1942', ' ', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 2),
(6, 3, 'Nguyễn Văn Linh', '11/04/1938', ' 30/12/2017', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 2),
(7, 3, 'Nguyễn Văn Lê', '11/04/1940', ' ', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 2),
(8, 4, 'Nguyễn Văn Nam', '11/04/1940', ' ', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 2),
(9, 4, 'Nguyễn Văn Ninh', '11/04/1942', ' 14/08/2003', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person3`
--

CREATE TABLE `person3` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `person3`
--

INSERT INTO `person3` (`id`, `id_father`, `name`, `birth`, `death`, `address`, `phone`, `mail`, `lv`) VALUES
(1, 1, 'Nguyễn Văn Phú', '11/11/1955', ' ', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 3),
(2, 2, 'Nguyễn Văn Giang', '21/11/1955', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(3, 3, 'Nguyễn Văn Hòa', '21/11/1962', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(4, 2, 'Nguyễn Văn Kiên', '21/11/1960', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(5, 1, 'Nguyễn Văn Phúc', '11/11/1957', ' ', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 3),
(6, 1, 'Nguyễn Văn Phi', '11/11/1960', ' ', 'Xuân Kiên, Xuân Trường, Nam Định', ' ', ' ', 3),
(7, 2, 'Nguyễn Văn Trường', '21/11/1957', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(8, 3, 'Nguyễn Văn Thuận', '21/11/1965', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(9, 4, 'Nguyễn Văn Thơ', '21/01/1957', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(10, 4, 'Nguyễn Văn', '21/01/1960', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(11, 5, 'Nguyễn Văn Hạnh', '21/01/1965', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(12, 5, 'Nguyễn Văn Phúc', '21/01/1965', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(13, 6, 'Nguyễn Văn Đông', '21/01/1960', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3),
(14, 6, 'Nguyễn Văn Anh', '21/01/1962', '', 'Xuân Kiên, Xuân Trường, Nam Định', '12345678909', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person4`
--

CREATE TABLE `person4` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `person4`
--

INSERT INTO `person4` (`id`, `id_father`, `name`, `birth`, `death`, `address`, `phone`, `mail`, `lv`) VALUES
(1, 2, 'Nguyễn Văn Khánh', '21/01/1979', '', 'Hà Nam', '0987654321', 'abc@gmail.com', 4),
(2, 1, 'Nguyễn Văn Thiên', '21/01/1980', '', 'Hà Nội', '0987654321', 'abc@gmail.com', 4),
(3, 1, 'Nguyễn Văn Thiện', '21/01/1982', '', 'Hai Bà Trưng, Hà Nội', '0987654321', 'abc@gmail.com', 4),
(4, 2, 'Nguyễn Văn Thành', '21/01/1982', '', 'Hà Nam', '0987654321', 'abc@gmail.com', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person5`
--

CREATE TABLE `person5` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person6`
--

CREATE TABLE `person6` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person7`
--

CREATE TABLE `person7` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person8`
--

CREATE TABLE `person8` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person9`
--

CREATE TABLE `person9` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person10`
--

CREATE TABLE `person10` (
  `id` int(10) NOT NULL,
  `id_father` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `birth` varchar(100) DEFAULT NULL,
  `death` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `lv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idper0` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `des` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tree`
--

INSERT INTO `tree` (`id`, `iduser`, `idper0`, `name`, `des`, `date`) VALUES
(1, 4, 1, 'Gia Phả Nguyễn Tộc 1', 'Nguyễn Tộc Xã Xuân Kiên', '2019-04-01 01:00:00'),
(2, 4, 2, 'Nguyễn Văn', 'Nguyễn Văn Đại Tộc', '2019-04-17 02:43:15'),
(3, 4, 7, 'Trần tộc', 'Trần tộc', '2019-05-13 13:56:07'),
(4, 4, 6, 'Trần tộc', 'Trần tộc', '2019-05-13 13:56:57'),
(5, 4, 5, 'Phan Tộc', 'Phan Tộc', '2019-05-13 13:58:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `imageuser` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `sex` varchar(100) DEFAULT NULL,
  `birth` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `pass`, `name`, `imageuser`, `sex`, `birth`, `address`, `phone`, `mail`) VALUES
(4, '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Văn Đạt', '20180724_191217.jpg', 'Nam', '13/02/1997', 'Xuân Kiên, Xuân Trường, Nam Định, Việt Nam', '0969991097', 'nguyendatbk910@gmail.com'),
(5, 'c4ca4238a0b923820dcc509a6f75849b', 'Dat Nguyen', '20180724_191217.jpg', 'Nam', '09/10/1997', '322 lê trọng tấn', '0969991097', 'user@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baicung`
--
ALTER TABLE `baicung`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `person0`
--
ALTER TABLE `person0`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `person1`
--
ALTER TABLE `person1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per1_per0` (`id_father`);

--
-- Chỉ mục cho bảng `person2`
--
ALTER TABLE `person2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per2_per1` (`id_father`);

--
-- Chỉ mục cho bảng `person3`
--
ALTER TABLE `person3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per3_per2` (`id_father`);

--
-- Chỉ mục cho bảng `person4`
--
ALTER TABLE `person4`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per4_per3` (`id_father`);

--
-- Chỉ mục cho bảng `person5`
--
ALTER TABLE `person5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per5_per4` (`id_father`);

--
-- Chỉ mục cho bảng `person6`
--
ALTER TABLE `person6`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per6_per5` (`id_father`);

--
-- Chỉ mục cho bảng `person7`
--
ALTER TABLE `person7`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per7_per6` (`id_father`);

--
-- Chỉ mục cho bảng `person8`
--
ALTER TABLE `person8`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per8_per7` (`id_father`);

--
-- Chỉ mục cho bảng `person9`
--
ALTER TABLE `person9`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per9_per8` (`id_father`);

--
-- Chỉ mục cho bảng `person10`
--
ALTER TABLE `person10`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_per10_per9` (`id_father`);

--
-- Chỉ mục cho bảng `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser-tree` (`iduser`),
  ADD KEY `idper0-tree` (`idper0`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `baicung`
--
ALTER TABLE `baicung`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `person0`
--
ALTER TABLE `person0`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `person1`
--
ALTER TABLE `person1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `person2`
--
ALTER TABLE `person2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `person3`
--
ALTER TABLE `person3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `person4`
--
ALTER TABLE `person4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `person5`
--
ALTER TABLE `person5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `person6`
--
ALTER TABLE `person6`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `person7`
--
ALTER TABLE `person7`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `person8`
--
ALTER TABLE `person8`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `person9`
--
ALTER TABLE `person9`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `person10`
--
ALTER TABLE `person10`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `person1`
--
ALTER TABLE `person1`
  ADD CONSTRAINT `id_per1_per0` FOREIGN KEY (`id_father`) REFERENCES `person0` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person2`
--
ALTER TABLE `person2`
  ADD CONSTRAINT `id_per2_per1` FOREIGN KEY (`id_father`) REFERENCES `person1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person3`
--
ALTER TABLE `person3`
  ADD CONSTRAINT `id_per3_per2` FOREIGN KEY (`id_father`) REFERENCES `person2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person4`
--
ALTER TABLE `person4`
  ADD CONSTRAINT `id_per4_per3` FOREIGN KEY (`id_father`) REFERENCES `person3` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person5`
--
ALTER TABLE `person5`
  ADD CONSTRAINT `id_per5_per4` FOREIGN KEY (`id_father`) REFERENCES `person4` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person6`
--
ALTER TABLE `person6`
  ADD CONSTRAINT `id_per6_per5` FOREIGN KEY (`id_father`) REFERENCES `person5` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person7`
--
ALTER TABLE `person7`
  ADD CONSTRAINT `id_per7_per6` FOREIGN KEY (`id_father`) REFERENCES `person6` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person8`
--
ALTER TABLE `person8`
  ADD CONSTRAINT `id_per8_per7` FOREIGN KEY (`id_father`) REFERENCES `person7` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person9`
--
ALTER TABLE `person9`
  ADD CONSTRAINT `id_per9_per8` FOREIGN KEY (`id_father`) REFERENCES `person8` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `person10`
--
ALTER TABLE `person10`
  ADD CONSTRAINT `id_per10_per9` FOREIGN KEY (`id_father`) REFERENCES `person9` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tree`
--
ALTER TABLE `tree`
  ADD CONSTRAINT `idper0-tree` FOREIGN KEY (`idper0`) REFERENCES `person0` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `iduser-tree` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
