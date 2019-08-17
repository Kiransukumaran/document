<body>
    <div class="w3-bar w3-large w3-theme-d4">
        <div class="w3-container">
            <div class="w3-dropdown-hover">
                <button class="w3-button w3-black w3-bar-item w3-button"><i class="fa fa-bars"></i></button><span
                    class="w3-bar-item">User Management</span>
                <div class="w3-dropdown-content w3-bar-block w3-border" style="margin-top: 2.5%;">
                    <a href="<?php echo base_url(); ?>" class="w3-bar-item w3-button">Dashboard</a>
                    <a href="<?php echo base_url(); ?>upload" class="w3-bar-item w3-button">Upload</a>
                    <a href="<?php echo base_url(); ?>user" class="w3-bar-item w3-button">User Management</a>
                    <a href="<?php echo base_url(); ?>logout" class="w3-bar-item w3-button">Logout</a>
                </div>
            </div>
        </div>


    </div>
    <h1>Admin Home</h1>
    </div>
    <div class="w3-container">
        <div class="w3-card-4">
            <div class="w3-container w3-brown">
                <h2>Add User</h2>
            </div>
            <?php if( $this->session->flashdata( 'msg-true' ) ){
              echo $this->session->flashdata( 'msg-true' );
            } else {
              echo $this->session->flashdata( 'msg-false' );
            } ?>

            <div class="w3-container">
                <form method="POST" action="<?php echo base_url(); ?>addUser">
                    <p>
                        <label class="w3-text-brown"><b>Name</b></label>
                        <input class="w3-input w3-border w3-sand" name="name" type="text"></p>
                    <p>
                        <label class="w3-text-brown"><b>Username</b></label>
                        <input class="w3-input w3-border w3-sand" name="user" type="text" autocomplete="off"></p>
                    <p>
                        <label class="w3-text-brown"><b>Password</b></label>
                        <input class="w3-input w3-border w3-sand" name="password" type="password" autocomplete="off"
                            value="">
                    </p>
                    <p>
                        <label class="w3-text-brown"><b>Email</b></label>
                        <input class="w3-input w3-border w3-sand" name="email" type="email" autocomplete="off"></p>
                    <p>
                        <label class="w3-text-brown"><b>Emp Id</b></label>
                        <input class="w3-input w3-border w3-sand" name="empid" type="text"></p>

                    <label class="w3-text-brown"><b>Role</b></label>
                    <input name="role" type="radio" value="admin">Admin
                    <input name="role" type="radio" value="employee">Employee
                    <p>
                        <button class="w3-btn w3-brown" type="submit">Submit</button></p>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="w3-container">
        <div class="col-xs-2"></div>
        <div class="w3-responsive col-xs-8">
            <table class="w3-table-all">
                <thead>
                    <tr>
                        <th>Slno</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Empid</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key) { ?>
                    <tr>
                        <td>
                            <?php echo $key->slno; ?>
                        </td>
                        <td>
                            <?php echo $key->Name; ?>
                        </td>
                        <td>
                            <?php echo $key->username; ?>
                        </td>
                        <td>
                            <?php echo $key->role; ?>
                        </td>
                        <td>
                            <?php echo $key->email; ?>
                        </td>
                        <td>
                            <?php echo $key->empid; ?>
                        </td>
                        <td>
                            <?php if( $key->status == 1 ){ ?>
                            <a class="btn btn-info"
                                href="<?php echo base_url(); ?>status/2/<?php echo $key->user_id; ?>">Suspend</a>
                            <?php } else { ?>
                            <a class="btn btn-primary"
                                href="<?php echo base_url(); ?>status/1/<?php echo $key->user_id; ?>">Activate</a>
                            <?php } ?>
                            <a class="btn btn-danger"
                                href="<?php echo base_url(); ?>delete/<?php echo $key->user_id; ?>">Delete</a>
                        </td>
                        <?php } ?>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>
</body>

</html>