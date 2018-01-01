---
category_name: medium
problem_code: SUBSEG2
problem_name: 'Chef and his study plans'
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
max_timelimit: '0.75'
source_sizelimit: '50000'
problem_author: xcwgf666
problem_tester: 'kevinsogo,antoniuk1'
date_added: 3-06-2016
tags:
    - activity
    - binary
    - greedy
    - jump
    - medium
    - snckpa16
    - xcwgf666
editorial_url: 'http://discuss.codechef.com/problems/SUBSEG2'
time:
    view_start_date: 1465140600
    submit_start_date: 1465140600
    visible_start_date: 1465140600
    end_date: 1735669800
    current: 1493557936
layout: problem
---
All submissions for this problem are available.### Read problems statements in [Mandarin Chinese](/download/translated/SNCKPA16/mandarin/SUBSEG2.pdf), [Russian](/download/translated/SNCKPA16/russian/SUBSEG2.pdf) and [Vietnamese](/download/translated/SNCKPA16/vietnamese/SUBSEG2.pdf) as well.

Chefland has a very famous university. The university offers **N** courses. Each course runs for some consecutive range of days. You are given starting and ending days of the **i**th course by **starti** and **endi**, respectively.

Our Chef wanted to enroll himself in the university. But he is not sure about the exact time period for which he wants to study. Though he has **Q** such tentative plans in his mind. Each plan consists of a start date **plan\_startj** and an end date **plan\_endj**.

Chef wants your help in finding out the maximum number of courses he can complete during each of his plans. Note that at a time, Chef can not handle multiple courses, i.e. he can attend at most one course during a day. Also, a course will be considered completed only if Chef attends all the classes of the course.

### Input

There is a single test case.

The first line of the input contains two space separated integers **N** and **Q** denoting the number of courses university offers and the number of plans Chef has in mind, respectively.

The **i**th of the next **N** lines contains two space separated integers **starti** and **endi** denoting the starting and the ending day of the **i**th course.

The **j**th of the next **Q** lines contains two space separated integers **plan\_startj** and **plan\_endj**, denoting the start and the end day of Chef's plan.

### Output

Output **Q** lines - each containing an integer corresponding to the maximum number of the courses Chef can complete in the corresponding planned visit.

### Constraints

- **1** ≤ **N, Q** ≤ **105**
- **1** ≤ **starti** ≤ **endi** ≤ **106**
- **1** ≤ **plan\_startj** ≤ **plan\_endj** ≤ **106**
 
### Example

 ```
<b>Input:</b>
<tt>3 3
1 3
5 6
2 4
1 6
1 3
2 3
</tt>
<b>Output:</b>
<tt>2
1
0
</tt>
<pre>### Explanation
**Plan #1.** Chef stays on the campus from the first day till the sixth day. During this time, he can complete maximum two courses. He can complete either the **1**st and the **2**nd or the **2**nd and the **3**rd courses..

**Plan #2.** Chef can complete no more than one course and this course can be only the first one.

**Plan #3.** Chef stays for quite a small duration in this plan. He can't complete any course during this visit.
