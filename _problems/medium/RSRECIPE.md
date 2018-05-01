---
languages_supported:
    - NA
title: RSRECIPE
category: NA
old_version: true
problem_code: RSRECIPE
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Chef has had a recipe. He had written it as a sequence of **N** integer numbers **A\[1\], A\[2\], ..., A\[N\]**. To be on the safe side, he decided to write out **M** triples of numbers, where **i**-th triple is composed of three numbers **Xi**, **Yi** and **Zi**. It means that the sum of numbers in the recipe from **Xi**-th to **Yi**-th is equal to **Zi**. In other words, **A\[Xi\] + A\[Xi + 1\] + ... + A\[Yi\] = Zi**. Unfortunately, the recipe has been recently lost. So Chef needs to restore his recipe using these **M** triples. Your task is to help him.

### Input

The first line contains two space separated integer numbers **N** and **M**.
Then **M** lines follow. Each line contains three space separated integer numbers **Xi**, **Yi** and **Zi**. It means that the sum of numbers in the recipe from **Xi**-th to **Yi**-th is equal to **Zi**.

### Output

If there is a solution output **N** space separated integer numbers - the sequence that you have restored. If there are several solutions you can output any of them. However, any number in the output should be no more than 1014 by its absolute value. If it is impossible to restore the sequence output "-1" without quotes.

### Constraints

- 2 ≤ **N** ≤ 65536
- 1 ≤ **M** ≤ 200000
- 1 ≤ **Xi** ≤ **Yi** ≤ **N**
- |**Zi**| ≤ 1000000000 (109)
- If It is possible to restore the sequence then there is way to do this such that every number in the restored sequence is in range \[-10000; 10000\]


### Example

<pre>
<b>Input 1:</b>
4 4
1 2 3
2 3 1
3 4 -2
1 4 1                                                                            

<b>Output 1:</b>
1 2 -1 -1

<b>Input 2:</b>
5 3
1 3 4
4 5 6
1 5 9 

<b>Output 2:</b>
-1
</pre>### Explanation

In the first test case the answer is not unique. Possible answers are also **{0, 3, -2, 0}**, **{2, 1, 0, -2}** and many others. 

In the second test case first two conditions imply **A\[1\] + A\[2\] + A\[3\] = 4** and **A\[4\] + A\[5\] = 6** and hence **A\[1\] + A\[2\] + A\[3\] + A\[4\] + A\[5\] = (A\[1\] + A\[2\] + A\[3\]) + (A\[4\] + A\[5\]) = 4 + 6 = 10**. And it contradicts to the third condition. Hence it is impossible to restore the recipe.
