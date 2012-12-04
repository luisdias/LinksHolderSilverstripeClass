<?php
/*
MIT License

Copyright (c) 2012 Luis E. S. Dias - smartbyte.systems@gmail.com

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
"Software"), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/
class LinksHolder extends Page {
    
    static $has_many = array(
        'Links' => 'Link'
    );     

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $linksTable = new ComplexTableField(
                $this, 
                'Links', 
                'Link', 
                array(
                    'SiteName'=>'Site Name',
                    'SiteUrl'=>'Site Url'
                    )
                );
        $fields->addFieldToTab('Root.Content.Links', $linksTable);
        return $fields;
    }    
    
}

class LinksHolder_Controller extends Page_Controller {
    
}