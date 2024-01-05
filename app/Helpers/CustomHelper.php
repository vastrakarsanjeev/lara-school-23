<?php
use App\Models\MasterSession;

if(!function_exists('getAcademicSession')){
    function getAcademicSession(){
        return $s= MasterSession::where('status', 1)->first()->year??"No session set";
    }
}
?>
