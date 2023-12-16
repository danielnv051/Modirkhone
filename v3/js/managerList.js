function handleTrash(){
    const result = confirm("آیا از حذف مدیر مطمئن هستید؟")
    if(result === true){
        location.search = "?m_id=1&pos=0"
    }
}