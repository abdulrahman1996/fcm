/**
 * Created by asus pc on 4/3/2018.
 */

    var checkList = document.getElementById('list1');
    checkList.getElementsByClassName('anchor')[0].onclick = function (evt) {
        if (checkList.classList.contains('visible'))
            checkList.classList.remove('visible');
        else
            checkList.classList.add('visible');
    }

    checkList.onblur = function(evt) {
        checkList.classList.remove('visible');
    }
