---
category_name: easy
problem_code: TRICHEF
problem_name: 'Chef and Triangles'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: usaxena95
problem_tester: null
date_added: 8-12-2017
tags:
    - easy
    - geometry
    - gwr17rol
    - usaxena95
time:
    view_start_date: 1516482000
    submit_start_date: 1516482000
    visible_start_date: 1516482000
    end_date: 1735669800
    current: 1525454394
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.Chef has come to a 2 dimensional garden in which there are **N** points. Each point has coordinates **(x, y)**, where **x** can either be **1** or **2** or **3**. Chef will now choose every triplet of these **N** points and make a triangle from it. You need to tell the sum of areas of all the triangles the Chef makes.

Note that some of the triplets might not form proper triangles, and would end up as a line or a point (ie. degenerate), but that is fine because their area will be zero.

### Input

- The first line contains a single integer **T**, the number of test cases. The description of each testcase follows.
- The first line of each test case contains an integer **N** denoting the number of points on the plane.
- The next **N** lines contain 2 space separated integers **x** and **y** denoting the coordinates of the points.

### Output

For each test case, output a single line containing the answer. Your answer will be considered correct if the absolute error is less than or equal to 10-2.

### Constraints

- 1 ≤ **T** ≤ 20
- 1 ≤ **N** ≤ 2000
- 1 ≤ **x** ≤ 3
- 1 ≤ **y** ≤106
- All (**x**, **y**) pairs are distinct

### Example

<pre><b>Input:</b>
2
3
1 1
2 1
3 3
4
1 1
2 2
2 1
3 3

<b>Output:</b>
1.0
2.0
</pre>### Explanation:

Test Case 1: There is only one triangle which has non-zero area, and it's area is 1, hence the output.

Test Case 2: Let the points be A(1,1), B(2,2), C(2,1), D(3,3). There are 3 non degenerate triangles possible.

15. area ABC = 0.5
16. area BCD = 0.5
17. area ACD = 1
Total area = 2
