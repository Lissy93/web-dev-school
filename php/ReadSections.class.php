<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Alicia
 * Date: 09/11/13
 * Time: 11:16
 * This class reads the XML database and creates a list of XML objects
 */

class ReadSections {

    private function readXml(){
        $pathToXml = $_SERVER['DOCUMENT_ROOT']."/data/data.xml";
        $xml=simplexml_load_file($pathToXml);

        return $xml;
    }

    public function makeSectionArr(){

        $results = array(); // List of Section objects

        $xml = $this->readXml();

        $numSections =  count($xml->section);

        for($i=0; $i<$numSections; $i++){
            $sectionObj = new Section();

            $sectionObj->setId($xml->section[$i]->id);
            $sectionObj->setTitle($xml->section[$i]->title);
            $sectionObj->setDescription($xml->section[$i]->description);
			$sectionObj->setLongDescription($xml->section[$i]->longDescription);
            $sectionObj->setYoutube($xml->section[$i]->youtube);
            $sectionObj->setPrezi($xml->section[$i]->prezi);
            $sectionObj->setGoogleDoc($xml->section[$i]->googleDoc);
            $sectionObj->setArticle($xml->section[$i]->article);
            $sectionObj->setAuthor($xml->section[$i]->author);
            $links=array();
            for($q=0;$q<count($xml->section[$i]->links->link);$q++){
                $link = array("name"=>$xml->section[$i]->links->link[$q]->text, "path"=>$xml->section[$i]->links->link[$q]->path);
                array_push($links, $link);
            }
            $sectionObj->setLinks($links);
			$tags=array();
            for($q=0;$q<count($xml->section[$i]->tags->tag);$q++){
                $tag = $xml->section[$i]->tags->tag[$q];
                array_push($tags, $tag);
            }
            $sectionObj->setTags($tags);

            array_push($results, $sectionObj);


        }

    return $results;

    }


    public function findSection($id){
        $sections = $this->makeSectionArr();

        for($i=0; $i<count($sections); $i++){
            if($sections[$i]->getId()==$id){
                return $sections[$i]; //Found it!
            }
        }
        return false;
    }
	
	public function findSectionFromTitle($title){
 		$sections = $this->makeSectionArr();
        for($i=0; $i<count($sections); $i++){
            if($this->processTitle($sections[$i]->getTitle())==$this->processTitle($title)){
                return $sections[$i]; //Found it!
            }
        }
        return false;
	}
	
	public function processTitle($string){
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   		$string =  preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
		return strtolower($string);	//Makes string lower case and returns
	}


}