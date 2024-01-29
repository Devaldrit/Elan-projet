/***************** Intro *****************/
//Ciblage des élements du DOM
// let mainTitle = document.querySelector("h1")
// let list = document.querySelector("ul")
// let listElements = list.querySelectorAll('li')

// //affichage des élements
// console.log('Titre principale', mainTitle)
// console.log("Titre: ", list)
// console.log("Les élements: ", listElements)

// //modfiier le style d'un élement
// listElements.forEach(function(element){
//     console.dir(element)
//     element.style.color = "red"
// })

// //console.dir() permet d'avoir les informations sur un élement du dom
// console.dir(mainTitle)

//function pour mélanger les boîtes
function shuffleChildren(parent){
    let children = parent.children
    let i = children.length, k, temp
    while(--i > 0) {
        k = Math.floor(Math.random() * (i+1))
        temp = children[k]
        children[k] = children[i]
        parent.appendChild(temp)
    }
}

function showReaction(type, clickedBox) {
    clickedBox.classList.add(type)
    if(type !== "success") {
        setTimeout(function(){
            clickedBox.classList.remove(type)
        }, 800)
    }
}

const box = document.createElement("div")
box.classList.add("box")

const board = document.querySelector("#board")

let nb = 1

//boucle pour afficher les boîtes 
for(let i = 1; i <=10; i++) {
    let newbox = box.cloneNode()
    newbox.innerText = i
    board.appendChild(newbox)

    newbox.addEventListener("click", function(){
        if(i == nb) {
            newbox.classList.add("box-valid")
            if(nb == board.children.length) {
                board.querySelectorAll(".box").forEach(function(box){
                    showReaction("success", box)
                })
            }
            nb++
        }

        else if(i > nb) {
            showReaction("error", newbox)
            nb = 1
            board.querySelectorAll(".box-valid").forEach(function(validBox){
                validBox.classList.remove("box-valid")
            })
        }
        else {
            showReaction("notice", newbox)
        }
    })
}

shuffleChildren(board)