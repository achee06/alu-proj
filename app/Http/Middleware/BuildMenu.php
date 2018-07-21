<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\BuildMenu as Middleware;
use Tree\Node\Node;
class BuildMenu extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $tableMenu = Pages::orderBy('parent_page_id','ASC')->orderBy('order')->get();
        //print_r($tableMenu);exit;
        $_SESSION["menu"] = $this->buildMenuTree($tableMenu);
        //dd($_SESSION["menu"]);
        return $next($request);
    }

    private function buildMenuTree($tableMenu){
    	$root = (new Node('root'));

    	// we ordered it by parent_id and siblings order
    	foreach ($$tableMenu as $row) {
    		//we need to navigate through root and put each node in its correct position.
    		$node = new Node($row);

    		if($node->getValue()->parent_page_id == '0'){
    			$root->addChild($node);
    		}
    		else
    		{
    			foreach($root->getChildren() as $cursor){
    				$this->InsertNode($cursor,$node);
    			}
    		}
    	}
    	return $root;
    }

    private function InserNode($sourceNode,$newNode){
    	if($sourceNode->getValue()->id == $newNode->getValue()->parent_page_id){
    		$sourceNode->addChild($newNode);
    	}
    	else{
    		foreach($sourceNode->getChildren() as $cursor){
    			$this->InserNode($cursor,$newNode);
    		}
    	}
    	return $sourceNode;
    }
}
