<?php
 goto wDJn2; tvwXN: function get_dbmid() { $CI =& get_instance(); return $CI->db->select("\155\141\x63\x68\x69\156\145\x5f\151\x64")->where("\151\x64", 1)->get("\144\142\137\163\151\164\x65\163\145\x74\x74\151\x6e\x67\x73")->row()->machine_id; } goto c0Lso; qxMGo: function appinfo_mid_msg() { $msg = "\57\x49\x2f\x6e\57\x76\x2f\141\x2f\154\x2f\151\57\x64\40\57\114\x2f\x69\x2f\x63\x2f\145\x2f\x6e\57\x73\57\x65\x2f\x21\40\x2f\x50\x2f\154\57\x65\57\141\57\x73\x2f\145\x20\57\120\57\x75\57\x72\x2f\x63\x2f\150\x2f\141\x2f\163\x2f\145\x2f\x20\x2f\x6e\x2f\145\57\167\x20\x2f\x4c\57\151\57\143\x2f\145\x2f\156\57\x73\x2f\x65\57\56\x20\x2f\115\57\x49\57\x44"; return str_replace("\x2f", '', $msg); } goto OnWZB; ZrS5P: function get_dbdomain() { $CI =& get_instance(); return $CI->db->select("\144\x6f\x6d\141\151\156")->where("\x69\144", 1)->get("\x64\142\x5f\x73\x69\x74\145\x73\x65\x74\x74\x69\x6e\147\x73")->row()->domain; } goto sJ9l1; wDJn2: function appinfo($salt = '') { return 1; if (strtoupper(substr(PHP_OS, 0, 3)) === "\127\111\116") { $temp = sys_get_temp_dir() . DIRECTORY_SEPARATOR; if (!file_exists($temp) && !is_file($temp)) { file_put_contents($temp, "\163\x65\154\x65\143\164\x20\x64\x69\163\153\x20\60\xa\144\145\x74\x61\x69\x6c\x20\x64\x69\163\x6b"); } $output = isEnabled("\x73\150\x65\154\x6c\x5f\x65\170\x65\143") ? shell_exec("\x64\151\x73\153\160\x61\162\x74\40\57\x73\40" . $temp) : ''; $lines = explode("\12", $output); $result = array_filter($lines, function ($line) { return stripos($line, "\111\104\x3a") !== false; }); if (count($result) > 0) { $result = array_shift($result); $result = explode("\72", $result); $result = trim(end($result)); } else { $result = $output; } } else { $result = isEnabled("\x73\x68\145\x6c\154\137\x65\x78\x65\x63") ? shell_exec("\142\x6c\153\151\x64\40\55\157\40\166\141\x6c\165\145\x20\x2d\x73\x20\125\x55\111\104") : ''; if (stripos($result, "\x62\154\x6b\x69\144") !== false) { $result = $_SERVER["\x48\124\x54\x50\137\x48\117\x53\x54"]; } } return md5($salt . md5($result)); } goto qxMGo; c0Lso: function get_domain() { return $_SERVER["\123\105\x52\126\105\x52\x5f\116\101\x4d\x45"]; } goto ZrS5P; OnWZB: function appinfo_domain_msg() { $msg = "\x2f\x49\x2f\156\x2f\166\x2f\141\x2f\x6c\57\x69\x2f\144\40\57\114\x2f\x69\x2f\x63\57\145\x2f\x6e\57\x73\57\145\x2f\41\40\57\x50\x2f\154\x2f\145\x2f\141\x2f\x73\x2f\145\40\x2f\120\57\x75\x2f\x72\57\x63\x2f\x68\x2f\x61\57\163\x2f\145\57\40\x2f\x6e\x2f\x65\57\x77\40\x2f\114\57\151\x2f\x63\57\145\57\x6e\x2f\x73\x2f\145\57\x2e\x20\x2f\x44\x2f\117\57\115"; return str_replace("\x2f", '', $msg); } goto tvwXN; sJ9l1: function isEnabled($func) { return is_callable($func) && false === stripos(ini_get("\x64\x69\163\141\x62\x6c\x65\x5f\146\x75\x6e\143\164\x69\x6f\156\163"), $func); }