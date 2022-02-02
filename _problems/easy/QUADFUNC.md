---
category_name: easy
problem_code: QUADFUNC
problem_name: 'Quadratic Functions'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: wittyceaser
problem_tester: null
date_added: 17-12-2017
tags:
    - wittyceaser
time:
    view_start_date: 1517693400
    submit_start_date: 1517693400
    visible_start_date: 1517693400
    end_date: 1735669800
    current: 1525198941
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.f(x) and g(x) are two quadratic polynomials:

- f(x) = **A**x2 + **B**x + **C**
- g(x) = **D**x2 + **E**x + **F**
 
 It is guaranteed that f(x) and g(x) do not intersect. That is, there is no real number r, such that f(r) = g(r).

 You need to find a quadratic polynomial h(x) = Px2 + Qx + R such that the sum of areas under the curves |f(x) - h(x)| and |g(x) - h(x)| is minimized between integer points x = **L** and x = **R**.

 Output this minimized sum of the areas of curves |f(x) - h(x)| and |g(x) - h(x)| from x = **L** and x = **R**. Print this number as a fraction **U**/**V**, where **U** and **V** are positive integers and gcd( **U**, **V**) = 1.

### Input

- First line contains a single integer **T** - the total number of testcases.
- Each testcase is described by 3 lines. 
    - The first line contains 3 space-separated integers **A**, **B** and **C**.
    - The second line contains 3 space-separated integers **D**, **E** and **F**.
    - The third line contains 2 space-separated integers **L** and **R**.
 
### Output

 For each testcase, print a single line containing the sum of areas as the required fraction.

### Constraints

- 1 ≤ **T** ≤ 103
- 1 ≤ **A, B, C, D, E, F** ≤ 103
- -103 ≤ **L** ≤ **R** ≤ 103
- **P**, **Q**, **R** need to be real numbers.
 
### Example

<pre><b>Sample Input</b>
1
1 1 1
2 2 2
-1 2

<b>Sample Output</b>
15/2
</pre>
![](https://codechef_shared.s3.amazonaws.com/download/upload/AMR17AMR/QUADFUNC/1.png)
