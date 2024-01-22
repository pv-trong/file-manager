<?php
if (!function_exists('setDatatable')) {
    function setDatatable($data, $totalRecord): void
    {
        $draw = $_POST['draw'];
        // Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecord,
            "iTotalDisplayRecords" => $totalRecord,
            "aaData" => $data
        );

        echo json_encode($response);
    }
}
