/*
condition victoire
condition défaite
match nul
passage de tours
nombre de joueurs</div>
pion 1 et 2
tableau

3 fonctions : 
- setGame pour le tableau et le setup 
- setTile pour le placement des jetons + changement joueur 1 à joueur 2
- checkWinner (endGame) pour vérifier la victoire ou la défaite de la partie
*/

function setGame()
{
    board=[
            ['','','']
            ['','','']
            ['','','']
          ]

    for(let r;r<3;r++){ /*ligne*/
        for(let c;c<3;c++){ /*colonne*/
          tile=document.getElementById("tile")
        }






    }





}














let endGame=true;

function victory()
{
        if(endGame==true)
    {
        alert("Vous avez gagné")
    }

        if(endGame==false)
    {
        alert("Vous avez perdu") 
    }
}
