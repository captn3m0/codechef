---
category_name: easy
problem_code: CROWD
problem_name: 'Three is Crowd'
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
max_timelimit: '5'
source_sizelimit: '50000'
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 5-08-2012
tags:
    - maths
    - matrix
    - sep12
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/CROWD'
time:
    view_start_date: 1347346623
    submit_start_date: 1347346623
    visible_start_date: 1347355800
    end_date: 1735669800
    current: 1493558134
layout: problem
---
All submissions for this problem are available._Two's company, three's a crowd!_

It's been one year since Chef met his brother. Last year, his younger brother came to visit him during this time of the year. This year, the Chef is planning to go visit his brother. Chef's brother has planned to throw a "Welcome Party" for him. He wants to invite people from his neighbourhood (i.e. from the street where he lives). There are **N** houses on the street in a single line (not considering the brother's house). He wants the party to be fun and he will not like to invite people who might spoil the mood of the party. If people are invited from three consecutive houses on the street, they might create trouble. As they say, three's a crowd! He doesn't want to ruin the Chef's _Welcome Party_ and so he will not want to send invites to _any_ three consecutive houses. He wants you to tell him how many ways are there for him to go wrong. Note that he can play safe by not inviting anyone to avoid a _crowd_.

### Input:

First line of the input contains a single integer **T**, the number of test cases.
Each test case contains a line containing a single integer **N** described above.

### Output:

For each test case output a single integer denoting the number of ways the brother can go wrong with planning the party.
The answer can get quite large. So output the total number of ways modulo 109+7.

### Constraints:

<pre>
1TN15


</pre>### Example:
**Input:**```

2
3
4


<pre>**Output:**<pre>
1
3


</pre>**Explanation:**_Case 1:_ The only way he can go wrong is by inviting all the houses._Case 2:_ First way of getting wrong is by inviting houses (1,2,3). Second way to get wrong is by inviting houses (2,3,4). Third way of going wrong is by inviting all 4 houses i.e. (1,2,3,4).
