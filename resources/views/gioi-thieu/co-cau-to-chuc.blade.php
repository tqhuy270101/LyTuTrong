
<!DOCTYPE html>
<html>
<head>
    <title>Cơ cấu tổ chức</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('../frontend/css/load.css')}}">
    

</head>
<body>
    <!-- loadind -->
    <x-loading></x-loading>
    <!-- menu -->
    <x-menu></x-menu>
    <div class="container-fluid background">
        <div class="row justify-content-around link">
            <div class="col-10 offset-col-2">
                <h1 class="text-title">Cơ cấu tổ chức</h1>
            </div>
        </div>
        <div class="row justify-content-around link">
            <div class="col-10">
                <span><a class="text-link" href="{{URL::to('/')}}">Trang chủ</a></span> <i class="fas fa-arrow-right text-white"></i>
                <span><a class="text-link" href="{{URL::to('/gioithieu/co-cau-to-chuc')}}">Cơ cấu tổ chức</a></span> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="margin-top: 50px; padding:30px" align="center">
            <div class="col">
                <h1 class="text-font-playfair-dislay"><span style="color:#FC9928">Cơ cấu</span> tổ chức</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="text-align:center">Năm học 2020-2021, trường THCS Lý Tự Trọng - Sơn Trà - TP Đà Nẵng tiếp tục phấn
                 đấu không ngừng.Với sứ mệnh, nhiệm vụ được giao, tập thể HĐSP nhà trường tiếp tục duy trì và xây dựng 
                cơ cấu nhân sự phù hợp với tiêu chuẩn, nhu cầu của một đơn vị trường học cấp THCS.</p>
                <h5>I. BAN GIÁM HIỆU NHÀ TRƯỜNG</h5>
                <p>Nhiệm vụ và quyền hạn của Hiệu trưởng, Phó Hiệu trưởng được thực hiện theo quy định tại 
                    các Điều 18, 19 và 20 của Điều lệ trường trung học ban hành kèm theo Thông tư số 12/2011/TT-BGDĐ
                    T ngày 28 tháng 3 năm 2011 của Bộ Giáo dục và Đạo tạo</p>
                    @foreach($hieutruong as $key => $ht)
                    <b>1.Hiệu trưởng: {{$ht->lanhdao_hoten}}</b>
                    @endforeach
                
                <p>Hiệu trưởng thực hiện các nhiệm vụ theo Điều lệ trường trung học, các nhiệm vụ khác do lãnh đạo cấp trên phân công: <br>

            - Xây dựng, tổ chức bộ máy nhà trường;<br>

            Thực hiện các quyết nghị của Hội đồng trường được quy định tại khoản 3 Điều 20 của Điều lệ trường trung học;<br>

            Xây dựng quy hoạch phát triển nhà trường; xây dựng và tổ chức thực hiện kế hoạch nhiệm vụ năm học; báo cáo, đánh giá kết quả thực hiện trước Hội đồng trường và các cấp có thẩm quyền;<br>

            - Thành lập các tổ chuyên môn, tổ văn phòng và các hội đồng tư vấn trong nhà trường; bổ nhiệm tổ trưởng, tổ phó; đề xuất các thành viên của Hội đồng trường trình cấp có thẩm quyền quyết định;<br>

            - Quản lý giáo viên, nhân viên; quản lý chuyên môn; phân công công tác, kiểm tra, đánh giá xếp loại giáo viên, nhân viên; thực hiện công tác khen thưởng, kỉ luật đối với giáo viên, nhân viên; thực hiện việc tuyển dụng giáo viên, nhân viên; ký hợp đồng lao động; tiếp nhận, điều động giáo viên, nhân viên theo quy định của Nhà nước;<br>

            - Quản lý học sinh và các hoạt động của học sinh do nhà trường tổ chức; xét duyệt kết quả đánh giá, xếp loại học sinh, ký xác nhận học bạ, quyết định khen thưởng, kỷ luật học sinh;<br>

            - Quản lý tài chính, tài sản của nhà trường;<br>

            - Thực hiện các chế độ chính sách của Nhà nước đối với giáo viên, nhân viên và học sinh; tổ chức thực hiện quy chế dân chủ trong hoạt động của nhà trường; thực hiện công tác xã hội hoá giáo dục của nhà trường;<br>

            - Chỉ đạo thực hiện các phong trào thi đua, các cuộc vận động của ngành; thực hiện công khai đối với nhà trường;<br>

            - Được đào tạo nâng cao trình độ, bồi dưỡng chuyên môn, nghiệp vụ và hưởng các chế độ, chính sách theo quy định của pháp luật.</p>
                @foreach($hieupho1 as $key=> $hp1)
                <b>2. Phó Hiệu trưởng: {{$hp1->lanhdao_hoten}}</b>
                @endforeach
                
                <p>Thực hiện nhiệm vụ và quyền hạn theo Điều lệ trường trung học đồng thời, thực hiện và chịu trách nhiệm trước Hiệu trưởng, về các nhiệm vụ được Hiệu trưởng phân công.</p>
                @foreach($hieupho2 as $key => $hp2)
                <b>3. Phó Hiệu trưởng: {{$hp2->lanhdao_hoten}}</b>
                @endforeach
               
                <p>Thực hiện nhiệm vụ và quyền hạn theo Điều lệ trường trung học đồng thời, thực hiện và chịu trách nhiệm trước Hiệu trưởng, về các nhiệm vụ được Hiệu trưởng phân công.</p>
                <p>2 Phó Hiệu trưởng đều có nhiệm vụ là:</p>
                <p>- Cùng với Hiệu trưởng chịu trách nhiệm trước cấp trên về các công việc được giao; <br>

                -Thay mặt Hiệu trưởng điều hành hoạt động của nhà trường khi được Hiệu trưởng uỷ quyền;<br>

                -Được đào tạo nâng cao trình độ, bồi dưỡng chuyên môn, nghiệp vụ và hưởng các chế độ, chính sách theo quy định của pháp luật.</p>
            
            <b><i>(*) Quản lý công tác chuyên môn</i></b>
            <p>- Phụ trách chỉ đạo, quản lý các hoạt động dạy và học, Dạy-học nghề phổ thông; công tác giáo vụ; thay mặt Hiệu trưởng điều hành các hoạt động của nhà trường khi được ủy quyền. <br>

        - Giữ chức Phó chủ tịch các Hội đồng khoa học, thi đua – khen thưởng, kỷ luật, tuyển sinh và các hội đồng tư vấn khác;<br>

        - Soạn thảo thời khóa biểu trình Hiệu trưởng phê duyệt và ban hành, soạn thảo các kế hoạch, báo cáo, thống kê về hoạt động dạy-học, giáo vụ; kiểm tra, thanh tra giáo viên, ký học bạ và các sổ sách văn phòng;</p>
            <b><i>(*) Trực tiếp phụ trách các hoạt động giáo dục ngoài giờ lên lớp, lao động-vệ sinh, an ninh trật tự; bồi dưỡng giáo viên...</i></b>
            <p>- Phụ trách chỉ đạo, quản lý các hoạt động ngoài giờ lên lớp, các tổ chức đoàn thể và các hoạt động xã hội; triển khai các cuộc thi văn hóa, văn nghệ, thể dục-thể thao, phong trào xã hội; Thay mặt Hiệu trưởng điều hành các hoạt động của nhà trường khi được ủy quyền. <br>

- Phụ trách chỉ đạo, quản lý các hoạt động lao động-vệ sinh, an ninh trật tự; bồi dưỡng giáo viên; triển khai các cuộc thi về chuyên môn;</p>
        <b>3. Quan hệ công tác trong Ban Giám hiệu</b>
        <p>Phó Hiệu trưởng là người giúp Hiệu trưởng, được Hiệu trưởng phân công phụ trách chỉ đạo một số lĩnh vực công tác và quản lý một số bộ phận thuộc nhà trường; chịu trách nhiệm trước Hiệu trưởng về các nhiệm vụ được phân công. <br>

Phó Hiệu trưởng có thể thay mặt Hiệu trưởng giải quyết công việc được Hiệu trưởng phân công theo 02 nguyên tắc sau :<br>

- Được nhân danh, sử dụng quyền hạn của Hiệu trưởng và chịu trách nhiệm trước Hiệu trưởng, trước pháp luật về các quyết định của mình trong giải quyết công việc thuộc các lĩnh vực được phân công.<br>

- Chủ động giải quyết các công việc được giao; nếu có vấn đề nằm ngoài tầm trách nhiệm, các vấn đề mới phát sinh, chưa có các quy định pháp quy điều chỉnh thì phải kịp thời báo cáo, xin ý kiến chỉ đạo của Hiệu trưởng để giải quyết.<br>

Khi Phó Hiệu trưởng đi vắng, Hiệu trưởng sẽ trực tiếp giải quyết các công việc nảy sinh.<br>

Khi Hiệu trưởng đi vắng hoặc không có điều kiện trực tiếp giải quyết công việc, chủ trì các cuộc họp thì Phó Hiệu trưởng được uỷ quyền thay mặt Hiệu trưởng giải quyết và điều hành các công việc của Nhà trường.<br>

Trong quá trình thực hiện, căn cứ vào tình hình thực tế, Hiệu trưởng sẽ điều chỉnh việc phân công cho phù hợp đảm bảo việc thực hiện các nhiệm vụ công tác thông suốt và đạt hiệu quả cao.</p>
            <h5>II. TỔ CHUYÊN MÔN</h5>
            <p>Trường THCS Nguyễn Văn Nghi gồm có 09 tổ chuyên môn 01 tổ Hành chính – Văn phòng và 01 tổ phục vụ được tổ chức hoạt động theo các Điều 16 và 17 của Điều lệ trường trung học: <br>

            - Tổ Toán ;<br>

            - Tổ Ngữ Văn;<br>

            - Tổ Ngoại ngữ;<br>

            - Tổ Lý -  Hóa;<br>

            - Tổ Sinh;<br>

            - Tổ Sử – GDCD;<br>

            - Tổ Địa;<br>

            - Tổ Năng khiếu;<br>

            - Tổ Khoa học;</p>
            <p>Mỗi tổ chuyên môn có 01 tổ trưởng, 01 tổ phó chịu sự quản lý chỉ đạo của Hiệu trưởng, 
                do Hiệu trưởng bổ nhiệm và giao nhiệm vụ vào đầu năm học. Theo đó, tổ chuyên môn có những nhiệm vụ sau:</p>
            <p>- Xây dựng kế hoạch hoạt động chung của tổ, hướng dẫn xây dựng và quản lý kế hoạch cá nhân của tổ viên theo kế hoạch giáo dục,
                     phân phối chương trình môn học của Bộ Giáo dục và Đào tạo và kế hoạch năm học của nhà trường;</p>
            <p>- Tổ chức bồi dưỡng chuyên môn và nghiệp vụ; tham gia đánh giá, xếp loại các thành viên của tổ theo các quy định của Bộ Giáo dục và Đào tạo;</p>    
            <p>- Đề xuất khen thưởng, kỷ luật đối với giáo viên thuộc tổ.</p>
            <p>- Tổ chuyên môn sinh hoạt hai tuần một lần.</p>
            <p>Tổ Hành chính - Văn phòng gồm có 02 giáo viên và 10 nhân viên đảm nhiệm các phần hành: kế toán, thủ quĩ, văn thư – lưu trữ, y tế, thư viện, 
                thiết bị và Đoàn – Đội gồm có 01 tổ trưởng và 01 Phó tổ trưởng hoạt động dưới sự giám sát, chỉ đạo của Ban Giám hiệu mà đứng đầu là Hiệu trưởng nhà trường...</p>
                </div>
        </div>
    </div>


    <x-footer></x-footer>

<script type="text/javascript" src="{{asset('../frontend/js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('../frontend/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>