
  <?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
  <?php init_head(); ?>
  <style>
 #backBtn {
    background-color: transparent;
    border: none;
    display: flex;
    align-items: center;
  }

  #backBtn i {
    margin-right: 5px;
  }

  .wizard-step {
    display: none;
  }

  .wizard-step.active {
    display: block;
  }

  .wizard-nav {
    display: flex;
    justify-content: space-around;
    margin-bottom: 10px;
  }

  .wizard-circle {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #ddd;
    line-height: 30px;
    text-align: center;
    font-weight: bold;
    cursor: pointer;
  }

  .wizard-circle.active {
    background-color: #007bff;
    color: #fff;
  }

  .wizard-buttons {
    display: flex;
    justify-content: space-between;
  }

  .line {
    height: 2px;
    background-color: #D3D3D3;
    flex-grow: 1;
    margin: 13px;
    position: relative;
    z-index: 0;
  }

  .gridcontainer1 {
    display: flex;
  }

  .grid-container {
    display: flex;
    grid-template-columns: auto auto auto auto;
    gap: 50px;
    margin-top: -2%;
    padding: 1px;
  }

  .grid-container>div {
    font-size: 12px;
  }

  .alt-text5 {
    margin-left: 13%;
  }

  .dropdown {
    position: relative;
    display: inline-block;
    margin-left: 40%;
    margin-top: 3%;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content label {
    display: block;
    padding: 8px 16px;
    cursor: pointer;
  }

  .dropdown-content label:hover {
    background-color: #f1f1f1;
  }

  .dropdown-content input[type="checkbox"] {
    margin-right: 8px;
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .selected-options {
    margin-top: 10px;
    display: flex;
    flex-wrap: wrap;
  }

  .selected-option {
    background-color: #e2e2e2;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 5px 10px;
    margin: 5px;
    display: flex;
    align-items: center;
  }

  .selected-option span {
    margin-left: 10px;
    cursor: pointer;
  }

  h3 {
    text-align: center;
  }

  .form {
    display: flex;
    flex-direction: column;
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
  }

  .form label {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 16px;
    font-family: Arial, sans-serif;
  }

  .form input[type="checkbox"] {
    margin-right: 10px;
    width: 20px;
    height: 20px;
  }

  .form input[type="checkbox"]:hover {
    cursor: pointer;
    border: 1px solid #007bff;
  }

  .form:hover {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  /* Payment Form Styles */
  .payment-form input[type="text"], 
  .payment-form input[type="number"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .payment-form button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .payment-form button[type="submit"]:hover {
    background-color: #0056b3;
  }

  /* Fixed Height for Modal */
  .modal-content {
    max-height: 80vh;
    overflow-y: auto;
  }

  /* Ensure wizard content is visible */
  .wizard-step {
    min-height: 300px; /* Adjust as needed */
  }
 </style>
  <div id="wrapper">
    <div class="content">
      <div class="row main_row">
        <div class="col-md-12">
          <div class="panel_s">
            <div class="panel-body">
              <div class="_buttons">
                <a data-toggle="modal" data-target="#createCampaignModal"
                  class="btn btn-primary pull-left display-block mleft10">
                  <i class="fa-regular fa-plus tw-mr-1"></i>
                  <?php echo _l('New Campaign'); ?>
                </a>
                <div class="clearfix"></div>
              </div>
              <hr class="hr-panel-heading" />

              <?php if (!empty($campaigns)) : ?>
              <table class="table dt-table scroll-responsive">
                <thead>
                  <tr>
                    <th><?php echo _l('Name'); ?></th>
                    <th><?php echo _l('Description'); ?></th>
                    <th><?php echo _l('Active'); ?></th>
                    <th><?php echo _l('Actions'); ?></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($campaigns as $campaign) : ?>
                  <tr>
                    <td><?php echo $campaign->name; ?></td>
                    <td><?php echo $campaign->description; ?></td>
                    <td><?php echo $campaign->is_active ? 'Yes' : 'No'; ?></td>
                    <td>
                      <a href="<?php echo admin_url('leadevo/campaigns/view/' . $campaign->id); ?>"
                        class="btn btn-default btn-icon">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="<?php echo admin_url('leadevo/campaigns/edit/' . $campaign->id); ?>"
                        class="btn btn-default btn-icon">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="<?php echo admin_url('leadevo/campaigns/delete/' . $campaign->id); ?>"
                        class="btn btn-danger btn-icon"
                        onclick="return confirm('Are you sure you want to delete this campaign ?');">
                        <i class="fa fa-remove"></i>
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <?php else : ?>
              <p><?php echo _l('No campaigns found.'); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
   
    

  <div id="createCampaignModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="padding: 20px;">
        <div class="wizard-nav">
          <div class="wizard-circle" data-step="1">1</div>
          <div class="line"></div>
          <div class="wizard-circle" data-step="2">2</div>
          <div class="line"></div>
          <div class="wizard-circle" data-step="3">3</div>
          <div class="line"></div>
          <div class="wizard-circle" data-step="4">4</div>
          <div class="line"></div>
          <div class="wizard-circle" data-step="5">5</div>
          <div class="line"></div>
          <div class="wizard-circle" data-step="6">6</div>
        </div>
        <div class="gridcontainer1">
          <div class="grid-container">
            <div class="alt-text1">Industry</div>
            <div class="alt-text2">Locations</div>
            <div class="alt-text3">Timing</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          <div class="grid-container">
            <div class="alt-text4">Deal</div>
            <div class="alt-text5">Quality</div>
            <div class="alt-text6">Payment</div>
          </div>
        </div>

        <br><br>

        <!-- Industry -->
        <div class="wizard-step" data-step="1">
    <h3>Select your lead type of interest</h3>
    <div class="form-group text-left">
        <label for="industry"><?php echo _l('Industry'); ?></label>
        <select name="industry" class="selectpicker" data-width="100%" data-none-selected-text="<?php echo _l('Select Industry'); ?>">
            <option value=""><?php echo _l('Select Industry'); ?></option>
            <?php foreach ($industries as $industry) : ?>
                <option value="<?php echo $industry['id']; ?>"><?php echo $industry['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>

<!-- Locations -->
<div class="wizard-step" data-step="2">
    <h3>Locations</h3>
    <div class="dropdown">
        <button class="btn btn-secondary">Select states</button>
        <div class="dropdown-content">
            <label><input type="checkbox" value="South Dakota - SD"> South Dakota - SD</label>
            <label><input type="checkbox" value="Virginia - VA"> Virginia - VA</label>
            <label><input type="checkbox" value="Vermont - VT"> Vermont - VT</label>
            <label><input type="checkbox" value="Wyoming - WY"> Wyoming - WY</label>
            <label><input type="checkbox" value="Nebraska - NE"> Nebraska - NE</label>
            <label><input type="checkbox" value="California - CA"> California - CA</label>
        </div>
    </div>
    <div class="selected-options" id="selected-options"></div>
</div>

<!-- Timing -->

<div class="wizard-step" data-step="3">
    <h4>Timing</h4>
    <p>Content for timing.</p>
</div>

<!-- Deals -->
<div class="wizard-step" data-step="4">
    <h4>Deal</h4>
    <div class="radio-container">
        <input type="radio" id="option1" name="options">
        <label for="option1">$75 (buy exclusively)</label>
        <div class="tooltip">
            ⓘ
            <span class="tooltiptext">Defining if he wants to buy exclusively or non-exclusively prospects. (this option will be turntable ON/OFF from the admin)</span>
        </div>
    </div>
    <div class="radio-container">
        <input type="radio" id="option2" name="options">
        <label for="option2">$35 (buy non-exclusively)</label>
        <div class="tooltip">
            ⓘ
            <span class="tooltiptext">Defining if he wants to buy exclusively or non-exclusively prospects. (this option will be turntable ON/OFF from the admin)</span>
        </div>
    </div>
    
</div>

<!-- Quality -->

<div class="wizard-step" data-step="5">
    <h4>Quality</h4>
    <form class="form">
        <label>
            <input type="checkbox" name="verification" value="staff">
            Verified by Staff
        </label><br>
        <label>
            <input type="checkbox" name="verification" value="sms">
            Verified by SMS
        </label><br>
        <label>
            <input type="checkbox" name="verification" value="whatsapp">
            Verified by WhatsApp
        </label><br>
        <label>
            <input type="checkbox" name="verification" value="coherence">
            Verified by Coherence
        </label>
    </form>
</div>


<!-- Payment -->
<div class="wizard-step" data-step="6">
    <h4 align="center">Payment</h4>
    <form id="payment-form" class="payment-form">
        <label for="card-number">Card Number</label>
        <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" required>
        
        <label for="expiry-date">Expiry Date</label>
        <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
        
        <label for="cvv">CVV</label>
        <input type="text" id="cvv" name="cvv" placeholder="123" required>
        
        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount" placeholder="Amount to be debited" required>
        
        <button type="submit" class="btn btn-primary">Submit Payment</button>
    </form>
</div>


       
        <div class="wizard-buttons">
          <button class="btn btn-secondary" id="backBtn"><i class="fas fa-angle-left" style="font-size:19px"></i> Back</button>
          <button class="btn btn-primary" id="nextBtn">Next</button>
        </div>
      </div>
    </div>
  </div></div>
  <?php init_tail(); ?>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      let currentStep = 1;
      const totalSteps = 6;
      const steps = document.querySelectorAll('.wizard-step');
      const circles = document.querySelectorAll('.wizard-circle');
      const backBtn = document.getElementById('backBtn');
      const nextBtn = document.getElementById('nextBtn');

      function showStep(step) {
        steps.forEach((element, index) => {
          element.classList.toggle('active', index === step - 1);
        });
        circles.forEach((element, index) => {
          element.classList.toggle('active', index === step - 1);
        });

        // Hide back button
        backBtn.style.display = step === 1 ? 'none' : 'inline-flex';

        // Show Finish Button at last page
        nextBtn.textContent = step === totalSteps ? 'Finish' : 'Next';
      }

      nextBtn.addEventListener('click', function () {
        if (currentStep < totalSteps) {
          currentStep++;
          showStep(currentStep);
        } else if (currentStep === totalSteps) {
          // Finish button action
          console.log('Wizard finished');
         
        }
      });

      backBtn.addEventListener('click', function () {
        if (currentStep > 1) {
          currentStep--;
          showStep(currentStep);
        }
      });

      circles.forEach((circle) => {
        circle.addEventListener('click', function () {
          const step = parseInt(this.getAttribute('data-step'));
          if (step <= currentStep + 1) { // navigation only to current and previous steps
            currentStep = step;
            showStep(currentStep);
          }
        });
      });

      
      showStep(currentStep);
    });
  </script>
</body>

</html>
<script>
    document.querySelectorAll('.dropdown-content input[type="checkbox"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateSelectedOptions();
        });
    });

    function updateSelectedOptions() {
        const selectedOptionsContainer = document.getElementById('selected-options');
        selectedOptionsContainer.innerHTML = '';

        document.querySelectorAll('.dropdown-content input[type="checkbox"]:checked').forEach(function(selectedCheckbox) {
            const option = document.createElement('div');
            option.className = 'selected-option';
            option.innerText = selectedCheckbox.value;

            const removeSpan = document.createElement('span');
            removeSpan.innerHTML = '&times;';
            removeSpan.addEventListener('click', function() {
                selectedCheckbox.checked = false;
                updateSelectedOptions();
            });

            option.appendChild(removeSpan);
            selectedOptionsContainer.appendChild(option);
        });
    }
</script>

<script>
  
  </script>