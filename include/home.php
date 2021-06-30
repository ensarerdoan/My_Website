<div class="container">
        <div class="skw-pages">
            <div class="skw-page skw-page-1 active">
              <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                  <div class="skw-page__content"></div>
                </div>
              </div>
              <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                  <div class="skw-page__content">
                    <h2 class="skw-page__heading">ENS | TECH</h2>
                    <p class="skw-page__description">HOŞGELDİNİZ</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="skw-page skw-page-2">
              <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                  <div class="skw-page__content">
                    <h2 class="skw-page__heading">PROJECT</h2>
                    <p class="skw-page__description"></p>
                    <a href="project.html" id="btnMore">daha</a>
                  </div>
                </div>
              </div>
              <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                  <div class="skw-page__content"></div>
                </div>
              </div>
            </div>
            <div class="skw-page skw-page-3">
              <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                  <div class="skw-page__content"></div>
                </div>
              </div>
              <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                  <div class="skw-page__content">
                    <h2 class="skw-page__heading">HAKKIMDA</h2>
                    <p class="skw-page__description">1996 yılında İstanbulda doğdum. Beykent Üniversitesi Bilgisayar Mühendisliği bölümünden mezun oldum.</p>
                    <a href="hakkimda.html" id="btnMore">daha</a>
                  </div>
                </div>
              </div>
            </div><!--
            <div class="skw-page skw-page-4">
              <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                  <div class="skw-page__content">
                    <h2 class="skw-page__heading">Page 4</h2>
                    <p class="skw-page__description">Ok, ok, just one more scroll!</p>
                  </div>
                </div>
              </div>
              <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                  <div class="skw-page__content"></div>
                </div>
              </div>
            </div>
            <div class="skw-page skw-page-5">
              <div class="skw-page__half skw-page__half--left">
                <div class="skw-page__skewed">
                  <div class="skw-page__content"></div>
                </div>
              </div>
              <div class="skw-page__half skw-page__half--right">
                <div class="skw-page__skewed">
                  <div class="skw-page__content">
                    <h2 class="skw-page__heading">Epic finale</h2>
                    <p class="skw-page__description">
                      Feel free to check 
                      <a class="skw-page__link" href="https://codepen.io/suez/pens/public/" target="_blank">my other pens</a> and follow me on 
                      <a class="skw-page__link" href="https://twitter.com/NikolayTalanov" target="_blank">Twitter</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>-->
          </div>
    </div>

    
    

    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {

		  var curPage = 1;
		  var numOfPages = $(".skw-page").length;
		  var animTime = 1000;
		  var scrolling = false;
		  var pgPrefix = ".skw-page-";

		  function pagination() {
		    scrolling = true;

		    $(pgPrefix + curPage).removeClass("inactive").addClass("active");
		    $(pgPrefix + (curPage - 1)).addClass("inactive");
		    $(pgPrefix + (curPage + 1)).removeClass("active");

		    setTimeout(function() {
		      scrolling = false;
		    }, animTime);
		  };

		  function navigateUp() {
		    if (curPage === 1) return;
		    curPage--;
		    pagination();
		  };

		  function navigateDown() {
		    if (curPage === numOfPages) return;
		    curPage++;
		    pagination();
		  };

		  $(document).on("mousewheel DOMMouseScroll", function(e) {
		    if (scrolling) return;
		    if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0) {
		      navigateUp();
		    } else { 
		      navigateDown();
		    }
		  });

		  $(document).on("keydown", function(e) {
		    if (scrolling) return;
		    if (e.which === 38) {
		      navigateUp();
		    } else if (e.which === 40) {
		      navigateDown();
		    }
		  });

		});
	</script>