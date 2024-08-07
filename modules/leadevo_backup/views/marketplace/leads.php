<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<style>
    .lead-title {
        font-size: 2rem;
        font-weight: 500;
        color: rgba(0, 0, 0, 0.87);
    }

    .lead-description {
        font-size: 1rem;
        color: rgba(0, 0, 0, 0.87);
        margin-top: 24px;
    }

    .lead_marketplace_video {
        border-radius: 20px;
    }

    .buttons {
        margin-top: 20px;
    }

    .buy_lead_btn,
    .learn_more_btn {
        cursor: pointer;
        font-weight: 500;
        font-size: 0.875rem;
        text-transform: uppercase;
        padding: 6px 16px;
        min-width: 40px;
        border-radius: 20px;
        margin-top: 10px;
    }

    .buy_lead_btn {
        background-color: rgb(255, 203, 3);
        color: rgb(0, 0, 0);
    }

    .learn_more_btn {
        border: 1px solid rgba(255, 203, 3, 0.5);
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
    }

    .learn_more_btn:hover,
    .buy_lead_btn:hover {
        box-shadow: rgba(255, 203, 3, 0.5) 0px 5px 20px;
    }

    .video-card {
        background-color: rgb(240, 240, 241);
        color: rgba(0, 0, 0, 0.87);
        box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px;
        border-radius: 20px;
        padding: 16px;
        display: flex;
        flex-direction: column;
    }

    .video-container {
        position: relative;
    }

    .video-container video {
        width: 100%;
        height: auto;
        border-radius: 20px;
    }

    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(128, 128, 128, 0.5);
        border-radius: 20px;
    }

    .video-container button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px 20px;
        border: none;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        cursor: pointer;
        font-size: 2rem;
    }

    .video-container button:hover {
        background-color: rgba(0, 0, 0, 0.8);
    }

    .filters {
        background-color: rgb(255, 255, 255);
        color: rgba(0, 0, 0, 0.87);
        box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px;
        position: sticky;
        z-index: 1;
        top: 5%;
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 20px;
        padding: 10px 16px 18px;
        margin: 20px 0;

    }

    .filter-group input,
    .filter-group select {
        width: 100%;
        padding: 5px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }


    .fullscreenBtn {
        padding: 5px 10px !important;
        font-size: 1.2rem !important;
     
    }

    .sticky {

        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        align-self: start;
        position: sticky;
        top: 160px;
    }

    .sticky-container {
        display: flex;
        flex-direction: column;
        align-items: flex-end;


    }

    .image-container {
        margin-top: 20px;
    }


    .video-card {
        background-color: rgb(240, 240, 241);
        color: rgba(0, 0, 0, 0.87);
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px;
        border-radius: 20px;
        padding: 6px;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        align-self: start;
        position: sticky;
        top: 160px;
    }

    .lead-card img {
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        border: 1px solid rgba(0, 0, 0, 0.12);
        border-radius: 20px;
        width: 262px;
        height: 152px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .info-buttons {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .info-button {
        font-size: 0.8125rem;
        align-items: center;
        height: 24px;
        border: 1px solid rgb(189, 189, 189);
        background-color: rgb(255, 255, 255);
        color: rgba(0, 0, 0, 0.87);
        display: inline-flex;


        box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px;
        border-radius: 20px;

        padding: 16px;



    }

    .verified {
        color: green;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .details {
        margin: 0 auto;
        padding: 10px;
    }

    #show-more,
    #show-less {
        cursor: pointer;
        text-transform: uppercase;
        color: grey;
    }




    .lead-card-right {
        padding-left: 20px;
        width: 100%;
    }

    .title-favorite-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .lead-card-title {
        font-size: 0.9rem;
        font-weight: 500;
        color: rgba(0, 0, 0, 0.87);
    }

    .favorite-btn {
        background: none;
        border: none;
        cursor: pointer;
        color: rgb(255, 203, 3);
        font-size: 1.5rem;
    }

    .lead-card-description {
        font-size: 0.9rem;
        color: rgba(0, 0, 0, 0.87);
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }

    ol {
        margin-top: 0;
        margin-bottom: 10px;
        list-style: inside !important;
    }

    .lead-description li {
        margin-bottom: 10px;

    }

    .lead-details-container {
        display: none;
        margin-top: 20px;
    }

    .toggle-details-btn {
        margin-top: 10px;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        color: #000;
        cursor: pointer;
        font-weight: 500;
    }

    /* .button-container {
  position: absolute;
  top: 52%;
  left: 72%;
} */

    .button-container {
        display: flex;
        flex-direction: column;
        gap: 10px;
        /* Space between buttons */
        justify-content: center;
        /* Center vertically */
        align-items: flex-end;
        /* Align to the right */
        margin-top: -132px;
        /* Add some margin if needed */
    }



    .lead-description.expanded {
        white-space: normal;
    }

    .save_discount_btn,
    .regular_price_btn {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2px 16px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: 500;
        font-size: 0.875rem;
        margin: 4px;
    }

 /*   .confirm_btn {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 3px 18px;
        border-radius: 20px;
        cursor: pointer;
        font-weight: 500;
        font-size: 0.875rem;
        background-color: rgb(255, 203, 3);
        color: rgb(0, 0, 0);
        border: 1px solid rgba(255, 203, 3, 0.5);
        margin: 4px;
    }
*/
    .save_discount_btn {
        background-color: rgb(255, 203, 3);
        color: rgb(0, 0, 0);
    }

    .regular_price_btn {
        border: 1px solid rgba(255, 203, 3, 0.5);
        color: rgb(0, 0, 0);
        background-color: rgb(255, 255, 255);
    }

 /*   .confirm_btn.disabled {
        background-color: gray;
        cursor: not-allowed;
    }

    .confirm_btn.disabled .bold-text {
        color: black;
    }

    .confirm_btn:hover {
        box-shadow: rgba(255, 203, 3, 0.5) 0px 5px 20px;

    } */

    .save_discount_btn:hover,
    .regular_price_btn:hover {
        box-shadow: rgba(255, 203, 3, 0.5) 0px 5px 20px;
    }

    .button-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .text-container {
        display: flex;
        flex-direction: column;
        margin-left: 10px;
    }

    .bold-text {
        font-weight: bold;
    }

    .small-text {
        font-size: 0.75rem;
        margin-top: 2px;
    }

   .video-card {
        background-color: rgb(240, 240, 241);
        color: rgba(0, 0, 0, 0.87);
        transition: box-shadow 300ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px;
        border-radius: 20px;
        padding: 6px;
        display: flex;
        flex-direction: column;
        flex-shrink: 0;
        align-self: start;
        position: sticky;
        top: 160px;
    }


 /* Modal background */
 .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4); 
        }

        /* Modal content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 60%; 
            max-width: 600px; 
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            border-radius: 10px; 
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Style for the upload button */
        #uploadButton {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #1D4ED8;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #uploadButton:disabled {
            background-color: grey;
            cursor: not-allowed;
        }

</style>
<div id="wrapper">
    <div class="content">
        <div class="row main_row">
            <div class="col-md-12">
                <div class="panel_s">
                    <div class="panel-body">
                        <!-- Marketplace Results Section -->
                        <div class="row">
                            <div class="col-md-6">
                                <p class="lead-title">
                                    <?php echo _l("Meet Industry's Most Advanced Real Estate Lead Marketplace"); ?>
                                </p>
                                <p class="lead-description">Buy and sell real-time, high-intent, geo-targeted real
                                    estate leads through the industry's largest and most advanced lead marketplace in
                                    the US!</p>
                                <button class="btn buy_lead_btn"><?php echo _l('Buy Lead'); ?></button>
                                <button class="btn learn_more_btn"><?php echo _l('Learn More'); ?></button>
                            </div>
                            <div class="col-md-6 text-right">
                                <div class="video-container">
                                    <video id="marketplaceVideo" class="lead_marketplace_video"
                                        src="<?php echo base_url('/modules/leadevo/assets/videos/reb_dashboard_lead_marketplace.mp4'); ?>"></video>
                                    <div class="video-overlay"></div>
                                    <button id="fullscreenBtn" onClick="enterFullscreen()"><i
                                            class="fa fa-play"></i></button>
                                </div>
                            </div>
                        </div>

                        <!-- Filters Section -->
                        <div class="filters">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="filter-group">
                                        <label for="industry"><?php echo _l('Industry'); ?></label>
                                        <select id="industry" name="industry" class="filter-input">
                                            <option value="" disabled selected></option>
                                            <option value="real_estate">Real Estate</option>
                                            <option value="mortgage">Mortgage</option>
                                            <option value="insurance">Insurance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="filter-group">
                                        <label for="price_range"><?php echo _l('Price Range'); ?></label>
                                        <input type="text" id="price_range" name="price_range" class="filter-input">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="filter-group">
                                        <label for="location"><?php echo _l('Location'); ?></label>
                                        <input type="text" id="location" name="location" class="filter-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Prospects Table Section -->
                        </ol>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered dt-table nowrap" style="width:100%">
                        <thead>
                            <tr>
                                <th><?php echo _l('Metadata'); ?></th>
                                <th><?php echo _l('Lead'); ?></th>
                                <th><?php echo _l('Contact'); ?></th>
                                <th><?php echo _l('Lead Type'); ?></th>
                                <th><?php echo _l('Actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prospects as $prospect): ?>
                                <tr>
                                    <td>
                                        <div>
                                            <strong><?php echo _l('Prospect ID'); ?>:</strong>
                                            <?php echo isset($prospect['id']) ? $prospect['id'] : 'N/A'; ?><br>
                                            <strong><?php echo _l('Generated date'); ?>:</strong>
                                            <?php echo 'N/A'; /* Replace with actual value if needed */ ?><br>
                                            <strong><?php echo _l('Industry'); ?>:</strong>
                                            <?php echo isset($prospect['industry']) ? htmlspecialchars($prospect['industry']) : 'Unknown'; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <strong>Full name:</strong>
                                            <?php echo isset($prospect['prospect_name']) ? htmlspecialchars($prospect['prospect_name']) : 'N/A'; ?><br>
                                            <strong><?php echo _l('Zip code'); ?>:</strong>
                                            <?php echo isset($prospect['zip_code']) ? htmlspecialchars($prospect['zip_code']) : 'N/A'; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <strong>Phone:</strong>
                                        <?php echo isset($prospect['phone']) ? htmlspecialchars($prospect['phone']) : 'N/A'; ?><br>
                                        <strong>Email:</strong>
                                        <?php echo isset($prospect['email']) ? htmlspecialchars($prospect['email']) : 'N/A'; ?>
                                    </td>
                                    <td>
                                        <div>
                                            <strong><?php echo _l('Source'); ?>:</strong>
                                            <?php echo isset($prospect['source']) ? htmlspecialchars($prospect['source']) : 'N/A'; ?><br>
                                            <strong><?php echo _l('Deal'); ?>:</strong>
                                            <?php echo isset($prospect['deal']) ? htmlspecialchars($prospect['deal']) : 'N/A'; ?><br>
                                            <strong><?php echo _l('Quality'); ?>:</strong>
                                            <?php echo isset($prospect['quality']) ? htmlspecialchars($prospect['quality']) : 'N/A'; ?>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-primary">Add to Cart</button>
                                        <input type="checkbox"
                                            id="select<?php echo isset($prospect['id']) ? $prospect['id'] : ''; ?>" />
                                        <label
                                            for="select<?php echo isset($prospect['id']) ? $prospect['id'] : ''; ?>">Select</label>
                                    </td>
                                </tr>  

                                <!-- Modal -->
<div id="uploadModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Upload MP3 File</h2>
        <input type="file" id="mp3Input" accept=".mp3" />
        <button id="uploadButton" disabled>Upload</button>
    </div>
</div>
                              
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
</div>

<script>

document.addEventListener('DOMContentLoaded', (event) => {
    
    var modal = document.getElementById("uploadModal");
    var addToCartButtons = document.querySelectorAll(".btn-primary");
    var span = document.getElementsByClassName("close")[0];
    var uploadButton = document.getElementById("uploadButton");

    // Get the mp3 input
    var mp3Input = document.getElementById("mp3Input");

    // open the modal 
    addToCartButtons.forEach(function(button) {
        button.onclick = function() {
            modal.style.display = "block";
        };
    });

    //  close the modal
    span.onclick = function() {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };

    //upload button disabled unless mp3 file is selected
    mp3Input.addEventListener('change', function() {
        var file = mp3Input.files[0];
        if (file && file.type === 'audio/mpeg') {
            uploadButton.disabled = false;
        } else {
            uploadButton.disabled = true;
            alert("Please select a valid MP3 file.");
        }
    });

    // Handle the upload button click event
    uploadButton.onclick = function() {
        var file = mp3Input.files[0];
        if (file && file.type === 'audio/mpeg') {

            // Handle the file upload process here
            alert("MP3 file uploaded successfully!");
            modal.style.display = "none";
        } else {
            alert("Please select a valid MP3 file.");
        }
    };
});


</script>
<?php init_tail(); ?>
<script>
    function enterFullscreen() {
        var video = document.getElementById('marketplaceVideo');
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.mozRequestFullScreen) { /* Firefox */
            video.mozRequestFullScreen();
        } else if (video.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) { /* IE/Edge */
            video.msRequestFullscreen();
        }
    }

    function showLessDetails(button) {
        var details = button.closest('.details');
        var showMoreContent = details.querySelector('#show-more-content');
        var showMoreButton = details.querySelector('#show-more');

        showMoreContent.style.display = 'none';  // Hide additional details
        button.style.display = 'none';  // Hide "Show Less" button
        showMoreButton.style.display = 'inline';  // Show "Show More" button
    }


</script>
