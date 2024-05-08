<?php if (session_flash_existed('message')) { ?>
    <?php $message = session_flash_get('message') ?>
    <?php if ($message['type'] === 'Danger') { ?>
        <div style="color:red;text-align:center;"><?= $message['message'] ?></div>
    <?php } else { ?>
        <div style="color:Green;text-align:center;"><?= $message['message'] ?></div>
    <?php } ?>
<?php } ?>
<?php if (isset($sliders['first-slider'])) { ?>
    <section>
        <div class="container">
            <div class="row align-items-center m-column-reverse">
                <div class="col-lg-4">
                    <div class="bannerContent">
                        <h1>House to Home เชียงใหม่ ออกแบบ สร้างบ้าน ตกแต่งภายใน จัดสวน </h1>
                        <a href="#" class="btn btn-primary">ติดต่อเรา</a>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                            <img src="img/right.svg">
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                            <img src="img/left.svg">
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <?php foreach ($sliders['first-slider'] as $key => $slider) { ?>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="<?= $key ?>" <?= $key === 0 ? "class=active" : "" ?> aria-current="true" aria-label="Slide 1"></button>
                            <?php } ?>
                        </div>
                        <div class="carousel-inner">
                            <?php foreach ($sliders['first-slider'] as $key => $slider) { ?>
                                <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                                    <img src="<?= $slider ?>" class="d-block w-100" alt="...">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="content-padding">
    <div class="container">
        <div class="text-center">
            <span class="smallStyle"><span>บริการทั้งหมดของเรา</span></span>
            <h2>งบไม่บาน งานตามแบบ ถูกใจผู้อยู่ รู้จริงทุกขั้นตอน</h2>
        </div>
        <?php if (isset($sliders['slider2'])) { ?>
            <div class="row content-padding-sm align-items-center">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-theme slider-base">
                        <?php foreach ($sliders['slider2'] as $key => $slider) { ?>
                            <img src="<?= $slider ?>" />
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="innerContent">
                        <h2>สร้างบ้าน Construction</h2>
                        <p>House to Home ตระหนักและเข้าใจว่าทุกคนอยากมีบ้านสวยๆเป็นของตัวเอง จากประสบการณ์ของเราพบว่าส่วนใหญ่ต้องเผชิญปัญหามากมายระหว่างการสร้างบ้าน เช่น ไม่สามารถควบคุมงบประมาณ ปัญหาช่างหนีงาน บ้านไม่ได้คุณภาพ งานเสร็จไม่ตรงเวลาแน่นอนว่าสิ่งเหล่านี้จะเกิดขึ้นหากคุณต้องดูแลเองทั้งหมด </p>
                        <h3><b>ทำไมต้องสร้างบ้านกับ House to Home</b></h3>
                        <ul class="listStyle">
                            <li>งบไม่บาน</li>
                            <li>งานตามแบบ</li>
                            <li>ถูกใจผู้อยู่อาศัย</li>
                            <li>รู้จริงทุกขั้นตอน ด้วยทีมงานที่รู้ลึกรู้จริงควบคุมงานตลอดเวลา</li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($sliders['slider3'])) { ?>
            <div class="row content-padding-sm align-items-center m-column-reverse">
                <div class="col-lg-4">
                    <div class="innerContent">
                        <h2>ตกแต่งภายใน Interior Design</h2>
                        <p>การตกแต่งภายในบ้าน ถือเป็นการลงทุนที่มีความหมายทั้งในด้านเศรษฐกิจและส่งผลต่อคุณภาพชีวิตด้วยเช่นกัน </p>
                        <h3><b>ทำไมต้องตกแต่งภายในกับ House to Home</b></h3>
                        <ul class="listStyle">
                            <li>การตกแต่งบ้านและออกแบบที่เหมาะสมช่วยสร้างบรรยากาศให้คนในบ้านรู้สึกสบายผ่อนคลาย รวมถึงสนุกสนาน และเป็นส่วนตัว</li>
                            <li>การตกแต่งด้วยสีสันวัสดุตกแต่งที่เหมาะสมจะช่วยเพิ่มความสวยงามและเป็นเอกลักษณ์ให้กับบ้าน</li>
                            <li>เพิ่มมูลค่าให้กับทรัพย์สิน</li>
                            <li>พื้นที่ใช้สอยในบ้านเพิ่มขึ้น</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <div class="owl-carousel owl-theme slider-base">
                        <?php foreach ($sliders['slider3'] as $key => $slider) { ?>
                            <img src="<?= $slider ?>" />
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($sliders['slider4'])) { ?>
            <div class="row content-padding-sm align-items-center">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-theme slider-base">
                        <?php foreach ($sliders['slider4'] as $key => $slider) { ?>
                            <img src="<?= $slider ?>" />
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="innerContent">
                        <h2>การจัดสวน Garden</h2>
                        <p>การจัดสวนไม่เพียงแค่มอบผลดีระยะสั้น แต่ยังมีผลดีระยะยาวต่อสิ่งแวดล้อม พื้นที่ภายในบ้านรวมถึงทุกคนภายในบ้าน</p>
                        <h3><b>ทำไมต้องจัดสวน</b></h3>
                        <ul class="listStyle">
                            <li>การมีสวนส่วนตัวภายในบ้านช่วยเพิ่มความสวยงามและคุณค่าให้กับบริเวณที่อยู่ของเราอีกทั้งทำให้บ้านดูสดชื่น</li>
                            <li>สร้างความสมดุล และสร้างพื้นที่สำหรับสิ่งมีชีวิต การมีสวนในบ้านจะช่วยทำให้สภาพแวดล้อมเหมาะสมกับสัตว์และแมลงซึ่งเป็นที่อยู่ของสัตว์เล็กแน่นอนว่าการมัสัตว์จำพวกนี้ในสวนจะมีประโยชน์ต่อระบบนิเวศน์ </li>
                            <li>การดูแลสวนถือเป็นการเรียนรู้เกี่ยวกับธรรมชาติและพัฒนาทักษะการเรียนรู้การปรับตัวต่อสภาพแวดล้อม </li>
                            <li>จัดสวนเพื่อประหยัดพลังงาน การมีสวนรอบๆ บ้านเพื่อสร้างเงาในพื้นที่จะช่วยลดความร้อน และลดการใช้พลังงานในการทำความเย็นในบ้าน</li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($sliders['slider5'])) { ?>
            <div class="row content-padding-sm align-items-center m-column-reverse">
                <div class="col-lg-4">
                    <div class="innerContent">
                        <h2>การตกแต่ง การต่อเติม Renovation</h2>
                        <p>หมายถึง กระบวนการปรับปรุงเปลี่ยนแปลงโครงสร้างหรือส่วนประกอบของอาคารของผู้พักอาศัยเพื่อปรับคุณภาพชีวิตให้เหมาะสมและดียิ่งขึ้นเพื่อตอบโจทย์ความต้องการของผู้พักอาศัยอย่างแท้จริงโดยไม่ต้องสร้างโครงสร้างใหม่</p>
                        <h3><b>โดยมีขั้นตอนต่างๆ ดังต่อไปนี้</b></h3>
                        <ul class="listStyle">
                            <li>การวางแผนและการออกแบบตามความต้องการของผู้อาศัย</li>
                            <li>การเสนอราคาและพิจารณาเลือกผู้รับเหมาและดีไซเนอร์ที่ไว้ใจได้</li>
                            <li>การรับรองและการขออนุญาตการต่อเติมบ้าน</li>
                            <li>งานโครงสร้าง ตรวจสอบความเรียบร้อย และความปลอดภัยของงานโครงสร้าง</li>
                            <li>งานตกแต่งภายใน เช่นการติดตั้งพื้น ผนัง เพดาน เป็นต้น</li>
                            <li>การตรวจรับงาน ตรวจสอบงานโครงสร้าง และตกแต่งภายในเพื่อตรวจสอบให้แน่ใจว่างานเป็นไปตามคุณภาพ สเปกตามที่ตกลงกันไว้</li>
                            <li>การชำระเงิน ส่วนใหญ่มักจะแบ่งเป็นงวดงานเพื่อตามความก้าวหน้าของงานด้วย</li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <div class="owl-carousel owl-theme slider-base">
                        <?php foreach ($sliders['slider5'] as $key => $slider) { ?>
                            <img src="<?= $slider ?>" />
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($sliders['slider6'])) { ?>
            <div class="row content-padding-sm align-items-center">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-theme slider-base">
                        <?php foreach ($sliders['slider6'] as $key => $slider) { ?>
                            <img src="<?= $slider ?>" />
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="innerContent">
                        <h2>เฟอร์นิเจอร์ไฮบริด</h2>
                        <p>เฟอร์นิเจอร์ไฮบริดเป็นตัวเลือกที่ดีสำหรับผู้ที่ต้องการผสมผสานระหว่างความสวยงาม และความคงทน เนื่องจากวัสดุทดแทนที่ใช้ในเฟอร์นิเจอร์จะเป็นวัสดุที่มีคุณภาพและทนทานต่อการใช้งาน เฟอร์นิเจอร์ไฮบริดมักมีการออกแบบที่ใช้พื้นที่อย่างมีประสิทธิภาพ เพื่อให้การใช้งานสะดวกสบาย และมีประสิทธิภาพมากที่สุด:</p>
                        <h3><b>สิ่งที่คุณจะได้รับหลังจากใช้เฟอร์นิเจอร์ไฮบริด</b></h3>
                        <ul class="listStyle">
                            <li>ทนทานคงทน เฟอร์นิเจอร์ของคุณจะมีอายุการใช้งานที่ยาวนานด้วยวัสดุที่มีคุณภาพ</li>
                            <li>หรูหรา และสวยงาม เฟอร์นิเจอร์ไฮบริดมักถูกออกแบบให้มีความสวยงาม ทันสมัยเข้ากับสไตล์และการตกแต่งภายในบ้าน</li>
                            <li>ความหลากหลายในการใช้งาน เฟอร์นิเจอร์ไฮบริดสามารถตอบโจทย์ได้หลากหลายรูปแบบ เช่น ชั้นวางของ โต๊ะทำงาน เก้าอี้ และเตียง ทั้งนี้ถูกออกแบบให้ตอบสนองทุกการใช้งานของผู้ใช้เป็นหลัก</li>
                            <li>รักษาสิ่งแวดล้อม เฟอร์นิเจอร์ไฮบริดมีการออกแบบเพื่อรักษาสิ่งแวดล้อมโดยใช้วัสดุรีไซเคิลและมีกระบวนการผลิตที่มีผลกระทบต่อสิ่งแวดล้อมน้อยที่สุด</li>
                            <li>ความสะดวกสบายและการใช้งาน เฟอร์นิเจอร์ไฮบริดมักมีการออกแบบที่สะดวกสบายและมีประสิทธิภาพเพื่อการใช้งานที่สะดวกสบายสำหรับการใช้งานและสวยงามเมื่อมองเห็น</li>

                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($sliders['slider7'])) { ?>
            <div class="row content-padding-sm align-items-center m-column-reverse">
                <div class="col-lg-4">
                    <div class="innerContent">
                        <h2>ที่ปรึกษาด้านอสังหาริมทรัพย์ (สินเชื่อ)</h2>
                        <p>ทุกอย่างเป็นไปได้ หากทุกคนสามารถเข้าถึงแหล่งการเงิน House to Home ตระหนักและเข้าใจเป็นอย่างดี จึงยินดีให้คำแนะนำสินเชื่อ โปรโมชั่น ณ เวลานั้นๆ รวมถึงอัตราดอกเบี้ยที่คุ้มค่าแก่คุณ
                            เพราะเราเป็นผู้เชี่ยวชาญด้านอสังหาริมทรัพย์ทุกประเภท บ้าน คอนโด ที่ดินที่มากประสบการณ์มากกว่า 10 ปีคุณจึงมั่นใจได้ว่าทุกคำแนะนำมีความถูกต้องและแม่นยำอย่างแน่นอน</p>
                        <h3><b>บริการพิเศษสำหรับคุณ</b></h3>
                        <ul class="listStyle">
                            <li>ความรู้และความเชี่ยวชาญ</li>
                            <li>การวิเคราะห์และการวางแผน</li>
                            <li>ความช่วยเหลือในการจัดหาเงินทุน</li>
                            <li>เชื่อมโยงกับผู้ประกอบการและธุรกิจโดยตรง</li>
                            <li>การวิเคราะห์และควบคุมความเสี่ยง</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <div class="owl-carousel owl-theme slider-base">
                        <?php foreach ($sliders['slider7'] as $key => $slider) { ?>
                            <img src="<?= $slider ?>" />
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<?php if (isset($sliders['last-slider'])) { ?>
    <section class="content-padding brandBg">
        <div class="container">
            <div class="text-center max-width">
                <span class="smallStyle"><span>ผลงานของเรา</span></span>
                <h2>ขอขอบพระคุณลูกค้าทุกท่านที่เชื่อมั่นในศักยภาพของเรา</h2>
            </div>
            <div class="content-padding-sm">
                <div class="owl-carousel owl-theme slider-base">
                    <?php foreach ($sliders['last-slider'] as $key => $slider) { ?>
                        <img src="<?= $slider ?>" />
                    <?php } ?>
                </div>
            </div>
            <div class="max-width">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <p></p>
                        <p></p>
                    </div>
                    <div class="col-lg-12"><a href="#" class="btn">ติดต่อเรา</a></div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<section class="content-padding">
    <div class="container">
        <div class="max-width">
            <div class="brandBg2 content-padding-all">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2>ทำไมต้องเรา</h2>
                        <p>ผู้ให้บริการเรื่องบ้านแบบครบ จบที่เดียว ตั้งแต่ให้คำปรึกษาทางการเงิน ออกแบบตามความต้องการ สร้างบ้านกับผู้รู้จริงทุกขั้นตอน ปรับภูมิทัศน์ให้น่าอยู่ด้วยการจัดสวนหลากหลายสไตล์อีกทั้งออกแบบ และการสั่งทำเฟอร์นิเจอร์ในสไตล์ที่คุณชอบ และใช้ประโยชน์ของพื้นที่บ้านสูงสุด </p>
                    </div>
                    <div class="col-lg-4 text-end"><a href="#" class="btn">ติดต่อเรา</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="text-center max-width">
            <span class="smallStyle"><span>ติดต่อเรา</span></span>
            <h2></h2>
        </div>
        <div class="max-width">
            เล่าให้เราฟังเรื่องบ้านของคุณ
            <form class="form" id="formID" method="POST" action="<?= url('lead-store') ?>">
                <div class="mb-3 row">
                    <div class="col-lg-4">
                        <input type="text" name="lead_name" id="full_name" class="form-control" placeholder="ชื่อเต็ม" required>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="lead_phone" id="telephone_number" class="form-control" placeholder="โทรศัพท์" required>
                    </div>
                    <div class="col-lg-4">
                        <input type="email" name="lead_email" id="user_email_address" class="form-control" placeholder="อีเมล" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-lg-12">
                        <textarea placeholder="ข้อความ" name="lead_message" id="message_val" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary submit-btn">ส่ง</button>
                </div>
            </form>
        </div>
    </div>
</section>