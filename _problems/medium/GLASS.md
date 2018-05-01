---
languages_supported:
    - NA
title: GLASS
category: NA
old_version: true
problem_code: GLASS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

###  Statement 

Chef has n glasses each with a capacity of xi. 
There are Q+1 people playing a game including the Chef himself. Everyone at his/her turn gives a positive integer Mi and asks the Chef if volume M of water can be transferred using the n glasses with Chef. Chef at his own turn wants to give M as the highest integer volume which cannot be constructed using these n glasses. 
So, you need to help chef with this game. 
Assume that to construct a volume M, we have a reserve with infinite volume of liquid. If Chef uses ith glass, he has to transfer a volume equal to xi in one turn. He can use a glass multiple times. However, transfer of liquid between glasses is not permitted. For example, you cannot obtain volume of 2 by tranferring liquid from glass of volume 5 to glass of volume 3. 
It is always possible to construct volume 0.

###  Input 

 First line contains t ( ≤ 20 ) which is the number of test cases. For each test case, the first line contains n ( the number of glasses ) . The next line contains n space separated integers denoting the capacity of each glass. The next line contains a single integer Q - the number of players excluding the Chef. Then follows a line containing 3 space separated integers a,b,c. Calculate Mi for the ith person as (a\*i+b)%c ( i ≥ 1 ). ###  Output 

 For each test case, the first line of output should contain the highest value M desired by Chef \[ If there is no positive M, then output -1 \]. Then follows a line containing 2 integers A and B where A denotes the number of Mi which cannot be constructed using the given glasses and B denotes the number of Mi which can be constructed. ###  Sample Input 

 ```

1
2
3 5
2
8 1 10

<pre>###  Sample Output 

</pre>
7
1 1
<pre>###  Constraints 

1 < n ≤ 10 
1 ≤ xi ≤ 107 
MIN(xi) ≤ 100000 
1 ≤ Q ≤ 1000000 
1 ≤ a,c ≤ 1012 
0 ≤ b ≤ 1012

 
###  Sample Test Case Explanation 

 There are 2 glasses of size 3 and 5. Volumes 1, 2, 4, 7 cannot be created by the combinations of glass suggested in the problem. Hence, the highest volume is 7. 
The 2 queries are for 9 and 7. 9 can be created using the glasses and 7 cannot.
