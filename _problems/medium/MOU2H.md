---
category_name: medium
problem_code: MOU2H
problem_name: 'Mountain Holidays 2'
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
max_timelimit: '0.5'
source_sizelimit: '50000'
problem_author: 'witalij_hq '
problem_tester: null
date_added: 30-03-2013
tags:
    - aug14
    - dynamic
    - medium
    - witalij_hq
editorial_url: 'http://discuss.codechef.com/problems/MOU2H'
time:
    view_start_date: 1407749400
    submit_start_date: 1407749400
    visible_start_date: 1407749400
    end_date: 1735669800
    current: 1493557807
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/AUG14/mandarin/MOU2H.pdf) and [Russian](http://www.codechef.com/download/translated/AUG14/russian/MOU2H.pdf).

Let’s remember the problem *Mountain holidays* ([MOU1H](http://www.codechef.com/JULY13/problems/MOU1H)). The story of *Mountain holidays* is the following. Some time ago, Chef discovered that more and more people have started climbing mountains every day. So he decided to build a restaurant in the Ukrainian resort Bukovel (Carpathian Mountains). But there are many places to choose, so he wants to choose the best one.

By your great helps, Chef could find to the best place to build a restaurant, now Chef becomes rich. Now he wants to build a restaurant in the next mountain. Similar to previous one, the next mountain is described by a sequence of **N** points. Here the points are numbered from **1** to **N**, and the height of point **k** is denoted by **Hk**. Every two adjacent points of the mountain are connected by a segment.

For example, the mountain described by **N = 9, H = \[0, 2, 1, 2, 1, 3, 0, 1, 0\]**  is like a following:

<pre>
       /\
  /\/\/  \
 /        \/\
</pre>
 In the mountain, all of the tourists will go from the point **1** to point **N**.

For comfort of the tourists, Chef has bought teleports too. Using a teleport, a tourist can be transferred from point **i** to point **j**, for all **i** &lt; **j**. Of course, tourists can also walk from point **i** to point **i+1** on foot.

Now Chef wants to calculate the attractiveness of the mountain, as the number of the different climbs.

A climb is defined by the *nonempty* sequence **(p1, p1+1), (p2, p2+1), ..., (ps, ps+1)** of the moves  **on foot** , where **pk+1 ≤ pk+1** for **k = 1, 2, ..., s − 1**.

Two climbs, say **(p1, p1+1), (p2, p2+1), ..., (ps, ps+1)** and **(q1, q1+1), (q2, q2+1), ..., (qt, qt+1)** are different if and only if

- **s ≠ t** or
- There exists at least one **k** such that **1 ≤ k &lt; min(s, t)** and **Hpk+1 – Hpk ≠ Hqk+1 – Hqk**.

You are given the array **H**, find the number of the different climbs that exist on the mountain. Since the answer can be very large, output it modulo **109+9 = 1000000009**.

### Input

The first line of input contains **T**, denoting the number of test cases. Then **T** test cases follow.

The first line of each test case contains an integer **N**, denoting the number of points on the mountain.
On second line of each test case, there are **N** space-separated integers **H1, H2, ..., HN**, denoting the height of each point.

### Output

For each test case, output an integer denoting the number of the different climbs modulo **109+9 = 1000000009**.

### Constraints

- **1 ≤ T ≤ 100000**, that is, **1 ≤ T ≤ 105**
- **2 ≤ N ≤ 1000000**, that is, **2 ≤ N ≤ 106**
- Sum of **N** over all test cases in one file will be at most **1000000 = 106**
- **-2000000 ≤ Hk ≤ 2000000**, that is, **−2 × 106 ≤ Hk ≤ 2 × 106**

### Sample

<pre>
<b>Input</b>
3
6
1 2 3 4 5 6
9
0 2 1 2 1 3 0 1 0
7
0 5 -5 5 -5 4 -4

<b>Output</b>
5
199
55
</pre>
### Explanation

In the first test case, since height increases by one for each move on foot, there will be one unique climb for each length. So there are **5** climbs with length **1, 2, ..., 5**. Here length means the number of moves by foot.

We can get the following **5** distinct climbs.

- **(1, 2)**
- **(1, 2), (2, 3)**
- **(1, 2), (2, 3), (3, 4)**
- **(1, 2), (2, 3), (3, 4), (4, 5)**
- **(1, 2), (2, 3), (3, 4), (4, 5), (5, 6)**

The second test case is taken from the problem statement.

*Warning*: The input and output can be large. Please don't use a slow input/output method.
