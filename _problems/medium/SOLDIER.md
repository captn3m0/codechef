---
languages_supported:
    - NA
title: SOLDIER
category: NA
old_version: true
problem_code: SOLDIER
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Igor, a famous russian soldier, must go to war. His superiors allowed him to buy his own equipment. He must buy 6 items: a helmet, bulletproof vest, trousers, boots, tunic and firearm. This items are represented with numbers from 1 to 6.

 There are N (6 < N < 101) items of these 6 types. Each item is characterized by its price p\[i\] (in rublas) and is quality q\[i\]. Igor has a total of T (0 < T < 1001) rublas and he wants to maximize the total quality of his equipment. The total quality is the quality of the item with the lowest quality. Help him.

### Input

On the first line there are two integers: number of items for sale (N) and total rublas Igor has (T). Subsequent lines contain 3 integers: type (t) (from 1 to 6) price (> 0) and quality.

### Output

Output the total quality.

### Example

<pre>
<b>Input:</b>
7 53
5 8 2
2 4 8
6 8 13
1 13 12
4 5 1
3 2 7
3 13 5

<b>Output:</b>
1

<b>Note:</b>
If there is no answer, output 0.
There can be less than 6 items.
</pre>