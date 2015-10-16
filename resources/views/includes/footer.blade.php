<footer>
    <div class="ftr_uper">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">About Blood</a></li>
            <li><a href="#">Search</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Faq’s</a></li>

        </ul>
        <div class="clearfix"></div>
    </div><!-- end of ftr_uper -->



    <div class="ftr_scial">
        <b>Let’s socialize :</b>
        <a href="#"><img src="{{asset('public/images/fb.png')}}" class="img-responsive" alt="facebook"/></a>
        <a href="#"><img src="{{asset('public/images/tw.png')}}" class="img-responsive" alt="facebook"/></a>
        <a href="#"><img src="{{asset('public/images/tw.png')}}" class="img-responsive" alt="facebook"/></a>
    </div><!-- end of ftr_uper -->
    <div class="clearfix"></div>

</footer><!-- end of footer -->
</div> <!-- end of container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="{{ URL::asset('public/js/moment.min.js') }}"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::asset('public/js/bootstrap.min.js') }}"></script>

<!-- moment.js and datetime picker -->
<script src="{{ URL::asset('public/js/bootstrap-datetimepicker.js') }}"></script>

<script>

  $(document).ready(function(){
        $('.datepicker').datetimepicker(function(){
          format: 'YYYY-MM-DD'
        });
  });
</script>



</body>
</html>