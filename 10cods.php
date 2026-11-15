<?php
// 1. طباعة نص بسيط
echo "1. مرحباً بالعالم!<br>";

// 2. تعريف متغير وطباعته
$name = "أحمد";
echo "2. اسم الطالب هو: " . $name . "<br>";

// 3. عملية حسابية بسيطة
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
echo "3. مجموع 10 و 5 هو: " . $sum . "<br>";

// 4. الشرط If-Else
$grade = 75;
if ($grade >= 50) {
    echo "4. النتيجة: ناجح<br>";
} else {
    echo "4. النتيجة: راسب<br>";
}

// 5. المصفوفات (Array) والطباعة
$colors = array("أحمر", "أخضر", "أزرق");
echo "5. اللون الأول هو: " . $colors[0] . "<br>";

// 6. حلقة التكرار For
echo "6. الأرقام من 1 إلى 3: ";
for ($i = 1; $i <= 3; $i++) {
    echo $i . " ";
}
echo "<br>";

// 7. حلقة التكرار While
echo "7. عد تنازلي: ";
$count = 3;
while ($count > 0) {
    echo $count . " ";
    $count--;
}
echo "<br>";

// 8. دالة (Function) بسيطة
function greet($user) {
    return "أهلاً بك يا " . $user;
}
echo "8. " . greet("خالد") . "<br>";

// 9. استخدام تاريخ اليوم
echo "9. تاريخ اليوم هو: " . date("Y-m-d") . "<br>";

// 10. المصفوفة الترابطية (Associative Array)
$student = array("name" => "سارة", "age" => 20, "major" => "IT");
echo "10. الطالبة " . $student["name"] . " عمرها " . $student["age"] . " سنة وتدرس " . $student["major"];
?>