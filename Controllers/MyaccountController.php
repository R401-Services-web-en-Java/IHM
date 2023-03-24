<?php

final class MyaccountController{
    public function defaultAction(): void{
        View::show("myaccount/myaccount");
    }
}