---
category_name: medium
problem_code: DIVIDE
problem_name: 'Dividing the Students'
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
max_timelimit: '1 - 5'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: white_king
date_added: 11-11-2014
tags:
    - binary
    - bipartite
    - easy
    - graph
    - ltime18
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/DIVIDE'
time:
    view_start_date: 1417336200
    submit_start_date: 1417336200
    visible_start_date: 1417336200
    end_date: 1735669800
    current: 1493557918
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese ](http://www.codechef.com/download/translated/LTIME18/mandarin/DIVIDE.pdf) and [Russian](http://www.codechef.com/download/translated/LTIME18/russian/DIVIDE.pdf).

In the city of "M", there are N girls who attend a certain high school. Historically, all of the students of this school are divided into two groups, not necessarily equal in size, right before they start to study.

Each girl in the city of "M" has an integer ID number **Ai**, that somehow corresponds to her interests, ideology and beliefs. Each girl is unique, so each ID is unique as well.

Some of the girls have similar interests. For any pair of girls, say the **i**-th and the **j**-th one, we call the value of similarity the number **min(AiAj mod (109+7), AjAi mod (109+7))**.

The teachers have decided that they want the students in each group to be as diverse as possible. This way they will be encouraged to become acquainted and make friends faster. For this reason they want to divide the students in such a way that the maximal similarity value of any two girls' IDs in the same group is as small as possible.

Please help them and find the minimal possible maximal similarity value of two girls' IDs within a single group after the optimal division.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case starts with a single integer **N** - the number of students.

Then, there is a line containing **N** space-separated integers **A1, A2, ..., AN** - the IDs of the girls.

### Output

For each test case output a single line with a single integer - the answer to the problem.

### Constraints

- **1** ≤ **T** ≤ **1000**
- **1** ≤ **Ai** ≤ **109**

### Subtasks

17. Subtask 1: **3** ≤ **N** ≤ **10**. The time limit is 1 second - 14 points.
18. Subtask 2: **3** ≤ **N** ≤ **50**. The time limit is 1 second - 23 points.
19. Subtask 3: **T = 2**, **3** ≤ **N** ≤ **1000**. The time limit is 5 seconds - 63 points.
### Example

<pre><b>Input:</b>
1
4
1 2 1024 1025

<b>Output:</b>
1048576
</pre>
### Explanation

The first and the fourth girl will form the first group; the second and the third will form the second group.
