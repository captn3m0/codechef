---
languages_supported:
    - NA
title: INSOMA3
category: NA
old_version: true
problem_code: INSOMA3
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Stepford Street was a dead end street. The houses on Stepford Street were bought by wealthy millionaires. They had them extensively altered so that as one progressed along the street, the height of the buildings increased rapidly. However, not all millionaires were created equal. Some refused to follow this trend and kept their houses at their original heights. The resulting progression of heights was thus disturbed.

A contest to locate the most ordered street was announced by the Beverly Hills Municipal Corporation. The criteria for the most ordered street was set as follows:

If there exists a house with a lower height later in the street than the house under consideration, then the pair (current house, later house) counts as 1 point towards the disorderliness index of the street. It is not necessary that the later house be adjacent to the current house.

Note: No two houses on a street will be of the same height

For example, for the input:

1 2 4 5 3 6

The pairs (4,3), (5,3) form disordered pairs. Thus the disorderliness index of this array is 2.

As the criteria for determining the disorderliness is complex, the BHMC has requested your help to automate the process. You need to write an efficient program that calculates the disorderliness index of a street.

### Input

Line 1: N – The size of the array. 1 &lt;= N &lt;= 10^5

Line 2: N integers denoting the heights of the various buildings in order of their locations on the street.

### Output

Line 1: The disorderliness index of the street.

### Example

<pre>
<b>Input:</b>
6
1 2 4 5 3 6


<b>Output:</b>
2
</pre>