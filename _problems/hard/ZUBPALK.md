---
category_name: hard
problem_code: ZUBPALK
problem_name: 'G - Palace of King'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '8'
source_sizelimit: '50000'
problem_author: zubaerkh
problem_tester: null
date_added: 20-11-2017
tags:
    - zubaerkh
time:
    view_start_date: 1517085000
    submit_start_date: 1517085000
    visible_start_date: 1517085000
    end_date: 1735669800
    current: 1525198969
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.A king in a distant land wants to build a new palace for himself. There are some plots of land in the country. Some of them don't have any owner, some of the plots are owned by the citizens of the country. Being a good person, the king wants to pay the appropriate amount of money for the land he uses. If he uses some portion of a plot, he needs to buy the whole plot. Also, this is a weird country where the plots owned by the citizens may overlap. For an area, the king needs to buy all the overlapping plots to use that area. To use some area not owned by any citizen, the king doesn't need to spend any money.

Formally, the country is an **M × N** grid with **L** plots owned by the citizens. Each of these plots is rectangular in shape. The **ith** plot has its lower left corner at **(xi, yi)**, length **li** (along with the _x_-axis), width **wi** (along with the _y_-axis), and price **pi**. The palace the king is going to build should be rectangular in shape as well. Please help him to find the rectangular place with the largest area which he can use without spending more than **C** amount of money.

**(0,0)** is the lower left corner of the country and **(M, N)** is the upper right corner. All the plots owned by the citizens are inside this area. The palace should be inside this area as well. The sides of the palace should be axis-parallel.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. Description of each test case is given below.
- The first line of each test case contains three integers **M**, **N**, and **C**.
- The second line contains **L**.
- Each of next **L** lines contains the description of a plot owned by a citizen. **ith** of these line has five integers: **xi, yi, li, wi**, and **pi**.

### Output

For each test case, print "Case i: ", and then the answer (mod 109 + 7), where i is the testcase number, 1-indexed. The answer should be the largest area of the rectangular shaped land that can be used without spending more than **C** amount of money.

### Constraints

- 1 ≤ **T** ≤ 10
- 1 ≤ **M, N** ≤ 1000
- 0 ≤ **C** ≤ 1000000000
- 0 ≤ **xi** ≤  **M - li**
- 0 ≤ **yi** ≤  **N - wi**
- 1 ≤ **li, wi**
- 1 ≤ **pi** ≤ 100000
- 1 ≤ **L** ≤ 1000

### Example

<pre><b>Input:</b>
1
4 4 6
3
1 0 2 1 2
2 0 1 4 2
0 3 3 1 4

<b>Output:</b>
Case 1: 12
</pre>### Explanation

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBPALK/palace_of_king.png)
The image above shows the lands owned by the citizens and the palace with area **12** (lower left corner at **(0,0)** and upper right corner at **(4,3)**).
