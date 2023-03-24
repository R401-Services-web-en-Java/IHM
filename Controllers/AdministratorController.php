<?php

final class AdministratorController{
    public function defaultAction(): void{
        View::show("administrator/administrator");
    }
}