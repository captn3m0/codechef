---
languages_supported:
    - NA
title: CNTHEX
category: NA
old_version: true
problem_code: CNTHEX
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Dexter wants to make a hexagon by using six sticks for sides from a collection of sticks of lengths **1, 2, 3, ... N**. Dexter will only make **valid** hexagons whose area is strictly positive.

 He considers a hexagon "good" if the biggest stick has **length at least L** and lengths of all the other sticks **are not more than X**. A "good" hexagon does not have sticks of the **same length more than K times**. How many ways he can make a "good" hexagon?

 For example, when N=8, L=7, X=5, K=3: { 1,2,2,5,5,7 } is a good hexagon but {1,2,2,2,2,7}, { 1,2,3,4,5,6},{1,2,3,4,6,7} are not .

 Two hexagons are considered different if their side length sets are different. For example {1,2,3,4,5,6} , {1,1,1,2,2,3} and {1,1,2,2,2,3} are all different hexagons. But {1,2,3,4,5,6} and { 2,4,6,1,3,5} are not different.

### Input

Input contains four integers **N( 2 <= N <= 10^9)** , **L ( 2 <= L <= N** and **N-L<=100)** ,  **X( 1<=X< L )** and **K ( 1 <= K <= 5)** .

### Output

Output the number of different ways to make a "good" hexagon **% 1000000007.**

### Sample Input

`10 8 6 2`### Sample Output

`374`