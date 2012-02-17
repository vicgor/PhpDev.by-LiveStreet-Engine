<?php
class PluginGravatar_ModuleGravatar_EntityUser extends PluginGravatar_Inherit_ModuleUser_EntityUser {

    public function getProfileAvatarPath($iSize=100) {
        if ($sPath=$this->getProfileAvatar()) {
          return parent::getProfileAvatarPath($iSize);
    	} else {
    		return "http://www.gravatar.com/avatar/".md5( strtolower($this->getMail()) )."?s=$iSize&d=mm";
    	}
    }

}
?>
