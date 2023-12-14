function new_post(){
    let post = document.getElementById("add-post")
    console.log([...post.classList])
    let abd =[...post.classList]
    if(abd.includes("hidden")){
        console.log("abcd")
        post.classList.remove("hidden")
    }
    else{
        console.log("not")
        post.classList.add("hidden")
    }

    console.log("current class",[...post.classList])

}