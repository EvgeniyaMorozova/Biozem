<?php
include("tpl/connect.php");

$query = 'select * from products';                 //products
$products = mysqli_query($link,$query);
$products_array = mysqli_fetch_all($products,MYSQLI_ASSOC);

    echo '<div class="container marketing"> <div class="row">';

        foreach($products_array as $product) 
        {
          $product_id = $product['product_id'];

          $res='<div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="'.$product['product_img'].'" alt="...">
          <h2>'.$product['product_name'].'</h2>
          <p>'.$product['product_description'].'</p>

          <button id="'.$product['product_id'].'_btn" type="button" class="btn btn-secondary" data-bs-toggle="modal">
          Подробнее
          </button>

          </div>';
          echo $res;

       
            echo '<div id="Modal'.$product['product_id'].'" class="modal" tabindex="-1"> <div class="modal-dialog">';
              
                  $modal_content='<div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">'.$product['product_name'].$product['product_description'].'</h5>
                      <button id="Modal'.$product['product_id'].'close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <table class="table" style="text-align: center; vertical-align: middle">
                              <thead>
                                <tr>
                                  <th scope="col"></th>
                                  <th scope="col">объем</th>
                                  <th scope="col">цена, руб.</th>
                                </tr>
                              </thead>';

                    $query = 'select * from sub_products where product_id="'.$product_id.'"';    // sub_products
                    $sub_products = mysqli_query($link,$query);
                    $sub_products_array = mysqli_fetch_all($sub_products,MYSQLI_ASSOC);
                    
                            foreach($sub_products_array as $sub_product) {
                              $table_content= 
                                  '<tbody>
                                  <tr>
                                  <td><img class="img-fluid" src="'.$sub_product['sub_product_img'].'" alt="..."></td>
                                  <td>'.$sub_product['sub_product_name'].'</td>
                                  <td>'.$sub_product['sub_product_price'].'</td>
                                  </tr>';

                                  $modal_content.=$table_content;

                            }
                    

                    $modal_content.='</tbody></table>
                    </div>
                  </div>
                </div>
              </div>';
              echo $modal_content;
   
        } 

        
?>
