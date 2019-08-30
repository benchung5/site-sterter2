<?php 
use Config\Config as Config;

// $this->insert('header', $view_data );
$this->insert('featured', $view_data );
?>

<script>
// must put this above the html to redirect before rendering if needed
(function() {
    // //check if item is in local storage
    // if (localStorage.getItem('token')) {
    //     var token = localStorage.getItem('token');

    //     if (window.XMLHttpRequest) { xhttp = new XMLHttpRequest(); }
    //     else { xhttp = new ActiveXObject("Microsoft.XMLHTTP"); }
        
    //     //listen for response
    //     xhttp.onreadystatechange = function() {
    //         if(xhttp.readyState == 4 && xhttp.status == 200) {
    //             var resp = null;
    //             try {
    //                 resp = JSON.parse(this.response);
    //             } catch(e) {
    //                 console.log("can't parse response");
    //             }

    //             if(resp.id) {
    //               // show page
    //               //console.log('show page');
    //             } else { 
    //               accessDenied();
    //             }
    //         }
    //     }

    //     //send ajax request
    //     try {
    //         xhttp.open("POST", "<?= Config::paths('ROOT_URL').'api/users/verify' ?>", true);
    //         xhttp.setRequestHeader('Accept', 'application/json, text/plain, */*');
    //         xhttp.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');
    //         xhttp.setRequestHeader('Authorization', 'Bearer '+token);
    //         //turn params into json and send
    //         xhttp.send();
    //     } catch(e) {
    //         console.log(e);
    //     }
    // } else {
    //     accessDenied();
    // }

    // function accessDenied() {
    //     //redirect to access denied pager
    //     var location = window.location.hostname;
    //     window.location.assign('http://'+location+'/access_denied');
    // }       
})();
</script>

<div class="home-page site-wrapper">
    <div class="content-wrapper">
        <section id="how-it-began">
            <div class="row">
                <div class="small-12 columns align-parent">
                    <div class="inner-text" > 
                        <p>
                            <span id="how">How</span> <span id="it">it</span> <span id="all">all</span> <span id="began">began…</span>
                        </p>
                        <p>
                        <span id="body1">On December 24 th , 1983, my children asked me to tell them a bedtime Christmas
                        story; one they had never heard before. I thought for a moment, then began
                        telling them the story about one of Santa&#39;s little elves. After about a minute, they interrupted me and asked me what his name was. Not knowing myself, I wasn’t sure what to tell them, so I ignored it and proceeded to tell them the story, while at the same time, trying to think of a name. Moments later they asked me again what his name was. Well I had to come up with something quick!</span> <span id="body2">I paused and
                        thought for a moment and glanced out the window. I noticed it was beginning to
                        snow, so I responded and said… “Snowflake”. “His name is Snowflake”! They all giggled as they thought it was a cool name. They asked me why his name was
                        Snowflake? Once again, I had to come up with something quick to address their
                        curiosity. I told them that Santa had given him that name because Snowflake
                        collected snowflake’s as a hobby, and he had the world’s largest collection of
                        snowflakes. They just thought that was awesome!</span>
                        </p>
                        <p>
                        <span id="body3">
                        It was that special and magical moment on Christmas Eve so many years ago, that
                        the story of Snowflake’s Christmas was told for the very first time and when the Workshop Elves were born. Over the years the story has been read to tens of thousands of children and has become a Christmas tradition for families in many homes.</span>
                        </p>
                    </div>
                    <div id="keep-scrolling">
                        <div class="inner">keep scrolling<div class="arrow">&darr;</div>         
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="hero">
            test text...
        </section>

        <section>
        <!-- test section begin -->
        <h1>Scroll down</h1>
        </section>

        <section class="sticky">
          <blockquote>"You should totally subscribe to my channel now"<span></span></blockquote>
          <img id="office" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/office1.png">
          <img id="building" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/2621168/sky.jpg">
          <div id="box"></div>
        </section>

        <section>
          <h1>Scroll up</h1>
        </section>
        <!-- test section end -->

    </div><!-- /content wrapper -->

    <?php $this->insert('footer', $view_data ); ?>



</div><!-- /site wrapper -->




