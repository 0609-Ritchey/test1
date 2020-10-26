function check(){
    if (form1.organization.value == ""){
        //条件に一致する場合(メールアドレスが空の場合)
        alert("必須項目に未入力があります");    //エラーメッセージを出力
        return false;    //送信ボタン本来の動作をキャンセルします
    }else{
        //条件に一致しない場合(メールアドレスが入力されている場合)
        return true;    //送信ボタン本来の動作を実行します
    }
}

function check(){
    if (form1.username.value == ""){
        alert("必須項目に未入力があります");   
        return false;
    }else{
        return true;
    }
}

function check(){
    if (form1.name-kana.value == ""){
        alert("必須項目に未入力があります");   
        return false;    
    }else{
        return true;
    }
}

function check(){
    if (form1.postal-code.value == ""){
        alert("必須項目に未入力があります");   
        return false;    
    }else{
        return true;
    }
}

function check(){
    if (form1.addess.value == ""){
        alert("必須項目に未入力があります");   
        return false;    
    }else{
        return true;
    }
}

function check(){
    if (form1.number.value == ""){
        alert("必須項目に未入力があります");   
        return false;    
    }else{
        return true;
    }
}