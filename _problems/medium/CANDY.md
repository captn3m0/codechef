---
languages_supported:
    - NA
title: CANDY
category: NA
old_version: true
problem_code: CANDY
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The chef is a fan of candies with chocolate and caramel, and has devoted much of his life to finding the perfect ratio of chocolate to caramel. He recently discovered the perfect ratio, but to his dismay, none of his favourite candy shoppes sell candies with exactly that ratio. So the chef crafted a plan to buy several candies, and melt them together into a larger candy so that the resulting candy will have the perfect ratio. How many candies will he have to buy? The chef may buy multiple candies of the same type.

### Input:

Input begins with an integer N, the number of different candies available at the various shoppes. N lines follow, each containing 2 integers Chocolatei and Carameli indicating the grams of chocolate and caramel, respectively, contained in the (i)th candy. Finally, there is a line containing 2 integers desiredChocolate and desiredCaramel, indicating the chef's desired ratio of chocolate to caramel.

### Output:

For each test case, output on a single line the minimum number of candies the chef will have to buy. If it is impossible to produce a candy with the desired ratio, output -1 instead.

### Example

**Input 1:**

<pre>3
4 5
2 4
4 1
1 1
 
</pre>
**Output 1:**

<pre>3
 
</pre>
In this example, the chef purchases one of each candy and combines them to form a candy with 10 grams chocolate and 10 grams caramel.

**Input 2:**

<pre>3
2 3
4 6
10 15
5 8
 
</pre>
**Output 2:**

<pre>-1
 
</pre>
### Constraints:

1 ≤ N ≤ 15
 1 ≤ Chocolatei ≤ 500
 1 ≤ Carameli ≤ 500
 1 ≤ desiredChocolate ≤ 500
 1 ≤ desiredCaramel ≤ 500
 For all candies, Chocolatei/Carameli ≠ desiredChocolate/desiredCaramel
 No two candies will be identical.
