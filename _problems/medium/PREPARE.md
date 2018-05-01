---
languages_supported:
    - NA
title: PREPARE
category: NA
old_version: true
problem_code: PREPARE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

The Chef and his assistant are, by far, the two best cooks in the kitchen. They can prepare many dishes in far less time than the other cooks in the kitchen. Also, the Chef and his assistant are able to prepare many dishes in succession, but any other cook can only prepare one dish before they need a break.

Now, the supper rush has arrived and many orders for various dishes have just arrived. For each order, the Chef has an estimate on how long it will take him or his assistant to prepare the dish as well as an estimate of how long it will take any other cook to prepare the dish. So, the Chef must decide which dishes will be prepared by himself or his assistant and which dishes will be prepared by other cooks. Furthermore, he must divide the dishes not sent to other cooks between himself and his assistant.

Even though every other cook can only prepare one dish, there are many such cooks so the Chef can delegate as many dishes as he wants to these other cooks. These cooks will immediately start working on their dish. The remaining dishes are partitioned between the Chef and the assistant and the time it takes each of them to finish the dishes they have been assigned is the sum of the times of each assigned dish.

Help the Chef decide which dishes should be given to other cooks and how to divide the remaining dishes between himself and his assistant to minimize the time that the last dish is prepared.

### Input

The first line contains a single integer indicating the number of test cases (at most 50). Each test case begins with a single integer n indicating how many dishes must be prepared. The next n lines describe the dishes, one per line. The first integer on the i'th line indicates how long it will take any other cook to prepare the dish and the second indicates how long it will take the Chef or his assistant to prepare the dish.

Bounds: Both n and all times given in the input are between 1 and 1000.

### Output

The output for each test case consists of a single integer t which is the minimum time such that there is a way to give some dishes to other cooks and partition the remaining dishes between the Chef and his assistant so that all dishes are prepared within t units of time.

### Example

<pre><b>Input:</b>
2
7
10 1
10 2
10 1
10 2
10 1
3 1
3 1
3
1 2
1 3
1 4

<b>Output:</b>
4
1
</pre>