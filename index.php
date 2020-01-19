<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <meta name="theme-color" content="#fafafa">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="https://b0mh0lt.github.io/freeCodeCamp/_assets/css/materialize0982.min.css">
    <link rel="stylesheet" href="https://b0mh0lt.github.io/freeCodeCamp/_assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://b0mh0lt.github.io/freeCodeCamp/_assets/css/brands.min.css">
    
    <style>
        body {
  font-family: "Roboto", sans-serif;
  font-size: 14.5px;
  font-weight: 400;
  line-height: 20px;
}

.input-field input[type=text]:focus + label, .input-field input[type=number]:focus + label, .input-field input[type=email]:focus + label {
  color: #607D8B;
}

.input-field input[type=text]:focus, .input-field input[type=number]:focus, input[type=number]:focus.valid, .input-field input[type=email]:focus, input[type=email]:focus.valid, .input-field textarea[class=materialize-textarea]:focus {
  border-bottom: 1px solid #607D8B;
  box-shadow: 0 1px 0 0 #607D8B;
}

input[type=number].valid, input[type=email].valid {
  border-bottom: 1px solid #9E9E9E;
  box-shadow: none;
}

.dropdown-content li > span {
  color: #607D8B;
}

.select-dropdown {
  color: rgba(0, 0, 0, 0.87);
}

select {
  top: 30px;
  left: 50%;
  z-index: -1;
}

.select-wrapper + label {
  position: absolute;
  top: -1.2rem;
}

#no-label:after {
  top: 32px;
}

[type="radio"]:checked + label:after {
  border: 2px solid #607D8B;
  background-color: #607D8B;
}

[type="checkbox"].filled-in:checked + label:before {
  top: 2px;
  margin: 2px;
}

[type="checkbox"].filled-in:checked + label:after {
  border: 2px solid #607D8B;
  background-color: #607D8B;
  margin: 2px;
}

[type="checkbox"].filled-in:not(:checked) + label:after {
  margin: 2px;
}
        
          *, *:before, *:after {
      -webkit-user-select: none;
      -khtml-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
     }

.ribbon {
  background-color: #3F51B5;
  flex-shrink: 0;
  height: 42vh;
  width: 100%;
}

main {
  margin-top: -35vh;
  flex-shrink: 0;
}
main .card-container {
  margin: 0 auto;
  max-width: 1400px;
  width: calc(100% - 16px);
}
main .card-container .card-content {
  border-radius: 2px;
  padding: 60px;
  margin-bottom: 80px;
  background-color: #fff;
}
@media (max-width: 700px) {
  main .card-container .card-content {
    padding: 40px;
  }
}
@media (max-width: 650px) {
  main .card-container .card-content {
    padding: 30px;
  }
}
@media (max-width: 600px) {
  main .card-container .card-content {
    padding: 20px;
  }
}
main .card-container .card-content form #title {
  font-size: 1.75rem;
  margin: 1.5rem 0 0 0.75rem;
}
main .card-container .card-content form #description {
  font-size: 13px;
  margin-left: 0.75rem;
  margin-top: 0.25rem;
  padding-bottom: 1rem;
}
main .card-container .card-content form h5 {
  color: #FF4081;
  font-size: 1.2rem;
  margin: 1.5rem 0.75rem 0 0.75rem;
  border-bottom: 2px solid #FF4081;
}
main .card-container .card-content form .heading1 {
  margin-bottom: 2.25rem;
}
main .card-container .card-content form .heading-after {
  margin-bottom: 1.25rem;
}
main .card-container .card-content form #questions div {
  margin: 2px 0;
}
main .card-container .card-content form #questions .input-field-other {
  margin: 0;
}
main .card-container .card-content form #questions .input-field-number, main .card-container .card-content form #questions .input-field-number, main .card-container .card-content form #questions .input-field-textarea {
  margin: 0 0 0 4px;
}
main .card-container .card-content form #agreement a {
  color: #607D8B;
  text-decoration: underline;
}
main .card-container .card-content form p {
  margin-top: 1.25rem;
  margin-bottom: 0.25rem;
}
main .card-container .card-content form .paragraph1 {
  margin-top: 2.25rem;
}
main .card-container .card-content form .paragraph-after {
  margin-top: 1.75rem;
}

        .paragraph-after {
            font-weight: 500;
        }
        
main .card-container .card-content form .other {
  height: 25px;
}
main .card-container .card-content form .number {
  height: 25px;
  margin-bottom: 0;
}
main .card-container .card-content form #textarea {
  padding: 2px 0 2px 0;
}
main .card-container .card-content form #submit {
  background-color: #607D8B;
  margin-top: 2rem;
}

footer {
  height: 60px;
  color: #D0D0D0;
  background-color: #424242;
  font-weight: 500;
  width: 100%;
  text-align: center;
}
footer a {
  color: #D0D0D0;
  line-height: 60px;
  position: relative;
  top: 2px;
}
footer a:focus, footer a:hover, footer a:visited {
  color: #D0D0D0;
}
footer a .fa-lg {
  vertical-align: text-top;
  margin-right: 4px;
}

    </style>
</head>

<body>

    <?php
        if(!isset($_GET['token'])) {
            die('Closed');
        }
        $token = $_GET['token'];
    
        list($header, $payload, $signature) = explode (".", $token);
        $token = json_decode(base64_decode($payload));
        $token = $token->email;
    
        if($token == '' || $token == null)  {
            die('Closed');
        }
    
        $servername = "localhost";
        $database = "hoilang";
        $username = "myfpt";
        $password = "hoilang2020";

        $conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection

        if (!$conn) {
              die("Eror 404");
        }
    
        $sql_select = "SELECT id FROM survey where token='".$token."'";
        $result = $conn->query($sql_select);
        if ($result->num_rows > 0) { ?>
        <div class="row">
      <div class="ribbon"></div>
      <main>
        <div class="card-container">
          <div class="card-content card-panel col s12 m8 offset-m2">
            <form>
                <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>" />
              <div class="row">
                <h1 id="title">CẢM ƠN CÁC ANH/CHỊ ĐÃ THAM GIA ĐÁNH GIÁ!</h1>
                <p id="description"><br>Chúng tôi sẽ gửi đến anh/chị phần quà của chương trình trong thời gian sớm nhất!</p>
     
                <p id="description"><br>Sự đóng góp của các anh/chị sẽ giúp chúng tôi cải thiện và sẽ đưa ra những chương trình có chất lượng tốt hơn nữa trong thời gian tới.</p>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
    <?php
        } else { 
    ?>
    
    <div class="row">
      <div class="ribbon"></div>
      <main>
        <div class="card-container">
          <div class="card-content card-panel col s12 m8 offset-m2">
            <form id="survey-form" action='submit.php'>
                <input type="hidden" name="token" value="<?php echo $token; ?>" />
              <div class="row">
                <h1 id="title">ĐÁNH GIÁ CHẤT LƯỢNG HỘI LÀNG XUÂN CANH TÝ</h1>
                <p id="description"><br>Anh/chị thân mến,<br>Rất mong anh chị dành chút thời gian để đánh giá chất lượng chương trình “Hội làng FPT Xuân Canh Tý 2020”. Ý kiến đánh giá của Anh/chị sẽ giúp chúng tôi rất nhiều trong việc nâng cao chất lượng các chương trình sau này, đem lại cho anh/chị những giá trị tinh thần tốt nhất.<br>Xin chân thành cảm ơn!</p>
              </div>
              <div class="row">
                <h5>Survey Questions</h5>
                <div id="questions" class="col s12">
                  <p class="paragraph-after">1. Anh/chị vui lòng đánh giá việc tổ chức Hội làng 2020 bằng cách tích vào cột đánh giá bên dưới</p>
                    
                  <p>a. Tổng quan chương trình:</p>
                  <div>
                    <input name="overall" type="radio" id="overall4" value="4" />
                    <label for="overall4">Xuất sắc</label>
                  </div>
                  <div>
                    <input name="overall" type="radio" id="overall3" value="3" />
                    <label for="overall3">Tốt</label>
                  </div>
                  <div>
                    <input name="overall" type="radio" id="overall2" value="2" />
                    <label for="overall2">Khá</label>
                  </div>
                  <div>
                    <input name="overall" type="radio" id="overall1" value="1" />
                    <label for="overall1">Trung bình</label>
                  </div>
                  <div>
                    <input name="overall" type="radio" id="overall0" value="0" />
                    <label for="overall0">Kém</label>
                  </div>
                    
                    
                  <p>b. Chất lượng các gian hàng:</p>
                  <div>
                    <input name="quality-store" type="radio" id="quality-store4" value="4" />
                    <label for="quality-store4">Xuất sắc</label>
                  </div>
                  <div>
                    <input name="quality-store" type="radio" id="quality-store3" value="3" />
                    <label for="quality-store3">Tốt</label>
                  </div>
                  <div>
                    <input name="quality-store" type="radio" id="quality-store2" value="2" />
                    <label for="quality-store2">Khá</label>
                  </div>
                  <div>
                    <input name="quality-store" type="radio" id="quality-store1" value="1" />
                    <label for="quality-store1">Trung bình</label>
                  </div>
                  <div>
                    <input name="quality-store" type="radio" id="quality-store0" value="0" />
                    <label for="quality-store0">Kém</label>
                  </div>
                    
                    
                  <p>c. Chất lượng biểu diễn sân khấu:</p>
                  <div>
                    <input name="quality-stage" type="radio" id="quality-stage4" value="4" />
                    <label for="quality-stage4">Xuất sắc</label>
                  </div>
                  <div>
                    <input name="quality-stage" type="radio" id="quality-stage3" value="3" />
                    <label for="quality-stage3">Tốt</label>
                  </div>
                  <div>
                    <input name="quality-stage" type="radio" id="quality-stage2" value="2" />
                    <label for="quality-stage2">Khá</label>
                  </div>
                  <div>
                    <input name="quality-stage" type="radio" id="quality-stage1" value="1" />
                    <label for="quality-stage1">Trung bình</label>
                  </div>
                  <div>
                    <input name="quality-stage" type="radio" id="quality-stage0" value="0" />
                    <label for="quality-stage0">Kém</label>
                  </div>
                    
                    
                  <p>d. Không gian tổ chức chương trình:</p>
                  <div>
                    <input name="space-stage" type="radio" id="space-stage4" value="4" />
                    <label for="space-stage4">Xuất sắc</label>
                  </div>
                  <div>
                    <input name="space-stage" type="radio" id="space-stage3" value="3" />
                    <label for="space-stage3">Tốt</label>
                  </div>
                  <div>
                    <input name="space-stage" type="radio" id="space-stage2" value="2" />
                    <label for="space-stage2">Khá</label>
                  </div>
                  <div>
                    <input name="space-stage" type="radio" id="space-stage1" value="1" />
                    <label for="space-stage1">Trung bình</label>
                  </div>
                  <div>
                    <input name="space-stage" type="radio" id="space-stage0" value="0" />
                    <label for="space-stage0">Kém</label>
                  </div>
                    
                    
                  <p>e. Thời lượng chương trình:</p>
                  <div>
                    <input name="duration-program" type="radio" id="duration-program4" value="4" />
                    <label for="duration-program4">Xuất sắc</label>
                  </div>
                  <div>
                    <input name="duration-program" type="radio" id="duration-program3" value="3" />
                    <label for="duration-program3">Tốt</label>
                  </div>
                  <div>
                    <input name="duration-program" type="radio" id="duration-program2" value="2" />
                    <label for="duration-program2">Khá</label>
                  </div>
                  <div>
                    <input name="duration-program" type="radio" id="duration-program1" value="1" />
                    <label for="duration-program1">Trung bình</label>
                  </div>
                  <div>
                    <input name="duration-program" type="radio" id="duration-program0" value="0" />
                    <label for="duration-program0">Kém</label>
                  </div>
                    
                    
                  <p>f. Chất lượng phần tiệc:</p>
                  <div>
                    <input name="quality-lunching" type="radio" id="quality-lunching4" value="4" />
                    <label for="quality-lunching4">Xuất sắc</label>
                  </div>
                  <div>
                    <input name="quality-lunching" type="radio" id="quality-lunching3" value="3" />
                    <label for="quality-lunching3">Tốt</label>
                  </div>
                  <div>
                    <input name="quality-lunching" type="radio" id="quality-lunching2" value="2" />
                    <label for="quality-lunching2">Khá</label>
                  </div>
                  <div>
                    <input name="quality-lunching" type="radio" id="quality-lunching1" value="1" />
                    <label for="quality-lunching1">Trung bình</label>
                  </div>
                  <div>
                    <input name="quality-lunching" type="radio" id="quality-lunching0" value="0" />
                    <label for="quality-lunching0">Kém</label>
                  </div>
                    
                    
                  <p>g. Tinh thần/thái độ của BTC:</p>
                  <div>
                    <input name="quality-btc" type="radio" id="quality-btc4" value="4" />
                    <label for="quality-btc4">Xuất sắc</label>
                  </div>
                  <div>
                    <input name="quality-btc" type="radio" id="quality-btc3" value="3" />
                    <label for="quality-btc3">Tốt</label>
                  </div>
                  <div>
                    <input name="quality-btc" type="radio" id="quality-btc2" value="2" />
                    <label for="quality-btc2">Khá</label>
                  </div>
                  <div>
                    <input name="quality-btc" type="radio" id="quality-btc1" value="1" />
                    <label for="quality-btc1">Trung bình</label>
                  </div>
                  <div>
                    <input name="quality-btc" type="radio" id="quality-btc0" value="0" />
                    <label for="quality-btc0">Kém</label>
                  </div>
                    
                
                    
                  <p class="paragraph-after">2. Anh/chị thích gì nhất trong sự kiện Hội làng FPT 2020?</p>
                  <div class="input-field input-field-textarea">
                    <textarea id="textarea" name="like_thing" style="height:6rem"></textarea>
                  </div>
                  <p class="paragraph-after">3. Anh/chị biết chương trình Hội làng FPT 2020 qua kênh nào?</p>
                  <div>
                    <input name="channel-resource" type="radio" id="channel-resource0" value="0" />
                    <label for="channel-resource0">Udacity</label>
                  </div>
                  <div>
                    <input name="channel-resource" type="radio" id="channel-resource1" value="1" />
                    <label for="channel-resource1">Udemy</label>
                  </div>
                  <div>
                    <input name="channel-resource" type="radio" id="channel-resource2" value="2" />
                    <label for="channel-resource2">Code Wars</label>
                  </div>
                  <div>
                    <input name="channel-resource" type="radio" id="channel-resource3" value="3" />
                    <label for="channel-resource3">The Odin Project</label>
                  </div>
                  <div>
                    <input name="channel-resource" type="radio" id="channel-resource4" value="4" />
                    <label for="channel-resource4">DevTips</label>
                  </div>
                  <div>
                    <input name="channel-resource" type="radio" id="channel-resource5" value="5" />
                    <label for="channel-resource5">
                      <div class="input-field input-field-other">
                        <input class="other" name="channel-resource-other" type="text" placeholder="Khác">
                      </div>
                    </label>
                  <p class="paragraph-after">4. Theo anh/chị cần cải thiện những gì cho việc tổ chức Hội làng 2020 được tốt hơn?</p>
                  <div class="input-field input-field-textarea">
                    <textarea id="textarea" name="improve_thing"  style="height:6rem"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                  <button id="submit" class="btn waves-effect waves-light" type="submit" name="action">Gửi</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
    
    
    
    <?php } ?>
    
    <script src="https://b0mh0lt.github.io/freeCodeCamp/_assets/js/jquery321.min.js"></script>
    <script src="https://b0mh0lt.github.io/freeCodeCamp/_assets/js/materialize0982.min.js"></script>
    <script>
    $(function() {
        var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
    };
        
        $("#submit").click(function(e){
            e.preventDefault();
            $('#survey-form').each(function(){
                valuesToSend = $(this).serialize();
                $.post($(this).attr('action'),
                    {
                    method: $(this).attr('method'),
                    data: valuesToSend
                    }
                ).done(function(data) {
                    location.reload();
                  })
            });
        });
        
        $("#closeBtn").click(function(e){
            e.preventDefault();
            window.open('', '_self', '').close();
        });
    });
    </script>
</body>

</html>
