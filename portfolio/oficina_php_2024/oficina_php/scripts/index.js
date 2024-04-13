const themes = [
    {
        buttonLetter: 'G',
        classCode: 'code-green',
    },
    {
        buttonLetter: 'Y',
        classCode: 'code-yellow'
    },
    {
        buttonLetter: 'C',
        classCode: 'code-crimson'
    },
    {
        buttonLetter: 'C',
        classCode: 'code-cornflowerblue'
    },
    {
        buttonLetter: 'D',
        classCode: 'code-darksalmon'
    }
]
var currentTheme = -1

const btnColor = document.getElementById('button-color')
if(btnColor){
    btnColor.onclick = _btnClickHandler
}

function _btnClickHandler(){
    function _replaceTheme(element, theme){
        for(let t in themes){
            element.classList.remove(themes[t].classCode)
        }
        element.classList.add(theme.classCode)
    }
    function _updateTheme(themeIndex){
        let theme = themes[themeIndex]
        
        let btnCSpan = document.getElementById('button-color-span')
        btnCSpan.innerText = theme.buttonLetter
        _replaceTheme(btnCSpan, theme)

        let codes = document.getElementsByClassName('code')
        for(let i in codes){
            _replaceTheme(codes[i], theme)
        }
    }

    currentTheme++
    if(currentTheme >= themes.length){
        currentTheme = 0
    }
    _updateTheme(currentTheme)
}

_btnClickHandler()