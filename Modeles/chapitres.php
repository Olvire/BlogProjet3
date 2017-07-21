<?php

class Chapitres
{
	// Attributs.
	private $id_chap;
	private $titre_chap;
	private $contenu_chap;
	private $auteur_chap;
	private $date_chap;

	public function __construct($value = [])
	{
		if(!empty($value))
		{
			$this->hydrate($value);
		}
	}

	public function hydrate($data)
	{
		foreach($data as $key => $value)
		{
			$method = 'set'.ucfirst($key);
			if(method_exists([$this, $method]))
			{
				$this->$method($value);
			}
		}
	}

	/**
	  valeur à l'attribut 'id_chap'.
	 */
	public function setId_chap($id_chap)
	{
		if(is_int($id_chap) AND $id_chap > 0)
		{
			$this->id_chap = $id_chap;
		}
	}

	/**
	valeur à l'attribut 'titre_chap'.
	 */
	public function setTitre_chap($titre_chap)
	{
		if(is_string($title) AND !empty($titre_chap)) {
			$this->titre_chap = $titre_chap;
		}
	}

	/**
	 valeur à l'attribut 'contenu_chap'.
	 */
	public function setContenu_chap($contenu_chap)
	{
		if(is_string($contenu_chap) AND !empty($contenu_chap)) 
		{
			$this->contenu_chap = $contenu_chap;
		}
	}

	/**
	valeur à l'attribut 'auteur_chap'.
	 */
	public function setAuteur_chap($auteur_chap)
	{
		if(is_string($auteur_chap) AND !empty($auteur_chap)) 
		{
			$this->auteur_chap = $auteur_chap;
		}
	}

	/**
	 * Permet d'assigner une valeur à l'attribut 'date_chap'.
	 */
	public function setDate_chap(DateTime $date_chap)
	{
		$this->date_chap = $date_chap;
	}


	// GETTERS //

	/**
	l'id de l'article.
	 */
	public function getId_chap() {
		return $this->id_chap; 
	}

	/**
	 * titre de l'article.
	 */
	public function getTitre_chap() {
		return $this->titre_chap; 
	}

	/**
	 * Obtient le contenu de l'article.
	 */
	public function getContenu_chap() {
		return $this->contenu_chap; 
	}

	/**
	 * Obtient l'auteur de l'article.
	 */
	public function getAuteur_chap() {
		return $this->auteur_chap; 
	}

	/**
	 * Obtient la date de publication de l'article.
	 */
	public function getDate_chap() {
		return $this->date_chap; 
	}

}