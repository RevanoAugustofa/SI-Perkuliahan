document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(item){
    item.addEventListener('click',function(e){ 
        e.preventDefault()
        const parent = item.closest('.group')
        parent.classlist.add('selected')    
    })
})