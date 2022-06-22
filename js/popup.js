const closeBtns = document.querySelectorAll('.close');
const allPopupOpen = [];
const navbarFooter = document.querySelector('.footer nav');
var rightClickActivated = true;
var allP = document.querySelectorAll('p');
function refreshFooterBar() {
    navbarFooter.innerHTML = "";
    var windowsLogo = `
    <a class="footer_app" href="">
                    <img src="./images/windows-logo.png" alt="windows logo">
                </a>
`
    navbarFooter.insertAdjacentHTML('afterbegin', windowsLogo)

    for (let j = 0; j < allPopupOpen.length; j++) {
        var htmlTest = `
            <div id="footer_${allPopupOpen[j]}" class="footer_app" href="">
                <img src="./images/${allPopupOpen[j]}.png" alt="${allPopupOpen[j]}">
            </div>
    `
        navbarFooter.insertAdjacentHTML('beforeend', htmlTest)
    }
}

function verifyClassTarget(classTargeted, classTested) {
    var allActivePopup = document.querySelectorAll(`.active`)
    if (classTargeted == classTested) {
        document.getElementById(`popup_${classTargeted}`).classList.add('active')
        if (!allPopupOpen.includes(classTargeted)) {
            allPopupOpen.push(classTargeted)
        }
        allActivePopup.forEach(activePopup => {
            activePopup.classList.remove('active');
        });
    }
}

document.addEventListener('dblclick', function (e) {

    verifyClassTarget(e.target.classList[0], 'trash');
    verifyClassTarget(e.target.classList[0], 'projects');
    verifyClassTarget(e.target.classList[0], 'skills');
    verifyClassTarget(e.target.classList[0], 'me');
    verifyClassTarget(e.target.classList[0], 'linkedin');
    verifyClassTarget(e.target.classList[0], 'github');
    verifyClassTarget(e.target.classList[0], 'email');
    refreshFooterBar();
})

function closePopup(element) {
    var targetId = element.getAttribute('id');
    var popup = document.getElementById(`popup_${targetId.replace('close_', '')}`);

    popup.classList.remove('active');
    const index = allPopupOpen.indexOf(targetId.replace('close_', ''));
    allPopupOpen.splice(index, 1); // 2nd parameter means remove one item only
    if (allPopupOpen[allPopupOpen.length - 1]) {
        var lastPopupOpen = document.getElementById(`popup_${allPopupOpen[allPopupOpen.length - 1]}`);
        lastPopupOpen.classList.add('active');

    }
    refreshFooterBar();
}

const rightClick = document.querySelector('.right_click');
const btn1 = document.querySelector('.btn1');
const btn2 = document.querySelector('.btn2');

document.addEventListener('contextmenu', (e) => {
    if (rightClickActivated) {
        e.preventDefault();
        rightClick.style.display = "block";
        rightClick.style.top = `${e.clientY}px`;
        rightClick.style.left = `${e.clientX}px`;
    }
})

document.addEventListener('click', () => {
    rightClick.style.display = "none";
})

btn1.addEventListener('click', () => {
    document.getElementById('popup_screen').classList.add('active');
})

var changeBarreColor = document.getElementById('change_barre_color');

var changeFont = document.getElementById('change_font');
var changeNav = document.getElementById('change_nav');
var changeScreen = document.getElementById('change_screen');

changeFont.addEventListener('click', (e) => {
    var colorFont = document.getElementById('color_font').value;
    allP.forEach(p => {
        p.style.color = colorFont;
    });

})

changeNav.addEventListener('click', (e) => {
    var colorNav = document.getElementById('color_nav').value;
    navbarFooter.style.backgroundColor = colorNav;
})

changeScreen.addEventListener('click', (e) => {
    var colorScreen = document.getElementById('color_screen').value;
    document.body.style.backgroundColor = colorScreen;
})

btn2.addEventListener('click', () => {
    rightClickActivated = false;
})
