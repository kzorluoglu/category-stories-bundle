<?php
namespace kzorluoglu\CategoryStoriesBundle\Bridge\Chameleon\Mapper;


use AbstractViewMapper;
use IMapperCacheTriggerRestricted;
use IMapperRequirementsRestricted;
use IMapperVisitorRestricted;

class CategoryStoriesMapper extends AbstractViewMapper
{

    public function GetRequirements(IMapperRequirementsRestricted $oRequirements)
    {
        // TODO: Implement GetRequirements() method.
    }

    public function Accept(
        IMapperVisitorRestricted $oVisitor,
        $bCachingEnabled,
        IMapperCacheTriggerRestricted $oCacheTriggerManager
    ) {
        // TODO: Implement Accept() method.
    }

}
