
<?php 

        $id1 = $_GET['idsp1'];
        $id2 = $_GET['idsp2'];


        $spss1 = get_Sp_Detail($id1);
        extract($spss1);
        $hinhsp1=$hinh;
        $ten1=$ten;
        if($sale = 1){ 
            $gia1=$giamgia;
        } else {
            $gia1=$gia;
        }
        $mota1=$mota;
        $chitiet1=$chitiet;
        $tinhnang1=$tinhnang;

        $spss2 = get_Sp_Detail($id2);
        extract($spss2);
        $hinhsp2=$hinh;
        $ten2=$ten;
        if($sale = 1){ 
            $gia2=$giamgia;
        } else {
            $gia2=$gia;
        }         
        $mota2=$mota;

?>      
      
      <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Compare</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Compare Area -->
            <div class="compare-area pt-60 pb-60">
                <div class="container">
                    <div class="compare-table table-responsive">
                        <table class="table table-bordered table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td class="compare-column-productinfo col-6">
                                        <div class="compare-pdoduct-image d-flex flex-column">
                                            <a href="single-product.html">
                                                 <img class="col-6" src="./view/layout/images/product/<?=$hinhsp1?>" alt="">
                                            </a>
                                            <a href="cart.html" class="ho-button ho-button-sm">
                                                <span>ADD TO CART</span>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="compare-column-productinfo col-6">
                                        <div class="compare-pdoduct-image d-flex flex-column" >
                                            <a href="single-product.html">
                                                <img class="col-6" src="./view/layout/images/product/<?=$hinhsp2?>" alt="">
                                            </a>
                                            <a href="cart.html" class="ho-button ho-button-sm">
                                                <span>ADD TO CART</span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="accordion">
                            <div class="d-flex justify-content-between">
                                <h4>Thông tin sản phẩm</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div>
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <div class="d-flex">
                                            <td colspan="2" class="col-6 text-left" >
                                                <h5 class="compare-product-name">Tên : <?=$ten1?></a></h5>
                                                <h5 class="compare-product-name">Giá : <?=number_format($gia1, 0, '.', '.')?></a></h5>
                                            </td>
                                            <td colspan="2" class="col-6 text-left">
                                                <h5 class="compare-product-name">Tên : <?=$ten2?></a></h5>
                                                <h5 class="compare-product-name">Giá : <?=number_format($gia2, 0, '.', '.')?></a></h5>
                                            </td>
                                        </div>
                                    </tr>
                                </table>
                            </div>
                        </div><br>

                        <div class="accordion">
                            <div class="d-flex justify-content-between">
                                <h4>Mô tả</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div>
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <div class="d-flex">
                                            <td colspan="2" class="col-6 text-left">
                                                <h5 class="compare-product-name"><?=$mota1?></a></h5>
                                            </td>
                                            <td colspan="2" class="col-6 text-left">
                                                <h5 class="compare-product-name"><?=$mota2?></a></h5>
                                            </td>
                                        </div>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="accordion">
                            <div class="d-flex justify-content-between">
                                <h4>Chi tiết</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div>
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <div class="d-flex">
                                            <td colspan="2" class="col-6 text-left">
                                                <h5 class="compare-product-name"><?=$chitiet1?></a></h5>
                                            </td>
                                            <td colspan="2" class="col-6 text-left">
                                                <h5 class="compare-product-name"><?=$mota2?></a></h5>
                                            </td>
                                        </div>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="accordion">
                            <div class="d-flex justify-content-between">
                                <h4>Tính năng</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div>
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <div class="d-flex">
                                            <td colspan="2" class="col-6 text-left pd-0">
                                                <h5 class="compare-product-name"><?=$tinhnang1?></a></h5>
                                            </td>
                                            <td colspan="2" class="col-6 text-left">
                                                <h5 class="compare-product-name"><?=$mota2?></a></h5>
                                            </td>
                                        </div>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Compare Area -->
<script>
$(document).ready(function() {
   
    $(".sosanh").click(function(){   
        var    taikhoan= 'tài khoản';
        var    id1= $(this).parent().find("#spss1").val();
        var    id2= $(this).parent().find("#spss2").val();
    
    
        $.post("compare.php",{
            tk:taikhoan,
            id1:id1,
            id2:id2
        },
            function(data,status){
                
            });
        });
    });

   </script>