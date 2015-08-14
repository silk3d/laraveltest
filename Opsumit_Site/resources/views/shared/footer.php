
<div id="popup_main_menu">&nbsp;
    <div id="popup_sitemap">
        <div class="close_btn">&nbsp;</div>
        <div id="sitemap_links_wrapper">
            <div id="sitemap_col_1">
                <h1 id="seraphin_study_link" class="sitemap_header">SERAPHIN Study</h1>
                <ul class="sitemap_links">
                    <li>Study Design Overview</li>
                    <li>Baseline Characteristics</li>
                </ul><br/>

                <h1 id="efficacy_link" class="sitemap_header">Efficacy</h1>
                <ul class="sitemap_links">
                    <li>Primary Endpoint: Delay in Disease Progression</li>
                    <li>Primary Endpoint: Monotherapy /Combination Therapy</li>
                    <li>Secondary Endpoint: PAH-related Hospitalizations</li>
                    <li>Secondary & Exploratory Endpoints</li>
                </ul><br/>

                <h1 id="safety_profile_link" class="sitemap_header">SAFETY PROFILE</h1>
                <ul class="sitemap_links">
                    <li>Important Safety Information</li>
                    <li>Adverse Reactions</li>
                </ul><br/>
            </div>
            <div id="sitemap_col_2">
                <h1 id="about_link" class="sitemap_header">About OPSUMIT</h1>
                <ul class="sitemap_links">
                    <li>Mechanism of Action</li>
                </ul><br/>
                <h1 id="prescribing_opsumit_link" class="sitemap_header">Prescribing OPSUMIT</h1>
                <ul class="sitemap_links">
                    <li>Dosing and Administration</li>
                    <li>OPSUMIT REMS Program</li>
                    <li>OPSUMIT Voucher Program</li>
                </ul><br/>

                <h1 id="services_and_support_link" class="sitemap_header">Services and Support</h1>
                <ul class="sitemap_links">
                    <li>Actelion Pathways®</li>
                    <li>OPSUMIT P.L.U.S™</li>
                    <li>OPSUMIT REMS Program</li>
                </ul><br/>
            </div>


            <div id="sitemap_col_3">

                <h1 id="pah_resources_link" class="sitemap_header">PAH Resources</h1>
                <span>Disease Education</span>
                <ul class="sitemap_links">
                    <li>&nbsp;- What is PAH?</li>
                    <li>- Disease Progression in PAH</li>
                    <li>- Diagnosing is PAH</li>
                    <li>- Classification in PAH</li>
                    <li>- Signs & Symptoms of PAH</li>
                </ul><br/>
                <span>Expert Recommendations</span>

            </div>
        </div>
    </div>
</div>



<script>

    /*
     Route::get('/', 'PagesController@home');
     Route::get('/home', 'PagesController@home');
     Route::get('/seraphin_study', 'PagesController@seraphin_study');
     Route::get('/efficacy', 'PagesController@efficacy');
     Route::get('/safety_profile', 'PagesController@safety_profile');
     Route::get('/about', 'PagesController@about');
     Route::get('/prescribing', 'PagesController@prescribing_opsumit');
     Route::get('/services', 'PagesController@services_and_support');
     Route::get('/resources', 'PagesController@pah_resources');
     */

    console.log("document is ready")
    $(document).ready(function(){
        $("#efficacy_link").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/efficacy";
        });

        $("#seraphin_study_link").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/seraphin_study";
        });

        $("#safety_profile_link").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/safety_profile";
        });

        $("#about_link").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/about";
        });

        $("#prescribing_opsumit_link").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/prescribing";
        });

        $("#services_and_support_link").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/services";
        });

        $("#pah_resources_link").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/resources";
        });


        $("#logo_img").bind("touchstart click", function(e) {
            e.stopPropagation();
            e.preventDefault();
            window.location.href = "/home";
        });
    });



</script>