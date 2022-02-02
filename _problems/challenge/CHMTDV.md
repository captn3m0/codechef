---
category_name: challenge
problem_code: CHMTDV
problem_name: 'Chef and Matrix Division'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
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
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: antoniuk1
problem_tester: dpraveen
date_added: 29-07-2015
tags:
    - antoniuk1
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1525199507
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/CHMTDV.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/CHMTDV.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/CHMTDV.pdf) as well.

Chef has **n** × **n** array **A** of non-negative integers. He wants to divide this array by **p**-1 horizontal dividers and **p**-1 vertical dividers into **p2** blocks such that maximum sum of elements of each block will be the smallest.

More formally, Chef want to choose **p**-1 horizontal dividers 0 = **h0** &lt; **h1** &lt; ... &lt; **hp** = **n** and **p**-1 vertical dividers 0 = **v0** &lt; **v1** &lt; ... &lt; **vp** = **n** to minimize the next value:

![formula](https://www.codechef.com/download/upload/SEPT16/4.jpg)### Input

- The first line of each test file contains two space-separated integers **n** and **p** denoting the size of array **A** and the number of horizontal and vertical dividers.
- Each of next **n** lines contains **n** space-separated integers **Ai, 1**, **Ai, 2**, ..., **Ai, n** denoting the **ith** row of the array **A**.

### Output

9. The first line of output should contain **p**-1 space-separated integers **h1**, **h2**, ... **hp-1** denoting the horizontal dividers.
10. The second line of output should contain **p**-1 space-separated integers **v1**, **v2**, ... **vp-1** denoting the vertical dividers.
### Scoring

Your score for each test case will be calculated by formula described above. Your goal is to minimize this score.

Your total score for the problem will be the sum of scores on all the test cases.

Your solution will be tested only on **20**% of the test files during the contest and will be rejudged against **100**% after the end of competition.

### Constraints

- **2** ≤ **p** ≤ **n** ≤ **500**
- **1** ≤ **Ai, j** ≤ **109**

### Example

<pre><b>Input:</b>
4 3
1 1 2 2
2 1 2 2
3 1 4 2
4 4 2 2

<b>Output:</b>
2 3
1 3
</pre>
### Explanation

As you can see at the picture below, this array is divided into **p2** = 9 blocks by **p**-1 horizontal(red lines) and **p**-1 vertical(green lines) dividers. Also there are two vertical (**v0** = 0 and **v3** = 4) dividers and two horizontal (**h0** = 0 and **h3** = 4) for better understanding of this division.

![example](https://www.codechef.com/download/upload/SEPT16/5.jpg)Your score for this test case will be 6 / (4 / 3)2 (there are two blocks with sum of elements 6).

This test case won't be in the test data because **n** ∉ \[450..500\]. It just for let you understand how scoring works. Also there are another ways to divide this array into 9 parts. All of them will be accepted, but with different scores.

### Test data generation

There will be 20 test files.

For each test file the number **n** is chosen from the range \[450..500\] with equal probability. All elements of **A** are also chosen randomly. For each test case **p** will be manually selected.
