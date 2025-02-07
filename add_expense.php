<?php
// تضمين ملف الاتصال بقاعدة البيانات
include 'db_config.php';  // تأكد من أن المسار صحيح

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expense_type = $_POST['expense_type'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $description = $_POST['description'];

    // الاستعلام لإضافة مصاريف جديدة
    $sql = "INSERT INTO expenses (expense_type, amount, date, description) 
            VALUES ('$expense_type', '$amount', '$date', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "تم إضافة المصروف بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }
}

// إغلاق الاتصال
$conn->close();
?>