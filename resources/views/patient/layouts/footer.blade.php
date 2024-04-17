<div id="footer" class="copyright-area wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="footer-text">
                    <p>© {{ date('Y') }} <a id="tw" href="{{ url('') }}" target="_blank">{{ env('APP_NAME') }}</a> , Inc</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="social">
                    <ul class="social-links">
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    #footer{
        position: fixed;
        bottom:0;
    }
</style>