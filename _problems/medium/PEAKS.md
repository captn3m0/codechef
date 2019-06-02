---
category_name: medium
problem_code: PEAKS
problem_name: Peaks
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
max_timelimit: '2 - 12'
source_sizelimit: '50000'
problem_author: kostya_by
problem_tester: pavel1996
date_added: 11-12-2015
tags:
    - dynamic
    - fenwick
    - kostya_by
    - ltime32
    - segment
editorial_url: 'http://discuss.codechef.com/problems/PEAKS'
time:
    view_start_date: 1454229000
    submit_start_date: 1454229000
    visible_start_date: 1454229000
    end_date: 1735669800
    current: 1493557845
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME32/mandarin/PEAKS.pdf), [Russian](http://www.codechef.com/download/translated/LTIME32/russian/PEAKS.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME32/vietnamese/PEAKS.pdf) as well.

As you already know, Chef has many friends. Out of all his friends, Akshit and Aditi are the two biggest foodies. Chef knows that their weakness is food. He wants them to strengthen their programming skills. But they are too lazy to do stuff without motivation. So chef promises that he would get them special european chocolates if they solved the problem that he gives them. Chef also knows that his friends are fiercely competitive. So to make sure they like the problem, this is what he gives them:

They are given a sequence **S** of **N** **distinct** integers (sequence is 1-indexed). These aren't random integers. These integers are the marks that their friend Aayan has received in the N tests that he has taken in college this term. So **S\[i\]** denotes the marks in **i**'th test. Furthermore, chef gives them two more non-negative integers, **A** and **B**, and asks them to perform an interesting analysis of Aayan's performance in order to determine whether Aayan is underperforming or not.

Their task is to count the number of subsequences in **S** that have exactly **A** local minima and **B** local maxima. The answer could be extremely huge; therefore it should be calculated modulo **109 + 9**.

Now, we define what local minimum and local maximum mean.

Let's consider some subsequence of **S** formed by indices **i1**, **i2**, ..., **iK**(1 ≤ **K**; 1 ≤ **i1** < **i2** < ... < **iK** ≤ **N**).

Index **ij**(1 < ij < **K**) is said to be a *local minimum* if the **S\[ij - 1\] > S\[ij\] < S\[ij + 1\]** condition holds.

In a similar way, index **ij**(1 < ij < **K**) is said to be a *local maximum* if the **S\[ij - 1\] < S\[ij\] > S\[ij + 1\]** condition holds.

### Input

The first line of the input contains an integer **T** denoting the number of test cases (they want to analyse Aayan's performance over several months). The description of **T** test cases follows.

The first line of each test case contains three integers **N**, **A** and **B**. The next line contains **N** integers denoting the given sequence **S**.

It's guaranteed that all the integers in the sequence are distinct.

### Output

For each test case, output a single line containing the number of described subsequences modulo **109 + 9**.

### Constraints

- 1 ≤ **T** ≤ 10
- **|S\[i\]|** ≤ 109
- Subtask 1(20 points): 1 ≤ **N** ≤ 20, 0 ≤ **A**, **B** ≤ 10
- Subtask 2(20 points): 1 ≤ **N** ≤ 200, 0 ≤ **A**, **B** ≤ 10
- Subtask 3(30 points): 1 ≤ **N** ≤ 5000, 0 ≤ **A**, **B** ≤ 10
- Subtask 4(30 points): 1 ≤ **N** ≤ 5000, 0 ≤ **A**, **B** ≤ 200

### Note

The first test of the first subtask is the example test. It's made for you to make sure, that your solution produces the same verdict both on your machine and our server.

### Time Limits

Time limit for the first and the second subtasks is 2 s. Time limit for the third subtask is 3 s. Time limit for the fourth subtask is 12 s.

### Example

<pre>
<b>Input:</b>
3
5 2 1
2 1 4 3 5
10 0 0
1 2 3 4 5 6 7 8 9 10
6 0 1
-1 -11 9 10 -10 -2


<b>Output:</b>
1
1023
14

</pre>
### Explanation of the first two cases in the example test

In the first case, there is only one valid subsequence - the whole sequence **S**.

In the second case, any non-empty sequence is valid, so the answer is **2N - 1**.
