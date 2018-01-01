---
category_name: easy
problem_code: MTRNSFRM
problem_name: 'Matrix Transformation'
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
problem_author: alex_2oo8
problem_tester: kingofnumbers
date_added: 10-08-2016
tags:
    - ad
    - alex_2oo8
    - cook78
    - easy
    - math
    - median
editorial_url: 'https://discuss.codechef.com/problems/MTRNSFRM'
time:
    view_start_date: 1485109800
    submit_start_date: 1485109800
    visible_start_date: 1485109800
    end_date: 1735669800
    current: 1493558169
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/COOK78/mandarin/MTRNSFRM.pdf), [Russian](http://www.codechef.com/download/translated/COOK78/russian/MTRNSFRM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/COOK78/vietnamese/MTRNSFRM.pdf) as well.

Chef has two **n × m** matrices **A** and **B**. He wants to make them completely identical, to achieve this goal, he can perform the following actions in a single move:

1. Choose one of the matrices, either **A** or **B**.
2. Choose either one row or one column of the selected matrix.
3. Increment all the numbers in the selected row or column by **1**.

Now Chef is wondering, what is the minimal number of moves he has to perform in order to make matrices **A** and **B** equal? Or is it just impossible?

### Input

The first line of the input contains an integer **T** denoting the number of test cases.

For each test case, the first line of input contains two integers **n** and **m**.

The following **n** lines contain **m** space separated integers each ― the matrix **A**.

The next **n** lines contain **m** space separated integers each ― the matrix **B**.

**Warning!** The size of the input file can be up to **10 MB**!

### Output

For each test case, output a single integer ― the minimal number of moves Chef has to perform in order to make matrices **A** and **B** equal or **-1** if this is not possible. ### Constraints

- **1** ≤ **T** ≤ **100**
- **1** ≤ **n** ≤ **m** ≤ **105**
- **1** ≤ **n × m** ≤ **105**
- Let us denote the sum of **n × m** over all **T** testcases by **S**
- **1** ≤ **S** ≤ **5 · 105**
- **1** ≤ **Aij** ≤ **109**
- **1** ≤ **Bij** ≤ **109**

### Example

<pre><b>Input:</b>
3
2 2
1 1
1 1
1 2
3 4
2 2
1 9
9 1
9 1
1 9
1 4
4 5 7 1
2 3 4 5

<b>Output:</b>
3
-1
9

</pre>### Explanation
**Example case 1.** We can transform the matrix **A** into **B** in three moves: ```
1 1   ->   1 2   ->   1 2   ->   1 2
1 1   ->   1 2   ->   2 3   ->   3 4
<pre>**Example case 2.** It is impossible to make these matrices equal using only the allowed moves. **Example case 3.** We can transform matrix **A** into **4 5 7 7** in six moves and matrix **B** into the same **4 5 7 7** in three moves.