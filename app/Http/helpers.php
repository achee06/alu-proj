<?php
//app/Helpers/Envato/User.php
 

   
    if(! function_exists('getResult')){
    	function getOutput($node)
    	{
    		if($node->isLeaf()){
    			$output='<li class="nav-item "><a class="nav-link link" href="'.URL::to('pages/'.$node->getValue()->slug).'">'.$node->getValue()->name.'</a></li>';
    		}
    		else {
    			if($node->getValue()->name=='Contact Us')
    			{

    			}
    			else{

                    if ($node->getValue()->content != '') {
                       $output='<li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" aria-expanded="false" href="'.URL::to('pages/'.$node->getValue()->slug).'">'.$node->getValue()->name.'</a>'.'<div class="dropdown-menu">';
                    }
                    else
                    {
                        $output='<li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" aria-expanded="false">'.$node->getValue()->name.'</a><div class="dropdown-menu">';
                    }
    				
    			}

    			foreach($node->getChildren() as $nodec){
    				//$output.= getOutput($node);
    				$output.= '<a class="dropdown-item" href="'.URL::to('pages/'.$nodec->getValue()->slug).'">'.$nodec->getValue()->name.'</a>';
    			}

    			$output.='</div></li>';
    			
    		}
    		return $output;
    	}
    }

    if (! function_exists('printMenu'))
    {
    	function printMenu($tree)
    	{
    		$output='';

    		foreach($tree->getChildren() as $node){
    			$output .= getOutput($node);
    		}

    		return $output;
    	}
    }

     if(! function_exists('getSponsorsMainPage')){
        function getSponsorsMainPage($sponsors){

/*<div class="scroll-down">
<p>Scroll down... </p>
</div>*/
/*<marquee behavior="scroll" direction="left">*/
            

            foreach ($sponsors as $sponsor) {
                //dd($sponsor->name);
                $output .= '<a href="'.$sponsor->url.'" target="blank" title="'. $sponsor->name. '"><img src="'. url($sponsor->image) .'" width="120" height="80" alt="'. $sponsor->name .'" style="margin:10px;" /></a>';
            }

           

            return $output;
        }
     }
