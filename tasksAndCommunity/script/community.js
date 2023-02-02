btnNewMsg = document.querySelector('#btnNewMsg');
inputNewMsg = document.querySelector('#inputNewMsg');
msgView = document.querySelector('#msgContainer');

// btn = document.querySelector('.btnNewComment');

// btn.addEventListener('click', addComment);

let collectedComment= [];

let chatView = [];
let commentView = {};
let commentCount={};


communityChat();


// add new Message

btnNewMsg.addEventListener('click', async () => {
    if(inputNewMsg.value != ""){
        chatData('newMsg', inputNewMsg.value)
            .then(response => response)
            .then(res => {
                if(res[0] == "saved"){
                    communityChat();
                    inputNewMsg.value = "";
                }
            })
    }
})

// create Message

function createMsg(arrMsg){
    // let newDiv = document.createElement('div');
    // newDiv.classList.add('msgRow', 'w-100', 'd-flex', 'my-3');
    // if (arrMsg.img == ""){
    //     let i = document.createElement('i');
    //     i.classList.add('fa', 'fa-user-circle', 'mr-3');
    //     newDiv.appendChild(i);
    // }else{
    //     let img = document.createElement('img');
    //     img.classList.add('imgCommuntityChat', 'mr-3');
    //     img.setAttribute('src','img/userImages/' + arrMsg.img);
    //     img.setAttribute('alt','picture');
    //     newDiv.appendChild(img);
    // }
    
    // let childDiv = document.createElement('div');
    // childDiv.classList.add('msg', 'w-75', 'bg-light', 'rounded', 'p-2');
    // newDiv.appendChild(childDiv);
    // let userName = document.createElement('p');
    // userName.classList.add('communityUserName', 'm-0');
    // userName.innerHTML = arrMsg.username;
    // let time = document.createElement('p');
    // time.classList.add('stamp', 'mb-2');
    // time.innerHTML = arrMsg.nowDate + " " + arrMsg.nowTime;
    // let message = document.createElement('p');
    // message.classList.add('msg', 'p-2');
    // message.innerHTML = arrMsg.msg;
    // let comments = document.createElement('p');
    // comments.classList.add('comments', 'my-1');
    // comments.innerHTML = arrMsg.comments + " Kommentare";
    // comments.setAttribute('id', arrMsg.msgID);
    // comments.addEventListener('click', View);
    // collectedComment.push(comments);
    // let commentsView = document.createElement('div');
    // commentsView.classList.add('commentsView', 'hidden', 'mt-3');
    // commentsView.setAttribute('id', arrMsg.msgID);
    // let commentsDiv = document.createElement('div');
    // commentsDiv.classList.add('commentsDiv');
    // commentsDiv.setAttribute('id', arrMsg.msgID);
    // let writeCommentContainer = document.createElement('div');
    // writeCommentContainer.classList.add('writeCommentContainer', 'm-2');
    // writeCommentContainer.setAttribute('id', arrMsg.msgID);
    // let inputNewComment = document.createElement('input');
    // inputNewComment.classList.add('inputNewComment', 'bg-white', 'w-75', 'mr-3', 'rounded', "p-1");
    // inputNewComment.setAttribute('type', 'text');
    // inputNewComment.setAttribute('placeholder', 'Write a Comment');
    // inputNewComment.setAttribute('name', 'newComment');
    // let btnNewComment = document.createElement('button');
    // btnNewComment.classList.add('btnNewComment', 'px-3');
    // btnNewComment.setAttribute('type', 'submit');
    // btnNewComment.setAttribute('name', 'sendNewComment');
    // btnNewComment.innerHTML = 'Send Comment';
    // btnNewComment.setAttribute('id', arrMsg.msgID);
    // btnNewComment.addEventListener('click', addComment);
    // childDiv.appendChild(userName);
    // childDiv.appendChild(time);
    // childDiv.appendChild(message);
    // childDiv.appendChild(comments);
    // childDiv.appendChild(commentsView);
    // commentsView.appendChild(commentsDiv);
    // commentsDiv.appendChild(writeCommentContainer);
    // writeCommentContainer.appendChild(inputNewComment);
    // writeCommentContainer.appendChild(btnNewComment);
    // commentView[arrMsg.msgID] = [];
    // return newDiv;
}

// newComment


async function addComment(e){
    id = e.target.id;
    // id = 14;
    let parent = e.target.parentElement;
    let input = parent.querySelector('.inputNewComment');
    let insertDiv = parent.parentElement;
    let commentsElem = insertDiv.parentElement.parentElement.querySelector('.comments');
    if(input.value != ""){
        chatData('newComment', input.value, id)
            .then( res =>{
                console.log(res);
                let newComment = createComment(res[0]);
                insertDiv.prepend(newComment);
                commentsElem.innerHTML = res[0].count + " Kommentare";
                input.value = "";
                commentCount[e.target.id] += 1;
                commentView[e.target.id].push(res[0].commentID);
                
            })
    }

}


// show and hidde Comment view

async function View(e){
    let view;
    id = e.target.id;
    console.log(id)
    let commentsView = document.querySelectorAll('.commentsView');
    for(elem of commentsView){
        if(elem.id == id){
            view = elem;
        }
    }
    let addElem = view.querySelector('.commentsDiv')
    
    if(view.classList.contains('hidden')){
        view.classList.remove('hidden');
        chatData('getComments', id)
            .then(res =>{
                console.log(res)
                if(res != 'none'){
                    for(com in res){
                        
                        if(!commentView[res[com].msgID].includes(res[com].commentID)){
                            let comment = createComment(res[com]);
                            addElem.prepend(comment);
                            commentView[res[com].msgID].push(res[com].commentID)
                        }
                    }
                }
            })    
    } else if(!view.classList.contains('hidden')){
        view.classList.add('hidden');
    }
}

// create Comment

function createComment(com){
    let userComment = document.createElement('div');
    userComment.classList.add('userComment', 'd-flex', 'align-items-lg-center', 'my-3', 'position-relative');
    let commentUserName = document.createElement('p');
    commentUserName.classList.add('commentUserName');
    commentUserName.innerHTML = com.username;
    let comment = document.createElement('p');
    comment.classList.add('comment', 'ml-lg-2', 'pl-lg-5');
    comment.innerHTML = com.comment;
    let commentStamp = document.createElement('p');
    commentStamp.classList.add('commentStamp', 'ml-lg-2', 'position-absolute');
    commentStamp.innerHTML = com.nowDate + " " + com.nowTime;
    userComment.appendChild(commentStamp);
    userComment.appendChild(commentUserName);
    userComment.appendChild(comment);
    return userComment;

}

// get Data from Database 


async function chatData(key, value, id){
    let formData = new FormData();
    formData.append(key, value);
    if(id != undefined){
        formData.append('id', id);
    }
    let chatResult = await fetch('data/chatData.php', {method: 'POST', body: formData})
        .then(response => response.json())
        .then(res => {
            return res;}); 
    
    return chatResult;
}

// show Chat

async function communityChat(){
    let data = await chatData('chatData', 0);
    
    for(msg in data){
        console.log(msg);
        if(chatView.includes(msg) != true){
            chatView.push(msg);
            msgView.innerHTML = msgView.innerHTML + data[msg];
            commentView[msg] = [];    
        }
    }

    for(comments of document.querySelectorAll('.comments')) {
        comments.addEventListener('click', View);
    }
    for(btn of document.querySelectorAll('.btnNewComment')) {
        btn.addEventListener('click', addComment);
    }

    checkComments();
}




async function checkComments(){
    let data = await chatData('chatData', 0);
    for(msg in data){
        let count = data[msg].comments + " Kommentare"
        for(com in collectedComment){
            if(collectedComment[com].id == data[msg].msgID && count != collectedComment[com].innerHTML){
                collectedComment[com].innerHTML = count;
                break;
            }
        }
    }
}


/* checkComments(); */




// setInterval(function(){ communityChat(); checkComments();}, 2000);


