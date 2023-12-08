const btnSearchElement = document.querySelector(".search-btn")
const inputValueElement = document.querySelector(".input-search")

const searchNewsByParam = async(param) => {
    try{
        const response = await fetch(`BE/timkiem.php?param=${param}`, {
            method: "get",
            headers: {
                'Content-Type': 'application/json',
            },
        })
        if(response.ok && response.status == 200){
            console.log(`success: ${response.status}`)
            const searchNews = await response.json()
            console.log(searchNews)

            // redirect to news page
            window.location.href = `news.html?title=${param}`
            localStorage.setItem('newsData', JSON.stringify(searchNews))
        }
    }catch(e){
        console.log(e)
    }
}

btnSearchElement.onclick  = () => {
    searchNewsByParam(inputValueElement.value)
}


