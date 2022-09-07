$(".confirmDelete").click(function() {
    var name = $(this).attr("name");
    if (confirm("Are you sure you want to Delete this " + name + "?")) {
        return true;
    }
    return false;
});