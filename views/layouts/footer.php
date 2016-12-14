    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row"> 
                <div class="col-md-3">
                </div>
                <div class="col-md-5">            
                    <h4 style="text-align: center;"><a href="https://vk.com/id174061934">Татьяна Кузнецова &copy; 2016 г.</a></h4>
                </div>
                <div class="col-md-4">
                </div>
            </div>
        </div>
    </div>
</footer><!--/Footer-->


<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>