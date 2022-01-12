$(document).ready(function () {
    $("#btnadd").click(function () {
        // console.log("button clicked");
        $('.modal').modal();
    });
});
    
// var init 
var selectedTask = [];

    // open a new form take a name and add it to the new list
    $("#addclick").click(function () {
        var task_title = document.getElementById("task_name").value.toString();
        // console.log(task_title);
        var t = '<li class="collection-item"><i class="material-icons deep-purple-text text-darken-3 left">description</i><div>'+ task_title +'<a href="#!" class="secondary-content"><i class="material-icons red-text cdel" id="cdelete">delete_forever</i></a></div></li>';

        $(".collection").append(t);
        app.selectedTask.push({
            task_title: task_name
        });
        var selectedTasks = JSON.stringify(app.selectedTasks);
        localStorage.selectedTasks = selectedTasks;
        // console.log("local storage done");
    });

    $(document).on("click", "i.cdel", function () {
        var p = $(this).parent().parent()['0']['firstChild']['data'];
        var sel = [];
        app.selectedTasks.forEach(function(element){
          console.log(element['task_title']);
          if (element['task_title']!=p)
            sel.push(element);
        });
        app.selectedTasks = sel;
        var selectedTasks = JSON.stringify(app.selectedTasks);
        localStorage.selectedTasks = selectedTasks;    
        $(this).parent().parent().parent().remove();
      });
    