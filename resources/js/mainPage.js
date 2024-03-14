
    let myBlocks = document.getElementsByClassName("main-block");
    for(let block of myBlocks) {
    block.addEventListener("click", checkIfActive);
};
    function checkIfActive() {
    let myElement = this.getElementsByClassName('card-text');
    let constText = this.getElementsByClassName('const');
    myElement[0].classList.toggle('active');
    constText[0].classList.toggle('text-truncate');
};
