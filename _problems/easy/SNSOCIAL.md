---
category_name: easy
problem_code: SNSOCIAL
problem_name: 'Snakes and transition from Capitalism to Socialism'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: admin2
problem_tester: kingofnumbers
date_added: 31-05-2017
tags:
    - admin2
    - bfs
    - easy
    - graph
    - snckpb17
editorial_url: 'https://discuss.codechef.com/problems/SNSOCIAL'
time:
    view_start_date: 1496331000
    submit_start_date: 1496331000
    visible_start_date: 1496331000
    end_date: 1735669800
    current: 1497284414
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNSOCIAL.pdf), [Russian](http://www.codechef.com/download/translated/SNCKPB17/russian/SNSOCIAL.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNSOCIAL.pdf) as well.

After a long duration of the painful, torturous and tumultuous periods of capitalism in Snakeland, now the snakes have decided to adopt socialism. The houses in Snakeland are arranged in a rectangular fashion of dimension **n \* m**. The wealth of the snake in the house at cell (i, j) is given by **a**\[i\]\[j\] rupees.

A bill has been passed for making a smooth transition from capitalism to socialism. At the end of each hour, the wealth of a snake will grow and will become equal to the highest wealth that its neighbor had (at the start of the hour). That is, consider the maximum wealth among its neighbors at the start of the hour, and this snake's wealth will become equal to that at the end of the hour. Note that this increase in wealth will happen simultaneously for each snake. Two houses are said to be neighbors of each other if they share a side or corner with each other. Find out the minimum number of hours required for this transition.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space separated integers: **n, m**.

Each of the next **n** lines contains **m** space separated integers. The j-th integer in the i-th row denotes **a**\[i\]\[j\].

### Output

For each test case output a single integer corresponding to the minimum number of hours required for the transition.

### Constraints

- 1 ≤ **T** ≤ 4
- 1 ≤ **n, m** ≤ 500
- 1 ≤ **a**\[i\]\[j\] ≤ 106

### Example

<pre>
<b>Input</b>
3
2 2
1 1
1 1
2 2
1 1
1 2
3 4
1 2 1 2
1 1 1 2
1 1 2 2

<b>Output</b>
0
1
2

</pre>### Explanation
**Example 1**. The wealth of all the snakes is already equal. So, no time is required for the transition.

**Example 2**. At the end of the first hour, the wealth of snakes at cells (1, 1), (2,1) and (1, 2) will change from 1 to 2. Then, the wealth of all the snakes becomes equal, and hence it required a total of 1 hour.

**Example 3**. At the end of the first hour, the distribution of wealth of Snakeland will be as given below:

<pre>
2 2 2 2
2 2 2 2
1 2 2 2

</pre>After the end of the second hour, the wealth of all the snakes will be equal. So, the answer is 2.