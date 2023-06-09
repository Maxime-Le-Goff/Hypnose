<?php

namespace App\Entity;

use App\Repository\DataTextRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataTextRepository::class)
 */
class DataText
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $homePres;

    /**
     * @ORM\Column(type="string", length=800)
     */
    private $textPres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $homeValues;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tarifs_title;

    /**
     * @ORM\Column(type="string", length=1500)
     */
    private $tarifs_text1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avisTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avisText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $newAvisTitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $newAvisText;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rdvTitle;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $rdvTextUn;

    


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHomePres(): ?string
    {
        return $this->homePres;
    }

    public function setHomePres(string $homePres): self
    {
        $this->homePres = $homePres;

        return $this;
    }

    public function getTextPres(): ?string
    {
        return $this->textPres;
    }

    public function setTextPres(string $textPres): self
    {
        $this->textPres = $textPres;

        return $this;
    }

    public function getHomeValues(): ?string
    {
        return $this->homeValues;
    }

    public function setHomeValues(string $homeValues): self
    {
        $this->homeValues = $homeValues;

        return $this;
    }

    public function getTarifsTitle(): ?string
    {
        return $this->tarifs_title;
    }

    public function setTarifsTitle(string $tarifs_title): self
    {
        $this->tarifs_title = $tarifs_title;

        return $this;
    }

    public function getTarifsText1(): ?string
    {
        return $this->tarifs_text1;
    }

    public function setTarifsText1(string $tarifs_text1): self
    {
        $this->tarifs_text1 = $tarifs_text1;

        return $this;
    }


    public function getAvisTitle(): ?string
    {
        return $this->avisTitle;
    }

    public function setAvisTitle(string $avisTitle): self
    {
        $this->avisTitle = $avisTitle;

        return $this;
    }

    public function getAvisText(): ?string
    {
        return $this->avisText;
    }

    public function setAvisText(string $avisText): self
    {
        $this->avisText = $avisText;

        return $this;
    }

    public function getNewAvisTitle(): ?string
    {
        return $this->newAvisTitle;
    }

    public function setNewAvisTitle(string $newAvisTitle): self
    {
        $this->newAvisTitle = $newAvisTitle;

        return $this;
    }

    public function getNewAvisText(): ?string
    {
        return $this->newAvisText;
    }

    public function setNewAvisText(string $newAvisText): self
    {
        $this->newAvisText = $newAvisText;

        return $this;
    }

    public function getRdvTitle(): ?string
    {
        return $this->rdvTitle;
    }

    public function setRdvTitle(string $rdvTitle): self
    {
        $this->rdvTitle = $rdvTitle;

        return $this;
    }

    public function getRdvTextUn(): ?string
    {
        return $this->rdvTextUn;
    }

    public function setRdvTextUn(string $rdvTextUn): self
    {
        $this->rdvTextUn = $rdvTextUn;

        return $this;
    }
}
