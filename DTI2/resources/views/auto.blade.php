@extends('layouts.main')
@section('title' , 'ประกันอุบัติเหตุ')

@extends('head')

@extends('footer')


@section('content')
<div class="container ">
    <div class="row">
        <div class="col dontwantpadding">
                
            <div class="jumbotron parallax-window" data-parallax="scroll" data-image-src="/img/bg.jpg">

                <nav class="navbar navbar-light bg-dark">
                        <div class="nav nav-pills" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-ap2p-tab" data-toggle="tab" href="#nav-ap2p" role="tab" aria-controls="nav-ap2p" aria-selected="true">Auto Perfect 2+</a>
                                <a class="nav-item nav-link" id="nav-ap3p-tab" data-toggle="tab" href="#nav-ap3p" role="tab" aria-controls="nav-ap3p" aria-selected="false">Auto Perfect 3+</a>
                                <a class="nav-item nav-link" id="nav-ap3-tab" data-toggle="tab" href="#nav-ap3" role="tab" aria-controls="nav-ap3" aria-selected="false">Auto Perfect 3</a>
                        </div>
                </nav>
                    <div class="jumbotron" style="background-color:rgba(255, 255, 204, 0.9); border-radius: 0px 0px 5px 5px;" >

                            <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-ap2p" role="tabpanel" aria-labelledby="nav-ap2p-tab">

                                            <div id="plan-title">
                                                    <h1 class="display-6 font-weight-bold " >ประกันภัยรถยนต์ ประเภท 2+</h1>
                                                    <ul class="fa-ul " >
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>คุ้มครองรถยนต์กรณี สูญหาย ไฟไหม้</li>
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>จ่ายค่าซ่อมรถจากอุบัติเหตุที่เกิดจากคู่กรณีที่เป็นรถยนต์ด้วยกัน 100,000 บาท</li>
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>ไม่ต้องตรวจสภาพรถ</li>
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>ไม่มีความเสียหายส่วนแรก</li>
                                                    </ul>
                                            </div>
                                                <hr class="my-4">

                                                <div class="plan-table">
                                                        <table  class="table " >
                                                            <thead class="thead-dark table-bordered text-center">
                                                                <tr>
                                                                    <th>ความคุ้มครอง</th>
                                                                    <th>จำนวนจำกัดความรับผิด</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="table-light">
                                                                <tr>
                                                                    <td colspan="2"><span class="font-weight-bold">ความเสียหายต่อรถยนต์ที่เอาประกันภัย</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1. ความเสียหายต่อรถยนต์กรณีชนกับยานพาหนะทางบก</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. รถยนต์สูญหาย</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. รถยนต์ไฟไหม้</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท</td>
                                                                </tr>
                                                
                                                                <tr>
                                                                    <td colspan="2"><span class="font-weight-bold">ความคุ้มครองขับขี่และผู้โดยสารภายในรถที่เอาประกันภัย</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1. อุบัติเหตุส่วนบุคคล</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท/คน</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. ค่ารักษาพยาบาล</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท/คน</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. การประกันตัวผู้ขับขี่</td>
                                                                    <td class="text-center"><span class="number">200,000</span>บาท/คน</td>
                                                                </tr>
                                                
                                                                <tr>
                                                                    <td colspan="2"><span class="font-weight-bold">ความรับผิดชอบต่อบุคคลภายนอก</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1. ความรับผิดชอบต่อชีวิต ร่างกาย อนามัย</td>
                                                                    <td class="text-center">
                                                                      <span class="number">1,000,000</span>บาท/คน<br>
                                                                      <span class="number">10,000,000</span>บาท/ครั้ง
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. ความรับผิดชอบต่อทรัพย์สิน</td>
                                                                    <td class="text-center"><span class="number">1,000,000</span>บาท/ครั้ง</td>
                                                                </tr>
                                                
                                                                <tr class="price">
                                                                    <td>รถเก๋งใช้ส่วนบุคคลคุ้มครอง 5 ที่นั่ง (รถญี่ปุ่น)</td>
                                                                    <td class="text-center">
                                                                        <span class="number">7,300</span>บาท<br>
                                                                    </td>
                                                                </tr>
                                                                <tr class="price">
                                                                    <td>รถเก๋งใช้ส่วนบุคคลคุ้มครอง 5 ที่นั่ง (รถยุโรป)</td>
                                                                    <td class="text-center">
                                                                        <span class="number">8,300</span>บาท<br>
                                                                    </td>
                                                                </tr>
                                                                <tr class="price">
                                                                    <td>รถกระบะคุ้มครอง 3 ที่นั่ง</td>
                                                                    <td class="text-center">
                                                                        <span class="number">7,300</span>บาท<br>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                    </div>


                                    <div class="tab-pane fade" id="nav-ap3p" role="tabpanel" aria-labelledby="nav-ap3p-tab">
                                        
                                            <div id="plan-title">
                                                    <h1 class="display-6 font-weight-bold " >ประกันภัยรถยนต์ ประเภท 3+</h1>
                                                    <ul class="fa-ul " >
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>จ่ายค่าซ่อมรถจากอุบัติเหตุที่เกิดจากคู่กรณีที่เป็นรถยนต์ด้วยกัน 100,000 บาท</li>
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>ไม่ต้องตรวจสภาพรถ</li>
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>ไม่มีความเสียหายส่วนแรก</li>
                                                    </ul>
                                            </div>
                                                <hr class="my-4">

                                                <div class="plan-table">
                                                        <table  class="table " >
                                                            <thead class="thead-dark table-bordered text-center">
                                                                <tr>
                                                                    <th>ความคุ้มครอง</th>
                                                                    <th>จำนวนจำกัดความรับผิด</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="table-light">
                                                                <tr>
                                                                    <td colspan="2"><span class="font-weight-bold">ความเสียหายต่อรถยนต์ที่เอาประกันภัย</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1. ความเสียหายต่อรถยนต์กรณีชนกับยานพาหนะทางบก</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. รถยนต์สูญหาย</td>
                                                                    <td class="text-center">ไม่คุ้มครอง</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. รถยนต์ไฟไหม้</td>
                                                                    <td class="text-center">ไม่คุ้มครอง</td>
                                                                </tr>
                                                
                                                                <tr>
                                                                    <td colspan="2"><span class="font-weight-bold">ความคุ้มครองขับขี่และผู้โดยสารภายในรถที่เอาประกันภัย</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1. อุบัติเหตุส่วนบุคคล</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท/คน</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. ค่ารักษาพยาบาล</td>
                                                                    <td class="text-center"><span class="number">100,000</span>บาท/คน</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3. การประกันตัวผู้ขับขี่</td>
                                                                    <td class="text-center"><span class="number">200,000</span>บาท/คน</td>
                                                                </tr>
                                                
                                                                <tr>
                                                                    <td colspan="2"><span class="font-weight-bold">ความรับผิดชอบต่อบุคคลภายนอก</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>1. ความรับผิดชอบต่อชีวิต ร่างกาย อนามัย</td>
                                                                    <td class="text-center">
                                                                      <span class="number">1,000,000</span>บาท/คน<br>
                                                                      <span class="number">10,000,000</span>บาท/ครั้ง
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2. ความรับผิดชอบต่อทรัพย์สิน</td>
                                                                    <td class="text-center"><span class="number">1,000,000</span>บาท/ครั้ง</td>
                                                                </tr>
                                                
                                                                <tr class="price">
                                                                    <td>รถเก๋งใช้ส่วนบุคคลคุ้มครอง 5 ที่นั่ง (รถญี่ปุ่น)</td>
                                                                    <td class="text-center">
                                                                        <span class="number">6,300</span>บาท<br>
                                                                    </td>
                                                                </tr>
                                                                <tr class="price">
                                                                    <td>รถเก๋งใช้ส่วนบุคคลคุ้มครอง 5 ที่นั่ง (รถยุโรป)</td>
                                                                    <td class="text-center">
                                                                        <span class="number">6,900</span>บาท<br>
                                                                    </td>
                                                                </tr>
                                                                <tr class="price">
                                                                    <td>รถกระบะคุ้มครอง 3 ที่นั่ง</td>
                                                                    <td class="text-center">
                                                                        <span class="number">6,300</span>บาท<br>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                    </div>
                                    
                                    <div class="tab-pane fade" id="nav-ap3" role="tabpanel" aria-labelledby="nav-ap3-tab">

                                            <div id="plan-title">
                                                    <h1 class="display-6 font-weight-bold " >ประกันภัยรถยนต์ ประเภท 3</h1>
                                                    <ul class="fa-ul " >
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>ไม่จำกัดอายุรถในการรับประกันภัย</li>
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>ไม่ต้องตรวจสภาพรถ</li>
                                                            <li><span class="fa-li"><i class="fas fa-check-circle"></i></span>ไม่มีความเสียหายส่วนแรก</li>
                                                    </ul>
                                            </div>
                                                <hr class="my-4">

                                            <div class="plan-table">
                                                    <table  class="table">
                                                        <thead class="thead-dark table-bordered text-center">
                                                            <tr>
                                                                <th>ความคุ้มครอง</th>
                                                                <th>จำนวนจำกัดความรับผิด</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table-light">
                                                            <tr>
                                                                <td colspan="2"><span class="font-weight-bold">ความเสียหายต่อรถยนต์ที่เอาประกันภัย</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1. ความเสียหายต่อรถยนต์กรณีชนกับยานพาหนะทางบก</td>
                                                                <td class="text-center">ไม่คุ้มครอง</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2. รถยนต์สูญหาย</td>
                                                                <td class="text-center">ไม่คุ้มครอง</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3. รถยนต์ไฟไหม้</td>
                                                                <td class="text-center">ไม่คุ้มครอง</td>
                                                            </tr>
                                            
                                                            <tr>
                                                                <td colspan="2"><span class="font-weight-bold">ความคุ้มครองขับขี่และผู้โดยสารภายในรถที่เอาประกันภัย</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1. อุบัติเหตุส่วนบุคคล</td>
                                                                <td class="text-center"><span class="number">100,000</span>บาท/คน</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2. ค่ารักษาพยาบาล</td>
                                                                <td class="text-center"><span class="number">100,000</span>บาท/คน</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3. การประกันตัวผู้ขับขี่</td>
                                                                <td class="text-center"><span class="number">200,000</span>บาท/คน</td>
                                                            </tr>
                                            
                                                            <tr>
                                                                <td colspan="2"><span class="font-weight-bold">ความรับผิดชอบต่อบุคคลภายนอก</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td>1. ความรับผิดชอบต่อชีวิต ร่างกาย อนามัย</td>
                                                                <td class="text-center">
                                                                  <span class="number">1,000,000</span>บาท/คน<br>
                                                                  <span class="number">10,000,000</span>บาท/ครั้ง
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2. ความรับผิดชอบต่อทรัพย์สิน</td>
                                                                <td class="text-center"><span class="number">1,000,000</span>บาท/ครั้ง</td>
                                                            </tr>
                                            
                                                            <tr class="price">
                                                                <td>รถเก๋งใช้ส่วนบุคคลคุ้มครอง 5 ที่นั่ง (รถญี่ปุ่น)</td>
                                                                <td class="text-center">
                                                                    <span class="number">2,500</span>บาท<br>
                                                                </td>
                                                            </tr>
                                                            <tr class="price">
                                                                <td>รถเก๋งใช้ส่วนบุคคลคุ้มครอง 5 ที่นั่ง (รถยุโรป)</td>
                                                                <td class="text-center">
                                                                    <span class="number">2,500</span>บาท<br>
                                                                </td>
                                                            </tr>
                                                            <tr class="price">
                                                                <td>รถกระบะคุ้มครอง 3 ที่นั่ง</td>
                                                                <td class="text-center">
                                                                    <span class="number">2,500</span>บาท<br>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                        
                                    </div>
                            </div>


                                  








                    </div>

                    
                    
            </div>

        </div>
    </div>

</div>

@endsection
