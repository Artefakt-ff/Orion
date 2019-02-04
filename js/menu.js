function mainChanger() {
    if (document.documentElement.clientWidth > 768) {
        var sections_ids = ['jumbotron', 'about', 'choice', 'projects', 'map', 'reviews', 'form', 'footer'],
            length = sections_ids.length,
            sections = [],
            sections_sizes = [],
            circles = [],
            is = [],
            menu = document.getElementById('menu');
        var i, start, scrollHeight;
        for (i = 0; i < length; i++) {
            sections.push(document.getElementById(sections_ids[i]));
            circles.push(document.getElementById('circle_' + sections_ids[i]));
            is.push(document.getElementById('i_' + sections_ids[i]));
        }
        start = 0;
        for (i = 0; i < length; i++) {
            sections_sizes.push([start, start + sections[i].offsetHeight]);
            start += sections[i].offsetHeight;
        }


        document.addEventListener('scroll', changeMenu);
        changeMenu();
        function changeMenu() {
            scrollHeight = window.pageYOffset + document.documentElement.clientHeight;
            var j, q;
            if (scrollHeight < Math.floor(document.documentElement.clientHeight * 3 / 2)) {
                menu.style.display = 'none';
            }
            else {
                menu.style.display = 'block';
            }
            for (j = 1; j < length; j++) {

                if (scrollHeight < parseFloat(sections_sizes[j][1]) && scrollHeight > Math.floor((sections_sizes[j][1] - sections_sizes[j][0]) / 2) + sections_sizes[j][0]) {

                    for (q = 1; q < length - 1; q++) {
                        circles[q].style.fontSize = '16px';
                        is[q].className = 'far fa-circle';

                    }
                    circles[j].style.fontSize = '24px';
                    is[j].className = 'fas fa-circle';
                    if (j == length - 2) {
                        menu.style.color = 'white';
                    }
                    else {
                        menu.style.color = 'rgb(255, 165, 72)';
                    }
                    break;

                }
            }
        }
    }
}