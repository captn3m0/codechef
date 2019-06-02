---
languages_supported:
    - NA
title: CHEFGIFT
category: NA
old_version: true
problem_code: CHEFGIFT
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

It's our Chef's Birthday next week. His friends want to gift him something very nice and useful. They know how much Chef likes to go out on trips. So they decide to gift him a caravan i.e a [travel trailer](http://en.wikipedia.org/wiki/Travel_trailer). As is clear from the description, a caravan is towed behind a car.


 All the friends have chipped in a few dollars and now they have *D* dollars in total to buy a caravan. But there's one more thing they need to worry about. Caravans are sold outside their city. They will have to travel through various toll booths to buy one and bring it back. And they will have to pay some amount from their total *D* when they cross these toll booths. Luckily, they will not have to pay any toll for their own car(well, being Chef's friend has a lot of perks). But they will have to pay the toll for the caravan. They don't want to be spending too much on their tolls. Needless to say, they can't skip the toll booths.

There are *m* different roads between the Chef's city and the place where the caravans are sold. Each road takes a different route. There are *n* toll booths on every road. But an interesting observation is that the toll for a caravan need **not** be same for every road *AND* it also need **not** be same at every toll booth on the same road.

The friends want to gift him the most expensive caravan(which they can afford) and want to spend as little on tolls as they can. So *m* of the friends decide to travel on each of the roads individually. And once they buy a caravan, any one of them can start towing it behind his car. Also, a friend can move the caravan to some other friend's car i.e. to some other road. This is done so as to minimize the total toll. But there's another thing to be taken care of here. The caravan is not easy to move. So, there are mechanics available on every road who can do this. And there's a fixed amount they will charge to move the caravan from one road to another. This amount depends on the source and destination road between which the caravan is moved. But, there's a small restriction on the movement of the caravan. If the caravan has crossed the *i*th toll booth on a road, it can only be moved to a location before the (*i+1*)th booth on the other road. Initially, the caravan can be taken on any road.

Chef's friends will not want to buy an expensive caravan and find out later that they are out of money to pay for the toll. Nor do they want to end up buying a less expensive caravan and realize they could have bought a more expensive one. So they have collected all the details and want you to help them. Your task is to tell them the maximum amount they can spend on buying a caravan assuming they have D dollars initially and they have sufficient amount left to pay for the caravan toll.

### Input:

First line of input contains T, number of tests.

Each test begins with a line containing 3 space separated integers: D, n and m: total amount of money, the number of toll booths on every road and the number of roads respectively.

Then follow m lines. Each line consists of n integers describing every road in order. The ith number in a line denotes the toll for the caravan at the ith toll booth on the respective road.

Then follows an mxm matrix, C, where the jth number on the ith row i.e. C\[i\]\[j\] signifies the cost of moving the caravan from the ith road to the jth road. Ofcourse, C\[i\]\[i\]=0.

### Output:

Output a single integer: the maximum amount they will be able to spend on a caravan. If they don't have enough money to pay for the toll, print "-1" instead.

### Constraints:

1<=T<=30
 0<=D<=20000
 1<=n,m<=100 
 0<=toll<=200
 0<=C\[i\]\[j\]<=100

 **Input:**
 3
 40 5 4
 10 9 8 7 6
 8 7 6 9 12
 16 1 1 1 1
 7 6 5 4 3
 0 6 17 7
 8 0 19 2
 9 9 0 0
 12 4 18 0
 10 2 2
 5 6
 6 7
 0 0
 0 0
 12 3 2
 3 4 5
 5 7 2
 0 5
 2 0
 **Output:**
 20
 -1
 0
