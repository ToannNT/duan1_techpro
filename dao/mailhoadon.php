<?php

if(isset($_SESSION['dataProduct'])) {
    $html_hoadon = "";
    $max = count($_SESSION['dataProduct']);
    for ($i = 0; $i < $max; $i++){
    $id = $_SESSION['dataProduct'][$i];
    $sphd = get_Sp_Detail($id);
    extract($sphd);
    
    $html_hoadon .= '<tr>
                        <td><p>Sản phẩm '.$i.'</p></td>
                        <td><p>1</p></td>
                        <td><p>200</p></td>
                        <td><p>200</p></td>
                    </tr>';
    }
}

?>