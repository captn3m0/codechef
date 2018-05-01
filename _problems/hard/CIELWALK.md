---
languages_supported:
    - NA
title: CIELWALK
category: NA
old_version: true
problem_code: CIELWALK
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Today, Ciel's restaurant is closed. Ciel is bored, so she decides to take a walk randomly.

This town has **N** intersections and **M** one way roads. The **i**-th road connects from the **Ai**-th intersection to the **Bi**-th intersection. Ciel is in the 1st intersection now, and Ciel's house is in the **N**-th intersection.

If Ciel is in the **i**-th intersection, she will take a walk as follows:

- If **i** = **N**, her walk is ended.
- Otherwise, she chooses an integer **k** such that **Ak** = **i** uniformly randomly, she walks along the **k**-th road.

On the way, **S** intersections have beautiful flowers. Let the **F**1-th intersection, the **F**2-th intersection, ..., and the **FS**-th intersection have beautiful flowers. Can you tell the probability that Ciel last sees the flowers in the **Fi**-th intersection? That is to say, can you tell the probability that she visits the **Fi**-th intersection, then she goes to **N**-th intersection without visiting other intersections having beautiful flowers?

### Input

The first line contains 3 integers **N**, **M** and **S**. Then, next line has **S** integers **F**1, **F**2, ..., **FS**. Next **M** lines have 2 integers each, **Ai** and **Bi**.

### Output

An output should contain **S** lines. In the **i**-th line, print the probability that Ciel last sees beautiful flowers at the **Fi**-th intersection. These values must have an absolute error no more than 10-6.

### Constraints

1 ≤ **S** < **N** ≤ 30
1 ≤ **F1** < **F2** < ... < **FS** < N
**Ai** ≠ **Bi**
If **i** ≠ **j** and **Ai** = **Aj**, then **Bi** ≠ **Bj**
For each 1 ≤ **i** < **N**, Ciel can go from the **i**-th intersection to the **N**-th intersection, directly or indirectly.

### Sample Input 1

<pre>4 6 3
1 2 3
1 2
2 1
1 3
3 1
2 4
3 4
</pre>### Sample Output 1

<pre>0
0.5
0.5
</pre>### Sample Input 2

<pre>4 6 1
2
1 2
2 1
1 3
3 1
2 4
3 4
</pre>### Sample Output 2

`0.6666666666667`### Sample Input 3

<pre>2 1 1
1
1 2
</pre>### Sample Output 3

`1`### Notes

The sum of output values can be less than 1, because Ciel may go back to her house without seeing beautiful flowers.
