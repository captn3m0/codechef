---
category_name: medium
problem_code: KOL16K
problem_name: 'Chef and Points'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.4'
max_timelimit: '1.5'
source_sizelimit: '50000'
problem_author: mgch
problem_tester: null
date_added: 26-12-2016
tags:
    - mgch
time:
    view_start_date: 1482831600
    submit_start_date: 1482831600
    visible_start_date: 1482831600
    end_date: 1735669800
    current: 1493557732
layout: problem
---
All submissions for this problem are available.Today, you finally have a chance to compete with a famous coder like Chef and prove your mettle.

Chef has **n** distinct points in 2-D plane, i.e. there are never two points with both **x** and **y** coordinate equal and there are no two points with same **x** coordinate. Consider a subset of above **n** points which can be arranged as a sequence **p1**,..**pk**, such that **xp1**xp2xpk and each point **pi**, where **i** is in range between 3 and **k** (both inclusive) lies below or on the line passing between points **pi-1** and **pi-2**. Chef likes these kind of subsets. So he wants to find the size of largest of such subsets.

### Input

First line of the input contains one integer **T** - number of tests. **T** tests follows.

First line of each test contains one integer **N** - number of points.

The next **N** lines of each test case contain integer point coordinates **xi**, **yi**.

### Output

For a each test case, output a single integer in separate line corresponding to the largest subset size.

### Constraints

- 1 ≤ **T, N**, sum over all **N** over all test cases ≤ 2000
- 1 ≤ **xi**, **yi** ≤ 109

### Example

```

 <b>Input:</b>
 3
 3
 1 1
 4 2
 9 3
 4
 1 1
 4 2
 5 2
 9 3
 4
 2 3
 4 1
 1 2
 3 2

 <b>Output:</b>
 3
 3
 4

```
### Explanation

**Explanation case 1.**

 We can get sequence (1, 1) - (4, 2) - (9, 3), point (9, 3) lies below line between point (1, 1) and (4, 2). **Explanation case 2.**

 We can get (1, 1) -(4, 2) - (9, 3) **Explanation case 3.**

 We can get (1, 2) -(2, 3) - (3, 2) - (4, 1)