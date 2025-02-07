<?php
$servername = "localhost";
$username = "learllzm_learllzm_expenses_user";  // اسم المستخدم لقاعدة البيانات
$password = "@Ahmed12020";  // كلمة المرور لقاعدة البيانات
$dbname = "learllzm_expenses_DB";  // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من وجود خطأ في الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>