<?php
/*
 * Copyright (c) 2010 Litotex
 * 
 * Permission is hereby granted, free of charge,
 * to any person obtaining a copy of this software and
 * associated documentation files (the "Software"),
 * to deal in the Software without restriction,
 * including without limitation the rights to use, copy,
 * modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit
 * persons to whom the Software is furnished to do so,
 * subject to the following conditions:
 * 
 * The above copyright notice and this permission notice
 * shall be included in all copies or substantial portions
 * of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 */

include_once('classes/building.class.php');
/**
 * This is just a dummy class to ensure the building class will be loaded...
 * @author Jonas Schwabe <jonas.schwabe@gmail.com>
 * @hooks: None as this class has no features to be serious
 */
class package_core_buildings extends Package{
	protected $_availableActions = array('main');
	/**
	 * Name of the module, please do not change this!
	 * @var string
	 */
    protected $_packageName = 'core_buildings';
    /**
     * Dependencies, we need quite a lot of them ;)
     * @var array
     */
    public static $dependency = array('core_ressource', 'core_territory', 'core_race');
    /**
     * Only loads the building class
     * @see packages/core/classes/package::__action_main()
     * @return bool
     */
	public function __action_main(){
		if(!Package::$user)return false;
		$territory = territory::getUserTerritories(Package::$user);
		self::$tpl->assign("buildings", $territory[0]->getBuildings());
		$buildings = $territory[0]->getBuildings();
		$territory[0]->increaseBuildingLevel(1);
		return true;
	}
	/**
	 * As I wrote above, no hooks ;)
	 * @return bool
	 */
	public static function registerHooks(){
//		self::_registerHook('plugin_buildingRessource', 'manipulateBuildingCost', 1, 'manipulateBuildingCost', LITO_PLUGIN_ROOT . 'buildings/buildingRessource.plugin.php', 'core_buildings');
		return true;
	}
}