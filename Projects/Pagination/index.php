<?php 

// Database connection 
$dsn = "mysql:host=localhost;dbname=learnsql;port=3306";


try {
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new PDO($dsn, 'TahirAhmed', 'admin', $options);

} catch(PDOException $e) {
    throw new Exception("0");
}

// fetch data from the database 
if(isset($_GET['page'])) {
    $pno = (int) $_GET['page'];
} else {
    $pno = 1;
}

$limit = 3;
$offset = ($pno - 1) * $limit;

// count the total number of record 

$tableRecord = $pdo->query("SELECT COUNT(*) FROM person3")->fetchColumn();

// number of pagination button required 
$num_of_pagination = ceil($tableRecord / $limit);

// echo $num_of_pagination;

// return $tableRecord;
$persons = $pdo->query("SELECT * FROM person3 LIMIT $offset, $limit")->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table with Pagination</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6 text-center">User List</h1>

        <!-- Table -->
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Age
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($persons as $person): ?>
                        <!-- Sample Data Rows -->
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-5 py-5 border-b border-gray-200 text-sm"><?= $person['id'] ?></td>
                            <td class="px-5 py-5 border-b border-gray-200 text-sm"><?= $person['firstname'] . " " . $person['lastname'] ?></td>
                            <td class="px-5 py-5 border-b border-gray-200 text-sm"><?= $person['age'] ?></td>
                        </tr>
                        <!-- Add more rows as needed -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-5 py-4 border-t border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="text-sm text-gray-700">
                        Showing <?= $offset + 1 ?> to <?= $offset + $limit ?> of <?= $tableRecord ?> entries
                    </div>
                    <div class="flex space-x-2">
                     <?php if($pno > 1 && $pno <= $num_of_pagination): ?> 
                         <a href="?page=<?= $pno - 1 ?>" class="px-4 py-2 text-sm bg-white border rounded-lg hover:bg-gray-100">
                              Previous
                        </a>
                     <?php else: ?>
                         <a href="#" class="px-4 py-2 text-sm bg-white border rounded-lg hover:bg-gray-100 opacity-50 cursor-not-allowed">
                              Previous
                         </a>
                     <?php endif; ?>

                     <?php for($i = 1; $i <= $num_of_pagination; $i++) : ?>
                        <a href="?page=<?= $i ?>" class="px-4 py-2 <?= $i == $pno ? 'bg-blue-500 text-white' : 'bg-white text-gray-700' ?> text-sm border rounded-lg">
                            <?= $i ?>
                        </a>
                     <?php endfor; ?>
                     <?php if($pno < $num_of_pagination): ?>
                        <a href="?page=<?= $pno + 1 ?>" class="px-4 py-2 text-sm bg-white border rounded-lg hover:bg-gray-100">
                            Next
                        </a>
                     <?php else : ?>
                        <a href="" class="px-4 py-2 text-sm bg-white border rounded-lg hover:bg-gray-100 opacity-50 cursor-not-allowed">
                            Next
                        </a>
                     <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>