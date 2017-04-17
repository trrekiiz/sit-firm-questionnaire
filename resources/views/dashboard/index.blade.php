<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>สรุปแบบสอบถามผู้ใช้บัณฑิต | SIT KMUTT</title>
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
      <div class="pusher">
         <div class="ui inverted vertical masthead center aligned segment">
            <div class="ui text container">
               <h3 class="ui inverted header">
                  <center>
                     <img src="{{ URL::asset('/img/logo.png') }}" class="image" width="35%"><br />
                  </center>
                  สรุปแบบสอบถามผู้ใช้บัณฑิต
               </h3>
               <h3>จำนวนบริษัทที่ตอบกลับมาทั้งหมด</h3>
               <div class="ui statistic huge" style="margin:-3%;">
                  <div class="value">
                     <span style="color:#fff; font-family: 'Athiti';">{{$data['countall']}}</span>
                  </div>
                  <div class="label">
                     <span style="color:#fff; font-family: 'Athiti';">บริษัท</span>
                  </div>
               </div>
               <br><br>
               <a href="/company"><div class="ui huge primary button" id="start">ดูรายละเอียดรายบริษัท <i class="right arrow icon"></i></div></a>
            </div>
         </div>
      </div>
      <div class="ui vertical stripe segment">
         <div class="ui container">
            <p>เหตุผลสำคัญที่ท่านรับบัณฑิตที่จบจากคณะเทคโนโลยีสารสนเทศ มจธ. เข้าทำงานคือข้อใด <b>กรุณาใส่เลขเรียงลำดับ 1 - 5 (1 คือเน้นมากที่สุด)</b></p>
            <label style="font-size:20px; font-weight: normal;">1. ชื่อเสียงของคณะเทคโนโลยีสารสนเทศ มจธ. </label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason11']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason12']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason13']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason14']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason15']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">2. ผลการศึกษา (เกรดเฉลี่ย) ที่จบเป็นที่พอใจ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason21']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason22']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason23']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason24']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason25']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">3. ผลคะแนนการสอบเข้าทำงาน</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason31']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason32']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason33']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason34']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason35']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">4. Certificate</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason41']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason42']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason43']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason44']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason45']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">5. มีทักษะทางด้านการสื่อสารทั้งภาษาไทยและภาษาอังกฤษ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason51']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason52']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason53']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason54']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason55']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">6. ความรู้ความสามารถตรงกับความต้องการ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason61']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason62']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason63']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason64']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason65']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">7. มีทักษะการคิดวิเคราะห์</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason71']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason72']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason73']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason74']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason75']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">8. มีคุณธรรมจริยธรรมและรับผิดชอบต่อสังคม</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason81']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason82']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason83']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason84']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason85']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9. ทักษะทางด้าน Soft Skill</label>
            <label style="font-size:20px; font-weight: normal;">9.1 การติดต่อสื่อสาร</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason911']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason912']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason913']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason914']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason915']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9.2 มองโลกในแง่ดี</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason921']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason922']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason923']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason924']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason925']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9.3 การทำงานร่วมกับผู้อื่น</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason931']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason932']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason933']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason934']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason935']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9.4 การมีสัมมาคารวะ / รู้จักกาลเทศะ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason941']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason942']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason943']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason944']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason945']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9.5 บุคลิกภาพดี</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason951']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason952']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason953']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason954']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason955']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9.6  มีทักษะการทำงานเป็นทีม</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason961']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason962']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason963']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason964']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason965']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9.7 มีลักษณะของการเป็นผู้นำอื่นๆ โปรดระบุ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason971']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason972']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason973']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason974']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason975']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <span style="font-size:20px; font-weight: normal;">เช่น 
            @foreach($data['getall'] as $reason)
            {{$reason->reason97add}}, 
            @endforeach
            </span>
            <br>
            <label style="font-size:20px; font-weight: normal;">10. อื่นๆ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countReason101']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countReason102']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countReason103']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countReason104']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countReason105']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <span style="font-size:20px; font-weight: normal;">เช่น 
            @foreach($data['getall'] as $reason)
            {{$reason->reason10add}}, 
            @endforeach
            </span>
            <br>
         </div>
         <div class="ui dividing header"></div>
         <div class="ui container">
            <p>เพื่อให้บัณฑิตเป็นที่ต้องการของตลาดแรงงานมากขึ้น ท่านคิดว่าทางคณะเทคโนโลยีสารสนเทศควรเน้นเนื้อหาวิชาการหรือทักษะด้านใดเพิ่มเติมบ้าง เรียงลำดับ 1-5 (1 คือเน้นมากที่สุด)</b></p>
            <label style="font-size:20px; font-weight: normal;">1. ใบประกาศนียบัตร / ใบรับรอง วิชาชีพทางด้าน IT (กรุณาระบุ)</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant11']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant12']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant13']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant14']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant15']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <span style="font-size:20px; font-weight: normal;">เช่น 
            @foreach($data['getall'] as $reason)
            {{$reason->want1add}}, 
            @endforeach
            </span>
            <br>
            <label style="font-size:20px; font-weight: normal;">2. การติดต่อสื่อสารด้วยภาษาต่างประเทศ (เช่น จีน อังกฤษ ญี่ปุ่น เป็นต้น)</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant21']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant22']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant23']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant24']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant25']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">3. ความรู้ด้านระบบคอมฯ / เทคโนโลยีที่ทันสมัย เช่น</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant31']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant32']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant33']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant34']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant35']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <span style="font-size:20px; font-weight: normal;">เช่น 
            @foreach($data['getall'] as $reason)
            {{$reason->want3add}}, 
            @endforeach
            </span>
            <br>
            <label style="font-size:20px; font-weight: normal;">4. การลงมือปฎิบัติงานในสภานที่จริง</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant41']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant42']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant43']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant44']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant45']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">5. ความเป็นผู้นำและกล้าแสดงออกอย่างสร้างสรรค์ต่อหน้าสาธารณชน</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant51']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant52']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant53']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant54']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant55']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">6. คุณธรรม จริยธรรม จรรยาบรรณในวิชาชีพ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant61']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant62']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant63']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant64']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant65']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">7. ความสามารถในการทำงานร่วมกับผู้อื่น และแก้ไขปัญหาการทำงานได้เป็นอย่างดี</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant71']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant72']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant73']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant74']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant75']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">8. ความขยัน อนทนต่อการทำงาน</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant81']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant82']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant83']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant84']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant85']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">9. การประยุกต์วิชาที่เรียนใช้ในการทำงาน</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant91']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant92']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant93']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant94']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant95']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">10. เน้นให้รอบรู้ทั้งทฤษฎีและปฎิบัติ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant101']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant102']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant103']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant104']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant105']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">11. ความรับผิดชอบและมีระเบียนวินัย</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant111']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant112']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant113']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant114']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant115']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <label style="font-size:20px; font-weight: normal;">12. อื่นๆ</label>
            <div class="center aligned column">
               <br>
               <div class="row" style="margin-left:25%;">
                  <div class="ui statistics center">
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 1
                        </div>
                        <div class="value">
                           {{$data['countwant121']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 2
                        </div>
                        <div class="value">
                           {{$data['countwant122']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 3
                        </div>
                        <div class="value">
                           {{$data['countwant123']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 4
                        </div>
                        <div class="value">
                           {{$data['countwant124']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                     <div class="statistic">
                        <div class="label">
                           เน้นเป็นอันดับ 5
                        </div>
                        <div class="value">
                           {{$data['countwant125']}}
                        </div>
                        <div class="label">
                           ครั้ง
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <span style="font-size:20px; font-weight: normal;">เช่น 
            @foreach($data['getall'] as $reason)
            {{$reason->want12add}}, 
            @endforeach
            </span>
            <br>
         </div>
         <div class="ui dividing header"></div>
         <div class="ui container">
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
            			<td colspan="3" class="cs" style="border-left: 1px solid rgba(34,36,38,.1);">
                      <b>หลักสูตรวิทยาการคอมพิวเตอร์</b>
                  </td>
            		</tr>
            		<tr>
            			<td>ควรปรับปรุง</td>
            			<td>ดี</td>
            			<td>ดีมาก</td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">ควรปรับปรุง</td>
            			<td>ดี</td>
            			<td>ดีมาก</td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">เนื้อหาของหลักสูตรจัดได้อย่างเหมาะสม รายวิชาบังคับของหลักสูตรที่ต้องปูพื้นฐานด้านเทคโนโลยีสารสนเทศและสร้างความเชื่อมโยงระหว่างภาคทฤษฎีและปฏิบัติ มีปฏิบัติการ แบบฝึกหัด โครงงาน และกรณีศึกษาให้นักศึกษาเข้าใจการประยุกต์องค์ความรู้กับปัญหาจริง </td>
            			<td>
                            {{$data['countit11']}}
                        </td>
            			<td>
                            {{$data['countit12']}}
                        </td>
            			<td>
                            {{$data['countit13']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                             {{$data['countcs11']}}
                        </td>
            			<td>
                            {{$data['countcs12']}}
                        </td>
            			<td>
                            {{$data['countcs13']}}
                        </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีคุณธรรม จริยธรรม ถ่อมตนและทำหน้าที่เป็นพลเมืองดี รับผิดชอบต่อตนเอง</td>
                        <td>
                            {{$data['countit21']}}
                        </td>
            			<td>
                            {{$data['countit22']}}
                        </td>
            			<td>
                            {{$data['countit23']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                             {{$data['countcs21']}}
                        </td>
            			<td>
                            {{$data['countcs22']}}
                        </td>
            			<td>
                            {{$data['countcs23']}}
                        </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษามีความรู้พื้นฐานด้านเทคโนโลยีสารสนเทศทั้งภาคทฤษฎีและภาคปฎิบัติอยู่ในเกณฑ์ดี สามารถประยุกต์ได้อย่างเหมาะสมในการประกอบวิชาชีพ </td>
                        <td>
                            {{$data['countit31']}}
                        </td>
            			<td>
                            {{$data['countit32']}}
                        </td>
            			<td>
                            {{$data['countit33']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                             {{$data['countcs31']}}
                        </td>
            			<td>
                            {{$data['countcs32']}}
                        </td>
            			<td>
                            {{$data['countcs33']}}
                        </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความรู้ทันสมัย ใฝ่รู้ และมีความสามารถพัฒนาความรู้ เพื่อพัฒนาตนเองในด้านเฉพาะที่สนใจ </td>
                    <td>
                            {{$data['countit41']}}
                        </td>
            			<td>
                            {{$data['countit42']}}
                        </td>
            			<td>
                            {{$data['countit43']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                             {{$data['countcs41']}}
                        </td>
            			<td>
                            {{$data['countcs42']}}
                        </td>
            			<td>
                            {{$data['countcs43']}}
                        </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษาคิดเป็น ทำเป็น และเลือกวิธีการแก้ปัญหาได้อย่างเป็นระบบและเหมาะสม</td>
                        <td>
                            {{$data['countit51']}}
                        </td>
            			<td>
                            {{$data['countit52']}}
                        </td>
            			<td>
                            {{$data['countit53']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                            {{$data['countcs51']}}
                        </td>
            			<td>
                            {{$data['countcs52']}}
                        </td>
            			<td>
                            {{$data['countcs53']}}
                        </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความสามารถทำงานร่วมกับผู้อื่น มีทักษะการบริหารจัดการและทำงานเป็นหมู่คณะ</td>
                        <td>
                            {{$data['countit61']}}
                        </td>
            			<td>
                            {{$data['countit62']}}
                        </td>
            			<td>
                            {{$data['countit63']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                            {{$data['countcs61']}}
                        </td>
            			<td>
                            {{$data['countcs62']}}
                        </td>
            			<td>
                            {{$data['countcs63']}}
                        </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษารู้จักแสวงหาความรู้ด้วยตนเองและสามารถติดต่อสื่อสารกับผู้อื่นได้เป็นอย่างดี</td>
                        <td>
                            {{$data['countit71']}}
                        </td>
            			<td>
                            {{$data['countit72']}}
                        </td>
            			<td>
                            {{$data['countit73']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                            {{$data['countcs71']}}
                        </td>
            			<td>
                            {{$data['countcs72']}}
                        </td>
            			<td>
                            {{$data['countcs73']}}
                        </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความสามารถในการใช้ภาษาไทยและภาษาต่างประเทศในการสื่อสารและใช้เทคโนโลยีได้ดี</td>
                    <td>
                            {{$data['countit81']}}
                        </td>
            			<td>
                            {{$data['countit82']}}
                        </td>
            			<td>
                            {{$data['countit83']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                            {{$data['countcs81']}}
                        </td>
            			<td>
                            {{$data['countcs82']}}
                        </td>
            			<td>
                            {{$data['countcs83']}}
                        </td>
            		</tr>
            		<tr class="highlight">
            			<td class="content">นักศึกษามีความสามารถวิเคราะห์ ออกแบบ พัฒนา ติดตั้ง และปรับปรุงระบบคอมพิวเตอร์ให้ตรงตามข้อกำหนด</td>
                        <td>
                            {{$data['countit91']}}
                        </td>
            			<td>
                            {{$data['countit92']}}
                        </td>
            			<td>
                            {{$data['countit93']}}
                        </td>
            			<td style="border-left: 1px solid rgba(34,36,38,.1);">
                            {{$data['countcs91']}}
                        </td>
            			<td>
                            {{$data['countcs92']}}
                        </td>
            			<td>
                            {{$data['countcs93']}}
                        </td>
            		</tr>
            	</tbody>
            </table>
            <div class="ui dividing header"></div>
         </div>
      </div>
      </div>
   </body>
</html>