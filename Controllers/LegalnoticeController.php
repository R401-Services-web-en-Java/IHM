<?php

final class LegalnoticeController
{
    public function defaultAction(): void{
        View::show("legalnotice/legalnotice");
    }

    public function generaltermsofuseAction(): void{
        View::show("legalnotice/generaltermsofuse");
    }
}