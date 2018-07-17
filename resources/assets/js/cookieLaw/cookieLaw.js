/* Cookie functions ================================================================ */

function createCookie(name, value, days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000))
        var expires = "; expires=" + date.toGMTString();
    }
    else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";"); 
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function eraseCookie(name) {
    createCookie(name, "", -1);
}

$(window).ready(function () {  

    var is_mobile = false;

    // Version 1.1

    /* Editable options =================================================================== */

    //Name of cookie
    var cookieName = 'cookieLaw-' + document.domain;
    //Name of cookie dialog
    var cookieDialogName = "cookieLaw-dialog";
    //Timeout of cookie dialog (in seconds)
    var cookieDialogTimeout = 10;
    //Text to display inside dialog box
    //var cookieText = "Our sites use cookies, including third party cookies, to improve your user experience. By browsing this site you consent to our use of cookies.";
    var cookieText = "By using our website you agree to our use of cookies in accordance with our cookie policy.";
    //Cookie timeout -- Redisplay the cookie every x days (or NULL for never re-display again)
    var cookieTimeout = 365; //null;
    //Cookie information link (or NULL for no link)
    var cookieInfoLink = "/infopage/cookies/"; //NULL for no link
    //Text for cookie information link
    var cookieInfoLinkText = "Learn more here.";
    //Text for cookie acceptance button
    var cookieAcceptanceButtonText = "OK"; //NULL for no button

    //Set to true for "testing", false for production
    var testMode = false;

    testMode = true;

    /* Main Code (Do not alter) ========================================================= */
    if (readCookie(cookieName) !== "true" || testMode === true) {

        var renderedCookieLink = "";
        if (cookieInfoLink !== null) { renderedCookieLink = " <a id='cookieInfoLink' href='" + cookieInfoLink + "'>" + cookieInfoLinkText + "</a>" };

        var acceptanceButton = "";
        if (cookieAcceptanceButtonText !== null) { acceptanceButton = " <a id='cookieAcceptanceButton' href='#'><span>" + cookieAcceptanceButtonText + "</span></a>" };

        if (screenSize < 392) {

            $("header").css({ 'margin-top': '76px' });

            // needed if header is fixed 
            $(".page_wrapper").css({ 'margin-top': '0px' });

        }
        else if (screenSize > 701) {

            $("header").css({ 'margin-top': '38px' });

            // needed if header is fixed 
            $(".page_wrapper").css({ 'margin-top': '38px' });

        }

        else {
            $("header").css({ 'margin-top': '38px' });

            // needed if header is fixed 
            $(".page_wrapper").css({ 'margin-top': '38px' });
        }


        $("body").append("<div id='" + cookieDialogName + "'>" + cookieText + acceptanceButton + renderedCookieLink + "</div>").show('slow');


        //Add event to the accept button
        $("#cookieAcceptanceButton").click(function (e) {
            e.preventDefault();
            createCookie(cookieName, "true", cookieTimeout);
            fadeOutCookieBar();
        });

        //Fade out the dialog box (if not in test mode)
        //if(testMode == false){
        /*setTimeout( function(){
            fadeOutCookieBar();
        }, cookieDialogTimeout*1000);*/
        //};

    };

    function fadeOutCookieBar() {
        $("#" + cookieDialogName).slideUp(300, function () {
            $("#" + cookieDialogName).remove();
        });
        $("header").css({ 'margin-top': '0px' });
        //needed if hover is fixed
         $(".page-content").css({ 'margin-top': '0px' });
        /*
        if (is_mobile === false) {

        } else {
            
        }
        */
    }


});

