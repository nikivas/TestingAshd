function getFirstWord() {
    let firstWordIds = [];
    let firstWord = '';

    for (var i = 1; i < 5; i++) { firstWordIds.push('#i1' + i.toString()) }
    firstWordIds.forEach(function(el) {
        firstWord += $(el).val();
    });
    return firstWord;
}

function getSecondWord() {
    let firstWordIds = [];
    let firstWord = '';

    for (var i = 1; i < 8; i++) { firstWordIds.push('#i2' + i.toString()) }
    firstWordIds.forEach(function(el) {
        firstWord += $(el).val();
    });
    return firstWord;
}

function getThirdWord() {
    let firstWordIds = [];
    let firstWord = '';

    for (var i = 1; i < 8; i++) { firstWordIds.push('#i3' + i.toString()) }
    firstWordIds.forEach(function(el) {
        firstWord += $(el).val();
    });
    return firstWord;
}

function lock(id) {
    lens = { 1: 5, 2: 8, 3: 8 };
    let firstWordIds = [];

    for (var i = 1; i < lens[id]; i++) { firstWordIds.push('#i' + id.toString() + +i.toString()) }
    firstWordIds.forEach(function(el) {
        $(el).prop("disabled", true);
        $(el).css({ 'background': '#ccffcc' });
    });


}

function onAjaxSuccess(data) {
    console.log(data);
    data.right.forEach(function(obj) {
        let id = obj.id;
        lock(id);
    });
}

function getMeta(metaName) {
    const metas = document.getElementsByTagName('meta');

    for (let i = 0; i < metas.length; i++) {
        if (metas[i].getAttribute('name') === metaName) {
            return metas[i].getAttribute('content');
        }
    }

    return '';
}

$(document).ready(function() {
    let ready_ids = $('#ids').val();
    if (ready_ids.length > 0) {
        ready_ids = JSON.parse(ready_ids);
        ready_ids.forEach(function(obj) {
            lock(obj);
        });
    }

    $('#send-flag').click(function() {
        var csrf_val = getMeta('csrf-token');
        let json = JSON.stringify(
            [{
                    id: 1,
                    text: getFirstWord()
                },
                {
                    id: 2,
                    text: getSecondWord()
                },
                {
                    id: 3,
                    text: getThirdWord()
                }
            ]);
        $.post(
            "/flag/check", {
                answer: json,
                _token: csrf_val
            }, onAjaxSuccess
        );

    });
});