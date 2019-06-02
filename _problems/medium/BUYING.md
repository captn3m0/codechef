---
languages_supported:
    - NA
title: BUYING
category: NA
old_version: true
problem_code: BUYING
tags:
    - NA
layout: problem
---
###  All submissions for this problem are available. 

Emily is coming back from her two-week vacation at the other continent. But when Emily arrived at the airport, she realized that she had got no presents for her **K** friends! She still had some time before her flight, so she went for a walk around the airport hoping to find something suitable.

Soon Emily found a candy store and decided to buy some of her favorite candies for her friends. The store offers **N** packs of these candies, where pack **i** contains **Ai** candies.

Another reason Emily decided to buy candies is that she is fond of collecting empty candy packs from various parts of the world. That's why she decided to buy exactly **M** packs and present the friends with the candies and keep the packs for her collection. Emily would also like the total number of candies to be divisible by **K** so that an equal distribution of candies between friends is possible. Among all possible sets of packs, she would like to buy a set with the smallest possible total number of candies (money is the reason).

Your task is to help Emily, of course.

### Input

The first line of the input file contains an integer **T** -- the number of test cases (no more than 5). **T** test cases follow, and each test case consists of two lines. The first of them contains three integers **N**, **M** and **K** (1 ≤ **M** ≤ **N** ≤ 50000, 1 ≤ **K** ≤ 20). The second of them contains **N** integers **Ai** (1 ≤ **Ai** ≤ 109).

### Output

For each test case, output just one line containing the smallest possible total number of bought candies, or **-1** if it's impossible to buy exactly **M** packs so that the total number of candies is divisible by **K**.

### Example

<pre>
<b>Input:</b>
2
5 3 5
1 2 3 4 5
6 3 4
9 5 1 7 3 7

<b>Output:</b>
10
-1

<b>Explanation:</b>
</pre>
In the first test case, it's impossible to buy one candy per friend as three smallest packs contain 6 candies all together. Two candies per friend is possible though -- for example, if you buy packs with 1, 4 and 5 candies.

In the second test case, buying 3 packs implies buying an odd number of candies, which is impossible to distribute equally among 4 friends.
