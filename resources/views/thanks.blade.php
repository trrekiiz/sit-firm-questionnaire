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
      background-color: #fff;
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
</head>
<body>

  <!-- Page Contents -->
  <div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">
      <div class="ui text container">
        <h3 class="ui inverted header">
          <center>
            <img src="{{ URL::asset('/img/check-mark.png') }}" class="image" width="20%"><br />
          </center>
          <span style="color:#000;">ขอบคุณสำหรับข้อมูลที่เป็นประโยชน์ต่อ<br />คณะเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</span>
        </h3>
        <h4 style="color:#000;">ทางคณะเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี จะนำผลที่ได้ไปปรับปรุงหลักสูตรการเรียนการสอนและการบริการต่าง ๆ ของคณะฯ ทำให้กระบวนการจัดการศึกษาของคณะ ฯ เป็นไปอย่างมีประสิทธิภาพ และสามารถผลิตบัณฑิตที่มีคุณลักษณะอันพึงประสงค์ตรงกับความต้องการของสังคมต่อไป
        </h4>
        <a href="http://www.srm.sit.kmutt.ac.th"><div class="ui huge primary button" id="start">กลับสู่หน้าหลัก <i class="right arrow icon"></i></div></a>
      </div>
    </div>
  </div>

</body>
</html>
