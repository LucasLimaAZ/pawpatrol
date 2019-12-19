// FORM SUBMIT
$("#race").submit(() => {
    event.preventDefault()

    let data = $("#race").serialize()

    $.post("/update-race", data, response => {
        console.log(JSON.parse(response))
    })
    .done(() => {
        $("#success").fadeIn(300)
        window.setTimeout(() => {
            $("#success").fadeOut(300)
        }, 1200)
    })
})