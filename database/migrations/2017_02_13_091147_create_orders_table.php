<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->nullable()->default(null);
            $table->integer('user_id')->nullable()->default(null);
            $table->integer('hotel_id');
            $table->string('hotel_name');
            $table->text('rooms');
            $table->integer('day');
            $table->date('startdate');
            $table->date('enddate');
            $table->text('pickup')->nullable()->default(null);
            $table->integer('price')->nullable()->default(null);
            $table->float('price_dollar')->nullable()->default(null);
            $table->float('dollar_rate')->nullable()->default(null);
            $table->text('carddata');
            $table->text('userdata');
            $table->text('request')->nullable()->default(null);
            $table->integer('status')->default(1);
            $table->timestamps();
        });

        $orders = [
            [
                "objectId" => "0DUXgIVvRz",
                "updatedAt" => "2016-07-04T13:34:47.879Z",
                "days" => 2,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "PlKxG8fZOX"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "status" => 0,
                "end" => "2016-07-16",
                "total" => "169",
                "start" => "2016-07-14",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "qty" => 1,
                "sim" => "empty",
                "pickup" => "empty",
                "createdAt" => "2016-07-04T13:34:47.879Z"
            ],
            [
                "objectId" => "0PenrwMQrn",
                "total" => "408000",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "YFh9UZtvIC"
                ],
                "updatedAt" => "2016-08-17T07:48:05.607Z",
                "qty" => 2,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "createdAt" => "2016-08-17T07:48:05.607Z",
                "pickup" => "empty",
                "days" => 30,
                "status" => 0,
                "sim" => ""
            ],
            [
                "objectId" => "0qYY8LGCaA",
                "qty" => 1,
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "wDwgLfgDde"
                ],
                "status" => 0,
                "start" => "2016-07-12",
                "days" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "total" => "109",
                "updatedAt" => "2016-07-04T05:35:31.321Z",
                "end" => "2016-07-15",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "sim" => "empty",
                "createdAt" => "2016-07-04T04:42:34.350Z",
                "order_id" => "0qYY8LGCaA"
            ],
            [
                "objectId" => "0yMdCKKDq1",
                "sim" => "empty",
                "updatedAt" => "2016-07-05T14:50:11.769Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "createdAt" => "2016-07-05T14:50:11.769Z",
                "start" => "2016-07-14",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "days" => 2,
                "total" => "268",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "end" => "2016-07-16",
                "qty" => 1,
                "pickup" => "empty",
                "status" => 0
            ],
            [
                "objectId" => "0ytF3630ey",
                "sim" => "empty",
                "updatedAt" => "2016-07-05T02:09:13.601Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "end" => "2016-07-16",
                "status" => 0,
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "createdAt" => "2016-07-04T12:57:08.832Z",
                "start" => "2016-07-14",
                "total" => "1140",
                "days" => 2
            ],
            [
                "objectId" => "1ET9CwK6Op",
                "pickup" => "empty",
                "total" => "189",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "start" => "2016-07-12",
                "sim" => "empty",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "zToHSBPnAD"
                ],
                "days" => 5,
                "createdAt" => "2016-07-04T12:32:23.748Z",
                "updatedAt" => "2016-07-04T12:32:23.748Z",
                "end" => "2016-07-17"
            ],
            [
                "objectId" => "1KO8ewWfhH",
                "total" => "1206",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "1Rv37wx14w"
                ],
                "start" => "2016-07-14",
                "pickup" => "empty",
                "updatedAt" => "2016-07-12T01:37:31.368Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "createdAt" => "2016-07-12T01:37:31.368Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "sim" => "empty",
                "status" => 0,
                "qty" => 3,
                "days" => 3,
                "end" => "2016-07-17"
            ],
            [
                "objectId" => "1c32RHJyKn",
                "status" => 0,
                "createdAt" => "2016-07-07T07:51:56.732Z",
                "total" => "327",
                "days" => 2,
                "end" => "2016-07-16",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "start" => "2016-07-14",
                "updatedAt" => "2016-07-07T07:51:56.732Z",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "qty" => 3,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "zubnVyNwBD"
                ],
                "sim" => "empty"
            ],
            [
                "objectId" => "1oI8g4iI2u",
                "start" => "2016-12-15",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WnyrNZ6kao"
                ],
                "pickup" => "empty",
                "updatedAt" => "2016-12-15T06:39:58.456Z",
                "end" => "2016-12-15",
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "rAoKCNUn9Y"
                ],
                "total" => "121000",
                "createdAt" => "2016-12-15T06:39:58.456Z",
                "days" => 0,
                "status" => 0
            ],
            [
                "objectId" => "1p3plZbv8h",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rm3jSTrjjs"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "qty" => 2,
                "status" => 0,
                "start" => "2016-07-14",
                "end" => "2016-07-16",
                "days" => 2,
                "updatedAt" => "2016-07-07T07:54:45.564Z",
                "total" => "380",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "zubnVyNwBD"
                ],
                "createdAt" => "2016-07-07T07:54:45.564Z",
                "sim" => "empty",
                "pickup" => "empty"
            ],
            [
                "objectId" => "1wuTm0pH8z",
                "total" => "218",
                "qty" => 1,
                "createdAt" => "2016-07-01T09:44:30.074Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "updatedAt" => "2016-07-01T09:44:44.816Z",
                "end" => "2016-07-17",
                "days" => 5,
                "start" => "2016-07-12",
                "pickup" => "budget",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "order_id" => "1wuTm0pH8z"
            ],
            [
                "objectId" => "2AtmT7qXC0",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "sim" => "empty",
                "total" => "109",
                "updatedAt" => "2016-07-04T08:41:47.218Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "wDwgLfgDde"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "pickup" => "empty",
                "qty" => 1,
                "end" => "2016-07-15",
                "createdAt" => "2016-07-04T08:41:02.977Z",
                "days" => 3,
                "start" => "2016-07-12",
                "status" => 0,
                "order_id" => "2AtmT7qXC0"
            ],
            [
                "objectId" => "2QML4OBbef",
                "start" => "2016-07-14",
                "days" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "total" => "222",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "createdAt" => "2016-07-05T14:55:55.944Z",
                "updatedAt" => "2016-07-05T14:55:55.944Z",
                "end" => "2016-07-16",
                "sim" => "empty",
                "status" => 0,
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "pickup" => "empty"
            ],
            [
                "objectId" => "2REyhd0fEU",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2016-06-13T15:47:37.182Z",
                "days" => 5,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Q3408nXD4M"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "updatedAt" => "2016-06-13T15:47:37.182Z",
                "start" => "2016-07-11",
                "qty" => 1,
                "total" => "134",
                "end" => "2016-07-16",
                "pickup" => "empty"
            ],
            [
                "objectId" => "2XnLF2pOkJ",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2016-07-12",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "r0squz51SU"
                ],
                "updatedAt" => "2016-07-04T04:47:36.877Z",
                "end" => "2016-07-21",
                "qty" => 1,
                "total" => "169",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "days" => 9,
                "pickup" => "empty",
                "createdAt" => "2016-07-04T04:47:36.877Z"
            ],
            [
                "objectId" => "34IDCozkWH",
                "status" => 0,
                "sim" => "empty",
                "start" => "2017-06-07",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ymQdnWLcoi"
                ],
                "end" => "2017-06-13",
                "pickup" => "empty",
                "qty" => 1,
                "days" => 6,
                "createdAt" => "2017-01-13T09:03:37.208Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c0FKL4XxW6"
                ],
                "updatedAt" => "2017-01-13T09:03:37.208Z",
                "total" => "1260"
            ],
            [
                "objectId" => "3bWZUzuo1B",
                "total" => "338",
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "sim" => "empty",
                "end" => "2016-06-26",
                "updatedAt" => "2016-06-21T10:20:22.148Z",
                "start" => "2016-06-21",
                "status" => 0,
                "createdAt" => "2016-06-21T10:20:22.148Z",
                "qty" => 2,
                "pickup" => "empty"
            ],
            [
                "objectId" => "4GLikS3hoP",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3gMwWpMQs5"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "total" => "338",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "end" => "2016-07-17",
                "start" => "2016-07-13",
                "status" => 0,
                "updatedAt" => "2016-06-24T08:06:09.902Z",
                "pickup" => "empty",
                "createdAt" => "2016-06-24T08:06:09.902Z",
                "sim" => "empty",
                "days" => 4,
                "qty" => 2
            ],
            [
                "objectId" => "4ST8DyNbZP",
                "updatedAt" => "2016-07-05T07:46:14.964Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "pickup" => "empty",
                "end" => "2016-07-15",
                "start" => "2016-07-12",
                "total" => "4455",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "A9nPsopwDC"
                ],
                "qty" => 3,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3yf0JZQnoA"
                ],
                "createdAt" => "2016-07-05T07:46:14.964Z",
                "sim" => "empty",
                "status" => 0,
                "days" => 3
            ],
            [
                "objectId" => "4XrGwVK5Fi",
                "total" => "600",
                "start" => "2016-07-12",
                "end" => "2016-07-14",
                "status" => 1,
                "qty" => 1,
                "days" => 2,
                "sim" => "empty",
                "createdAt" => "2016-06-27T07:15:51.338Z",
                "pickup" => "empty",
                "updatedAt" => "2016-07-06T04:47:25.693Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UrQoBRxsqh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "8yoSgtSCKY"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "order_id" => "4XrGwVK5Fi"
            ],
            [
                "objectId" => "4fYAWbrCLY",
                "qty" => 3,
                "end" => "2016-07-17",
                "pickup" => "empty",
                "days" => 5,
                "start" => "2016-07-12",
                "updatedAt" => "2016-07-03T04:47:09.722Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "total" => "360",
                "createdAt" => "2016-07-03T04:47:01.225Z",
                "sim" => "empty",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "order_id" => "4fYAWbrCLY"
            ],
            [
                "objectId" => "51fk33jjmE",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "start" => "2016-07-12",
                "pickup" => "empty",
                "qty" => 1,
                "total" => "670",
                "end" => "2016-07-17",
                "createdAt" => "2016-07-05T03:06:20.606Z",
                "days" => 5,
                "updatedAt" => "2016-07-05T03:06:20.606Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ],
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ]
            ],
            [
                "objectId" => "5PG3RJFXHZ",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "status" => 0,
                "days" => 3,
                "createdAt" => "2016-05-12T04:14:25.134Z",
                "updatedAt" => "2016-05-12T04:14:25.134Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "PcB6v0hCue"
                ],
                "start" => "2016-07-14",
                "total" => "169",
                "end" => "2016-07-17",
                "pickup" => "empty"
            ],
            [
                "objectId" => "5iy9MPbdTA",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "days" => 3,
                "sim" => "empty",
                "total" => "134",
                "qty" => 1,
                "createdAt" => "2016-06-16T09:37:17.735Z",
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l7Fa0k5cJS"
                ],
                "updatedAt" => "2016-06-16T09:37:17.735Z",
                "start" => "2016-07-14"
            ],
            [
                "objectId" => "5lKxgxxOUu",
                "updatedAt" => "2016-07-05T14:53:53.420Z",
                "days" => 2,
                "total" => "268",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "createdAt" => "2016-07-05T14:53:53.420Z",
                "qty" => 1,
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "end" => "2016-07-16",
                "start" => "2016-07-14",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "pickup" => "empty",
                "status" => 0
            ],
            [
                "objectId" => "5rye2IMRaA",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "enRG7xLTQj"
                ],
                "qty" => 1,
                "end" => "2017-06-12",
                "days" => 4,
                "createdAt" => "2017-01-16T10:40:12.789Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "GZkZUYe4Rr"
                ],
                "start" => "2017-06-08",
                "pickup" => "empty",
                "status" => 0,
                "sim" => "empty",
                "updatedAt" => "2017-01-16T10:40:12.789Z",
                "total" => "200"
            ],
            [
                "objectId" => "5y6kECwXTy",
                "updatedAt" => "2016-07-05T15:00:37.261Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "qty" => 1,
                "end" => "2016-07-16",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "status" => 0,
                "sim" => "empty",
                "total" => "268",
                "createdAt" => "2016-07-05T15:00:37.261Z",
                "start" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "days" => 2
            ],
            [
                "objectId" => "61K8PJMMbq",
                "createdAt" => "2016-06-14T09:44:24.893Z",
                "end" => "2016-07-17",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "total" => "360",
                "start" => "2016-07-14",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FMP8sj4bQY"
                ],
                "days" => 3,
                "updatedAt" => "2016-06-14T09:44:24.893Z",
                "qty" => 3,
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ]
            ],
            [
                "objectId" => "62EnRxuOte",
                "createdAt" => "2016-07-05T06:10:15.411Z",
                "days" => 2,
                "total" => "436",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "end" => "2016-07-16",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "qty" => 1,
                "status" => 0,
                "sim" => "empty",
                "updatedAt" => "2016-07-05T06:10:15.411Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "M3ste4niYr"
                ],
                "start" => "2016-07-14"
            ],
            [
                "objectId" => "67V5p71QM1",
                "start" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "axmpgpADtT"
                ],
                "qty" => 2,
                "updatedAt" => "2016-07-05T08:12:35.060Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "NoS96HcMJo"
                ],
                "days" => 1,
                "end" => "2016-07-15",
                "total" => "540",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "sim" => "empty",
                "status" => 1,
                "createdAt" => "2016-06-28T07:56:12.029Z",
                "order_id" => "67V5p71QM1"
            ],
            [
                "objectId" => "6PLZ8itPPq",
                "start" => "2016-07-07",
                "days" => 5,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "status" => 0,
                "createdAt" => "2016-07-07T09:25:04.649Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Jiwk8TOXWM"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "q0eyY9f5np"
                ],
                "sim" => "empty",
                "pickup" => "empty",
                "qty" => 1,
                "end" => "2016-07-12",
                "updatedAt" => "2016-07-07T09:52:57.718Z",
                "total" => "685",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "WkRfknbeFh"
                ],
                "order_id" => "6PLZ8itPPq"
            ],
            [
                "objectId" => "6YcZPmQYJY",
                "sim" => "empty",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "updatedAt" => "2016-07-03T04:51:34.903Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "days" => 5,
                "end" => "2016-07-17",
                "pickup" => "empty",
                "createdAt" => "2016-07-03T04:51:22.666Z",
                "qty" => 3,
                "total" => "360",
                "start" => "2016-07-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "order_id" => "6YcZPmQYJY"
            ],
            [
                "objectId" => "6rkr0oRf6o",
                "sim" => "empty",
                "updatedAt" => "2016-07-05T06:10:15.567Z",
                "start" => "2016-07-14",
                "end" => "2016-07-16",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "M3ste4niYr"
                ],
                "pickup" => "empty",
                "days" => 2,
                "qty" => 1,
                "createdAt" => "2016-07-05T06:10:15.567Z",
                "total" => "436",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ]
            ],
            [
                "objectId" => "6tT8ER3aiZ",
                "total" => "164000",
                "createdAt" => "2016-09-01T04:28:04.847Z",
                "qty" => 1,
                "status" => 0,
                "days" => -57,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "updatedAt" => "2016-09-01T04:28:04.847Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "lDSwy1Oijd"
                ],
                "pickup" => "empty",
                "sim" => "",
                "start" => "2016-09-08",
                "end" => "2016-07-13"
            ],
            [
                "objectId" => "6trC1LEjSh",
                "end" => "2016-07-15",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "A9nPsopwDC"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "total" => "495",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3yf0JZQnoA"
                ],
                "pickup" => "empty",
                "updatedAt" => "2016-07-05T08:03:34.284Z",
                "createdAt" => "2016-07-05T08:03:34.284Z",
                "days" => 3,
                "start" => "2016-07-12",
                "sim" => "empty",
                "status" => 0,
                "qty" => 1
            ],
            [
                "objectId" => "75dGh8Gl6u",
                "total" => "536",
                "pickup" => "vip",
                "start" => "2016-07-14",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "createdAt" => "2016-06-17T07:58:20.405Z",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rc28eeL0tB"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "status" => 0,
                "end" => "2016-07-18",
                "updatedAt" => "2016-06-17T07:58:20.405Z",
                "qty" => 4,
                "days" => 4
            ],
            [
                "objectId" => "7OrvmSPmg4",
                "status" => 0,
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "sim" => "empty",
                "days" => 5,
                "start" => "2016-07-12",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "createdAt" => "2016-07-05T04:29:36.619Z",
                "total" => "670",
                "qty" => 1,
                "updatedAt" => "2016-07-05T04:29:36.619Z",
                "end" => "2016-07-17"
            ],
            [
                "objectId" => "7hLnaEtp6m",
                "start" => "2016-07-13",
                "pickup" => "empty",
                "days" => 4,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ],
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "sim" => "empty",
                "total" => "536",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "status" => 1,
                "end" => "2016-07-17",
                "updatedAt" => "2016-07-06T04:46:04.055Z",
                "createdAt" => "2016-07-01T10:40:44.775Z",
                "order_id" => "7hLnaEtp6m"
            ],
            [
                "objectId" => "7v3f5qz2XV",
                "updatedAt" => "2016-07-06T03:56:30.405Z",
                "start" => "2016-07-12",
                "qty" => 1,
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "status" => 0,
                "end" => "2016-07-17",
                "sim" => "sim3",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "createdAt" => "2016-07-06T03:56:30.405Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HCGkU0O6jw"
                ],
                "total" => "670"
            ],
            [
                "objectId" => "84NFdeMSzN",
                "updatedAt" => "2016-07-03T16:34:46.223Z",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "days" => 2,
                "status" => 0,
                "start" => "2016-07-14",
                "end" => "2016-07-16",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "sPCu386JcB"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "createdAt" => "2016-07-03T16:34:46.223Z",
                "total" => "169",
                "sim" => "empty",
                "qty" => 1
            ],
            [
                "objectId" => "8A2yLRU8DH",
                "updatedAt" => "2016-09-26T08:39:41.764Z",
                "sim" => "",
                "start" => "2016-09-26",
                "days" => 5,
                "qty" => 2,
                "total" => "396000",
                "end" => "2016-10-01",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "createdAt" => "2016-09-26T08:39:41.764Z",
                "status" => 0,
                "pickup" => "empty"
            ],
            [
                "objectId" => "8BC3f85AbC",
                "total" => "268",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "days" => 2,
                "updatedAt" => "2016-07-06T09:09:04.128Z",
                "sim" => "empty",
                "pickup" => "empty",
                "end" => "2016-07-16",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "createdAt" => "2016-07-06T09:09:04.128Z",
                "qty" => 1,
                "start" => "2016-07-14",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ]
            ],
            [
                "objectId" => "8T5ZwKwoen",
                "createdAt" => "2016-06-24T07:11:58.635Z",
                "days" => 2,
                "sim" => "empty",
                "end" => "2016-07-14",
                "updatedAt" => "2016-07-06T04:48:58.446Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "8yoSgtSCKY"
                ],
                "pickup" => "empty",
                "qty" => 1,
                "total" => "600",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "status" => 1,
                "start" => "2016-07-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "A9nPsopwDC"
                ],
                "order_id" => "8T5ZwKwoen"
            ],
            [
                "objectId" => "8Zu94tHcCK",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "updatedAt" => "2016-05-12T04:19:14.243Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "PcB6v0hCue"
                ],
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "days" => 3,
                "status" => 0,
                "start" => "2016-07-14",
                "pickup" => "empty",
                "total" => "134",
                "qty" => 1,
                "createdAt" => "2016-05-12T04:19:14.243Z"
            ],
            [
                "objectId" => "94TbVS7UJA",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "start" => "2016-11-29",
                "status" => 0,
                "sim" => "",
                "total" => "155000",
                "pickup" => "budget",
                "qty" => 1,
                "createdAt" => "2016-11-29T07:08:46.268Z",
                "updatedAt" => "2016-11-29T07:08:46.268Z",
                "end" => "2016-11-29",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "days" => 0
            ],
            [
                "objectId" => "9Db0RusKSF",
                "total" => "430000",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Z5WyjvyzOP"
                ],
                "status" => 0,
                "pickup" => "empty",
                "days" => 2,
                "createdAt" => "2016-12-20T09:18:17.316Z",
                "updatedAt" => "2016-12-20T09:18:17.316Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6VSsxUSqRr"
                ],
                "sim" => "",
                "start" => "2016-12-28",
                "end" => "2016-12-30"
            ],
            [
                "objectId" => "9pJVIvNPBm",
                "end" => "2016-07-15",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "wDwgLfgDde"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "total" => "109",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "updatedAt" => "2016-07-04T04:52:39.329Z",
                "days" => 3,
                "status" => 0,
                "pickup" => "empty",
                "qty" => 1,
                "createdAt" => "2016-07-04T04:50:45.624Z",
                "start" => "2016-07-12",
                "sim" => "empty",
                "order_id" => "9pJVIvNPBm"
            ],
            [
                "objectId" => "9uto1R1HF8",
                "sim" => "empty",
                "total" => "169",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "end" => "2016-07-16",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "pickup" => "empty",
                "days" => 2,
                "updatedAt" => "2016-07-01T15:32:08.543Z",
                "qty" => 1,
                "start" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "createdAt" => "2016-07-01T15:32:08.543Z"
            ],
            [
                "objectId" => "AB6wAM3sob",
                "days" => 2,
                "qty" => 1,
                "createdAt" => "2016-07-01T13:04:19.177Z",
                "updatedAt" => "2016-07-01T13:04:19.177Z",
                "end" => "2016-07-16",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "total" => "118",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CDj3eFNZC8"
                ],
                "start" => "2016-07-14",
                "status" => 0
            ],
            [
                "objectId" => "AIBMDke4kB",
                "days" => 7,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ],
                "createdAt" => "2016-07-05T09:37:23.375Z",
                "qty" => 1,
                "updatedAt" => "2016-07-05T09:37:23.375Z",
                "sim" => "empty",
                "status" => 0,
                "pickup" => "budget",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Byn4ntwnlW"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "end" => "2016-07-17",
                "total" => "1309",
                "start" => "2016-07-10"
            ],
            [
                "objectId" => "AzQg6PI1GY",
                "pickup" => "empty",
                "status" => 0,
                "total" => "155000",
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "days" => 5,
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "end" => "2017-01-15",
                "createdAt" => "2017-01-10T11:05:05.406Z",
                "updatedAt" => "2017-01-10T11:05:05.406Z",
                "start" => "2017-01-10"
            ],
            [
                "objectId" => "B0WQnA6cyX",
                "status" => 0,
                "start" => "2016-06-01",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "lDSwy1Oijd"
                ],
                "end" => "2016-07-01",
                "qty" => 1,
                "createdAt" => "2016-12-28T08:02:26.975Z",
                "updatedAt" => "2016-12-28T08:02:26.975Z",
                "total" => "164000",
                "pickup" => "empty",
                "sim" => "",
                "days" => 30
            ],
            [
                "objectId" => "BEetDrn1Ut",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "createdAt" => "2016-07-06T04:08:32.711Z",
                "qty" => 1,
                "status" => 0,
                "total" => "670",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HCGkU0O6jw"
                ],
                "sim" => "sim3",
                "updatedAt" => "2016-07-06T04:08:32.711Z",
                "start" => "2016-07-12",
                "end" => "2016-07-17",
                "pickup" => "empty",
                "days" => 5
            ],
            [
                "objectId" => "BVH620kTBT",
                "total" => "500000",
                "createdAt" => "2016-08-18T12:36:32.480Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "SvTXmdzBbz"
                ],
                "end" => "2016-08-19",
                "sim" => "",
                "start" => "2016-08-18",
                "status" => 0,
                "days" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "BnpxX2msg0"
                ],
                "updatedAt" => "2016-08-18T12:36:32.480Z",
                "qty" => 1,
                "pickup" => "empty"
            ],
            [
                "objectId" => "CDntndK5Jg",
                "qty" => 1,
                "total" => "210",
                "status" => -1,
                "days" => 9,
                "pickup" => "empty",
                "end" => "2017-06-13",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "createdAt" => "2017-01-15T10:46:39.069Z",
                "updatedAt" => "2017-01-15T10:54:30.046Z",
                "sim" => "empty",
                "start" => "2017-06-04",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7sqrLzSQ2L"
                ],
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "TuZzUjtWzZ"
                ],
                "order_id" => "CDntndK5Jg",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ymQdnWLcoi"
                ]
            ],
            [
                "objectId" => "COzkpUSm66",
                "start" => "2016-07-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "sim" => "empty",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oncARwqBKb"
                ],
                "end" => "2016-07-18",
                "updatedAt" => "2016-06-10T09:46:21.895Z",
                "total" => "804",
                "pickup" => "empty",
                "createdAt" => "2016-06-10T09:46:21.895Z",
                "days" => 6,
                "qty" => 6,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ]
            ],
            [
                "objectId" => "CWDRsY6haa",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "pickup" => "empty",
                "end" => "2016-07-18",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "MrS9C9cTRM"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "days" => 7,
                "status" => 1,
                "createdAt" => "2016-06-21T11:10:45.915Z",
                "total" => "1183",
                "start" => "2016-07-11",
                "updatedAt" => "2016-07-06T04:50:51.175Z",
                "order_id" => "CWDRsY6haa"
            ],
            [
                "objectId" => "Clhu1a0aSD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "e7IeRV7BLk"
                ],
                "days" => 9,
                "createdAt" => "2016-06-27T09:39:04.409Z",
                "total" => "169",
                "updatedAt" => "2016-06-27T09:39:12.078Z",
                "start" => "2016-07-08",
                "end" => "2016-07-17",
                "status" => 0,
                "qty" => 1,
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "order_id" => "Clhu1a0aSD"
            ],
            [
                "objectId" => "DfxkPS0Epm",
                "updatedAt" => "2016-06-21T10:16:04.793Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "start" => "2016-07-12",
                "pickup" => "empty",
                "end" => "2016-07-17",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "days" => 5,
                "total" => "338",
                "createdAt" => "2016-06-21T10:16:04.793Z",
                "qty" => 2,
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "sim" => "empty"
            ],
            [
                "objectId" => "DiunbrPvbk",
                "total" => "670",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "updatedAt" => "2016-07-11T03:07:59.941Z",
                "status" => -1,
                "createdAt" => "2016-07-11T03:07:07.651Z",
                "start" => "2016-07-12",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "J3FisBBEmx"
                ],
                "qty" => 1,
                "end" => "2016-07-17",
                "days" => 5,
                "sim" => "sim3",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "f9ROkQJH02"
                ],
                "order_id" => "DiunbrPvbk"
            ],
            [
                "objectId" => "DsNNkIBk3x",
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "qty" => 1,
                "total" => "155000",
                "createdAt" => "2017-01-08T07:49:25.274Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "status" => 0,
                "updatedAt" => "2017-01-08T07:49:25.274Z",
                "end" => "2017-01-13",
                "days" => 5,
                "start" => "2017-01-08",
                "pickup" => "empty"
            ],
            [
                "objectId" => "EL77V6S6je",
                "status" => 0,
                "days" => 20,
                "updatedAt" => "2016-09-06T12:50:07.663Z",
                "qty" => 1,
                "end" => "2016-09-28",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "start" => "2016-09-08",
                "sim" => "",
                "pickup" => "budget",
                "total" => "155000",
                "createdAt" => "2016-09-06T12:50:07.663Z"
            ],
            [
                "objectId" => "EZphhOaFOS",
                "createdAt" => "2016-07-04T19:39:08.343Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y7hEXTbREl"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "HdkzpF1PQE"
                ],
                "start" => "2016-07-14",
                "pickup" => "empty",
                "qty" => 1,
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "status" => 0,
                "updatedAt" => "2016-07-05T02:07:11.645Z",
                "end" => "2016-07-17",
                "total" => "260",
                "days" => 3
            ],
            [
                "objectId" => "EnMRQavcYN",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "end" => "2016-07-17",
                "start" => "2016-07-13",
                "sim" => "empty",
                "total" => "218",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "updatedAt" => "2016-06-19T05:04:38.499Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "qty" => 1,
                "days" => 4,
                "status" => 0,
                "createdAt" => "2016-06-19T05:04:38.499Z",
                "pickup" => "budget"
            ],
            [
                "objectId" => "FBVSFt9Lvo",
                "sim" => "empty",
                "days" => 6,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "SH0Owm8DHC"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2CgQ3IJmEd"
                ],
                "status" => 0,
                "start" => "2016-07-11",
                "total" => "504",
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "kUNN5S9BPD"
                ],
                "pickup" => "empty",
                "updatedAt" => "2016-07-08T08:22:32.949Z",
                "end" => "2016-07-17",
                "createdAt" => "2016-07-08T08:22:32.949Z"
            ],
            [
                "objectId" => "FKDNJktH60",
                "status" => 0,
                "start" => "2017-01-11",
                "pickup" => "empty",
                "end" => "2017-01-11",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "updatedAt" => "2017-01-11T19:13:59.147Z",
                "sim" => "",
                "total" => "65",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "days" => 0,
                "createdAt" => "2017-01-11T19:13:59.147Z"
            ],
            [
                "objectId" => "Fe6rgUjmDT",
                "updatedAt" => "2016-07-05T02:51:59.371Z",
                "pickup" => "empty",
                "createdAt" => "2016-07-05T02:51:59.371Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "qty" => 1,
                "start" => "2016-07-12",
                "days" => 5,
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "status" => 0,
                "total" => "670",
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ]
            ],
            [
                "objectId" => "FlbtSzF2D7",
                "start" => "2016-07-14",
                "qty" => 2,
                "days" => 3,
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "zToHSBPnAD"
                ],
                "createdAt" => "2016-06-30T07:18:33.051Z",
                "updatedAt" => "2016-07-09T08:01:45.280Z",
                "end" => "2016-07-17",
                "total" => "936",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "status" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ZZ12RgAI6i"
                ],
                "order_id" => "FlbtSzF2D7"
            ],
            [
                "objectId" => "Fn7UrmoLzd",
                "sim" => "",
                "days" => 5,
                "status" => 0,
                "createdAt" => "2016-12-01T05:37:53.507Z",
                "updatedAt" => "2016-12-01T05:37:53.507Z",
                "start" => "2016-12-01",
                "total" => "334000",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Z5WyjvyzOP"
                ],
                "qty" => 1,
                "end" => "2016-12-06",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6VSsxUSqRr"
                ]
            ],
            [
                "objectId" => "Foih6lnFUJ",
                "days" => 5,
                "pickup" => "empty",
                "status" => 0,
                "total" => "310000",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "qty" => 2,
                "start" => "2016-11-15",
                "end" => "2016-11-20",
                "sim" => "",
                "createdAt" => "2016-11-15T07:13:47.199Z",
                "updatedAt" => "2016-11-15T07:13:47.199Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ]
            ],
            [
                "objectId" => "FoklqIuLl8",
                "days" => 5,
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "start" => "2016-07-12",
                "sim" => "empty",
                "qty" => 1,
                "end" => "2016-07-17",
                "createdAt" => "2016-07-06T12:41:30.837Z",
                "updatedAt" => "2016-07-06T12:41:30.837Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "pickup" => "empty",
                "total" => "670"
            ],
            [
                "objectId" => "FscyH0TYmU",
                "days" => 7,
                "updatedAt" => "2016-07-08T02:28:01.389Z",
                "sim" => "empty",
                "start" => "2016-07-10",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "status" => -1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ],
                "pickup" => "empty",
                "createdAt" => "2016-07-08T02:23:31.083Z",
                "end" => "2016-07-17",
                "total" => "1309",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Byn4ntwnlW"
                ],
                "qty" => 1,
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "jhSUZXljo1"
                ],
                "order_id" => "FscyH0TYmU"
            ],
            [
                "objectId" => "FuHiPN3dYB",
                "start" => "2017-06-21",
                "total" => "346",
                "status" => 0,
                "sim" => "empty",
                "createdAt" => "2017-01-16T03:29:12.193Z",
                "updatedAt" => "2017-01-16T03:29:12.193Z",
                "days" => -9,
                "pickup" => "empty",
                "qty" => 1,
                "end" => "2017-06-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ]
            ],
            [
                "objectId" => "G4Yt8TXQWq",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ],
                "start" => "2017-06-07",
                "qty" => 1,
                "end" => "2017-06-11",
                "total" => "346",
                "days" => 4,
                "sim" => "empty",
                "createdAt" => "2017-01-11T07:06:50.566Z",
                "updatedAt" => "2017-01-11T07:06:50.566Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "pickup" => "empty",
                "status" => 0
            ],
            [
                "objectId" => "GRoskBLbHo",
                "status" => 0,
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2CgQ3IJmEd"
                ],
                "createdAt" => "2016-07-05T09:52:26.145Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3yf0JZQnoA"
                ],
                "end" => "2016-07-15",
                "updatedAt" => "2016-07-05T09:52:26.145Z",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ArJfy8NCob"
                ],
                "qty" => 1,
                "start" => "2016-07-12",
                "days" => 3,
                "total" => "537"
            ],
            [
                "objectId" => "GUAfVjGgGG",
                "updatedAt" => "2016-07-03T04:48:42.275Z",
                "days" => 5,
                "end" => "2016-07-17",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "start" => "2016-07-12",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "total" => "333",
                "qty" => 3,
                "pickup" => "empty",
                "status" => 0,
                "sim" => "empty",
                "createdAt" => "2016-07-03T04:48:42.275Z"
            ],
            [
                "objectId" => "Gy9iwbbnjq",
                "days" => 5,
                "end" => "2017-01-10",
                "createdAt" => "2017-01-04T00:35:57.296Z",
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "total" => "310000",
                "updatedAt" => "2017-01-04T00:35:57.296Z",
                "status" => 0,
                "pickup" => "empty",
                "qty" => 2,
                "start" => "2017-01-05",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ]
            ],
            [
                "objectId" => "H9ou3eiswX",
                "sim" => "empty",
                "total" => "165",
                "days" => 4,
                "qty" => 1,
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "updatedAt" => "2016-06-02T11:00:25.834Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3QXmebzjuZ"
                ],
                "start" => "2016-07-13",
                "status" => 0,
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ZZ12RgAI6i"
                ],
                "createdAt" => "2016-06-02T11:00:25.834Z"
            ],
            [
                "objectId" => "HRcwhWJVPo",
                "pickup" => "empty",
                "days" => 5,
                "createdAt" => "2016-07-09T05:20:21.212Z",
                "updatedAt" => "2016-07-09T05:20:21.212Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "end" => "2016-07-14",
                "qty" => 1,
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "total" => "2085",
                "start" => "2016-07-09",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3w1ZFHEgdg"
                ],
                "sim" => "empty"
            ],
            [
                "objectId" => "HVq7MlAOl3",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "status" => 0,
                "createdAt" => "2016-07-07T09:28:10.351Z",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "4pYNL359QX"
                ],
                "qty" => 1,
                "end" => "2016-07-12",
                "start" => "2016-07-07",
                "updatedAt" => "2016-07-07T09:53:06.673Z",
                "sim" => "empty",
                "total" => "690",
                "days" => 5,
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "WkRfknbeFh"
                ],
                "order_id" => "HVq7MlAOl3"
            ],
            [
                "objectId" => "HYXsdIl21n",
                "sim" => "empty",
                "start" => "2017-06-08",
                "qty" => 15,
                "end" => "2017-06-12",
                "pickup" => "empty",
                "total" => "381",
                "days" => 4,
                "createdAt" => "2017-01-10T18:29:51.963Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "updatedAt" => "2017-01-10T18:29:51.963Z",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ]
            ],
            [
                "objectId" => "HkdFQCkmEd",
                "createdAt" => "2016-07-06T12:53:51.588Z",
                "end" => "2016-07-17",
                "total" => "400",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "days" => 5,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "hCa1zeaGlH"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "q0eyY9f5np"
                ],
                "sim" => "sim1",
                "status" => 0,
                "updatedAt" => "2016-07-06T12:53:51.588Z",
                "qty" => 1,
                "start" => "2016-07-12"
            ],
            [
                "objectId" => "IIqZK7o4Qk",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "sim" => "empty",
                "updatedAt" => "2016-06-13T15:44:56.304Z",
                "status" => 0,
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Q3408nXD4M"
                ],
                "createdAt" => "2016-06-13T15:44:56.304Z",
                "end" => "2016-07-17",
                "qty" => 1,
                "total" => "134",
                "start" => "2016-07-12",
                "days" => 5,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ]
            ],
            [
                "objectId" => "IPUKVZXXn0",
                "status" => 0,
                "end" => "2016-07-16",
                "total" => "222",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "createdAt" => "2016-07-05T14:51:49.558Z",
                "start" => "2016-07-14",
                "qty" => 1,
                "days" => 2,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "pickup" => "empty",
                "updatedAt" => "2016-07-05T14:51:49.558Z",
                "sim" => "empty"
            ],
            [
                "objectId" => "IUMpLPZOTY",
                "status" => 0,
                "updatedAt" => "2016-11-16T03:21:27.661Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "total" => "417",
                "createdAt" => "2016-11-16T03:21:27.661Z",
                "end" => "2016-11-20",
                "pickup" => "empty",
                "sim" => "empty",
                "days" => 5,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3w1ZFHEgdg"
                ],
                "start" => "2016-11-15",
                "qty" => 1
            ],
            [
                "objectId" => "IVD8XQquks",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "mvizgkHuR7"
                ],
                "days" => 5,
                "pickup" => "empty",
                "qty" => 1,
                "end" => "2016-06-25",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "SH0Owm8DHC"
                ],
                "createdAt" => "2016-06-20T08:54:28.102Z",
                "updatedAt" => "2016-06-20T09:04:10.648Z",
                "status" => 0,
                "total" => "79",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2CgQ3IJmEd"
                ],
                "sim" => "empty",
                "start" => "2016-06-20",
                "order_id" => "IVD8XQquks"
            ],
            [
                "objectId" => "IbZxNFoyg9",
                "qty" => 1,
                "createdAt" => "2016-07-04T13:51:28.010Z",
                "updatedAt" => "2016-07-04T13:51:28.010Z",
                "days" => 2,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "vmubuSzMbB"
                ],
                "pickup" => "empty",
                "total" => "169",
                "start" => "2016-07-14",
                "status" => 0,
                "end" => "2016-07-16",
                "sim" => "empty"
            ],
            [
                "objectId" => "J2b7fM0ZOw",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "createdAt" => "2016-07-01T16:52:56.496Z",
                "status" => 0,
                "start" => "2016-07-14",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "pickup" => "empty",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "K3JqYaFShD"
                ],
                "end" => "2016-07-16",
                "updatedAt" => "2016-07-01T16:52:56.496Z",
                "days" => 2,
                "qty" => 1,
                "total" => "218"
            ],
            [
                "objectId" => "J4LrTnrJCW",
                "qty" => 4,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "status" => 1,
                "updatedAt" => "2016-07-06T04:51:57.553Z",
                "total" => "2704",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rc28eeL0tB"
                ],
                "days" => 4,
                "start" => "2016-07-13",
                "pickup" => "empty",
                "sim" => "empty",
                "createdAt" => "2016-06-17T10:14:40.217Z",
                "end" => "2016-07-17",
                "order_id" => "J4LrTnrJCW"
            ],
            [
                "objectId" => "JZHJGq0yPf",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "PcB6v0hCue"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "qty" => 2,
                "end" => "2016-07-17",
                "total" => "268",
                "updatedAt" => "2016-05-12T04:19:14.073Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "1pskfC26St"
                ],
                "start" => "2016-07-14",
                "days" => 3,
                "createdAt" => "2016-05-12T04:19:14.073Z",
                "pickup" => "empty",
                "status" => 0
            ],
            [
                "objectId" => "Jhpy2H5cLM",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "LKVVLWFO0k"
                ],
                "updatedAt" => "2016-07-07T04:11:58.814Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "start" => "2016-07-14",
                "createdAt" => "2016-07-07T04:11:58.814Z",
                "end" => "2016-07-16",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "total" => "3042",
                "qty" => 3,
                "sim" => "empty",
                "days" => 2,
                "status" => 0,
                "pickup" => "empty"
            ],
            [
                "objectId" => "K0fqYJxb9J",
                "qty" => 1,
                "start" => "2016-06-01",
                "createdAt" => "2016-06-06T04:43:36.254Z",
                "end" => "2016-07-01",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2AnVllEkUT"
                ],
                "updatedAt" => "2016-06-06T04:43:41.850Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "6jVBjfZtxT"
                ],
                "days" => 30,
                "sim" => "empty",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JIlRedTh9N"
                ],
                "total" => "100",
                "status" => 0,
                "order_id" => "K0fqYJxb9J"
            ],
            [
                "objectId" => "KFSU60lXx4",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "A9nPsopwDC"
                ],
                "createdAt" => "2016-07-05T07:47:54.568Z",
                "status" => 0,
                "start" => "2016-07-12",
                "days" => 3,
                "end" => "2016-07-15",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "updatedAt" => "2016-07-05T07:47:54.568Z",
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3yf0JZQnoA"
                ],
                "pickup" => "empty",
                "sim" => "empty",
                "total" => "495"
            ],
            [
                "objectId" => "KcAekjhdaG",
                "status" => 0,
                "createdAt" => "2016-08-17T10:11:59.448Z",
                "end" => "2016-07-01",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "pickup" => "empty",
                "start" => "2016-06-01",
                "days" => 30,
                "qty" => 12,
                "updatedAt" => "2016-08-17T10:11:59.448Z",
                "total" => "3192000",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rD6Ec1uwCf"
                ],
                "sim" => ""
            ],
            [
                "objectId" => "L40xUZLnP8",
                "days" => 2,
                "status" => 0,
                "end" => "2016-07-16",
                "qty" => 1,
                "sim" => "empty",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "K3JqYaFShD"
                ],
                "total" => "218",
                "createdAt" => "2016-07-01T16:56:20.679Z",
                "updatedAt" => "2016-07-01T16:57:48.150Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "order_id" => "L40xUZLnP8"
            ],
            [
                "objectId" => "LKXfS9WPlq",
                "updatedAt" => "2016-06-10T09:57:48.555Z",
                "start" => "2016-07-12",
                "total" => "134",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oncARwqBKb"
                ],
                "end" => "2016-07-17",
                "status" => 0,
                "sim" => "empty",
                "createdAt" => "2016-06-10T09:57:48.555Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "days" => 5,
                "pickup" => "empty",
                "qty" => 1
            ],
            [
                "objectId" => "LgsJZTX6Ao",
                "sim" => "empty",
                "pickup" => "empty",
                "createdAt" => "2016-06-20T03:23:26.577Z",
                "start" => "2016-07-12",
                "end" => "2016-07-17",
                "qty" => 1,
                "total" => "134",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Q3408nXD4M"
                ],
                "status" => 0,
                "days" => 5,
                "updatedAt" => "2016-06-20T03:23:26.577Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ]
            ],
            [
                "objectId" => "LxsnvQFbs2",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "end" => "2016-07-11",
                "updatedAt" => "2016-07-06T08:59:30.352Z",
                "createdAt" => "2016-07-06T08:59:30.352Z",
                "start" => "2016-07-06",
                "status" => 0,
                "pickup" => "empty",
                "qty" => 1,
                "days" => 5,
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "QuiPEkZoUL"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "YQ5UZnXLCV"
                ],
                "total" => "835"
            ],
            [
                "objectId" => "MCFbIrMCH4",
                "total" => "218",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "QOErSqtPSC"
                ],
                "end" => "2016-07-16",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "zubnVyNwBD"
                ],
                "updatedAt" => "2016-07-07T07:51:56.561Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "days" => 2,
                "qty" => 2,
                "start" => "2016-07-14",
                "pickup" => "empty",
                "status" => 0,
                "createdAt" => "2016-07-07T07:51:56.561Z"
            ],
            [
                "objectId" => "N7GqAILbvI",
                "days" => 5,
                "sim" => "sim2",
                "createdAt" => "2016-07-08T09:22:23.178Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "kUNN5S9BPD"
                ],
                "updatedAt" => "2016-07-08T09:22:23.178Z",
                "start" => "2016-07-08",
                "pickup" => "budget",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "SH0Owm8DHC"
                ],
                "total" => "420",
                "end" => "2016-07-13",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2CgQ3IJmEd"
                ],
                "qty" => 1,
                "status" => 0
            ],
            [
                "objectId" => "NNhZeQ1s1v",
                "total" => "155000",
                "sim" => "",
                "start" => "2016-08-12",
                "status" => 0,
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "createdAt" => "2016-08-12T04:01:51.610Z",
                "end" => "2016-08-17",
                "days" => 5,
                "updatedAt" => "2016-08-12T04:01:51.610Z",
                "pickup" => "empty"
            ],
            [
                "objectId" => "NZ2Ew1N5hG",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "start" => "2016-07-12",
                "total" => "218",
                "sim" => "empty",
                "status" => 0,
                "days" => 5,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "DjXPaKCvFN"
                ],
                "createdAt" => "2016-06-20T06:25:27.816Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "end" => "2016-07-17",
                "updatedAt" => "2017-02-20T03:41:23.882Z",
                "pickup" => "empty",
                "qty" => 1,
                "order_id" => "NZ2Ew1N5hG"
            ],
            [
                "objectId" => "NegxivcgQv",
                "end" => "2016-12-06",
                "total" => "2970000",
                "createdAt" => "2016-12-01T03:25:04.948Z",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "updatedAt" => "2016-12-01T03:25:04.948Z",
                "qty" => 15,
                "sim" => "",
                "pickup" => "vip",
                "start" => "2016-12-01",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "days" => 5
            ],
            [
                "objectId" => "NgQZ60CStT",
                "updatedAt" => "2016-07-06T11:07:11.795Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "start" => "2016-07-09",
                "createdAt" => "2016-07-06T11:05:47.012Z",
                "pickup" => "empty",
                "end" => "2016-07-19",
                "days" => 10,
                "status" => -1,
                "total" => "1560",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HF7oj9daYx"
                ],
                "qty" => 1,
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "pbvxQvOZSl"
                ],
                "order_id" => "NgQZ60CStT"
            ],
            [
                "objectId" => "Nh5TiYnF1W",
                "start" => "2016-06-18",
                "qty" => 1,
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "PbtIwCCjcQ"
                ],
                "status" => 0,
                "days" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Blge5vAKoU"
                ],
                "end" => "2016-06-19",
                "pickup" => "empty",
                "updatedAt" => "2016-06-18T08:35:59.943Z",
                "total" => "40",
                "createdAt" => "2016-06-18T08:35:51.733Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AHs8LaFC9W"
                ],
                "order_id" => "Nh5TiYnF1W"
            ],
            [
                "objectId" => "NyHnn8ZorO",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3gMwWpMQs5"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "updatedAt" => "2016-06-24T08:06:58.471Z",
                "qty" => 2,
                "createdAt" => "2016-06-24T08:06:58.471Z",
                "days" => 4,
                "start" => "2016-07-13",
                "status" => 0,
                "total" => "338",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "end" => "2016-07-17",
                "pickup" => "empty"
            ],
            [
                "objectId" => "O16kGhKZDR",
                "start" => "2016-07-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FczcD0GJUz"
                ],
                "updatedAt" => "2016-07-06T04:45:22.853Z",
                "total" => "2010",
                "days" => 5,
                "status" => 1,
                "qty" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "end" => "2016-07-17",
                "pickup" => "empty",
                "createdAt" => "2016-07-03T05:05:10.461Z",
                "order_id" => "O16kGhKZDR"
            ],
            [
                "objectId" => "OTQQS93lrD",
                "createdAt" => "2016-06-30T06:57:24.970Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "days" => 6,
                "qty" => 1,
                "pickup" => "empty",
                "status" => 0,
                "sim" => "empty",
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "total" => "218",
                "updatedAt" => "2016-06-30T06:57:24.970Z",
                "start" => "2016-07-11"
            ],
            [
                "objectId" => "OaA0D4ujbQ",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "qty" => 1,
                "start" => "2017-06-08",
                "total" => "346",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ],
                "pickup" => "empty",
                "createdAt" => "2017-01-14T02:32:20.060Z",
                "status" => 0,
                "updatedAt" => "2017-01-14T02:32:20.060Z",
                "days" => 4,
                "end" => "2017-06-12"
            ],
            [
                "objectId" => "OwGnjrds2I",
                "end" => "2016-07-17",
                "total" => "1309",
                "createdAt" => "2016-07-07T07:28:29.159Z",
                "days" => 7,
                "start" => "2016-07-10",
                "status" => 0,
                "updatedAt" => "2016-07-07T07:28:29.159Z",
                "qty" => 1,
                "sim" => "empty",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ]
            ],
            [
                "objectId" => "OxHYVT7jFW",
                "qty" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "status" => 0,
                "days" => 2,
                "updatedAt" => "2016-07-07T04:11:12.152Z",
                "start" => "2016-07-14",
                "pickup" => "empty",
                "createdAt" => "2016-07-07T04:11:12.152Z",
                "total" => "3042",
                "end" => "2016-07-16",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "LKVVLWFO0k"
                ]
            ],
            [
                "objectId" => "P9CdfooRSN",
                "sim" => "empty",
                "updatedAt" => "2016-07-08T14:16:49.750Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2CgQ3IJmEd"
                ],
                "qty" => 1,
                "createdAt" => "2016-07-08T14:16:49.750Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Ia5ipLvZTt"
                ],
                "total" => "124",
                "status" => 0,
                "start" => "2016-07-13",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rArrFKsc5D"
                ],
                "end" => "2016-07-14",
                "days" => 1
            ],
            [
                "objectId" => "PCv3ailpa8",
                "qty" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FrlNaq04Ib"
                ],
                "start" => "2016-07-14",
                "createdAt" => "2016-07-08T13:37:03.660Z",
                "updatedAt" => "2016-07-08T13:39:00.273Z",
                "days" => 3,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "total" => "1170",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Ik6sXozTyj"
                ],
                "pickup" => "empty",
                "end" => "2016-07-17",
                "status" => -1,
                "sim" => "empty",
                "order_id" => "PCv3ailpa8",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "0j3NUKlxEW"
                ]
            ],
            [
                "objectId" => "PKpWaVJNst",
                "days" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "status" => 1,
                "qty" => 1,
                "total" => "402",
                "createdAt" => "2016-07-04T09:57:10.760Z",
                "updatedAt" => "2016-07-06T04:44:40.184Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "aVkEeyPcVW"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "end" => "2016-07-17",
                "sim" => "empty",
                "start" => "2016-07-14",
                "pickup" => "empty",
                "order_id" => "PKpWaVJNst"
            ],
            [
                "objectId" => "POk656iv5P",
                "updatedAt" => "2016-06-21T10:47:15.693Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "end" => "2016-06-18",
                "createdAt" => "2016-06-21T10:46:59.608Z",
                "start" => "2016-06-12",
                "sim" => "empty",
                "status" => 0,
                "total" => "507",
                "qty" => 3,
                "days" => 6,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "dc3iztGiU5"
                ],
                "pickup" => "empty",
                "order_id" => "POk656iv5P"
            ],
            [
                "objectId" => "PZGzHgSmz2",
                "status" => 0,
                "total" => "3100000",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "34XNdpxQGZ"
                ],
                "sim" => "",
                "start" => "2016-08-21",
                "updatedAt" => "2016-08-21T10:01:47.963Z",
                "days" => 5,
                "pickup" => "empty",
                "qty" => 2,
                "end" => "2016-08-26",
                "createdAt" => "2016-08-21T10:01:47.963Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ]
            ],
            [
                "objectId" => "PgY2Q4JPna",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "total" => "109",
                "pickup" => "empty",
                "end" => "2016-07-15",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "wDwgLfgDde"
                ],
                "createdAt" => "2016-07-04T08:37:27.077Z",
                "days" => 2,
                "qty" => 1,
                "start" => "2016-07-13",
                "updatedAt" => "2016-07-04T08:38:38.919Z",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "order_id" => "PgY2Q4JPna"
            ],
            [
                "objectId" => "PtEifUAsuf",
                "sim" => "empty",
                "total" => "134",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "days" => 6,
                "start" => "2016-07-12",
                "end" => "2016-07-18",
                "status" => 0,
                "createdAt" => "2016-07-04T14:55:04.270Z",
                "pickup" => "empty",
                "updatedAt" => "2016-07-04T14:55:04.270Z",
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ]
            ],
            [
                "objectId" => "QAZpnOTtwh",
                "createdAt" => "2016-06-11T07:17:31.815Z",
                "total" => "247",
                "pickup" => "empty",
                "sim" => "empty",
                "qty" => 1,
                "updatedAt" => "2016-06-11T07:17:31.815Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "onTRMGr6o5"
                ],
                "days" => 1,
                "end" => "2016-06-02",
                "start" => "2016-06-01",
                "status" => 0
            ],
            [
                "objectId" => "QQW1pmBwOe",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HCGkU0O6jw"
                ],
                "end" => "2016-07-17",
                "status" => 0,
                "total" => "670",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "days" => 5,
                "updatedAt" => "2016-07-06T04:11:08.233Z",
                "start" => "2016-07-12",
                "qty" => 1,
                "createdAt" => "2016-07-06T04:11:08.233Z",
                "pickup" => "empty",
                "sim" => "sim3",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ]
            ],
            [
                "objectId" => "QXTANxw14p",
                "updatedAt" => "2016-07-05T09:40:21.314Z",
                "total" => "1309",
                "createdAt" => "2016-07-05T09:40:21.314Z",
                "end" => "2016-07-17",
                "sim" => "empty",
                "pickup" => "budget",
                "days" => 7,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ],
                "start" => "2016-07-10",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Byn4ntwnlW"
                ],
                "status" => 0
            ],
            [
                "objectId" => "RE5MwTzc4E",
                "updatedAt" => "2016-08-10T04:43:09.435Z",
                "end" => "2016-08-15",
                "createdAt" => "2016-08-10T04:43:09.435Z",
                "sim" => "",
                "start" => "2016-08-10",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "pickup" => "budget",
                "qty" => 14,
                "days" => 5,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "total" => "2170000",
                "status" => 0
            ],
            [
                "objectId" => "RH84QkxVuF",
                "end" => "2017-01-16",
                "days" => 5,
                "total" => "55",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c2whbdgsCb"
                ],
                "createdAt" => "2017-01-11T13:00:21.327Z",
                "sim" => "",
                "updatedAt" => "2017-01-11T13:00:21.327Z",
                "pickup" => "empty",
                "start" => "2017-01-11",
                "status" => 0,
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gZ63FP6fCP"
                ]
            ],
            [
                "objectId" => "RKVE08PPJ7",
                "total" => "111",
                "days" => 2,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CDj3eFNZC8"
                ],
                "status" => 0,
                "pickup" => "empty",
                "end" => "2016-07-16",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "qty" => 1,
                "createdAt" => "2016-07-04T09:56:13.993Z",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "updatedAt" => "2016-07-04T09:56:23.650Z",
                "start" => "2016-07-14",
                "order_id" => "RKVE08PPJ7"
            ],
            [
                "objectId" => "RP4h0dedbE",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "pickup" => "vip",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "qty" => 1,
                "start" => "2016-09-05",
                "status" => 0,
                "days" => 0,
                "sim" => "",
                "createdAt" => "2016-09-06T03:15:26.108Z",
                "total" => "198000",
                "updatedAt" => "2016-09-06T03:15:26.108Z",
                "end" => "2016-09-05"
            ],
            [
                "objectId" => "RVtush7Y9h",
                "pickup" => "empty",
                "status" => 0,
                "end" => "2016-07-17",
                "createdAt" => "2016-06-02T11:00:34.572Z",
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ZZ12RgAI6i"
                ],
                "updatedAt" => "2016-06-02T11:00:34.572Z",
                "sim" => "empty",
                "days" => 4,
                "total" => "165",
                "start" => "2016-07-13",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3QXmebzjuZ"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ]
            ],
            [
                "objectId" => "RZrXPGkpKv",
                "updatedAt" => "2017-01-12T05:13:27.230Z",
                "end" => "2017-06-12",
                "createdAt" => "2017-01-12T05:13:27.230Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "sim" => "empty",
                "pickup" => "empty",
                "qty" => 4,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-08",
                "status" => 0,
                "days" => 4,
                "total" => "100"
            ],
            [
                "objectId" => "RaxfbMhkTA",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "qty" => 1,
                "status" => 0,
                "total" => "109",
                "end" => "2016-07-17",
                "sim" => "",
                "start" => "2016-07-14",
                "updatedAt" => "2016-07-07T12:49:44.679Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "days" => 3,
                "createdAt" => "2016-07-07T12:49:44.679Z"
            ],
            [
                "objectId" => "RkgdJHdx2O",
                "status" => 0,
                "createdAt" => "2017-01-03T06:45:34.008Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "qcxPGHgU4D"
                ],
                "sim" => "",
                "updatedAt" => "2017-01-03T06:45:34.008Z",
                "pickup" => "empty",
                "total" => "146000",
                "end" => "2017-01-07",
                "start" => "2017-01-02",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "CWjIspaaEA"
                ],
                "qty" => 1,
                "days" => 5
            ],
            [
                "objectId" => "RrCWkFIfdM",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "total" => "1140",
                "days" => 5,
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "createdAt" => "2016-07-04T12:33:50.116Z",
                "updatedAt" => "2016-07-05T02:09:28.454Z",
                "pickup" => "budget",
                "status" => -1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "sim" => "empty",
                "end" => "2016-07-17",
                "start" => "2016-07-12",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Gktdx6Jv2U"
                ],
                "order_id" => "RrCWkFIfdM"
            ],
            [
                "objectId" => "SXpEpG7YMZ",
                "sim" => "",
                "qty" => 1,
                "createdAt" => "2016-12-28T03:47:58.670Z",
                "start" => "2016-06-01",
                "status" => 0,
                "end" => "2016-07-01",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "lDSwy1Oijd"
                ],
                "total" => "164000",
                "pickup" => "vip",
                "updatedAt" => "2016-12-28T03:47:58.670Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "days" => 30
            ],
            [
                "objectId" => "Sbx43pxGsN",
                "start" => "2016-07-12",
                "total" => "670",
                "createdAt" => "2016-07-06T04:17:15.586Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HCGkU0O6jw"
                ],
                "days" => 5,
                "updatedAt" => "2016-07-06T04:18:29.262Z",
                "sim" => "sim3",
                "pickup" => "empty",
                "status" => -1,
                "qty" => 1,
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "F2j0ZDEZQ4"
                ],
                "order_id" => "Sbx43pxGsN"
            ],
            [
                "objectId" => "SrmI1bslyY",
                "qty" => 3,
                "createdAt" => "2016-07-07T09:15:14.462Z",
                "status" => 0,
                "start" => "2016-07-14",
                "updatedAt" => "2016-07-07T09:15:14.462Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "sim" => "empty",
                "pickup" => "empty",
                "days" => 3,
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "LKVVLWFO0k"
                ],
                "total" => "169",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ]
            ],
            [
                "objectId" => "TRRQyZSIgk",
                "end" => "2016-07-17",
                "status" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "days" => 4,
                "total" => "1072",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "createdAt" => "2016-06-16T09:38:56.766Z",
                "updatedAt" => "2016-07-06T04:52:17.865Z",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l7Fa0k5cJS"
                ],
                "pickup" => "empty",
                "qty" => 2,
                "start" => "2016-07-13",
                "order_id" => "TRRQyZSIgk"
            ],
            [
                "objectId" => "TucPEs8B0P",
                "start" => "2016-11-29",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "sim" => "",
                "status" => 0,
                "updatedAt" => "2016-11-29T09:44:43.388Z",
                "end" => "2016-12-04",
                "pickup" => "empty",
                "total" => "198000",
                "days" => 5,
                "createdAt" => "2016-11-29T09:44:43.388Z",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ]
            ],
            [
                "objectId" => "UEWUWQJj8Y",
                "updatedAt" => "2016-07-07T12:51:32.737Z",
                "start" => "2016-07-14",
                "qty" => 1,
                "createdAt" => "2016-07-07T12:51:32.737Z",
                "total" => "109",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "sim" => "",
                "status" => 0,
                "end" => "2016-07-17",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "pickup" => "empty",
                "days" => 3
            ],
            [
                "objectId" => "UG0YHtr6ff",
                "days" => 5,
                "qty" => 1,
                "updatedAt" => "2017-02-20T03:42:37.178Z",
                "start" => "2016-07-08",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2016-07-08T08:36:34.438Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "zToHSBPnAD"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "total" => "780",
                "end" => "2016-07-13",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "pickup" => "empty",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "WkRfknbeFh"
                ],
                "order_id" => "UG0YHtr6ff"
            ],
            [
                "objectId" => "UGsSvmjMSI",
                "total" => "165",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "sim" => "empty",
                "end" => "2016-07-01",
                "start" => "2016-06-01",
                "createdAt" => "2016-06-16T13:18:50.692Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3QXmebzjuZ"
                ],
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "IzHXHE8tbA"
                ],
                "updatedAt" => "2016-06-16T13:19:08.955Z",
                "qty" => 1,
                "status" => 0,
                "days" => 30,
                "order_id" => "UGsSvmjMSI"
            ],
            [
                "objectId" => "ULDu42kKqb",
                "end" => "2016-07-19",
                "createdAt" => "2016-07-06T11:13:10.779Z",
                "updatedAt" => "2016-07-06T11:13:10.779Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HF7oj9daYx"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "pickup" => "empty",
                "days" => 10,
                "sim" => "empty",
                "total" => "1560",
                "status" => 0,
                "start" => "2016-07-09",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "qty" => 1
            ],
            [
                "objectId" => "UcViKUXGBi",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HF7oj9daYx"
                ],
                "createdAt" => "2016-07-03T10:04:47.416Z",
                "end" => "2016-07-19",
                "pickup" => "empty",
                "total" => "156",
                "updatedAt" => "2016-07-03T10:06:31.205Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "qty" => 1,
                "start" => "2016-07-09",
                "days" => 10,
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "order_id" => "UcViKUXGBi"
            ],
            [
                "objectId" => "UzCbaisq2Q",
                "updatedAt" => "2016-07-06T04:51:22.531Z",
                "start" => "2016-07-14",
                "qty" => 1,
                "createdAt" => "2016-06-20T14:40:59.658Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l7Fa0k5cJS"
                ],
                "days" => 3,
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3QXmebzjuZ"
                ],
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "total" => "495",
                "status" => 1,
                "end" => "2016-07-17",
                "order_id" => "UzCbaisq2Q"
            ],
            [
                "objectId" => "V8az5WyeuD",
                "days" => 6,
                "end" => "2016-07-17",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "createdAt" => "2016-04-06T06:31:02.715Z",
                "updatedAt" => "2016-07-06T04:53:14.420Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HqbGVjUggI"
                ],
                "status" => 1,
                "start" => "2016-07-11",
                "pickup" => "budget",
                "total" => "721",
                "order_id" => "V8az5WyeuD"
            ],
            [
                "objectId" => "VGb1QcitOs",
                "end" => "2016-07-01",
                "pickup" => "budget",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "updatedAt" => "2016-06-08T15:47:09.243Z",
                "sim" => "sim1",
                "start" => "2016-07-11",
                "total" => "834",
                "status" => 0,
                "days" => -10,
                "createdAt" => "2016-06-08T15:47:09.243Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "qWDB5jm9PW"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "qty" => 6
            ],
            [
                "objectId" => "VN5ZvOcEif",
                "end" => "2016-08-17",
                "sim" => "",
                "status" => 0,
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "total" => "155000",
                "start" => "2016-08-12",
                "createdAt" => "2016-08-12T06:30:09.577Z",
                "days" => 5,
                "pickup" => "empty",
                "updatedAt" => "2016-08-12T06:30:09.577Z"
            ],
            [
                "objectId" => "VSpAVUXn6M",
                "pickup" => "empty",
                "updatedAt" => "2016-07-04T09:16:47.901Z",
                "qty" => 1,
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "days" => 5,
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "start" => "2016-07-04",
                "createdAt" => "2016-07-04T09:16:47.901Z",
                "total" => "155000",
                "end" => "2016-07-09"
            ],
            [
                "objectId" => "VZl4h25BES",
                "start" => "2016-07-10",
                "createdAt" => "2016-07-05T12:21:20.451Z",
                "end" => "2016-07-16",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "A9nPsopwDC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Byn4ntwnlW"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "pickup" => "empty",
                "sim" => "empty",
                "updatedAt" => "2016-07-05T12:21:20.451Z",
                "status" => 0,
                "days" => 6,
                "total" => "990",
                "qty" => 1
            ],
            [
                "objectId" => "VqlHBI4aT4",
                "updatedAt" => "2016-07-08T14:17:37.879Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Ia5ipLvZTt"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2CgQ3IJmEd"
                ],
                "qty" => 1,
                "createdAt" => "2016-07-08T14:17:37.879Z",
                "sim" => "empty",
                "start" => "2016-07-13",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rArrFKsc5D"
                ],
                "status" => 0,
                "end" => "2016-07-14",
                "total" => "124",
                "days" => 1
            ],
            [
                "objectId" => "VrDFIrCWFO",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "end" => "2017-06-12",
                "updatedAt" => "2017-01-16T09:58:21.865Z",
                "sim" => "empty",
                "qty" => 1,
                "days" => 4,
                "pickup" => "empty",
                "total" => "180",
                "createdAt" => "2017-01-16T09:58:21.865Z",
                "start" => "2017-06-08",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "status" => 0
            ],
            [
                "objectId" => "WvwygEQMWC",
                "pickup" => "empty",
                "qty" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "sim" => "empty",
                "end" => "2016-07-17",
                "createdAt" => "2016-06-24T08:06:25.177Z",
                "total" => "338",
                "days" => 4,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "start" => "2016-07-13",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3gMwWpMQs5"
                ],
                "updatedAt" => "2016-06-24T08:06:25.177Z"
            ],
            [
                "objectId" => "X2hc1p3kiL",
                "updatedAt" => "2016-07-06T13:18:19.395Z",
                "start" => "2016-07-12",
                "sim" => "empty",
                "status" => 0,
                "pickup" => "empty",
                "total" => "415",
                "days" => 5,
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "createdAt" => "2016-07-06T13:18:19.395Z",
                "end" => "2016-07-17",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ]
            ],
            [
                "objectId" => "XDCW7eBruT",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "lDSwy1Oijd"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "sim" => "",
                "total" => "164000",
                "end" => "2016-07-01",
                "createdAt" => "2016-08-19T15:58:51.354Z",
                "days" => 30,
                "qty" => 1,
                "pickup" => "empty",
                "updatedAt" => "2016-08-19T15:58:51.354Z",
                "start" => "2016-06-01",
                "status" => 0
            ],
            [
                "objectId" => "XsrsVhaAQv",
                "days" => 31,
                "pickup" => "empty",
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "status" => 0,
                "updatedAt" => "2016-06-20T11:20:09.819Z",
                "sim" => "empty",
                "createdAt" => "2016-06-20T11:20:09.819Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "e7IeRV7BLk"
                ],
                "end" => "2016-07-06",
                "total" => "111",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "start" => "2016-06-05"
            ],
            [
                "objectId" => "XznmE5IrBN",
                "createdAt" => "2017-01-12T05:13:26.874Z",
                "updatedAt" => "2017-01-12T05:13:26.874Z",
                "status" => 0,
                "total" => "100",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "end" => "2017-06-12",
                "pickup" => "empty",
                "qty" => 2,
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "days" => 4,
                "start" => "2017-06-08"
            ],
            [
                "objectId" => "Y1IY4r7BoS",
                "qty" => 1,
                "pickup" => "empty",
                "days" => 5,
                "total" => "555",
                "start" => "2016-07-12",
                "status" => 0,
                "updatedAt" => "2016-07-06T13:35:11.254Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "createdAt" => "2016-07-06T13:35:11.254Z",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ]
            ],
            [
                "objectId" => "Y3Hllbjs1u",
                "total" => "247",
                "createdAt" => "2016-05-27T07:44:53.002Z",
                "start" => "2016-06-01",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "GmoOGiYrgA"
                ],
                "qty" => 1,
                "pickup" => "empty",
                "days" => 30,
                "updatedAt" => "2016-05-27T07:44:53.002Z",
                "status" => 0,
                "end" => "2016-07-01"
            ],
            [
                "objectId" => "YOjLLp93IW",
                "qty" => 2,
                "total" => "268",
                "updatedAt" => "2016-07-02T03:33:05.027Z",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "end" => "2016-07-17",
                "days" => 4,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "start" => "2016-07-13",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ujDdh5LNLw"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "createdAt" => "2016-07-02T03:31:35.139Z",
                "order_id" => "YOjLLp93IW"
            ],
            [
                "objectId" => "YV7HbiEzEq",
                "createdAt" => "2016-07-02T16:10:22.622Z",
                "updatedAt" => "2016-07-02T16:10:41.879Z",
                "start" => "2016-07-14",
                "total" => "338",
                "pickup" => "empty",
                "qty" => 2,
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "PlKxG8fZOX"
                ],
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "days" => 2,
                "end" => "2016-07-16",
                "order_id" => "YV7HbiEzEq"
            ],
            [
                "objectId" => "YjYMGYUtJL",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6VSsxUSqRr"
                ],
                "days" => 7,
                "end" => "2016-07-27",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "hqOxjgZ1c6"
                ],
                "updatedAt" => "2016-07-15T19:18:49.089Z",
                "qty" => 1,
                "createdAt" => "2016-07-15T19:18:49.089Z",
                "sim" => "",
                "status" => 0,
                "total" => "1200000",
                "pickup" => "empty",
                "start" => "2016-07-20"
            ],
            [
                "objectId" => "ZAkzkZmD0t",
                "start" => "2016-07-14",
                "total" => "268",
                "days" => 3,
                "end" => "2016-07-17",
                "updatedAt" => "2016-05-12T11:52:03.527Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "M3ste4niYr"
                ],
                "qty" => 2,
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "90bC0pQE8Z"
                ],
                "createdAt" => "2016-05-12T11:52:03.527Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "wztE0i3B5S"
                ],
                "pickup" => "empty"
            ],
            [
                "objectId" => "ZOYaJkSHIL",
                "total" => "338",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "end" => "2016-07-18",
                "pickup" => "empty",
                "updatedAt" => "2016-06-20T01:57:17.011Z",
                "status" => 0,
                "createdAt" => "2016-06-20T01:57:17.011Z",
                "days" => 6,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "qty" => 2,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "MrS9C9cTRM"
                ],
                "start" => "2016-07-12",
                "sim" => "empty"
            ],
            [
                "objectId" => "ZWFVpqc06X",
                "total" => "268",
                "updatedAt" => "2016-06-17T08:33:11.236Z",
                "pickup" => "empty",
                "qty" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "start" => "2016-07-12",
                "days" => 5,
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "end" => "2016-07-17",
                "createdAt" => "2016-06-17T08:33:11.236Z",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ]
            ],
            [
                "objectId" => "Ztl1vJkBqn",
                "status" => 0,
                "updatedAt" => "2016-12-09T14:04:40.664Z",
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6VSsxUSqRr"
                ],
                "end" => "2016-12-14",
                "total" => "334000",
                "start" => "2016-12-09",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Z5WyjvyzOP"
                ],
                "pickup" => "empty",
                "days" => 5,
                "qty" => 1,
                "createdAt" => "2016-12-09T14:04:40.664Z"
            ],
            [
                "objectId" => "a2rqa7ScF3",
                "status" => 0,
                "sim" => "empty",
                "createdAt" => "2016-07-07T07:36:22.692Z",
                "end" => "2016-07-17",
                "days" => 7,
                "updatedAt" => "2016-07-07T07:36:22.692Z",
                "start" => "2016-07-10",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "pickup" => "empty",
                "qty" => 1,
                "total" => "1309",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ]
            ],
            [
                "objectId" => "aNoqjpNra4",
                "pickup" => "empty",
                "createdAt" => "2016-07-05T03:09:55.842Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "status" => 0,
                "updatedAt" => "2016-07-05T03:09:55.842Z",
                "total" => "670",
                "days" => 5,
                "sim" => "sim2",
                "qty" => 1,
                "start" => "2016-07-12",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "end" => "2016-07-17"
            ],
            [
                "objectId" => "aadRsiQgis",
                "start" => "2016-07-13",
                "pickup" => "empty",
                "updatedAt" => "2016-06-30T13:44:57.288Z",
                "end" => "2016-07-19",
                "days" => 6,
                "sim" => "empty",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "createdAt" => "2016-06-30T13:44:57.288Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Pk8FsL6Zjh"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "qty" => 1,
                "total" => "111"
            ],
            [
                "objectId" => "adwlbW04L1",
                "status" => 0,
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "end" => "2016-07-17",
                "createdAt" => "2016-07-06T12:58:25.706Z",
                "days" => 5,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "pickup" => "empty",
                "total" => "415",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2016-07-12",
                "updatedAt" => "2016-07-06T12:58:25.706Z",
                "qty" => 1
            ],
            [
                "objectId" => "bHtsUzQan6",
                "updatedAt" => "2016-07-01T10:24:51.362Z",
                "start" => "2016-07-01",
                "createdAt" => "2016-07-01T10:24:39.296Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "nSbXP73H2e"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "end" => "2016-07-06",
                "total" => "155000",
                "days" => 5,
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "sim" => "",
                "qty" => 1,
                "order_id" => "bHtsUzQan6"
            ],
            [
                "objectId" => "bMJGTKA1VP",
                "total" => "210",
                "createdAt" => "2017-01-13T08:55:59.420Z",
                "sim" => "empty",
                "status" => 0,
                "qty" => 1,
                "days" => 4,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "end" => "2017-06-12",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7sqrLzSQ2L"
                ],
                "updatedAt" => "2017-01-13T08:55:59.420Z",
                "start" => "2017-06-08"
            ],
            [
                "objectId" => "bMaMxnGzqf",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "status" => 0,
                "end" => "2016-12-04",
                "start" => "2016-11-29",
                "days" => 5,
                "total" => "3192000",
                "pickup" => "empty",
                "qty" => 12,
                "createdAt" => "2016-11-29T09:44:43.111Z",
                "updatedAt" => "2016-11-29T09:44:43.111Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rD6Ec1uwCf"
                ],
                "sim" => ""
            ],
            [
                "objectId" => "bWV9GzLb0n",
                "end" => "2017-06-12",
                "total" => "346",
                "createdAt" => "2017-01-16T14:54:51.429Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "days" => 4,
                "pickup" => "empty",
                "start" => "2017-06-08",
                "updatedAt" => "2017-01-16T14:54:51.429Z",
                "sim" => "empty",
                "qty" => 1,
                "status" => 0
            ],
            [
                "objectId" => "bxBcaEIusI",
                "end" => "2017-06-12",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "start" => "2017-06-08",
                "sim" => "empty",
                "createdAt" => "2017-01-12T05:13:27.055Z",
                "status" => 0,
                "days" => 4,
                "qty" => 3,
                "total" => "100",
                "updatedAt" => "2017-01-12T05:13:27.055Z"
            ],
            [
                "objectId" => "c0XM0amIvv",
                "status" => 0,
                "pickup" => "empty",
                "total" => "109",
                "createdAt" => "2016-07-04T03:32:24.315Z",
                "start" => "2016-07-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "updatedAt" => "2016-07-04T03:32:46.472Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "wDwgLfgDde"
                ],
                "sim" => "empty",
                "end" => "2016-07-15",
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "days" => 3,
                "order_id" => "c0XM0amIvv"
            ],
            [
                "objectId" => "c7my9dcnHd",
                "days" => 2,
                "total" => "268",
                "end" => "2016-07-16",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "createdAt" => "2016-07-05T14:52:37.009Z",
                "start" => "2016-07-14",
                "qty" => 1,
                "updatedAt" => "2016-07-05T14:52:37.009Z",
                "status" => 0,
                "pickup" => "empty"
            ],
            [
                "objectId" => "ccCtGQCd3L",
                "status" => 0,
                "pickup" => "empty",
                "qty" => 1,
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "total" => "875",
                "end" => "2016-07-10",
                "days" => 5,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "vRTpOj6S5A"
                ],
                "start" => "2016-07-05",
                "createdAt" => "2016-07-05T01:42:33.869Z",
                "updatedAt" => "2016-07-07T10:17:43.489Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "aZGRDhBUSD"
                ],
                "order_id" => "ccCtGQCd3L"
            ],
            [
                "objectId" => "cyh4jCHwbY",
                "updatedAt" => "2016-07-07T09:51:37.443Z",
                "pickup" => "empty",
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "rAoKCNUn9Y"
                ],
                "sim" => "",
                "start" => "2016-07-06",
                "status" => 0,
                "end" => "2016-07-11",
                "total" => "121000",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WnyrNZ6kao"
                ],
                "createdAt" => "2016-07-06T08:46:43.086Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "QuiPEkZoUL"
                ],
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "KZfm8bVCCo"
                ],
                "order_id" => "cyh4jCHwbY"
            ],
            [
                "objectId" => "czkze7bSaa",
                "start" => "2016-07-14",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "status" => 0,
                "total" => "218",
                "createdAt" => "2016-07-01T10:18:35.656Z",
                "days" => 2,
                "sim" => "empty",
                "end" => "2016-07-16",
                "updatedAt" => "2016-07-01T10:18:35.656Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JEuUikVWlN"
                ]
            ],
            [
                "objectId" => "d4gpe9wNxY",
                "createdAt" => "2016-07-01T16:18:34.047Z",
                "end" => "2016-07-16",
                "updatedAt" => "2016-07-01T16:23:22.711Z",
                "start" => "2016-07-14",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "K3JqYaFShD"
                ],
                "pickup" => "empty",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "days" => 2,
                "qty" => 1,
                "total" => "218",
                "status" => 0,
                "order_id" => "d4gpe9wNxY"
            ],
            [
                "objectId" => "d6yNcfnHhD",
                "updatedAt" => "2016-07-05T12:15:14.982Z",
                "days" => 7,
                "pickup" => "budget",
                "sim" => "empty",
                "qty" => 1,
                "status" => 0,
                "total" => "1309",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "end" => "2016-07-17",
                "createdAt" => "2016-07-05T12:15:14.982Z",
                "start" => "2016-07-10",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Byn4ntwnlW"
                ]
            ],
            [
                "objectId" => "dDgMXdWytk",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "end" => "2016-07-17",
                "createdAt" => "2016-07-12T02:27:36.573Z",
                "total" => "402",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "qty" => 1,
                "sim" => "empty",
                "updatedAt" => "2016-07-12T02:27:36.573Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "5joZa3wxWM"
                ],
                "days" => 3,
                "start" => "2016-07-14",
                "status" => 0
            ],
            [
                "objectId" => "dHM9rbTXyV",
                "status" => 0,
                "total" => "536",
                "qty" => 4,
                "createdAt" => "2016-06-17T08:42:59.126Z",
                "start" => "2016-07-13",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "pickup" => "vip",
                "end" => "2016-07-17",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rc28eeL0tB"
                ],
                "days" => 4,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "updatedAt" => "2016-06-17T08:44:04.251Z",
                "order_id" => "dHM9rbTXyV"
            ],
            [
                "objectId" => "dPzUL3vKOl",
                "total" => "218",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JEuUikVWlN"
                ],
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "days" => 2,
                "start" => "2016-07-14",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "createdAt" => "2016-07-01T10:17:30.145Z",
                "updatedAt" => "2016-07-01T10:17:30.145Z",
                "qty" => 1,
                "end" => "2016-07-16",
                "pickup" => "empty"
            ],
            [
                "objectId" => "dvVU3DJMgH",
                "createdAt" => "2016-06-21T09:32:46.407Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "MrS9C9cTRM"
                ],
                "qty" => 2,
                "end" => "2016-07-18",
                "updatedAt" => "2016-06-21T09:32:46.407Z",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "start" => "2016-07-11",
                "sim" => "empty",
                "days" => 7,
                "total" => "338"
            ],
            [
                "objectId" => "e5sefoRtif",
                "qty" => 1,
                "createdAt" => "2016-07-04T19:46:15.635Z",
                "updatedAt" => "2016-07-05T02:06:57.961Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y7hEXTbREl"
                ],
                "end" => "2016-07-17",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "sim" => "empty",
                "status" => -1,
                "total" => "390",
                "start" => "2016-07-14",
                "days" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "HdkzpF1PQE"
                ],
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "eYYSp72u5M"
                ],
                "order_id" => "e5sefoRtif"
            ],
            [
                "objectId" => "e87R3auVld",
                "createdAt" => "2016-07-01T08:18:25.148Z",
                "updatedAt" => "2016-07-06T04:46:55.820Z",
                "qty" => 3,
                "status" => 1,
                "days" => 4,
                "total" => "1608",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3j27w55T5E"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "pickup" => "empty",
                "end" => "2016-07-17",
                "sim" => "empty",
                "start" => "2016-07-13",
                "order_id" => "e87R3auVld"
            ],
            [
                "objectId" => "eEpgXL1jV8",
                "days" => 5,
                "pickup" => "empty",
                "end" => "2016-07-17",
                "createdAt" => "2016-07-08T09:20:03.053Z",
                "status" => 0,
                "total" => "5680",
                "updatedAt" => "2016-07-08T09:20:03.053Z",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "kUNN5S9BPD"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "start" => "2016-07-12",
                "qty" => 8,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "QOErSqtPSC"
                ]
            ],
            [
                "objectId" => "eRxNFhXoxP",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "days" => 3,
                "sim" => "empty",
                "qty" => 3,
                "updatedAt" => "2016-07-12T01:48:13.946Z",
                "pickup" => "empty",
                "end" => "2016-07-17",
                "createdAt" => "2016-07-12T01:41:11.473Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "total" => "1206",
                "status" => -1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "1Rv37wx14w"
                ],
                "start" => "2016-07-14",
                "order_id" => "eRxNFhXoxP",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "eNn6bvpsxM"
                ]
            ],
            [
                "objectId" => "einKaoTMPo",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HF7oj9daYx"
                ],
                "qty" => 1,
                "end" => "2016-07-19",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "pickup" => "empty",
                "createdAt" => "2016-07-04T12:58:06.472Z",
                "days" => 10,
                "status" => 0,
                "start" => "2016-07-09",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "updatedAt" => "2017-02-20T03:41:56.659Z",
                "total" => "1560",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "pbvxQvOZSl"
                ],
                "order_id" => "einKaoTMPo"
            ],
            [
                "objectId" => "emwexh953r",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CDj3eFNZC8"
                ],
                "days" => 2,
                "status" => 0,
                "end" => "2016-07-16",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "sim" => "empty",
                "updatedAt" => "2016-07-01T13:11:30.673Z",
                "total" => "118",
                "start" => "2016-07-14",
                "createdAt" => "2016-07-01T13:11:30.673Z"
            ],
            [
                "objectId" => "f5J6MmA9uc",
                "qty" => 1,
                "pickup" => "vip",
                "updatedAt" => "2016-07-06T04:45:41.046Z",
                "createdAt" => "2016-07-02T23:58:13.168Z",
                "days" => 3,
                "start" => "2016-07-14",
                "total" => "582",
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "qjDsm6QG2U"
                ],
                "status" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "sim" => "empty",
                "order_id" => "f5J6MmA9uc"
            ],
            [
                "objectId" => "f8NB6QEmkg",
                "updatedAt" => "2016-07-06T04:47:41.852Z",
                "status" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "days" => 4,
                "start" => "2016-07-13",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3gMwWpMQs5"
                ],
                "createdAt" => "2016-06-24T08:07:50.418Z",
                "total" => "1352",
                "pickup" => "empty",
                "qty" => 2,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "end" => "2016-07-17",
                "order_id" => "f8NB6QEmkg"
            ],
            [
                "objectId" => "fFUJD9HRKm",
                "createdAt" => "2016-07-05T02:56:23.609Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "qty" => 1,
                "end" => "2016-07-17",
                "sim" => "empty",
                "days" => 5,
                "pickup" => "empty",
                "start" => "2016-07-12",
                "updatedAt" => "2016-07-05T02:56:23.609Z",
                "total" => "670",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ]
            ],
            [
                "objectId" => "gGIyMMaHxq",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "NNl7KjMbgD"
                ],
                "status" => 0,
                "total" => "150",
                "start" => "2016-07-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FVMexX8u7w"
                ],
                "updatedAt" => "2016-07-01T10:41:02.061Z",
                "sim" => "empty",
                "days" => 3,
                "createdAt" => "2016-07-01T10:41:02.061Z",
                "qty" => 1,
                "end" => "2016-07-15"
            ],
            [
                "objectId" => "gND90SjXc7",
                "updatedAt" => "2016-06-11T07:17:16.071Z",
                "createdAt" => "2016-06-11T07:17:16.071Z",
                "start" => "2016-06-01",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ],
                "sim" => "empty",
                "days" => 1,
                "pickup" => "empty",
                "end" => "2016-06-02",
                "status" => 0,
                "total" => "247",
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "onTRMGr6o5"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ]
            ],
            [
                "objectId" => "gj63LNb0Z5",
                "createdAt" => "2016-07-06T12:55:58.831Z",
                "updatedAt" => "2016-07-06T12:55:58.831Z",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "status" => 0,
                "qty" => 1,
                "days" => 5,
                "start" => "2016-07-12",
                "end" => "2016-07-17",
                "pickup" => "empty",
                "total" => "415"
            ],
            [
                "objectId" => "guWRhX6ddv",
                "total" => "333",
                "days" => -29,
                "status" => 0,
                "qty" => 3,
                "sim" => "empty",
                "updatedAt" => "2016-06-20T11:32:36.740Z",
                "start" => "2016-07-05",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "pickup" => "empty",
                "createdAt" => "2016-06-20T11:32:36.740Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "e7IeRV7BLk"
                ],
                "end" => "2016-06-06"
            ],
            [
                "objectId" => "h96fitITVP",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "days" => 4,
                "start" => "2016-07-14",
                "sim" => "empty",
                "end" => "2016-07-18",
                "qty" => 4,
                "total" => "536",
                "pickup" => "vip",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rc28eeL0tB"
                ],
                "createdAt" => "2016-06-17T06:36:29.579Z",
                "updatedAt" => "2016-06-17T06:37:11.005Z",
                "order_id" => "h96fitITVP"
            ],
            [
                "objectId" => "hShm3blPWA",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "start" => "2016-07-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "days" => 1,
                "status" => 0,
                "total" => "83",
                "end" => "2016-07-13",
                "qty" => 1,
                "sim" => "empty",
                "updatedAt" => "2016-07-06T12:57:41.239Z",
                "pickup" => "empty",
                "createdAt" => "2016-07-06T12:57:41.239Z"
            ],
            [
                "objectId" => "hn8PlmGOA4",
                "end" => "2016-08-24",
                "sim" => "",
                "createdAt" => "2016-08-19T15:59:51.379Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "qty" => 1,
                "status" => 0,
                "total" => "155000",
                "updatedAt" => "2016-08-19T15:59:51.379Z",
                "days" => 4,
                "start" => "2016-08-20",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "pickup" => "empty"
            ],
            [
                "objectId" => "hvSTHvhYV0",
                "start" => "2017-06-08",
                "updatedAt" => "2017-01-16T06:35:19.452Z",
                "qty" => 5,
                "end" => "2017-06-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7sqrLzSQ2L"
                ],
                "status" => 0,
                "createdAt" => "2017-01-16T06:35:19.452Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "total" => "210",
                "days" => 4,
                "pickup" => "budget",
                "sim" => "sim3"
            ],
            [
                "objectId" => "i2lNppi4Mp",
                "days" => 2,
                "end" => "2016-07-16",
                "pickup" => "empty",
                "qty" => 1,
                "start" => "2016-07-14",
                "createdAt" => "2016-07-05T14:50:53.098Z",
                "updatedAt" => "2016-07-05T14:50:53.098Z",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "total" => "268",
                "status" => 0
            ],
            [
                "objectId" => "i8qxgwKxGy",
                "status" => 0,
                "pickup" => "empty",
                "days" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "unYx0pIfzG"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "start" => "2016-07-14",
                "createdAt" => "2016-07-04T15:26:33.294Z",
                "qty" => 1,
                "total" => "169",
                "updatedAt" => "2016-07-04T15:26:33.294Z",
                "end" => "2016-07-17"
            ],
            [
                "objectId" => "iAP7Dk6G0z",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "start" => "2016-07-11",
                "qty" => 1,
                "end" => "2016-07-17",
                "createdAt" => "2016-07-08T08:20:27.218Z",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "QOErSqtPSC"
                ],
                "total" => "654",
                "updatedAt" => "2016-07-08T08:20:27.218Z",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "kUNN5S9BPD"
                ],
                "days" => 6
            ],
            [
                "objectId" => "iD5P7m4WSi",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "A9nPsopwDC"
                ],
                "updatedAt" => "2016-07-05T07:37:45.983Z",
                "start" => "2016-07-12",
                "end" => "2016-07-15",
                "status" => 0,
                "qty" => 3,
                "createdAt" => "2016-07-05T07:37:45.983Z",
                "sim" => "empty",
                "total" => "495",
                "days" => 3,
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ]
            ],
            [
                "objectId" => "jZO5yeAL9n",
                "total" => "218",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "updatedAt" => "2016-06-21T16:10:25.071Z",
                "start" => "2016-07-13",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "createdAt" => "2016-06-21T16:10:08.798Z",
                "sim" => "empty",
                "qty" => 1,
                "pickup" => "budget",
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "status" => 0,
                "days" => 4,
                "order_id" => "jZO5yeAL9n"
            ],
            [
                "objectId" => "juwA4zUN58",
                "status" => 0,
                "total" => "835",
                "sim" => "empty",
                "updatedAt" => "2017-02-20T03:49:51.453Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pds3HoTFh3"
                ],
                "days" => 5,
                "createdAt" => "2016-07-14T02:20:15.494Z",
                "end" => "2016-07-18",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "start" => "2016-07-13",
                "pickup" => "empty",
                "qty" => 1,
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "E3DIfaCyA6"
                ],
                "order_id" => "juwA4zUN58"
            ],
            [
                "objectId" => "k6bBPuifxK",
                "total" => "328000",
                "updatedAt" => "2017-01-11T06:10:47.529Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "fkoX3OapCN"
                ],
                "sim" => "",
                "createdAt" => "2017-01-11T06:10:47.529Z",
                "days" => 30,
                "start" => "2016-05-31",
                "end" => "2016-06-30",
                "qty" => 2,
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "wJQK59Nzkn"
                ],
                "status" => 0
            ],
            [
                "objectId" => "kBSnazTRvZ",
                "days" => 3,
                "qty" => 1,
                "sim" => "empty",
                "start" => "2016-07-14",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "createdAt" => "2016-06-20T14:28:47.960Z",
                "updatedAt" => "2016-06-20T14:28:47.960Z",
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "status" => 0,
                "total" => "134",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l7Fa0k5cJS"
                ],
                "pickup" => "empty"
            ],
            [
                "objectId" => "kBuui1zpGy",
                "start" => "2016-06-23",
                "createdAt" => "2016-06-22T03:58:36.738Z",
                "end" => "2016-06-24",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "days" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "onTRMGr6o5"
                ],
                "sim" => "sim1",
                "pickup" => "empty",
                "total" => "247",
                "qty" => 1,
                "updatedAt" => "2016-06-22T03:59:23.521Z",
                "status" => 0,
                "order_id" => "oXs6yXBWVw"
            ],
            [
                "objectId" => "kCdZbvbIIx",
                "total" => "247",
                "end" => "2016-07-16",
                "pickup" => "empty",
                "sim" => "empty",
                "days" => 32,
                "status" => 0,
                "createdAt" => "2016-07-04T06:34:21.067Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "start" => "2016-06-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Mz9mbcjihG"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ],
                "qty" => 1,
                "updatedAt" => "2016-07-04T06:34:21.067Z"
            ],
            [
                "objectId" => "kIGAWD7k7F",
                "sim" => "empty",
                "end" => "2016-07-18",
                "qty" => 1,
                "createdAt" => "2016-06-21T10:51:32.200Z",
                "updatedAt" => "2016-07-06T04:51:03.483Z",
                "start" => "2016-07-11",
                "days" => 7,
                "pickup" => "empty",
                "total" => "1183",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "status" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "MrS9C9cTRM"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "order_id" => "kIGAWD7k7F"
            ],
            [
                "objectId" => "kchJE74BJU",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "sim" => "",
                "start" => "2017-10-26",
                "end" => "2017-10-27",
                "updatedAt" => "2016-10-18T08:38:37.333Z",
                "days" => 1,
                "pickup" => "empty",
                "createdAt" => "2016-10-18T08:38:37.333Z",
                "total" => "164000",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "lDSwy1Oijd"
                ]
            ],
            [
                "objectId" => "kqkLI0jHQi",
                "end" => "2016-07-17",
                "updatedAt" => "2016-07-02T03:37:56.062Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "pickup" => "empty",
                "total" => "268",
                "qty" => 2,
                "start" => "2016-07-13",
                "days" => 4,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "createdAt" => "2016-07-02T03:36:45.760Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ujDdh5LNLw"
                ],
                "sim" => "empty",
                "status" => 0,
                "order_id" => "kqkLI0jHQi"
            ],
            [
                "objectId" => "ksNFazNV9t",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "sim" => "empty",
                "createdAt" => "2016-06-17T09:52:07.933Z",
                "days" => 4,
                "end" => "2016-07-17",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "qty" => 4,
                "total" => "676",
                "updatedAt" => "2016-06-17T09:52:16.621Z",
                "pickup" => "empty",
                "start" => "2016-07-13",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rc28eeL0tB"
                ],
                "order_id" => "ksNFazNV9t"
            ],
            [
                "objectId" => "ksR1HkLFZE",
                "pickup" => "empty",
                "qty" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "createdAt" => "2016-11-29T09:44:43.249Z",
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "updatedAt" => "2016-11-29T09:44:43.249Z",
                "start" => "2016-11-29",
                "status" => 0,
                "days" => 5,
                "end" => "2016-12-04",
                "total" => "310000"
            ],
            [
                "objectId" => "kwkbcZ2MbK",
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3QXmebzjuZ"
                ],
                "qty" => 1,
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "IzHXHE8tbA"
                ],
                "pickup" => "empty",
                "total" => "165",
                "status" => 0,
                "days" => 3,
                "updatedAt" => "2016-06-20T09:13:56.664Z",
                "createdAt" => "2016-06-20T09:13:56.664Z",
                "start" => "2016-07-14"
            ],
            [
                "objectId" => "l1CDFWRbQl",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "onTRMGr6o5"
                ],
                "createdAt" => "2017-01-10T18:31:15.798Z",
                "sim" => "empty",
                "qty" => 20,
                "status" => 0,
                "updatedAt" => "2017-01-10T18:31:15.798Z",
                "days" => 4,
                "pickup" => "empty",
                "start" => "2017-06-08",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "JxrBedybW8"
                ],
                "total" => "24000",
                "end" => "2017-06-12"
            ],
            [
                "objectId" => "l79UXXwNNB",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "8yoSgtSCKY"
                ],
                "createdAt" => "2016-06-24T07:20:11.605Z",
                "sim" => "empty",
                "status" => 1,
                "updatedAt" => "2016-07-06T04:47:57.991Z",
                "days" => 2,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "total" => "330",
                "end" => "2016-07-14",
                "qty" => 1,
                "start" => "2016-07-12",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "A9nPsopwDC"
                ],
                "order_id" => "l79UXXwNNB"
            ],
            [
                "objectId" => "lUal1Axpom",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "end" => "2016-07-17",
                "updatedAt" => "2016-06-20T04:47:09.272Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "IzHXHE8tbA"
                ],
                "pickup" => "empty",
                "total" => "165",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "3QXmebzjuZ"
                ],
                "days" => 3,
                "status" => 0,
                "qty" => 1,
                "start" => "2016-07-14",
                "createdAt" => "2016-06-20T04:47:09.272Z",
                "sim" => "empty"
            ],
            [
                "objectId" => "lWOUf7PUXw",
                "start" => "2016-12-28",
                "total" => "334000",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Z5WyjvyzOP"
                ],
                "updatedAt" => "2016-12-20T09:18:17.181Z",
                "end" => "2016-12-30",
                "qty" => 1,
                "days" => 2,
                "createdAt" => "2016-12-20T09:18:17.181Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6VSsxUSqRr"
                ],
                "sim" => "",
                "pickup" => "empty"
            ],
            [
                "objectId" => "lo0r26dwiI",
                "updatedAt" => "2016-07-07T09:52:05.846Z",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ],
                "createdAt" => "2016-07-07T07:38:48.168Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "sim" => "empty",
                "end" => "2016-07-17",
                "status" => 0,
                "start" => "2016-07-10",
                "qty" => 1,
                "total" => "1309",
                "days" => 7,
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "WkRfknbeFh"
                ],
                "order_id" => "lo0r26dwiI"
            ],
            [
                "objectId" => "ls6re7DIxU",
                "createdAt" => "2016-05-23T09:52:46.055Z",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "M3ste4niYr"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "total" => "218",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "updatedAt" => "2017-02-20T03:41:06.610Z",
                "end" => "2016-07-17",
                "pickup" => "empty",
                "qty" => 1,
                "start" => "2016-07-14",
                "days" => 3,
                "order_id" => "ls6re7DIxU"
            ],
            [
                "objectId" => "mLgIOUd2OG",
                "updatedAt" => "2016-07-06T13:20:24.467Z",
                "start" => "2016-07-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "end" => "2016-07-17",
                "pickup" => "empty",
                "total" => "670",
                "status" => 0,
                "createdAt" => "2016-07-06T13:20:24.467Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "UTeb7gWPMj"
                ],
                "days" => 5,
                "sim" => "empty"
            ],
            [
                "objectId" => "mqk270tEuJ",
                "start" => "2016-07-14",
                "sim" => "empty",
                "end" => "2016-07-16",
                "pickup" => "empty",
                "createdAt" => "2016-07-07T07:51:56.396Z",
                "total" => "380",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "days" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rm3jSTrjjs"
                ],
                "updatedAt" => "2016-07-07T07:51:56.396Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "zubnVyNwBD"
                ],
                "qty" => 2
            ],
            [
                "objectId" => "mt5rxhpLKR",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HCGkU0O6jw"
                ],
                "updatedAt" => "2016-07-06T04:23:06.188Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "end" => "2016-07-17",
                "qty" => 1,
                "sim" => "sim3",
                "createdAt" => "2016-07-06T04:23:06.188Z",
                "days" => 5,
                "start" => "2016-07-12",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "total" => "670"
            ],
            [
                "objectId" => "muXhF8DNZg",
                "end" => "2016-07-01",
                "updatedAt" => "2016-08-09T05:09:15.159Z",
                "days" => 1,
                "total" => "164000",
                "sim" => "",
                "createdAt" => "2016-08-09T05:09:15.159Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "lDSwy1Oijd"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "pickup" => "vip",
                "start" => "2016-06-30",
                "status" => 0,
                "qty" => 1
            ],
            [
                "objectId" => "n7pwZTKgRF",
                "status" => 0,
                "days" => 0,
                "end" => "2016-09-05",
                "pickup" => "vip",
                "total" => "155000",
                "start" => "2016-09-05",
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "qty" => 1,
                "updatedAt" => "2016-09-06T03:15:25.940Z",
                "createdAt" => "2016-09-06T03:15:25.940Z"
            ],
            [
                "objectId" => "n9Hlv9OeJo",
                "updatedAt" => "2016-07-06T05:49:00.824Z",
                "start" => "2016-07-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "createdAt" => "2016-07-06T05:40:39.268Z",
                "days" => 5,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rfwO91AMxs"
                ],
                "qty" => 1,
                "pickup" => "empty",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "status" => -1,
                "total" => "670",
                "end" => "2016-07-17",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "8bY9nUNuVg"
                ],
                "order_id" => "n9Hlv9OeJo"
            ],
            [
                "objectId" => "nl389i5UI7",
                "total" => "676",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "M3ste4niYr"
                ],
                "start" => "2016-07-14",
                "status" => 0,
                "pickup" => "empty",
                "updatedAt" => "2016-07-05T06:10:15.704Z",
                "qty" => 1,
                "end" => "2016-07-16",
                "createdAt" => "2016-07-05T06:10:15.704Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "JxrBedybW8"
                ],
                "days" => 2
            ],
            [
                "objectId" => "nmbae2c9jc",
                "start" => "2016-07-14",
                "updatedAt" => "2016-07-04T14:16:32.132Z",
                "sim" => "sim3",
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Pk8FsL6Zjh"
                ],
                "end" => "2016-07-19",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "HdkzpF1PQE"
                ],
                "total" => "130",
                "status" => 0,
                "createdAt" => "2016-07-04T14:16:32.132Z",
                "pickup" => "empty",
                "qty" => 1
            ],
            [
                "objectId" => "o4G9uD3NCm",
                "qty" => 1,
                "updatedAt" => "2016-07-10T02:09:01.582Z",
                "pickup" => "budget",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "end" => "2016-07-17",
                "status" => -1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "zToHSBPnAD"
                ],
                "createdAt" => "2016-07-10T02:07:26.795Z",
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "sim" => "empty",
                "total" => "945",
                "start" => "2016-07-12",
                "order_id" => "o4G9uD3NCm",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Gktdx6Jv2U"
                ]
            ],
            [
                "objectId" => "o95CQAZEec",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ],
                "days" => 5,
                "createdAt" => "2016-07-05T02:53:52.614Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "status" => 0,
                "pickup" => "empty",
                "qty" => 1,
                "start" => "2016-07-12",
                "total" => "670",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "updatedAt" => "2016-07-05T02:53:52.614Z",
                "end" => "2016-07-17"
            ],
            [
                "objectId" => "oLEk86E5tf",
                "start" => "2016-07-12",
                "end" => "2016-07-15",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "createdAt" => "2016-07-04T05:06:24.505Z",
                "total" => "109",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "qty" => 1,
                "updatedAt" => "2016-07-04T05:06:26.600Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "wDwgLfgDde"
                ],
                "days" => 3,
                "sim" => "empty",
                "status" => 0,
                "pickup" => "empty",
                "order_id" => "oLEk86E5tf"
            ],
            [
                "objectId" => "oMZ73PJAwT",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "qty" => 1,
                "updatedAt" => "2016-07-01T15:57:31.826Z",
                "sim" => "empty",
                "end" => "2016-07-17",
                "start" => "2016-07-14",
                "createdAt" => "2016-07-01T15:57:15.715Z",
                "pickup" => "empty",
                "status" => 0,
                "days" => 3,
                "total" => "169",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y7hEXTbREl"
                ],
                "order_id" => "oMZ73PJAwT"
            ],
            [
                "objectId" => "oQxkMzDVn0",
                "createdAt" => "2016-07-01T09:35:50.032Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "total" => "1090",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "DjXPaKCvFN"
                ],
                "end" => "2016-07-17",
                "start" => "2016-07-12",
                "qty" => 1,
                "updatedAt" => "2016-07-06T04:46:22.660Z",
                "days" => 5,
                "sim" => "empty",
                "status" => 1,
                "order_id" => "oQxkMzDVn0"
            ],
            [
                "objectId" => "oXs6yXBWVw",
                "days" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "sim" => "sim1",
                "updatedAt" => "2016-06-22T03:59:23.421Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "onTRMGr6o5"
                ],
                "pickup" => "empty",
                "status" => 0,
                "start" => "2016-06-23",
                "total" => "169",
                "createdAt" => "2016-06-22T03:58:36.600Z",
                "end" => "2016-06-24",
                "qty" => 1,
                "order_id" => "oXs6yXBWVw"
            ],
            [
                "objectId" => "pHGCzryLxy",
                "qty" => 1,
                "total" => "218",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "AI5wkQq7FX"
                ],
                "createdAt" => "2016-06-19T05:15:48.069Z",
                "end" => "2016-07-17",
                "updatedAt" => "2016-06-19T05:16:03.645Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "start" => "2016-07-13",
                "status" => 0,
                "pickup" => "budget",
                "days" => 4,
                "sim" => "empty",
                "order_id" => "pHGCzryLxy"
            ],
            [
                "objectId" => "pRC8vxQb1a",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ],
                "status" => 0,
                "start" => "2017-06-08",
                "total" => "1384",
                "updatedAt" => "2017-01-16T15:02:15.014Z",
                "days" => 4,
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "end" => "2017-06-12",
                "createdAt" => "2017-01-16T15:02:15.014Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "sim" => "empty"
            ],
            [
                "objectId" => "pfI9hUSldl",
                "total" => "242000",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "rAoKCNUn9Y"
                ],
                "sim" => "",
                "days" => 4,
                "status" => 0,
                "end" => "2016-08-12",
                "start" => "2016-08-08",
                "qty" => 2,
                "pickup" => "empty",
                "createdAt" => "2016-07-17T06:41:34.864Z",
                "updatedAt" => "2016-07-17T06:41:34.864Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WnyrNZ6kao"
                ]
            ],
            [
                "objectId" => "pgY8gskt21",
                "sim" => "empty",
                "qty" => 2,
                "end" => "2016-07-18",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "total" => "338",
                "updatedAt" => "2016-06-20T03:02:00.686Z",
                "pickup" => "empty",
                "createdAt" => "2016-06-20T03:00:32.309Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "MrS9C9cTRM"
                ],
                "days" => 7,
                "start" => "2016-07-11",
                "status" => 0,
                "order_id" => "pgY8gskt21"
            ],
            [
                "objectId" => "pjpSLK5iud",
                "end" => "2016-07-17",
                "days" => 5,
                "sim" => "empty",
                "updatedAt" => "2016-06-21T08:06:44.656Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fA9g9PYtKW"
                ],
                "total" => "466",
                "status" => 0,
                "createdAt" => "2016-06-21T08:06:44.656Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "start" => "2016-07-12",
                "pickup" => "empty",
                "qty" => 2
            ],
            [
                "objectId" => "q121C0aNvJ",
                "start" => "2016-07-04",
                "updatedAt" => "2016-07-04T19:37:12.181Z",
                "days" => 5,
                "sim" => "empty",
                "end" => "2016-07-09",
                "status" => 0,
                "total" => "130",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y7hEXTbREl"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "HdkzpF1PQE"
                ],
                "createdAt" => "2016-07-04T19:37:12.181Z"
            ],
            [
                "objectId" => "qLIsIQ9KmO",
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HCGkU0O6jw"
                ],
                "pickup" => "empty",
                "status" => 0,
                "days" => 5,
                "start" => "2016-07-12",
                "sim" => "sim2",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "createdAt" => "2016-07-06T03:54:19.435Z",
                "total" => "670",
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "updatedAt" => "2016-07-06T03:54:19.435Z"
            ],
            [
                "objectId" => "qsaPMnp4hh",
                "createdAt" => "2017-01-10T03:40:29.821Z",
                "updatedAt" => "2017-01-10T03:40:29.821Z",
                "status" => 0,
                "sim" => "",
                "days" => 5,
                "total" => "990000",
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "start" => "2017-01-10",
                "qty" => 5,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "end" => "2017-01-15"
            ],
            [
                "objectId" => "r5Mz9Iby8R",
                "status" => -1,
                "total" => "436",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JEuUikVWlN"
                ],
                "end" => "2016-07-16",
                "createdAt" => "2016-07-04T17:13:01.664Z",
                "updatedAt" => "2016-07-05T02:08:08.099Z",
                "pickup" => "empty",
                "sim" => "empty",
                "start" => "2016-07-14",
                "qty" => 1,
                "days" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "AL0F5CALkF"
                ],
                "order_id" => "r5Mz9Iby8R"
            ],
            [
                "objectId" => "rFClwup2Kw",
                "sim" => "empty",
                "updatedAt" => "2016-07-04T08:48:32.004Z",
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CDj3eFNZC8"
                ],
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "days" => 2,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "pickup" => "empty",
                "end" => "2016-07-16",
                "total" => "118",
                "start" => "2016-07-14",
                "createdAt" => "2016-07-04T08:46:35.311Z",
                "order_id" => "rFClwup2Kw"
            ],
            [
                "objectId" => "rbRuo70WgU",
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "m2ePijI816"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "start" => "2016-07-12",
                "status" => 0,
                "pickup" => "empty",
                "qty" => 1,
                "updatedAt" => "2016-07-05T02:58:05.989Z",
                "sim" => "empty",
                "createdAt" => "2016-07-05T02:58:05.989Z",
                "total" => "670",
                "end" => "2016-07-17"
            ],
            [
                "objectId" => "rdSwXf5ZXm",
                "start" => "2017-06-08",
                "total" => "346",
                "updatedAt" => "2017-01-11T07:05:33.157Z",
                "sim" => "empty",
                "createdAt" => "2017-01-11T07:05:33.157Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ],
                "status" => 0,
                "pickup" => "empty",
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "days" => 4,
                "end" => "2017-06-12"
            ],
            [
                "objectId" => "rog3nbVvn5",
                "status" => 0,
                "updatedAt" => "2016-06-08T15:47:09.078Z",
                "pickup" => "budget",
                "total" => "834",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "qWDB5jm9PW"
                ],
                "end" => "2016-07-01",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "createdAt" => "2016-06-08T15:47:09.078Z",
                "start" => "2016-07-11",
                "sim" => "sim1",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "qty" => 6,
                "days" => -10
            ],
            [
                "objectId" => "rtOczmmmrD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "status" => 0,
                "pickup" => "empty",
                "days" => 4,
                "start" => "2016-07-14",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "end" => "2016-07-18",
                "createdAt" => "2016-07-04T13:11:04.906Z",
                "sim" => "empty",
                "updatedAt" => "2016-07-04T13:11:04.906Z",
                "total" => "134",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "qhK5zW9uMV"
                ]
            ],
            [
                "objectId" => "rtPtSuhghu",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "iFilzm1htP"
                ],
                "total" => "218",
                "status" => 0,
                "createdAt" => "2016-07-01T07:30:40.162Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "pickup" => "empty",
                "qty" => 2,
                "end" => "2016-07-14",
                "sim" => "empty",
                "days" => 1,
                "updatedAt" => "2016-07-01T07:30:40.162Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "start" => "2016-07-13"
            ],
            [
                "objectId" => "sIqSZnnNoD",
                "end" => "2016-06-17",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "total" => "166",
                "days" => -25,
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "status" => 0,
                "updatedAt" => "2016-06-21T07:09:28.383Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2016-07-12",
                "qty" => 2,
                "createdAt" => "2016-06-21T07:09:28.383Z"
            ],
            [
                "objectId" => "shqNi2aXSd",
                "sim" => "empty",
                "status" => 0,
                "updatedAt" => "2016-08-22T07:06:47.995Z",
                "days" => 5,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ],
                "end" => "2016-08-27",
                "qty" => 1,
                "start" => "2016-08-22",
                "pickup" => "empty",
                "createdAt" => "2016-08-22T07:06:47.995Z",
                "total" => "1250",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ]
            ],
            [
                "objectId" => "sinB5BYwHH",
                "days" => 5,
                "end" => "2016-07-17",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "pickup" => "empty",
                "status" => 0,
                "createdAt" => "2016-06-21T10:15:57.568Z",
                "updatedAt" => "2016-06-21T10:15:57.568Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "total" => "338",
                "start" => "2016-07-12",
                "qty" => 2,
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ]
            ],
            [
                "objectId" => "snCJuz6MXb",
                "updatedAt" => "2016-07-05T14:51:51.205Z",
                "sim" => "empty",
                "createdAt" => "2016-07-05T14:51:51.205Z",
                "days" => 2,
                "end" => "2016-07-16",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "pickup" => "empty",
                "start" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "BwHYpcpvFa"
                ],
                "status" => 0,
                "total" => "222",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ]
            ],
            [
                "objectId" => "t1nlbZT215",
                "end" => "2016-07-16",
                "pickup" => "empty",
                "createdAt" => "2016-07-01T16:40:41.307Z",
                "start" => "2016-07-14",
                "updatedAt" => "2016-07-01T16:40:41.307Z",
                "status" => 0,
                "qty" => 1,
                "days" => 2,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "K3JqYaFShD"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "sim" => "empty",
                "total" => "218"
            ],
            [
                "objectId" => "t5FkyrKZ2N",
                "start" => "2016-07-14",
                "days" => 3,
                "qty" => 1,
                "sim" => "empty",
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "OvlF9MlfAa"
                ],
                "pickup" => "empty",
                "end" => "2016-07-17",
                "total" => "120",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "updatedAt" => "2016-07-01T15:11:46.330Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "createdAt" => "2016-07-01T15:11:46.330Z"
            ],
            [
                "objectId" => "tBBUidVEgP",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "aSojZ9wCCE"
                ],
                "start" => "2016-07-14",
                "pickup" => "empty",
                "qty" => 1,
                "end" => "2016-07-16",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "sqgPwnv4ys"
                ],
                "sim" => "empty",
                "days" => 2,
                "updatedAt" => "2016-07-06T04:45:02.423Z",
                "createdAt" => "2016-07-04T08:44:13.765Z",
                "status" => 1,
                "total" => "338",
                "order_id" => "tBBUidVEgP"
            ],
            [
                "objectId" => "tGZN8Ds19Z",
                "sim" => "empty",
                "createdAt" => "2016-07-03T04:50:02.751Z",
                "status" => 0,
                "total" => "333",
                "updatedAt" => "2016-07-03T04:50:06.095Z",
                "days" => 5,
                "pickup" => "empty",
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "start" => "2016-07-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "qty" => 3,
                "order_id" => "tGZN8Ds19Z"
            ],
            [
                "objectId" => "tHegzx3HqN",
                "qty" => 3,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "zToHSBPnAD"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "total" => "1404",
                "end" => "2016-07-17",
                "start" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "1Rv37wx14w"
                ],
                "sim" => "empty",
                "status" => 0,
                "days" => 3,
                "createdAt" => "2016-07-12T01:37:31.522Z",
                "pickup" => "empty",
                "updatedAt" => "2016-07-12T01:37:31.522Z"
            ],
            [
                "objectId" => "tINZewKkGM",
                "total" => "276",
                "createdAt" => "2016-07-08T01:45:15.236Z",
                "sim" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "updatedAt" => "2017-02-20T03:42:21.653Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "4pYNL359QX"
                ],
                "days" => 2,
                "start" => "2016-07-10",
                "end" => "2016-07-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "pickup" => "empty",
                "qty" => 1,
                "status" => 0,
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "J1uJSVD7CE"
                ],
                "order_id" => "tINZewKkGM"
            ],
            [
                "objectId" => "tM3ItqMKUv",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "SvTXmdzBbz"
                ],
                "days" => 1,
                "qty" => 1,
                "updatedAt" => "2016-08-18T12:36:32.671Z",
                "createdAt" => "2016-08-18T12:36:32.671Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "frUqQJyBKj"
                ],
                "total" => "347000",
                "pickup" => "empty",
                "status" => 0,
                "end" => "2016-08-19",
                "start" => "2016-08-18",
                "sim" => ""
            ],
            [
                "objectId" => "tRSyLZkXEf",
                "updatedAt" => "2016-07-03T04:44:57.925Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "start" => "2016-07-12",
                "pickup" => "empty",
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "end" => "2016-07-17",
                "status" => 0,
                "createdAt" => "2016-07-03T04:44:13.269Z",
                "total" => "333",
                "qty" => 3,
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "order_id" => "tRSyLZkXEf"
            ],
            [
                "objectId" => "u7AdzCY53R",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FPggXATTod"
                ],
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "sgKl8yotiO"
                ],
                "sim" => "empty",
                "end" => "2016-07-17",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Byn4ntwnlW"
                ],
                "createdAt" => "2016-07-07T04:33:58.352Z",
                "total" => "1309",
                "pickup" => "budget",
                "updatedAt" => "2016-07-07T04:33:58.352Z",
                "start" => "2016-07-10",
                "days" => 7,
                "status" => 0
            ],
            [
                "objectId" => "uGxbfDglh1",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "qEoQqaPvCk"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "1pskfC26St"
                ],
                "sim" => "empty",
                "total" => "2010",
                "end" => "2016-07-17",
                "status" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "createdAt" => "2016-06-10T03:50:37.651Z",
                "days" => 5,
                "updatedAt" => "2016-07-06T06:36:47.731Z",
                "qty" => 3,
                "start" => "2016-07-12",
                "pickup" => "empty",
                "order_id" => "uGxbfDglh1"
            ],
            [
                "objectId" => "uTJ17je7SN",
                "updatedAt" => "2016-07-13T06:14:13.701Z",
                "pickup" => "empty",
                "sim" => "",
                "status" => 0,
                "total" => "402",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "end" => "2016-07-17",
                "days" => 3,
                "createdAt" => "2016-07-13T06:14:13.701Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "qty" => 3,
                "start" => "2016-07-14"
            ],
            [
                "objectId" => "ulrALoDckH",
                "createdAt" => "2016-07-07T13:17:13.830Z",
                "pickup" => "empty",
                "sim" => "empty",
                "total" => "390",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "updatedAt" => "2017-02-20T03:43:28.721Z",
                "days" => 3,
                "start" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "DD6SPDp05R"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "HdkzpF1PQE"
                ],
                "end" => "2016-07-17",
                "qty" => 1,
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "UYkZckoazw"
                ],
                "order_id" => "ulrALoDckH"
            ],
            [
                "objectId" => "v1Jnq74Mot",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "oKvijC4uUD"
                ],
                "start" => "2017-01-12",
                "pickup" => "empty",
                "sim" => "",
                "createdAt" => "2017-01-11T19:34:54.049Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gZ63FP6fCP"
                ],
                "updatedAt" => "2017-01-11T19:34:54.049Z",
                "total" => "20",
                "days" => 4,
                "qty" => 1,
                "status" => 0,
                "end" => "2017-01-16"
            ],
            [
                "objectId" => "v5v0PvuCLo",
                "sim" => "empty",
                "status" => 0,
                "qty" => 1,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LsqDSlN9xB"
                ],
                "createdAt" => "2016-06-24T07:10:11.877Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UrQoBRxsqh"
                ],
                "end" => "2016-07-14",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "8yoSgtSCKY"
                ],
                "days" => 2,
                "start" => "2016-07-12",
                "updatedAt" => "2016-06-24T07:10:11.877Z",
                "pickup" => "empty",
                "total" => "300"
            ],
            [
                "objectId" => "vWYyKsTij5",
                "start" => "2016-07-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "pickup" => "empty",
                "updatedAt" => "2016-06-22T03:55:57.701Z",
                "days" => 5,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "end" => "2016-07-17",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "qty" => 3,
                "status" => 0,
                "sim" => "empty",
                "total" => "402",
                "createdAt" => "2016-06-22T03:55:57.701Z"
            ],
            [
                "objectId" => "vczhF2L1OM",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6VSsxUSqRr"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Z5WyjvyzOP"
                ],
                "pickup" => "empty",
                "qty" => 1,
                "total" => "334000",
                "createdAt" => "2016-07-19T06:24:30.856Z",
                "start" => "2016-07-19",
                "sim" => "",
                "updatedAt" => "2016-07-19T06:24:30.856Z",
                "days" => 1,
                "end" => "2016-07-20"
            ],
            [
                "objectId" => "vsta45TNZN",
                "sim" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TNwTMMULJ1"
                ],
                "status" => 0,
                "start" => "2017-06-08",
                "days" => 4,
                "createdAt" => "2017-01-17T01:49:16.918Z",
                "updatedAt" => "2017-01-17T01:49:16.918Z",
                "pickup" => "empty",
                "total" => "230",
                "end" => "2017-06-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "qty" => 1
            ],
            [
                "objectId" => "xVrlxHHNoH",
                "end" => "2016-07-17",
                "total" => "670",
                "sim" => "sim3",
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HCGkU0O6jw"
                ],
                "createdAt" => "2016-07-06T04:04:31.850Z",
                "status" => 0,
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DNFQck6Lkp"
                ],
                "updatedAt" => "2016-07-06T04:04:31.850Z",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7Is6nwPSCe"
                ],
                "start" => "2016-07-12"
            ],
            [
                "objectId" => "xzRsZKjoW8",
                "updatedAt" => "2017-01-16T02:18:25.783Z",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Z5WyjvyzOP"
                ],
                "start" => "2016-08-10",
                "end" => "2016-08-10",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6VSsxUSqRr"
                ],
                "pickup" => "empty",
                "createdAt" => "2016-08-10T06:41:00.739Z",
                "sim" => "",
                "days" => 0,
                "qty" => 1,
                "total" => "334000",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "sscnf8vq58"
                ],
                "order_id" => "xzRsZKjoW8",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "zTfC2AWmzL"
                ]
            ],
            [
                "objectId" => "yBZvBLfDyI",
                "qty" => 2,
                "end" => "2017-06-12",
                "start" => "2017-06-08",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "total" => "346",
                "status" => 0,
                "days" => 4,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2pR0uHGxOF"
                ],
                "sim" => "empty",
                "createdAt" => "2017-01-13T03:07:01.533Z",
                "updatedAt" => "2017-01-13T03:07:01.533Z",
                "pickup" => "empty"
            ],
            [
                "objectId" => "yPpYqhiKua",
                "days" => 30,
                "qty" => 1,
                "total" => "125000",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "4DfNM98rz6"
                ],
                "pickup" => "budget",
                "status" => 0,
                "updatedAt" => "2016-08-09T05:40:11.864Z",
                "sim" => "",
                "end" => "2016-07-01",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "fkoX3OapCN"
                ],
                "start" => "2016-06-01",
                "createdAt" => "2016-08-09T05:40:11.864Z"
            ],
            [
                "objectId" => "yjci0uS3Vv",
                "start" => "2016-06-29",
                "status" => 0,
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ],
                "total" => "247",
                "createdAt" => "2016-05-13T02:43:06.014Z",
                "updatedAt" => "2016-05-13T02:43:06.014Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "PcB6v0hCue"
                ],
                "days" => 2,
                "end" => "2016-07-01",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "qty" => 1
            ],
            [
                "objectId" => "yxa5oR7IlV",
                "start" => "2016-07-11",
                "end" => "2016-07-17",
                "pickup" => "budget",
                "createdAt" => "2016-07-08T08:11:44.726Z",
                "updatedAt" => "2016-07-08T08:11:44.726Z",
                "qty" => 1,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "kUNN5S9BPD"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "2CgQ3IJmEd"
                ],
                "days" => 6,
                "sim" => "sim2",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "SH0Owm8DHC"
                ],
                "status" => 0,
                "total" => "504"
            ],
            [
                "objectId" => "zHoL29ojO6",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "lDSwy1Oijd"
                ],
                "days" => 1,
                "pickup" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "aZZnxV1FeB"
                ],
                "qty" => 1,
                "end" => "2016-08-14",
                "createdAt" => "2016-07-09T07:27:38.012Z",
                "sim" => "",
                "start" => "2016-08-13",
                "updatedAt" => "2016-07-09T07:27:38.012Z",
                "status" => 0,
                "total" => "164000"
            ],
            [
                "objectId" => "zIJyRqlY7n",
                "createdAt" => "2016-07-07T07:54:45.738Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "zubnVyNwBD"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "start" => "2016-07-14",
                "total" => "545",
                "days" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WkaIgzV7Qq"
                ],
                "updatedAt" => "2016-07-07T07:54:45.738Z",
                "end" => "2016-07-16",
                "status" => 0,
                "sim" => "empty",
                "qty" => 5
            ],
            [
                "objectId" => "zJYbaCKEV7",
                "total" => "250",
                "createdAt" => "2016-10-07T11:38:59.360Z",
                "pickup" => "empty",
                "sim" => "empty",
                "end" => "2016-10-12",
                "days" => 5,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "status" => 0,
                "updatedAt" => "2016-10-07T11:38:59.360Z",
                "start" => "2016-10-07",
                "qty" => 1,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "9N5sCclTPO"
                ]
            ],
            [
                "objectId" => "zKZys1HYVI",
                "total" => "310000",
                "end" => "2017-01-15",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "start" => "2017-01-10",
                "days" => 5,
                "createdAt" => "2017-01-10T09:16:29.609Z",
                "updatedAt" => "2017-01-10T09:16:29.609Z",
                "pickup" => "empty",
                "status" => 0,
                "qty" => 2,
                "sim" => "",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ]
            ],
            [
                "objectId" => "zWyWasg0vK",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "start" => "2016-07-12",
                "status" => 0,
                "qty" => 1,
                "end" => "2016-07-18",
                "createdAt" => "2016-06-10T09:49:31.776Z",
                "updatedAt" => "2016-06-10T09:49:43.451Z",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oncARwqBKb"
                ],
                "total" => "134",
                "days" => 6,
                "order_id" => "zWyWasg0vK"
            ],
            [
                "objectId" => "zaLVlSJUKX",
                "end" => "2016-07-17",
                "sim" => "empty",
                "createdAt" => "2016-06-17T08:34:34.544Z",
                "start" => "2016-07-12",
                "total" => "268",
                "qty" => 2,
                "updatedAt" => "2016-06-17T08:34:48.437Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "MaGHICo3s0"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "euxOK4I9ge"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "oEk1XpeucO"
                ],
                "pickup" => "empty",
                "days" => 5,
                "status" => 0,
                "order_id" => "zaLVlSJUKX"
            ],
            [
                "objectId" => "8mf2yVBYxA",
                "end" => "2017-01-23",
                "updatedAt" => "2017-01-18T02:57:31.013Z",
                "start" => "2017-01-18",
                "total" => "65",
                "qty" => 1,
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "createdAt" => "2017-01-18T02:57:31.013Z",
                "pickup" => "vip",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "sim" => "empty",
                "days" => 5
            ],
            [
                "objectId" => "KDNFcUHTGm",
                "end" => "2017-06-12",
                "pickup" => "empty",
                "createdAt" => "2017-01-18T07:01:50.226Z",
                "total" => "288",
                "qty" => 1,
                "start" => "2017-06-08",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "updatedAt" => "2017-01-18T07:01:50.226Z",
                "days" => 4,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "sim" => "empty",
                "status" => 0
            ],
            [
                "objectId" => "zXPmTMEbwl",
                "pickup" => "empty",
                "qty" => 1,
                "createdAt" => "2017-01-18T07:06:34.520Z",
                "updatedAt" => "2017-01-18T07:06:34.520Z",
                "days" => 5,
                "end" => "2017-01-23",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "status" => 0,
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "lTk1YminOX"
                ],
                "start" => "2017-01-18",
                "total" => "325",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "sim" => "empty"
            ],
            [
                "objectId" => "FAtxxAf67g",
                "pickup" => "empty",
                "days" => 4,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "08n9Vygi67"
                ],
                "updatedAt" => "2017-01-20T03:25:19.927Z",
                "status" => 0,
                "sim" => "empty",
                "end" => "2017-06-12",
                "qty" => 10,
                "createdAt" => "2017-01-20T03:25:19.927Z",
                "total" => "79",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "start" => "2017-06-08"
            ],
            [
                "objectId" => "PtTa3HxX81",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "qty" => 15,
                "updatedAt" => "2017-01-20T03:30:11.659Z",
                "days" => 4,
                "createdAt" => "2017-01-20T03:30:11.659Z",
                "end" => "2017-06-12",
                "pickup" => "empty",
                "sim" => "empty",
                "total" => "77",
                "start" => "2017-06-08",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "status" => 0
            ],
            [
                "objectId" => "tpcsUVl1RS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "start" => "2016-06-01",
                "total" => "264",
                "sim" => "empty",
                "days" => 30,
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Qk6HSxEWkH"
                ],
                "createdAt" => "2017-01-20T07:33:40.894Z",
                "updatedAt" => "2017-01-20T07:33:40.894Z",
                "end" => "2016-07-01",
                "qty" => 3,
                "status" => 0
            ],
            [
                "objectId" => "cxhmLChWXe",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "updatedAt" => "2017-01-21T06:48:52.413Z",
                "days" => 4,
                "sim" => "empty",
                "pickup" => "empty",
                "qty" => 3,
                "createdAt" => "2017-01-21T06:48:52.413Z",
                "end" => "2017-06-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "total" => "77",
                "start" => "2017-06-08"
            ],
            [
                "objectId" => "UHsNqscpZc",
                "createdAt" => "2017-01-24T13:14:27.203Z",
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "total" => "288",
                "pickup" => "empty",
                "updatedAt" => "2017-01-24T13:14:27.203Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "start" => "2017-06-08",
                "days" => 4,
                "qty" => 4,
                "end" => "2017-06-12",
                "sim" => "empty"
            ],
            [
                "objectId" => "HWdrI8PLou",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "qty" => 2,
                "end" => "2017-06-12",
                "status" => 0,
                "days" => 4,
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "updatedAt" => "2017-01-24T13:21:37.705Z",
                "createdAt" => "2017-01-24T13:21:37.705Z",
                "start" => "2017-06-08",
                "total" => "288",
                "sim" => "empty"
            ],
            [
                "objectId" => "kEFoaDx3kc",
                "days" => 4,
                "updatedAt" => "2017-01-24T13:28:52.342Z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "start" => "2017-06-08",
                "total" => "2304",
                "createdAt" => "2017-01-24T13:28:52.342Z",
                "status" => 0,
                "sim" => "empty",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FB8XNZxcy4"
                ],
                "end" => "2017-06-12",
                "qty" => 2,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ]
            ],
            [
                "objectId" => "O24I91qzGG",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "createdAt" => "2017-01-24T13:30:17.179Z",
                "qty" => 2,
                "total" => "2304",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FB8XNZxcy4"
                ],
                "end" => "2017-06-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "start" => "2017-06-08",
                "updatedAt" => "2017-01-24T13:30:17.179Z",
                "days" => 4,
                "sim" => "empty",
                "status" => 0
            ],
            [
                "objectId" => "am82bjPD4x",
                "qty" => 2,
                "createdAt" => "2017-01-24T13:35:53.030Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "sim" => "empty",
                "updatedAt" => "2017-01-24T13:35:53.030Z",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FB8XNZxcy4"
                ],
                "days" => 5,
                "start" => "2017-06-07",
                "status" => 0,
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "total" => "2880",
                "pickup" => "empty",
                "end" => "2017-06-12"
            ],
            [
                "objectId" => "GGBYgh08qv",
                "qty" => 2,
                "total" => "180",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "days" => 4,
                "start" => "2017-06-08",
                "status" => 0,
                "pickup" => "empty",
                "updatedAt" => "2017-01-24T14:10:29.293Z",
                "end" => "2017-06-12",
                "createdAt" => "2017-01-24T14:10:29.293Z",
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ]
            ],
            [
                "objectId" => "1zSXAgmhzS",
                "qty" => 2,
                "sim" => "empty",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "pickup" => "empty",
                "days" => 5,
                "createdAt" => "2017-01-24T14:17:59.632Z",
                "end" => "2017-06-12",
                "start" => "2017-06-07",
                "updatedAt" => "2017-01-24T14:17:59.632Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "total" => "180",
                "status" => 0
            ],
            [
                "objectId" => "aePEl08cnj",
                "createdAt" => "2017-01-24T14:19:43.242Z",
                "pickup" => "empty",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FB8XNZxcy4"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "days" => 4,
                "sim" => "empty",
                "qty" => 2,
                "start" => "2017-06-08",
                "total" => "1440",
                "end" => "2017-06-12",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "status" => 0,
                "updatedAt" => "2017-01-24T14:19:43.242Z"
            ],
            [
                "objectId" => "91ObOxXSDs",
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FB8XNZxcy4"
                ],
                "status" => 0,
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-07",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "updatedAt" => "2017-01-24T14:20:52.445Z",
                "sim" => "empty",
                "createdAt" => "2017-01-24T14:20:52.445Z",
                "end" => "2017-06-12",
                "pickup" => "empty",
                "total" => "1800",
                "days" => 5,
                "qty" => 2
            ],
            [
                "objectId" => "J8As3HmAWM",
                "start" => "2017-06-08",
                "qty" => 1,
                "end" => "2017-06-12",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "createdAt" => "2017-01-25T05:35:50.472Z",
                "days" => 4,
                "status" => 0,
                "total" => "80",
                "updatedAt" => "2017-01-25T05:35:50.472Z",
                "sim" => "empty",
                "pickup" => "empty",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "0k65LDhOGX"
                ]
            ],
            [
                "objectId" => "d6FuYn1FE4",
                "start" => "2017-01-25",
                "end" => "2017-01-30",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "total" => "65",
                "status" => 0,
                "sim" => "empty",
                "days" => 5,
                "createdAt" => "2017-01-25T09:16:35.498Z",
                "updatedAt" => "2017-01-25T09:16:35.498Z",
                "pickup" => "vip",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "qty" => 1
            ],
            [
                "objectId" => "SJN8AeuXe8",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "sim" => "empty",
                "updatedAt" => "2017-01-26T04:02:29.081Z",
                "status" => 0,
                "total" => "65",
                "qty" => 1,
                "start" => "NaN-NaN-NaN",
                "createdAt" => "2017-01-26T04:02:29.081Z",
                "days" => 0,
                "pickup" => "empty",
                "end" => "NaN-NaN-NaN",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ]
            ],
            [
                "objectId" => "wDudzHwcMJ",
                "createdAt" => "2017-01-29T05:26:08.336Z",
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "days" => 4,
                "pickup" => "empty",
                "updatedAt" => "2017-01-29T05:26:08.336Z",
                "status" => 0,
                "sim" => "empty",
                "start" => "2017-06-08",
                "total" => "288",
                "qty" => 1,
                "end" => "2017-06-12"
            ],
            [
                "objectId" => "daFsw7zS3W",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7sqrLzSQ2L"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 3,
                "total" => "225",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-01-31T16:01:18.414Z",
                "updatedAt" => "2017-01-31T16:01:18.414Z"
            ],
            [
                "objectId" => "jLPmmkooBi",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2017-02-01",
                "end" => "2017-02-06",
                "days" => 5,
                "qty" => 4,
                "total" => "260",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-01T03:23:55.728Z",
                "updatedAt" => "2017-02-01T03:23:55.728Z"
            ],
            [
                "objectId" => "K49Id0AgIC",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "start" => "2017-02-01",
                "end" => "2017-02-06",
                "days" => 5,
                "qty" => 2,
                "total" => "150",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-01T03:23:56.804Z",
                "updatedAt" => "2017-02-01T03:23:56.804Z"
            ],
            [
                "objectId" => "wtd5WDWCyT",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-01T20:46:14.474Z",
                "updatedAt" => "2017-02-01T20:46:14.474Z"
            ],
            [
                "objectId" => "jW6vOWIbAE",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-01T20:49:53.083Z",
                "updatedAt" => "2017-02-01T20:49:53.083Z"
            ],
            [
                "objectId" => "S2dNGMyToR",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-01T20:54:36.566Z",
                "updatedAt" => "2017-02-01T20:54:36.566Z"
            ],
            [
                "objectId" => "ph54ugxuRT",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-01T21:21:01.411Z",
                "updatedAt" => "2017-02-01T21:21:01.411Z"
            ],
            [
                "objectId" => "ii8FovkS4O",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "tLaW8QkIoh"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rnOlGjJxDE"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-10",
                "days" => 3,
                "qty" => 4,
                "total" => "150",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-02T05:45:44.987Z",
                "updatedAt" => "2017-02-02T05:45:44.987Z"
            ],
            [
                "objectId" => "kEk9l4bFsA",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ol8OthFqu9"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-02T07:49:06.668Z",
                "updatedAt" => "2017-02-02T07:49:06.668Z"
            ],
            [
                "objectId" => "7yaeF67zI6",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "sim1",
                "status" => 0,
                "createdAt" => "2017-02-02T10:09:19.179Z",
                "updatedAt" => "2017-02-02T10:09:19.179Z"
            ],
            [
                "objectId" => "DmooMYI4Mj",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 5,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-02T11:00:46.080Z",
                "updatedAt" => "2017-02-02T11:00:46.080Z"
            ],
            [
                "objectId" => "1J2j6WbpKr",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "IEo3so2YMk"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "245",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-02T11:06:41.661Z",
                "updatedAt" => "2017-02-02T11:06:41.661Z"
            ],
            [
                "objectId" => "f0m2GkzheY",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 5,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-02T11:13:33.818Z",
                "updatedAt" => "2017-02-02T11:13:33.818Z"
            ],
            [
                "objectId" => "Hhp9g1eJ3g",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TNwTMMULJ1"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "245",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-02T11:24:46.901Z",
                "updatedAt" => "2017-02-02T11:24:46.901Z"
            ],
            [
                "objectId" => "MFrNunWARo",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "sim1",
                "status" => 0,
                "createdAt" => "2017-02-02T11:44:39.847Z",
                "updatedAt" => "2017-02-02T11:44:39.847Z"
            ],
            [
                "objectId" => "FHaELCz12H",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "sim1",
                "status" => 0,
                "createdAt" => "2017-02-02T12:27:03.956Z",
                "updatedAt" => "2017-02-02T12:27:03.956Z"
            ],
            [
                "objectId" => "jWGlDGsMAO",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "sim1",
                "status" => 0,
                "createdAt" => "2017-02-02T12:34:28.290Z",
                "updatedAt" => "2017-02-02T12:34:28.290Z"
            ],
            [
                "objectId" => "VkKR77QtGu",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-14",
                "days" => 7,
                "qty" => 1,
                "total" => "100",
                "pickup" => "budget",
                "sim" => "sim1",
                "status" => 0,
                "createdAt" => "2017-02-03T21:15:03.359Z",
                "updatedAt" => "2017-02-03T21:15:03.359Z"
            ],
            [
                "objectId" => "gZKhqVXqXS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-14",
                "days" => 7,
                "qty" => 1,
                "total" => "100",
                "pickup" => "budget",
                "sim" => "sim1",
                "status" => 0,
                "createdAt" => "2017-02-03T21:19:36.790Z",
                "updatedAt" => "2017-02-03T21:19:36.790Z"
            ],
            [
                "objectId" => "N744MFegfB",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "vRTpOj6S5A"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "175",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-06T03:36:44.175Z",
                "updatedAt" => "2017-02-06T03:36:44.175Z"
            ],
            [
                "objectId" => "X84uRGoBKq",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 2,
                "total" => "288",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-06T10:42:12.600Z",
                "updatedAt" => "2017-02-06T10:42:12.600Z"
            ],
            [
                "objectId" => "HgVfaZHqAZ",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TNwTMMULJ1"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "245",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-06T18:56:00.317Z",
                "updatedAt" => "2017-02-06T18:56:00.317Z"
            ],
            [
                "objectId" => "TGNAO2dvDS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TNwTMMULJ1"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "245",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-06T18:59:26.403Z",
                "updatedAt" => "2017-02-06T18:59:26.403Z"
            ],
            [
                "objectId" => "7yqJzpFFlK",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "IEo3so2YMk"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 3,
                "total" => "245",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-07T01:33:17.547Z",
                "updatedAt" => "2017-02-07T01:33:17.547Z"
            ],
            [
                "objectId" => "xlVfIdLsej",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TNwTMMULJ1"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "245",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-07T04:01:17.967Z",
                "updatedAt" => "2017-02-07T04:01:17.967Z"
            ],
            [
                "objectId" => "yD9GsBfmTG",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "tLaW8QkIoh"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rnOlGjJxDE"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FX2O44WA15"
                ],
                "start" => "2017-05-03",
                "end" => "2017-05-04",
                "days" => 1,
                "qty" => 1,
                "total" => "150",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-07T05:06:18.845Z",
                "updatedAt" => "2017-02-07T05:06:18.845Z"
            ],
            [
                "objectId" => "Py4YBRAeS6",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 5,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-07T08:01:45.770Z",
                "updatedAt" => "2017-02-07T08:01:45.770Z"
            ],
            [
                "objectId" => "c2TeHfd6oM",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Qo2FHpIKZp"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 5,
                "total" => "1540",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-07T08:11:51.014Z",
                "updatedAt" => "2017-02-07T08:11:51.014Z"
            ],
            [
                "objectId" => "P2nnndI2os",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Qo2FHpIKZp"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 5,
                "total" => "1540",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-07T08:13:59.522Z",
                "updatedAt" => "2017-02-07T08:13:59.522Z"
            ],
            [
                "objectId" => "rPdSttSiUX",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TNwTMMULJ1"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "245",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-07T09:04:44.800Z",
                "updatedAt" => "2017-02-07T09:09:37.609Z",
                "order_id" => "rPdSttSiUX",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "nEZYBa2DRu"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ]
            ],
            [
                "objectId" => "jugNQi1b0I",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2017-02-08",
                "end" => "2017-02-12",
                "days" => 4,
                "qty" => 1,
                "total" => "65",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-08T08:48:49.338Z",
                "updatedAt" => "2017-02-08T08:48:49.338Z"
            ],
            [
                "objectId" => "Ht4nkSDitR",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ce5qUWKizm"
                ],
                "start" => "2017-02-08",
                "end" => "2017-02-12",
                "days" => 4,
                "qty" => 1,
                "total" => "97",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-08T08:48:50.386Z",
                "updatedAt" => "2017-02-08T08:48:50.386Z"
            ],
            [
                "objectId" => "zTnBn6gA8F",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-08T15:09:44.759Z",
                "updatedAt" => "2017-02-08T15:09:44.759Z"
            ],
            [
                "objectId" => "HGF0p5teMY",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c0FKL4XxW6"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 4,
                "total" => "225",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T05:16:41.479Z",
                "updatedAt" => "2017-02-09T05:16:41.479Z"
            ],
            [
                "objectId" => "2FzkvyBDUr",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T09:26:32.594Z",
                "updatedAt" => "2017-02-09T09:26:32.594Z"
            ],
            [
                "objectId" => "2KCofl7EJp",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T09:30:28.644Z",
                "updatedAt" => "2017-02-09T09:30:28.644Z"
            ],
            [
                "objectId" => "bTzQND1Xxf",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T10:11:58.748Z",
                "updatedAt" => "2017-02-09T10:11:58.748Z"
            ],
            [
                "objectId" => "1EttN3KCb2",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T10:17:14.192Z",
                "updatedAt" => "2017-02-09T10:17:14.192Z"
            ],
            [
                "objectId" => "rtxynYGlA9",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T10:25:27.039Z",
                "updatedAt" => "2017-02-09T10:25:27.039Z"
            ],
            [
                "objectId" => "ThyewEM4C6",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-13",
                "days" => 5,
                "qty" => 10,
                "total" => "77",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T10:56:10.386Z",
                "updatedAt" => "2017-02-09T10:56:10.386Z"
            ],
            [
                "objectId" => "2PQ97mtFlN",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7sqrLzSQ2L"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-13",
                "days" => 5,
                "qty" => 10,
                "total" => "225",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-09T11:26:56.492Z",
                "updatedAt" => "2017-02-09T11:26:56.492Z"
            ],
            [
                "objectId" => "V7GJpK9qC5",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 5,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T00:46:23.067Z",
                "updatedAt" => "2017-02-10T00:46:23.067Z"
            ],
            [
                "objectId" => "1oZHxHkvHI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "RLKbinzXqY"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 5,
                "total" => "2800",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T00:52:44.161Z",
                "updatedAt" => "2017-02-10T00:52:44.161Z"
            ],
            [
                "objectId" => "tfrCSms9Mh",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 5,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T01:05:34.615Z",
                "updatedAt" => "2017-02-10T01:05:34.615Z"
            ],
            [
                "objectId" => "ya61NnFeF5",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T04:15:34.287Z",
                "updatedAt" => "2017-02-10T04:15:34.287Z"
            ],
            [
                "objectId" => "APBJ5yxqUd",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T04:55:06.508Z",
                "updatedAt" => "2017-02-10T04:55:06.508Z"
            ],
            [
                "objectId" => "bOiR9YpU22",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s9BIEFxodv"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T04:55:07.567Z",
                "updatedAt" => "2017-02-10T04:55:07.567Z"
            ],
            [
                "objectId" => "BJgbFhsmEI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T05:01:27.898Z",
                "updatedAt" => "2017-02-10T05:01:27.898Z"
            ],
            [
                "objectId" => "jBp7L9pDGy",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s9BIEFxodv"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "77",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T05:01:29.222Z",
                "updatedAt" => "2017-02-10T05:01:29.222Z"
            ],
            [
                "objectId" => "Kz9HMNUnbB",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "aoEaQSHara"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "616",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T05:22:30.378Z",
                "updatedAt" => "2017-02-10T05:22:30.378Z"
            ],
            [
                "objectId" => "WoKPWDh6PI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s9BIEFxodv"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "aoEaQSHara"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "616",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T05:22:31.433Z",
                "updatedAt" => "2017-02-10T05:22:31.433Z"
            ],
            [
                "objectId" => "lvuFG1rE66",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "W9vx9TPhep"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "aoEaQSHara"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "616",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-02-10T05:23:29.415Z",
                "updatedAt" => "2017-03-09T10:38:51.075Z",
                "order_id" => "lvuFG1rE66",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "9w6qHzNthn"
                ]
            ],
            [
                "objectId" => "2XQTFUt8XK",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "92",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T13:09:44.646Z",
                "updatedAt" => "2017-02-10T13:09:44.646Z"
            ],
            [
                "objectId" => "6lPot8p1QT",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-10T14:55:44.128Z",
                "updatedAt" => "2017-02-10T14:55:44.128Z"
            ],
            [
                "objectId" => "P3jRjsX0pw",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-12T14:24:46.148Z",
                "updatedAt" => "2017-02-12T14:24:46.148Z"
            ],
            [
                "objectId" => "tfRtH1IFTW",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-12T14:29:48.144Z",
                "updatedAt" => "2017-02-12T14:29:48.144Z"
            ],
            [
                "objectId" => "DK8LHZ0Wpi",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-12T14:33:25.050Z",
                "updatedAt" => "2017-02-12T14:33:25.050Z"
            ],
            [
                "objectId" => "tk97gv3zbF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-12T14:36:54.387Z",
                "updatedAt" => "2017-02-12T14:36:54.387Z"
            ],
            [
                "objectId" => "QfbQNvFVA4",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-12T14:41:09.806Z",
                "updatedAt" => "2017-02-12T14:41:09.806Z"
            ],
            [
                "objectId" => "AEpD1czdPy",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-12T15:38:07.480Z",
                "updatedAt" => "2017-02-12T15:38:07.480Z"
            ],
            [
                "objectId" => "WYZwQwyZvh",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "DPHt0aKE6b"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "900",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-12T15:47:58.282Z",
                "updatedAt" => "2017-02-12T15:49:32.576Z",
                "order_id" => "WYZwQwyZvh",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Q3LoXbrCyO"
                ]
            ],
            [
                "objectId" => "HHavI83zXq",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7sqrLzSQ2L"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 5,
                "total" => "225",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-12T20:23:43.417Z",
                "updatedAt" => "2017-02-12T20:23:43.417Z"
            ],
            [
                "objectId" => "cPit77ArGG",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ol8OthFqu9"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-13T07:21:03.318Z",
                "updatedAt" => "2017-02-13T07:21:03.318Z"
            ],
            [
                "objectId" => "h3JbmjAoVI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 5,
                "total" => "288",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-13T10:42:13.393Z",
                "updatedAt" => "2017-02-13T10:42:13.393Z"
            ],
            [
                "objectId" => "wUCodak3TC",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 5,
                "total" => "288",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-13T10:44:37.654Z",
                "updatedAt" => "2017-02-13T10:44:37.654Z"
            ],
            [
                "objectId" => "BknDx6ClKf",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "nkYzwYMz2G"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 5,
                "total" => "7200",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-13T13:31:53.446Z",
                "updatedAt" => "2017-02-13T13:31:53.446Z"
            ],
            [
                "objectId" => "GJQUBdaM97",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yNLZp6xaSR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "nkYzwYMz2G"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "1440",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-13T13:33:00.566Z",
                "updatedAt" => "2017-02-13T13:34:28.612Z",
                "order_id" => "GJQUBdaM97",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "pRnrqUceiL"
                ]
            ],
            [
                "objectId" => "MHTXtNBHOX",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 1,
                "total" => "65",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-14T06:19:13.864Z",
                "updatedAt" => "2017-02-14T06:19:13.864Z"
            ],
            [
                "objectId" => "STL53JwRHk",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2017-02-14",
                "end" => "2017-02-19",
                "days" => 5,
                "qty" => 2,
                "total" => "130",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-14T06:20:19.319Z",
                "updatedAt" => "2017-02-14T06:20:19.319Z"
            ],
            [
                "objectId" => "HoFpokJaXO",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 1,
                "total" => "90",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-14T07:08:57.262Z",
                "updatedAt" => "2017-02-14T07:08:57.262Z"
            ],
            [
                "objectId" => "GbPCNVqjQU",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-14T07:09:38.111Z",
                "updatedAt" => "2017-02-14T07:09:38.111Z"
            ],
            [
                "objectId" => "NDCMz12Y4E",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xvvqknZ4kB"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 4,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-14T09:14:31.533Z",
                "updatedAt" => "2017-02-14T09:14:31.533Z"
            ],
            [
                "objectId" => "YFgmVe8qMb",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xvvqknZ4kB"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 4,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-14T09:16:41.440Z",
                "updatedAt" => "2017-02-14T09:16:41.440Z"
            ],
            [
                "objectId" => "neWB0gmc4p",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "0k65LDhOGX"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-12",
                "days" => 7,
                "qty" => 2,
                "total" => "90",
                "pickup" => "vip",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-14T13:48:53.596Z",
                "updatedAt" => "2017-02-14T13:48:53.596Z"
            ],
            [
                "objectId" => "y6bu2iKBBi",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "92",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-15T07:18:03.471Z",
                "updatedAt" => "2017-02-15T07:18:03.471Z"
            ],
            [
                "objectId" => "p1kxzCBRDh",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "92",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-15T07:33:46.303Z",
                "updatedAt" => "2017-02-15T07:33:46.303Z"
            ],
            [
                "objectId" => "vDGsbaZH5J",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "eUOshXugoR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "92",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-15T07:58:21.298Z",
                "updatedAt" => "2017-02-15T07:58:21.298Z"
            ],
            [
                "objectId" => "bD0RzhSN0M",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c0FKL4XxW6"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "225",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-15T08:24:54.958Z",
                "updatedAt" => "2017-02-15T08:24:54.958Z"
            ],
            [
                "objectId" => "ES1uHn9wNd",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 6,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-16T09:46:15.072Z",
                "updatedAt" => "2017-02-16T09:46:15.072Z"
            ],
            [
                "objectId" => "YrdYCMc9OG",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-16T14:01:37.716Z",
                "updatedAt" => "2017-02-16T14:01:37.716Z"
            ],
            [
                "objectId" => "CQfMwKg1BZ",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-16T14:42:20.373Z",
                "updatedAt" => "2017-02-16T14:42:20.373Z"
            ],
            [
                "objectId" => "exHAWDQbkd",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "GRe6jHQkZQ"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 1,
                "total" => "1080",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 1,
                "createdAt" => "2017-02-16T15:05:47.680Z",
                "updatedAt" => "2017-03-14T09:32:49.009Z",
                "order_id" => "exHAWDQbkd",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "GM6Tpo1vmm"
                ]
            ],
            [
                "objectId" => "ebXfJ6hS96",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "sim1",
                "status" => 0,
                "createdAt" => "2017-02-16T17:10:15.046Z",
                "updatedAt" => "2017-02-16T17:10:15.046Z"
            ],
            [
                "objectId" => "dmOpKMgbFw",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 20,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-17T01:14:44.420Z",
                "updatedAt" => "2017-02-17T01:14:44.420Z"
            ],
            [
                "objectId" => "Dh2PJfqJeg",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "start" => "2017-02-17",
                "end" => "2017-02-22",
                "days" => 5,
                "qty" => 4,
                "total" => "300",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-17T07:28:49.204Z",
                "updatedAt" => "2017-02-17T07:28:49.204Z"
            ],
            [
                "objectId" => "D5FtgkNXtz",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2017-02-17",
                "end" => "2017-02-22",
                "days" => 5,
                "qty" => 3,
                "total" => "195",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-17T07:28:50.367Z",
                "updatedAt" => "2017-02-17T07:28:50.367Z"
            ],
            [
                "objectId" => "YrloDs0ZT8",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Qk6HSxEWkH"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 1,
                "total" => "88",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-17T12:31:08.485Z",
                "updatedAt" => "2017-02-17T12:31:08.485Z"
            ],
            [
                "objectId" => "EnJSKW4ylm",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "6AzDuokIte"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 1,
                "total" => "98",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-17T12:31:10.672Z",
                "updatedAt" => "2017-02-17T12:31:10.672Z"
            ],
            [
                "objectId" => "EF0jaF9Juw",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "RgQ8D97NaS"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 2,
                "total" => "316",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-17T12:31:11.855Z",
                "updatedAt" => "2017-02-17T12:31:11.855Z"
            ],
            [
                "objectId" => "7bFeDWZxZB",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xvvqknZ4kB"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 4,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-18T08:26:19.016Z",
                "updatedAt" => "2017-02-18T08:26:19.016Z"
            ],
            [
                "objectId" => "WkCeAJccjl",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-20T11:02:01.382Z",
                "updatedAt" => "2017-02-20T11:02:01.382Z"
            ],
            [
                "objectId" => "8ilCc2c65D",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 10,
                "total" => "111",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-20T14:15:10.497Z",
                "updatedAt" => "2017-02-20T14:15:10.497Z"
            ],
            [
                "objectId" => "Cy9aOa67Uc",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 10,
                "total" => "133",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-20T14:15:11.534Z",
                "updatedAt" => "2017-02-20T14:15:11.534Z"
            ],
            [
                "objectId" => "Xf4T0Uyfmh",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yqsBwJ4QAI"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UAi6LGA7o5"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "288",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-21T01:43:37.755Z",
                "updatedAt" => "2017-02-21T01:43:37.755Z"
            ],
            [
                "objectId" => "9jFmPsdsLU",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "90bC0pQE8Z"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "XTniltaJE8"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "95",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-22T03:45:06.104Z",
                "updatedAt" => "2017-02-22T03:45:06.104Z"
            ],
            [
                "objectId" => "DQe7rPPaAD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gZ63FP6fCP"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "oKvijC4uUD"
                ],
                "start" => "2017-05-01",
                "end" => "2017-05-02",
                "days" => 1,
                "qty" => 1,
                "total" => "20",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-22T05:14:07.780Z",
                "updatedAt" => "2017-02-22T05:14:07.780Z"
            ],
            [
                "objectId" => "7tQFHUMO9f",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-10",
                "days" => 3,
                "qty" => 1,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T11:27:34.441Z",
                "updatedAt" => "2017-02-22T11:30:53.924Z",
                "order_id" => "7tQFHUMO9f",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Or6FX5Peua"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ]
            ],
            [
                "objectId" => "Mx1zJYzk1k",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "560",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-02-22T11:32:52.934Z",
                "updatedAt" => "2017-02-22T11:55:51.840Z",
                "order_id" => "Mx1zJYzk1k",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "YJhdII9L9X"
                ]
            ],
            [
                "objectId" => "re06y97Uw0",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "APReQAOJGb"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 1,
                "total" => "801",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-02-22T11:37:12.995Z",
                "updatedAt" => "2017-02-22T11:55:30.488Z",
                "order_id" => "re06y97Uw0",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "bj8nMxwGGD"
                ]
            ],
            [
                "objectId" => "fcTX6l5IGM",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "560",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T11:56:27.121Z",
                "updatedAt" => "2017-02-22T11:57:28.150Z",
                "order_id" => "fcTX6l5IGM",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "YJhdII9L9X"
                ]
            ],
            [
                "objectId" => "59AeG4bxqe",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "APReQAOJGb"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 1,
                "total" => "801",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T11:59:40.489Z",
                "updatedAt" => "2017-02-22T12:01:17.991Z",
                "order_id" => "59AeG4bxqe",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "bj8nMxwGGD"
                ]
            ],
            [
                "objectId" => "dbEvfNBTgB",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 1,
                "total" => "280",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T12:03:33.565Z",
                "updatedAt" => "2017-02-22T12:06:16.421Z",
                "order_id" => "dbEvfNBTgB",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Rs7XCNPqaA"
                ]
            ],
            [
                "objectId" => "j7pHvQuXgX",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "700",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T12:14:41.310Z",
                "updatedAt" => "2017-02-22T12:15:57.609Z",
                "order_id" => "j7pHvQuXgX",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "3LMe1Zeoan"
                ]
            ],
            [
                "objectId" => "AXcOgCyqdl",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "560",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-22T12:18:42.269Z",
                "updatedAt" => "2017-02-22T12:18:42.269Z"
            ],
            [
                "objectId" => "hvwJn33DVI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "560",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T12:28:49.354Z",
                "updatedAt" => "2017-02-22T12:33:45.520Z",
                "order_id" => "hvwJn33DVI",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "umlZxF8UG6"
                ]
            ],
            [
                "objectId" => "TkCc45FVFv",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-22T12:30:44.102Z",
                "updatedAt" => "2017-02-22T12:30:44.102Z"
            ],
            [
                "objectId" => "nC00OohREY",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "560",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T12:34:42.853Z",
                "updatedAt" => "2017-02-22T12:35:46.069Z",
                "order_id" => "nC00OohREY",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "1mwAdCl1ku"
                ]
            ],
            [
                "objectId" => "vWfHFIp6wa",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "560",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T12:38:30.872Z",
                "updatedAt" => "2017-04-10T03:38:13.104Z",
                "order_id" => "vWfHFIp6wa",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Xu6uP9MDcD"
                ]
            ],
            [
                "objectId" => "UDFsiHBmqj",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "APReQAOJGb"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "JkBZIRxxvd"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "1068",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-22T12:41:45.064Z",
                "updatedAt" => "2017-02-22T12:42:49.282Z",
                "order_id" => "UDFsiHBmqj",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "akwAFk4B4H"
                ]
            ],
            [
                "objectId" => "GABAZTNT03",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "90",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-23T09:28:51.107Z",
                "updatedAt" => "2017-02-23T09:28:51.107Z"
            ],
            [
                "objectId" => "0wakYHGgmD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 2,
                "total" => "135",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-23T09:39:43.745Z",
                "updatedAt" => "2017-02-23T09:39:43.745Z"
            ],
            [
                "objectId" => "yzrFnajDyF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "90",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-23T23:32:39.280Z",
                "updatedAt" => "2017-02-23T23:32:39.280Z"
            ],
            [
                "objectId" => "KAuzcA0C2R",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 16,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-24T15:30:23.004Z",
                "updatedAt" => "2017-02-24T15:30:23.004Z"
            ],
            [
                "objectId" => "a8LesgxmUb",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 16,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-24T15:33:20.410Z",
                "updatedAt" => "2017-02-24T15:33:20.410Z"
            ],
            [
                "objectId" => "WVf3rLcc6m",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "g1MkoELksv"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 6,
                "total" => "3360",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-24T16:15:51.579Z",
                "updatedAt" => "2017-02-24T16:15:51.579Z"
            ],
            [
                "objectId" => "IT0HMUSYrD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-26T09:40:16.455Z",
                "updatedAt" => "2017-02-26T09:40:16.455Z"
            ],
            [
                "objectId" => "chK72Q0vwK",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-02-26T09:47:49.488Z",
                "updatedAt" => "2017-02-26T09:48:56.031Z",
                "order_id" => "chK72Q0vwK",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "zHHm60hKzl"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "GhnheumyQq"
                ]
            ],
            [
                "objectId" => "LSQVqiBDqL",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-02-26T09:50:10.613Z",
                "updatedAt" => "2017-02-26T09:53:41.365Z",
                "order_id" => "LSQVqiBDqL",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "zHHm60hKzl"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "GhnheumyQq"
                ]
            ],
            [
                "objectId" => "5b0hbVQGEa",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "APReQAOJGb"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 1,
                "total" => "267",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-28T00:29:44.833Z",
                "updatedAt" => "2017-02-28T00:29:44.833Z"
            ],
            [
                "objectId" => "OofIIfdQi3",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ol8OthFqu9"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 6,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-02-28T10:00:11.576Z",
                "updatedAt" => "2017-02-28T10:00:11.576Z"
            ],
            [
                "objectId" => "tG336PtujV",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 30,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-02T05:18:42.470Z",
                "updatedAt" => "2017-03-02T05:18:42.470Z"
            ],
            [
                "objectId" => "froLzL7S8Q",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 30,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-02T05:39:52.116Z",
                "updatedAt" => "2017-03-02T05:39:52.116Z"
            ],
            [
                "objectId" => "kR8nAAyQtd",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 30,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-02T05:43:48.500Z",
                "updatedAt" => "2017-03-02T05:43:48.500Z"
            ],
            [
                "objectId" => "NxEBXTTlLA",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "r2VCZLX2nZ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 30,
                "total" => "16800",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-02T05:49:01.135Z",
                "updatedAt" => "2017-03-02T05:49:01.135Z"
            ],
            [
                "objectId" => "5eJzmGmyHh",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "r2VCZLX2nZ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 30,
                "total" => "16800",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-02T06:02:58.445Z",
                "updatedAt" => "2017-03-02T06:02:58.445Z"
            ],
            [
                "objectId" => "5leQYP09Ei",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "8h5jnnUHRh"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "r2VCZLX2nZ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 30,
                "total" => "16800",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-02T06:43:48.222Z",
                "updatedAt" => "2017-04-05T09:38:56.562Z",
                "order_id" => "5leQYP09Ei",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Oj0uKJEXfs"
                ]
            ],
            [
                "objectId" => "DnmE1KEQYo",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 5,
                "total" => "90",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-03T02:12:39.034Z",
                "updatedAt" => "2017-03-03T02:12:39.034Z"
            ],
            [
                "objectId" => "D7t7mb6mv5",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 5,
                "total" => "90",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-03T05:10:31.642Z",
                "updatedAt" => "2017-03-03T05:10:31.642Z"
            ],
            [
                "objectId" => "9RsNaybhl0",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "fpr0b6nEOT"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 5,
                "total" => "900",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-03T05:59:57.964Z",
                "updatedAt" => "2017-03-03T06:01:25.926Z",
                "order_id" => "9RsNaybhl0",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "dKQugypKXu"
                ]
            ],
            [
                "objectId" => "g7R4gnGJry",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 1,
                "total" => "90",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-03T15:01:45.333Z",
                "updatedAt" => "2017-03-03T15:01:45.333Z"
            ],
            [
                "objectId" => "H8M5gDWyAY",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s9BIEFxodv"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 4,
                "total" => "140",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-04T05:49:14.934Z",
                "updatedAt" => "2017-03-04T05:49:14.934Z"
            ],
            [
                "objectId" => "ZFM6Af3mmF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2017-03-04",
                "end" => "2017-03-09",
                "days" => 5,
                "qty" => 1,
                "total" => "65",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-04T08:37:29.132Z",
                "updatedAt" => "2017-03-04T08:37:29.132Z"
            ],
            [
                "objectId" => "ZximAmOORR",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpkFpEiGa6"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "244",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T00:46:52.471Z",
                "updatedAt" => "2017-03-06T00:46:52.471Z"
            ],
            [
                "objectId" => "BrezEwE5ZA",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 5,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T01:09:16.170Z",
                "updatedAt" => "2017-03-06T01:09:16.170Z"
            ],
            [
                "objectId" => "kJBp9TTb4m",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 5,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T01:11:24.409Z",
                "updatedAt" => "2017-03-06T01:11:24.409Z"
            ],
            [
                "objectId" => "2SixcfB37A",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "iPUwAapgwA"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 8,
                "total" => "69",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T03:18:58.945Z",
                "updatedAt" => "2017-03-06T03:18:58.945Z"
            ],
            [
                "objectId" => "eugHA2izL2",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "PrIYApIg5O"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xKcBQ1z2LA"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 8,
                "total" => "70",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T03:27:14.431Z",
                "updatedAt" => "2017-03-06T03:27:14.431Z"
            ],
            [
                "objectId" => "DOvUgF8ANL",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "PrIYApIg5O"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xKcBQ1z2LA"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "RMM2kQa1JW"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 8,
                "total" => "2240",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T03:30:36.907Z",
                "updatedAt" => "2017-03-06T03:30:36.907Z"
            ],
            [
                "objectId" => "LPs6u9S95R",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "0k65LDhOGX"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T08:33:53.154Z",
                "updatedAt" => "2017-03-06T08:33:53.154Z"
            ],
            [
                "objectId" => "0FkTIn4PA7",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ol8OthFqu9"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rPPUWZ3dQA"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "320",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T08:37:47.667Z",
                "updatedAt" => "2017-03-06T08:37:47.667Z"
            ],
            [
                "objectId" => "seIa4xNs3P",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T10:07:15.234Z",
                "updatedAt" => "2017-03-06T10:07:15.234Z"
            ],
            [
                "objectId" => "yJDJLy6X24",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-06T10:08:26.388Z",
                "updatedAt" => "2017-03-06T10:08:26.388Z"
            ],
            [
                "objectId" => "oMOZtL5Y2y",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "okUfa3droF"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "UBAqasa85a"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-03-06T10:21:07.741Z",
                "updatedAt" => "2017-03-18T07:38:41.105Z",
                "order_id" => "oMOZtL5Y2y",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "29SSH8LIcm"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "uOjmZbXRXn"
                ]
            ],
            [
                "objectId" => "6popVJX3Zt",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "APReQAOJGb"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-09",
                "days" => 3,
                "qty" => 1,
                "total" => "267",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-07T00:58:50.441Z",
                "updatedAt" => "2017-03-07T00:58:50.441Z"
            ],
            [
                "objectId" => "saDoeCxROs",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 2,
                "total" => "139",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-08T10:04:27.044Z",
                "updatedAt" => "2017-03-08T10:04:27.044Z"
            ],
            [
                "objectId" => "PwE9nBoKWH",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 2,
                "total" => "133",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-08T10:06:05.655Z",
                "updatedAt" => "2017-03-08T10:06:05.655Z"
            ],
            [
                "objectId" => "9RlEGq7qQa",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 10,
                "total" => "139",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-08T10:35:15.966Z",
                "updatedAt" => "2017-03-08T10:35:15.966Z"
            ],
            [
                "objectId" => "PXaXuIFRua",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "pBWIEW4zTC"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 5,
                "total" => "111",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-08T10:35:17.070Z",
                "updatedAt" => "2017-03-08T10:35:17.070Z"
            ],
            [
                "objectId" => "tkqEbn4BF1",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xvvqknZ4kB"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 10,
                "total" => "135",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-03-09T00:56:09.079Z",
                "updatedAt" => "2017-03-09T01:07:50.719Z",
                "order_id" => "tkqEbn4BF1",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "KFUAfcVBBH"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "95CAoDYb71"
                ]
            ],
            [
                "objectId" => "NTzm6EtlM2",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "FrlNaq04Ib"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 5,
                "total" => "145",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-03-09T00:56:10.218Z",
                "updatedAt" => "2017-03-09T01:07:11.950Z",
                "order_id" => "tkqEbn4BF1",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "KFUAfcVBBH"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "95CAoDYb71"
                ]
            ],
            [
                "objectId" => "Bq3Wpwfitn",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 10,
                "total" => "139",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-09T01:48:24.803Z",
                "updatedAt" => "2017-03-09T01:48:24.803Z"
            ],
            [
                "objectId" => "IajiArhRsU",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "95CAoDYb71"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 15,
                "total" => "3000",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-03-09T01:49:50.256Z",
                "updatedAt" => "2017-03-10T10:02:17.224Z",
                "order_id" => "IajiArhRsU",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "KFUAfcVBBH"
                ]
            ],
            [
                "objectId" => "RX4dAYdqeW",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpkFpEiGa6"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "244",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-09T14:08:15.103Z",
                "updatedAt" => "2017-03-09T14:08:15.103Z"
            ],
            [
                "objectId" => "QnYIlAIKJ4",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "08n9Vygi67"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 3,
                "total" => "79",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-09T15:31:16.751Z",
                "updatedAt" => "2017-03-09T15:31:16.751Z"
            ],
            [
                "objectId" => "k125d4pguF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "08n9Vygi67"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FizT9JeIpp"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 3,
                "total" => "711",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-09T15:36:00.053Z",
                "updatedAt" => "2017-03-09T15:36:00.053Z"
            ],
            [
                "objectId" => "adw6YB3Rix",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Qk6HSxEWkH"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 2,
                "total" => "176",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-10T03:51:34.801Z",
                "updatedAt" => "2017-03-10T03:51:34.801Z"
            ],
            [
                "objectId" => "gdfRH5TatT",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "pMrBzqzgOE"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Ia12JzDrx1"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-11T09:10:54.014Z",
                "updatedAt" => "2017-03-11T09:10:54.014Z"
            ],
            [
                "objectId" => "nE4riw4rF7",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "pMrBzqzgOE"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Ia12JzDrx1"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 10,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-11T09:32:40.745Z",
                "updatedAt" => "2017-03-11T09:32:40.745Z"
            ],
            [
                "objectId" => "oKm6Y9WjL8",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "pMrBzqzgOE"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Ia12JzDrx1"
                ],
                "start" => "2016-06-09",
                "end" => "2016-06-11",
                "days" => 2,
                "qty" => 10,
                "total" => "800",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-11T10:12:13.735Z",
                "updatedAt" => "2017-03-11T10:12:13.735Z"
            ],
            [
                "objectId" => "9m7cnHOtHT",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "pMrBzqzgOE"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Ia12JzDrx1"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-12T07:30:25.438Z",
                "updatedAt" => "2017-03-12T07:30:25.438Z"
            ],
            [
                "objectId" => "2s7k7i9b6o",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Qk6HSxEWkH"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 1,
                "total" => "88",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-13T12:42:07.345Z",
                "updatedAt" => "2017-03-13T12:42:07.345Z"
            ],
            [
                "objectId" => "Z2VQr8lKUE",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Qk6HSxEWkH"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 1,
                "total" => "88",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-13T12:46:36.981Z",
                "updatedAt" => "2017-03-13T12:46:36.981Z"
            ],
            [
                "objectId" => "4zgVzcLxOy",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Qk6HSxEWkH"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "0vjmEYPo0x"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 7,
                "total" => "129360",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-13T12:53:46.362Z",
                "updatedAt" => "2017-03-13T12:53:46.362Z"
            ],
            [
                "objectId" => "YaXc6ZD6AL",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "0vjmEYPo0x"
                ],
                "start" => "2017-03-13",
                "end" => "2017-03-18",
                "days" => 5,
                "qty" => 1,
                "total" => "325",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-13T13:01:42.454Z",
                "updatedAt" => "2017-03-13T13:01:42.454Z"
            ],
            [
                "objectId" => "IY9NSfb1YP",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "62",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T04:45:34.080Z",
                "updatedAt" => "2017-03-15T04:45:34.080Z"
            ],
            [
                "objectId" => "sFCoI6kW1U",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T04:45:35.117Z",
                "updatedAt" => "2017-03-15T04:45:35.117Z"
            ],
            [
                "objectId" => "qyAcreVntS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T04:46:42.618Z",
                "updatedAt" => "2017-03-15T04:46:42.618Z"
            ],
            [
                "objectId" => "67IgcpOJ3R",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T06:43:10.334Z",
                "updatedAt" => "2017-03-15T06:43:10.334Z"
            ],
            [
                "objectId" => "q7bBN1w6G5",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 1,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T06:59:50.303Z",
                "updatedAt" => "2017-03-15T06:59:50.303Z"
            ],
            [
                "objectId" => "5l6GmbNOkI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 1,
                "total" => "62",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T07:08:06.452Z",
                "updatedAt" => "2017-03-15T07:08:06.452Z"
            ],
            [
                "objectId" => "Iax41QXCWv",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "ReKPhd1k9e"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 1,
                "total" => "186",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-15T07:15:02.594Z",
                "updatedAt" => "2017-03-15T07:19:43.567Z",
                "order_id" => "Iax41QXCWv",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "reDLVeHbur"
                ]
            ],
            [
                "objectId" => "YkkxalICjZ",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vkbW6u2w1b"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "DGB96O9yFa"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 3,
                "total" => "209",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T08:10:31.004Z",
                "updatedAt" => "2017-03-15T08:10:31.004Z"
            ],
            [
                "objectId" => "EUUVMDVCkS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "62",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T09:43:28.827Z",
                "updatedAt" => "2017-03-15T09:43:28.827Z"
            ],
            [
                "objectId" => "EufBMR2jCf",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FaH7FRTPvQ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "992",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T09:59:17.677Z",
                "updatedAt" => "2017-03-15T09:59:17.677Z"
            ],
            [
                "objectId" => "Nxbslyj3Sp",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FaH7FRTPvQ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "248",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T10:01:09.621Z",
                "updatedAt" => "2017-03-15T10:01:09.621Z"
            ],
            [
                "objectId" => "fJabLsDxEu",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FaH7FRTPvQ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "960",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-15T10:01:10.704Z",
                "updatedAt" => "2017-03-15T10:01:10.704Z"
            ],
            [
                "objectId" => "1qEMQ19DFA",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FaH7FRTPvQ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "248",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-15T10:02:20.471Z",
                "updatedAt" => "2017-03-15T10:06:44.424Z",
                "order_id" => "1qEMQ19DFA",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "apVCqu5btP"
                ]
            ],
            [
                "objectId" => "S1xlRlTuhD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FaH7FRTPvQ"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "960",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-15T10:22:34.169Z",
                "updatedAt" => "2017-03-15T10:24:44.961Z",
                "order_id" => "S1xlRlTuhD",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "hdUD57WXZA"
                ]
            ],
            [
                "objectId" => "3qKyAQQovM",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "HdkzpF1PQE"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "4A8kwg1fZG"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 4,
                "total" => "1560",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-16T08:42:41.256Z",
                "updatedAt" => "2017-03-16T08:42:41.256Z"
            ],
            [
                "objectId" => "QRJPvNFgha",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 4,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-16T23:47:48.581Z",
                "updatedAt" => "2017-03-16T23:47:48.581Z"
            ],
            [
                "objectId" => "PhUyi6fuwZ",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-16T23:48:47.772Z",
                "updatedAt" => "2017-03-16T23:48:47.772Z"
            ],
            [
                "objectId" => "dVtvaj6XxS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 1,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-17T00:01:05.646Z",
                "updatedAt" => "2017-03-17T00:01:05.646Z"
            ],
            [
                "objectId" => "PyJExcSdaW",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 1,
                "total" => "62",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-17T01:28:31.157Z",
                "updatedAt" => "2017-03-17T01:28:31.157Z"
            ],
            [
                "objectId" => "YhlB70LB1k",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 4,
                "total" => "380",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-17T01:36:35.735Z",
                "updatedAt" => "2017-03-17T01:36:35.735Z"
            ],
            [
                "objectId" => "qdBD0J0eJF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "APReQAOJGb"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "267",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-17T02:52:55.775Z",
                "updatedAt" => "2017-03-17T02:52:55.775Z"
            ],
            [
                "objectId" => "BUtjMcLtHi",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "62",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-17T03:17:55.682Z",
                "updatedAt" => "2017-03-17T03:17:55.682Z"
            ],
            [
                "objectId" => "KKDDMKTpri",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "BkZ0qlCeFj"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dXLJDXCm8F"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 2,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-17T13:44:37.621Z",
                "updatedAt" => "2017-03-17T13:44:37.621Z"
            ],
            [
                "objectId" => "kNcbqUNA4r",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ol8OthFqu9"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-11",
                "days" => 1,
                "qty" => 14,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T06:58:06.423Z",
                "updatedAt" => "2017-03-18T06:58:06.423Z"
            ],
            [
                "objectId" => "9lDMqYqvwI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "iV9j4NCESu"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rPPUWZ3dQA"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-11",
                "days" => 1,
                "qty" => 7,
                "total" => "910",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T07:05:22.271Z",
                "updatedAt" => "2017-03-18T07:05:22.271Z"
            ],
            [
                "objectId" => "VUWdCu2kiN",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpkFpEiGa6"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "244",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T07:27:06.904Z",
                "updatedAt" => "2017-03-18T07:27:06.904Z"
            ],
            [
                "objectId" => "BkM9jvIbs2",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "APReQAOJGb"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "uOjmZbXRXn"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "1068",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-18T07:36:03.370Z",
                "updatedAt" => "2017-03-18T07:37:21.335Z",
                "order_id" => "BkM9jvIbs2",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "29SSH8LIcm"
                ]
            ],
            [
                "objectId" => "2rZXabo03r",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpkFpEiGa6"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-12",
                "days" => 2,
                "qty" => 1,
                "total" => "244",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T07:48:07.703Z",
                "updatedAt" => "2017-03-18T07:48:07.703Z"
            ],
            [
                "objectId" => "GQthtdhZj7",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpkFpEiGa6"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-12",
                "days" => 2,
                "qty" => 1,
                "total" => "244",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T07:55:30.994Z",
                "updatedAt" => "2017-03-18T07:55:30.994Z"
            ],
            [
                "objectId" => "7iPgNeO9hi",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpkFpEiGa6"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "gf5M6apayV"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-12",
                "days" => 2,
                "qty" => 1,
                "total" => "488",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T08:03:50.025Z",
                "updatedAt" => "2017-03-18T08:03:50.025Z"
            ],
            [
                "objectId" => "Di5IrOcoAG",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l4GGRCYpP7"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 1,
                "total" => "270",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T08:39:47.334Z",
                "updatedAt" => "2017-03-18T08:39:47.334Z"
            ],
            [
                "objectId" => "osZD9Cnunq",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpkFpEiGa6"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-12",
                "days" => 2,
                "qty" => 1,
                "total" => "244",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T09:30:44.481Z",
                "updatedAt" => "2017-03-18T09:30:44.481Z"
            ],
            [
                "objectId" => "CrhIFVDbGD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l4GGRCYpP7"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 2,
                "total" => "540",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T22:09:47.010Z",
                "updatedAt" => "2017-03-18T22:09:47.010Z"
            ],
            [
                "objectId" => "fpdXHmLf39",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 1,
                "total" => "135",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T22:12:17.173Z",
                "updatedAt" => "2017-03-18T22:12:17.173Z"
            ],
            [
                "objectId" => "eXcxTqkrfw",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 1,
                "total" => "135",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T22:13:14.888Z",
                "updatedAt" => "2017-03-18T22:13:14.888Z"
            ],
            [
                "objectId" => "Ya3WD0qTaS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 1,
                "total" => "135",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-18T22:13:17.585Z",
                "updatedAt" => "2017-03-18T22:13:17.585Z"
            ],
            [
                "objectId" => "gDFO0y5h4s",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "RgQ8D97NaS"
                ],
                "start" => "2016-06-08",
                "end" => "2016-06-13",
                "days" => 5,
                "qty" => 1,
                "total" => "158",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-20T02:44:41.729Z",
                "updatedAt" => "2017-03-20T02:44:41.729Z"
            ],
            [
                "objectId" => "A4LBXGjyuW",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 1,
                "total" => "135",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-20T20:20:51.057Z",
                "updatedAt" => "2017-03-20T20:20:51.057Z"
            ],
            [
                "objectId" => "b02kieytIV",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-10",
                "days" => 2,
                "qty" => 1,
                "total" => "135",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-20T21:47:04.207Z",
                "updatedAt" => "2017-03-20T21:47:04.207Z"
            ],
            [
                "objectId" => "9KqynwAHD6",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "vrrPDnTXdN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "H5djrukTrX"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l4GGRCYpP7"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-10",
                "days" => 2,
                "qty" => 1,
                "total" => "270",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-20T21:50:24.461Z",
                "updatedAt" => "2017-03-20T21:52:41.793Z",
                "order_id" => "9KqynwAHD6",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "xABb2X56CY"
                ]
            ],
            [
                "objectId" => "QiMAg5AE2L",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 1,
                "total" => "62",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-21T01:08:55.274Z",
                "updatedAt" => "2017-03-21T01:08:55.274Z"
            ],
            [
                "objectId" => "u3zbnAcfph",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "62",
                "pickup" => "vip",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-21T09:36:26.224Z",
                "updatedAt" => "2017-03-21T09:36:26.224Z"
            ],
            [
                "objectId" => "vckF4ZlurH",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "62",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:21:41.127Z",
                "updatedAt" => "2017-03-22T03:21:41.127Z"
            ],
            [
                "objectId" => "HCuQLnNQO9",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:21:42.289Z",
                "updatedAt" => "2017-03-22T03:21:42.289Z"
            ],
            [
                "objectId" => "h2CmPydNHC",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "5UCHhDdkXE"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "1920",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:37:34.580Z",
                "updatedAt" => "2017-03-22T03:37:34.580Z"
            ],
            [
                "objectId" => "3d6PzmcEGp",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "5UCHhDdkXE"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "992",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:37:35.753Z",
                "updatedAt" => "2017-03-22T03:37:35.753Z"
            ],
            [
                "objectId" => "D2wDSOA2TY",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "62",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:40:34.469Z",
                "updatedAt" => "2017-03-22T03:40:34.469Z"
            ],
            [
                "objectId" => "LmqIrEA1Fn",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:40:35.593Z",
                "updatedAt" => "2017-03-22T03:40:35.593Z"
            ],
            [
                "objectId" => "GTChKsgSFi",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "5UCHhDdkXE"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "992",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:43:34.994Z",
                "updatedAt" => "2017-03-22T03:43:34.994Z"
            ],
            [
                "objectId" => "qHstrWQG6n",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "5UCHhDdkXE"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "1920",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T03:43:37.119Z",
                "updatedAt" => "2017-03-22T03:43:37.119Z"
            ],
            [
                "objectId" => "EUlhi8Ztho",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "62",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 0,
                "createdAt" => "2017-03-22T04:59:35.796Z",
                "updatedAt" => "2017-03-22T04:59:35.796Z"
            ],
            [
                "objectId" => "qyp7CV2vFv",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "c9WKDF9CY8"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "120",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => 1,
                "createdAt" => "2017-03-22T05:01:12.738Z",
                "updatedAt" => "2017-04-10T01:22:57.884Z",
                "order_id" => "qyp7CV2vFv",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "i1o9ooLqPt"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "5UCHhDdkXE"
                ]
            ],
            [
                "objectId" => "61kxMaHPZy",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "62",
                "pickup" => "budget",
                "sim" => "sim2",
                "status" => -1,
                "createdAt" => "2017-03-22T05:01:13.782Z",
                "updatedAt" => "2017-03-22T05:02:28.826Z",
                "order_id" => "qyp7CV2vFv",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "i1o9ooLqPt"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "5UCHhDdkXE"
                ]
            ],
            [
                "objectId" => "T0ruuQHDvh",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2017-03-23",
                "end" => "2017-03-28",
                "days" => 5,
                "qty" => 5,
                "total" => "325",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-23T03:00:32.372Z",
                "updatedAt" => "2017-03-23T03:00:32.372Z"
            ],
            [
                "objectId" => "sliOJfWt5O",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "iPUwAapgwA"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "69",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-23T04:20:43.056Z",
                "updatedAt" => "2017-03-23T04:20:43.056Z"
            ],
            [
                "objectId" => "xQfWoEYWR1",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "400",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-23T04:21:40.757Z",
                "updatedAt" => "2017-03-23T04:21:40.757Z"
            ],
            [
                "objectId" => "AGHTSdbBEp",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "DxU21QEQ4F"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jmnCfHJ5AR"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "310",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-23T04:32:03.047Z",
                "updatedAt" => "2017-03-23T04:32:03.047Z"
            ],
            [
                "objectId" => "bTKuQSK9f3",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 2,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-23T08:15:43.166Z",
                "updatedAt" => "2017-03-23T08:15:43.166Z"
            ],
            [
                "objectId" => "kMhygDn7AO",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "iPUwAapgwA"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 7,
                "total" => "69",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-23T14:50:17.476Z",
                "updatedAt" => "2017-03-23T14:50:17.476Z"
            ],
            [
                "objectId" => "3LCPuescom",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "q0eyY9f5np"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "CID3ruO8Q1"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "K4ioJ9kQYa"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 7,
                "total" => "1680",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-23T16:12:42.397Z",
                "updatedAt" => "2017-03-23T16:12:42.397Z"
            ],
            [
                "objectId" => "iV936w1rbv",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iobqh1OPED"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "fsPpnb849G"
                ],
                "start" => "2017-05-31",
                "end" => "2017-06-01",
                "days" => 1,
                "qty" => 2,
                "total" => "90",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-24T07:52:15.187Z",
                "updatedAt" => "2017-03-24T07:52:15.187Z"
            ],
            [
                "objectId" => "77WTiqYEYx",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ol8OthFqu9"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y4pSMsVVvu"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 2,
                "total" => "640",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-24T09:22:44.802Z",
                "updatedAt" => "2017-03-24T09:22:44.802Z"
            ],
            [
                "objectId" => "bMsJ9zjwwO",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "BkZ0qlCeFj"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dXLJDXCm8F"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 10,
                "total" => "180",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-24T09:27:22.942Z",
                "updatedAt" => "2017-03-24T09:27:22.942Z"
            ],
            [
                "objectId" => "Q2Q1bG3n6V",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "95",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-28T00:46:27.475Z",
                "updatedAt" => "2017-03-28T00:46:27.475Z"
            ],
            [
                "objectId" => "imgnx1APVq",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "PrIYApIg5O"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xKcBQ1z2LA"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "350",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-28T02:38:52.492Z",
                "updatedAt" => "2017-03-28T02:38:52.492Z"
            ],
            [
                "objectId" => "500icY8xnp",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "475",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-28T02:56:55.481Z",
                "updatedAt" => "2017-03-28T02:56:55.481Z"
            ],
            [
                "objectId" => "98T8KFg7jN",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 2,
                "total" => "95",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T07:39:32.464Z",
                "updatedAt" => "2017-03-29T07:39:32.464Z"
            ],
            [
                "objectId" => "gpk3NwdKwu",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 2,
                "total" => "95",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T07:43:21.923Z",
                "updatedAt" => "2017-03-29T07:43:21.923Z"
            ],
            [
                "objectId" => "9EqGP1Xm9i",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 2,
                "total" => "95",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T07:47:24.613Z",
                "updatedAt" => "2017-03-29T07:47:24.613Z"
            ],
            [
                "objectId" => "KrQ379D9Hn",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "95",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T07:59:06.264Z",
                "updatedAt" => "2017-03-29T07:59:06.264Z"
            ],
            [
                "objectId" => "KvBZ0k1I0z",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 5,
                "total" => "475",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T08:18:20.966Z",
                "updatedAt" => "2017-03-29T08:18:20.966Z"
            ],
            [
                "objectId" => "8adWFdfzBL",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y4pSMsVVvu"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "380",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T08:19:05.293Z",
                "updatedAt" => "2017-03-29T08:19:05.293Z"
            ],
            [
                "objectId" => "5g4CdoNZgR",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 4,
                "total" => "170",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T08:22:01.169Z",
                "updatedAt" => "2017-03-29T08:22:01.169Z"
            ],
            [
                "objectId" => "eZoq95qq55",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y4pSMsVVvu"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "380",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T08:23:07.824Z",
                "updatedAt" => "2017-03-29T08:23:07.824Z"
            ],
            [
                "objectId" => "SJbQbQNcu1",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "170",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T08:23:52.190Z",
                "updatedAt" => "2017-03-29T08:23:52.190Z"
            ],
            [
                "objectId" => "HejAKrg6fe",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "170",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T08:25:00.257Z",
                "updatedAt" => "2017-03-29T08:25:00.257Z"
            ],
            [
                "objectId" => "B6gC4FOOfw",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "Y4pSMsVVvu"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "380",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T08:29:15.056Z",
                "updatedAt" => "2017-03-29T08:29:15.056Z"
            ],
            [
                "objectId" => "VCdDce7L2q",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 4,
                "total" => "95",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-29T12:34:57.678Z",
                "updatedAt" => "2017-03-29T12:34:57.678Z"
            ],
            [
                "objectId" => "zlJQKpB1RB",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "mbRE0ir9Hq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "TiqeDo6RdC"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "3rP0qdPql2"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-10",
                "days" => 1,
                "qty" => 4,
                "total" => "380",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-29T12:37:05.826Z",
                "updatedAt" => "2017-03-29T12:38:00.919Z",
                "order_id" => "zlJQKpB1RB",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "cBEqZW7uFo"
                ]
            ],
            [
                "objectId" => "DKVWKNvZvI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IapAUJbbtO"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "SucUUILRop"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 2,
                "total" => "180",
                "pickup" => "vip",
                "sim" => "sim3",
                "status" => 0,
                "createdAt" => "2017-03-29T16:29:25.356Z",
                "updatedAt" => "2017-03-29T16:29:25.356Z"
            ],
            [
                "objectId" => "4b0yUAO2kM",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IapAUJbbtO"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "SucUUILRop"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 4,
                "total" => "180",
                "pickup" => "vip",
                "sim" => "sim3",
                "status" => 0,
                "createdAt" => "2017-03-29T16:38:38.850Z",
                "updatedAt" => "2017-03-29T16:38:38.850Z"
            ],
            [
                "objectId" => "oM1FTARJiD",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "hpjqDvtnjq"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "cGqDvnMEiR"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 10,
                "total" => "139",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T01:58:33.428Z",
                "updatedAt" => "2017-03-30T01:58:33.428Z"
            ],
            [
                "objectId" => "w7rIE9aZ6E",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "170",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T06:31:24.678Z",
                "updatedAt" => "2017-03-30T06:31:24.678Z"
            ],
            [
                "objectId" => "PeJlONhyAV",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "170",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T06:35:30.539Z",
                "updatedAt" => "2017-03-30T06:35:30.539Z"
            ],
            [
                "objectId" => "GciMtppYTU",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "ol8OthFqu9"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-11",
                "days" => 1,
                "qty" => 7,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T06:58:18.995Z",
                "updatedAt" => "2017-03-30T06:58:18.995Z"
            ],
            [
                "objectId" => "KJWFr0Tg6b",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "6SVQLUxbNH"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "jgZuTEpDT8"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "rPPUWZ3dQA"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-11",
                "days" => 1,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T07:17:55.189Z",
                "updatedAt" => "2017-03-30T07:17:55.189Z"
            ],
            [
                "objectId" => "HD1hB5zAnF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "170",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T08:22:55.621Z",
                "updatedAt" => "2017-03-30T08:22:55.621Z"
            ],
            [
                "objectId" => "6wHwBPs1ZP",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "170",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T08:24:13.748Z",
                "updatedAt" => "2017-03-30T08:24:13.748Z"
            ],
            [
                "objectId" => "raLZkjpUyN",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "dpmyVYlGSv"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "iaKG17LOa4"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 4,
                "total" => "2720",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-03-30T08:26:13.943Z",
                "updatedAt" => "2017-03-30T08:26:13.943Z"
            ],
            [
                "objectId" => "AuGMzwUPXR",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "RHOJrWZ1Xf"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "h8Wz7kcGbu"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "iaKG17LOa4"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "640",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-03-30T08:33:46.350Z",
                "updatedAt" => "2017-03-30T08:40:15.317Z",
                "order_id" => "AuGMzwUPXR",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "7afL2QNWYD"
                ]
            ],
            [
                "objectId" => "WQGgGFW6JK",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "q0eyY9f5np"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "CID3ruO8Q1"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-11",
                "days" => 1,
                "qty" => 7,
                "total" => "103",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-03T02:27:13.850Z",
                "updatedAt" => "2017-04-03T02:27:13.850Z"
            ],
            [
                "objectId" => "JdDoAUNo1V",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-13",
                "days" => 3,
                "qty" => 3,
                "total" => "120",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-03T04:04:51.093Z",
                "updatedAt" => "2017-04-03T04:04:51.093Z"
            ],
            [
                "objectId" => "Ya8G6Hg6p2",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2lOp7o04dG"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "wIsnifpmD2"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-13",
                "days" => 3,
                "qty" => 3,
                "total" => "1080",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-04-03T04:14:40.835Z",
                "updatedAt" => "2017-04-03T04:16:38.102Z",
                "order_id" => "Ya8G6Hg6p2",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "i75IkxDofE"
                ]
            ],
            [
                "objectId" => "8qpewuiKJN",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "iVVv2stEee"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "rm3jSTrjjs"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "190",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-03T04:38:43.503Z",
                "updatedAt" => "2017-04-03T04:38:43.503Z"
            ],
            [
                "objectId" => "0CIH7bZXvF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LGNBEg6Oqn"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "yMKDAa7GaP"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l4GGRCYpP7"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-10",
                "days" => 2,
                "qty" => 1,
                "total" => "440",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-03T07:52:45.434Z",
                "updatedAt" => "2017-04-03T07:52:45.434Z"
            ],
            [
                "objectId" => "rp3RPFhkGx",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "76Uve3pQsg"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 2,
                "total" => "290",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-03T18:33:49.790Z",
                "updatedAt" => "2017-04-03T18:33:49.790Z"
            ],
            [
                "objectId" => "3ssx9Tktrc",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "76Uve3pQsg"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 2,
                "total" => "290",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-04T08:12:15.273Z",
                "updatedAt" => "2017-04-04T08:12:15.273Z"
            ],
            [
                "objectId" => "N8F1IeIHWy",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "fkoX3OapCN"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "4DfNM98rz6"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "QCXFf4F2BW"
                ],
                "start" => "2017-04-05",
                "end" => "2017-04-10",
                "days" => 5,
                "qty" => 1,
                "total" => "625000",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-04-05T06:17:27.120Z",
                "updatedAt" => "2017-04-05T07:29:43.346Z",
                "order_id" => "N8F1IeIHWy",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "uxOgqMEffg"
                ]
            ],
            [
                "objectId" => "KsGMDYpk88",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "ybVDUEDC5x"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "76Uve3pQsg"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "HkzAf0ao5w"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-11",
                "days" => 4,
                "qty" => 1,
                "total" => "1160",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -3,
                "createdAt" => "2017-04-05T07:07:56.934Z",
                "updatedAt" => "2017-04-05T07:31:20.622Z",
                "order_id" => "KsGMDYpk88",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "Se3P5OMZfA"
                ]
            ],
            [
                "objectId" => "hWCAlWeKUE",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "vRTpOj6S5A"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 1,
                "total" => "190",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-05T07:52:09.569Z",
                "updatedAt" => "2017-04-05T07:52:09.569Z"
            ],
            [
                "objectId" => "g6AtUWBBMv",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Fk9lXxN6pw"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 6,
                "total" => "85",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-05T08:16:46.087Z",
                "updatedAt" => "2017-04-05T08:16:46.087Z"
            ],
            [
                "objectId" => "w8znabpURp",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "rAoKCNUn9Y"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "WnyrNZ6kao"
                ],
                "start" => "NaN-NaN-NaN",
                "end" => "NaN-NaN-NaN",
                "days" => 0,
                "qty" => 1,
                "total" => "59",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-07T03:57:07.269Z",
                "updatedAt" => "2017-04-07T03:57:07.269Z"
            ],
            [
                "objectId" => "5x9ibZBylX",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2017-04-07",
                "end" => "2017-04-12",
                "days" => 5,
                "qty" => 1,
                "total" => "65",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-07T10:37:06.858Z",
                "updatedAt" => "2017-04-07T10:37:06.858Z"
            ],
            [
                "objectId" => "8lesCx51zB",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-09T11:21:00.828Z",
                "updatedAt" => "2017-04-09T11:21:00.828Z"
            ],
            [
                "objectId" => "QHg4RO8luk",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l2RbanR6uH"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "320",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-09T11:24:27.963Z",
                "updatedAt" => "2017-04-09T11:24:27.963Z"
            ],
            [
                "objectId" => "TlaVLDkdqS",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "l2RbanR6uH"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-11",
                "days" => 3,
                "qty" => 1,
                "total" => "240",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-04-09T11:26:09.185Z",
                "updatedAt" => "2017-04-09T11:27:30.604Z",
                "order_id" => "TlaVLDkdqS",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "JeRiLEGV4V"
                ]
            ],
            [
                "objectId" => "6apZAdkCRO",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "e8tbLwCBfV"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 6,
                "total" => "100",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-10T00:06:43.377Z",
                "updatedAt" => "2017-04-10T00:06:43.377Z"
            ],
            [
                "objectId" => "6m4aXDgOzr",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "F5TeR4VGpi"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "vRTpOj6S5A"
                ],
                "start" => "2017-06-06",
                "end" => "2017-06-12",
                "days" => 6,
                "qty" => 1,
                "total" => "190",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-10T00:11:58.221Z",
                "updatedAt" => "2017-04-10T00:11:58.221Z"
            ],
            [
                "objectId" => "Yy8ZcPslCl",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "q0eyY9f5np"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "CID3ruO8Q1"
                ],
                "start" => "2017-06-06",
                "end" => "",
                "days" => 0,
                "qty" => 6,
                "total" => "103",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-10T00:26:38.376Z",
                "updatedAt" => "2017-04-10T00:26:38.376Z"
            ],
            [
                "objectId" => "4mkfL9L23y",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "Lep9rKBu7r"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "2ClJx9p6YG"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "45",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-10T14:36:38.837Z",
                "updatedAt" => "2017-04-10T14:36:38.837Z"
            ],
            [
                "objectId" => "ORu8TJfa0E",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "l5gijIHl97"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "anmsADjdDG"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "71",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-12T08:38:08.387Z",
                "updatedAt" => "2017-04-12T08:38:08.387Z"
            ],
            [
                "objectId" => "zFgtHk3D53",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "gmlVXITiCK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Qk6HSxEWkH"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 2,
                "total" => "176",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-13T06:07:46.685Z",
                "updatedAt" => "2017-04-13T06:07:46.685Z"
            ],
            [
                "objectId" => "qrudWcBT1D",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xvvqknZ4kB"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-13",
                "days" => 3,
                "qty" => 1,
                "total" => "135",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-14T23:08:01.282Z",
                "updatedAt" => "2017-04-14T23:08:01.282Z"
            ],
            [
                "objectId" => "32M6u1qcQk",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xvvqknZ4kB"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-13",
                "days" => 3,
                "qty" => 1,
                "total" => "135",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-14T23:27:16.312Z",
                "updatedAt" => "2017-04-14T23:27:16.312Z"
            ],
            [
                "objectId" => "246pb4vGk4",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "xvvqknZ4kB"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "0rQqpUoS9d"
                ],
                "start" => "2017-06-10",
                "end" => "2017-06-13",
                "days" => 3,
                "qty" => 1,
                "total" => "405",
                "pickup" => "budget",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-04-14T23:30:48.795Z",
                "updatedAt" => "2017-04-14T23:35:22.389Z",
                "order_id" => "246pb4vGk4",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "gCkydyXrGC"
                ]
            ],
            [
                "objectId" => "r22FUQZSbk",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "yMc9Ba3dqX"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "HdkzpF1PQE"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-14",
                "days" => 6,
                "qty" => 1,
                "total" => "130",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-17T05:57:49.973Z",
                "updatedAt" => "2017-04-17T05:57:49.973Z"
            ],
            [
                "objectId" => "i2CfXlWgUF",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "q0eyY9f5np"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "CID3ruO8Q1"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "103",
                "pickup" => "empty",
                "sim" => "sim3",
                "status" => 0,
                "createdAt" => "2017-04-17T19:57:05.538Z",
                "updatedAt" => "2017-04-17T19:57:05.538Z"
            ],
            [
                "objectId" => "OGcunQG4FI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "l5gijIHl97"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "anmsADjdDG"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 3,
                "total" => "71",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-18T08:54:59.210Z",
                "updatedAt" => "2017-04-18T08:54:59.210Z"
            ],
            [
                "objectId" => "ebxyKBDGvh",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "l5gijIHl97"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "anmsADjdDG"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "jAMtcCYvE5"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-12",
                "days" => 3,
                "qty" => 3,
                "total" => "639",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => -1,
                "createdAt" => "2017-04-18T09:16:16.959Z",
                "updatedAt" => "2017-04-27T03:45:57.283Z",
                "order_id" => "ebxyKBDGvh",
                "card" => [
                    "__type" => "Pointer",
                    "className" => "user_cards",
                    "objectId" => "CCaaZF1yb5"
                ]
            ],
            [
                "objectId" => "limxcPrBmH",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Fk9lXxN6pw"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "85",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-19T11:19:43.678Z",
                "updatedAt" => "2017-04-19T11:19:43.678Z"
            ],
            [
                "objectId" => "WdaL20AF6T",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "gTvMLkqjoZ"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 1,
                "total" => "65",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T07:00:51.209Z",
                "updatedAt" => "2017-04-28T07:00:51.209Z"
            ],
            [
                "objectId" => "gAdzfYRn80",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T11:01:56.106Z",
                "updatedAt" => "2017-04-28T11:01:56.106Z"
            ],
            [
                "objectId" => "MwhRz0Prb0",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "08n9Vygi67"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "316",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T11:13:10.657Z",
                "updatedAt" => "2017-04-28T11:13:10.657Z"
            ],
            [
                "objectId" => "IlsIDfJbve",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "VtqeF8HOru"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "iQaNFWsSJq"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-07",
                "end" => "NaN-NaN-NaN",
                "days" => 0,
                "qty" => 1,
                "total" => "0",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T11:20:12.558Z",
                "updatedAt" => "2017-04-28T11:20:12.558Z"
            ],
            [
                "objectId" => "MSZI0C9l6A",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "Nf9Uc3GM0B"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "u0TYuEAyQB"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "320",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T11:35:00.653Z",
                "updatedAt" => "2017-04-28T11:35:00.653Z"
            ],
            [
                "objectId" => "5wduE9mQvs",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T22:51:08.361Z",
                "updatedAt" => "2017-04-28T22:51:08.361Z"
            ],
            [
                "objectId" => "fnMMJYa71v",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "400",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T22:53:08.770Z",
                "updatedAt" => "2017-04-28T22:53:08.770Z"
            ],
            [
                "objectId" => "V6ohT7r9Sk",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "IdSnu9yQhT"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "iPUwAapgwA"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "276",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-28T23:01:29.502Z",
                "updatedAt" => "2017-04-28T23:01:29.502Z"
            ],
            [
                "objectId" => "mhXYppHuzQ",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-13",
                "days" => 6,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T00:51:56.633Z",
                "updatedAt" => "2017-04-29T00:51:56.633Z"
            ],
            [
                "objectId" => "a2Q4K4ExIE",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "VtqeF8HOru"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "iQaNFWsSJq"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "325",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T00:57:51.756Z",
                "updatedAt" => "2017-04-29T00:57:51.756Z"
            ],
            [
                "objectId" => "UyP7EEbmKy",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-13",
                "days" => 6,
                "qty" => 1,
                "total" => "480",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T01:03:25.820Z",
                "updatedAt" => "2017-04-29T01:03:25.820Z"
            ],
            [
                "objectId" => "9P5FyBmjCz",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "400",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T01:05:04.520Z",
                "updatedAt" => "2017-04-29T01:05:04.520Z"
            ],
            [
                "objectId" => "Cbn7bMBJth",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T01:11:11.449Z",
                "updatedAt" => "2017-04-29T01:11:11.449Z"
            ],
            [
                "objectId" => "E8AxyHebmy",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-07",
                "end" => "NaN-NaN-NaN",
                "days" => 0,
                "qty" => 1,
                "total" => "0",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T01:14:36.852Z",
                "updatedAt" => "2017-04-29T01:14:36.852Z"
            ],
            [
                "objectId" => "HGsuGPPrET",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-12",
                "days" => 4,
                "qty" => 1,
                "total" => "320",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T01:32:29.958Z",
                "updatedAt" => "2017-04-29T01:32:29.958Z"
            ],
            [
                "objectId" => "2oYab29C04",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "CduiULyiHk"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-13",
                "days" => 6,
                "qty" => 1,
                "total" => "480",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-04-29T01:35:20.731Z",
                "updatedAt" => "2017-04-29T01:35:20.731Z"
            ],
            [
                "objectId" => "EFrgeZT3p6",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "pMrBzqzgOE"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Ia12JzDrx1"
                ],
                "start" => "2016-05-05",
                "end" => "2016-05-11",
                "days" => 6,
                "qty" => 1,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-03T02:45:22.651Z",
                "updatedAt" => "2017-05-03T02:45:22.651Z"
            ],
            [
                "objectId" => "9IRQ3UGeAC",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LGNBEg6Oqn"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "kcQJwv4LXX"
                ],
                "start" => "2017-06-05",
                "end" => "NaN-NaN-NaN",
                "days" => 0,
                "qty" => 5,
                "total" => "220",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-04T12:39:10.320Z",
                "updatedAt" => "2017-05-04T12:39:10.320Z"
            ],
            [
                "objectId" => "aeZwppAfbl",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LGNBEg6Oqn"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "kcQJwv4LXX"
                ],
                "start" => "2017-06-08",
                "end" => "2017-06-10",
                "days" => 2,
                "qty" => 1,
                "total" => "220",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-04T12:41:33.785Z",
                "updatedAt" => "2017-05-04T12:41:33.785Z"
            ],
            [
                "objectId" => "5rgVE4FAPY",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "LGNBEg6Oqn"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "kcQJwv4LXX"
                ],
                "start" => "2017-06-05",
                "end" => "2017-06-10",
                "days" => 5,
                "qty" => 1,
                "total" => "220",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-04T12:45:20.049Z",
                "updatedAt" => "2017-05-04T12:45:20.049Z"
            ],
            [
                "objectId" => "pGxCRvBzit",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Y1BGFswCrg"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "xskXvrZKkp"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 1,
                "total" => "1000",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-05T09:12:53.927Z",
                "updatedAt" => "2017-05-05T09:12:53.927Z"
            ],
            [
                "objectId" => "VqjjZfVA1c",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Y1BGFswCrg"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 5,
                "total" => "200",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-05T11:58:31.216Z",
                "updatedAt" => "2017-05-05T11:58:31.216Z"
            ],
            [
                "objectId" => "7fSrYEQDA4",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "KT9mMO9v30"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "Y1BGFswCrg"
                ],
                "start" => "2017-06-07",
                "end" => "2017-06-12",
                "days" => 5,
                "qty" => 5,
                "total" => "200",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-05T11:59:24.427Z",
                "updatedAt" => "2017-05-05T11:59:24.427Z"
            ],
            [
                "objectId" => "eS89l7lDkI",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "8dQe8e3Xns"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "s0CNLyB925"
                ],
                "start" => "2016-06-01",
                "end" => "2016-07-01",
                "days" => 30,
                "qty" => 1,
                "total" => "75",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-06T11:22:52.900Z",
                "updatedAt" => "2017-05-06T11:22:52.900Z"
            ],
            [
                "objectId" => "oUsiYO9VNl",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 2,
                "total" => "80",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-08T07:16:06.770Z",
                "updatedAt" => "2017-05-08T07:16:06.770Z"
            ],
            [
                "objectId" => "qAP8Mw3U4M",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FRLkoL7dSz"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 2,
                "total" => "320",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-08T07:21:11.907Z",
                "updatedAt" => "2017-05-08T07:21:11.907Z"
            ],
            [
                "objectId" => "J0ptv62IrT",
                "hotel" => [
                    "__type" => "Pointer",
                    "className" => "hotel",
                    "objectId" => "wccTtaXjHK"
                ],
                "room" => [
                    "__type" => "Pointer",
                    "className" => "rooms",
                    "objectId" => "7qGtVtpCW0"
                ],
                "user" => [
                    "__type" => "Pointer",
                    "className" => "_User",
                    "objectId" => "FRLkoL7dSz"
                ],
                "start" => "2017-06-09",
                "end" => "2017-06-11",
                "days" => 2,
                "qty" => 2,
                "total" => "320",
                "pickup" => "empty",
                "sim" => "empty",
                "status" => 0,
                "createdAt" => "2017-05-08T07:46:54.740Z",
                "updatedAt" => "2017-05-08T07:46:54.740Z"
            ]
        ];
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
