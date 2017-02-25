<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

    
<center>Text Twist Game</center>
<p>rack:<span id="word"></span></p>  
<button id="But1" onclick="myFunction()" class="button2">generate new turn</button>

<P>your guess(please input capital letter):</P> 

<input type="text" name="guess" id="guess" value="">
<br>
<button id='check' onclick="check()" name="check" class="button">check</button>
<br>
<button id='clear' onclick="clear111()" name="clear" class="button2">clear</button>
<br>
<p><span id="answer"></span></p>

<br>
<br>
<br>
<br>

<p>All the other answers:</p>
<br>
<button id="But2" onclick="myFunction2()" class="button">generate</button>
<br>
<button id="clear2" onclick="clear2()" class="button2">clear</button>
<br>
<p><span id="all" name="all"></span></p>







<script>
var a;
var myrack;
var answer;
function clear111(){document.getElementById("guess").value="";}
function clear2(){document.getElementById("all").innerHTML="";}

function myFunction() {
      var xhttp;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("word").innerHTML = this.responseText;
          a=this.responseText;//a is used to transfer the value
          }
  };
      xhttp.open("GET", "random.php", true);
      xhttp.send();   
  }
  

  function myFunction2() {
      myrack = document.getElementById("word").innerHTML;//b is myrack
      var xhttp2;
      xhttp2 = new XMLHttpRequest();
      xhttp2.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("all").innerHTML = this.responseText;
            //a is used to transfer the value
          }
  };

      xhttp2.open("GET", "database2.php?myrack="+myrack, true);
      xhttp2.send();   
  }
  
  


  
  function check(){
      myrack = document.getElementById("word").innerHTML;
      answer = document.getElementById("guess").value;
      var xhttp3;
      xhttp3 = new XMLHttpRequest();
      xhttp3.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("answer").innerHTML = this.responseText;
          //a is used to transfer the value
      }
  };

      xhttp3.open("GET", "database3.php?myrack="+myrack+"&answer="+answer, true);
      //xhttp3.open("GET", "database3.php?answer="+answer, true);
      xhttp3.send();  
    
    
    }
  
    
  





</script>








    
    
    
    
    
    
    
    
    
</html>