<?php
// تضمين ملف الاتصال بقاعدة البيانات
include 'db_config.php';  // تأكد من أن المسار صحيح

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['income_amount'];
    $date = $_POST['income_date'];
    $description = $_POST['income_description'];

    // الاستعلام لإضافة إيرادات جديدة
    $sql = "INSERT INTO income (amount, date, description) 
            VALUES ('$amount', '$date', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة الإيراد بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}

// إغلاق الاتصال
$conn->close();
?>