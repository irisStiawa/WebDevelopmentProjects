<div id="addlink" class="hidden position-fixed justify-content-center align-items-center">
    <form action="development.php" novalidate id = "formAddLink" class="px-3 pb-5 pt-3 bg-light rounded" method="post" enctype='multipart/form-data'>
        <div class="text-right">
            <i id= "btnCloseAddLink" class="fa fa-times"></i>
        </div>
        <div class="mx-4">      
            <h3>Add new Link</h3>
            <div>         
                <input type="text" class="form-control mt-2 mb-2 " placeholder="Title of link" name="linkTitle" required id="linkTitle"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please choose a Title for Link!</div> 
            </div>
            <div>         
                <input type="text" class="form-control mt-2 mb-2 " placeholder="valid Link" name="link" required id="link"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid Link!</div> 
            </div>
            <div id = "divLinkPicture" class="p-3 rounded">
                <label class = "my-3" id = "labelLinkPicture" for="inputLinkPicture">Choose a Picture for Link!</label>
                <input id="inputLinkPicture" name="inputLinkPicture" type="file" required accept =".jpg, .png, .jpeg">
                <input type="hidden" name="MAX_FILE_SIZE" value="4194304"> <br>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid File!</div> 
            </div>
            <div class="mt-3 text-right">
                <button type="submit" name = "submit" value="addlink" class="btn border-dark mr-0">Add Link</button>
            </div>
        </div> 
    </form>
</div>