---
category_name: medium
problem_code: CATCHSM
problem_name: 'Catch Spider-Chef'
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
max_timelimit: '2'
source_sizelimit: '50000'
problem_author: kingofnumbers
problem_tester: null
date_added: 7-07-2016
tags:
    - kingofnumbers
time:
    view_start_date: 1468063200
    submit_start_date: 1468063200
    visible_start_date: 1468063200
    end_date: 1735669800
    current: 1493557506
layout: problem
---
All submissions for this problem are available.###  Read problems statements in [Mandarin Chinese](http://www.codechef.com/download/translated/SNCKFL16/mandarin/CATCHSM.pdf), [Russian](http://www.codechef.com/download/translated/SNCKFL16/russian/CATCHSM.pdf) and [Vietnamese](http://www.codechef.com/download/translated/SNCKFL16/vietnamese/CATCHSM.pdf) as well.

Spider-Chef is well revered in Chefland for his generous behavior of helping hungry people by collecting food for them by flying places to places. All was going good, until one day, a dark liquid from a far away galaxy came and turned the Spider-Chef into an evil person and his famous red suit turned into a dark suit. Now he just likes to scare children by flying around and shouting at them.

Spider-Chef has a set of **n** points: **p1**, **p2**, .., **pn** which will be determining his motion. He starts initially at coordinates **(0, 0)**. He shoots his web at point **p1** and revolves around this point in anti-clockwise direction till he traverses one quarter of the circle, i.e. till he covers 90' angle in anti-clockwise direction. After that, from that point, he will shoot a web at **p2** and will start revolving around **p2** in anti-clockwise fashion again for an angle of 90'. He does this for the entire set of **n** points. He stops after revolving 90' around **pn**.

When Bat-Chef learned about Spider-Chef's condition, he was extremely sad and wanted to catch Spider-Chef so that he can remove the dark liquid from Spider-Chef's body and turn him into a good person again. Unlike Spider-Chef, Bat-Chef can move in any way he desires. Bat-Chef does not want to delay things any more and wants to catch Spider-Chef as soon as possible. Help him in finding the minimum time required to catch the Spider-Chef.

Note that the speed of both Spider-Chef and Bat-Chef is same and is equal to 1 unit per second.

We are not quite sure about the initial position of Bat-Chef. So, we will ask **Q** queries. Each of the queries will contain a possible initial position of Bat-Chef. For each query, you have to tell minimum time required for Bat-Chef to catch Spider-Chef.

### Input

The first line contains a single integer **n** denoting the number of points

Each of the next **n** lines contains two space separated integers denoting the **x** and **y** coordinates of **i**-th point **pi**.

Next line contains a single integer **Q**.

Each of the next **Q** lines contains two space separated integers denoting the **x** and **y** coordinates of initial starting position of Bat-Chef.

### Output

For each test case, for each query, output a single line containing the minimum time required for Bat-Chef to catch Spider-Chef. Your answer will be considered correct if it has an absolute or relative error less than or equal to **10-6**.

### Constraints

- **1** ≤ **n** ≤ **1,000,000**
- **1** ≤ **Q** ≤ **100,000**
- **-107** ≤ **x** and **y** coordinates of all the points in the input (i.e. for all **pi** and initial query positions of Bat-Chef) ≤ **107**
- Spider-Chef can shoot his web no farther than 100 unit distance from his current place. Therefore, it is guaranteed that the distance between the point where he finishes the 90' revolution with **pi**, and **pi+1**, is atmost 100 units.

### Example

<pre><b>Input:</b>
<tt>2
-1 0
0 2
4
0 0
-2 1
2 0
10 10</tt>


<b>Output:</b>
<tt>0.00000000
1.2837616026
2.3803973373
12.7279220614</tt>



</pre>### Explanation
![](https://s3.amazonaws.com/codechef_shared/download/upload/SNCKFL16/2.png)**Example case 1.** Luckily initial position of Bat-Chef and Spider-Chef is precisely the same, so it won't take any time to Bat-Chef to catch Spider-Chef.
