@extends('layouts.app')

@section('content')
<div class="container">
<div class="card mb-3">
  <img src="https://www.imf.org/~/media/Images/IMF/Topics/COVID19/covid19-special-notes.ashx?h=280&w=1099&la=en" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ไวรัสโคโรนา </h5>
    <footer class="blockquote-footer">Coronavirus Disease</footer>
    <footer class="blockquote-footer">2019-nCoV acute respiratory diseas</footer>
    <footer class="blockquote-footer">Novel coronavirus pneumonia</footer>

    <!-- <p class="card-text"><small class="text-muted">: </small>></p> -->
    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
    <div class="media">
    <div class="media-body">
        <!-- <h5 class="mt-0 mb-1">ที่มา :</h5> -->
        <hr>
        <dl class="row">

            <dt class="col-sm-3 text-truncate">สาขา :</dt>
            <dd class="col-sm-9">โรคติดเชื้อ (การแพทย์เฉพาะทาง), วิทยาปอด, เวชศาสตร์ป้องกัน </dd>

            <dt class="col-sm-3 text-truncate">อาการ :</dt>
            <dd class="col-sm-9">มีไข้, ไอ, หายใจไม่สะดวก </dd>

            <dt class="col-sm-3 text-truncate">สาเหตุ :</dt>
            <dd class="col-sm-9">โคโรนาไวรัสสายพันธุ์กลุ่มอาการทางเดินหายใจเฉียบพลันรุนแรง 2 </dd>

            <dt class="col-sm-3 text-truncate">วิธีวินิจฉัย :</dt>
            <dd class="col-sm-9">ตรวจด้วยวิธี พีซีอาร์, ภาพทางการแพทย์ </dd>

            <dt class="col-sm-3 text-truncate">การรักษา :</dt>
            <dd class="col-sm-9">รักษาตามอาการ </dd>
        </dl>
    </div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/Symptoms_of_coronavirus_disease_2019_2.0-th.svg/300px-Symptoms_of_coronavirus_disease_2019_2.0-th.svg.png" class="ml-3" alt="...">
    </div>

    <!-- ที่มา -->
    <hr>
        <h5 class="mt-0 mb-1">ที่มา :</h5>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นโรคติดเชื้อทางเดินหายใจชนิดหนึ่ง เกิดจากการติดเชื้อโคโรนาไวรัสสายพันธุ์ใหม่ 2019 (SARS-CoV-2) ซึ่งเป็นไวรัสที่มีสายพันธุกรรมเกี่ยวข้องอย่างใกล้ชิดกับไวรัสที่ก่อโรคซาร์ส 
        โรคนี้ถูกค้นพบในช่วงเวลาและเป็นสาเหตุของการระบาดทั่วของโรคติดเชื้อไวรัสโคโรนา 2019 ในปี พ.ศ. 2562–2563 เคยเป็นที่รู้จักในชื่อโรคระบบทางเดินหายใจเฉียบพลัน 2019-nCoV
        โรคปอดบวมอู่ฮั่น (Wuhan pneumonia) เป็นโรคติดเชื้อทางเดินหายใจชนิดหนึ่ง เกิดจากการติดเชื้อโคโรนาไวรัสสายพันธุ์ใหม่ 2019 (SARS-CoV-2) ซึ่งเป็นไวรัสที่มีสายพันธุกรรมเกี่ยวข้องอย่างใกล้ชิดกับไวรัสที่ก่อโรคซาร์ส 
        โรคนี้ถูกค้นพบในช่วงเวลาและเป็นสาเหตุของการระบาดทั่วของโรคติดเชื้อไวรัสโคโรนา 2019 ในปี พ.ศ. 2562–2563 เคยเป็นที่รู้จักในชื่อโรคระบบทางเดินหายใจเฉียบพลัน 2019-nCoV, 
        โรคปอดบวมอู่ฮั่น (Wuhan pneumonia)</p>
    <!-- อาการ -->
        <hr>
        <h5 class="mt-0 mb-1">อาการ :</h5>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้ติดเชื้ออาจไม่แสดงอาการหรือมีอาการเช่น มีไข้ ไอ หายใจถี่ อาการท้องเสีย หรืออาการของระบบหายใจส่วนบน (เช่น จาม มีน้ำมูก เจ็บคอ) ซึ่งพบไม่มากนัก ผู้ป่วยสามารถพัฒนาไปสู่โรคปอดอักเสบรุนแรง ความล้มเหลวของหลายอวัยวะ 
        และการเสียชีวิต ระยะเวลาการฟักตัวของโรค เวลาสำหรับการเริ่มแสดงอาการประมาณ 2 ถึง 10 วันระบุโดยองค์การอนามัยโลก[28] และ 2 ถึง 14 วันระบุโดยศูนย์ควบคุมและป้องกันโรคแห่งสหรัฐอเมริกา (CDC)[25]</p>
    <!-- สาเหตุ -->
        <hr>
        <div class="media">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/SARS-CoV-2_%28yellow%29.jpg/220px-SARS-CoV-2_%28yellow%29.jpg" class="mr-3" alt="...">
        <div class="media-body">
            <h5 class="mt-0">สาเหตุ :</h5>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สาเหตุของโรคนี้คือไวรัสที่มีชื่อว่า severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) 
            หรือที่เรียกว่า โคโรนาไวรัสสายพันธุ์ใหม่ 2019 (2019-nCoV) เชื่อว่าเป็นโรคติดเชื้อไวรัสที่รับมาจากสัตว์ (Zoonotic)
            รูปแบบการแพร่กระจายหลักของโรคคือผ่านละอองสารคัดหลั่งของระบบทางเดินหายใจจากบุคคลที่ติดเชื้อซึ่งได้ จาม หรือไอ หรือจากการหายใจออก
            เจ้าหน้าที่ในนครเซี่ยงไฮ้ยืนยันรูปแบบการถ่ายทอดเชื้อหลายแบบรวมถึงการส่งผ่านโดยตรง, การส่งผ่านโดยการสัมผัส และผ่านละอองในอากาศ 
            ซึ่งสองแบบหลังเกี่ยวโยงกับการส่งผ่านเมื่อ มีคนสัมผัสกับพื้นผิวที่ปนเปื้อนด้วยละอองของสารคัดหลั่งจากระบบทางเดินหายใจ และการหายใจเอาอากาศที่มีการฟุ้งกระจายของละอองสารคัดหลั่งจากระบบทางเดินหายใจเข้าไป
            </p>

            <hr>
            <h5 class="mt-0">สาเหตุ :</h5>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สาเหตุของโรคนี้คือไวรัสที่มีชื่อว่า severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) 
            หรือที่เรียกว่า โคโรนาไวรัสสายพันธุ์ใหม่ 2019 (2019-nCoV) เชื่อว่าเป็นโรคติดเชื้อไวรัสที่รับมาจากสัตว์ (Zoonotic)
            รูปแบบการแพร่กระจายหลักของโรคคือผ่านละอองสารคัดหลั่งของระบบทางเดินหายใจจากบุคคลที่ติดเชื้อซึ่งได้ จาม หรือไอ หรือจากการหายใจออก
            เจ้าหน้าที่ในนครเซี่ยงไฮ้ยืนยันรูปแบบการถ่ายทอดเชื้อหลายแบบรวมถึงการส่งผ่านโดยตรง, การส่งผ่านโดยการสัมผัส และผ่านละอองในอากาศ 
            ซึ่งสองแบบหลังเกี่ยวโยงกับการส่งผ่านเมื่อ มีคนสัมผัสกับพื้นผิวที่ปนเปื้อนด้วยละอองของสารคัดหลั่งจากระบบทางเดินหายใจ และการหายใจเอาอากาศที่มีการฟุ้งกระจายของละอองสารคัดหลั่งจากระบบทางเดินหายใจเข้าไป
            </p>
        </div>
        </div>



    <p class="card-text"><small class="text-muted">4 พฤษภาคม 2563 เวลา 00:39 น.</small> <br>
    <small class="text-muted">https://th.wikipedia.org/wiki/โรคติดเชื้อไวรัสโคโรนา 2019</small></p>
  </div>
</div>
</div>
@endsection
