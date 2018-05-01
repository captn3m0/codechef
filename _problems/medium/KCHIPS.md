---
languages_supported:
    - NA
title: KCHIPS
category: NA
old_version: true
problem_code: KCHIPS
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Did you know that potato was the first food that was ever grown in space ? Today is a big day for chef Crum, as he was called to make potato dishes for the people of the Valley of Food. He got angry knowing someone said that his potatoes were thick and so he started making them too thin and crisp ! (and thus invented potato chips :) ). There are **N** persons sitting in a row ( numbered 0 to N-1 ) and you are given an array **V**, where V\[i\] is the village number, where the ith person is from.

In each of the **R** rounds, Po serves potato chips to a group of people sitting continuously (a sub-array). Shifu is worried that, if in a round, more than **K** people from a village are served potato chips, others may protest and that leads to disruption of outer peace. To estimate the damage of a round, he wants to know how many distinct villages are there such that more than **K** people from each of them are served in that round.

### Input

First line contains two integers N K ( N is the number of persons, 1 <= N <= 100,000 and K is the limit in each round 0 <= K <= N ). Next line contains N numbers, the array V (as described above. 0 <= V\[i\] <= 100,000,000 ). Third line contains R (number of rounds, 1 <= R <= 100,000 ). R rounds follow, each in a new line, having integers i j (0 <= i <= j < N ). Po serves all the persons \[ i, i+1, ... , j \] in that round.

### Output

For each of the R rounds, print the answer in a new line.

### Example

<pre>
<b>Input:</b>
8 2
3 1 2 2 1 1 2 1
3
0 5
2 4
1 7

<b>Output:</b>
1
0
2

<b>Explanation:</b>
V[0..5] = { 3, 1, 2, 2, 1, 1 } : Only Village 1 occurs more than K ( = 2) times.
V[2..4] = { 2, 2, 1} : None of the villages occur more than 2 times.
V[1..7] = { 1, 2, 2, 1, 1, 2, 1 } : Villages 1 and 2 occur more than 2 times.
</pre>
_Warning : Large input / output. You may have to use efficient input / output methods if you are using languages with heavy input / output overload. Eg: Prefer using scanf/printf to cin/cout for C/C++ 

Note : There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted. Time limit on each test set is 2 sec_
