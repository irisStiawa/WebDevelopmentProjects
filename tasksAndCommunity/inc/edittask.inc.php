<div id="edittask" class="hidden position-fixed justify-content-center align-items-center">
    <form action="taskmanager.php" novalidate id = "formEditTask" class="px-3 pb-5 pt-3 bg-light rounded" method="post">
        <div class="text-right">
            <i id= "closeedittask" class="fa fa-times"></i>
        </div>
        <div class="mx-4">      
            <h3>Edit Task</h3>
            <div id="taskpriority" class="d-flex flex-wrap my-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="taskpriority" required id="edithigh" value="high"/>
                    <img class="imgtask mr-1" src="img/projectImages/high.png" alt="priority">
                    <label class="form-check-label" for="high">high</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="taskpriority" required id="editmedium" value="medium"/>
                    <img class="imgtask mr-1" src="img/projectImages/medium.png" alt="priority">
                    <label class="form-check-label" for="medium">medium</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="taskpriority" required id="editlow" value="low"/>
                    <img class="imgtask mr-1" src="img/projectImages/low.png" alt="priority">
                    <label class="form-check-label" for="low">low</label>
                    
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="taskpriority" required id="editnone" value="none"/>
                    <img class="imgtask mr-1" src="img/projectImages/none.png" alt="priority">
                    <label class="form-check-label" for="none">none</label>
                    <div class="valid-feedback ml-3">Looks good!</div>
                    <div class="invalid-feedback ml-3">Please choose a priority.</div>
                </div>
            </div>
            <div>         
                <input type="text" class="form-control mt-2 mb-2 " placeholder="taskname" name="taskname" required id="edittaskname"/>
                <div class="valid-feedback ">Looks good!</div> 
                <div class="invalid-feedback ">Please choose a taskname!</div> 
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <label class="form-label m-0" for="date">Date</label>
                <div class="valid-feedback ml-1">Looks good!</div> 
                <div class="invalid-feedback ml-1">Please choose a date!</div>
                <input type="date" class="form-control mt-2 mb-2 w-50"  name="taskdate" required id="edittaskdate"/>
            </div>
            <div  class="d-flex justify-content-between align-items-center">
                <label class="form-label m-0" for="reminder">Reminder</label>
                <input type="date" class="form-control mt-2 mb-2 w-50"  name="reminder" id="edittaskreminder"/>
            </div>
            <div> 
                <textarea class="form-control p-2" id="edittasknote" placeholder="notes" name="tasknote" rows="3"></textarea>
            </div>
            <div id="tasktype" class="d-flex mt-4">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tasktype" required id="edithome" value="home"/>
                    <label class="form-check-label" for="home">home</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tasktype" required id="editwork" value="work"/>
                    <label class="form-check-label" for="work">work</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="tasktype" required id="editprivate" value="private"/>
                    <label class="form-check-label" for="private">private</label>
                    <div class="valid-feedback ml-3">Looks good!</div>
                    <div class="invalid-feedback ml-3">Please choose a priority.</div>
                </div>
            </div>
            <input class="form-check-input hidden" type="text" name="taskID" required id="edittaskID"/>
            <div class="mt-3 text-right">
                <button type="submit" name = "submit" value="edittask" class="btn border-dark mr-0">Save</button>
            </div>
        </div> 
    </form>
</div>