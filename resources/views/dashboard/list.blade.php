<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>สรุปแบบสอบถามผู้ใช้บัณฑิต | SIT KMUTT</title>
      <link rel="stylesheet" type="text/css" href="{{asset('../semantic/out/semantic.min.css')}}">
      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script src="{{asset('../semantic/out/semantic.min.js')}}"></script>
      <script src="{{asset('../semantic/out/components/dropdown.js')}}"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('../semantic/out/components/reset.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('../semantic/out/components/site.css')}}">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/site.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/container.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/grid.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/header.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/image.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/menu.css">
      <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/divider.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/segment.css">
      <link rel="stylesheet" type="text/css" href="{{asset('../semantic/out/components/form.css')}}">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/input.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/button.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/list.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/message.css">
      <link rel="stylesheet" type="text/css" href="../semantic/out/components/icon.css">
      <script src="../semantic/out/components/form.js"></script>
      <script src="../semantic/out/components/transition.js"></script>
      <script src="../semantic/out/components/visibility.js"></script>
      <script src="../semantic/out/components/sidebar.js"></script>
      <script src="../semantic/out/components/transition.js"></script>
      <link rel="shortcut icon" href="https://www4.sit.kmutt.ac.th/files/favicon.png" type="image/png">
      <meta property="og:image" content="{{ URL::asset('../img/og.png') }}">
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
      background-image: url('../img/bg.jpg');
      background-size: cover;
      }
      .hidden.menu {
      display: none;
      }
      .ui.primary.button{
      font-family: 'Athiti', sans-serif;
      }
      .masthead.segment {
      min-height: 550px;
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
      padding: 3em 0em;
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
      .ui.statistic>.label, .ui.statistics .statistic>.label  {
      font-family: 'Athiti', sans-serif;
      }
      .ui.statistics .statistic>.value{
      font-family: 'Athiti', sans-serif;
      }
   </style>
   </head>
   <body>
      <!-- Page Contents -->
      @foreach ($data['getall'] as $listcompany)
      <div class="pusher">
         <div class="ui inverted vertical masthead center aligned segment">
            <div class="ui text container">
               <h3 class="ui inverted header">
                  <center>
                     <img src="{{ URL::asset('../img/logo.png') }}" class="image" width="35%"><br />
                  </center>
                  <p>บริษัท {{$listcompany->company}}</p>
                  <h3>กรอกข้อมูลวันที่ {{$listcompany->created_at}}</h3>
               </h3>
               
               <br><br>
               <a href="/company"><div class="ui huge primary button" id="start">กลับสู่หน้ารวมบริษัท <i class="left arrow icon"></i></div></a>
            </div>
         </div>
      </div>
      <div class="ui vertical stripe segment">
         <div class="ui container">
         <form class="ui form">
         <p>ข้อมูลทั่วไปเกี่ยวกับบริษัท</p>
            <div class="one fields">
              <div class="sixteen wide field">
                <label>บริษัท</label>
                <input value="{{$listcompany->company}}" type="text" >
              </div>
            </div>
            <div class="five fields">
              <div class="three wide field">
                <label>เลขที่ตั้ง</label>
                <input value="{{$listcompany->number}}" type="text">
              </div>
              <div class="two wide field">
                <label>หมู่ที่</label>
                <input value="{{$listcompany->village}}" type="text">
              </div>
              <div class="five wide field">
                <label>อาคาร</label>
                <input value="{{$listcompany->building}}" type="text">
              </div>
              <div class="two wide field">
                <label>ชั้นที่</label>
                <input value="{{$listcompany->floor}}" type="number">
              </div>
              <div class="four wide field">
                <label>ถนน</label>
                <input value="{{$listcompany->road}}" type="text">
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label>แขวง</label>
                <input value="{{$listcompany->subarea}}" type="text">
              </div>
              <div class="four wide field">
                <label>เขต</label>
                <input type="text" value="{{$listcompany->area}}">
              </div>
              <div class="four wide field">
                <label>จังหวัด</label>
                <input value="{{$listcompany->province}}" type="text">
              </div>
              <div class="four wide field" >
                <label>รหัสไปรษณีย์</label>
                <input  type="number" value="{{$listcompany->zip}}">
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <label>เบอร์โทรศัพท์</label>
                <input type="text" value="{{$listcompany->tel}}">
              </div>
              <div class="eight wide field">
                <label>E-mail</label>
                <input type="email" value="{{$listcompany->email}}" >
              </div>
            </div>
            <div class="ui dividing header"></div>
            <p>ข้อมูลทั่วไปเกี่ยวกับผู้กรอก</p>
            <div class="three fields">
              <div class="four wide field">
                <label>คำนำหน้าชื่อ</label>
                <input value="{{$listcompany->title}}" type="text">
              </div>
              <div class="six wide field">
                <label>ชื่อ</label>
                <input value="{{$listcompany->name}}" type="text">
              </div>
              <div class="six wide field">
                <label>นามสกุล</label>
                <input value="{{$listcompany->surname}}" type="text">
              </div>
            </div>
            <div class="two fields">
              <div class="field">
                <label>แผนก/ฝ่าย/กอง</label>
                <input value="{{$listcompany->section}}" type="text">
              </div>
              <div class="field">
                <label>ตำแหน่งงาน</label>
                <input type="text" value="{{$listcompany->position}}">
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
              <div class="four wide field">
                <input value="{{$listcompany->bscit}}" type="text">
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
              <div class="four wide field">
                <input value="{{$listcompany->bsccs}}"  type="text">
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
              <div class="four wide field">
                <input value="{{$listcompany->mscit}}"  type="text">
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
              <div class="four wide field">
                <input value="{{$listcompany->msccs}}" type="text">
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
              <div class="four wide field">
                <input value="{{$listcompany->mscse}}" type="text">
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
              <div class="four wide field">
                <input value="{{$listcompany->mscbis}}" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            </form>
         </div>
      </div>
      </div>
      @endforeach
   </body>
</html>