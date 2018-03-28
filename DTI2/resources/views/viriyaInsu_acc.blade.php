@extends('layouts.main')
@section('title' , 'ประกันอุบัติเหตุ')

@extends('head')
@extends('header')

@extends('footer')


@section('content')
<div class="container ">
    <div class="row">
        <div class="col dontwantpadding">
                
            <div class="jumbotron parallax-window" data-parallax="scroll" data-image-src="/img/bg.jpg">
                    <div class="jumbotron" style="background-color:rgba(255, 255, 204, 0.9);" >
                            <div id="plan-title">
                                <h1 class="display-6 font-weight-bold" >ประกันภัยอุบัติเหตุและสุขภาพ</h1>

                             </div>
                            <hr class="my-4">


                                <div class="card">
                                        <div class="card-header">
                                                <h4>ประกันภัยอุบัติเหตุส่วนบุคคล "อุ่นใจ"</h4>
                                        </div>
                                        <div class="card-body">
                                                <p class="card-text">การประกันภัยอุบัติเหตุส่วนบุคคล "อุ่นใจ" จะช่วยบรรเทาภาระทางการเงินในกรณีที่
                                                    ผู้ทำประกันอุบัติเหตุเสียชีวิต สูญเสียอวัยวะ ทุพพลภาพ หรือได้รับบาดเจ็บ
                                                    อันเนื่องจากอุบัติเหตุ รวมถึงการถูกฆาตกรรมหรือถูกทำร้ายร่างกาย
                                                    ด้วยความคุ้มครองตลอด 24 ชั่วโมง ทั่วโลก
                                                </p>
                                        </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                            <h4>เหมาะสำหรับ</h4>
                                    </div>
                                    <div class="card-body">
                                            <p class="card-text">- บุคคลทั่วไป อายุ 5-60 ปี </p>
                                    </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                        <h4>ทรัพย์สินที่เอาประกัน/วัตถุที่เอาประกัน</h4>
                                </div>
                                <div class="card-body">
                                        <p class="card-text">- ตัวบุคคล </p>
                                </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                    <h4>ความคุ้มครอง</h4>
                            </div>
                            <div class="card-body">
                                    <p class="card-text">ประกันอุบัติเหตุส่วนบุคคล "อุ่นใจ" มีความคุ้มครองทั้งหมด 2 แผน ให้ผู้ทำประกันได้เลือกความคุ้มครองตามความเหมาะสม</p>
                            </div>
                        </div>




                        
                            <div class="table-travel ">
                                <table class="table dontwantpadding">

                                    <thead class="thead-dark table-bordered text-center">

                                    <tr>
                                        <th class="white_b" scope="col">แผน</th>
                                        <th class="white_b" scope="col">ความคุ้มครอง</th>
                                        <th class="white_b" scope="col">เบี้ยประกัน/ปี</th>
                                    </tr>
                                    </thead>
                                    <tbody class="table-light">
                                    <tr>
                                        <td style="width: 15%">อุ่นใจ 24 ชั่วโมง</td>
                                        <td style="width: 70%">คุ้มครองตาม **อบ.2 ทุนประกันสูงสุด 500,000 บาท เบี้ยประกันภัยจะขึ้นอยู่กับกลุ่มอาชีพของท่าน อีกทั้งยังสามารถเลือกได้ว่าจะคุ้มครองค่ารักษาพยาบาลหรือไม่ ตามความต้องการของท่าน</td>
                                        <td style="width: 15%">เบี้ยประกัน เริ่มต้น <br> เพียง 208 บาท</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 15%">อุ่นใจ 1</td>
                                        <td style="width: 70%">คุ้มครองตาม *อบ.1 ทุนประกันสูงสุด 500,000 บาท โดยให้ความคุ้มครองเพิ่มเติมจากเดิม คือ คุ้มครองค่าปลงศพ และคุ้มครองค่าชดเชยรายได้ระหว่างการพักรักษาตัว</td>
                                        <td style="width: 15%">เบี้ยประกัน เริ่มต้น <br> เพียง 1,700 บาท</td>
                                    </tr>
                                            
                                    </tbody>
                                </table>
                                
                            </div>

                            <div class="card">
                                <div class="card-header">
                                        <h4>ระยะเวลาความคุ้มครอง</h4>
                                </div>
                                <div class="card-body">
                                        <img src="https://www.viriyah.co.th/th/img/customer-product/one-year.jpg" alt="">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                        <h4>หมายเหตุ</h4>
                                </div>
                                <div class="card-body">
                                    <p>- ผู้ขอเอาประกันภัยจะต้องมีอายุระหว่าง 5-60 ปี<br>
                                    - ผู้ทำประกันจะต้องมีสุขภาพสมบูรณ์ ไม่มีอวัยวะส่วนใดบกพร่องหรือพิการ<br>
                                    - ซื้อความคุ้มครองได้ 1 คน/1 แผนความคุ้มครองเท่านั้น</p>

                                    <p>*ข้อความที่ปรากฎนี้เป็นเพียงสรุปความคุ้มครองสาระสำคัญเท่านั้น หากต้องการรายละเอียดเพิ่มเติม กรุณาติดต่อบริษัทวิริยะประกันภัย จำกัด (มหาชน)   หรือติดต่อตัวแทนประกันภัยของท่าน</p>
                                </div>
                            </div>








                    </div>

                    
                    
            </div>

        </div>
    </div>

</div>

@endsection
