<?php

final class MyaccountController{
    public function defaultAction(): void{
        $A_user = Users::getOne(Session::getSession()['id']);
        View::show("myaccount/myaccount", $A_user);
    }
}