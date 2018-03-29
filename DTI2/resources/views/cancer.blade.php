@extends('layouts.main')
@section('title' , 'ประกันอุบัติเหตุ')

@extends('head')

@extends('footer')


@section('content')
<div class="container ">
    <div class="row">
        <div class="col dontwantpadding">
                
            <div class="jumbotron parallax-window" data-parallax="scroll" data-image-src="https://www.easyinsure.co.th/news/wp-content/uploads/helty.jpg">
                    <div class="jumbotron" style="background-color:rgba(255, 255, 204, 0.9);" >
                            <div id="plan-title">
                                <h1 class="display-6 font-weight-bold wow fadeIn animated" >การประกันภัยสุขภาพ มะเร็ง เซฟ เซฟ</h1>
                                <ul class="fa-ul wow fadeIn animated" data-wow-delay="0.5s">
                                        <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>คุ้มครองการเป็นโรคมะเร็งทุกชนิด (ยกเว้นมะเร็งผิวหนัง) ตรวจพบครั้งแรกว่าเป็นมะเร็งระยะใดก็ได้</li>
                                        <li>กรณีตรวจพบภายใน 90 วันหลังจากซื้อประกัน บริษัทจ่ายเบี้ยประกันภัย 999 คืนให้ทั้งหมด</li>
                                        <li>กรณีตรวจพบหลังจากซื้อประกัน 90 วัน บริษัทจ่ายค่าทดแทน 100,000 บาท</li>
                                        <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>คุ้มครองการเป็นโรคมะเร็งผิวหนัง ในวงเงิน 10% ของวงเงินประกันภัยโรคมะเร็ง</li>
                                        <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>คุ้มครองค่ารักษาพยาบาลกรณีการทำเคมีบำบัดและรังสีรักษา ต่อครั้งไม่เกิน 5,000 บาท สูงสุด 10,000 บาท</li>
                                </ul>
                             </div>
                            <hr class="my-4">
                            <div id="plan-table">
                                    <table  class="table wow fadeIn animated" data-wow-delay="0.5s">
                                        <thead class="thead-dark table-bordered text-center">
                                            <tr>
                                                    <th rowspan="2">ความคุ้มครอง</th>
                                                    <th colspan="2">จำนวนจำกัดความรับผิด</th>
                                                </tr>
                                                <tr>
                                                    <th style="width:15%">อายุ 1-54 ปี</th>
                                                    <th>อายุ 55-60 ปี (กรณีต่ออายุ)</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-light">
                                                <tr>
                                                    <td>
                                                        <span class="font-weight-bold">โรคมะเร็งทุกชนิด</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-center">100,000 บาท</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-center">50,000 บาท</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span  class="font-weight-bold">โรคมะเร็งผิวหนัง</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-center">10,000 บาท</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-center">10,000 บาท</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span  class="font-weight-bold">ผลประโยชน์การทำเคมีบำบัดและรังสีรักษา ต่อครั้งไม่เกิน 5,000 สูงสุด xxxxx</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-center">10,000 บาท</span>
                                                    </td>
                                                    <td>
                                                        <span class="text-center">10,000 บาท</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div id="plan-exclusion" class="wow fadeIn animated" data-wow-delay="0.5s">
                                        <h5 class="font-weight-bold wow fadeIn animated" data-wow-delay="0.5s">เงื่อนไขการรับประกันภัย</h5>
                                        <ul class="wow fadeIn animated" data-wow-delay="0.5s">
                                            <li>ผู้มีอายุตั้งแต่ 1- 54 ปี</li> 
                                            <li>สุขภาพร่างกายสมบูรณ์แข็งแรง</li> 
                                            <li>ไม่เคยเป็นโรคมะเร็งมาก่อน หรือไม่เคยได้รับการตรวจว่าเป็นมะเร็งมาก่อนการซื้อประกันภัยนี้</li>
                                            <li>สามารถซื้อได้ 1 กรมธรรม์ ต่อ คน ต่อ ปี</li>
                                        </ul>
                                        <h5 class="font-weight-bold wow fadeIn animated" data-wow-delay="0.5s">ข้อยกเว้น</h5>
                                                กรมธรรม์ประกันภัยนี้ไม่คุ้มครอง
                                        <ul class="wow fadeIn animated" data-wow-delay="0.5s">
                                            <li>ผู้เอาประกันภัยได้รับการวินิจฉัยว่าเป็นโรคมะเร็งก่อนวันที่กรมธรรม์ประกันภัยปีแรกมีผลบังคับไม่ว่าจะได้รับการรักษาให้หายแล้วก็ตาม (Pre-existing Conditions)</li>
                                            <li>การปรากฏหรือทราบอาการของโรคมะเร็งหรือความผิดปกติที่สัมพันธ์กับโรคมะเร็ง  ไม่ว่าประเภทหรือชนิดใดๆ ภายในระยะเวลาที่ไม่คุ้มครอง (Waiting period) 90 วัน นับจากวันที่กรมธรรม์ประกันภัยนี้เริ่มมีผลบังคับครั้งแรก</li>
                                            <li>โรคมะเร็งที่เกิดขึ้นกับอวัยวะที่ผู้เอาประกันภัยเคยเป็นโรค หรือยังคงมีอาการของโรค และยังไม่ได้รับการรักษาให้หายขาดก่อนการเอาประกันภัย ดังต่อไปนี้</li>
                                            <ul>
                                                <li>โรคไวรัสตับอักเสบ ชนิด B &amp; C (ทั้งชนิดที่เป็นพาหะหรือไม่เป็นพาหะ) โรคตับแข็ง โรคตับอักเสบ</li>
                                                <li>โรคพิษสุราเรื้อรัง</li>
                                                <li>โรคปอดอักเสบเรื้อรัง โรคถุงลมโป่งพองในปอด โรคปอดอุดกั้นเรื้อรัง</li>
                                                <li>โรคลำไส้ใหญ่อักเสบเรื้อรัง</li>
                                                <li>โรคปากมดลูกอักเสบเรื้อรัง หรือช่องคลอดอักเสบเรื้อรัง</li>
                                            </ul>
                                            <li>โรคมะเร็งที่เกิดขึ้นกับอวัยวะที่ผู้เอาประกันภัยเคยเป็นเนื้องอก ก้อนเนื้อ ตุ่มเนื้อ หรือซีสต์ที่ยังไม่ได้รับการผ่าตัด หรือได้รับการรักษาด้วยการผ่าตัดออกแล้วแต่น้อยกว่า 2 ปี ก่อนวันที่กรมธรรม์ประกันภัยนี้เริ่มมีผลบังคับครั้งแรก อย่างไรก็ตามหากผู้เอาประกันภัยได้รับความคุ้มครองภายใต้กรมธรรม์ประกันภัยนี้มาต่อเนื่องอย่างน้อย 2 ปี และตรวจพบว่าเป็นโรคมะเร็งเป็นครั้งแรกหลังจากนั้น บริษัทจะไม่นำข้อยกเว้นนี้มาใช้บังคับ</li>
                                            <li>โรคมะเร็งที่เกิดจากการติดเชื้อ HIV มะเร็งหลอดเลือด (Karposi’s Sarcoma) และมะเร็งที่สัมพันธ์กับโรคเอดส์ (AIDS)</li>
                                        </ul>
                                    </div>
                                    
                                    <div id="plan-remark">
                                            <p class="wow fadeIn animated" data-wow-delay="0.5s">
                                                <strong>หมายเหตุ</strong> รายละเอียดของความคุ้มครอง เงื่อนไข และข้อยกเว้น เป็นไปตามที่ระบุไว้ในกรมธรรม์ประกันภัย
                                            </p>
                                    </div>                                    








                    </div>

                    
                    
            </div>

        </div>
    </div>

</div>

@endsection
