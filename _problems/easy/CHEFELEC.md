---
category_name: easy
problem_code: CHEFELEC
problem_name: 'Chefland and Electricity'
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
problem_author: admin2
problem_tester: mugurelionut
date_added: 5-06-2016
tags:
    - admin2
    - greedy
    - july16
    - simple
editorial_url: 'http://discuss.codechef.com/problems/CHEFELEC'
time:
    view_start_date: 1468402200
    submit_start_date: 1468402200
    visible_start_date: 1468402200
    end_date: 1735669800
    current: 1493558118
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JULY16/mandarin/CHEFELEC.pdf), [Russian](http://www.codechef.com/download/translated/JULY16/russian/CHEFELEC.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFELEC.pdf) as well.

There are **n** villages in a Chefland. Some of the villages have electricity facilities, other doesn't. You can consider the villages arranged in line in the order **1** to **n** from left to right. i-th of village can be considered at **xi** coordinates.

Chef decided that electricity should be provided to all the villages. So, he decides to buy some amount of electric wires to connect the villeges without electricity to some villages with electricity. As Chef does not want to spend too much amount of money on wires, can you find out minimum amount of length of wire Chef should buy.

### Input

First line of the input contains an integer **T** denoting the number of test cases. **T** test cases follow.

First line of each test case contains an integer **n** denoting number of villages in Chefland.

Second line will contain a string of length **n** containing '0' or '1's only. If i-th character of the string is '1', then it denotes that i-th village has electricity.

Next line contains **n** space separated integers denoting the **x** coordinates of the villages in the order from village **1** to n

### Output

For each test case, output a single line containing a integer corresponding to the minimum length of wire Chef needs to buy.

### Constraints

- **1 ≤ T ≤ 10**
- It is guaranteed that there will be at least one village which will have electricity.
- **1 ≤ x1 < x2 < ... < xn ≤ 109**

### Subtasks

**Subtask #1 : 30 points**

- **1 ≤ N ≤ 1000**

**Subtask #2 : 70 points**

- **1 ≤ N ≤ 105**

### Example

<pre><b>Input</b>
2
2
01
1 2
3
100
1 5 6
<b>Output:</b>
1
5

</pre>### Explanation
**In the first example**, first village does not have electricity. If we put a wire between village 1 and 2 of length 1, then both the villages will have electricity.

**In the second example**,
We can a draw a wire from first village to third village, passing through second village. Its total length will be 5. Now all the villages will have electricity. This is the minimum length of wire you will require.
