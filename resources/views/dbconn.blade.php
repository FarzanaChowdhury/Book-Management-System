<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel and MySQL Connection</title>
</head>
<body>
    <div>
        @php
            use Illuminate\Support\Facades\DB;

            try {
                $databaseName = DB::connection()->getDatabaseName();
                echo "Successfully connected to DB. Database name: " . $databaseName;
            } catch (\Exception $e) {
                echo "Failed to connect to the database: " . $e->getMessage();
            }
        @endphp
    </div>
</body>
</html>
