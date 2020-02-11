1. Quelle est l'intention ?
  - je veux changer la valeur de amount
  -> CHANGE_AMOUNT
2. Pour que l'intention soit réalisable, ai-je besoin de donnée ?
  - OUI, il me faut le montant
  -> action creator : le montant à prendre en charge
3. Qu'est ce que cette intention change dans le state ?
  - reducer : nouveau case
  -> return le nouveau state modifié