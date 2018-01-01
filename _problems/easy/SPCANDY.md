---
category_name: easy
problem_code: SPCANDY
problem_name: 'Splitting Candies'
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
problem_author: kuruma
problem_tester: white_king
date_added: 3-07-2013
tags:
    - aug13
    - cakewalk
    - kuruma
    - simple
editorial_url: 'http://discuss.codechef.com/problems/SPCANDY'
time:
    view_start_date: 1376299800
    submit_start_date: 1376299800
    visible_start_date: 1376299800
    end_date: 1735669800
    current: 1493558188
layout: problem
---
All submissions for this problem are available.Cyael is a teacher at a very famous school in Byteland and she is known by her students for being very polite to them and also to encourage them to get good marks on their tests.

Then, if they get good marks she will reward them with candies :) However, she knows they are all very good at Mathematics, so she decided to split the candies evenly to all the students she considers worth of receiving them, so they don't fight with each other.

She has a bag which initially contains **N** candies and she intends to split the candies evenly to **K** students. To do this she will proceed as follows: while she has more than **K** candies she will give exactly 1 candy to each student until she has less than **K** candies. On this situation, as she can't split candies equally among all students she will keep the remaining candies to herself.

Your job is to tell how many candies will each student and the teacher
receive after the splitting is performed.

### Input

The first line of the input contains an integer **T** denoting the number of test cases. The description of **T** test cases follows.

Each test case will consist of 2 space separated integers, **N** and **K** denoting the number of candies and the number of students as described above.

### Output

For each test case, output a single line containing two space separated integers, the first one being the number of candies each student will get, followed by the number of candies the teacher will get.

### Constraints

- **T<=100 in each test file**
- **0 <= N,K <= 233 - 1**

### Example

**Input:**

<pre>
2
10 2
100 3

</pre>**Output:**
<pre>
5 0
33 1

</pre>### Explanation
For the first test case, all students can get an equal number of candies and teacher receives no candies at all

For the second test case, teacher can give 33 candies to each student and keep 1 candy to herself

**Update:**

 There may be multiple whitespaces before, after or between the numbers in input.
