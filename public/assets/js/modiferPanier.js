function getBasketById(){
    var panier = document.querySelector('#panierModifier')

    var req = new XMLHttpRequest()
    var reqURL = '../controller/ajaxController.php?action=getPanierById&payload'

    req.open('GET', reqURL)
    req.send()
    
    
}