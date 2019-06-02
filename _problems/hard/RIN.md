---
contest_code: DEC14
contest_name: 'December Challenge 2014'
problem_code: RIN
problem_name: 'Course Selection'
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
problem_author: cgy4ever
problem_tester: xiaodao
date_added: 9-10-2014
tags:
    - cgy4ever
    - dec14
    - graph
    - hard
    - maxflow
editorial_url: 'http://discuss.codechef.com/problems/RIN'
time:
    view_start_date: 1417771800
    submit_start_date: 1417771800
    visible_start_date: 1418643000
    end_date: 1418635800
    current: 1493557251
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese ](/download/translated/DEC14/mandarin/RIN.pdf) and [Russian](/download/translated/DEC14/russian/RIN.pdf).

Rin is attending a university.

She has **M** semesters to finish her program, and that program has **N** required courses. Each course must be taken in exactly one of the semesters.

Some courses have prerequisites: for each **i** from 1 to **K**, she must take course **A\[i\]** before course **B\[i\]**.

The same course may be taught by different professors in different semesters, and how well she does will depend on which professor teaches her. Additionally, some courses may not be taught every semester.

We are given an array **X** representing this information. For each course **i** and each semester **j**, **X\[i\]\[j\]** = -1 if course **i** is not taught in semester **j**. Otherwise, **X\[i\]\[j\]** will be an integer between 0 and 100: the expected score Rin will get if she takes course **i** in semester **j**.

Rin may take any number of courses per semester, including none, as long as they are taught that semester and she has already taken any required prerequisite courses.

Help Rin to find the maximal average score she can get over her whole program.

### Input

The first line contain 3 integers: **N**, **M** and **K**.

This is followed by **N** lines, each containing **M** integers. The **j**th integer on the **i**th line represents the value of **X\[i\]\[j\]**.

This is followed by **K** lines, each containing two integers: **A\[i\]** and **B\[i\]**.

### Output

Output one real number: the maximal average score, rounded to 2 digits after the decimal point.

### Constraints

- 1 ≤ **M**, **N** ≤ 100
- 0 ≤ **K** ≤ 100
- -1 ≤ **X\[i\]\[j\]** ≤ 100
- 1 ≤ **A\[i\]**, **B\[i\]** ≤ **N**
- For each **i**, **A\[i\]** ≠ **B\[i\]**.
- For different **i** and **j**, (**A\[i\]**, **B\[i\]**) ≠ (**A\[j\]**, **B\[j\]**).
- We guarantee there exists a way to take these **N** courses in **M** semesters.
 
### Subtasks

**Subtask 1**: (20 Points) A course can have at most 1 pre request course.

**Subtask 2**: (80 Points) Refer to constraints above

### Example

 ```
<b>Input 1:</b>
3 2 2
70 100
100 80
100 90
1 2
1 3

<b>Output 1:</b>
80.00

<b>Input 2:</b>
4 5 4
20 -1 100 -1 -1
100 30 -1 -1 -1
100 -1 30 20 40
100 30 40 50 20
1 2
1 3
2 4
3 4

<b>Output 2:</b>
32.50
<pre>
### Explanation

**Example case 1**

The only way she can finish these 3 courses is: take course 1 in the first semester, then take courses 2 and 3 in the second semester. The average score is (70 + 80 + 90) / 3 = 80.00.

**Example case 2**

The optimal solution is: take course 1 in semester 1, course 2 in semester 2, course 3 in semester 3 and course 4 in semester 4.
