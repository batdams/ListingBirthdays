<?php
// Obsolète, redirection directe via la vue
class OutsideController
{
   /**
   * redirection vers linkedin (lien externe)
   * 
   * @return void
   */
    public function goLinkedin(): void
    {
        header("Location: https://www.linkedin.com/in/damien-billiau-a8831851");
        exit();
    }
}