function showListofDockets(eventNum) {
    switch (eventNum) {
        case 1:
            document.getElementsByClassName('popularDockets')[0].classList.remove('active');
            document.getElementsByClassName('myCheckList')[0].classList.remove('active');
            document.getElementsByClassName('listOfDockets')[0].classList.add('active');
            break;
        case 2:
            document.getElementsByClassName('listOfDockets')[0].classList.remove('active');
            document.getElementsByClassName('myCheckList')[0].classList.remove('active');
            document.getElementsByClassName('popularDockets')[0].classList.add('active');
            break;
        case 3:
            document.getElementsByClassName('listOfDockets')[0].classList.remove('active');
            document.getElementsByClassName('popularDockets')[0].classList.remove('active');
            document.getElementsByClassName('myCheckList')[0].classList.add('active');
            break;
        default:
            break;
    }
}
