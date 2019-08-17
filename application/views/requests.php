

<body style="background: lightblue">
    <div class="w3-bar w3-large w3-theme-d4">
        <div class="w3-container">
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-black w3-bar-item w3-button"><i class="fa fa-bars"></i></button><span class="w3-bar-item">Requests</span>
                <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top: 2.5%;">
                    <a href="<?php echo base_url(); ?>" class="w3-bar-item w3-button">Dashboard</a>
                    <a href="#" class="w3-bar-item w3-button">Upload</a>
                    <a href="#" class="w3-bar-item w3-button">Requests</a>
                    <a href="#" class="w3-bar-item w3-button">User Management</a>
                    <a href="<?php echo base_url(); ?>logout" class="w3-bar-item w3-button">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container">
  <h2>Requests</h2>

  <div class="w3-card-4 w3-dark-grey" style="width:50%">

    <div class="w3-container w3-center">
      <h3>File Request</h3>
      <p>Request for example file</p>
      <h5>Name of the requestee</h5>

      <div class="w3-section">
        <button class="w3-button w3-green">Accept</button>
        <button class="w3-button w3-red">Decline</button>
      </div>
    </div>

  </div>
</div>

    
</body>

</html>

