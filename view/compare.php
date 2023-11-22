
<?php 

        $id1 = $_GET['idsp1'];
        $id2 = $_GET['idsp2'];


        $spss1 = get_Sp_Detail($id1);
        extract($spss1);
        $hinhsp1=$hinh;
        $ten1=$ten;
        $gia1=$gia;

        $spss2 = get_Sp_Detail($id2);
        extract($spss2);
        $hinhsp2=$hinh;
        $ten2=$ten;
        $gia2=$gia;         

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
                                <h4>Tên sản phẩm</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div>
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <div class="d-flex">
                                            <td colspan="2" class="col-6" >
                                                <h5 class="compare-product-name "><?=$ten1?></a></h5>
                                            </td>
                                            <td colspan="2" class="col-6">
                                                <h5 class="compare-product-name "><?=$ten2?></a></h5>
                                            </td>
                                        </div>
                                    </tr>
                                </table>
                            </div>
                        </div><br>

                        <div class="accordion">
                            <div class="d-flex justify-content-between">
                                <h4>Giá</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div>
                                <table class="table table-bordered table-hover mb-0">
                                    <tr>
                                        <div class="d-flex">
                                            <td colspan="2" class="col-6">
                                                <h5 class="compare-product-name"><?=$gia1?></a></h5>
                                            </td>
                                            <td colspan="2" class="col-6">
                                                <h5 class="compare-product-name"><?=$gia2?></a></h5>
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