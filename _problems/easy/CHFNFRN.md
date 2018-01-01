---
category_name: easy
problem_code: CHFNFRN
problem_name: 'Chef and Friends'
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
problem_author: antoniuk1
problem_tester: dpraveen
date_added: 23-03-2015
tags:
    - antoniuk1
    - bipartite
    - easy
    - sept16
time:
    view_start_date: 1473931800
    submit_start_date: 1473931800
    visible_start_date: 1473931800
    end_date: 1735669800
    current: 1493558127
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SEPT16/mandarin/CHFNFRN.pdf), [Russian](http://www.codechef.com/download/translated/SEPT16/russian/CHFNFRN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SEPT16/vietnamese/CHFNFRN.pdf) as well.

Chef invited **N** of his friends in his birthday party. All the friends are numbered from **1** to **N**. Some of the friends might know each other. You are given this information by **M** pairs each of form (**ai**, **bi**), denoting that the persons **ai** and **bi** know each other.

Chef wants all of his guests to seat at the two tables set up for dinner. He wants that all the people sitting at a table must know each other, otherwise they will feel awkward with mutual eating habits. Chef is okay if a table is not occupied by any person. Chef is worried whether all the guests can seat at the dinner tables in the desired way.

Please help Chef fast to identify whether his worry is real or not!! The delicacies at the table are getting cold.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains two space-separated integers **N** and **M**, denoting the number of Chef's friends and the number of pairs representing information whether two person know each other or not.

The next **M** lines contain two space-separated integers **ai** and **bi**, denoting that persons **ai** and **bi** know each other.

### Output

For each test case, output a single line containing word "YES" (without quotes) if Chef can divide all of his friends into two groups that in each group all the people know each other and "NO" (without quotes) otherwise.

### Constraints

- **1** ≤ **T** ≤ **103**
- **1** ≤ **N** ≤ **103**
- ≤ **M** ≤ **106**
- **1** ≤ **ai, bi** ≤ **N**
- The sum of **N** over all test cases in a single test file does not exceed **104**
- The sum of **M** over all test cases in a single test file does not exceed **106**

### Subtasks

**Subtask #1 (30 pts)**- **1** ≤ **N** ≤ **10**

 **Subtask #2 (70 pts)**- Original constraints

### Example

<pre><b>Input:</b><tt>
3
3 2
1 2
2 3
4 3
1 2
2 3
2 4
6 7
1 2
1 3
2 3
2 4
4 5
4 6
5 6
</tt>
<b>Output:</b><tt>
YES
NO
YES
</tt>
</pre>### Explanation
**Example case 1.**

Table 1: Person 1. Table 2: Persons 2 and 3.

![explanation](https://www.codechef.com/download/upload/SEPT16/1.jpg)**Example case 2.**

All guests can't have a seat according to the rule.

![explanation](https://www.codechef.com/download/upload/SEPT16/2.jpg)**Example case 3.**

Table 1: Persons 1, 2, 3. Table 2: Persons 4, 5, 6.

![explanation](https://www.codechef.com/download/upload/SEPT16/3.jpg)
