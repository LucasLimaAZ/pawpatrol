$('#dog').submit(() => {
    event.preventDefault()

    let dados = $('#dog').serialize()
    $.post('store-dog', dados, response => {
        console.log(JSON.parse(response))
    })
})