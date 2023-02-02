<div id="showtask" class=" hidden position-fixed justify-content-center align-items-center">

    <div id="viewShowTask" class="p-3 bg-light col col-lg-3 col-sm-10 rounded">
        <div class="text-right">
            <i id= "closeshowtask" class="fa fa-times"></i>
        </div>
        <div class="mx-4 mb-3">
            <div class="text-right">
                <p id = "showType" class="show-type"></p>
            </div>
            <div id= "showPriority" class="d-flex align-items-center mb-3">
                <h3 id = "showName" class="m-0"></h3>
                <img id = 'showImage' class= "imgtask ml-2" src="" alt= "priority">
                <i id = "showDone" class="done notdone fa fa-check  ml-3"></i>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <p class="m-0"></p>
                <div id = "showDate"></div>  
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <p class="m-0"></p>
                <div id = "showReminder"></div>  
            </div>
            <div  id = "showNote" class="my-5">
                <p></p>
            </div>
            <div class="mt-3 text-right">
                <button id = "editBtn" type="submit" name = "submit" value="edittask" taskID = "" class="btn border-dark mr-0">Edit Task</button>
            </div>
        </div>
    </div>
</div>