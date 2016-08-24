<br/>
<a href="#nav_wrap" onclick="displayDiv('nav_wrap',1);displayDiv('options1',1);" style="font-size=14px; font-weight: bold;">附加选项</a>
<div class="nav_wrap" id="nav_wrap" style="display: none">
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li class="active"><a href="#" onclick="showOptions(1);" style="font-size=14px; font-weight: bold;">Basic</a></li>
        <li class=""><a href="javascript:;" onclick="showOptions(2);" style="font-size=14px; font-weight: bold;">Advanced One</a></li>
        <li class=""><a href="javascript:;" onclick="showOptions(3);" style="font-size=14px; font-weight: bold;">Advanced Two</a></li>
        <!--<li class=""><a href="#" onclick="" style="font-size=14px; font-weight: bold;">Advanced Three</a></li>-->
    </ul>
    <a href="#" onclick="displayDiv('nav_wrap',0);showOptions(0)" style="font-size=14px; font-weight: bold;">隐藏选项</a>
</div>
<!--
第一页
-->
<div style="display: none" name="options" id="options1">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <label for="select_method">HTTP Method:</label>
        <select class="form-control" id="select_method" name="method">
            <option value="GET" selected="selected">Default (GET)</option>
            <option value="OPTIONS">OPTIONS</option>
            <option value="HEAD">HEAD</option>
            <option value="POST">POST</option>
            <option value="PUT">PUT</option>
        </select><br/>
    </div>
    <div class="col-md-2">
        <label for="select_method">Flush Existing Session:</label>
        <select class="form-control" id="select_fmethod" name="flushSession">
            <option value="n" selected="selected">No</option>
            <option value="y">Yes</option>
        </select><br/>
    </div>
    <div class="col-md-6">
        <div id="display_post_data_form" align="central">
            <label for="post_data">Request Data String:</label>
            <input type="text" class="form-control" id="post_data" name="data"
                   placeholder="i.e. username=foo&password=bar&submit=Submit">
        </div>
        <br/>
    </div>
    <div class="col-md-1"></div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-1">
            <label for="select_scan_level">Scan Level:</label>
            <select class="form-control" id="select_scan_level" name="level">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3" selected="selected"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
            </select><br />
        </div>
    <div class="col-md-1">
        <label for="select_thread_count">Threads:</label>
        <select class="form-control" id="select_thread_count" name="threads">
            <option value="1" selected="selected"> 1 </option>
            <?php
            foreach(range(2, 10) as $number) {
                echo "                  <option value=\"$number\"> $number </option>";
            }
            ?>
        </select><br />
    </div>
    <div class="col-md-2">
            <label for="select_tamper">Tamper:</label>
            <select class="form-control" id="select_tamper" name="tamper">
                <option value="" selected="selected"> Disabled </option>
                <option value="base64encode"> base64encode </option>
                <option value="charencode"> charencode </option>
                <option value="apostrophemask"> apostrophemask </option>
                <option value="apostrophenullencode"> apostrophenullencode </option>
                <option value="appendnullbyte"> appendnullbyte </option>
                <option value="between"> between </option>
                <option value="bluecoat"> bluecoat </option>
                <option value="chardoubleencode"> chardoubleencode </option>
                <option value="charunicodeencode"> charunicodeencode </option>
                <option value="commalesslimit"> commalesslimit </option>
                <option value="commalessmid"> commalessmid </option>
                <option value="concat2concatws"> concat2concatws </option>
                <option value="equaltolike"> equaltolike </option>
                <option value="escapequotes"> escapequotes </option>
                <option value="greatest"> greatest </option>
                <option value="halfversionedmorekeywords"> halfversionedmorekeywords </option>
                <option value="ifnull2ifisnull"> ifnull2ifisnull </option>
                <option value="informationschemacomment"> 5 </option>
                <option value="__init__"> __init__ </option>
                <option value="lowercase"> lowercase </option>
                <option value="modsecurityversioned"> modsecurityversioned </option>
                <option value="modsecurityzeroversioned"> modsecurityzeroversioned </option>
                <option value="multiplespaces"> multiplespaces </option>
                <option value="nonrecursivereplacement"> nonrecursivereplacement </option>
                <option value="overlongutf8"> overlongutf8 </option>
                <option value="percentage"> percentage </option>
                <option value="randomcase"> randomcase </option>
                <option value="randomcomments"> randomcomments </option>
                <option value="securesphere"> securesphere </option>
                <option value="space2comment"> space2comment </option>
                <option value="space2dash"> space2dash </option>
                <option value="space2hash"> space2hash </option>
                <option value="space2morehash"> space2morehash </option>
                <option value="space2mssqlblank"> space2mssqlblank </option>
                <option value="space2mssqlhash"> space2mssqlhash </option>
                <option value="space2mysqlblank"> space2mysqlblank </option>
                <option value="space2mysqldash"> space2mysqldash </option>
                <option value="space2plus"> space2plus </option>
                <option value="space2randomblank"> space2randomblank </option>
                <option value="sp_password"> sp_password </option>
                <option value="symboliclogical"> symboliclogical </option>
                <option value="unionalltounion"> unionalltounion </option>
                <option value="unmagicquotes"> unmagicquotes </option>
                <option value="uppercase"> uppercase </option>
                <option value="varnish"> varnish </option>
                <option value="versionedkeywords"> versionedkeywords </option>
                <option value="versionedmorekeywords"> versionedmorekeywords </option>
                <option value="xforwardedfor"> xforwardedfor </option>
            </select><br />
    </div>
    <div class="col-md-3">
        <label for="select_proxy_support">HTTP/SOCKS Proxy String to Use:</label>
        <select class="form-control" id="select_proxy_support" name="proxy_support">
            <option value="" selected="selected">Disabled</option>
            <option value="enabled">Enable Proxy</option>
        </select>
    </div>
    <div class="col-md-3">
            <label for="cookie_str">Custom Proxy String to Use:</label>
            <input type="text" class="form-control" id="proxy_str" name="proxy"
                   placeholder="i.e. http://127.0.0.1:8080">
            <br/>
    </div>
    <div class="col-md-3">

    </div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <label for="select_request_delay">Time Delay Between HTTP Requests:</label>
        <select class="form-control" id="select_request_delay" name="delay">
            <option value="0" selected="selected">No Delay</option>
            <option value="1">1s</option>
            <option value="5">5s</option>
            <option value="8">8s</option>
            <option value="10">10s</option>
            <option value="12">12s</option>
            <option value="15">15s</option>
            <option value="20">20s</option>
            <option value="25">25s</option>
            <option value="30">30s</option>
        </select>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <label for="select_user_agent_type">HTTP User-Agent String to Use:</label>
        <select class="form-control" id="select_user_agent_type" name="user_agent_type">
            <option value="sqlmap">Default SQLMAP
                User-Agent
            </option>
            <option value="mobile">Random Mobile Device
                User-Agent
            </option>
            <option value="random" selected="selected">
                Random User-Agent
            </option>
            <option value="custom">Custom User-Agent
            </option>
        </select>
    </div>
    <div class="col-md-3">
        <div id="customUserAgent" align="central" >
            <label for="user_agent">Custom User-Agent String to Use:</label>
            <input type="text" class="form-control" id="user_agent" name="user_agent"
                   placeholder="i.e. sqlmap/1.0-dev-xxxxxxx (http://sqlmap.org)">
            <br/>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="col-md-1"></div>
</div>
</div>
<div name="options" id="options2" style="display: none">
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <label for="select_cookie_support">HTTP Cookie String to Use:</label>
        <select class="form-control" id="select_cookie_support" name="cookie_support">
            <option value="" selected="selected">Disabled</option>
            <option value="enabled">Enable Custom Cookie String</option>
        </select>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <div id="display_cookie_data_form" align="central" >
            <label for="cookie_str">Custom Cookie String to Use:</label>
            <input type="text" class="form-control" id="cookie_str" name="cookie"
                   placeholder="i.e. authenticated=true;">
            <br/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <label for="select_auth_type">HTTP Authentication:</label>
        <select class="form-control" id="select_auth_type" name="auth_type">
            <option value="" selected="selected">Disabled</option>
            <option value="Basic">Basic</option>
            <option value="Digest">Digest</option>
            <option value="NTLM">NTLM</option>
        </select>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <div id="display_auth_data_form" align="central" >
            <label for="auth_username">HTTP Auth Username:</label>
            <input type="text" class="form-control" id="auth_username" name="auth_username" placeholder="i.e. admin">
            <label for="auth_password">HTTP Auth Password:</label>
            <input type="text" class="form-control" id="auth_password" name="auth_password" placeholder="i.e. password">
        </div>
    </div>
    <div class="col-md-1"></div>
</div>


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <label for="select_referer_support">HTTP Referer String to Use:</label>
        <select class="form-control" id="select_referer_support" name="referer_support">
            <option value="" selected="selected">Disabled</option>
            <option value="enabled">Enable Custom Referer String</option>
        </select>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3">
        <div id="display_referer_data_form" align="central" >
            <label for="referer_str">Custom Referer String to Use:</label>
            <input type="text" class="form-control" id="referer_str" name="referer"
                   placeholder="i.e. http://www.google.com?q=something">
            <br/>
        </div>
    </div>
    <div class="col-md-1"></div>
</div>
</div>
<div name="options" id="options3" style="display: none">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <label for="select_request_prefix">Custom Injection Prefix:</label>
            <select class="form-control" id="select_request_prefix" name="request_prefix">
                <option value="" selected="selected" >Disabled
                </option>
                <option value="enabled" >Enabled</option>
            </select>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div id="display_prefix_data_form" align="central" >
                <label for="request_prefix_str">Custom Injection Prefix String to Use:</label>
                <input type="text" class="form-control" id="request_prefix_str" name="prefix" placeholder="i.e. ') ">
                <br/>
            </div>
        </div>
        </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <label for="select_request_suffix">Custom Injection Suffix:</label>
            <select class="form-control" id="select_request_suffix" name="request_suffix">
                <option value="" selected="selected" >Disabled
                </option>
                <option value="enabled" >Enabled</option>
            </select>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div id="display_suffix_data_form" align="central" >
                <label for="request_suffix_str">Custom Injection Suffix String to Use:</label>
                <input type="text" class="form-control" id="request_suffix_str" name="suffix"
                       placeholder="i.e. AND ('abc'='abc ">
                <br/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <label for="select_request_header">Custom HTTP Headers:</label>
            <select class="form-control" id="select_request_header" name="request_header">
                <option value="" selected="selected" >Disabled
                </option>
                <option value="enabled" >Enabled</option>
            </select>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-3">
            <div id="display_header" align="central" >
                <label for="request_header">Custom HTTP Headers String to Use:</label>
                <input type="text" class="form-control" id="request_header_str" name="headers"
                       placeholder="x-forwarded-for:8.8.8.8 ">
                <br/>
            </div>
        </div>
    </div>

</div>

<!--
一行demo
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4"></div>
    <div class="col-md-3">

        <div class="col-md-1"></div>
    </div>
</div>
-->

<br/><br/>
<hr>

<script>
    function displayDiv(divName, display) {
        if (display == 1) {
            document.getElementById(divName).style.display = "block";
        }
        else {
            document.getElementById(divName).style.display = "none";
        }
    }
    function showOptions(option) {
        displayDiv('options1',0);
        displayDiv('options2',0);
        displayDiv('options3',0);
        var option = "options"+option;
        displayDiv(option,1);
    }

</script>