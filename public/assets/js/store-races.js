// FORM SUBMIT
$("#race").submit(() => {
    event.preventDefault()

    let data = $("#race").serialize()

    $.post("store-race", data, response => {
        console.log(JSON.parse(response))
    })
    .done(() => {
        $("#success").fadeIn(300)
        $("#race")[0].reset()
        window.setTimeout(() => {
            $("#success").fadeOut(300)
        }, 1200)
    })
})