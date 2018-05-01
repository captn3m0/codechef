---
languages_supported:
    - NA
title: BUYLAND
category: NA
old_version: true
problem_code: BUYLAND
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

After recent success of cooking reality shows, Chef decided to borrow the idea and host his own "Devil's Kitchen" show. But his ambitions are even bigger. He plans to build a whole complex of hotels, gyms and other entertainment facilities along with one main restaurant where he'll host the show. But first of all, he needs to purhase some land to build on. The country is divided into a grid with R rows and C columns of smaller parcels. Chef wants to buy a rectangular piece of land H parcels high and W parcels wide. He also has a preferred layout in mind. The restaurant will be located at (i,j). For every parcel he defined its preferred height relative to the height of the restaurant parcel. For a particular piece of land, he computes height differences relative to the restaurant and compares them to the preferred layout. This comparison is done as a sum of squared differences over all H\*W parcels. Given the map of the country, help him out by finding the K most suitable pieces of land.

### Input

Input starts with a description of the country. It is described from north to south and from west to east. All coordinates are 1-based, which means that the parcel farthest to the north-west is at (1,1). Dimensions R and C are given in the first line, followed by R lines of C integers, describing the heights of individual parcels. Following is the description of the chef's preferred layout, starting with dimensions H and W. Position of the restaurant within the layout (i,j) is given in the next line. The j-th number in the i-th line of preferred layout will always be 0. Input ends with number K, the number of solutions you are required to find. It will be possible to buy the piece of land on at least K different positions. All numbers describing heights will have absolute value at most 30.

### Output

Output exactly K lines containing the K best pieces of land chef can buy, ordered from best to worst. Each piece of land should be described by numbers BR, BC, S, where (BR,BC) represents the position of the upper-left corner of the purchased piece of land and S the corresponding score. In case of a tie, the chef prefers solutions to the north (direction of decreasing row numbers). If there is still a tie, choose the solution farthest to the west (direction of decreasing column numbers).

### Constraints

- 1 <= R, C <= 666
- 1 <= H <= (R+1)/2
- 1 <= W <= (C+1)/2
- 1 <= K <= 1000
### Example


<pre>
<b>Input:</b>
5 8
6 1 8 6 0 0 8 1
6 5 8 6 8 6 8 1
6 5 8 6 8 6 8 2
6 5 8 6 8 6 8 2
6 5 8 6 8 6 0 2
3 4
-1 2 2 2
-1 2 0 2
-1 2 2 2
2 3
4

<b>Output:</b>
2 2 8
3 2 8
2 4 11
3 4 75
</pre>### Explanation

If the chef decides to buy the land from (3,4) to (5,7), he will end up with the following layout:
0 2 0 2
0 2 0 2
0 2 0 -6
Comparing it to the preferred layout gives the penalty of 1+0+4+0+1+0+0+0+1+0+4+64=75, which is 4th best.
