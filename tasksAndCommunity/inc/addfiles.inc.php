<div id="addfiles" class="hidden position-fixed justify-content-center align-items-center">
    <form action="development.php" novalidate id = "formAddFiles" class="px-3 pb-5 pt-3 bg-light rounded" method="post" enctype='multipart/form-data'>
        <div class="text-right">
            <i id= "btnCloseAddFiles" class="fa fa-times"></i>
        </div>
        <div class="mx-4">      
            <h3>Add new File</h3>
            <div id="toCommunity" class="d-flex my-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="toCommunity" required id="public" value="1"/>
                    <label class="form-check-label" for="high">public</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="toCommunity" required id="private" value="0"/>
                    <label class="form-check-label" for="medium">private</label>
                </div>
            </div>
            <div>         
                <input type="text" class="form-control my-2 " placeholder="Filename" name="filename" required id="filename"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid filename!</div> 
            </div>
            <select class="form-select form-select-lg w-100 mb-2 rounded"  name = 'category' aria-label="Default select example">
                <option value = "all" selected>All</option>
                <option value="html">Html</option>
                <option value="css">Css</option>
                <option value="js">Javascript</option>
                <option value="php">Php</option>
                <option value="python">Python</option>
                <option value="java">Java</option>
                <option value="frames">Frameworks</option>
                <option value="notes">Notes</option>
                <option value="other">Other</option>
            </select>
            <div id = "divNewFile" class="p-3 rounded">
                <label class = "my-3" id = "labelFileUpload" for="inputFileUpload">Click here and select your file!</label>
                <input id="inputFileUpload" name="inputFileUpload" type="file" required placeholder="Select your file!" accept =".pdf, .doc, .docx, .htm, .html, .css, .php, .js, .ppt, .pptx, .xls, .xlsx, .zip">
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please provide a valid File!</div> 
                <input type="hidden" name="MAX_FILE_SIZE" value="4194304"> 
            </div>
            <div class="mt-3 text-right">
                <button type="submit" name = "uploadFile" value="uploadFile" class="btn border-dark mr-0">UPLOAD File</button>
            </div>
        </div> 
    </form>
</div>