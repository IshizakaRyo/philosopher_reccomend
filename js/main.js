//質問から哲学書を割り振る処理

function getConclusionPage() {

    const YES1 = document.forms.form1.yes1.checked;
    const YES2 = document.forms.form1.yes2.checked;
    const YES3 = document.forms.form1.yes3.checked;
    const YES4 = document.forms.form1.yes4.checked;
    const YES5 = document.forms.form1.yes5.checked;
    const YES6 = document.forms.form1.yes6.checked;

    var number = 0;

    if(YES1) {
      number+=1; 
    };
    if(YES2) {
      number+=2;
    };
    if(YES3) {
      number+=3;
    };
    if(YES4) {
      number+=4;
    };
    if(YES5) {
      number+=5;
    };
    if(YES6) {
      number+=6;
    };


    var target = document.getElementById("getConclusion");

    if(number == 20){
        target.href = 'contents/socrates.php';
      }else if (number == 5 || number == 21) {
        target.href = 'contents/praton.php';
      }else if (number == 9) {
        target.href = 'contents/aristoteres.php';
      }else if (number == 16) {
        target.href = 'contents/dekaruto.php';
      }else if (number == 6) {
        target.href = 'contents/kanto.php';
      }else if (number == 1 || number == 17) {
        target.href = 'contents/bensam.php';
      }else if (number == 2 || number == 13) {
        target.href = 'contents/hegel.php';
      }else if (number == 8 || number == 10) {
        target.href = 'contents/nizche.php';
      }else if (number == 15) {
        target.href = 'contents/freud.php';
      }else if (number == 3 || number == 14) {
        target.href = 'contents/marx.php';
      }else if (number == 19) {
        target.href = 'contents/hidega.php';
      }else if (number == 4 || number == 7) {
        target.href = 'contents/sosyuru.php';
      }else if (number == 12) {
        target.href = 'contents/fuko.php';
      }else if (number == 11) {
        target.href = 'contents/james.php';
      }else if (number == 18) {
        target.href = 'contents/rowls.php';
      }
      
}

