---
category_name: challenge
problem_code: SEACIR
problem_name: 'Sereja and Circles'
languages_supported:
    - C
    - CPP14
    - JAVA
    - PYTH
    - 'PYTH 3.5'
    - PYPY
    - CS2
    - 'PAS fpc'
    - 'PAS gpc'
    - RUBY
    - PHP
    - GO
    - NODEJS
    - HASK
    - SCALA
    - D
    - PERL
    - FORT
    - WSPC
    - ADA
    - CAML
    - ICK
    - BF
    - ASM
    - CLPS
    - PRLG
    - ICON
    - 'SCM qobi'
    - PIKE
    - ST
    - NICE
    - LUA
    - BASH
    - NEM
    - 'LISP sbcl'
    - 'LISP clisp'
    - 'SCM guile'
    - JS
    - ERL
    - TCL
    - PERL6
    - TEXT
    - 'SCM chicken'
    - CLOJ
    - FS
max_timelimit: '1'
source_sizelimit: '50000'
problem_author: sereja
problem_tester: null
date_added: 7-10-2016
tags:
    - sereja
time:
    view_start_date: 1484731800
    submit_start_date: 1484731800
    visible_start_date: 1484731800
    end_date: 1735669800
    current: 1525454455
is_direct_submittable: false
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/JAN17/mandarin/SEACIR.pdf), [Russian](http://www.codechef.com/download/translated/JAN17/russian/SEACIR.pdf) and [Vietnamese](http://www.codechef.com/download/translated/JAN17/vietnamese/SEACIR.pdf) as well.

Sereja has a set of **N** circles. Dima also has a set of **N** circles. Sereja can easily recognise his set of circles because he has built the circles himself using strong steel wire. One day, Dima put his **N** circles into Sereja's circles and shuffled all the circles here and there. You are given this information about the circles by **2 \* N** integers corresponding to the radiuses of the circles.

Now, Sereja wants to provide you details about his circles in the form of interactive queries, **i**-th of which will denote the radius of **i**-th of his circles. For each query, you have to position a circle of this radius in 2-D plane by providing the coordinates of its center **(x, y)**, such that **(r ≤ X, Y ≤ S - r)**.

Your aim is to position the Sereja's circles in the way so as to minimum distance between each pair of circles is as large as possible.

Sereja is a generous person, so he will allow you to skip placing circles at most **skip** times of his queries.

### Input + Output

First line will contain three space separated integers **N, S, skip**. Next line contains **2\*N** numbers written on the sheet of paper.

After this you will be given **N** queries. The **i**-th of the query will contain an integer **r** denoting the radius of Sereja's **i**-th circle. After each query you should output two integers: **x** and **y** - position of the center of the circle, if you don't want to place current circle you can output **-1 -1**, you are allowed to skip circle in this way at most **skip** times.

### Example

<pre><b>Input + Output:</b>
5 10 2
1 1 1 1 1 2 2 2 2 2
>1
1
2
2
2


<h3>Test generation</h3>
<p>
</p><h3>Test Plan #1</h3>
</pre>
- **N = 200, S = 5000, skip = 50**
- 1 ≤ **R\[i\] ≤ 100**
- **R\[i\]** are generated uniformly randomly

### Test Plan #2

- **N = 200, S = 10000, skip = 50**
- 100 ≤ **R\[i\] ≤ 500**
- **R\[i\]** are generated uniformly randomly

### Test Plan #3

- **N = 200, S = 5000, skip = 25**
- 1 ≤ **R\[i\] ≤ 100**
- Radius of circles of Sereja is generated according to following probability distribution, denoted as *nice* distribution. Let **total** denote the sum of **log(r)** for **r** from 1 to 100. Probability of occurrence of radius **r** (takes values in the range \[1, 100\]) will be **log(r) / total**.
- **R\[i\]**'s of Dima are generated uniformly randomly

### Test Plan #4

- **N = 200, S = 5000, skip = 25**
- 1 ≤ **R\[i\] ≤ 100**
- Radius of circles of Sereja is generated uniformly randomly.
- **R\[i\]**'s of Dima are generated according to the *nice* probability distribution.

### Scoring

For each test case value **D** will be minimal distance between each pair of settled circles. If some pair of circles is intersected or some circle cover some other **D** is equal to **zero**.

For example, you can see that value of **D** will be 6.899495 for the sample example shown above.

Lets **S** will be sum of **D** among all tests and **W** is maximal value of **S** among all participants. Your displayed score will be equal to **S/W**

During the contest, your score will be be only of 20% of the files (i.e. 4 files out of 20), one for each group of test cases. Though verdict of your program will be decided by all the 20 files.

Please make sure to flush the standard output after you print the coordinates of the center. You can do this by fflush(stdout) in C++, System.out.flush() in Java.
