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
    private $home_pres;

    /**
     * @ORM\Column(type="string", length=800)
     */
    private $text_pres;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $home_values;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tarifs_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tarifs_text1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tarifs_text2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tarifs_text3;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tarifs_text4;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avis_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $avis_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $new_avis_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $new_avis_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rdv_title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rdv_text1;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rdv_text2;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rdv_text3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHome_pres(): ?string
    {
        return $this->home_pres;
    }

    public function setHome_pres(string $home_pres): self
    {
        $this->home_pres = $home_pres;

        return $this;
    }

    public function getText_pres(): ?string
    {
        return $this->text_pres;
    }

    public function setText_pres(string $text_pres): self
    {
        $this->text_pres = $text_pres;

        return $this;
    }

    public function getHome_values(): ?string
    {
        return $this->home_values;
    }

    public function setHome_values(string $home_values): self
    {
        $this->home_values = $home_values;

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

    public function getTarifsText2(): ?string
    {
        return $this->tarifs_text2;
    }

    public function setTarifsText2(string $tarifs_text2): self
    {
        $this->tarifs_text2 = $tarifs_text2;

        return $this;
    }

    public function getTarifsText3(): ?string
    {
        return $this->tarifs_text3;
    }

    public function setTarifsText3(string $tarifs_text3): self
    {
        $this->tarifs_text3 = $tarifs_text3;

        return $this;
    }

    public function getTarifsText4(): ?string
    {
        return $this->tarifs_text4;
    }

    public function setTarifsText4(string $tarifs_text4): self
    {
        $this->tarifs_text4 = $tarifs_text4;

        return $this;
    }

    public function getAvis_title(): ?string
    {
        return $this->avis_title;
    }

    public function setAvis_title(string $avis_title): self
    {
        $this->avis_title = $avis_title;

        return $this;
    }

    public function getAvis_text(): ?string
    {
        return $this->avis_text;
    }

    public function setAvis_text(string $avis_text): self
    {
        $this->avis_text = $avis_text;

        return $this;
    }

    public function getNew_avis_Title(): ?string
    {
        return $this->new_avis_title;
    }

    public function setNew_avis_title(string $new_avis_title): self
    {
        $this->new_avis_title = $new_avis_title;

        return $this;
    }

    public function getNew_avis_text(): ?string
    {
        return $this->new_avis_text;
    }

    public function setNew_avis_text(string $new_avis_text): self
    {
        $this->new_avis_text = $new_avis_text;

        return $this;
    }

    public function getRdv_title(): ?string
    {
        return $this->rdv_title;
    }

    public function setRdv_title(string $rdv_title): self
    {
        $this->rdv_title = $rdv_title;

        return $this;
    }

    public function getRdv_text1(): ?string
    {
        return $this->rdv_text1;
    }

    public function setRdv_text1(string $rdv_text1): self
    {
        $this->rdv_text1 = $rdv_text1;

        return $this;
    }

    public function getRdv_text2(): ?string
    {
        return $this->rdv_text2;
    }

    public function setRdv_text2(string $rdv_text2): self
    {
        $this->rdv_text2 = $rdv_text2;

        return $this;
    }

    public function getRdv_text3(): ?string
    {
        return $this->rdv_text3;
    }

    public function setRdv_text3(string $rdv_text3): self
    {
        $this->rdv_text3 = $rdv_text3;

        return $this;
    }
}
