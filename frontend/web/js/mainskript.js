var ct_date = new Date(),
    ctTimeMs = new Date().getTime(),
    ctMouseEventTimerFlag = true, //Reading interval flag
    ctMouseData = [],
    ctMouseDataCounter = 0;

function ctSetCookie(c_name, value) {
    document.cookie = c_name + "=" + encodeURIComponent(value) + "; path=/";
}

ctSetCookie("ct_ps_timestamp", Math.floor(new Date().getTime()/1000));
ctSetCookie("ct_fkp_timestamp", "0");
ctSetCookie("ct_pointer_data", "0");
ctSetCookie("ct_timezone", "0");

setTimeout(function(){
    ctSetCookie("ct_checkjs", "9544b2a6de043ca53d6bca5f9b36dc10");
    ctSetCookie("ct_timezone", ct_date.getTimezoneOffset()/60*(-1));
},1000);

//Writing first key press timestamp
var ctFunctionFirstKey = function output(event){
    var KeyTimestamp = Math.floor(new Date().getTime()/1000);
    ctSetCookie("ct_fkp_timestamp", KeyTimestamp);
    ctKeyStopStopListening();
}

//Reading interval
var ctMouseReadInterval = setInterval(function(){
    ctMouseEventTimerFlag = true;
}, 150);

//Writting interval
var ctMouseWriteDataInterval = setInterval(function(){
    ctSetCookie("ct_pointer_data", JSON.stringify(ctMouseData));
}, 1200);

//Logging mouse position each 150 ms
var ctFunctionMouseMove = function output(event){
    if(ctMouseEventTimerFlag == true){

        ctMouseData.push([
            Math.round(event.pageY),
            Math.round(event.pageX),
            Math.round(new Date().getTime() - ctTimeMs)
        ]);

        ctMouseDataCounter++;
        ctMouseEventTimerFlag = false;
        if(ctMouseDataCounter >= 100){
            ctMouseStopData();
        }
    }
}

//Stop mouse observing function
function ctMouseStopData(){
    if(typeof window.addEventListener == "function"){
        window.removeEventListener("mousemove", ctFunctionMouseMove);
    }else{
        window.detachEvent("onmousemove", ctFunctionMouseMove);
    }
    clearInterval(ctMouseReadInterval);
    clearInterval(ctMouseWriteDataInterval);
}

//Stop key listening function
function ctKeyStopStopListening(){
    if(typeof window.addEventListener == "function"){
        window.removeEventListener("mousedown", ctFunctionFirstKey);
        window.removeEventListener("keydown", ctFunctionFirstKey);
    }else{
        window.detachEvent("mousedown", ctFunctionFirstKey);
        window.detachEvent("keydown", ctFunctionFirstKey);
    }
}

if(typeof window.addEventListener == "function"){
    window.addEventListener("mousemove", ctFunctionMouseMove);
    window.addEventListener("mousedown", ctFunctionFirstKey);
    window.addEventListener("keydown", ctFunctionFirstKey);
}else{
    window.attachEvent("onmousemove", ctFunctionMouseMove);
    window.attachEvent("mousedown", ctFunctionFirstKey);
    window.attachEvent("keydown", ctFunctionFirstKey);
}

if(!window.BX)window.BX={};if(!window.BX.message)window.BX.message=function(mess){if(typeof mess=='object') for(var i in mess) BX.message[i]=mess[i]; return true;};

(window.BX||top.BX).message({'JS_CORE_LOADING':'Загрузка...','JS_CORE_NO_DATA':'- Нет данных -','JS_CORE_WINDOW_CLOSE':'Закрыть','JS_CORE_WINDOW_EXPAND':'Развернуть','JS_CORE_WINDOW_NARROW':'Свернуть в окно','JS_CORE_WINDOW_SAVE':'Сохранить','JS_CORE_WINDOW_CANCEL':'Отменить','JS_CORE_WINDOW_CONTINUE':'Продолжить','JS_CORE_H':'ч','JS_CORE_M':'м','JS_CORE_S':'с','JSADM_AI_HIDE_EXTRA':'Скрыть лишние','JSADM_AI_ALL_NOTIF':'Показать все','JSADM_AUTH_REQ':'Требуется авторизация!','JS_CORE_WINDOW_AUTH':'Войти','JS_CORE_IMAGE_FULL':'Полный размер'});
(window.BX||top.BX).message({'LANGUAGE_ID':'ru','FORMAT_DATE':'DD.MM.YYYY','FORMAT_DATETIME':'DD.MM.YYYY HH:MI:SS','COOKIE_PREFIX':'BITRIX_SM','SERVER_TZ_OFFSET':'21600','SITE_ID':'s1','SITE_DIR':'/','USER_ID':'','SERVER_TIME':'1536117183','USER_TZ_OFFSET':'0','USER_TZ_AUTO':'Y','bitrix_sessid':'25ab4ce5ba4f26b9b215583b6e2e30bc'});