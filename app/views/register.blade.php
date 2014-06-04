@extends('template')

@section('title')
Đăng ký
@endsection

@section('content')
	<form action="{{Asset('register')}}" method="post" id="register_frm"><br/>
		<h3>Đăng ký thành viên</h3>
		Họ và tên(*): <input type="text" name="full_name" id="full_name" placeholder="Fullname"class="form-control"/><br/>
		Tên đăng nhập(*): <input type="text" name="user_name" id="user_name" placeholder="Username" class="form-control"/><br/>
		Mật khẩu(*): <input type="password" name="password" id="password" placeholder="Password" class="form-control"/><br/>
		Nhập lại mật khẩu(*): <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-Password" class="form-control"/><br/>
		Email(*): <input type="email" name="email" id="email" placeholder="Email" class="form-control"/><br/>
		Nhập lại email(*): <input type="email" name="re_email" id="re_email" placeholder="Re-Email" class="form-control"/><br/>
		Ngày sinh(*): <input type="text" id="birthday" name="birthday" /><br/>
		Giới tính: <input type="radio" name="gender" value="male" id="gender" style="margin-left:30px">Nam</input>
		<input type="radio" name="gender" value="female" id="gender" style="margin-left:30px">Nữ</input><br/><br/>
		Điều khoản sử dụng:
		<br/>
		<textarea id="txt_rules" style="width:500px; height:100px" readonly>
Chúng tôi biết rằng đây là điều mà có thể bạn không muốn đọc, nhưng có một vài thông tin quan trọng ở đây, vì vậy bạn nên đọc tất cả những nội dung này ít nhất một lần. Thỉnh thoảng, chúng tôi có thể thay đổi những điều khoản này vì vậy hãy quay lại thường xuyên nhất khi có thể.
Nếu có bất kỳ điều gì không hiểu ở đây (hoặc bất kỳ nơi khác trên trang này), vui lòng giữ liên lạc với chúng tôi. Nếu bạn dưới 18 tuổi, vui lòng yêu cầu một người lớn đọc cùng bạn tất cả các điều kiện và điều khoản sau (trên trang này chúng tôi gọi ngắn gọn là Điều khoản) và giải thích bất kỳ điều gì bạn không hiểu.
Nói ngắn gọn

Những Điều khoản này áp dụng mỗi khi bạn truy cập LoveTest.vn. Dưới đây là những điểm chính (mặc dù như vậy nhưng bạn vẫn nên đọc qua tất cả!):
Bạn không được đăng ký trên LoveTest.vn hoặc sử dụng trang này trừ khi bạn từ 13 tuổi trở lên. Vui lòng không nói dối về tuổi của bạn. Bằng việc đăng ký là thành viên, bạn đồng ý cung cấp các thông tin trung thực và chính xác cho LoveTest.vn. Nếu bạn cung cấp sai thông tin, chúng tôi có quyền đình chỉ hoặc chấm dứt tài khoản của bạn.
Bạn hoàn toàn chịu trách nhiệm về mọi thứ bạn đăng hoặc nói trong khi bạn sử dụng LoveTest.vn - không phải chúng tôi. Chúng tôi không giám sát tất cả các thứ trên trang LoveTest.vn bởi vì việc đó là không thể - chúng tôi không có trách nhiệm đối với những gì mà người dùng đăng lên trang này. Tuy nhiên, đôi khi chúng tôi nhận được cảnh báo khi mọi người dùng ngôn ngữ không lịch sự hoặc từ ngữ thô bạo - những người này không thể được chấp nhận trên trang của chúng tôi. Chúng tôi cũng theo dõi về mọi khiếu nại mà chúng tôi nhận được từ bất kỳ ai báo cáo hành vi vi phạm những Điều khoản này và/hoặc các chính sách khác của chúng tôi, đặc biệt là những thứ có thể khiến họ khó chịu, lo lắng hoặc sợ hãi. Vì vậy, nếu bạn đăng điều gì đó mà chúng tôi nghĩ rằng không phù hợp hoặc không thể chấp nhận được thì chúng tôi có thể xóa nội dung đó khỏi trang và/hoặc chặn quyền truy cập đến trang LoveTest.vn trong tương lai nếu có thể.
Nếu bạn đăng bất kỳ nội dung gì thuộc về một người khác và họ muốn thực hiện hành động về điều đó, bạn sẽ phải chịu trách nhiệm về việc đó. Xin nhắc lại, bạn chịu trách nhiệm cho những gì bạn đăng, ngay cả khi bạn đăng dưới dạng ẩn danh.
Pháp lý

LoveTest.vn là nơi để trò chuyện với bạn bè và gặp gỡ những người mới để chia sẻ ý kiến và ý tưởng của bạn. Đây là một nơi thú vị để ghé thăm - để đảm bảo nơi này hoạt động theo đúng cách đó, bạn chỉ được sử dụng trang này bằng cách tuân theo các điều kiện và điều khoản sau. Chúng tôi yêu cầu điều tương tự với tất cả mọi người.
Khi sử dụng LoveTest.vn (dù là một thành viên hay không), bạn đang thực hiện một thỏa thuận pháp lý ràng buộc giữa bạn, người sử dụng trang web và chúng tôi, người sở hữu trang web. LoveTest.vn hiện được công ty Sia LoveTest.vn (LLC) (Công ty) điều hành. Công ty được đăng ký vào ngày 29 tháng 6 năm 2011 ở Riga, Latvia và hoạt động theo luật của Latvia. Văn phòng đăng ký của công ty ở tại địa chỉ Zala ST 1, Riga, LV-1010, Latvia. Latvia là một quốc gia thành viên thuộc Liên minh Châu Âu. Những điều khoản này cũng áp dụng đối với tất cả các công ty thuộc tập đoàn LoveTest.vn có liên quan đến việc vận hành trang web này.
Bằng việc truy cập, sử dụng, đăng ký hoặc nhận bất kỳ dịch vụ nào trên LoveTest.vn, bạn tự động chấp nhận và đồng ý với những Điều khoản này.
Nếu bạn không chấp nhận và đồng ý với những Điều khoản này thì bạn không được truy cập hoặc sử dụng trang LoveTest.vn. Bằng việc tiếp tục sử dụng hoặc truy cập trang LoveTest.vn, bạn chấp nhận và đồng ý với những Điều khoản này.
Sử dụng trang LoveTest.vn và các nguyên tắc liên quan đến những nội dung/câu hỏi bạn đăng
Ai có thể sử dụng LoveTest.vn?

Bạn chỉ có thể sử dụng hoặc trở thành thành viên của LoveTest.vn nếu bạn từ 13 tuổi trở lên. Nếu bạn dưới 13 tuổi, bạn không được phép sử dụng trang này. Nếu chúng tôi phát hiện ra bạn đang sử dụng LoveTest.vn khi bạn dưới 13 tuổi, chúng tôi sẽ hủy kích hoạt tài khoản của bạn và cố gắng chặn không cho bạn truy cập vào trang này.
Bạn có trách nhiệm đảm bảo rằng bạn tuân theo mọi luật pháp và quy định tại quốc gia sinh sống.
Bằng việc sử dụng LoveTest.vn, bạn xác nhận rằng bạn không bị kết án hoặc không chịu bất kỳ lệnh tòa án nào liên quan đến tấn công, bạo lực, hành vi sai trái về tình dục hoặc quấy rối.
Tôi có thể đăng lên LoveTest.vn những thứ gì? Và những gì không được phép?

Bạn có thể đăng mọi thể loại trên LoveTest.vn, bao gồm văn bản, hình ảnh và video.
Tất nhiên chúng tôi có một số nguyên tắc về cái gì có thể chấp nhận được - chúng tôi có những nguyên tắc này để mọi người có thể sử dụng LoveTest.vn một cách an toàn. Bạn không được đăng hoặc gửi bất gì nội dung gì mà:
không đứng đắn, bắt nạt ai đó hoặc có thể quấy rối, gây sợ hãi hoặc lo lắng cho bất kỳ ai
được cố tình tạo ra để kích động hoặc phản kháng mọi người, đặc biệt là phá hoại
sử dụng từ ngữ thô bạo hoặc có thể khiến ai đó khó chịu hoặc xấu hổ
mô tả những điều khủng khiếp, gây sốc hoặc sầu não
tục tĩu hoặc khiêu dâm, có chứa bất kỳ hình ảnh người trần truồng nào hoặc mô tả tình dục hoặc bạo lực rõ ràng bằng đồ họa
chứa bất kỳ kiểu đe dọa nào
phân biệt chủng tộc hoặc khiếm nhã hay thô lỗ về chủng tộc, tôn giáo, khuynh hướng giới tính hoặc màu da của một ai đó
khuyến khích mọi người tham gia bất kỳ điều gì bất hợp pháp (ví dụ như ma túy, bạo lực hay tội phạm)
nói dối về một người cụ thể - hoặc bạn biết điều đó là không đúng hoặc bạn không biết chắc chắn liệu nó có đúng hay không (ngay cả khi bạn nghĩ nó có thể đúng)
gửi thư rác cho mọi người hoặc gạ gẫm bán đồ hoặc cố gắng kiếm tiền từ mọi người
không thuộc về bạn hoặc có thể vi phạm bản quyền (ví dụ như âm nhạc hoặc phim) hoặc bảo mật của người khác
chứa bất kỳ virus máy tính nào hoặc cố gắng gây hại trang web của chúng tôi
cố gắng giữ hoặc thu thập thông tin riêng tư hoặc cá nhân mà chúng tôi lưu trên LoveTest.vn
giả vờ làm người khác không phải là bạn hoặc mạo danh người khác
có thể gây hại hoặc tổn thương đến bạn hoặc bất kỳ người nào khác.
Hãy sử dụng lý lẽ thường tình đúng đắn của bạn khi đăng bất kỳ nội dung gì hoặc gửi bất kỳ câu hỏi nào hay đưa ra bình luận trên LoveTest.vn. Hãy lùi lại một bước và suy nghĩ (đặc biệt nếu bạn đang tức giận) trước khi bạn gửi nội dung đó để kiểm tra rằng nội dung đó không phải là điều không được phép. Hãy nhớ rằng, bạn hoàn toàn chịu trách nhiệm cho mọi thứ bạn viết hoặc đăng trên trang này.
Các nguyên tắc liên quan đến thông tin cá nhân là gì?

Bạn không được đưa bất kỳ thông tin liên hệ cá nhân hoặc ngân hàng nào vào trang hồ sơ cá nhân của mình cho dù liên quan đến bạn hay người khác (ví dụ: địa chỉ nhà, mã bưu chính, số điện thoại, ngày sinh, địa chỉ email, v.v). Nếu bạn đưa thông tin cá nhân về chính bạn cho các thành viên hoặc người dùng khác, bạn hoàn toàn chịu rủi ro về điều đó, vì vậy hãy cẩn thận. Hãy luôn ghi nhớ Nên và Không nên và Điều cơ bản về An toàn và Bảo mật của chúng tôi mọi lúc.
Tôi có thể sử dụng thông tin cá nhân của người khác không?

Bạn không được phép sử dụng thông tin cá nhân của người khác để thử và kiếm tiền, gửi thư rác hoặc bắt nạt, đe dọa, gây khó chịu, quấy rối hoặc gây rắc rối cho bất kỳ ai. Chúng tôi có thể, mà không cần báo trước, hủy kích hoạt tài khoản của bạn và/hoặc chặn không cho bạn truy cập vào trang web, nếu thích hợp, nếu chúng tôi tin rằng bạn sử dụng sai mục đích thông tin của người khác.
Nếu bạn bè muốn xem tất cả những người mà tôi đang trò chuyện cùng, tôi có thể nói cho họ mật khẩu và cho phép họ đăng nhập như là tôi không?

Không. Chỉ có bạn mới được phép truy cập tài khoản của bạn trên LoveTest.vn. Bạn không được nói cho bất kỳ ai mật khẩu của mình (kể cả bạn thân nhất hay thành viên trong gia đình) hoặc để cho người khác truy cập vào tài khoản của bạn vì việc này có thể dẫn đến việc tất cả các bài đăng, tin nhắn và thông tin cá nhân của bạn bị lộ ra ngoài hoặc ai đó mạo danh hoặc giả vờ là bạn. Bạn có trách nhiệm giữ bí mật và bảo mật mật khẩu của mình. Nếu không, LoveTest.vn sẽ không chịu trách nhiệm khi ai đó truy cập vào tài khoản và đọc hoặc gửi các tin nhắn từ tài khoản của bạn. Nếu bạn nghĩ rằng ai đó có thể đang sử dụng tài khoản của bạn, bạn phải cho chúng tôi biết ngay lập tức. Bạn cũng nên đổi mật khẩu ngay lập tức. Chúng tôi có quyền chấm dứt tài khoản hoặc cấm bạn truy cập trang web nếu bạn vi phạm những nguyên tắc về giữ bảo mật mật khẩu của bạn.
Ai có thể xem những thứ tôi đưa lên LoveTest.vn?

Khi bạn đăng hoặc tải bất kỳ nội dung gì lên LoveTest.vn, công chúng nói chung có thể nhìn thấy và truy cập thông tin đó (không chỉ là những thành viên đã đăng ký trên LoveTest.vn). Nếu bạn không muốn nội dung nào đó hiển thị cho người khác, bạn không nên đăng trên LoveTest.vn. Chúng tôi có quyền (và không báo trước cho bạn) xóa hoặc chỉnh sửa, giới hạn hoặc chặn quyền truy cập đến bất kỳ nội dung gì bạn tải lên hoặc gửi cho LoveTest.vn. Chúng tôi không có trách nhiệm phải hiển thị mọi thứ bạn gửi lên LoveTest.vn hoặc kiểm tra xem nội dung bạn đăng có chính xác hoặc đúng sự thực hay không. Chúng tôi cũng không có trách nhiệm giám sát cách bạn hoặc người khác sử dụng trang LoveTest.vn.
Nội dung
Sau khi đã tải nội dung lên LoveTest.vn, tôi vẫn sở hữu nội dung đó chứ?

Đúng vậy, miễn là bạn sở hữu nội dung đó ngay từ đầu. Nếu bạn sao chép từ nơi nào khác thì không - bạn không được đăng những thứ không thuộc về bạn. Nếu bạn làm như vậy, LoveTest.vn sẽ không chịu trách nhiệm và chúng tôi có quyền khiếu nại chống lại bạn trong trường hợp bất kỳ bên thứ ba nào khiếu nại chúng tôi.
Bằng việc đăng bất kỳ nội dung gì trên LoveTest.vn, bạn (i) cam đoan rằng bạn được phép đăng nội dung đó và bạn không đánh cắp nội dung đó (ii) không giả vờ là bạn sở hữu nội dung đó trong khi thực tế bạn không sở hữu và (iii) cho phép LoveTest.vn và bất kỳ công ty nào của chúng tôi sử dụng nội dung đó theo cách chúng tôi muốn trong thời gian mà chúng tôi muốn, miễn phí.
Nếu ai đó nói rằng một số nội dung bạn viết thuộc về họ hoặc bạn không được phép đăng nội dung đó vì bất kỳ lý do nào thì chúng tôi có thể xóa bài đăng đó nếu chúng tôi thấy cần thiết. Tương tự như vậy, hãy cho chúng tôi biết nếu ai đó đã đăng nội dung thuộc về bạn và chúng tôi sẽ xem xét việc đó cho bạn.
Truy cập vào LoveTest.vn
Trang LoveTest.vn sẽ hoạt động và chạy mọi lúc đúng không?

Rất tiếc, chúng tôi không thể đảm bảo rằng trang này sẽ luôn hoạt động vì đôi khi chúng tôi thực hiện bảo trì đối với trang web hoặc trang web có thể bị ảnh hưởng bởi lỗi hoặc các tình huống nằm ngoài tầm kiểm soát của chúng tôi. Chúng tôi có thể, tại bất kỳ thời gian nào, dừng hoặc đình chỉ trang web mà không thông báo cho bạn.
Thế còn về truy cập di động thì sao?

Việc đó tùy thuộc vào bạn để đảm bảo rằng bạn có thể truy cập LoveTest.vn từ di động của mình (ví dụ bằng cách nói chuyện với nhà cung cấp dịch vụ internet hoặc nhà cung cấp dịch vụ di động của bạn). Chúng tôi không thể đảm bảo rằng trang di động sẽ luôn hoạt động nhưng tất nhiên mục tiêu của chúng tôi là trang sẽ luôn hoạt động một cách hoàn hảo.
Khi sử dụng LoveTest.vn trên điện thoại di động của bạn (và/hoặc bất kỳ thiết bị khác) bạn có thể phải trả phí cho nhà cung cấp dịch vụ internet hoặc di động, vì vậy hãy kiểm tra với họ trước nếu bạn không chắc chắn vì bạn sẽ có trách nhiệm thanh toán mọi khoản phí này.
Tôi không phải là thành viên và tôi dường như không thể truy cập một số thông tin trên trang. Tại sao như vậy?

Những người không phải là thành viên chỉ có thể truy cập một phần của trang LoveTest.vn được công khai và không thể tận hưởng tất cả các đặc quyền của một thành viên.
Chấm dứt sử dụng bởi chúng tôi
Hồ sơ của tôi đã biến mất và tôi không thể đăng nhập. Chuyện gì đã xảy ra?

Đôi khi mọi người đăng những nội dung không được chúng tôi cho phép. Nếu chúng tôi nghĩ rằng bạn có thể là một trong số những người đó thì chúng tôi có quyền tại bất kỳ lúc nào (mà không thông báo trước cho bạn):
a. đình chỉ/chấm dứt tư cách thành viên của bạn (nếu áp dụng) và quyền truy cập và/hoặc sử dụng LoveTest.vn hoặc gửi bất kỳ nội dung nào đến LoveTest.vn của bạn; và
b. thực hiện bất kỳ hành động nào trong quyền hạn hoặc sự kiểm soát của chúng tôi để thực thi các điều khoản của chúng tôi (bao gồm chặn các địa chỉ IP cụ thể hoặc thông báo cho Cảnh sát).
Chúng tôi sẽ cố gắng thông báo trước cho bạn nếu quyền truy cập vào LoveTest.vn và/hoặc hồ sơ của bạn sẽ bị đình chỉ hoặc chấm dứt nhưng chúng tôi không thể đảm bảo là chúng tôi luôn có thể làm được việc này.
Tôi phải làm gì nếu tôi muốn "hủy đăng ký" chính mình khỏi LoveTest.vn?
Nếu bạn là một thành viên LoveTest.vn, bạn có thể chấm dứt tư cách thành viên của mình tại bất kỳ thời điểm nào bằng cách đi đến phần kiểm soát Cài đặt trên LoveTest.vn sau khi đăng nhập và chọn liên kết 'hủy kích hoạt hồ sơ'. Chúng tôi sẽ lưu thông tin hồ sơ của bạn trong trường hợp bạn thay đổi quyết định sau đó và muốn kích hoạt lại tài khoản của mình. Rất nhiều thành viên hủy kích hoạt tài khoản của họ vì lý do tạm thời và khi làm như vậy họ muốn chúng tôi duy trì thông tin của họ cho đến khi họ quay trở lại sử dụng LoveTest.vn. Vì thế bạn có thể khôi phục tài khoản và hồ sơ của mình.
Để biết thêm chi tiết, vui lòng xem Chính sách Quyền riêng tư của chúng tôi.
Bất kỳ nội dung nào mà bạn đã tải lên LoveTest.vn, ngoài hồ sơ của bạn (chẳng hạn như các câu hỏi và bình luận) sẽ vẫn xuất hiện trên LoveTest.vn ngay cả khi bạn đã chấm dứt tư cách thành viên của mình.
Một người nào đó đang làm những việc không được phép: tôi nên thông báo cho ai?
Nếu ai đó đang bắt nạt hoặc quấy rối bạn (hoặc bất kỳ ai khác) hoặc làm bất kỳ việc gì không được phép trên trang của chúng tôi (chẳng hạn như đăng những nội dung kinh khủng, gửi tin nhắn thô tục hoặc gây tổn thương), bạn có thể báo cáo việc đó hoặc khiếu nại bằng cách liên hệ với chúng tôi qua Trang phản hồi của chúng tôi. Để chúng tôi có thể giúp bạn, vui lòng cho chúng tôi biết chính xác vấn đề là gì, càng chi tiết càng tốt. Bạn cũng có thể báo cáo bất kỳ người dùng nào trực tiếp từ một hồ sơ, bằng cách nhấn vào Nút Báo cáo và chọn lý do cho khiếu nại của mình.
LoveTest.vn có những hướng dẫn có sẵn về việc LoveTest.vn có thể làm gì với dữ liệu cá nhân của tôi không?
Có, chúng tôi xử lý thông tin tuân theo Chính sách Quyền riêng tư của chúng tôi, chính sách đó đã được sáp nhập vào những Điêu khoản này. Vui lòng đọc kỹ nội dung trước khi sử dụng LoveTest.vn.
Những liên kết trên trang web có liên quan gì đến LoveTest.vn không?
Chúng tôi có thể bao gồm trên trang của chúng tôi một số liên kết đến các trang khác hoặc nội dung khác mà chúng tôi nghĩ bạn có thể quan tâm. Một số người dùng cũng có thể tự đăng các liên kết đến những trang web bên ngoài hoặc hồ sơ của người dùng khác. Nếu bạn truy cập những trang này, chúng sẽ chuyển bạn đến các trang riêng biệt không có liên quan gì với chúng tôi. Những trang này sẽ có các điều khoản và nguyên tắc của riêng họ mà có thể không giống như của chúng tôi, vì vậy bạn cần kiểm tra những nội dung này một cách chính xác. Chúng tôi không chịu trách nhiệm cho bất kỳ nội dung nào trên những trang này và không có quyền kiểm soát bất kỳ điều gì trên những trang này - việc muốn truy cập những trang này hay không hoàn toàn phụ thuộc vào bạn.
Tôi đã đăng một điều gì đó không được phép và ai đó đã nói rằng họ sẽ kiện tôi. LoveTest.vn có thể giải quyết việc này cho tôi không?
Không. Nếu bạn viết hoặc đăng một điều gì đó không được phép hoặc làm phiền hoặc gây khó chịu cho người khác thì bạn hoàn toàn chịu trách nhiệm về bất kỳ hậu quả nào. Vì vậy hãy suy nghĩ kỹ trước khi bạn viết hoặc đăng bất kỳ điều gì trên trang mà bạn nghĩ có thể không được phép. Chúng tôi không chịu trách nhiệm đối với những gì người dùng viết hoặc đăng trên trang này.
Có giới hạn nào về trách nhiệm pháp lý của LoveTest.vn theo những Điều khoản này không?
Có. Trách nhiệm pháp lý của LoveTest.vn theo những Điều khoản này bị giới hạn như sau, trong phạm vi được pháp luật cho phép:
Chúng tôi không đại diện, cam kết và/hoặc đảm bảo về sự phù hợp của LoveTest.vn cho các mục đích của bạn hoặc việc sử dụng trang web sẽ được bảo mật, không bị gián đoạn, không có lỗi, không có virus hoặc các cấu phần gây hại khác hoặc chức năng hoạt động chính xác kết hợp với bất kỳ công nghệ, phần cứng, phần mềm, hệ thống hoặc dữ liệu của bên thứ ba nào.
Trang web LoveTest.vn được cung cấp "theo nguyên trạng" và mọi điều kiện, đại diện, và bảo đảm, cho dù được nhấn mạnh hay ngụ ý, theo luật định hoặc bằng cách khác, bao gồm, nhưng không giới hạn, bất kỳ bảo hành ngụ ý nào về khả năng bán được, yêu sách, phù hợp cho một mục đích cụ thể, hoặc không vi phạm đều được miễn trừ trách nhiệm ở đây trong phạm vi cho phép của pháp luật áp dụng. Ngoài ra, chúng tôi không đại diện hoặc đảm bảo theo bất kỳ cách nào, thể hiện hoặc ám chỉ, đối với việc vận hành của trang tương tự hoặc đối với thông tin, nội dung, giao tiếp, tài liệu hoặc sản phẩm và dịch vụ có trong đó. Bạn tự chịu rủi ro khi sử dụng trang LoveTest.vn.
Chúng tôi không chịu trách nhiệm về bất kỳ thiệt hại nào gây ra từ việc sử dụng trang web LoveTest.vn của bạn, bao gồm nhưng không giới hạn, các thiệt hại trực tiếp, gián tiếp, ngẫu nhiên, trừng phạt và hậu quả. Luật pháp của một số quốc gia hoặc bang nhất định không cho phép giới hạn đảm bảo ngụ ý hoặc miễn trừ hoặc giới hạn đối với một số thiệt hại cụ thể. Nếu những luật này áp dụng đối với bạn, một vài hoặc tất cả các tuyên bố miễn trừ trách nhiệm, miễn trừ, hoặc giới hạn ở trên có thể không áp dụng đối với bạn và bạn có thể có các quyền bổ sung khác.
Nói một cách rõ ràng, không có gì trong những Điều khoản này sẽ ngăn LoveTest.vn khỏi việc chịu trách nhiệm và giới hạn pháp lý đối với bất kỳ điều gì mà chúng tôi phải có trách nhiệm hoặc chịu trách nhiệm theo luật pháp.
Bồi thường
Tôi đã đăng một điều gì đó không được phép và bây giờ ai đó nói rằng họ sẽ kiện LoveTest.vn.

Nếu bị kiện vì việc sử dụng LoveTest.vn của bạn thì chúng tôi có quyền bào chữa hoặc giải quyết các khiếu nại liên quan theo quyết định của chúng tôi. Nếu chúng tôi yêu cầu, bạn sẽ hợp tác hoàn toàn và theo cách hợp lý khi được chúng tôi yêu cầu trong trường hợp bào chữa lại bất kỳ khiếu nại nào có liên quan.
Bạn đồng ý giữ vô hại và đảm bảo cho chúng tôi và văn phòng, ban giám đốc, nhân viên, đại lý, đại diện và các bên cấp giấy phép của chúng tôi khỏi bất kỳ khiếu nại của bên thứ ba nào, thiệt hại (thực tế và/hoặc hậu quả), hành động, tố tụng, yêu cầu, mất mát, trách nhiệm pháp lý, phí tổn và chi phí (bao gồm chi phí pháp lý hợp lý) phải chịu hoặc phát sinh hợp lý bởi chúng tôi như là kết quả của, hoặc có liên quan đến, việc truy cập và sử dụng của bạn trên trang LoveTest.vn, việc tải lên hoặc gửi nội dung đến trang LoveTest.vn của bạn hoặc hành vi của bạn, ngoài việc tuân thủ các Điều khoản hoặc luật pháp hay quy định áp dụng. LoveTest.vn có toàn quyền giải quyết, thỏa hiệp và thanh toán bất kỳ hoặc mọi khiếu nại hay dẫn đến hành động tranh tụng được đưa ra chống lại chúng tôi mà không có sự đồng ý trước của bạn.
Các điều Chung
Chúng tôi đã thực hiện mọi điều hợp lý có thể để đảm bảo rằng mọi thứ trên trang này đều cập nhật nhất, nhưng chúng tôi không thể hoàn toàn đảm bảo rằng việc này sẽ luôn như vậy. Chúng tôi không hứa bất kỳ điều gì về thông tin có chứa trên trang LoveTest.vn. Bạn hoàn toàn chịu rủi ro khi sử dụng trang LoveTest.vn và các tài liệu có sẵn trên trang. LoveTest.vn không chịu trách nhiệm cho bất kỳ mất mát nào gây ra do việc truyền tải, sử dụng dữ liệu hoặc nội dung không chính xác do người dùng đăng lên. Bạn có trách nhiệm thực hiện các biện pháp phòng ngừa để đảm bảo rằng bất kỳ tài liệu nào mà bạn có từ LoveTest.vn là không có virus hoặc các cấu phần gây hại khác. Bạn chấp nhận rằng LoveTest.vn sẽ không được cung cấp không bị gián đoạn hoặc không có lỗi, rằng các lỗi có thể không được khắc phục hoặc rằng LoveTest.vn hoặc máy chủ lưu trữ trang web có thể không có virus hoặc lỗi, phần mềm gián điệp, Trojan hoặc bất kỳ phần mềm gây hại tương tự. LoveTest.vn không chịu trách nhiệm cho bất kỳ tổn thất nào đối với phần cứng, phần mềm máy tính hoặc các thiết bị hoặc công nghệ khác bao gồm, nhưng không giới hạn, các tổn thất từ bất kỳ việc vi phạm bảo mật hoặc từ bất kỳ virus, lỗi, giả mạo, lừa đảo, thiếu hụt, gián đoạn, sai sót hoặc chậm trễ nào trong việc vận hành hoặc truyền tải, lỗi dòng máy tính hoặc lỗi mạng hoặc bất kỳ vấn đề kỹ thuật hoặc sự cố nào khác.
Chúng tôi có quyền sửa đổi, chỉnh sửa hoặc thay đổi những Điều khoản này tại bất kỳ thời điểm nào. Nếu chúng tôi thực hiện điều này thì những thay đổi sẽ được đăng trên trang này và chúng tôi sẽ nêu rõ ngày có hiệu lực của bản cập nhật ở cuối những Điều khoản này. Nếu chúng tôi thực hiện thay đổi nghiêm trọng, chúng tôi sẽ liên hệ với bạn để thông báo cho bạn biết. Bạn nên thường xuyên ghé thăm trang này để cập nhật các thay đổi.
Nếu bạn không chấp nhật bất kỳ thay đổi nào đối với những Điều khoản này, bạn nên ngừng sử dụng LoveTest.vn ngay lập tức. Nếu bạn tiếp tục sử dụng trang này sau khi thay đổi, bạn đã tự động chấp nhận thay đổi đó và bạn sẽ bị ràng buộc về mặt pháp lý đối với Điều khoản cập nhật mới.
Nếu, vì bất kỳ lý do nào, việc cung cấp những Điều khoản này được tuyên bố là bất hợp pháp, không có giá trị hoặc không thể thực thi bởi một tòa án có thẩm quyền xét xử, thì ở mức độ điều khoản đó là bất hợp pháp, không có giá trị hoặc không thể thực thi, điều khoản đó sẽ bị tách ra và xóa khỏi các Điều khoản và các phần còn lại của Điều khoản sẽ vẫn tồn tại và duy trì đầy đủ và có hiệu lực và tiếp tục được ràng buộc và có hiệu lực thi hành.
Điều khoản này thiết lập toàn bộ thỏa thuận và sự hiểu biết giữa chúng tôi và bạn liên quan đến việc sử dụng LoveTest.vn của bạn và thay thế tất cả các thỏa thuận, đại diện, sắp xếp trước đó giữa chúng ta (bằng miệng hoặc văn bản). Không có gì trong những Điều khoản này sẽ giới hạn hoặc miễn trừ bất kỳ trách nhiệm pháp lý nào do cố ý trình bày sai.
Không có việc không thực hiện hoặc chậm trễ bởi chúng tôi trong việc thực thi bất kỳ quyền, quyền hạn hoặc đặc quyền theo Điều khoản này sẽ được hoạt động như là việc từ bỏ quyền đó hoặc chấp chận bất kỳ sự thay đổi nào của Điều khoản này hay không thực hiện, thực hiện duy nhất hoặc một phần bởi một trong hai bên đối với bất kỳ quyền, quyền hạn hoặc đặc quyền nào ngăn cản việc thực hiện thêm quyền đó hoặc thực hiện bất kỳ quyền, quyền hạn hoặc đặc quyền nào khác.
Không có gì trong các Điều khoản này sẽ trao hoặc có ý trao bất kỳ quyền nào cho bất kỳ bên thứ ba nào.
Những Điều khoản này và bất kỳ tranh chấp hoặc khiếu nại nào phát sinh ngoài hoặc có liên quan đến những điều khoản đó hoặc bản chất có vấn đề (bao gồm các tranh chấp hoặc khiếu nại không theo hợp đồng) sẽ được điều chỉnh và hiểu theo luật pháp của Latvia và tuân theo quyền xét xử không độc quyền của các Tòa án Lativa. Trong trường hợp có sự khác biệt giữa phiên bản ngôn ngữ tiếng Anh và bản dịch của những Điều khoản này thì bản Tiếng Anh sẽ được áp dụng.
Bạn nên bấm vào các liên kết dưới đây và đọc mọi thứ ít nhất một lần:

Chính sách Quyền riêng tư: chúng tôi thu thập dữ liệu cá nhân gì và cách chúng tôi sử dụng thông tin đó 
Nên và Không nên: những thông tin này để giúp đảm bảo rằng mọi người có thể sử dụng LoveTest.vn một cách an toàn và có trách nhiệm 
Điều cơ bản về An toàn và Bảo mật: hướng dẫn của LoveTest.vn để được an toàn trên mạng 
Chính sách Lạm dụng: hướng dẫn của chúng tôi về điều gì được phép - và điều gì không được phép - trên trang của chúng tôi 
Chính sách Cookie: cách chúng tôi sử dụng cookie trên trang
Những Điều khoản Sử dụng này được cập nhật lần cuối cùng vào 06/04/2014</textarea>
		<br/><br/>
		<input type="checkbox" name="cb_rules" id="cb_rules">Tôi đã đọc và đồng ý với điều khoản sử dụng</input><br/>
		<br/>
		<label id="lblError"></label>
		<button class="btn btn-lg btn-primary btn-block"/>Đăng ký</btn>
	</form>
	<script type="text/javascript">
		$("#register_frm").validate({
			errorLabelContainer:$("#lblError"),
			rules:{
				full_name:{
					required:true
				},
				user_name:{
					required:true,
					minlength:5,
					remote:{
						url:"{{Asset('check/check-username')}}",
						type:"POST"
					}
				},
				password:{
					required:true,
					minlength:6
				},
				password_confirmation:{
					required:true,
					minlength:6,
					equalTo:"#password"
				},
				email:{
					required:true,
					email:true,
					remote:{
						url:"{{Asset('check/check-email')}}",
						type:"POST"
					}
				},
				re_email:{
					required:true,
					email:true,
					equalTo:"#email"
				},
				cb_rules:{
					required: true
				},
				gender:{
					required:true
				},
				birthday:{
					required:true
				}
			},
			messages:{
				full_name:{
					required:"* Bạn chưa nhập họ và tên<br>"
				},
				user_name:{
					required:"* Tên đăng nhập còn thiếu<br>",
					minlength:"* Tên đăng nhập phải từ 7 kí tự trở lên<br>",
					remote: "* Tên đăng nhập đã tồn tại<br>"
				},
				password:{
					required:"* Password còn thiếu<br>",
					minlength:"* Password phải từ 6 kí tự trở lên<br>"
				},
				password_confirmation:{
					required:"* Password nhập lại còn thiếu<br>",
					minlength:"* Password nhập lại phải từ 6 kí tự trở lên<br>",
					equalTo:"* Password chưa khớp<br>"
				},
				email:{
					required:"* Địa chỉ email còn thiếu<br>",
					email:"* Địa chỉ email không chính xác<br>",
					remote:" * Địa chỉ email đã tồn tại<br>"
				},
				re_email:{
					required:"* Địa chỉ email nhập lại còn thiếu<br>",
					email:"* Địa chỉ email nhập lại không chính xác<br>",
					equalTo:"* Địa chỉ email này không khớp<br>"
				},
				cb_rules:{
					required:"* Bạn phải đồng ý với điều khoản sử dụng để đăng ký<br>"
				},
				gender:{
					required:"* Bạn phải lựa chọn giới tính<br>"
				},
				birthday:{
					required:"* Bạn chưa nhập ngày tháng năm sinh<br>"
				}
			}
		});
	</script>
@endsection