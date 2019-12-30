function ToggleUserMenu() {

    var bubble = document.getElementById('myBubble');

    bubble.classList.toggle("show");
}

window.addEventListener('click',function (event) {

    var bubble = document.getElementById('myBubble');
    var userIcon = document.getElementById('usericon');

    if(event.target != bubble && event.target != userIcon){

        if(bubble.classList.contains('show')){
            bubble.classList.remove('show');
        }
    }
})

function ToggleMobileMenuBar() {

    var bubble = document.getElementById('Mobile-Drop-Menu-Bar');

    bubble.classList.toggle("show");
}

function ToggleMobileMenuUser() {

    var bubble = document.getElementById('Mobile-Drop-Menu-User');

    bubble.classList.toggle("show");
}

function ToggleMobileMenuSearch() {

    var bubble = document.getElementById('Mobile-Drop-Menu-Search');

    bubble.classList.toggle("show");
}