---
category_name: easy
problem_code: HORSES
problem_name: 'Racing Horses'
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
max_timelimit: '3'
source_sizelimit: '50000'
problem_author: vamsi_kavala
problem_tester: laycurse
date_added: 2-07-2012
tags:
    - sep12
    - sorting
    - vamsi_kavala
editorial_url: 'http://discuss.codechef.com/problems/HORSES'
time:
    view_start_date: 1347346587
    submit_start_date: 1347346587
    visible_start_date: 1347346587
    end_date: 1735669800
    current: 1493558153
layout: problem
---
All submissions for this problem are available.Chef is very fond of horses. He enjoys watching them race. As expected, he has a stable full of horses. He, along with his friends, goes to his stable during the weekends to watch a few of these horses race. Chef wants his friends to enjoy the race and so he wants the race to be close. This can happen only if the horses are comparable on their skill i.e. the difference in their skills is less.

There are **N** horses in the stable. The skill of the horse **i** is represented by an integer **S\[i\]**. The Chef needs to pick 2 horses for the race such that the difference in their skills is _minimum_. This way, he would be able to host a very interesting race. Your task is to help him do this and report the minimum difference that is possible between 2 horses in the race.

### Input:

First line of the input file contains a single integer **T**, the number of test cases.
Every test case starts with a line containing the integer **N**.
The next line contains **N** space separated integers where the **i**-th integer is **S\[i\]**.
### Output:

For each test case, output a single line containing the minimum difference that is possible. ### Constraints:

<pre>
1 ≤ <b>T</b> ≤ 10
2 ≤ <b>N</b> ≤ 5000
1 ≤ <b>S[i]</b> ≤ 1000000000


</pre>### Example:
**Input:**```

1
5
4 9 1 32 13


<pre>**Output:**<pre>
3


</pre>**Explanation:** The minimum difference can be achieved if we pick horses with skills 1 and 4 for the race.