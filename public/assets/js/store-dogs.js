$('#dog').submit(() => {
    event.preventDefault()

    let dados = $('#dog').serialize()
    $.post('store-dog', dados, response => {
        console.log(JSON.parse(response))
    })
})

$("#add-vaccine").click(() => {
    if($("#vaccine").val() != ''){
        $("#vaccines").val($("#vaccines").val() + $("#vaccine").val() + ';')
        $("#vaccines-list").append(`
            <a href="javascript:void(0)" onclick="removeVaccine(this)" id="vaccine-item">
                <li>${$("#vaccine").val()}</li>
            </a>
        `)
    
        $("#vaccine").val('')
    }
})

function removeVaccine(obj)
{
    let removedVaccine = obj.innerHTML;
    removedVaccine = removedVaccine.replace("<li>", "")
    removedVaccine = removedVaccine.replace("</li>", "")
    removedVaccine = removedVaccine.replace(/ /g,'')
    removedVaccine = removedVaccine.replace(/\r?\n|\r/g,'')
    removedVaccine += ";"

    $("#vaccines").val($("#vaccines").val().replace(removedVaccine), "")
}