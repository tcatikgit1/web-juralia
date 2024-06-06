
<div id="cd-cookies-banner" class="cd-cookies-banner" style="display: none">
    <p>Juralia uses cookies for its advertisement solutions and for analytics. We hope you're ok with this, but you can opt-out if you wish.
        Read our <a href="/privacidad">Privacy Policy</a> and
        <a href="/cookies">Cookie Policy</a>.
    </p>
    <button class="cd-opt-in-btn" onclick="acceptCookies()">OK</button>
</div>
<script>
    (function (){
        if(localStorage.getItem('accept-cookies')==='true'){
            document.getElementById('cd-cookies-banner').style.display='none';
        }else{
            document.getElementById('cd-cookies-banner').style.display='block';
        }
    })()
    function acceptCookies(){
        document.getElementById('cd-cookies-banner').style.display='none';
        localStorage.setItem('accept-cookies',true);
        $('.cd-cookies-banner').css("display", "none");
    }
</script>
