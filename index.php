<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>OOP 3</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php
        require_once __DIR__ . '/Models/Salary.php';
        require_once __DIR__ . '/Models/Person.php';
        require_once __DIR__ . '/Models/Employee.php';
        require_once __DIR__ . '/Models/Boss.php';

        $salary = new Salary(1200, "no", "no");
        
        $person = new Person("Luca", "Formicola", "16-08-1967", "Milano", "LUCFRM75C45758");
        
        $employee = new Employee('Massimo', 'Piazza', '06-03-1998', 'Padova', 'FBZEF01G1H123I', $salary, '01-01-2020');
        
        $boss = new Boss('Luigi', 'Caravelli', '20/06/1998', 'Napoli', 'CRVLGU98H20L845S', 100000, 30000);
        ?>
</head>
<body>
    <?php
    echo $salary->getHtml() . "<br><br>------------------------------<br><br>";
    echo $person->getHtml() . "<br><br>------------------------------<br><br>";
    echo $employee->getHtml() . "<br><br>------------------------------<br><br>";
    echo $boss->getHtml() . "<br><br>------------------------------<br><br>";
    ?>
</body>
</html>