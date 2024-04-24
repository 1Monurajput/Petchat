// like status
document.querySelectorAll('.like').forEach(function(like) {
    like.addEventListener('click', function() {
        var display_like = this.closest('.post_card').querySelector(".display_like");
        var post_id = this.closest('.post_card').dataset.id;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "/petchat/partials/like_handler.php", true);
        console.log(xhr);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var response = this.responseText.split(',');
                display_like.textContent = response[0];
                var liked = response[1];
                if (liked==1) {
                    like.classList.add('text-danger');
                } else {
                    like.classList.remove('text-danger');
                }

            }
        }
        xhr.send("post_id=" + post_id);
    })
})


document.querySelectorAll(".delete_post").forEach(function(delete_post){
    delete_post.addEventListener('click',function(){
        var xhr = new XMLHttpRequest();
        var postCard = this.closest('.post_card'); 
        var post_id = postCard.dataset.id;
        xhr.open('POST','/petchat/partials/post_deletor.php',true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange= function(){
            if(this.readyState == 4 && this.status==200){
                var del = this.response;
                if(del == 1){
                    postCard.classList.add("d-none");
                }
            }
        }
        console.log(xhr);
        xhr.send("post_id=" + post_id);
    })
})


