      <!-- JS here -->
      <script src="assets/js/vendor/waypoints.js"></script>
      <script src="assets/js/bootstrap-bundle.js"></script>
      <script src="assets/js/meanmenu.js"></script>
      <script src="assets/js/swiper-bundle.js"></script>
      <script src="assets/js/slick.js"></script>
      <script src="assets/js/range-slider.js"></script>
      <script src="assets/js/magnific-popup.js"></script>
      <script src="assets/js/nice-select.js"></script>
      <script src="assets/js/purecounter.js"></script>
      <script src="assets/js/countdown.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/isotope-pkgd.js"></script>
      <script src="assets/js/imagesloaded-pkgd.js"></script>
      <script src="assets/js/ajax-form.js"></script>
      <script src="assets/js/main.js"></script>


      <script>

            $(document).ready(function(){
                  var val =$('#tott').val();
                  $('#ts').html(val);
                  $('#tt').html(val);

                  $('#response').hide();
                  $('.close').click(function(e){

                        e.preventDefault();
                        $('#exampleModal').modal('hide');
                  });

                  ////add to cart script
                  $('.e').on("click",function(e){
                        e.preventDefault();
                        var id=$(this).data('id');
                        
                        $.ajax({
                              url:"functions/add-to-cart.php",
                              method:"POST",
                              data:{id:id},
                              
                              success:function(data){
                                    console.log(data);
                                    if(data==1){
                                    
                                          $('#response1').hide();
                                          $('#response').show();
                                          $('#response').html('Product is already added in cart!');
                                          $('#exampleModal').modal('show');
                                    }
                                    if(data==0){
                                          var val =$('#tott').val();
                                          val=parseInt(val)+1;
                                          $('#ts').html(val);
                                          $('#tt').html(val);
                                          $('#tott').val(val);



                                          $('#response').hide();
                                          $('#response1').show();
                                          $('#response1').html('Product is successfully added in cart!');
                                          $('#exampleModal').modal('show');
                                    }
                                    
                              }
                        });
                  });

                  


                  $('.r').click(function(e){
                        e.preventDefault();
                        var id=$(this).data('id');
                        $.ajax({
                              url:"functions/remove-from-cart.php",
                              method:"POST",
                              data:{id:id},
                              success:function(data){
                                    console.log(data);
                                    if(data=='0'){
                                          window.location='cart.php';
                                    }
                              }
                        });
                  });



                  $('.plus').click(function(e){
                        e.preventDefault();
                        var id=$(this).data('id');
                        var qty=$('.input'+id).val();
                        var actual_price=$('#price'+id).val();
                       
                        $.ajax({
                              url:"functions/update-cart.php",
                              method:"POST",
                              data:{id:id,qty:qty},
                              success:function(data){
                                    if(data=='0'){
                                          qty= parseInt(qty)+1;
                                          $('.input'+id).val(qty);
                                           totalprice =$('#total').val();
                                       
                                           var price_after_addition=parseInt(totalprice) + parseInt(actual_price);
                               

                                           $('#total').val(price_after_addition);
                                          
                                       $('#sub_total').html(price_after_addition);
                                       var price_after_addition2=price_after_addition+20;
                                                          $('#total_price').html(price_after_addition2);

                                    }
                              }
                        })
                  });



                  $('.minus').click(function(e){
                        e.preventDefault();
                        var id=$(this).data('id');
                        var qty=$('.input'+id).val();
                        var actual_price=$('#price'+id).val();
                        if(qty>1){
                              $.ajax({
                                    url:"functions/update-minus-cart.php",
                                    method:"POST",
                                    data:{id:id,qty:qty},
                                    success:function(data){
                                          if(data=='0'){
                                                qty= parseInt(qty)-1;
                                                $('.input'+id).val(qty);
                                                totalprice =$('#total').val();
                                       
                                       var price_after_addition=parseInt(totalprice) +-parseInt(actual_price);
                           

                                       $('#total').val(price_after_addition);
                                       $('#sub_total').html(price_after_addition);
                                       var price_after_addition1=price_after_addition+20;price_after_addition1+=20;
                                                          $('#total_price').html(price_after_addition1);

                                          }
                                    }
                              });
                        }
                  })




            });
      </script>
      <script>
        $(document).ready(function(){
            $('#data').hide();
            $('#search').on('keyup',function(e){
                e.preventDefault();
                var val = $('#search').val();
                $.ajax({
                    url:'ajax-live-search.php',
                    method:"post",
                    data:{val:val},
                    success:function(data){
                    
                        if(val==""){
                            $('#data').hide();
                        }else{
                            $('#ajax').html(data);
                        $('#data').show();
                        }
                        
                    }
                })
            } );
           $(document).on("click",".l", function(e){
            e.preventDefault();
            $val=$(this).data('name');
            $('#search').val($val);
            $('#data').hide();
           }) 
        });
    </script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div id="response" class="alert alert-danger">

            </div>
            <div id="response1" class="alert alert-success">

            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary close"  data-dismiss="modal">Close</button>
        <a href="cart.php" class="btn btn-primary">View Cart</a>
      </div>
    </div>
  </div>
</div>