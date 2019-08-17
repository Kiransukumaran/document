<body style="background: lightblue">
    <div class="w3-bar w3-large w3-theme-d4">
        <div class="w3-container">
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-black w3-bar-item w3-button"><i class="fa fa-bars"></i></button><span
                    class="w3-bar-item">Upload</span>
                <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top: 2.5%;">
                    <a href="<?php echo base_url(); ?>" class="w3-bar-item w3-button">Dashboard</a>
                    <a href="<?php echo base_url(); ?>upload" class="w3-bar-item w3-button">Upload</a>
                    <a href="<?php echo base_url(); ?>user" class="w3-bar-item w3-button">User Management</a>
                    <a href="<?php echo base_url(); ?>logout" class="w3-bar-item w3-button">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container">
        <p>Admin Dashboard</p>
    </div>

    <div class="w3-container">
        <div class="w3-card-4">
            <div class="w3-container w3-brown">
                <h2>Upload File</h2>
            </div>
            <?php echo $error; ?>

            <div class="w3-container">
                <?php echo form_open_multipart('path');?>
                <p>
                    <label class="w3-text-brown"><b>Name</b></label>
                    <input class="w3-input w3-border w3-sand" name="name" type="text"></p>
                <p>
                    <label class="w3-text-brown"><b>Description</b></label>
                    <input class="w3-input w3-border w3-sand" name="description" type="text"></p>
                <p>
                    <label class="w3-text-brown"><b>Upload File</b></label>
                    <input class="w3-input w3-border w3-sand" name="upload" type="file"></p>
                <p>
                    <button class="w3-btn w3-brown" type="submit">Submit</button></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>