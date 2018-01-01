---
category_name: medium
problem_code: FRMQ
problem_name: 'Chef and Array'
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
problem_author: antoniuk1
problem_tester: xcwgf666
date_added: 17-07-2014
tags:
    - antoniuk1
    - april15
    - easy
    - rmq
    - sparse
editorial_url: 'http://discuss.codechef.com/problems/FRMQ'
time:
    view_start_date: 1428917400
    submit_start_date: 1428917400
    visible_start_date: 1428917400
    end_date: 1735669800
    current: 1493557664
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL15/mandarin/FRMQ.pdf) and [Russian](http://www.codechef.com/download/translated/APRIL15/russian/FRMQ.pdf).

Chef has an array **A\[\]** of **N** elements denoted by **A0, A1, ..., AN-1**.

He thinks about **M** questions of following kind: "What is the maximum element among **Ai** where **i** lies between **min{x, y}** and **max{x, y}** both inclusive?"

You have to help Chef to find out sum of answers of all the **M** questions.

_**Method of generation of values **x** and **y** for all **M** questions:**_

You are given two integers **x1** and **y1** denoting values of **x** and **y** for the first question.

For the next questions, values of **xi** and **yi** are generated in the following way:

<pre>
for <b>i = 2</b> to <b>M</b>:
	<b>x<sub>i</sub></b> = <b>(x<sub>i-1</sub> + 7) mod (N - 1)</b>
	<b>y<sub>i</sub></b> = <b>(y<sub>i-1</sub> + 11) mod N</b>

</pre>Here **a mod b** denotes the remainder of division of **a** by **b**.
### Input

The first line contains a single integer **N**, denoting the number of elements in the array.

The second line contains **N** space-separated integers, denoting **A0**, **A1**, ..., **AN-1**.

The third line contains three space-separated integers **M**, **x1** and **y1**.

### Output

Output a single integer denoting the **sum** of the answers to the questions.

### Constraints and Subtasks

- **2** ≤ **N** ≤ **105**
- **1** ≤ **M** ≤ **108**
- **1** ≤ **Ai** ≤ **109**
- ≤ **x1, y1** ≤ **N-1**

**Subtask 1: (20 points)**

- **N, M ≤ 103**; **1** ≤ **Ai** ≤ **105**

**Subtask 2: (50 points)**

- **N, M ≤ 105**

**Subtask 3: (30 points)**

- Original constraints

### Example

<pre><b>Input:</b>
3
1 2 3
3 0 1

<b>Output:</b>
7

</pre>### Explanation
28. The first question: **x1** = 0, **y1** = 1 => **ans1** = 2
29. The second question: **x2** = (0 + 7) mod 2 = 1, **y2** = (1 + 11) mod 3 = 0 => **ans2** = 2
30. The third question: **x3** = (1 + 7) mod 2 = 0, **y3** = (0 + 11) mod 3 = 2 => **ans3** = 3
As **ans1** + **ans2** + **ans3** = 2 + 2 + 3 = 7. So you have to print **7**.
