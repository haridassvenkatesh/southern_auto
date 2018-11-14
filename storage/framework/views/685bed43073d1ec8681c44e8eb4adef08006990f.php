<div class="auditor_footer">
    <footer class="mojFooter">

        <div class="container">
            <div class="row" style="margin-top: 7px;">
                <p> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &copy; Copyright San Innovations Lab. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Built Version : 3.0.0</p>
            </div>
            <?php /* <div class="bottom-footer">
                        <div class="col-md-12"> 
                            <ul class="footer-nav">
                                <li> <a href="https://www.facebook.com/"> Facebook </a> </li>
                                <li> <a href="https://twitter.com/"> Twitter </a> </li>
                                <li> <a href="https://plus.google.com/"> Google+ </a> </li>
                            </ul>
                        </div>
                    </div> */ ?>
        </div>

    </footer>


    <?php /* <footer>
       <p>&copy; San Innovations Lab 2017</p> 
    </footer> */ ?>

    <script>
        $(document).ready(function() {
            $('.navbar .dropdown').hover(function() {
                $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
            }, function() {
                $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
            });
        });

        $(document).ready(function() {
            //$('.paginate_button').click(function() {
            //$('.selected').removeClass('selected')
            $('.paginate_button').addClass("btn btn-sm");
            //});
        });

    </script>

</div>

<div id="modal_ajax" class="modal fade custom-content" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 id="myModalLabel" class="modal-title"></h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
