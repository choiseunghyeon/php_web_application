
var isEmpty = function(value){
    if( value == "" || value == null || value == undefined || ( value != null && typeof value == "object" && !Object.keys(value).length ) ){
        return true
    }else{
        return false
    }
};



function daily(e) {
    var daily = document.getElementById("daily").value;
    var query = 'daily=' + daily; // 사용자 입력 날짜
    var http = new XMLHttpRequest();
    var url = "http://chaneyoon.dothome.co.kr/json.php";
    var params = "daily=" + daily; // 사용ㅈ 입력 날짜
    http.open("POST", url, true);
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onreadystatechange = function() {//Call a function when the state changes.
        if(http.readyState == 4 && http.status == 200) {
            var res = http.responseText;
            res = JSON.parse(res);
            if(isEmpty(res[0].daily)) {
                var element = "<br>2016년 1월 " + daily + "일의 일기가 없음 T.T";

            } else {
                var element = "<br>2016년 1월 " + daily + "일" + "<br><br><br>" + res[0].daily;
            }

            document.getElementById("daily_note").innerHTML = element + "<br><br>";
        }
    }
    http.send(params);

}

window.onload = function() {
    document.getElementById("submit").onclick = daily;
};



http.onreadystatechange = function() {//Call a function when the state changes.
       if(http.readyState == 4 && http.status == 200) {
           var res = http.responseText;
           res = JSON.parse(res);
           if(isEmpty(res[0].daily)) {
               var element = "<br>2016년 1월 " + daily + "테스트 T.T";
           } else {
               var element = "<br>2016년 1월 " + daily + "일" + "<br><br><br>" + res[0].daily;
           }

           document.getElementById("daily_note").innerHTML = element + "<br><br>";
       }
   }
   http.send(params);
