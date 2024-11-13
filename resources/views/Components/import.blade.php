
<?php
//require "index.php";
require "Database.php";

$db = new Database();

$headers = [
    'C_Code' => "",
    'C_Name' => "",
    'Pd_Code' => "",
    'Pd_Name' => "",
];




if (isset($_POST["import"])) {
    $fileName = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");

        // Skip the first row (header)
        $column = fgetcsv($file, 10000, ",");

        // Loop through each row of the CSV
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            // Ensure the row has exactly 6 columns by adding empty values for missing columns
            // $column = array_pad($column, 6, '');

            $sqlInsert = "INSERT INTO polling_stations (C_Code, C_Name, Pd_Code, Pd_Name, Ps_Code, Ps_Name)
                         VALUES (?,?,?,?,?,?)";

            if ($column[0] != null && $column[1] != null) {
                $headers['C_Code'] = $column[0];
                $headers['C_Name'] = $column[1];
            } else if ($column[0] == null && $column[1] == null && $column[4] == null && $column[5] == null) {
                $headers['Pd_Code'] = $column[2];
                $headers['Pd_Name'] = $column[3];

                $column[0] = $headers['C_Code'];
                $column[1] = $headers['C_Name'];

            } else if ($column[0] == null && $column[1] == null && $column[2] == null && $column[3] == null) {
                $column[0] = $headers['C_Code'];
                $column[1] = $headers['C_Name'];
                $column[2] = $headers['Pd_Code'];
                $column[3] = $headers['Pd_Name'];
            }


            // Prepare the parameters for the query
            // $params = [
            //     is_numeric($column[0]) ? (int)$column[0] : null,  // C_Code
            //     $column[1] = mb_convert_encoding($column[1], 'UTF-8', 'auto'),  // Convert C_Name to UTF-8
            //     is_numeric($column[2]) ? (int)$column[2] : null,  // Pd_Code
            //     $column[3] ?? '',  // Pd_Name
            //     is_numeric($column[4]) ? (int)$column[4] : null,  // Ps_Code
            //     $column[5] ?? ''   // Ps_Name
            // ];

            $params = [
                $column[0] ?? null,  // C_Code
                $column[1] ?? null,  // C_Name
                $column[2] ?? null,  // Pd_Code
                $column[3] ?? null,  // Pd_Name
                $column[4] ?? null,  // Ps_Code
                $column[5] ?? null,  // Ps_Name
            ];

            try {
                $result = $db->query($sqlInsert, $params);
                if ($result) {
                    //echo "CSV data imported successfully into the Database<br>";
                } else {
                    echo "Problem importing csv<br>";
                }
            } catch (PDOException $e) {
                //echo "Error: " . $e->getMessage() . "<br>";
            }
        }

        fclose($file);
    }
}
?>

