---
languages_supported:
    - NA
title: GRIDCHEF
category: NA
old_version: true
problem_code: GRIDCHEF
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

###  Statement 

Chef is not having a good time these days. Just Yesterday he made terrible food and hence got beaten up. He has hence decided that he wont prepare food himself but instead collect food from hotels in the city. 
However, he suffered injury on his head ( people can get really angry when served with bad food ) and is suffering from short term memory loss. He is standing in a city in the form of a grid where cell(i,j) of the grid contains a hotel which has Gij amount of food to offer to the chef. Every second, Chef goes to one of the neighbors in the grid. ( Note: Please note that any cell(i,j) can have atmost 4 neighbors). 
Unfortunately, due to short term memory loss, he throws away whatever he is given every alternate second. That is he throws away food given at t = 0 , keeps food given at t = 1, throws away food given at t = 2, and so forth. 
The grid also has some added constraints. No hotel ( or cell ) can be visited more than once. Since, Chef has weak memory, he must return to his kitchen ( which is also his starting point ) after collecting the food. 
You have to help the Chef choose a path such that the amount of food collected is maximized \[ The path should be such that no two cell in the path are same except for the start and end of the path which **have to be** the same \]. 
 **The Chef can choose the kitchen ( starting point ) to be located in any of the four corners of the grid.**

###  Input 

The first line contains t ( &lt;= 100 ) which denotes the number of test cases. For each test case, the first line contains 2 space separared integers n,m which denote the dimension of the matrix. Then n lines follow, each containing m space separared integers. jth integer on the ith line denotes Gij 
 **Warning : Enormous Input/Output.**

###  Output 

For each test case, the first line of output should contain a number denoting the maximum amount of food the Chef can collect. The second line of output should contain the length of the path Chef takes ( L ) for the mentioned amount of food. Then follow L lines, where the ith line contains 2 space separated integers ( 0 based ) denoting the cell number of the ith cell in the path. 
If there are multiple such optimal paths, any path would suffice. 
**Note** : The first and last cell of the path are the same ( The Chef returns to his starting point ) .

###  Sample Input 


<pre>
1 
2 2
2 3
3 2
</pre>
###  Sample Output 


<pre>
6
5
0 0 
0 1
1 1 
1 0
0 0
</pre>
###  Constraints 

1 &lt; m\*n ≤ 100000 
0 ≤ Gij ≤ 10000
