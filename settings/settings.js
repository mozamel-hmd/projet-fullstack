let account = document.querySelector("#account-tab")
let password = document.querySelector("#password-tab")
let security = document.querySelector("#security-tab")
let application = document.querySelector("#application-tab")
let notification = document.querySelector("#notification-tab")
let listeDesElementsDeMemeClass1 =  document.querySelectorAll(".nav-link")
let listeDesElementsDeMemeClass2 =  document.querySelectorAll(".tab-pane")

account.onclick = () => {
    listeDesElementsDeMemeClass1.forEach ((element) => {
        element.setAttribute("class","nav-link")
    })
        listeDesElementsDeMemeClass2.forEach ((element) => {
        element.setAttribute("class","tab-pane fade")
    })  
    let AAfficher = document.querySelector("#account")
    AAfficher.setAttribute("class","tab-pane fade show active") 
    account.setAttribute("class","nav-link active")
}
password.onclick = () => {
    listeDesElementsDeMemeClass1.forEach ((element) => {
        element.setAttribute("class","nav-link")
    })
        listeDesElementsDeMemeClass2.forEach ((element) => {
        element.setAttribute("class","tab-pane fade")
    })  
    let AAfficher = document.querySelector("#password")
    AAfficher.setAttribute("class","tab-pane fade show active")    
    password.setAttribute("class","nav-link active")
}
security.onclick = () => {
    listeDesElementsDeMemeClass1.forEach ((element) => {
        element.setAttribute("class","nav-link")
    })
        listeDesElementsDeMemeClass2.forEach ((element) => {
        element.setAttribute("class","tab-pane fade")
    })  
    let AAfficher = document.querySelector("#security")
    AAfficher.setAttribute("class","tab-pane fade show active") 
    security.setAttribute("class","nav-link active")
}
application.onclick = () => {
    listeDesElementsDeMemeClass1.forEach ((element) => {
        element.setAttribute("class","nav-link")
    })
        listeDesElementsDeMemeClass2.forEach ((element) => {
        element.setAttribute("class","tab-pane fade")
    })  
    let AAfficher = document.querySelector("#application")
    AAfficher.setAttribute("class","tab-pane fade show active") 
    application.setAttribute("class","nav-link active")
}
notification.onclick = () => {
    listeDesElementsDeMemeClass1.forEach ((element) => {
        element.setAttribute("class","nav-link")
    })
        listeDesElementsDeMemeClass2.forEach ((element) => {
        element.setAttribute("class","tab-pane fade")
    })  
    let AAfficher = document.querySelector("#notification")
    AAfficher.setAttribute("class","tab-pane fade show active") 
    notification.setAttribute("class","nav-link active")
}