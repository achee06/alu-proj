<?php

namespace App\Http\Middleware;

use Closure;
use App\Pages;
use App\Sponsors;
use Tree\Node\Node;

class BuildNavbar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /* For Navbar*/
        $tableMenu = Pages::whereNotIn('placement',['Sidebar','Sidebar Content'])->where('active','!=','No')->orderBy('parent_page_id','ASC')->orderBy('order')->get();

        $sponsors = Sponsors::where('active','!=','No')->orderBy('created_at','ASC')->get();
        // dd($sponsors);exit;
        $_SESSION["menu"] = $this->buildMenuTree($tableMenu);
        $_SESSION["sponsors"] = $sponsors;
        //dd($_SESSION["menu"]);
        return $next($request);
    }

    private function buildMenuTree($tableMenu){
        $root = (new Node('root'));

        // we ordered it by parent_id and siblings order
        foreach ($tableMenu as $row) {
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

    private function InsertNode($sourceNode,$newNode){
        if($sourceNode->getValue()->id == $newNode->getValue()->parent_page_id){
            $sourceNode->addChild($newNode);
        }
        else{
            foreach($sourceNode->getChildren() as $cursor){
                $this->InsertNode($cursor,$newNode);
            }
        }
        return $sourceNode;
    }
}
