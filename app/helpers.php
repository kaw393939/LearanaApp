<?php

if (!function_exists('data2Table')) {
    function data2Table($rows)
    {
        $html = '<table class="table table-bordered table-hover dataTable" role="grid">';
        $headings = array_keys($rows[0]);
        $html .= '<thead  ><th>';
        foreach($headings as $key=>$row) {


                $html .= '<th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="'. $row .'" >' . $row . '</th>';

        }
        $html .= '</tr><thead>';

        foreach($rows as $key=>$row) {
            $html .= "<tr>";
            foreach($row as $key2=>$row2){
                $html .= "<td >" . $row2 . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        return $html;
    }
}