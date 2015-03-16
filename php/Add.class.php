<?php


class AddSection{

    public function appendSection($title, $description, $id=0, $author,
                               $youtube, $prezi, $googleDoc, $article, $links){

        $sectionNode = new SimpleXMLElement($this->fetchXmlDocument());
        $sectionNode->addChild("title");
        $sectionNode->addChild("description");
        $sectionNode->addChild("id");
        $sectionNode->addChild("author");
        $sectionNode->addChild("youtube");
        $sectionNode->addChild("prezi");
        $sectionNode->addChild("googleDoc");
        $sectionNode->addChild("links");




    }

    private function fetchXmlDocument(){
        return "<content>
    <section >
        <title>HTML5 Introduction</title>
        <id>1</id>
        <description>Everything you need to know to get started with HTML5</description>
        <youtube/>
        <prezi>
            http://prezi.com/embed/n4wcoyyf7k1j/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;features=undefined&amp;disabled_features=undefined
        </prezi>
        <googleDoc/>
        <article/>
        <links>
            <link>
                <text>List of all HTML tags</text>
                <path>http://www.w3schools.com/tags/</path>
            </link>
            <link>
                <text>List of all Doctypes</text>
                <path>http://www.w3.org/QA/2002/04/valid-dtd-list.html</path>
            </link>
            <link>
                <text>Elements new to HTML5</text>
                <path>http://www.w3schools.com/html/html5_new_elements.asp</path>
            </link>
            <link>
                <text>W3 HTML Validator</text>
                <path>http://validator.w3.org/</path>
            </link>
        </links>
        <author>Alicia Sykes</author>
    </section>

    <section >
        <id>2</id>
        <title>CSS Introduction</title>
        <description>Key information you need to know to get started and use CSS3 for styling your web pages</description>
        <youtube/>
        <prezi>
            http://prezi.com/embed/xt7lxl9fjwco/?bgcolor=ffffff&amp;lock_to_path=0&amp;autoplay=0&amp;autohide_ctrls=0&amp;features=undefined&amp;disabled_features=undefined
        </prezi>
        <googleDoc/>
        <article/>
        <links>
            <link>
                <text>List of CSS Acceptable Selectors</text>
                <path>http://www.w3schools.com/cssref/css_selectors.asp</path>
            </link>
            <link>
                <text>CSS Tricks - Really good reference blog with loads of CSS tips and tricks, makes a good read </text>
                <path>http://css-tricks.com/</path>
            </link>
        </links>
        <author>Alicia Sykes</author>
    </section>

    <section >
        <title>JavaScript Introduction</title>
        <id>3</id>
        <description>Getting started with client-side scripting using JavaScript</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Further JavaScript and jQuery</title>
        <id>3</id>
        <description>Introduction of jQuery and how to use pre-made plugins</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Introduction to PHP</title>
        <id>4</id>
        <description>The basic concepts of programming and an introdction to server-side scripting</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Further PHP</title>
        <id>5</id>
        <description>More PHP features and techniques, as well as some interactive examples</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Object-Orientated PHP</title>
        <id>6</id>
        <description>Introduction to Object Orientated programming, and how this can be implemented with PHP</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Introduction to web hosting</title>
        <id>7</id>
        <description>How to get your site online</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Configuring a Linux VPS</title>
        <id>8</id>
        <description>How to set up and manage a Linux VPS, using the command line</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Search Engine Optimisation</title>
        <id>9</id>
        <description>What SEO is, and how you can make your site rank higher in search results</description>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>
    <section >
        <title>Web Design Concepts</title>
        <id>10</id>
        <description/>
        <youtube/>
        <prezi/>
        <googleDoc/>
        <article/>
        <links/>
        <author>Alicia Sykes</author>
    </section>

</content>";
    }

}

?>