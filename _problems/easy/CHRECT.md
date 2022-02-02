---
category_name: easy
problem_code: CHRECT
problem_name: 'Chef and Walking on the rectangle '
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - 'C99 strict'
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 4.9.2'
    - CPP14
    - CS2
    - D
    - ERL
    - FORT
    - FS
    - GO
    - HASK
    - ICK
    - ICON
    - JAVA
    - JS
    - 'LISP clisp'
    - 'LISP sbcl'
    - LUA
    - NEM
    - NICE
    - NODEJS
    - 'PAS fpc'
    - 'PAS gpc'
    - PERL
    - PERL6
    - PHP
    - PIKE
    - PRLG
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: furko
problem_tester: gamabunta
date_added: 11-05-2013
tags:
    - ad
    - cakewalk
    - furko
    - july13
editorial_url: 'http://discuss.codechef.com/problems/CHRECT'
time:
    view_start_date: 1373880600
    submit_start_date: 1373880600
    visible_start_date: 1373880600
    end_date: 1735669800
    current: 1493558129
layout: problem
---
All submissions for this problem are available.Chef likes rectangles. Among all possible rectangles, he loves rectangles that can be drawn like a grid, such that they have **N** rows and **M** columns. Grids are common in Byteland. Hence, Chef has drawn such a rectangle and plans on moving around in it.

The rows of the rectangle are labeled from **1** to **N** from top to bottom. The columns of the rectangle are labeled form **1** to **M** from left to right. Thus, the cell in the **top left** can be denoted by **(1,1)**. The **5th** cell from the left in the **4th** row form the top can be denoted by **(4,5)**. The **bottom right** cell can be denoted as **(N,M)**.

Chef wants to move from the cell in the **top left** to the cell in the **bottom right**. In each move, Chef may only move one cell right, or one cell down. Also, Chef is not allowed to move to any cell outside the boundary of the rectangle.

Of course, there are many ways for Chef to move from **(1,1)** to **(N,M)**. Chef has a curious sport. While going from **(1,1)** to **(N,M)**, he drops a stone on each of the cells he steps on, except the cells **(1,1)** and
**(N,M)**. Also, Chef repeats this game exactly **K** times.

Let us say he moved from **(1,1)** to **(N,M)**, exactly **K** times. At the end of all the **K** journeys, let the number of stones, in the cell with the maximum number of stones, be equal to **S**. Chef wants to know what is the smallest possible value for **S**.

### Input

The first line contains single integer **T**, the number of test cases. Each of the next **T** lines contains **3** integers **N, M and K**, respectivily.

### Output

For each test case, output the smallest value possible for **S**, if the Chef chooses the **K** paths smartly.

### Constraints

**1 ≤ T ≤ 100**
**1 ≤ N, M, K ≤ 70**

### Sample

<pre>
<b>Input</b>
3
2 2 1
3 3 2
1 5 12

<b>Output</b>
1
1
12

</pre>
### Explanation

**Test Case 1:** Chef may choose any way. The maximum value on any cell would be 1.

**Test Case 2:** If Chef selects two paths that have a common cell, such as

- **(1,1)-&gt;(1,2)-&gt;(2,2)-&gt;(3,2)-&gt;(3,3)**
- **(1,1)-&gt;(2,1)-&gt;(2,2)-&gt;(3,2)-&gt;(3,3)**

Then the value of **S** will be equal to **2**, since the number of stones in **(2,2)** and **(3,2)** is equal to 2. But, if Chef selects two paths which do not have any common cells, such as

- **(1,1)-&gt;(1,2)-&gt;(1,3)-&gt;(2,3)-&gt;(3,3)**
- **(1,1)-&gt;(2,1)-&gt;(3,1)-&gt;(3,2)-&gt;(3,3)**

Then the value of **S** will be equal to **1**.
