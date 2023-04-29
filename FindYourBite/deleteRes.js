function deleteRes(id){
    var status= confirm("Are you sure you want to delete this?");
    if(status){
        window.location.href=`newdelete1.php?id=${id}`
    }
}