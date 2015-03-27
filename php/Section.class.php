<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alicia
 * Date: 09/11/13
 * Time: 11:16
 * To change this template use File | Settings | File Templates.
 */

class Section {
    private $id;
    private $title;
    private $description;
	private $longDescription;
    private $youtube = array();
    private $prezi;
    private $googleDoc;
    private $article;
    private $links = array();
	private $tags = array();
    private $author;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @param mixed $article
     */
    public function setArticle($article)
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
	
	    /**
     * @param mixed $description
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;
    }

    /**
     * @return mixed
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * @param mixed $googleDoc
     */
    public function setGoogleDoc($googleDoc)
    {
        $this->googleDoc = $googleDoc;
    }

    /**
     * @return mixed
     */
    public function getGoogleDoc()
    {
        return $this->googleDoc;
    }

    /**
     * @param array $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return array
     */
    public function getLinks()
    {
        return $this->links;
    }

	
	
    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $prezi
     */
    public function setPrezi($prezi)
    {
        $this->prezi = $prezi;
    }

    /**
     * @return mixed
     */
    public function getPrezi()
    {
        return $this->prezi;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $youtube
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;
    }

    /**
     * @return mixed
     */
    public function getYoutube()
    {
        return $this->youtube;
    }






}