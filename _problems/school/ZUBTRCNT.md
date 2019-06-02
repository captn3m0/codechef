---
category_name: school
problem_code: ZUBTRCNT
problem_name: 'D - Triangle Count'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: zubaerkh
problem_tester: null
date_added: 19-11-2017
tags:
    - zubaerkh
time:
    view_start_date: 1517085000
    submit_start_date: 1517085000
    visible_start_date: 1517085000
    end_date: 1735669800
    current: 1525198880
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given an equilateral triangle **ΔABC** with the side **BC** being the base. Each side of the triangle is of length **L**. There are **L-1** additional points on each of the sides dividing the sides into equal parts of unit lengths. Points on the sides of the triangle are called *major* points. Joining these points with lines parallel to the sides of **ΔABC** will produce some more equilateral triangles. The intersection points of these parallel lines are called *minor* points.

Look at the picture below. It contains

- Major points: **A, B, C, P1, P2, Q1, Q3, R1, R4, S1, S2, S3** (note that we consider **A, B, C** as major points as well)
- Minor points: **Q2, R2, R3**
- Equilateral triangles **ΔP1Q1Q2, ΔQ2S1S3**, etc

![](https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KOL/ZUBTRCNT/triangle_count.png)
We consider an equilateral triangle to be valid if - Each of its vertices is either a major or a minor point, *and*
- The distance from its base (the base of a triangle is the side parallel to **BC**) to **BC** is less than the distance from the other vertex of the triangle (i.e. opposite vertex that doesn't lie on the base of triangle) to **BC**.

In the figure above, **ΔQ2P1P2** is not a valid triangle but **ΔQ2R2R3** is a valid triangle. You will be given **L**, the length of the original triangle **ΔABC**. You need to find out the number of valid equilateral triangles with side length exactly **K**.

### Input

- The first line of the input contains an integer **T** denoting the number of test cases. The description of each testcase follows.
- Each test case has one line containing two space-separated integers: **L** and **K**.

### Output

For each testcase, print "Case i: ", and then the answer, where i is the testcase number, 1-indexed.

### Constraints

- 1 ≤ **T** ≤ 500
- 1 ≤ **L, K** ≤ 5000

### Example

<pre><b>Input:</b>
2
4 3
4 4

<b>Output:</b>
Case 1: 3
Case 2: 1
</pre>
### Explanation

The figure presented in the problem description is a triangle with side length 4.

In **testcase 1**, the valid triangles are **ΔAR1R4, ΔP1BS3, ΔP2S1C**
In **testcase 2**, the only valid triangle is **ΔABC**
