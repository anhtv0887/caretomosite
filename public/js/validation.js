function validate() {
    //Khai bao cao bien get tu form
    var name = document.getElementById("name").value;
    var kana_name = document.getElementById("kana_name").value;
    var male = document.getElementById("male").checked; //check radio button
    var female = document.getElementById("female").checked;
    var birthyear = document.getElementById("year").value;
    var birthmonth = document.getElementById("month").value;
    var birthday = document.getElementById("day").value;
    var pref = document.getElementById("pref").value;
    var city = document.getElementById("city").value;
    var tel_mail = document.getElementById("Tel_mail").value;
    var TelNo1 = document.getElementById("TelNo1").value;
    var TelNo2 = document.getElementById("TelNo2").value;
    var TelNo3 = document.getElementById("TelNo3").value;
    var MBNo1 = document.getElementById("MBNo1").value;
    var MBNo2 = document.getElementById("MBNo2").value;
    var MBNo3 = document.getElementById("MBNo3").value;
    //var school_type = document.getElementById("school_type").value;
    var agree = document.getElementById("agree").checked;
    // Validate cac truong input
    var error_message = [];
    var flag_error = false;
    //check name kanji
     if (!isInputKanjiName(name)) {
         error_message.push("お名前を入力してください。\n");
         flag_error = true;
     } else if (!InputKanjiName(name)) {
         error_message.push("お名前は漢字で入力してください。\n");
         flag_error = true;
     }
    //check name Kana
     if (!isInputKanaName(kana_name)) {
         error_message.push("お名前(カナ)を入力してください。\n");
         flag_error = true;
     } else if (!InputKanaName(kana_name)) {
         error_message.push("お名前(カナ)はひらがなまたはカタカナでを入力してください。\n");
         flag_error = true;
     }
    //chec nhap gioi tinh
     if (!male && !female) {
         error_message.push("男性か女性か、性別を選択してください。\n");
         flag_error = true;
     }
    // //check nhap nam 
     if (!isInputBirthYear(birthyear)) { //pattern nay ap dung cho ca space fullsize
         error_message.push("生年月日（年）を入力してください。\n");
         flag_error = true;
     } else if (!checkBirthYear(birthyear)) {
         error_message.push("生年月日（年）は正しく入力されません。\n");
         flag_error = true;
     }
    // //Check nhap thang
     if (!isInputBirthMonth(birthmonth)) {
         error_message.push("生年月日（月）を入力してください。\n");
         flag_error = true;
     } else if (!checkBirthMonth(birthmonth)) {
         error_message.push("生年月日（月）は正しく入力されません。\n");
         flag_error = true;
     }
    // check nhap date
     if (!isInputBirthday(birthday)) {
         error_message.push("生年月日（日）を入力してください。\n");
         flag_error = true;
     } else if (checkUruo(birthyear)) {
         if (birthmonth == 2) {
             if (birthday < 1 || birthday > 29) {
                 error_message.push("うるう年なので誕生日は1以上29以下の範囲で入力してください。\n");
                 flag_error = true;
             }
         } else if (birthday < 1 || birthday > 31) {
             error_message.push("生年月日（日）は正しく入力されません。\n");
             flag_error = true;
         }
     } else if (birthmonth == 2) {
         if (birthday < 1 || birthday > 28) {
             error_message.push("うるう年でないので誕生日は1以上29以下の範囲で入力してください。\n");
             flag_error = true;
         }
     } else if (birthday < 1 || birthday > 31) {
         error_message.push("生年月日（日）は正しく入力されません。\n");
         flag_error = true;
     }
     if (pref.replace(/\s/, "") == "") {
         error_message.push("都道府県を選択してください。\n");
         flag_error = true;
     }
     if (city.replace(/\s/, "") == "") {
         error_message.push("市区町村以下を入力してください。\n");
         flag_error = true;
     }
    // check mail
     if (!isInputMail(tel_mail)) {
         error_message.push("メールアドレスを入力してください。\n");
         flag_error = true;
     } else if (!checkMail(tel_mail)) {
         error_message.push("メールアドレスの形式は正しくではありません。\n");
         flag_error = true;
     }
    //Check tel number
    if (!isInputTel(TelNo1, TelNo2, TelNo3) && !isInputMB(MBNo1, MBNo2, MBNo3)) {
        error_message.push("電話番号と携帯番号とどちらか入力してください。\n");
        flag_error = true;
    } else if (isInputTel(TelNo1, TelNo2, TelNo3)) {
        if (!isInputNumber(TelNo1, TelNo2, TelNo3)) {
            error_message.push("番号は数値を入力してください。\n");
            flag_error = true;
        }
    } else if (isInputMB(MBNo1, MBNo2, MBNo3)) {
        if (!isInputNumberMB(MBNo1, MBNo2, MBNo3) ) {
            error_message.push("番号は数値を入力してください。\n");
            flag_error = true;
        }
    }
     //if (school_type == "") {
     //    error_message.push("学校種別を選択してください。\n");
     //    flag_error = true;
     //}
     if (!agree) {
         error_message.push("「同意します」にチェックしてください。\n");
         flag_error = true;
     }
    //Tra ve error message
    if (flag_error) {
        //method array join() dung de join cac phan tu voi nhau, ngan cach bang separater dinh nghia
        //VD nay: join error message ngan cach bang gia tri blank
        alert(error_message.join(""));
        return false;
    } else return true;
}
//check Name Kanji
function isInputKanjiName(name) {
    if (name.replace(/\s/g, "") == "") return false;
    else return true;
}

function InputKanjiName(name) {
    var kanji_name_patt = /[\u3400-\u9FFF]/; //pattern check kanji
    var checkKanjiResult = kanji_name_patt.test(name);
    if (!checkKanjiResult) return false;
    else return true;
}
//check Nam Kane
function isInputKanaName(kana_name) {
    if (kana_name.replace(/\s/g, "") == "") return false;
    else return true;
}

function InputKanaName(kana_name) {
    var kana_name_patt = /[\u3041-\u3096\u30A1-\u30FA]/; //pattern check input hiragana va katakana
    var checkKanaResult = kana_name_patt.test(kana_name);
    if (!checkKanaResult) return false;
    else return true;
}
//Check birth year
function isInputBirthYear(birthyear) {
    if (birthyear.replace(/\s/, "") == "") return false;
    else return true;
}

function checkBirthYear(birthyear) {
    var year = new Date();
    var cur_year = year.getFullYear();
    if (birthyear <= (cur_year - 100) || birthyear >= cur_year - 10) return false;
    else return true;
}
//Check nhap month
function isInputBirthMonth(birthmonth) {
    if (birthmonth.replace(/\s/g, "") == "") return false;
    else return true;
}

function checkBirthMonth(birthmonth) {
    if (birthmonth < 1 || birthmonth > 12) return false;
    else return true;
}

function isInputBirthday(birthday) {
    if (birthday.replace(/\s/, "") == "") return false;
    else return true;
}

function checkUruo(birthyear) {
    if ((birthyear % 4 === 0 && birthyear % 100 !== 0 && birthyear % 400 !== 0) || (birthyear % 100 === 0 && birthyear % 400 === 0)) return true;
    else return false;
}

function isInputMail(tel_mail) {
    if (tel_mail.replace(/\s/, "") == "") return false;
    else return true;
}

function checkMail(tel_mail) {
    var mail_patt = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var checkMail = mail_patt.test(tel_mail);
    if (!checkMail) return false;
    return true;
}

function isInputTel(TelNo1, TelNo2, TelNo3) {
    var No1 = TelNo1.replace(/\s/, "");
    var No2 = TelNo2.replace(/\s/, "");
    var No3 = TelNo3.replace(/\s/, "");
    var tel = [No1, No2, No3];
    if (No1 == "" || No2 == "" || No3 == "") return false;
    else return true;
}

function isInputMB(MBNo1, MBNo2, MBNo3) {
    var MBNo1 = MBNo1.replace(/\s/, "");
    var MBNo2 = MBNo2.replace(/\s/, "");
    var MBNo3 = MBNo3.replace(/\s/, "");
    if (MBNo1 == "" || MBNo2 == "" || MBNo3 == "") return false;
    else return true;
}

function isInputNumber(TelNo1, TelNo2, TelNo3) {
    var patt = /\d/;
    var checkTelNo1 = patt.test(TelNo1);
    var checkTelNo2 = patt.test(TelNo2);
    var checkTelNo3 = patt.test(TelNo3);
    if (!checkTelNo1 || !checkTelNo2 || !checkTelNo3) return false;
    else return true;
}

function isInputNumberMB(MBNo1, MBNo2, MBNo3) {
    var patt = /\d/;
    var checkTelNo1 = patt.test(MBNo1);
    var checkTelNo2 = patt.test(MBNo2);
    var checkTelNo3 = patt.test(MBNo3);
    if (!checkTelNo1 || !checkTelNo2 || !checkTelNo3) return false;
    else return true;
}