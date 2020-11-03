<?php

include_once("RenderPage.php");
class Main
{
    private $renders=[];
    private $pageSize;

    public function __construct($masInfo,$pageSize)
    {
        if($pageSize>0)
        {
            $this->pageSize = $pageSize;
        }
        else
        {
            $this->pageSize = 5;
        }

        $counter=intval(count($masInfo)/$pageSize);

        for($r=0;$r<$counter;$r++)
        {
            $tmpmas=[];
            for($t=0;$t<$this->pageSize;$t++)
            {
                array_push($tmpmas,$masInfo[$r*$this->pageSize+$t]);
            }
            array_push($this->renders,new RenderPage($tmpmas));
        }
        if($counter*$this->pageSize<count($masInfo))
        {
            $tmpeho=count($masInfo)-$counter*$this->pageSize;
            $tmpmas=[];
            for($j=$counter*$this->pageSize;$j<$counter*$this->pageSize+$tmpeho;$j++)
            {
                array_push($tmpmas,$masInfo[$j]);
            }
            array_push($this->renders,new RenderPage($tmpmas));
        }


    }


    public function RenderBy($pagenum)
    {
        if($pagenum>count($this->renders) || $pagenum==0)
        {
            return '<h1>ERROR 404! PAGE NOT FOUND!</h1><button style="width: 200px;" name="Plage" value="'.$_COOKIE['last'].'">Return Last Page</button>';
        }
        setcookie("last",$pagenum);

        $tmph='';
        for($k=0;$k<count($this->renders);$k++)
        {
            $tmph=$tmph.'<button class="btnPages" name="Plage" value="'.($k+1).'">'.($k+1).'</button>';
        }

        return $this->renders[$pagenum-1]->Render().$tmph;



    }



}