<body style="background: lightblue">
    <div class="w3-bar w3-large w3-theme-d4">
        <div class="w3-container">
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-black w3-bar-item w3-button"><i class="fa fa-bars"></i></button><span class="w3-bar-item">Dashboard</span>
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
        <div class="col-xs-2"></div>
        <div class="w3-responsive col-xs-8">
            <table class="w3-table-all">
                <thead>
                    <tr>
                        <th>Slno</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>View/Download/Edit/Delete</th>
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
                        	<button onclick="getEditWindow( <?php echo $key['slno']; ?> )" class="button"><i class="fa fa-edit"></i></button>

                        	<a href="<?php base_url(); ?>delete/<?php echo $key['slno']; ?>" class="button"><i class="fa fa-trash" ></i></a>
                        </td>
                        
                                    <?php } else { ?>
                                        <td><a href="<?php echo $key['path']; ?>" class="button" download><i class="fa fa-download" ></i></a>
                                            <button onclick="getEditWindow( <?php echo $key['slno']; ?>)" class="button"><i class="fa fa-edit"></i></button>
                                            <a href="<?php base_url(); ?>delete/<?php echo $key['slno']; ?>" class="button"><i class="fa fa-trash" ></i></a></td>
                                        <?php } ?>
                        </tr>
                        <?php } ?>
                </tbody>

            </table>
        </div>
        <div class="col-xs-2"></div>
        <div id="id01" class="w3-modal">
                                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

                                    <div class="w3-center">
                                        <br>
                                        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
                                    </div>

                                    <form class="w3-container" method="POST" id="fileForm">
                                        <div class="w3-section">
                                            <label><b>Name</b></label>
                                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="name" name="name">
                                            <label><b>Description</b></label>
                                            <input class="w3-input w3-border" type="text" placeholder="Description" name="description">
                                            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

    </div>
    <script type="text/javascript">
        function getEditWindow(id) {

            document.getElementById('id01').style.display = 'block';
            localStorage.setItem( 'id' , id )
            document.querySelector( "#fileForm" ).setAttribute( "action" , "<?php echo base_url(); ?>edit/"+id);


        }
    </script>
</body>

</html>

