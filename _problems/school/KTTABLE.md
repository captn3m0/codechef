---
category_name: school
problem_code: KTTABLE
problem_name: 'Kitchen Timetable'
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
problem_author: xcwgf666
problem_tester: 'kevinsogo,xcwgf666,antoniuk1'
date_added: 24-05-2016
tags:
    - array
    - cakewalk
    - loop
    - snckql16
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/KTTABLE'
time:
    view_start_date: 1464708600
    submit_start_date: 1464708600
    visible_start_date: 1464708600
    end_date: 1735669800
    current: 1492507207
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKQL16/mandarin/KTTABLE.pdf), [Russian](http://www.codechef.com/download/translated/SNCKQL16/russian/KTTABLE.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKQL16/vietnamese/KTTABLE.pdf) as well.

There are **N** students living in the dormitory of Berland State University. Each of them sometimes wants to use the kitchen, so the head of the dormitory came up with a timetable for kitchen's usage in order to avoid the conflicts:

- The first student starts to use the kitchen at the time 0 and should finish the cooking not later than at the time **A1**.
- The second student starts to use the kitchen at the time **A1** and should finish the cooking not later than at the time **A2**.
- And so on.
- The **N**-th student starts to use the kitchen at the time **AN-1** and should finish the cooking not later than at the time **AN**

The holidays in Berland are approaching, so today each of these **N** students wants to cook some pancakes. The **i**-th student needs **Bi** units of time to cook.

The students have understood that probably not all of them will be able to cook everything they want. How many students will be able to cook without violating the schedule?

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

The first line of each test case contains a single integer **N** denoting the number of students.

The second line contains **N** space-separated integers **A1**, **A2**, ..., **AN** denoting the moments of time by when the corresponding student should finish cooking.

The third line contains **N** space-separated integers **B1**, **B2**, ..., **BN** denoting the time required for each of the students to cook.

### Output

For each test case, output a single line containing the number of students that will be able to finish the cooking.

### Constraints

Should contain all the constraints on the input data that you may have. Format it like:

- **1** ≤ **T** ≤ **10**
- **1** ≤ **N** ≤ **104**
- 0 < **A1** < **A2** < ... < **AN** < **109**
- **1** ≤ **Bi** ≤ **109**

### Example

<pre><b>Input:</b>
<tt>2
3
1 10 15
1 10 3
3
10 20 30
15 5 20</tt>

<b>Output:</b>
<tt>2
1</tt>
</pre>
### Explanation

**Example case 1.** The first student has **1** unit of time - the moment 0. It will be enough for her to cook. The second student has **9** units of time, but wants to cook for **10** units of time, and won't fit in time. The third student has **5** units of time and will fit in time, because needs to cook only for **3** units of time.

**Example case 2.** Each of students has **10** units of time, but only the second one will be able to fit in time.
