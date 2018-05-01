---
category_name: easy
problem_code: CHEFBM
problem_name: 'Chef and Strange Matrix'
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
max_timelimit: '1 - 2'
source_sizelimit: '50000'
problem_author: berezin
problem_tester: xcwgf666
date_added: 18-03-2014
tags:
    - berezin
    - easy
    - implementation
    - may14
editorial_url: 'http://discuss.codechef.com/problems/CHEFBM'
time:
    view_start_date: 1399887000
    submit_start_date: 1399887000
    visible_start_date: 1399887000
    end_date: 1735669800
    current: 1493558116
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/MAY14/mandarin/CHEFBM.pdf) and [Russian](http://www.codechef.com/download/translated/MAY14/russian/CHEFBM.pdf).

Spring is interesting season of year. Chef is thinking about different things, but last time he thinks about interesting game - "Strange Matrix".

Chef has a matrix that consists of **n** rows, each contains **m** elements. Initially, the element **aij** of matrix equals **j**. **(1 ≤ i ≤ n, 1 ≤ j ≤ m)**.

Then **p** times some element **aij** is increased by **1**.

Then Chef needs to calculate the following:

- For each row he tries to move from the last element (with number **m**) to the first one (with the number **1**).
- While staying in **aij** Chef can only move to **aij - 1** only if **aij - 1 ≤ **aij****.
- The cost of such a movement is **aij** - **aij - 1**.
- Otherwise Chef can't move and lose (in this row).
- If Chef can move from the last element of the row to the first one, then the answer is the total cost of all the movements.
- If Chef can't move from the last element of the row to the first one, then the answer is **-1**.

 Help Chef to find answers for all the rows after **P** commands of increasing.

### Input

- The first line contains three integers **n**, **m** and **p** denoting the number of rows, the number of elements a single row and the number of increasing commands.
- Each of next **p** lines contains two integers **i** and **j** denoting that the element **aij**  is increased by one.

### Output

- For each row in a single line print the answer after the **P** increasing commands.

### Constraints

- **1** ≤ **n, m, p** ≤ **10 ^ 5**
- **1** ≤ **i** ≤ **n**
- **1** ≤ **j** ≤ **m**

### Example

<pre><b>Input:</b>
4 4 6
2 2
3 2 
3 2 
4 3
4 4
4 3

<b>Output:</b>
3
3
-1
4

</pre>### Explanation

<pre>
<p>Here is the whole matrix after <b>P</b> commands:</p>
1 2 3 4
1 3 3 4
1 4 3 4
1 2 5 5
<p> Explanations to the answer: </p>
</pre>- The first line is without changes: 4-3=1, 3-2=1, 2-1=1. answer = 3.
- The second line: 4-3=1, 3-3=0, 3-1=2. The answer is 3.
- The third line: 4-3=1, 3-4=-1, Chef can't move to the first number here. Therefore, the answer is -1.
- The fourth line: 5-5=0, 5-2=3, 2-1=1. The answer is 4.
