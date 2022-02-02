---
languages_supported:
    - NA
title: REACHRIG
category: NA
old_version: true
problem_code: REACHRIG
tags:
    - NA
layout: problem
---
Oil excavation is a common phenomenon in the sea. At every excavation site a rig is setup to extract the oil. The only mode to reach a rig is by a boat. Men who would like to reach a rig use special purpose boats which can run on crude fuel available at the rigs and the shore. These boats can run a mile for every unit of fuel they consume. Each man on the boat consumes a unit of food for every mile he travels. Boats have a limited load capacity. The net weight, including the weight of fuel, food and the men, on boat should never exceed its load capacity. The weight of one unit of fuel is same as the weight of one unit of food. However, as the rigs are far from the shore in the sea it is usually a very long sail. The capacity of the boat available for fuel may not be sufficient to reach the destination rig directly. In such cases, the men may goto a near by rig to load required fuel. The men can also store food at the rigs as well as at the shore for later consumption. They must buy all the food they require to reach the destination rig at the shore only. And all the men who started should be together throughout the sail. 
 
 You should now write a program which can help these men decide the minimum amount of food they require to reach the destination rig. The positions of rigs and the boat's starting point are indicated as co-ordinates of a two dimensional plane with x and y axises of 1 mile units. Food at shore is available only in whole units. 
 
 Assume that the food and fuel are consumed continuously, that is if you travel a partial mile the number of units of food and fuel consumed is equal to portion of mile traveled..

### Input

The first line contains the number of test cases (An integer &lt;= 100). 
 
 Each test case comprises of multiple lines containing list of integers as described below. 
 
 The first line of a test case has a list of integers terminated by -1. The first integer is the capacity of the boat. The integers following it up to -1 are the weights of men who need to reach the destination rig. 
 
 Lines following will have two integers separated by a space, each line indicating the x and y coordinates of a coordinate pair respectively. The first co-ordinate pair indicates the position of the boat's starting point. The last coordinate pair indicates the position of the destination rigs. All other points indicate the position of various rigs in the sea in a random order. The input for this test case will be terminated by a coordinate pair (0,0) and this should not be processed.

### Output

For each test case, your program should print the minimum amount of food required to reach the destination on a separate line. If it is not possible to reach destination, then the program should print -1.

### Example

<pre><b>Input:</b>
3
250 20 30 -1 
10 -20 
-10 5 
30 15 
15 35 
0 0
300 15 20 30 -1 
10 -20 
-10 5 
30 15 
-30 45 
0 0
150 20 30 -1 
1 1 
100 100 
0 0 

<b>Output:</b>
111
807
-1
</pre>