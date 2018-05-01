---
category_name: medium
problem_code: ANCOIMP
problem_name: 'Anticommutative implication'
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
max_timelimit: '0.5 - 1'
source_sizelimit: '50000'
problem_author: kaizer
problem_tester: null
date_added: 29-03-2015
tags:
    - kaizer
editorial_url: 'http://discuss.codechef.com/problems/ANCOIMP'
time:
    view_start_date: 1434360600
    submit_start_date: 1434360600
    visible_start_date: 1434360600
    end_date: 1735669800
    current: 1493557455
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JUNE15/mandarin/ANCOIMP.pdf) and [Russian](http://www.codechef.com/download/translated/JUNE15/russian/ANCOIMP.pdf).

Chef is impressed by mathematical logic and linear algebra. He wants to combine his favorite subjects, so he introduced the concept of logical operations on boolean matrices.

He defines **A → B** to be a matrix **C** such that **Cij = Aij → Bij** and **¬ A** to be a matrix **B** such that **Bij = ¬ Aij**

Now Chef wants to study such system of equations: **A → X = ¬ O** and **X → A = O**

 Where **O** is matrix such that all its entries is 0.
However, Chef realized that such system has solution if and only if **A = O**. Since such solution is too trivial, Chef has decided to search for an approximate solution for arbitrary **A**. Thus, Chef is searching for such **X** that **A → X = ¬ O** and **X → A** has as much as possible entries which are equal to 0.

But the solution space turned to be very large, so he reduced it to a matrices of a special form. Now he is looking for **X** such that **Xij = yi xor yj** for some boolean vector **y**. Since now **X** is symmetric, Chef restricts **A** to also be symmetric.

 Help Chef to resolve this difficult problem, or say that there is no solution.

 Here → denotes the logical implication. p → q = !p || (p && q). Here ¬ denotes logical negation. ¬p = !p

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the size of **A**. The next **N** lines contain **N** space-separated integers **A\[i\]1**, **A\[i\]2**, ..., **A\[i\]N** denoting the i-th row of matrix **A**.
It's guaranteed that **A** is symmetric.

### Output

 For each test case, output a single line containing **N** integers - vector **y**, described in the statement, if there is a solution, or **-1**, if there is not. In case there are several solutions, print any solution.

### Constraints and Subtasks

- 0 ≤ **Aij** ≤ **1**

**Subtask 1: (15 points)**

- **1** ≤ **T** ≤  **1000**
- **1 ≤ N ≤ 10**

**Subtask 2: (25 points)**

- **1** ≤ **T** ≤  **500**
- **1 ≤ N ≤ 20**

**Subtask 3: (60 points)**

- **1** ≤ **T** ≤  **100**
- **1** ≤ **N** ≤ **1000**
- The sum of **N2** over all test cases in one test file does not exceed **106**

### Example

<pre><b>Input:</b>
3
4
0 0 0 1
0 0 0 1
0 0 0 0
1 1 0 0
4
1 0 0 1
0 1 0 1
0 0 0 0
1 1 0 0
2
0 0
0 0
<b>Output:</b>
0 0 1 1
-1
0 1
</pre>### Explanation

**Example case 1.**

Matrix which is determined by vector y is

<pre>
0 0 1 1
0 0 1 1
1 1 0 0
1 1 0 0
</pre> 
Then **A → X = ¬ O** and **X → A** is

<pre>
1 1 0 1
1 1 0 1
0 0 1 1
1 1 1 1
</pre>**Example case 2.**

**A11 = 1** and **X11 = y1 xor y1 = 0**. So **A11 → X11 = 0** and condition **A → X = ¬ O** can not be satisfied.
