function handleAdd() {

    var name = (document.getElementById('name').checked && document.getElementById("id_name").value != '')
        ? document.getElementById("id_name").value
        : "Character";

    var hair, logo;

    if (document.getElementById('hair').checked) {
        var arr = document.getElementsByClassName('radio');
        for (var i = 0; i <= arr.length - 1; i++) {
            if (arr[i].checked) {
                hair = arr[i].value;
            }
        }

    }
    else {
        hair = "black";
    }
    logo = (document.getElementById('logo').checked) ? true : false;

    var option = {
        name: name,
        hair: hair,
        logo: logo
    }


    createCharacter(option);
}

function createCharacter(option) {

    var character = document.createElement('div');
    character.className = "character";
    document.body.appendChild(character);

    var head = document.createElement('div');
    head.className = "head";
    var head_v = document.getElementsByClassName('character');
    head_v[head_v.length - 1].appendChild(head);

    var eyes_left = document.createElement('div');
    eyes_left.className = "eyes left";
    var eyes_left_v = document.getElementsByClassName('head');
    eyes_left_v[eyes_left_v.length - 1].appendChild(eyes_left);

    var eyes_right = document.createElement('div');
    eyes_right.className = "eyes right";
    eyes_left_v[eyes_left_v.length - 1].appendChild(eyes_right);

    var mouth = document.createElement('div');
    mouth.className = "mouth";
    eyes_left_v[eyes_left_v.length - 1].appendChild(mouth);

    var hair = document.createElement('div');
    hair.className = "hair ";
    hair.id = option.hair;
    head_v[head_v.length - 1].appendChild(hair);

    var hands = document.createElement('div');
    hands.className = "hands";
    head_v[head_v.length - 1].appendChild(hands);

    var torso = document.createElement('div');
    torso.className = "torso";
    head_v[head_v.length - 1].appendChild(torso);

    var logo = document.createElement('div');
    logo.className = "logo";
    logo.name = "logo";
    logo.id = (option.logo) ? "" : "block";
    var logo_v = document.getElementsByClassName('torso');
    logo_v[logo_v.length - 1].appendChild(logo);

    var triangle_down = document.createElement('div');
    triangle_down.className = "triangle-down";
    var triangle_down_v = document.getElementsByClassName('logo');
    triangle_down_v[triangle_down_v.length - 1].appendChild(triangle_down, triangle_top);

    var triangle_top = document.createElement('div');
    triangle_top.className = "triangle-top";
    triangle_down_v[triangle_down_v.length - 1].appendChild(triangle_top);

    var legs = document.createElement('div');
    legs.className = "legs";
    head_v[head_v.length - 1].appendChild(legs);

    var legs_distraction = document.createElement('div');
    legs_distraction.className = "legs_distraction";
    var legs_distraction_v = document.getElementsByClassName('legs');
    legs_distraction_v[legs_distraction_v.length - 1].appendChild(legs_distraction);

    var text = document.createElement('div');
    text.className = "text";
    text.Name = "text";
    text.innerHTML = option.name;
    head_v[head_v.length - 1].appendChild(text);

}


button.addEventListener('click', handleAdd);

var input_1 = document.getElementById('name');

input_1.addEventListener('click', input_text);

function input_text() {
    if (input_1.checked) {
        var input = document.createElement('input');
        input.type = 'text';
        input.id = 'id_name';
        input.placeholder = "Введите имя";

        form.insertBefore(input, form.children[1]);
    }
    else {
        var el = document.getElementById('id_name');
        el.remove(el);


    }
}

var input_2 = document.getElementById('hair');

input_2.addEventListener('click', input_radio);

function input_radio() {
    if (input_2.checked) {
        var ins = document.createElement('input');
        ins.type = 'radio';
        ins.className = 'radio';
        ins.id = "hair1";
        ins.value = "yellow";
        form.insertBefore(ins, form.children[form.children.length - 4]);


        var lab = document.createElement('label');
        lab.for = "hair1"
        lab.innerHTML = "Блондин"
        form.insertBefore(lab, form.children[form.children.length - 4]);

        var ins = document.createElement('input');
        ins.type = 'radio'
        ins.id = "hair2";
        ins.className = 'radio';
        ins.value = "black";
        form.insertBefore(ins, form.children[form.children.length - 4]);

        var lab = document.createElement('label');
        lab.for = "hair2";
        lab.innerHTML = "Брюнет";
        form.insertBefore(lab, form.children[form.children.length - 4]);

        var ins = document.createElement('input');
        ins.type = 'radio';
        ins.className = 'radio';
        ins.id = "hair3";
        form.insertBefore(ins, form.children[form.children.length - 4]);

        var lab = document.createElement('label');
        lab.for = "hair3";
        lab.innerHTML = "Огонь";
        ins.value = "red";
        form.insertBefore(lab, form.children[form.children.length - 4]);
    }
    else {
        var el = document.getElementsByTagName('label');
        for (var i = 0; i <= el.length + 1; i++) {
            el[0].remove();
        }

        var inp = document.getElementsByClassName('radio');
        for (var i = 0; i <= inp.length + 1; i++) {
            inp[0].remove();
        }


    }
}
