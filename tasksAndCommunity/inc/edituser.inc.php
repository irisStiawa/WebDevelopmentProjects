<div id="edituser" class="hidden position-fixed justify-content-center align-items-center">
    <form action="profil.php" novalidate id = "formEditUser" class="px-3 pb-5 pt-3 bg-light rounded" method="post">
        <div class="text-right">
            <i id= "closeedituser" class="fa fa-times"></i>
        </div>
        <div class="mx-4">      
            <h3 class="mb-3">Edit Data</h3>
            <div class = "row m-2">         
                <div class= "bold col-6">username</div>
                <div class="col-6"><?php echo $user->username; ?></div> 
            </div>
            <div class = "row m-2">         
                <div class= "bold col-6">gender</div>
                <div class="col-6"><?php echo $user->gender; ?></div> 
            </div>
            <div class = "row m-2">         
                <div class= "bold col-6">firstname</div>
                <div class="col-6"><?php echo $user->firstname; ?></div> 
            </div>
            <div class="row m-2">
                <label class="col-6 bold" for="lastname">lastname</label>
                <input type="text"  placeholder="lastname" value="<?php echo $user->lastname; ?>" class="form-control col-6"  name="lastname" required/>
                <div class="valid-feedback ml-1">Looks good!</div> 
                <div class="invalid-feedback ml-1">Please provide a valid lastname!</div> 
            </div>
            <div class = "row m-2">         
                <div class= "bold col-6">birth</div>
                <div class="col-6"><?php echo $user->birth; ?></div> 
            </div>
            <div class="row m-2">
                <label class="col-6 bold" for="country">country</label>
                <input type="text" placeholder="country" class="form-control col-6"  value="<?php echo $user->country; ?>" name="country" required/>
                <div class="valid-feedback ml-1">Looks good!</div> 
                <div class="invalid-feedback ml-1">Please provide a valid country!</div> 
            </div>
            <div class="row m-2">
                <label class="col-6 bold" for="phone">phone</label>
                <input type="text" class="form-control col-6" placeholder="phone" name="phone" value="<?php echo $user->phone; ?>" required/>
                <div class="valid-feedback ml-1">Looks good!</div> 
                <div class="invalid-feedback ml-1">Please provide a valid phone number!</div> 
            </div>
            <div class="row m-2">
                <label class="col-6 bold" for="email">email</label>
                <input type="text" class="form-control col-6" placeholder="email" name="email" value="<?php echo $user->email; ?>" required/>
                <div class="valid-feedback ml-1">Looks good!</div> 
                <div class="invalid-feedback ml-1">Please provide a valid mailadress!</div> 
            </div>
            <div class="mt-4 text-center">
                <button id="btnChanceData" type="submit" name = "chanceData" class="btn border-dark">Chance Data</button>
            </div>
        </div> 
    </form>
</div>