<body style="background: lightblue">
    <div class="w3-bar w3-large w3-theme-d4">
        <div class="w3-container">
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-black w3-bar-item w3-button"><i class="fa fa-bars"></i></button><span class="w3-bar-item">Dashboard</span>
                <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top: 2.5%;">
                    <a href="<?php echo base_url(); ?>logout" class="w3-bar-item w3-button">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="w3-container">
        <p>Document Dashboard</p>
    </div>

    <div class="w3-container">
        <div class="col-xs-2"></div>
        <div class="w3-responsive col-xs-8">
            <table class="w3-table-all">
                <thead>
                    <tr>
                        <th>Slno</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>View/Download</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($fileDetails as $key) { ?>
                        <tr>
                            <td>
                                <?php echo $key["slno"]; ?>
                            </td>
                            <td>
                                <?php echo $key["name"]; ?>
                            </td>
                            <td>
                                <?php echo $key["date"]; ?>
                            </td>
                            <td>
                                <?php echo $key["description"]; ?>
                            </td>
                            <?php if( $key["ext"] == ".jpg" || $key["ext"] == ".jpeg" || $key["ext"] == ".png" ){ ?>
                                <td>
                                    <a href="<?php echo $key['path']; ?>" class="button"><i class="fa fa-eye" ></i></a>
                                    <a href="<?php echo $key['path']; ?>" class="button" download><i class="fa fa-download" ></i></a>
                      
                        </td>
                        
                                    <?php } else { ?>
                                        <td><a href="<?php echo $key['path']; ?>" class="button" download><i class="fa fa-download" ></i></a>
                                            </td>
                                        <?php } ?>
                        </tr>
                        <?php } ?>
                </tbody>

            </table>
        </div>
        <div class="col-xs-2"></div>
        

    </div>
    
</body>

</html>

