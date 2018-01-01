---
category_name: easy
problem_code: SEACO
problem_name: 'Sereja and Commands'
languages_supported:
    - ADA
    - ASM
    - BASH
    - BF
    - C
    - CAML
    - CLOJ
    - CLPS
    - 'CPP 4.3.2'
    - 'CPP 6.3'
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
    - 'PYTH 3.5'
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
problem_author: sereja
problem_tester: null
date_added: 28-05-2013
tags:
    - easy
    - fenwick
    - sept17
    - sereja
editorial_url: 'https://discuss.codechef.com/problems/SEACO'
time:
    view_start_date: 1505122200
    submit_start_date: 1505122200
    visible_start_date: 1505122200
    end_date: 1735669800
    current: 1514816316
layout: problem
---
All submissions for this problem are available.### Read problems statements in [mandarin chinese](http://www.codechef.com/download/translated/SEPT17/mandarin/SEACO.pdf), [russian](http://www.codechef.com/download/translated/SEPT17/russian/SEACO.pdf) and [vietnamese](http://www.codechef.com/download/translated/SEPT17/vietnamese/SEACO.pdf) as well.

Sereja has an array **A** consisting of **n** integers. Initially, all the elements of array are zero.

Sereja writes down **m** commands on a piece of a paper. The commands are enumerated from **1** to **m**. These commands can be of the following two types of commands:

- **l r (1 ≤ l ≤ r ≤ n)** — Increase all elements of the array by one, whose indices belongs to the range **\[l, r\]**
- **l r (1 ≤ l ≤ r ≤ m)** — Execute all the commands whose indices are in the range **\[l, r\]**. It's guaranteed that **r** is strictly less than the enumeration/number of the current command.
 
Can you please help Sereja in executing all the commands written on this piece of paper.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line contains integers **n** and **m**. Next **m** lines contain Sereja's commands in the format, described in statement: **t**, **l**, **r**, where **t** - number of type (1 or 2).

### Output

For each test case on different lines print an array **a**, after executing all the commands. The numbers have to be separated by spaces. As the numbers can be quite large, print them modulo **109 + 7**.

### Constraints

- **1** ≤ **T** ≤ **3**
- **1** ≤ **n, m** ≤ **105**

### Subtasks

- Subtask #**1** (20 points): 1 ≤ **n, m** ≤ 10
- Subtask #**2** (30 points): 1 ≤ **n, m** ≤ 1000
- Subtask #**3** (50 points): original constraints

### Example

<pre><b>Input:</b>
3
5 5
1 1 2
1 4 5
2 1 2
2 1 3
2 3 4
1 2
1 1 1
1 1 1
10 10
1 1 10
2 1 1
2 1 2
2 1 3
2 1 4
2 1 5
2 1 6
2 1 7
2 1 8
2 1 9

<b>Output:</b>
7 7 0 7 7
2
512 512 512 512 512 512 512 512 512 512

</pre>### Explanation:
**Example case 1.**.

After the first command, the resulting array is \[1 1 0 0 0\], after second \[1 1 0 1 1\].

On third command, we repeat the 1'st and the 2'nd command, so that resulting array is \[2 2 0 2 2\].

After fourth command, the array will looks like \[4 4 0 4 4\].

Last command will apply 3'rd and 4'th commands, which by themselves will apply 1'st, 2'nd, 1'st, 2'nd, 3'rd(1'st, 2'nd), so resulting arrays is \[7 7 0 7 7\].
