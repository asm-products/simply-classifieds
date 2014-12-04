<?php

namespace Stevebauman\Classifieds\Services;

use Yangqi\Htmldom\Htmldom;

class KijijiTransferService {
    
    /*
     * Stores the Ad title
     */
    public $title = '';
    
    /*
     * Stores the ad description
     */
    public $description = '';
    
    /*
     * Stores the ad image sources
     */
    public $images = array();
    
    /*
     * URL for retrieving hi-res Ad images rather than thumbnails
     */
    protected $imageUrl = 'http://www.kijiji.ca/v-view-image.html?adId=%s';
    
    /*
     * Stores Htmldom object for parsing the ad content
     */
    private $domContent;
    
    /*
     * Stores the Htmldom object for parsing the image sources
     */
    private $domImages;
    
    public function __construct(Htmldom $html)
    {
        $this->html = new $html;
    }
    
    public function transfer($url)
    {
        
        /*
         * Create a new HTMLDom for ad details
         */
        $this->domContent = new $this->html($url);
        
        /*
         * Retrieve Ad ID for high resolution photo retrieval
         */
        $adId = $this->getAdId($url);
        /*
         * Create a new HTMLDom for ad images
         */
        $this->domImages = new $this->html(sprintf($this->imageUrl, $adId));
        
        /*
         * Set Ad Object Attributes
         */
        $this->setAdTitle();
        $this->setAdDescription();
        $this->setAdPhotos();
        
        /*
         * Return Ad Object
         */
        return $this;
    }
    
    /**
     * Returns the kijiji ad ID from the URL given
     * 
     * @param type $url
     * @return type
     */
    private function getAdId($url){
        $segments = explode('/', $url);
        
        foreach($this->domContent->find('div[id=UserContent]') as $content){
            
            $r = utf8_decode('Â');
        
            $this->description .= str_replace($r, '', $content);
            
        }
        
        return strtok(last($segments), '?');
    }
    
    /**
     * Sets the title attribute to the Kijiji Ad title
     * 
     * @return Void
     */
    private function setAdTitle(){
        $content = $this->domContent->find('span[itemprop=name] h1');
        
        foreach($content as $title){
            $this->title .= trim($title);
        }
    }
    
    /**
     * Sets the description attribute to the Kijiji Ad's description
     * 
     * @return Void
     */
    private function setAdDescription(){
        foreach($this->domContent->find('div[id=UserContent]') as $content){
            $r = utf8_decode('Â');
        
            $this->description .= str_replace($r, '', $content);
        }
       
    }
    
    /**
     * Sets the images attribute to an array of the Kijiji Ad's image sources
     * 
     * @return Void
     */
    private function setAdPhotos(){
         foreach($this->domImages->find('ul[class=photo-navigation]') as $list){
            foreach($list->find('img') as $photo){
                $this->images[] = $photo->src;
            }
        }
    }
    
} 