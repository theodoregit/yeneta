<?php
namespace App\Custom;
class HelperClass {
    //
    public function gpa_calculator($credit_hrs, $grade_type){
        $value = null;
        switch ($grade_type) {
            case 'A+':
                $value = $credit_hrs * 4;
                break;
            case 'A':
                $value = $credit_hrs * 4;
                break;
            case 'A-':
                $value = $credit_hrs * 3.75;
                break;
            case 'B+':
                $value = $credit_hrs * 3.5;
                break;
            case 'B':
                $value = $credit_hrs * 3;
                break;
            case 'B-':
                $value = $credit_hrs * 2.75;
                break;
            case 'C+':
                $value = $credit_hrs * 2.5;
                break;
            case 'C':
                $value = $credit_hrs * 2;
                break;
            case 'C-':
                $value = $credit_hrs * 1.75;
                break;
            case 'D':
                $value = $credit_hrs * 1;
                break;
            case 'F':
                $value = $credit_hrs * 0;
                break;
            default:
                //
                break;
        }
        
        return $value;
    }
    public function stringInsert($str,$insertstr,$pos){
        $str = substr($str, 0, $pos) . $insertstr . substr($str, $pos);
        return $str;
    }
}