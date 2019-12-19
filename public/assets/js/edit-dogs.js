// FORM SUBMIT
$("#dog").submit(() => {
    event.preventDefault()

    let data = $("#dog").serialize()

    $.post("/update-dog", data, response => {
        console.log(JSON.parse(response))
    })
    .done(() => {
        $("#success").fadeIn(300)
        window.setTimeout(() => {
            $("#success").fadeOut(300)
        }, 1200)
    })
})