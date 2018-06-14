---
category_name: challenge
problem_code: MAXRECT
problem_name: 'Maximum Sub-rectangle in Matrix'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - CLOJ
    - FS
max_timelimit: '0.4'
source_sizelimit: '50000'
problem_author: yellow_agony
problem_tester: anton_lunyov
date_added: 8-07-2012
tags:
    - challenge
    - oct12
    - yellow_agony
editorial_url: 'http://discuss.codechef.com/problems/MAXRECT'
time:
    view_start_date: 1350293400
    submit_start_date: 1350293400
    visible_start_date: 1350293400
    end_date: 1735669800
    current: 1525199668
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.You are given a matrix of the size **H × W** with integer elements. So it has **H** rows and **W** columns. The rows are numbered by integers in the range **\[0, H – 1\]** while for the columns the range **\[0, W – 1\]** is used. Your task is to find out a sub-rectangle of this matrix with a large sum. The sum of a sub-rectangle is the sum of all its elements. However, sub-rectangle does not need to be contiguous. More formally, you have to find out a subset of rows **R** and a subset of columns **C**. Then your sub-rectangle contains all those cells **(r, c)** where **r** is in **R** and **c** is in **C**.

This is a challenge problem so you don't have to find out the optimal solution. You would get a partial score depending on how large the sum of your chosen rectangle is.

### Input

The first line of the input contains two space separated integers **H** and **W**, the height and the width of the matrix respectively. Each of the following **H** lines contains **W** space separated integers, the elements of the corresponding row of the matrix.

### Output

Your output should consist of 3 lines. The first line of the output should contain two space separated integers **R\_SIZE** and **C\_SIZE**, the sizes of your row set and the column set respectively. In the next line there should be **R\_SIZE** distinct integers in the range **\[0, H – 1\]** in ascending order, the set of rows you have chosen. In the third line there should be **C\_SIZE** distinct integers in the range **\[0, W – 1\]** in ascending order, the set of columns you have chosen.

**Your program will get accepted if and only if all of the following conditions are satisfied:**

1. Both your row set and column set are non-empty, that is, **R\_SIZE** ≥ **1** and **C\_SIZE** ≥ **1**.
2. The second line of your output contains **R\_SIZE** distinct integers in the range **\[0, H – 1\]** in ascending order.
3. The third line of your output contains **C\_SIZE** distinct integers in the range **\[0, W – 1\]** in ascending order.
4. The sum of your chosen sub-rectangle is positive. You are guaranteed that such a sub-rectangle always exists.

### Scoring

Let **numerator** = Sum of your chosen sub-rectangle
and **denominator** = Sum of all positive elements of the matrix.

Then your score for a single file is equal to **numerator / denominator**. Your total score is the average of individual scores for each file multiplied by **10000** for convenience. Your goal is to maximize your total score.

### Constraints

**1** ≤ **H**, **W** ≤ **300**
Each element of the matrix does not exceed **109** by the absolute value. There exists a sub-rectangle of the given matrix which has positive sum.
In each official test file **H**, **W** ≥ **200**.

### Example

<pre>
<b>Input:</b>
3 3
-1 -2 4
2 3 -1
8 9 -1

<b>Output:</b>
1 2
1
1 2
</pre>### Explanation

In this output the set of one row **R = {1}** and the set of two columns **C = {1, 2}** have been chosen. The chosen cells of the matrix are **M\[1\]\[1\] = 3**, **M\[1\]\[2\] = -1** (recall that the numeration of rows and columns is 0-based). So the sum of the chosen sub-rectangle is **3 + (-1) = 2 > 0**. The sum of all positive elements of the matrix is **4 + 2 + 3 + 8 + 9 = 26**. So the score you will get for such output is **2 / 26 = 0.0769231**. Note that this is not the optimal solution for this matrix.
