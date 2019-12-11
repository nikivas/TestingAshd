function testsRoute() {
    var testType = $('#testType').val();
    if (testType == 'one' || testType == 'multy') {
        console.log(getCheckAnswers());
        return getCheckAnswers();
    }
    return null;
}

function getCheckAnswers() {
    let result = $("input[name='answer']:checked");
    let resultAdapter = [];
    if (result) {
        result.each(function() {
            resultAdapter.push({ "id": parseInt($(this).val()) });
        });
    }
    return JSON.stringify(resultAdapter);
}