<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>แบบสอบถามผู้ใช้บัณฑิตที่มา Firm Presentation | SIT KMUTT</title>
    <link rel="stylesheet" type="text/css" href="{{asset('semantic/out/semantic.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{asset('semantic/out/semantic.min.js')}}"></script>
    <script src="{{asset('semantic/out/components/dropdown.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('semantic/out/components/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('semantic/out/components/site.css')}}">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/site.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/container.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/grid.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/header.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/image.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/divider.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/segment.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/form.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/input.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/button.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/list.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/message.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/icon.css">
    <script src="semantic/out/components/form.js"></script>
    <script src="semantic/out/components/transition.js"></script>
    <script src="semantic/out/components/visibility.js"></script>
    <script src="semantic/out/components/sidebar.js"></script>
    <script src="semantic/out/components/transition.js"></script>
    <link rel="shortcut icon" href="https://www4.sit.kmutt.ac.th/files/favicon.png" type="image/png">
    <meta property="og:image" content="{{ URL::asset('/img/og.png') }}">
  </head>
  <style type="text/css">
    body{
      font-family: 'Athiti', sans-serif;
      font-size: 18px;
    }
    h1,h2,h3,h4,h5,h6{
      font-family: 'Athiti', sans-serif;
    }
    .ui.form .field > label{
      font-size: 18px;
    }
    .ui.checkbox input.hidden+label {
      font-size: 18px;
    }
    .ui.form input[type="number"]{
      font-family: 'Athiti', sans-serif;
    }
    .ui.form input[type="email"]{
      font-family: 'Athiti', sans-serif;
    }
    .ui.vertical.stripe p{
      font-size: 2em !important;
    }
    .ui.form input[type="text"]{
      font-family: 'Athiti', sans-serif;
    }
    .ui.inverted.segment{
      background-image: url('img/bg.jpg');
      background-size: cover;
    }
    .hidden.menu {
      display: none;
    }
    .ui.primary.button{
      font-family: 'Athiti', sans-serif;
    }
    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h3.ui.header {
      margin-top: 5em;
      margin-bottom: 0em;
      font-size: 2em;
      font-weight: normal;
      font-family: 'Athiti', sans-serif;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }
    .ui.basic.table{
      text-align: center;
      font-size: 18px;
    }
    .ui.basic.table .content {
      text-align: left;
    }
    .ui.selection.dropdown.want {
      min-width: 4em; !important;
    }
    .ui.selection.dropdown.reason {
      min-width: 4em; !important;
    }
    .ui.selection.dropdown .menu{
      max-height: 40em;
    }
    .ui.basic.table tr.highlight {
    background-color: rgba(220, 220, 220, 0.3);
    }

  </style>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;
      $('.ui.checkbox')
        .checkbox()
      ;

    })
  ;
  </script>
</head>
<body>

  <!-- Page Contents -->
  <div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">
      <div class="ui text container">
        <h3 class="ui inverted header">
          <center>
            <img src="{{ URL::asset('/img/logo.png') }}" class="image" width="35%"><br />
          </center>
          แบบสอบถามผู้ใช้บัณฑิตที่มา Firm Presentation
        </h3>
        <h4>ทางคณะเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ขอความอนุเคราะห์จากผู้ใช้บัณฑิต (นายจ้าง/ผู้บังคับบัญชา) กรอกแบบสอบถาม “การสำรวจความพึงพอใจของผู้ใช้บัณฑิต” เพื่อนำผลที่ได้ไปปรับปรุงหลักสูตรการเรียนการสอนและการบริการต่าง ๆ ของคณะฯ ทำให้กระบวนการจัดการศึกษาของคณะ ฯ เป็นไปอย่างมีประสิทธิภาพ และสามารถผลิตบัณฑิตที่มีคุณลักษณะอันพึงประสงค์ตรงกับความต้องการของสังคมต่อไป
        </h4>
        <a href="#questionnaire"><div class="ui huge primary button" id="start">เริ่มทำแบบสอบถาม <i class="right arrow icon"></i></div></a>
      </div>

    </div>
    <div class="ui vertical stripe segment" id="questionnaire">
      <div class="ui container">
          {{ Form::open(array('url' => '/form','class'=>'ui form')) }}
            <p>ข้อมูลทั่วไปเกี่ยวกับบริษัท</p>
            <div class="one fields">
              <div class="sixteen wide field" data-tooltip="กรอกชื่อบริษัท" data-position="top left">
                <label>บริษัท</label>
                <input name="company" type="text">
              </div>
            </div>
            <div class="five fields">
              <div class="three wide field" data-tooltip="กรอกเลขที่ตั้งของบริษัทของท่าน" data-position="top left">
                <label>เลขที่ตั้ง</label>
                <input name="number" type="text">
              </div>
              <div class="two wide field" data-tooltip="กรอกหมู่ที่ของบริษัทของท่าน" data-position="top left">
                <label>หมู่ที่</label>
                <input name="village" type="text">
              </div>
              <div class="five wide field" data-tooltip="กรอกชื่ออาคาร หรือ ตึกของบริษัทของท่าน" data-position="top left">
                <label>อาคาร</label>
                <input name="building" type="text">
              </div>
              <div class="two wide field" data-tooltip="กรอกชั้นที่อาคารของบริษัทของท่าน ถ้าอยู่ชั้นที่ 1 ให้กรอก 1 ไม่มีไม่ต้องกรอก" data-position="top left">
                <label>ชั้นที่</label>
                <input name="floor" type="number">
              </div>
              <div class="four wide field" data-tooltip="กรอกชื่อถนนที่ตั้งของบริษัทท่าน" data-position="top left">
                <label>ถนน</label>
                <input name="road" type="text">
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field" data-tooltip="กรอกชื่อแขวงที่ตั้งของบริษัทท่าน" data-position="top left">
                <label>แขวง</label>
                <input name="subarea" type="text">
              </div>
              <div class="four wide field" data-tooltip="กรอกชื่อเขตที่ตั้งของบริษัทท่าน" data-position="top left">
                <label>เขต</label>
                <input name="area" type="text">
              </div>
              <div class="four wide field"  data-tooltip="กรอกชื่อจังหวัดที่ตั้งของบริษัทท่าน" data-position="top left">
                <label>จังหวัด</label>
                <input name="province" type="text">
              </div>
              <div class="four wide field"  data-tooltip="กรอกรหัสไปรษณีย์ เช่น 10140" data-position="top left">
                <label>รหัสไปรษณีย์</label>
                <input name="zip" type="number">
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field" data-tooltip="กรอกเบอร์โทรศัพท์ของท่านโดยไม่ต้องใส่ขีด เช่น 024709889" data-position="top left">
                <label>เบอร์โทรศัพท์</label>
                <input placeholder="กรอกเบอร์โทรศัพท์" name="tel" type="text">
              </div>
              <div class="eight wide field" data-tooltip="กรอกอีเมล์ของท่าน" data-position="top left">
                <label>E-mail</label>
                <input placeholder="กรอกอีเมล์" name="email" type="email">
              </div>
            </div>
            <div class="ui dividing header"></div>
            <p>ข้อมูลทั่วไปเกี่ยวกับผู้กรอก</p>
            <div class="three fields">
              <div class="four wide field"  data-tooltip="เลือกคำนำหน้าชื่อ" data-position="top left">
                <label>คำนำหน้าชื่อ</label>
                <select class="ui dropdown" name="title">
                  <option value="">เลือกคำนำหน้าชื่อ</option>
                  <option value="mr">นาย</option>
                  <option value="miss">นางสาว</option>
                  <option value="mrs">นาง</option>
                </select>
              </div>
              <div class="six wide field" data-tooltip="กรอกชื่อจริงของท่าน" data-position="top left">
                <label>ชื่อ</label>
                <input name="name" type="text">
              </div>
              <div class="six wide field" data-tooltip="กรอกนามสกุลจริงของท่าน" data-position="top left">
                <label>นามสกุล</label>
                <input name="surname" type="text">
              </div>
            </div>
            <div class="two fields" data-tooltip="กรอก แผนก/ฝ่าย/กอง ของท่าน" data-position="top left">
              <div class="field">
                <label>แผนก/ฝ่าย/กอง</label>
                <input name="section" type="text">
              </div>
              <div class="field" data-tooltip="กรอกตำแหน่งงานของท่าน" data-position="top left">
                <label>ตำแหน่งงาน</label>
                <input type="text" name="position">
              </div>
            </div>
            <div class="ui dividing header"></div>
            <p>นักศึกษาคณะเทคโนโลยีสารสนเทศ มจธ. ที่ทำงานอยู่ในบริษัททั้งหมดกี่คน โดยแบ่งออกเป็น</p>
            <div class="four fields">
              <div class="four wide field">
                <label>ระดับปริญญาตรี</label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรเทคโนโลยีสารสนเทศ</label>
              </div>
              <div class="four wide field" data-tooltip="ถ้าในบริษัทท่านมีอยู่ 3 คน ให้กรอก 3" data-position="top left">
                <input placeholder="จำนวน" name="bscit" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field" >
                <label>หลักสูตรวิทยาการคอมพิวเตอร์</label>
              </div>
              <div class="four wide field" data-tooltip="ถ้าในบริษัทท่านมีอยู่ 3 คน ให้กรอก 3" data-position="top left">
                <input placeholder="จำนวน" name="bsccs" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label>ระดับปริญญาโท</label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรเทคโนโลยีสารสนเทศ</label>
              </div>
              <div class="four wide field" data-tooltip="ถ้าในบริษัทท่านมีอยู่ 3 คน ให้กรอก 3" data-position="top left">
                <input placeholder="จำนวน" name="mscit" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรวิทยาการคอมพิวเตอร์</label>
              </div>
              <div class="four wide field" data-tooltip="ถ้าในบริษัทท่านมีอยู่ 3 คน ให้กรอก 3" data-position="top left">
                <input placeholder="จำนวน" name="msccs" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรวิศวกรรมซอฟต์แวร์</label>
              </div>
              <div class="four wide field" data-tooltip="ถ้าในบริษัทท่านมีอยู่ 3 คน ให้กรอก 3" data-position="top left">
                <input placeholder="จำนวน" name="mscse" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรระบบสารสนเทศทางธุรกิจ</label>
              </div>
              <div class="four wide field" data-tooltip="ถ้าในบริษัทท่านมีอยู่ 3 คน ให้กรอก 3" data-position="top left">
                <input placeholder="จำนวน" name="mscbis" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="ui dividing header"></div>
            <div class="reason-list">
            <p>เหตุผลสำคัญที่ท่านรับบัณฑิตที่จบจากคณะเทคโนโลยีสารสนเทศ มจธ. เข้าทำงานคือข้อใด <b>กรุณาใส่เลขเรียงลำดับ 1 - 5 (1 คือเน้นมากที่สุด)</b></p>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <!-- <div class="ui checkbox"> -->
                    <select class="ui dropdown reason" name="reason1">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <!-- <input type="checkbox" tabindex="0" class="hidden" name="reason1"> -->
                    <label style="font-size:18px; font-weight: normal;">1. ชื่อเสียงของคณะเทคโนโลยีสารสนเทศ มจธ. </label>
                  <!-- </div> -->
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  <div>
                    <label style="font-size:18px;">7. ทักษะทางด้าน Soft Skill </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason2"> -->
                    <select class="ui dropdown reason" name="reason2">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;">2. ผลการศึกษา (เกรดเฉลี่ย) ที่จบเป็นที่พอใจ </label>
                  <!-- </div> -->
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason71"> -->
                    <select class="ui dropdown reason" name="reason71">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> การติดต่อสื่อสาร </label>
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason3"> -->
                    <select class="ui dropdown reason" name="reason3">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> 3. ผลคะแนนการสอบเข้าทำงาน </label>
                  <!-- </div> -->
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason72"> -->
                    <select class="ui dropdown reason" name="reason72">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> มองโลกในแง่ดี </label>
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason4"> -->
                    <select class="ui dropdown reason" name="reason71">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> 4. Certificate </label>
                  <!-- </div> -->
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason73"> -->
                    <select class="ui dropdown reason" name="reason73">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> การทำงานร่วมกับผู้อื่น</label>
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason5"> -->
                    <select class="ui dropdown reason" name="reason5">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> 5. ภาษาอังกฤษ </label>
                  <!-- </div> -->
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason74"> -->
                    <select class="ui dropdown reason" name="reason74">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> การมีสัมมาคารวะ / รู้จักกาลเทศะ </label>
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason6"> -->
                    <select class="ui dropdown reason" name="reason6">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> 6. ความรู้ความสามารถตรงกับความต้องการ </label>
                  <!-- </div> -->
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason75"> -->
                    <select class="ui dropdown reason" name="reason75">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> บุคลิกภาพดี</label>
                  <!-- </div> -->
                </div>
              </div>
            </div>
            <div class="three fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="six wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <!-- <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason76"> -->
                    <select class="ui dropdown reason" name="reason76">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> มีลักษณะของการเป็นผู้นำอื่นๆ โปรดระบุ </label>
                  <!-- </div> -->
                </div>
              </div>
              <div class="two wide field">
                <input placeholder="ระบุ" type="text" name="reason76add">
              </div>
            </div>
            <div class="three fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="three wide field">
                <div class="inline field">
                  <div class="">
                    <select class="ui dropdown reason" name="reason8">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                    <label style="font-size:18px; font-weight: normal;"> 8. อื่นๆ </label>
                  </div>
                </div>
              </div>
              <div class="five wide field">
                <input placeholder="ระบุ" type="text" name="reason8add">
              </div>
            </div>
          </div>
            <div class="ui dividing header"></div>
            <div class="want-list">
              <p>เพื่อให้บัณฑิตเป็นที่ต้องการของตลาดแรงงานมากขึ้น ท่านคิดว่าทางคณะเทคโนโลยีสารสนเทศควรเน้นเนื้อหาวิชาการหรือทักษะด้านใดเพิ่มเติมบ้าง <b>เรียงลำดับ 1-12 (1 คือเน้นมากที่สุด)</b></p>
              <div class="two fields">
                <div class="three fields">
                    <div class="two wide field">
                      <select class="ui dropdown want" name="want1">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <!-- <input placeholder="" name="want1" type="number" class="autohide"> -->
                    </div>
                    <div class="eight wide field">
                    <span style="font-size:18px;">
                      1. ใบประกาศนียบัตร / ใบรับรอง วิชาชีพทางด้าน IT (กรุณาระบุ)
                    </span>
                    </div>
                    <div class="five wide field">
                      <input placeholder="ระบุ" name="want1add" type="text">
                    </div>
                </div>
                <div class="eight wide field">
                  <div class="two fields">
                      <div class="two wide field">
                        <!-- <input placeholder="" name="want7" type="number" class="autohide"> -->
                        <select class="ui dropdown want" name="want7">
                          <option value="">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                      <div class="ten wide field">
                      <span style="font-size:18px;">
                        7. ความสามารถในการทำงานร่วมกับผู้อื่น และแก้ไขปัญหาการทำงานได้เป็นอย่างดี
                      </span>
                      </div>
                    </div>
                </div>
              </div>
              <div class="two fields">
                <div class="three fields">
                    <div class="two wide field">
                      <select class="ui dropdown want" name="want2">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <!-- <input placeholder="" name="want2" type="number" class="autohide"> -->
                    </div>
                    <div class="eight wide field">
                    <span style="font-size:18px;">
                      2. การติดต่อสื่อสารด้วยภาษาต่างประเทศ (เช่น จีน อังกฤษ ญี่ปุ่น เป็นต้น)
                    </span>
                    </div>
                </div>
                <div class="eight wide field">
                  <div class="two fields">
                      <div class="two wide field">
                        <!-- <input placeholder="" name="want8" type="number" class="autohide"> -->
                        <select class="ui dropdown want" name="want8">
                          <option value="">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                      </div>
                      <div class="ten wide field">
                      <span style="font-size:18px;">
                        8. ความขยัน อนทนต่อการทำงาน
                      </span>
                      </div>
                    </div>
                </div>
              </div>
              <div class="two fields">
                <div class="three fields">
                    <div class="two wide field">
                      <select class="ui dropdown want" name="want3">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <!-- <input placeholder="" name="want3" type="number" class="autohide"> -->
                    </div>
                    <div class="eight wide field">
                    <span style="font-size:18px;">
                      3. ความรู้ด้านระบบคอมฯ / เทคโนโลยีที่ทันสมัย เช่น
                    </span>
                    </div>
                    <div class="five wide field">
                      <input placeholder="ระบุ" name="want3add" type="text">
                    </div>
                </div>
                <div class="eight wide field">
                  <div class="two fields">
                      <div class="two wide field">
                        <select class="ui dropdown want" name="want9">
                          <option value="">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                        <!-- <input placeholder="" name="want9" type="number" class="autohide"> -->
                      </div>
                      <div class="ten wide field">
                      <span style="font-size:18px;">
                        9. การประยุกต์วิชาที่เรียนใช้ในการทำงาน
                      </span>
                      </div>
                    </div>
                </div>
              </div>
              <div class="two fields">
                <div class="two fields">
                    <div class="two wide field">
                      <select class="ui dropdown want" name="want4">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <!-- <input placeholder="" name="want4" type="number" class="autohide"> -->
                    </div>
                    <div class="ten wide field">
                    <span style="font-size:18px;">
                      4. การลงมือปฎิบัติงานในสภานที่จริง
                    </span>
                    </div>
                </div>
                <div class="eight wide field">
                  <div class="two fields">
                      <div class="two wide field">
                        <select class="ui dropdown want" name="want10">
                          <option value="">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                        <!-- <input placeholder="" name="want10" type="number" class="autohide"> -->
                      </div>
                      <div class="ten wide field">
                      <span style="font-size:18px;">
                        10. เน้นให้รอบรู้ทั้งทฤษฎีและปฎิบัติ
                      </span>
                      </div>
                    </div>
                </div>
              </div>
              <div class="two fields">
                <div class="two fields">
                    <div class="two wide field">
                      <select class="ui dropdown want" name="want5">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <!-- <input placeholder="" name="want5" type="number" class="autohide"> -->
                    </div>
                    <div class="ten wide field">
                    <span style="font-size:18px;">
                      5. ความเป็นผู้นำและกล้าแสดงออกอย่างสร้างสรรค์ต่อหน้าสาธารณชน
                    </span>
                    </div>
                </div>
                <div class="eight wide field">
                  <div class="two fields">
                      <div class="two wide field">
                        <select class="ui dropdown want" name="want11">
                          <option value="">-</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                        </select>
                        <!-- <input placeholder="" name="want11" type="number" class="autohide"> -->
                      </div>
                      <div class="ten wide field">
                      <span style="font-size:18px;">
                        11. ความรับผิดชอบและมีระเบียนวินัย
                      </span>
                      </div>
                    </div>
                </div>
              </div>
              <div class="two fields">
              <div class="two fields">
                  <div class="two wide field">
                    <select class="ui dropdown want" name="want6">
                      <option value="">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                    </select>
                    <!-- <input placeholder="" name="want6" type="number" class="autohide"> -->
                  </div>
                  <div class="ten wide field">
                  <span style="font-size:18px;">
                    6. คุณธรรม จริยธรรม จรรยาบรรณในวิชาชีพ
                  </span>
                  </div>
              </div>
              <div class="eight wide field">
                <div class="three fields">
                    <div class="two wide field">
                      <select class="ui dropdown want" name="want12">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                      <!-- <input placeholder="" name="want12" type="number" class="autohide"> -->
                    </div>
                    <div class="three wide field">
                    <span style="font-size:18px;">
                      12. อื่นๆ
                    </span>
                    </div>
                    <div class="ten wide field">
                      <input placeholder="ระบุ" name="want12add" type="text">
                    </div>
                </div>
              </div>
            </div>
            </div>
            <div class="ui dividing header"></div>
            <p>แสดงความคิดเห็นต่อผลการดำเนินการการเรียนการสอนระดับปริญญาตรี <br /></be>(รายละเอียดหลักสูตรตามเอกสาร <a target="_blank" href="{{ URL::asset('/doc/ตารางแสดงรายละเอียดของหลักสูตรITและหลักสูตรCS.pdf') }}">คลิกที่นี่</a> เพื่อดาวน์โหลดเอกสาร)</p>
            <table class="ui basic table">
            	<tbody>
            		<tr>
            			<td rowspan="3">
                      การประเมินจากผู้มีส่วนเกี่ยวข้อง
                  </td>
            			<td colspan="6">
                      ปริญญาตรี
                  </td>
            		</tr>
            		<tr>
            			<td colspan="3">
                      <b>หลักสูตรเทคโนโลยีสารสนเทศ</b>
                  </td>
            			<td colspan="3" class="cs">
                      <b>หลักสูตรวิทยาการคอมพิวเตอร์</b>
                  </td>
            		</tr>
            		<tr>
            			<td>ควรปรับปรุง</td>
            			<td>ดี</td>
            			<td>ดีมาก</td>
            			<td>ควรปรับปรุง</td>
            			<td>ดี</td>
            			<td>ดีมาก</td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">เนื้อหาของหลักสูตรจัดได้อย่างเหมาะสม รายวิชาบังคับของหลักสูตรที่ต้องปูพื้นฐานด้านเทคโนโลยีสารสนเทศและสร้างความเชื่อมโยงระหว่างภาคทฤษฎีและปฏิบัติ มีปฏิบัติการ แบบฝึกหัด โครงงาน และกรณีศึกษาให้นักศึกษาเข้าใจการประยุกต์องค์ความรู้กับปัญหาจริง </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r1it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r1it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r1it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox ">
                      <input type="radio" name="r1cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r1cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r1cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีคุณธรรม จริยธรรม ถ่อมตนและทำหน้าที่เป็นพลเมืองดี รับผิดชอบต่อตนเอง</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r2it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r2it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r2it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r2cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r2cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r2cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษามีความรู้พื้นฐานด้านเทคโนโลยีสารสนเทศทั้งภาคทฤษฎีและภาคปฎิบัติอยู่ในเกณฑ์ดี สามารถประยุกต์ได้อย่างเหมาะสมในการประกอบวิชาชีพ </td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r3it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r3it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r3it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r3cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r3cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r3cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความรู้ทันสมัย ใฝ่รู้ และมีความสามารถพัฒนาความรู้ เพื่อพัฒนาตนเองในด้านเฉพาะที่สนใจ </td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r4it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r4it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r4it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r4cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r4cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r4cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษาคิดเป็น ทำเป็น และเลือกวิธีการแก้ปัญหาได้อย่างเป็นระบบและเหมาะสม</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r5it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r5it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r5it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r5cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r5cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r5cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความสามารถทำงานร่วมกับผู้อื่น มีทักษะการบริหารจัดการและทำงานเป็นหมู่คณะ</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r6it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r6it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r6it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r6cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r6cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r6cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษารู้จักแสวงหาความรู้ด้วยตนเองและสามารถติดต่อสื่อสารกับผู้อื่นได้เป็นอย่างดี</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r7it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r7it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r7it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r7cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r7cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r7cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความสามารถในการใช้ภาษาไทยและภาษาต่างประเทศในการสื่อสารและใช้เทคโนโลยีได้ดี</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r8it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r8it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r8it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r8cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r8cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r8cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษามีความสามารถวิเคราะห์ ออกแบบ พัฒนา ติดตั้ง และปรับปรุงระบบคอมพิวเตอร์ให้ตรงตามข้อกำหนด</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r9it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r9it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r9it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r9cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r9cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="r9cs" value="3">
                    </div>
                  </td>
            		</tr>
            	</tbody>
            </table>
            <div class="ui dividing header"></div>
            <table class="ui basic table">
            	<tbody>
            		<tr>
            			<td>ข้อเสนอแนะเพิ่มเติม</td>
            			<td>หลักสูตรเทคโนโลยีสารสนเทศ</td>
            			<td>หลักสูตรวิทยาการคอมพิวเตอร์</td>
            		</tr>
            		<tr>
            			<td rowspan="3">จุดแข็ง</td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="s1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="s1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="s2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="s2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="s3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="s3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td rowspan="3">จุดอ่อน</td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="w1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="w1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="w2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="w2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="w3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="w3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td rowspan="3">ควรปรับปรุง</td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="im1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="im1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="im2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="im2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="im3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="im3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td rowspan="3">ข้อเสนอแนะ</td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="su1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="su1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="su2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="su2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field" data-tooltip="ให้ระบุข้อเสนอแนะเพิ่มเติม หากไม่มีไม่ต้องกรอก" data-position="top left">
                          <input name="su3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content cs">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input name="su3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            	</tbody>
            </table>
            <center>
              <button type="submit" class="ui primary submit button"><span style="font-size:18px;">ส่งแบบสอบถาม</span></button>
            </center>
            <div class="ui error message"></div>
          {{ Form::close() }}
      </div>
    </div>


    <div class="ui inverted vertical footer segment">
      <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
          <div class="twelve wide column">
            <img src="img/logo.png" class="image" width="20%">
            <h4>School of Information Technology, <br />
                King Mongkut's University of Technology Thonburi<br />
                126 Pracha Uthit Rd., Bang Mod, Thung Khru, Bangkok, Thailand 10140</h4>
            <h5>โทร. 0-2470-9889</h5>
          </div>
          <div class="four wide column"><br />
            <h4 class="ui inverted header">Develop by </h4>
            <h4 class="">
            <a href="https://www.facebook.com/trrekiiz" style="color:#fff" target="_blank">Kunchai Sodhom </a><br />
            <a href="https://www.facebook.com/taro.aphiphit" style="color:#fff" target="_blank">Aphiphit Thammarcheep</a><br />
            <a href="https://www.facebook.com/worachat.arunothaikrit" style="color:#fff" target="_blank">Worachat Arunothaikrit</a></h4>
            <h5>หากมีปัญหาในการกรอกแบบสอบถามโปรดติดต่อ น.ส. รุ่งโรจน์  ขวัญโกมล <br /><a href="mailto:rungroj@sit.kmutt.ac.th" style="color:#fff">E-mail : rungroj@sit.kmutt.ac.th</a></h5>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
  <script>
  $('.ui.dropdown')
  .dropdown();

  $('.ui.form')
  .form({
    fields: {
      //section 1
      company: {
        identifier: 'company',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกชื่อบริษัทของท่าน'
          }
        ]
      },
      number: {
        identifier: 'number',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกเลขที่ตั้งของบริษัท'
          }
        ]
      },
      building: {
        identifier: 'building',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกชื่ออาคาร'
          }
        ]
      },
      road: {
        identifier: 'road',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกถนนของที่ตั้งของบริษัท'
          }
        ]
      },
      subarea: {
        identifier: 'subarea',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกแขวง/ตำบลของที่ตั้งบริษัท'
          }
        ]
      },
      area: {
        identifier: 'area',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกเขตของที่ตั้งบริษัท'
          }
        ]
      },
      province: {
        identifier: 'province',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกจังหวัดของบริษัท'
          }
        ]
      },
      zip: {
        identifier: 'zip',
        rules: [
          {
            type   : 'minLength[5]',
            prompt : 'กรอกรหัสไปรษณีย์ไม่ถูกต้อง'
          }
        ]
      },
      tel: {
        identifier: 'tel',
        rules: [
          {
            type   : 'minLength[9]',
            prompt : 'กรอกเบอร์โทรศัพท์ไม่ถูกต้อง'
          }
        ]
      },
      email: {
        identifier: 'email',
        rules: [
          {
            type   : 'email',
            prompt : 'กรอกอีเมลล์ไม่ถูกต้อง'
          }
        ]
      },
      title: {
        identifier: 'title',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณาใส่คำนำหน้าชื่อ'
          }
        ]
      },
      name: {
        identifier: 'name',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณาใส่ชื่อของท่าน'
          }
        ]
      },
      surname: {
        identifier: 'surname',
        rules: [
          {
            type   : 'empty',
            prompt : 'กรุณาใส่นามสกุลของท่าน'
          }
        ]
      },


      //section3
      reason76add: {
        identifier : 'reason76add',
        depends    : 'reason76',
        rules      : [
          {
            type   : 'empty',
            prompt : 'กรุณากรอกความเห็นด้วยนะ ลักษณะผู้นำอย่างไร'
          }
        ]
      },

      want1add: {
        identifier : 'want1add',
        depends    : 'want1',
        rules      : [
          {
            type   : 'empty',
            prompt : 'กรุณาระบุ ประกาศนีย์บัตร / ใบรับรอง ด้วยนะ'
          }
        ]
      },
      want3add: {
        identifier : 'want3add',
        depends    : 'want3',
        rules      : [
          {
            type   : 'empty',
            prompt : 'กรุณาเติมเช่นด้วยนะ '
          }
        ]
      },
      want12add: {
        identifier : 'want12add',
        depends    : 'want12',
        rules      : [
          {
            type   : 'empty',
            prompt : 'กรุณาระบุอื่นๆ ด้วย'
          }
        ]
      },
      r1it: {
        identifier: 'r1it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ เนื้อหาของหลักสูตรจัดได้อย่างเหมาะสม รายวิชาบังคับของหลักสูตรที่ต้องปูพื้นฐานด้านเทคโนโลยีสารสนเทศและสร้างความเชื่อมโยงระหว่างภาคทฤษฎีและปฏิบัติ มีปฏิบัติการ แบบฝึกหัด โครงงาน และกรณีศึกษาให้นักศึกษาเข้าใจการประยุกต์องค์ความรู้กับปัญหาจริง ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r2it: {
        identifier: 'r2it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีคุณธรรม จริยธรรม ถ่อมตนและทำหน้าที่เป็นพลเมืองดี รับผิดชอบต่อตนเอง ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r3it: {
        identifier: 'r3it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความรู้พื้นฐานด้านเทคโนโลยีสารสนเทศทั้งภาคทฤษฎีและภาคปฎิบัติอยู่ในเกณฑ์ดี สามารถประยุกต์ได้อย่างเหมาะสมในการประกอบวิชาชีพ ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r4it: {
        identifier: 'r4it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความรู้ทันสมัย ใฝ่รู้ และมีความสามารถพัฒนาความรู้ เพื่อพัฒนาตนเองในด้านเฉพาะที่สนใจ ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r5it: {
        identifier: 'r5it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษาคิดเป็น ทำเป็น และเลือกวิธีการแก้ปัญหาได้อย่างเป็นระบบและเหมาะสม ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r6it: {
        identifier: 'r6it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความสามารถทำงานร่วมกับผู้อื่น มีทักษะการบริหารจัดการและทำงานเป็นหมู่คณะ ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r7it: {
        identifier: 'r7it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษารู้จักแสวงหาความรู้ด้วยตนเองและสามารถติดต่อสื่อสารกับผู้อื่นได้เป็นอย่างดี ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r8it: {
        identifier: 'r8it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความสามารถในการใช้ภาษาไทยและภาษาต่างประเทศในการสื่อสารและใช้เทคโนโลยีได้ดี ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r9it: {
        identifier: 'r9it',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความสามารถวิเคราะห์ ออกแบบ พัฒนา ติดตั้ง และปรับปรุงระบบคอมพิวเตอร์ให้ตรงตามข้อกำหนด ในส่วนของหลักสูตรเทคโนโลยีสารสนเทศ'
          }
        ]
      },
      r1cs: {
        identifier: 'r1cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ เนื้อหาของหลักสูตรจัดได้อย่างเหมาะสม รายวิชาบังคับของหลักสูตรที่ต้องปูพื้นฐานด้านเทคโนโลยีสารสนเทศและสร้างความเชื่อมโยงระหว่างภาคทฤษฎีและปฏิบัติ มีปฏิบัติการ แบบฝึกหัด โครงงาน และกรณีศึกษาให้นักศึกษาเข้าใจการประยุกต์องค์ความรู้กับปัญหาจริง ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r2cs: {
        identifier: 'r2cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีคุณธรรม จริยธรรม ถ่อมตนและทำหน้าที่เป็นพลเมืองดี รับผิดชอบต่อตนเอง ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r3cs: {
        identifier: 'r3cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความรู้พื้นฐานด้านเทคโนโลยีสารสนเทศทั้งภาคทฤษฎีและภาคปฎิบัติอยู่ในเกณฑ์ดี สามารถประยุกต์ได้อย่างเหมาะสมในการประกอบวิชาชีพ ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r4cs: {
        identifier: 'r4cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความรู้ทันสมัย ใฝ่รู้ และมีความสามารถพัฒนาความรู้ เพื่อพัฒนาตนเองในด้านเฉพาะที่สนใจ ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r5cs: {
        identifier: 'r5cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษาคิดเป็น ทำเป็น และเลือกวิธีการแก้ปัญหาได้อย่างเป็นระบบและเหมาะสม ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r6cs: {
        identifier: 'r6cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความสามารถทำงานร่วมกับผู้อื่น มีทักษะการบริหารจัดการและทำงานเป็นหมู่คณะ ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r7cs: {
        identifier: 'r7cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษารู้จักแสวงหาความรู้ด้วยตนเองและสามารถติดต่อสื่อสารกับผู้อื่นได้เป็นอย่างดี ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r8cs: {
        identifier: 'r8cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความสามารถในการใช้ภาษาไทยและภาษาต่างประเทศในการสื่อสารและใช้เทคโนโลยีได้ดี ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      },
      r9cs: {
        identifier: 'r9cs',
        rules: [
          {
            type   : 'checked',
            prompt : 'กรุณาเลือกข้อ นักศึกษามีความสามารถวิเคราะห์ ออกแบบ พัฒนา ติดตั้ง และปรับปรุงระบบคอมพิวเตอร์ให้ตรงตามข้อกำหนด ในส่วนของหลักสูตรวิทยาการคอมพิวเตอร์'
          }
        ]
      }
    }
  });



  $('.want-list select').on("change",function(){
      console.log($(this).val());
      var selector = [];
      $('.want-list select').map(function(a,b){
        $('.want-list select option[value="'+b.value+'"]').map(function(key,value){
            $(this).prop('disabled', true);
            $('.want-list .menu').find('.item[data-value="'+b.value+'"]').addClass('disabled');
        });
      });
  });

  $('.reason-list select').on("change",function(){
      console.log($(this).val());
      var selector = [];
      $('.reason-list select').map(function(a,b){
        $('.reason-list select option[value="'+b.value+'"]').map(function(key,value){
            $(this).prop('disabled', true);
            $('.reason-list .menu').find('.item[data-value="'+b.value+'"]').addClass('disabled');
        });
      });
  });

  $("#start").click(function() {
    $('html, body').animate({
        scrollTop: $("#questionnaire").offset().top
    }, 1000);
  });



  </script>
</html>
