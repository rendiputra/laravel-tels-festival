@section('css')

<style type="text/css" media="screen">
	#loading{
	    position: fixed;
	    width: 100%;
	    height: 100vh;
	    background-color: #fff;
	    z-index: 9999;
	}
	.loading{
	    position: absolute;
	    top: 50%;
	    left: 50%;
	    transform: translate(-50%,-50%);
	    height: 40px;
	    display: flex;
	    align-items: center;
	}
	.obj{
	  width: 6px;
	  height: 40px;
	  background: #157EFF;
	  margin: 0 3px;
	  border-radius: 10px;
	  animation: loading 0.8s infinite;
	  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.07);
	}
	.obj:nth-child(2){
	  animation-delay: 0.1s;
	}
	.obj:nth-child(3){
	  animation-delay: 0.2s;
	}
	.obj:nth-child(4){
	  animation-delay: 0.3s;
	}
	.obj:nth-child(5){
	  animation-delay: 0.4s;
	}
	.obj:nth-child(6){
	  animation-delay: 0.5s;
	}
	.obj:nth-child(7){
	  animation-delay: 0.6s;
	}
	.obj:nth-child(8){
	  animation-delay: 0.7s;
	}


	@keyframes loading {
	  0%{
	    height: 0;
	  }
	  50%{
	    height: 40px;
	  }
	  100%{
	    height: 0;
	  }
	}
</style>
@endsection


@section('obj')
<section id="loading">
    <div class="loading">
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
      <div class="obj"></div>
    </div>
</section>
@endsection



@section('js')
<script>
    //var preloader = document.getElementById('loading');

    $(window).on('load', function(){
        document.getElementById("loading").style.display = 'none';
        $(".item-logo").addClass('animated zoomInDown');
        $(".header-content").addClass('animated slideInUp');
        $(".item-header").addClass('animated fadeInLeft');
    });

    // function myFunction(){
    //     preloader.style.display = 'none';
    // }
</script>
@endsection
