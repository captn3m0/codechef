---
category_name: easy
problem_code: CHEFAXR
problem_name: 'Chef and Submatrix'
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
    - PYPY
    - PYTH
    - 'PYTH 3.4'
    - RUBY
    - SCALA
    - 'SCM chicken'
    - 'SCM guile'
    - 'SCM qobi'
    - ST
    - TCL
    - TEXT
    - WSPC
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: furko
problem_tester: xcwgf666
date_added: 14-06-2015
tags:
    - bit
    - easy
    - furko
    - ltime25
    - matrix
    - xor
editorial_url: 'http://discuss.codechef.com/problems/CHEFAXR'
time:
    view_start_date: 1435480200
    submit_start_date: 1435480200
    visible_start_date: 1435480200
    end_date: 1735669800
    current: 1493558116
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/LTIME25/mandarin/CHEFAXR.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME25/russian/CHEFAXR.pdf).

Chef has a square matrix **A**. He would like to choose a consecutive sub-matrix of **A** such that value of **bitwise XOR** of all elements in it is maximal.

Each sub-matrix can be defined by four numbers **(x1,y1,x2,y2)**, with the meaning that the submatrix contains an element **A\[i\]\[j\]** iff **x1 ≤ i ≤ x2 and y1 ≤ j ≤ y2**.

You can read more about **bitwise XOR** operation [here](https://en.wikipedia.org/wiki/Bitwise_operation#XOR).

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the size of the matrix **A**.

The following **N** lines contain **N** space-separated integers, denoting values of elements in given matrix. The **j**-th element in the **i**-th line denotes the value of **A\[i\]\[j\]**.

### Output

For each test case, output a single line containing the maximal **bitwise XOR** a submatrix of **A**

### Constraints

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **70**
- **1** ≤ **Ai,j** ≤ **109**
- Subtask 1 (40 points): **1** ≤ **N** ≤ **20**
- Subtask 2 (60 points): **1** ≤ **N** ≤ **70**

### Example

```
<b>Input:</b>
<tt>1
3
1 4 3
1 8 6
1 2 3
</tt>
<b>Output:</b>
<tt>15</tt>

```
### Explanation

Chef can pick the following submatrix in order to make the XOR of elements equal to **15**:

```

<tt><b>1 4</b> 3
<b>1 8</b> 6
<b>1 2</b> 3
</tt>

```
This submatrix can be defined by **x1 = 1**, **y1 = 1**, **x2 = 3**, **y2 = 2**.