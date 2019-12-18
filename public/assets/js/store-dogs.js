// FORM SUBMIT
$("#dog").submit(() => {
    event.preventDefault()

    let data = $("#dog").serialize()
    $.post("store-dog", data, response => {
        console.log(JSON.parse(response))
    })
    .done(() => {
        $("#success").fadeIn(300)
        $("#dog")[0].reset()
        vaccines = []
        $("#vaccines").val("")
        $("#vaccines-list").html("")
        window.setTimeout(() => {
            $("#success").fadeOut(300)
        }, 1200)
    })
})

// VACCINES

var vaccines = []

$("#add-vaccine").click(() => {
    if($("#vaccine").val() != ""){
        
        vaccines.push($("#vaccine").val())
        $("#vaccines").val(vaccines)

        $("#vaccines-list").append(`
            <li>${$("#vaccine").val()}</li>
        `)
    
        $("#vaccine").val("")
    }
})

$("#remove-vaccine").click(() => {
    vaccines.splice(vaccines.length -   1, 1)

    $("#vaccines").val(vaccines)

    $("#vaccines-list li:last-child").remove()
})